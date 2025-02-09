<?php
/**
 * A class to create User objects.
 * 
 * Sam Scott, McMaster University, 2025
 */
class User
{
    private $firstname;
    private $lastname;
    private $student_id;

    function __construct($firstname, $lastname, $student_id)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->student_id = $student_id;
    }

    /**
     * Returns a string representation of the user object as a list item
     */
    function toListItem()
    {
        return "<li>$this->firstname $this->lastname</li>";
    }

        /**
     * Returns a string representation of the user object as a list item
     */
    function toLink($url)
    {
        return "<a href='$url?id=$this->student_id'>$this->firstname $this->lastname</a>";
    }
}
