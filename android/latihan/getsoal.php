<?php
 
class DBOperations
{
    private $con;
 
    function __construct()
    {
        require_once dirname(_FILE_) . '\DBConnect.php';
        $db = new DBConnect();
        $this->con = $db->connect();
    }


	//getNomor
	public function getNomor(){
		$stmt = $this->con->prepare("SELECT * FROM tbl_soal");
		$stmt->execute();
		$stmt->bind_result($id_, $materi, $soal, $a, $b, $c, $gambar);
		$nomorPanggilan = array();
		
		while($stmt->fetch()){
			$temp = array();
			$temp['id'] = $id; 
			$temp['materi'] = $materi;
			$temp['soal'] = $soal;
            $temp['a'] = $a;
			$temp['b'] = $b;
            $temp['b'] = $c;
			$temp['gambar'] = $gambar;
			array_push($nomorPanggilan, $temp);
		}
		return $nomorPanggilan; 
	}
}