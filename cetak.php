<?php 
	
	require 'vendor/autoload.php';

	//impor file penghubung database
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$database = 'absensi';

	$koneksi = mysqli_connect($host, $user, $password, $database);

	//menggunakan kelas
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	//membuat object baru dari kelas Spreadsheet
	$spreadsheet = new Spreadsheet();

	//mendapatkan Sheet Active
	$sheet = $spreadsheet->getActiveSheet();


	//memberikan nilai ke kolom A baris 1
	$sheet->setCellValue('A1', 'Absensi Kelas XXX');
	$sheet->setCellValue('A2', 'No');
	$sheet->setCellValue('B2', 'Nama');
	$sheet->setCellValue('C2', 'Keterangan');
	$sheet->setCellValue('D2', 'Tanggal');

	//query record product ke database
	$semuaSiswa = mysqli_query($koneksi,'SELECT * FROM tb_siswa');
	$baris = 2;
	foreach ($semuaSiswa as $data)	{
		$baris++;
		$sheet->setCellValue('A'. $baris, $baris-1);
		$sheet->setCellValue('B'. $baris, $data['nama_siswa']);
		$sheet->setCellValue('C'. $baris, $data['ket_siswa']);
		$sheet->setCellValue('C'. $baris, $data[date('d M Y')]);
	} 

	//menulis file spreadsheet
	$writer = new Xlsx($spreadsheet);
	
	header('Content-Type: application/vnd.ms-excel');
	header('Content-Disposition: attachment; filename = "absensi.xlsx"');
	header('Chace-Control: max-age=0');
	$writer -> save('php://output');
?>