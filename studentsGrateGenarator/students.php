<?php

class Students{
    protected $id;
    protected $name;
    protected $department;
    function __construct($id, $name, $department)
    {
        $this->id = $id;
        $this->name = $name;
        $this -> department = $department;
    }
    function getId(){
        $this ->id;
    }
    function getName(){
        $this ->name;
    }
    function  getDepartment(){
        $this -> department;
    }
}
