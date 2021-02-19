<?php
  class MyCustomException extends Exception {
    private $error = '';

    public function __construct($error) {
      $this->error = $error;
    }

    public function showMyCustomException() {
      echo '<div style="background-color:#e74c3c; color: white; padding: 5px 15px; 
        border: 1px solid red; border-radius: 8px; ">';
        echo $this->error;
      echo '</di>';
    }
  }

  try {
    throw new MyCustomException('Esta é uma exceção de teste');

    // Error (PHP)
    // Exception (Programadores)
    // Custom (Programadores)
    
  } catch (MyCustomException $e) {
    $e->showMyCustomException();
  }

?>
