<?php

// Create an arrow function that receives fitst name and last name, then returns the full name
$fullName=fn(string $firstName,string $lastName)=>$firstName.$lastName;
echo $fullName("youssef","ehab");