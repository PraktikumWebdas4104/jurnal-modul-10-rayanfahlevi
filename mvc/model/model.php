<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		var $host 	= "localhost";
		var $uname 	= "root";
		var $pass	= "";
		var $db 	= "maha";

		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
			
		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			
			$query="SELECT * FROM mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			
			$query="SELECT * FROM mahasiswa WHERE nim = '$nim' ";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query update nim, nama, angkatan, fakultas, prodi
			
			$query="UPDATE mahasiswa SET nama = '$nama', angkatan = '$angkatan', fakultas = '$fakultas', program = '$prodi' WHERE nim = '$nim'  ";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query="DELETE FROM mahasiswa WHERE nim = '$nim' ";
			return $this->execute($query);

		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query insert nim,nama, angkatan, fakultas, prodi
			$query="INSERT INTO mahasiswa(nim, nama, angkatan, fakultas, program) VALUES ('$nim','$nama','$angkatan','$fakultas','$prodi')";
			return $this->execute($query);

		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>