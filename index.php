<?php
interface A
{
    function hello();
    function hi($a);
}

interface B
{
    function bye();
}


class C implements A, B
{
    private $name, $age;
    public function hello()
    {
        echo 'Hello<br>';
    }
    public function hi($a)
    {
        echo $a . "<br>";
    }
    public function bye()
    {
        echo "Bye";
    }
}

$c = new C();
$c->hello();
$c->hi("This is hi function");
$c->bye();


/*
Suppose We have 2 classes A, B and we have a 3rd class C. We want to inherit A, B to C but we cannot do it by inheritance. For this we use interfaces.
an Interface is just like an abstrtct class but there is a difference that an abstract class only have one abstract method but interface can have more than one abstract methods.
we us "Interface" keyword to create an interface.
in Interface thre can only be the prototypes or declerations of the methods, we have to define the methods in the drived class.
We can not create object of an interface like a class.
We can use access modifier with the methods declare in an interface.

*/