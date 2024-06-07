<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentModel;
use App\Libraries\MyLibrary;

class SiteController extends BaseController
{
    public function index()
    {
        // helper(["custom"]);

        $string = "How are you doing?";
        // echo $total_length= get_string_length($string);

        // $number= 10;
        // echo $total_square= get_square($number);

        // return view ("index",[
        //     "name"=>"Sharmili Das",
        //     "role"=>"Software Developer"
        // ]);

        $library= new MyLibrary();
        echo "<pre>"; //for formatting
        print_r($library->accessAllStudents());
        print_r($library->getSingleStudentData(3));
       
        echo $library->convertToSlug($string);
    }

    public function deleteStudent()
    {
        $student_obj= new StudentModel();
        $student_id=11;
        $student_obj->delete($student_id);
    }

    public function updateStudent()
    {
        $student_obj= new StudentModel();

        $updated_data=[
            "name"=>"john",
            "email"=>"john@gmail.com",
            "mobile"=>"234565432"
        ];

        $student_id = 11;

        echo $student_obj->update($student_id,$updated_data);
    }

    public function insertStudent()
    {
        $student_obj= new StudentModel();
        
        echo $student_obj->insert([
            "name"=>"John Doe",
            "email"=>"johndoe@email.in",
            "mobile"=>"1234567890"
        ]);
    }

    public function listStudents()
    {
        $student_obj= new StudentModel();

        //listing
        $students= $student_obj->findAll();

        echo "<pre>";
        print_r($students);
    }

    public function readSpecificStudent()
    {
        $student_id= 6;
        $student_obj= new StudentModel();

        $data=$student_obj->where("id",$student_id)->first();
        echo "<pre>";

        print_r($data);
    }
}
