<?php
  require('./private/tarefa.model.php');
  require('./private/tarefa.service.php');
  require('./private/conexao.php');

  echo '<pre>';
    print_r($_POST);
  echo '</pre>';

  
  if (isset($_GET['action']) && $_GET['action']) {
    $task = new Task();
    $task->__set('task', $_POST['task']);
    
    $connection = new Connection();
  
    $taskService = new TaskService($connection, $task);
    $taskService->insert();
  }
  


  header('Location: nova_tarefa.php?included=1');
?>
