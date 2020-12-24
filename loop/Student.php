<?php

class Student{
private $name;
private $level;


public function set_Name($name){
    $this->name = $name;
}

public function get_Name(){
    return $this->name;
}


}

$tomiwa = new Student;
  $tomiwa->set_Name("Tomiwa");
//   echo $tomiwa->get_Name();


class Customer{
    private $name;
    private $gender;

    public function __construct($name , $gender){
      echo("A " .__CLASS__. " Class created \n");
            $this->name = $name;
            $this->gender = $gender;

           
    }

    public function getUserInfo(){
        return "Hello " .$this->name;
    }
}
 $tommy = new Customer("Kenneth" , "Male");
    //  echo $tommy->getUserInfo();
    // var_dump($tommy)
?>