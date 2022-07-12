<?php

//Mengecek apakah string mengandung kata tertentu
var_dump(str_contains("Restu Bagaskara", "Restu"));
var_dump(str_contains("Restu Bagaskara", "Bagaskara"));
var_dump(str_contains("Restu Bagaskara", "Joko"));

//Mengecek apakah string diawali kata tertentu
var_dump(str_starts_with("Restu Bagaskara", "Restu"));
var_dump(str_starts_with("Restu Bagaskara", "Bagaskara"));
var_dump(str_starts_with("Restu Bagaskara", "Joko"));

//Mengecek apakah string diakhiri kata tertentu
var_dump(str_ends_with("Restu Bagaskara", "Restu"));
var_dump(str_ends_with("Restu Bagaskara", "Bagaskara"));
var_dump(str_ends_with("Restu Bagaskara", "Joko"));
