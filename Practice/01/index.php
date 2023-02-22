<?php
$names = ["roman", "razz", "harry"];
print_r($names);

$user = ["name" => "roman", "id" => 01, "gender" => "male"];
print($user["name"]);
echo "<br/>" . $user["name"] . " " . $user["id"] . " " . $user["gender"];

// constant
define("number", 10, false);
echo number;

// foreach
$names = array("roman", "razz", "harry");
echo "<br/>";
foreach ($names as $name) {
    echo $name . "<br/>";
}

// pass by reference
function increment(&$num)
{
    $num++;
}
$num = 10;
echo $num . "<br/>";
increment($num);
echo $num . "<br/>";
increment($num);
echo $num . "<br/>";

interface UserInterface
{
    public function get_id(): int;
    public function get_name(): string;
    public function get_gender(): string;
}

abstract class User
{
    private int $id;
    public string $name;
    public string $gender;

    public static $base_class = "User";

    function __construct($id, $name, $gender)
    {
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
    }

    public function get_id()
    {
        return $this->id;
    }

    abstract public function get_name();
    abstract public function get_gender();

    public static function get_base_class()
    {
        return self::$base_class;
    }
}

class Employee extends User
{
    public $salary;

    function __construct($id, $name, $gender, $salary)
    {
        $this->salary = $salary;
        parent::__construct($id, $name, $gender);
    }


    public function increase_salary($incremented_by)
    {
        $this->salary = $this->salary + $incremented_by;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_gender()
    {
        return $this->gender;
    }
}

class Teacher extends Employee
{
    public $subjects = [];

    function __construct(int $id, string $name, string $gender, int $salary, array $subjects)
    {
        parent::__construct($id, $name, $gender, $salary);
        $this->subjects = $subjects;
    }

    public function add_new_subject($subject)
    {
        array_push($this->subjects, $subject);
    }

    public function remove_subject($subject)
    {
        $this->subjects = array_filter($this->subjects, static function ($sub) {
            global $subject;
            return $sub != $subject;
        });
    }
}

class Student extends User
{
    public $roll;
    public $faculty;

    public $batch;

    public $teaches_by;

    function __construct(int $id, string $name, string $gender, int $roll, string $faculty, int $batch)
    {
        parent::__construct($id, $name, $gender);
        $this->roll = $roll;
        $this->faculty = $faculty;
        $this->batch = $batch;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_gender()
    {
        return $this->gender;
    }

    public function set_teaches_by(Teacher &$teacher)
    {
        $this->teaches_by = $teacher;
    }
}


$teacher = new Teacher(01, "Harry", "male", 300000, ["Cryptography", "DBMS", "C", "C++", "DSA"]);

$student = new Student(02, "Roman", "male", 25, "CSIT", 2076);
$student->set_teaches_by($teacher);

echo "<pre>";
print_r($student);
echo "</pre>";
echo $student->get_id();
echo "<br/>";
print_r($student->teaches_by->subjects);
echo "<br/>";
echo Student::$base_class;
echo "<br/>";
echo $student::$base_class;
