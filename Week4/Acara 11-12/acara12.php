<?php
abstract class HumanPerson
{
    abstract public function saygreet();
}

class englishLanguange extends HumanPerson
{
    public function saygreet()
    {
        return 'Hello Good Morning bro';
    }
}

class germanLanguage extends HumanPerson
{
    public function saygreet()
    {
        return 'Hallo Guten Morgen Freunde';
    }
}

class frenchLanguage extends HumanPerson
{
    public function saygreet()
    {
        return 'Bonjour les amis';
    }
}

//$person = array(new englishLanguange(), new germanLanguage(), new frenchLanguage());
$person1 = new englishLanguange;
echo 'Dia berkata :' . $person1->saygreet() . "<br>";

$person1 = new germanLanguage;
echo 'Dia berkata :' . $person1->saygreet() . "<br>";

$person1 = new frenchLanguage;
echo 'Dia berkata :' . $person1->saygreet() . "<br>";
