<?php
  // In a real aplication, this folder have to be outside htdocs folder

  class Tarefa {
    private $id;
    private $id_status;
    private $work;
    private $input_date;

    public function __construct($id, $id_status, $work, $input_date) {
      $this->id = $id;
      $this->id_status = $id_status;
      $this->work = $work;
      $this->input_date = $input_date;
    }
    
    public function __get($attr) {
      return $this->$attr;
    }

    public function __set($attr, $value) {
      $this->$attr = $value;
    }
  }
?>
