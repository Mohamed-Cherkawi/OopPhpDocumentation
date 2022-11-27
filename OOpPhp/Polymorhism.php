<?php
// Polymorhism
// with new kewyord we reserve a space in the memory .
// Overload in php doesn't exist . but in C# and Java we can .

class User {
    public function getUserRole(){
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