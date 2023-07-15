<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\userHasCourse;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function materistd(){
        $idUser=auth()->user()->id;
        $idcourse=userHasCourse::join('users','user_id','=','users.id')->join('courses','course_id','=','courses.id')
        ->where('user_id',$idUser)->pluck('courses.id')->toArray();

        $data = Materi::join('courses', 'course_id', '=', 'courses.id')->where('course_id',$idcourse)
            ->select('materis.*','courses.*')
            ->get();

        // echo json_encode($data);
        return view('peserta.daftarmateri',compact('data'));

    }
}
