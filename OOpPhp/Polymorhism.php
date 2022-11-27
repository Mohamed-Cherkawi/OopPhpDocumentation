<?php
// Polymorhism
// with new kewyord we reserve a space in the memory .
// Overload in php doesn't exist . but in C# and Java we can .

/*********************  Overriding ********************/
/*
In overriding, both parent and child classes should have same 
function name with and number of arguments. 
It is used to replace parent method in child class. 
The purpose of overriding is to change the behavior of parent class method. 
The two methods with the same name and same parameter is called overriding.
*/
class User {
    public function getUserRole()
    {
        return 'this user has a user role' ;
    }
}

class Admin extends User {
    public function getUserRole()
    {
        return 'This admin has admin role ' ;
    }
}

// Overriding Function ;
$admin = new Admin();
echo $admin->getUserRole();

echo "\n \n";
/*********************  Overloading ********************/
/* 
Function overloading contains same function name and that function performs different 
task according to number of arguments.
*/
class Shape {
     
    // __call is magic function which accepts
    // function name and arguments
    function __call($name_of_function, $arguments) {
             
        // It will match the function name
        if($name_of_function == 'calculateArea') {
             
            switch (count($arguments)) {
                     
                // If there is only one argument
                // area of circle
                case 1:
                    return 3.14 * $arguments[0];
                         
                // IF two arguments then area is rectangle;
                case 2:
                    return $arguments[0]*$arguments[1];
            }
        }
    }
}
     
// Declaring a shape type object
$s = new shape;
     
// Function call
echo($s->calculateArea(2));

echo "\n";
// calling area method for rectangle
echo ($s->calculateArea(4, 2));