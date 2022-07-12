<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): string;
}

class SampleClass {
    use SampleTrait;

    //Harus compatible dengan sapmleFunction yang ada di SampleTrait
    public function sampleFunction(int $name): string
    {

    }
}
