<?php
class Utilisateur
{
    private $user_name;
    private $user_pass;

    //      CONSTRUCTOR

    public function __construct($new_user_name, $new_user_pass)
    {
        $this->setName($new_user_name);
        $this->setPass($new_user_pass);
    }

    //        GETTERS

    // get $user_name
    // type string

    public function getName()
    {
        return $this->user_name;
    }

    // get $user_pass
    // type string

    //public function getPass()
    //{
    //    return $this->user_pass;
    //}

    //        SETTERS

    // set $user_name
    // type string

    public function setName($new_user_name)
    {
        $this->user_name = $new_user_name;
    }

    // set $user_pass
    // type string

    public function setPass($new_user_pass)
    {
        $this->user_pass = $new_user_pass;
    }
}
