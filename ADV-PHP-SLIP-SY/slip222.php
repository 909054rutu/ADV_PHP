<?php

class Student {
    protected $rollNo;
    protected $name;
    protected $prn;

    public function __construct($rollNo, $name, $prn) {
        $this->rollNo = $rollNo;
        $this->name = $name;
        $this->prn = $prn;
    }

    public function displayStudentInfo() {
        echo "Roll No: " . $this->rollNo . "\n";
        echo "Name: " . $this->name . "\n";
        echo "PRN: " . $this->prn . "\n";
    }
}

class Marks extends Student {
    protected $mPHP;
    protected $mOS;
    protected $mCPP;
    protected $mNetworking;

    public function __construct($rollNo, $name, $prn, $mPHP, $mOS, $mCPP, $mNetworking) {
        parent::__construct($rollNo, $name, $prn);
        $this->mPHP = $mPHP;
        $this->mOS = $mOS;
        $this->mCPP = $mCPP;
        $this->mNetworking = $mNetworking;
    }
}

class Result extends Marks {
    private $totalMarks;
    private $percentage;
    private $grade;

    public function calculateResults() {
        $this->totalMarks = $this->mPHP + $this->mOS + $this->mCPP + $this->mNetworking;
        $this->percentage = $this->totalMarks / 4;
        $this->grade = $this->determineGrade($this->percentage);
    }

    private function determineGrade($percentage) {
        if ($percentage >= 90) return "A";
        if ($percentage >= 80) return "B";
        if ($percentage >= 70) return "C";
        if ($percentage >= 60) return "D";
        return "F";
    }

    public function displayResults() {
        $this->calculateResults();
        $this->displayStudentInfo();
        echo "Marks in PHP: " . $this->mPHP . "\n";
        echo "Marks in OS: " . $this->mOS . "\n";
        echo "Marks in C++: " . $this->mCPP . "\n";
        echo "Marks in Networking: " . $this->mNetworking . "\n";
        echo "Total Marks: " . $this->totalMarks . "\n";
        echo "Percentage: " . $this->percentage . "%\n";
        echo "Grade: " . $this->grade . "\n";
    }
}

// Menu driven interface
$exit = false;
while (!$exit) {
    echo "\nChoose an option:\n";
    echo "1. Accept Student Information\n";
    echo "2. Display Student Information and Results\n";
    echo "3. Exit\n";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Enter Roll No: ";
            $rollNo = trim(fgets(STDIN));
            echo "Enter Name: ";
            $name = trim(fgets(STDIN));
            echo "Enter PRN: ";
            $prn = trim(fgets(STDIN));
            echo "Enter Marks for PHP: ";
            $mPHP = intval(fgets(STDIN));
            echo "Enter Marks for OS: ";
            $mOS = intval(fgets(STDIN));
            echo "Enter Marks for C++: ";
            $mCPP = intval(fgets(STDIN));
            echo "Enter Marks for Networking: ";
            $mNetworking = intval(fgets(STDIN));

            $student = new Result($rollNo, $name, $prn, $mPHP, $mOS, $mCPP, $mNetworking);
            break;
        case 2:
            if (isset($student)) {
                $student->displayResults();
            } else {
                echo "No student data available. Please enter data first.\n";
            }
            break;
        case 3:
            $exit = true;
            break;
        default:
            echo "Invalid choice, please try again.\n";
    }
}

?>
