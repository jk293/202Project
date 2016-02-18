#!/usr/bin/php

<?php

#_binary_read

# this is a comment
echo "begin script ".$argv[0].PHP_EOL;

class Student
{
    private $name;
    private $address;
    private $gpa;
    private $year;
    
    public $major;
    
    
    public function __construct($name)
    {
	  $this->name = $name;
    }
    
    public function printName()
    {
	  echo "name: ".$this->name.PHP_EOL;
    }
    
    public function setGPA($gpa)
    {
	  $this->gpa = $gpa;
    }
    public function printMajor()
    {
	  echo "Major: ".$this->major.PHP_EOL;
    }
}

$myStudent = new Student("Steve");
$myStudent->setGPA(2.3);
$myStudent->printName();
$myStudent->major = "Information Tech";





$var = "some value";
$number = 41234213424;
$realnumber = 12341234.1241241;
//this is also a comment, datebayo!
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5345.5345;
$arr[] = array("food","water","shelter",);

print_r($arr);

/*

this 
whole 
block
of comments


*/


echo "end script ".$argv[0].PHP_EOL;

?>