<?php
  class TaskService {
    private $connection;
    private $task;
    
    public function __construct(Connection $connection, Task $task) {
      $this->connection = $connection->connect();
      $this->task = $task;
    }
    
    public function insert() { //create
      $query = 'insert into tb_tarefas(tarefa)values(:task)';
      $stmt = $this->connection->prepare($query);
      $stmt->bindValue(':task', $this->task->__get('task'));

      $stmt->execute();
    }

    public function index() { //read
      
    }

    public function update() { //update

    }

    public function delete() { //delete

    }
  }
?>
