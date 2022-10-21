<?php
class PublicPerson
{
    public $name;
    function set_name($new_name)
    {
        $this->name = $new_name;
    }
    function get_name()
    {
    }
}

class PrivatePerson
{
    public $name2;
    function set_name2($new_name2)
    {
        $this->name = $new_name2;
    }
    function get_name2()
    {
    }
}

class ProtectedPerson
{
    public $name3;
    function set_name3($new_name3)
    {
        $this->name = $new_name3;
    }
    function get_name3()
    {
    }
}
