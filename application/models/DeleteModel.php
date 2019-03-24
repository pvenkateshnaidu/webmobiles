<?php

class DeleteModel extends CI_Model {
    
    
public function did_delete_row($id,$table){
  $this -> db -> where('id', $id);
  $this -> db -> delete($table);
  return true;
}
}