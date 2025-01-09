<?php
/*
 * This PHP file just contains a class definition. You can use it in
 * another program by including it like this:
 * 
 * include "person.php";
 * 
 * The include statement pastes the included code into your file and then
 * runs it as if it was part of the original file. It's not an import 
 * statement like in Java.
 * 
 * Sam Scott, McMaster University, 2025
 */

 // Class definition for a Person
class Person
{
    // instance variables
    private $name;
    private $age;

    // constructor function must be named __construct
    // not the use of default values
    public function __construct($name, $age = -1)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Accessor and mutator functions
    public function get_name()
    {
        return $this->name;
    }

    public function get_age()
    {
        return $this->age;
    }

    public function increase_age($increment)
    {
        $this->age += $increment;
    }
}

// if your entire program is one big <?php tag, you don't need to close it