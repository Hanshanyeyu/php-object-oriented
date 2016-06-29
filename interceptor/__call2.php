<?php
class Person
{

    public function getName()
    {
        return 'Suhua';
    }

    public function getAge()
    {
        return 26;
    }
}


class PersonWriter
{
    public function writeName(Person $person)
    {
        print $person->getName();
    }

    public function writeAge(Person $person)
    {
        print $person->getAge();
    }
}


$person = new Person();

$personWriter = new PersonWriter();
$personWriter->writeName($person);

$personWriter->writeAge($person);
