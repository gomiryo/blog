<?php
trait BaseModel{
  private $title = "";

  function set_title($value){
    $this->title = $value;
  }

  function get_title(){
    return $this->title;
  }

}
?>
