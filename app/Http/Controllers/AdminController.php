<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Pengguna_Model;
use App\Quiz_Model;
use App\Subuh_Model;
use App\Dzuhur_Model;
use App\Ashar_Model;
use App\Maghrib_Model;
use App\Isya_Model;
use App\Wudhu_Model;
use App\Tentang_Model;
use App\Profile_Model;


class AdminController extends Controller
{


    public function dashboard(){
        $hitung_user = count(Pengguna_Model::all());
        $hitung_subuh = count(Subuh_Model::all());
        $hitung_berwudhu = count(Wudhu_Model::all());
        $hitung_tentang = count(Tentang_Model::all());
        return view('admin.dashboard',[
            'hitung_user'=>$hitung_user,
            'hitung_subuh'=>$hitung_subuh,
            'hitung_berwudhu'=>$hitung_berwudhu,
            'hitung_tentang'=>$hitung_tentang

        
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

	    DB::table('tbl_soal')->insert([
		'materi' => $request->materi,
		'soal' => $request->soal,
        'a' => $request->a,
        'b' => $request->b,
        'c' => $request->c,
        'jwaban' => $request->jwaban
	]);

	    return redirect('quiz');

    }

    //edit data
    public function editquiz($id){
        $hasil = Quiz_Model::where('id',$id)->get();
        return view('admin.edit.edit_quiz',['liat'=>$hasil]);
    }

    // update data
    public function updatequiz($id, Request $request)
    {
        $quiz = [
            'materi' => $request->materi,
            'soal' => $request->soal,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'jwaban' => $request->jwaban
        ];

        DB::table('tbl_soal')->where('id',$request->id)->update($quiz);
        return redirect('quiz');
    }


    //hapus data
    public function hapusquiz($id)
    {

	    DB::table('quiz')->where('id',$id)->delete();


	    return redirect('quiz');
    }
    //---------------------------------------------------------------------Batas halaman quiz admin

    

    //---------------------------------------------------------------------halaman BERWUDHU admin
    public function wudhu(){
        return view('admin.berwudhu');
    }

    //tampil data
    public function lihatwudhu(){
        $hasil = Wudhu_Model::all();
        return view('admin.berwudhu',['liat'=>$hasil]);
    }


   //edit data
   public function editwudhu($id){
    $hasil = Wudhu_Model::where('id',$id)->get();
    return view('admin.edit.edit_wudhu',['liat'=>$hasil]);
}

// update data
public function updatewudhu($id, Request $request)
{
    DB::table('tbl_wudhu')->where('id',$request->id)->update([
        'judul_wudhu' => $request->judul_wudhu,
        'deskripsi_wudhu' => $request->deskripsi_wudhu
    ]);
    //diarahkan ke halaman sejarah
    return redirect('berwudhu');
}
    //---------------------------------------------------------------------Batas halaman BERWUDHU admin


    

    
    //---------------------------------------------------------------------halaman SHOLAT SUBUH   admin
    public function subuh(){
        return view('admin.sholat_subuh');
    }

    //tampil data
    public function lihatsubuh(){
        $hasil = Subuh_Model::all();
        return view('admin.sholat_subuh',['liat'=>$hasil]);
    }

    //edit data
    public function editsubuh($id){
        $hasil = Subuh_Model::where('id',$id)->get();
        return view('admin.edit.edit_subuh',['liat'=>$hasil]);
    }

    // update data
    public function updatesubuh($id, Request $request)
    {
        $subuh = [
            'judul_subuh' => $request->judul_subuh,
		    'deskripsi_subuh' => $request->deskripsi_subuh

        ];

        DB::table('tbl_sholatsubuh')->where('id',$request->id)->update($subuh);
        return redirect('sholat_subuh');
    }


    //---------------------------------------------------------------------Batas halaman SHOLAT SUBUH admin


    
    //---------------------------------------------------------------------halaman SHOLAT DZUHUR admin
    public function dzuhur(){
        return view('admin.sholat_dzuhur');
    }

    //tampil data
    public function lihatdzuhur(){
        $hasil = Dzuhur_Model::all();
        return view('admin.sholat_dzuhur',['liat'=>$hasil]);
    }

   
    //edit data
    public function editdzuhur($id){
        $hasil = Dzuhur_Model::where('id',$id)->get();
        return view('admin.edit.edit_dzuhur',['liat'=>$hasil]);
    }

    // update data
    public function updatedzuhur($id, Request $request)
    {
        $dzuhur = [
            'judul_dzuhur' => $request->judul_dzuhur,
		    'deskripsi_dzuhur' => $request->deskripsi_dzuhur

        ];

        DB::table('tbl_sholatdzuhur')->where('id',$request->id)->update($dzuhur);
        return redirect('sholat_dzuhur');
    }
    //---------------------------------------------------------------------Batas halaman SHOLAT DZUHUR admin


    
    //---------------------------------------------------------------------halaman SHOLAT ASHAR admin
    public function ashar(){
        return view('admin.sholat_ashar');
    }

    //tampil data
    public function lihatashar(){
        $hasil = Ashar_Model::all();
        return view('admin.sholat_ashar',['liat'=>$hasil]);
    }


    //edit data
    public function editashar($id){
        $hasil = Ashar_Model::where('id',$id)->get();
        return view('admin.edit.edit_ashar',['liat'=>$hasil]);
    }

    // update data
    public function updateashar($id, Request $request)
    {
        $ashar = [
            'judul_ashar' => $request->judul_ashar,
		    'deskripsi_ashar' => $request->deskripsi_ashar

        ];

        DB::table('tbl_sholatashar')->where('id',$request->id)->update($ashar);
        return redirect('sholat_ashar');
    }


    //hapus data
    public function hapusashar($id)
    {

	    DB::table('tbl_sholatashar')->where('id',$id)->delete();


	    return redirect('sholat_ashar');
    }
    //---------------------------------------------------------------------Batas halaman SHOLAT ASHAR admin


    //---------------------------------------------------------------------halaman SHOLAT MAGHRIB   admin
    public function maghrib(){
        return view('admin.sholat_maghrib');
    }

    //tampil data
    public function lihatmaghrib(){
        $hasil = Maghrib_Model::all();
        return view('admin.sholat_maghrib',['liat'=>$hasil]);
    }


    //edit data
    public function editmaghrib($id){
        $hasil = Maghrib_Model::where('id',$id)->get();
        return view('admin.edit.edit_maghrib',['liat'=>$hasil]);
    }

    // update data
    public function updatemaghrib($id, Request $request)
    {
        $maghrib = [
            'judul_maghrib' => $request->judul_maghrib,
		    'deskripsi_maghrib' => $request->deskripsi_maghrib

        ];

        DB::table('tbl_sholatmaghrib')->where('id',$request->id)->update($maghrib);
        return redirect('sholat_maghrib');
    }

    //---------------------------------------------------------------------Batas halaman SHOLAT MAGHRIB admin




    
    //---------------------------------------------------------------------halaman SHOLAT ISYA admin
    public function isya(){
        return view('admin.sholat_isya');
    }

    //tampil data
    public function lihatisya(){
        $hasil = Isya_Model::all();
        return view('admin.sholat_isya',['liat'=>$hasil]);
    }

    
    //edit data
    public function editisya($id){
        $hasil = Isya_Model::where('id',$id)->get();
        return view('admin.edit.edit_isya',['liat'=>$hasil]);
    }

    // update data
    public function updateisya($id, Request $request)
    {
        $isya = [
            'judul_isya' => $request->judul_isya,
		    'deskripsi_isya' => $request->deskripsi_isya

        ];

        DB::table('tbl_sholatashar')->where('id',$request->id)->update($isya);
        return redirect('sholat_ashar');
    }

    //---------------------------------------------------------------------Batas halaman SHOLAT ISYA admin

    

    //---------------------------------------------------------------------halaman TENTANG KAMI admin
    public function tentang(){
        return view('admin.tentang_kami');
    }

    //tampil data
    public function lihattentang(){
        $hasil = Tentang_Model::all();
        return view('admin.tentang_kami',['liat'=>$hasil]);
    }


    //edit data
    public function edittentang($id){
        $hasil = Tentang_Model::where('id',$id)->get();
        return view('admin.edit.edit_tentang',['liat'=>$hasil]);
    }

    // update data
    public function updatetentang($id, Request $request)
    {
        $tentang = [
            'judul_tentang' => $request->judul_tentang,
		    'deskripsi_tentang' => $request->deskripsi_tentang

        ];

        DB::table('tbl_tentangkami')->where('id',$request->id)->update($tentang);
        return redirect('tentang_kami');
    }


    //---------------------------------------------------------------------Batas halaman TENTANG KAMI admin




//---------------------------------------------------------------------halaman profile admin
public function profile(){
    return view('admin.profile');
}

//tampil data
public function lihatprofile(){
    $hasil = Profile_Model::all();
    return view('admin.profile',['liat'=>$hasil]);
}

//edit data
public function editprofile($id){
    $hasil = Profile_Model::where('id',$id)->get();
    return view('admin.edit.edit_profile',['liat'=>$hasil]);
}

// update data
public function updateprofile($id, Request $request)
{
    DB::table('admin')->where('id',$request->id)->update([
        'username' => $request->username,
        'name' => $request->name,
        'password' => $request->password
    ]);
    //diarahkan ke halaman sejarah
    return redirect('profile');
}

//---------------------------------------------------------------------Batas halaman profile admin


}
