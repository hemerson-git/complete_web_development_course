<?php
  require('./private/tarefa.model.php');
  require('./private/tarefa.service.php');
  require('./private/conexao.php');
  
  $action = isset($_GET['action']) ? $_GET['action'] : $action;
  
  $connection = new Connection();
  $task = new Task();
  
  switch ($action) {
    case 'insert':
      $task->__set('task', $_POST['task']);
      
      $taskService = new TaskService($connection, $task);
      $taskService->insert();

      header('Location: index.php?included=1');

      break;
    case 'recover':
      $taskService = new TaskService($connection, $task);
      $tasks = $taskService->index();

      break; 
  }
  
?>
