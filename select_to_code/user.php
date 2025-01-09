<?php
/**
 * A class to create User objects.
 * 
 * Sam Scott, Mohawk College, 2019
 */
class User
{
    private $firstname;
    private $lastname;
    private $id;

    function __construct($firstname, $lastname, $id)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->id = $id;
    }

    /**
     * Returns a string representation of the user object as a list item
     */
    function toListItem()
    {
        return "<li>$this->firstname $this->lastname</li>";
    }

    /**
     * returns the id
     */
    function getId() {
        return $this->id;
    }
}
