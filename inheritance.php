<?php
class employee
{
    private $name, $age;

    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    function infoo()
    {
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->name . " " . $this->age;
    }
}


class desig extends employee
{
    private $designation, $salary;
    function info($d, $s)
    {
        $this->designation = $d;
        $this->salary = $s;
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name: " . $this->designation . " " . $this->salary;
        $this->infoo();
    }
}

$d = new desig("khubaib", 23);
$d->info("Manager", 23000);
