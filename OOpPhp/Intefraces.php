<?php
/*
   - Interfaces allow you to specify what methods a class should implement.
   - if the User class does not implement these methods it gives us an Error . 

*/
interface UserInterface
{
    public function add();
    public function delete();
    public function update();
    public function get();

}

class User implements UserInterface {
    public function getUserRole(){
        echo 'this user has a user role' ;
    }
    public function add() {
        echo 'add user' ;
    }
    public function get() {
        echo 'get User';
    }
    public function update(){
        echo 'update id' ;
    }
    public function delete()
    {
        echo 'Deleting user';
    }
}

/*
Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time
*/