<?php

//Digunakan untuk kasus switch case yang sederhana

$value = "A";
$result = "";

$result = match ($value){
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda salah jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

// Melakukan pegeekan kondisi yang tidak equals
//Mirip seperti ternary tapi lebih banyak

$value = 73;

$result = match (true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Pak. Alam";

$result = match (true){
    str_contains($name, "Pak.") => "Hello Pak",
    str_contains($name, "Bu.") => "Hello Bu",
    default => "Hello"
};

echo $result . PHP_EOL;