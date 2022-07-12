<?php

class Manager
{
    private function test(): void
    {

    }
}

class VicePresident extends Manager
{

    //Fungsi yang baru, tidak diturunkan dari fungsi test() pada parent(Manager)
    public function test(string $name): string
    {
        return "VP";
    }

}
