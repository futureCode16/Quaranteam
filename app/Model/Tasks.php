<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Task extends Model
{
    //
    protected $table="Tasks";
    protected $fillable=[
        'sTasks',
        'NoOfStudents',
        'Center',
        'Difficulty',
    ];

    public function Saving_Tasks(Request $request){
        $tasks::create($request->all());
        return ["status"=>"success"];
    }

    public function getAllTasks(){
        return DB::table('Tasks')->select('sTasks','NoOfStudents','Center','Difficulty')->get();
    }
}
