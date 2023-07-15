<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Nilai;
use App\Models\userHasCourse;
use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function showformnilai(){
        $idUser=auth()->user()->id;

        $idhascourse=userHasCourse::join('courses','course_id','=','courses.id')
        ->where('user_id','=',$idUser)->select('courses.id')->get();

        $datamateri=Materi::select('materis.*')
        ->whereIn('course_id',$idhascourse->pluck('id'))
        ->whereIn('status',['Tugas','Quiz','Ujian'])
        ->get();

        $datapeserta=userHasCourse::join('users','user_id','=','users.id')
        ->where('course_id',$idhascourse->pluck('id'))->where('role','Peserta')->select('users.*')->get();

        return view('pengajar/inputnilai',compact('datamateri','datapeserta'));
    }

    public  function inputnilai(Request $request){
        $materi = json_decode($request->idmateri,true);

        $idmateri = $materi['id'];
        $statusmateri = $materi['status'];

        $iduser=$request->iduser;


        $nilai= Nilai::select('nilais.*')->where('user_id', $iduser)->first();

        if (!$nilai) {
            $nilai = new Nilai();
            $nilai->user_id = $iduser;
            $nilai->materi_id = $idmateri;

            if ($statusmateri == 'Tugas') {
                $nilai->nilaiTugas = $request->nilai;
            }

            if ($statusmateri == 'Quiz') {
                $nilai->nilaiQuiz = $request->nilai;
            }

            if ($statusmateri == 'Ujian') {
                $nilai->nilaiUjian = $request->nilai;
            }

            $nilai->save();
        } else {
            $data = Nilai::where('user_id', $iduser)->first();

            if ($statusmateri == 'Tugas') {
                $data->nilaiTugas = $request->nilai;
            }

            if ($statusmateri == 'Quiz') {
                $data->nilaiQuiz = $request->nilai;
            }

            if ($statusmateri == 'Ujian') {
                $data->nilaiUjian = $request->nilai;
            }

            $data->save();
        }


        // if($nilai){
        //     $nilai = new Nilai();
        //     $nilai->user_id = $iduser;
        //     $nilai->materi_id = $idmateri;

        //     if($statusmateri=='Tugas'){
        //         $nilai->nilaiTugas = $request->nilai;
        //         $nilai->save();
        //     }
        //     if ($statusmateri=='Quiz') {
        //         $nilai->nilaiQuiz = $request->nilai;
        //         $nilai->save();
        //     }

        //     if ($statusmateri=='Ujian') {
        //         $nilai->nilaiUjian = $request->nilai;
        //         $nilai->save();
        //     }
        // }
        // else{
        //     if($statusmateri=='Tugas'){
        //         $data = Nilai::where('user_id','=',$iduser)->where('materi_id','=',$idmateri)->first();
        //         $data->nilaiTugas = $request->nilai;
        //         $data->save();
        //     }
        //     if ($statusmateri=='Quiz') {
        //         $data = Nilai::where('user_id','=',$iduser)->where('materi_id','=',$idmateri)->first();
        //         $data->nilaiQuiz = $request->nilai;
        //         $data->save();
        //     }
        //     if ($statusmateri=='Ujian') {
        //         $data = Nilai::where('user_id','=',$iduser)->where('materi_id','=',$idmateri)->first();
        //         $data->nilaiUjian = $request->nilai;
        //         $data->save();
        //     }
        // }

        return redirect(url('/showformnilai'))->with('success', 'Data user berhasil disimpan.');
        // echo json_encode($statusmateri);
    }
}
