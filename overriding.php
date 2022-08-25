<?php
class base
{
    public $name = "Parent Class";
    public function calc($a, $b)
    {
        echo "Sum: " . $a + $b;
    }
}


class derived extends base
{
    public $name = "Child Class";
    public function calc($a, $b)
    {
        echo "Sum: " . $a + $b;
    }
}

$test = new derived();

echo ($test->name) . "<br>";

$test->calc(2, 3);
