<?php

namespace App\Libraries;
use App\Models\StudentModel;

class MyLibrary{

    // method for listing all data.
    public function accessAllStudents(){
        $student_obj= new StudentModel();
        return $student_obj->findAll();
    }

    // single student data.
    public function getSingleStudentData($student_id){
        $student_obj= new StudentModel();
        return $student_obj->where("id",$student_id)->first();
    }

    public function convertToSlug($string){
        $lower_string= strtolower($string);
        return str_replace(" ","-",$lower_string);
    }
}

?>