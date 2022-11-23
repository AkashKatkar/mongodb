<?php
    define('arr', ['A', 'K', 'A', 'S', 'H']);
    print_r(arr);
    echo '<br/>';

    class Student{
        public $name;
        public $pnum;

        public function __construct($name, $pnum){
            $this->name = $name;
            $this->pnum = $pnum;
        }

        public function studData(){
            echo 'My name is '.$this->name.'. Call me on '.$this->pnum.'.';
        }
    }
    $stud_object = new Student('Akash', '9075897125');
    $stud_object->studData();
?>