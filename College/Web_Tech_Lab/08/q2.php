<?php
interface PersonInterface
{
    public function getInfo();
}
abstract class PersonAbstract implements PersonInterface
{
    public $name;
    public $id;
    public $gender;

    public array $parents;

    public function __construct($id, $name, $gender)
    {
        $this->name = $name;
        $this->id = $id;
        $this->gender = $gender;
    }

    abstract public function getName();
    abstract public function getGender();

    abstract public function setParents(array $parents);

    abstract public function showParents();
}

class Person extends PersonAbstract
{
    public function getInfo()
    {
        echo "Id: " . $this->id . "\nName: " . $this->name . "\nGender: " . $this->gender . "<br/>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getGender()
    {
        return $this->gender;
    }
    public function setParents(array $parents)
    {
        $this->parents = $parents;
    }

    public function showParents()
    {
        echo "<pre>";
        print_r($this->parents);
        echo "</pre>";
    }
}

$dad = new Person(1, "krishna", "male");
$mom = new Person(2, "mina", "female");
$person = new Person(3, "roman", "male");
$parents = ['dad' => $dad, 'mom' => $mom];
$person->setParents($parents);
$person->getInfo();
$person->showParents();
