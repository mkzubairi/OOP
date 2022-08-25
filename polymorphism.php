<?php
// Abstract Class
// abstract class class1
// {
//     abstract function func();
// }

// class class2 extends class1
// {
//     function func()
//     {
//         echo "Func2 of class2 <br>";
//     }
// }

// class class3 extends class1
// {
//     function func()
//     {
//         echo "Func3 of class3";
//     }
// }




// $c2 = new class2();
// $c3 = new class3();

// $c2->func();

// $c3->func();


// ----- Interface -----

interface class1
{
    function func();
}

class class2 implements class1
{
    function func()
    {
        echo "Func2 of class2 <br>";
    }
}

class class3 implements class1
{
    function func()
    {
        echo "Func3 of class3";
    }
}

$c2 = new class2();
$c3 = new class3();

$c2->func();

$c3->func();
