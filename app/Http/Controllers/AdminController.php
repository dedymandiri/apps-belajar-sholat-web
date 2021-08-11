<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pengguna_Model;
use App\Quiz_Model;

class AdminController extends Controller
{


    public function dashboard(){
        $hitung_user = count(Pengguna_Model::all());
        $hitung_latihan = count(Quiz_Model::all());
        return view('admin.dashboard',[
            'hitung_user'=>$hitung_user,
            'hitung_latihan'=>$hitung_latihan,

        
        ]);

        
    }


    //---------------------------------------------------------------------halaman login  admin
     public function login(){
        return view('admin.login.view_login');
    }

    //--------------------------------------------------------------------- batas halaman login  admin


    //---------------------------------------------------------------------halaman Pengguna  admin
    public function pengguna(){
        return view('admin.pengguna');
    }

    //tampil data
    public function lihatpengguna(){
        $hasil = Pengguna_Model::all();
        return view('admin.pengguna',['liat'=>$hasil]);
    }

    public function tambahpengguna()
    {
	    return view('admin.input.input_pengguna');
    }

    //input data ke database
    public function storepengguna(Request $request)
    {

	    DB::table('user')->insert([
		'name' => $request->name,
		'username' => $request->username,
		'password' => $request->password
	]);

	    return redirect('pengguna');

    }

    //edit data
    public function editpengguna($id){
        $hasil = Pengguna_Model::where('id',$id)->get();
        return view('admin.edit.edit_pengguna',['liat'=>$hasil]);
    }

    // update data
    public function updatepengguna($id, Request $request)
    {
        DB::table('user')->where('id',$request->id)->update([
            'name' => $request->name,
		    'username' => $request->username,
		    'password' => $request->password
        ]);
        //diarahkan ke halaman sejarah
        return redirect('pengguna');
    }


    //hapus data
    public function hapuspengguna($id)
    {

	    DB::table('user')->where('id',$id)->delete();


	    return redirect('pengguna');
    }
    //---------------------------------------------------------------------Batas halaman pengguna admin

    //---------------------------------------------------------------------halaman quiz  admin
    public function quiz(){
        return view('admin.quiz');
    }

    //tampil data
    public function lihatquiz(){
        $hasil = Quiz_Model::all();
        return view('admin.quiz',['liat'=>$hasil]);
    }

    public function tambahquiz()
    {
	    return view('admin.input.input_quiz');
    }

    //input data ke database
    public function storequiz(Request $request)
    {

	    DB::table('quiz')->insert([
		'materi' => $request->materi,
		'pertanyaan' => $request->pertanyaan,
        'pilihan_a' => $request->pilihan_a,
        'pilihan_b' => $request->pilihan_b,
        'pilihan_c' => $request->pilihan_c,
        'pilihan_d' => $request->pilihan_d
	]);

	    return redirect('quiz');

    }

    //edit data
    public function editquiz($id){
        $hasil = Quiz_Model::where('id_quiz',$id)->get();
        return view('admin.edit.edit_quiz',['liat'=>$hasil]);
    }

    // update data
    public function updatequiz($id, Request $request)
    {
        $quiz = [
            'materi' => $request->materi,
		    'pertanyaan' => $request->pertanyaan,
            'pilihan_a' => $request->pilihan_a,
            'pilihan_b' => $request->pilihan_b,
            'pilihan_c' => $request->pilihan_c,
            'pilihan_d' => $request->pilihan_d
        ];

        DB::table('quiz')->where('id_quiz',$request->id)->update($quiz);
        return redirect('quiz');
    }


    //hapus data
    public function hapusquiz($id)
    {

	    DB::table('quiz')->where('id_quiz',$id)->delete();


	    return redirect('quiz');
    }
    //---------------------------------------------------------------------Batas halaman quiz admin

//---------------------------------------------------------------------halaman Pengguna  admin
public function data_akun(){
    return view('admin.data_akun');
}

//tampil data
public function lihatdata_akun(){
    $hasil = Data_akun_Model::all();
    return view('admin.data_akun',['liat'=>$hasil]);
}

//edit data
public function editdata_akun($id){
    $hasil = Data_akun_Model::where('id_admin',$id)->get();
    return view('admin.edit.edit_data_akun',['liat'=>$hasil]);
}

// update data
public function updatedata_akun($id, Request $request)
{
    DB::table('admin')->where('id_admin',$request->id)->update([
        'username' => $request->username,
        'password' => $request->password
    ]);
    //diarahkan ke halaman sejarah
    return redirect('data_akun');
}

//---------------------------------------------------------------------Batas halaman pengguna admin


}
