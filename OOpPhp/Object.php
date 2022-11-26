<?php
// Array Associative
$employee_detail_array = array(
    "name" => "John Doe",
    "position" => "Software Engineer",
    "address" => "53, nth street, city",
    "status" => "best"
);
  
// Display the array content
echo "<pre>";
print_r($employee_detail_array);
echo "</pre>";


// Object-styled definition of an employee  (stdClass)
$employee_object = new stdClass;
$employee_object->name = "John Doe";
$employee_object->position = "Software Engineer";
$employee_object->address = "53, nth street, city";
$employee_object->status = "Best";
      
// Display the employee contents
echo "<pre>";
print_r($employee_object);
echo "</pre>";


