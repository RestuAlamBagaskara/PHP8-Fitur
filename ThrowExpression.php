<?php

function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression("Alam");
sayHelloExpression(null);