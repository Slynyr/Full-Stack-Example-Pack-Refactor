<!DOCTYPE html>
<!--
Demonstration of OOP in PHP
Sam Scott, McMaster University, 2025
-->
<?php
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

// This global function returns a view of a person object
function person_view($person)
{
    return "<p>{$person->get_name()}: {$person->get_age()} years old</p>";
}

// Creating and accessing objects
$p1 = new Person("Sam");
$p2 = new Person("Anne", 30);
$p1->increase_age(11);

?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions, Objects, Arrays</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>Objects</h1>
    <?= person_view($p1) ?>
    <?= person_view($p2) ?>

    <h1>var_dumps</h1>
    <!-- the <pre> element is useful here because it preserves the spacing -->
    <pre><?php var_dump($p1) ?></pre>
    <pre><?php var_dump($p2) ?></pre>
</body>

</html>