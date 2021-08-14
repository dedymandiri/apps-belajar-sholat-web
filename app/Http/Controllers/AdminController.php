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

    

    //---------------------------------------------------------------------halaman BERWUDHU admin
    public function wudhu(){
        return view('admin.berwudhu');
    }

    //tampil data
    public function lihatwudhu(){
        $hasil = Wudhu_Model::all();
        return view('admin.berwudhu',['liat'=>$hasil]);
    }

    public function tambahwudhu()
    {
	    return view('admin.input.input_wudhu');
    }

    //input data ke database
    public function storewudhu(Request $request)
    {

	    DB::table('tbl_wudhu')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('berwudhu');

    }

    //edit data
    public function editwudhu($id){
        $hasil = Wudhu_Model::where('id',$id)->get();
        return view('admin.edit.edit_wudhu',['liat'=>$hasil]);
    }

    // update data
    public function updatewudhu($id, Request $request)
    {
        $wudhu = [
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_wudhu')->where('id',$request->id)->update($wudhu);
        return redirect('berwudhu');
    }


    //hapus data
    public function hapuswudhu($id)
    {

	    DB::table('tbl_wudhu')->where('id',$id)->delete();


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

    public function tambahsubuh()
    {
	    return view('admin.input.input_subuh');
    }

    //input data ke database
    public function storesubuh(Request $request)
    {

	    DB::table('tbl_sholatsubuh')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('sholat_subuh');

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
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_sholatsubuh')->where('id',$request->id)->update($subuh);
        return redirect('sholat_subuh');
    }


    //hapus data
    public function hapussubuh($id)
    {

	    DB::table('tbl_sholatsubuh')->where('id',$id)->delete();


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

    public function tambahdzuhur()
    {
	    return view('admin.input.input_dzuhur');
    }

    //input data ke database
    public function storedzuhur(Request $request)
    {

	    DB::table('tbl_sholatdzuhur')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('sholat_dzuhur');

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
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_sholatdzuhur')->where('id',$request->id)->update($dzuhur);
        return redirect('sholat_dzuhur');
    }


    //hapus data
    public function hapusdzuhur($id)
    {

	    DB::table('tbl_sholatdzuhur')->where('id',$id)->delete();


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

    public function tambahashar()
    {
	    return view('admin.input.input_ashar');
    }

    //input data ke database
    public function storedashar(Request $request)
    {

	    DB::table('tbl_sholatashar')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('sholat_ashar');

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
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

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

    public function tambahmaghrib()
    {
	    return view('admin.input.input_maghrib');
    }

    //input data ke database
    public function storemaghrib(Request $request)
    {

	    DB::table('tbl_sholatmaghrib')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('sholat_maghrib');

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
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_sholatmaghrib')->where('id',$request->id)->update($maghrib);
        return redirect('sholat_maghrib');
    }


    //hapus data
    public function hapusmaghrib($id)
    {

	    DB::table('tbl_sholatmaghrib')->where('id',$id)->delete();


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
        return view('admin.sholat_ashar',['liat'=>$hasil]);
    }

    public function tambahisya()
    {
	    return view('admin.input.input_isya');
    }

    //input data ke database
    public function storedisya(Request $request)
    {

	    DB::table('tbl_sholatisya')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('sholat_isya');

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
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_sholatashar')->where('id',$request->id)->update($isya);
        return redirect('sholat_ashar');
    }


    //hapus data
    public function hapusisya($id)
    {

	    DB::table('tbl_sholatisya')->where('id',$id)->delete();


	    return redirect('sholat_isya');
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

    public function tambahtentang()
    {
	    return view('admin.input.input_tentang');
    }

    //input data ke database
    public function storetentang(Request $request)
    {

	    DB::table('tbl_tentangkami')->insert([
		'judul' => $request->judul,
		'deskripsi' => $request->deskripsi
        
	]);

	    return redirect('tentang_kami');

    }

    //edit data
    public function edittentang($id){
        $hasil = Tentang_Model::where('id',$id)->get();
        return view('admin.edit.edit_tentang',['liat'=>$hasil]);
    }

    // update data
    public function updatetentang($id, Request $request)
    {
        $wudhu = [
            'judul' => $request->judul,
		    'deskripsi' => $request->deskripsi

        ];

        DB::table('tbl_tentangkami')->where('id',$request->id)->update($wudhu);
        return redirect('tentang_kami');
    }


    //hapus data
    public function hapustentang($id)
    {

	    DB::table('tbl_tentangkami')->where('id',$id)->delete();


	    return redirect('tentang_kami');
    }
    //---------------------------------------------------------------------Batas halaman TENTANG KAMI admin




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
