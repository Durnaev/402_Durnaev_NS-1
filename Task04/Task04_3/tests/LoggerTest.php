<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StudentsList;
use App\Student;
use App\FileLogger;
use App\DBLogger;

class LoggerTest extends TestCase
{
    public function testLog()
    {
        $fileLogger = new FileLogger('logs');
        $dbLogger = new DbLogger('logs');
        $studentsList = new StudentsList($fileLogger, $dbLogger);
        $this -> assertTrue(file_exists("./logs/logs.db"));
        $this -> assertTrue(file_exists("./logs/logs.txt"));
        $sizeLogsTxt = sizeof(file("./logs/logs.txt"));
        $student1 = new Student();
        $student2 = new Student();
        $student3 = new Student();
        $studentsList -> add($student1);
        $studentsList -> add($student2);
        $studentsList -> add($student3);
        $this -> assertSame($sizeLogsTxt + 3, sizeof(file("./logs/logs.txt")));
    }
}