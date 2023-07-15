<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Materi;
use App\Models\Nilai;
use App\Models\User;
use App\Models\userHasCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpdeskController extends Controller
{
    public function formtambahmateri(){
        $data=Course::select('courses.*')->get();
        return view('helpdesk/tambahmateri',compact('data'));
    }
    public function inputmateri(Request $request){
        $materi = new Materi();
        $materi->materiname = $request->namamateri;
        $materi->status = $request->status;
        $materi->deskripsi = $request->deskripsi;
        $materi->media = $request->materi;
        $materi->course_id = $request->idcourse;
        $materi->save();

        return redirect(url('/formtambahmateri'))->with('success', 'Data user berhasil disimpan.');
    }
    public function showmateri (){
        $data = Materi::join('courses', 'course_id', '=', 'courses.id')
            ->select('courses.*','materis.*')
            ->get();
        return view('helpdesk/tampilmateri',compact('data'));
    }

    public function shownilai() {
        $data = Nilai::join('materis', 'materi_id', '=', 'materis.id')->join('users','user_id', '=', 'users.id')
            ->where('role','=','Peserta')
            ->select('nilais.*','materis.materiname','users.name','users.role')
            ->get();
        return view('helpdesk/nilaipeserta',compact('data'));
    }

    public function terimasiswa(){
        $data = User::select('users.*')->where('users.role', '=','Pengunjung')->get();
        $datacourse=Course::select('courses.*')->get();

        return view('helpdesk/terimasiswa',compact('data','datacourse'));
    }

    public function statussiswa(Request $request){
        $updateData = $request->input('listpeserta');
        $courseId = $request->input('idcourse');

        foreach ($updateData as $key => $id) {
            $status='Peserta';
            $data = User::find($id);
            $data->role = $status;
            $data->save();

            $userHasCourse = new userHasCourse();
            $userHasCourse->user_id = $id;
            $userHasCourse->course_id = $courseId;
            $userHasCourse->save();
        }

        return redirect(url('/terimasiswa'))->with('success', 'Data user berhasil disimpan.');
    }
    public function datapeserta(){
        $data = userHasCourse::join('users','user_id','=','users.id')->join('courses','course_id','=','courses.id')
        ->select('users.*','courses.coursename')
        ->get();

        return view('helpdesk/datapeserta',compact('data'));
    }
}
