<?php
class Student {
    protected $ID = 123443;
    protected $name = 'ashraf';
    protected $email = 'ashraf@example.com';
    protected $mobile_number = 0777777777;


    function name(){
        return $this->name;
    }

    function mobile(){
        return $this->mobile_number;
    }

}


class Teacher extends Student {
    protected $salary = 800;
    protected $subjects = ['Arabic', 'English', 'Math', 'Science'];

    function salary(){
        return $this->salary;
    }

    function subjects(){
        return $this->subjects;
    }
}