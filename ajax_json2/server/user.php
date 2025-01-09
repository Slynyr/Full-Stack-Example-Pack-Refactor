<?php

/**
 * A class to create User objects, implementing the JsonSerializable 
 * interface so that private members can get json encoded with the
 * json_encode function
 * 
 * Sam Scott, McMaster University, 2025
 */
class User implements JsonSerializable
{
    private $firstname;
    private $lastname;
    private $finalexam;

    function __construct($firstname, $lastname, $finalexam)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->finalexam = (int) $finalexam;
    }

    /**
     * Returns a string representation of the user object as a list item
     */
    function toListItem()
    {
        return "<li>$this->firstname $this->lastname</li>";
    }

    /**
     * Required by the JsonSerializable interface
     * Called by json_encode to make sure the private members
     * get included in the encoding.  
     */
    public function jsonSerialize()
    {
        return  get_object_vars($this);
    }
}
