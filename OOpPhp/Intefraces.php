<?php

interface UserInterface
{
    public function add();
    public function delete();
    public function update();
    public function get();

}
// if the User class does not implement these methods it gives us an Error .
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