<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BasicController extends Controller
{
    function onSelect(){
       $jsonData = DB::select('select * from students where name=?',['Mk Soikot']);
       $jsonString = json_encode($jsonData);
       $selectData = json_decode($jsonString);
      return view('select', ['selectkey' => $selectData]);
    }
    function onInsert(Request $req){
       $name= $req->input('name');
      $class= $req->input('class');
       $roll= $req->input('roll');

     $result= DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?,?,?)',[$name,$class,$roll]);
        if($result==true){
            return "Successfull";
        }else{
            return "Wrong";
        }

    }
    function onDelete(Request $req){
        $id =$req->input('id');

       $result =  DB::delete('DELETE FROM `students` WHERE `id`=?',[$id]);
       if($result==true){
           return "Delete Success";
       }else{
           return "Delete Failed";
       }
    }
    function onUpdate(Request $req){
        $id =$req->input('id');
        $name= $req->input('name');
        $class= $req->input('class');
        $roll= $req->input('roll');

      $result = DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name,$class,$roll,$id]);
      if($result==true){
          return "Update Successfully";
      }else{
          return "Update Failed";
      }
    }
}