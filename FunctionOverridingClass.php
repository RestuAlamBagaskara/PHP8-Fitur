<?php

class ParentClass
{
    public function method(string $name)
    {

    }
}

class ChildClass extends ParentClass {

    //Tipe Data harus sama dengan method pada class
    public function method(int $name)
    {

    }

}
