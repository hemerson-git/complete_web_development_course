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
      $query = '
        SELECT a.id, a.tarefa, b.status 
        FROM tb_tarefas a
        LEFT JOIN tb_status b ON a.id_status = b.id
      ';
      $stmt = $this->connection->prepare($query);
      $stmt->execute();
      
      $tasks = $stmt->fetchAll(PDO::FETCH_OBJ);

      return $tasks;
    }

    public function show() { //read
      // $query select
    }

    public function update() { //update

    }

    public function delete() { //delete

    }
  }
?>
