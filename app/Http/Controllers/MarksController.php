<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'sub1' => ['required', 'number'],
            'sub2' => ['required', 'number'],
            'sub3' => ['required', 'number'],
            'sub4' => ['required', 'number'],
            'sub5' => ['required', 'number'],

        ]);
    }
    //
    public function calculate(Request $request){

             $request->input();
             $sub1 = $request->sub1;
             $sub2 = $request->sub2;
             $sub3 = $request->sub3;
             $sub4 = $request->sub4;
             $sub5 = $request->sub5;

             $totalMarks = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5);
             $percentage = ($totalMarks/500)*100;

             if ($percentage <= 100 && $percentage >= 80) {
                $grades = "A";
              } else if ($percentage <= 79 && $percentage >= 60) {
                $grades = "B";
              } else if ($percentage <= 59 && $percentage >= 40) {
                $grades = "C";
              } else {
                $grades = "F";
              }
              $message = "The percentage marks of student  ".$percentage."% and grade is ".$grades;
              
              return $message;
    }
}
