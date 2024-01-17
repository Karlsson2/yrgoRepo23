<?php
require __DIR__ . "/src/01.php";
require __DIR__ . "/src/03.php";
require __DIR__ . "/src/04.php";
require __DIR__ . "/src/05.php";
require __DIR__ . "/src/06.php";
$name = "Maria Eklöw";
$person = new Person($name);

$name = "Susan Johansson";


$employee = new Employee($name);

$employee->title = "principal";

printf(
    '%s is the %s at Yrgo',
    $employee->name,
    $employee->title,
);


$student = new Student("Johannes T");
$student->addGrade("A");
$student->addGrade("E");

printf(
    'The student %s is graded with the following grades: %s',
    $student->name,
    implode(', ', $student->grades),
);

$employee = new Employee("Susan Johnson");
$employee->setYearlySalary(684000);


printf(
    '%s earns %d kr a month at Yrgo',
    $employee->name,
    $employee->getMonthlySalary(),
);

$school = new School("Yrgo");
$school->addProgram(new Program("Digital Design"));
$school->addProgram(new Program("Webbutvecklare"));


echo '</p>at ' . $school->name . 'you can apply to the following programs: </p>';
foreach ($school->getPrograms() as $program) {
    echo "<li>" . $program->name . "</li>";
}

try {
    $server = new Server('Webbutvecklare', [
        new Channel('backend', 'text'),
        new Channel('frontend', 'editor'),
    ]);
} catch (Exception $e) {
    echo $e->getMessage();
}
