<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Technique
{
   public function array_to_obj($array, &$obj)
  {
    foreach ($array as $key => $value)
    {
      if (is_array($value))
      {
      $obj->$key = new stdClass();
      $this->array_to_obj($value, $obj->$key);
      }
      else
      {
        $obj->$key = $value;
      }
    }
  return $obj;
  }

public function arrayToObject($array)
{
 $object= new stdClass();
 return $this->array_to_obj($array,$object);
}
}
?>
