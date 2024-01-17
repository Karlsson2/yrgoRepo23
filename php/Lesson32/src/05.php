<?php

declare(strict_types=1);

//Create the new class Program which accepts the public string $name. 
//Create another class School which also accepts a public string called $name. 
//The School class should also have the private array property $programs.
// Define a new method called addProgram which allows you to add a Program to the $programs array. 
//Remember to type hint the Program class. 
//When you're ready, create a new school called Yrgo and add the two programs Webbutvecklare and Digital Designer. 
//Define a method called getPrograms which you can use to access the $programs property on the School class since the property is private. 
//Within a <p> tag write the sentence At Yrgo you can apply to the following programs:. Yrgo should of course be dynamic. 
//Then list the programs within an unordered list just below the paragraph.

class Program
{
    public function __construct(public string $name)
    {
    }
}
class School
{
    public function __construct(public string $name)
    {
    }
    private array $programs = [];
    public function addProgram(Program $program)
    {
        $this->programs[] = $program;
    }
    public function getPrograms(): array
    {
        return $this->programs;
    }
}
