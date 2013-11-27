<?php

//Laporan Kesalahan
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Asia/Jakarta');

/** Menambahkan include PHPExcel */
require_once 'Classes/PHPExcel.php';
require_once 'koneksi.php';

// Membuat Objek PHPExcel Baru
echo date('H:i:s') , " Membuat Objek PHPExcel Baru" , EOL;
$objPHPExcel = new PHPExcel();

// Pengaturan Properties Dokumen
echo date('H:i:s') , " Pengaturan Properties Dokumen" , EOL;
$objPHPExcel->getProperties()->setCreator("Deni Wahyu Utama")
							 ->setLastModifiedBy("Deni Wahyu Utama")
							 ->setTitle("Praktikum WEB")
							 ->setSubject("Praktikum WEB")
							 ->setDescription("Membuat Excel dengan Koneksi Database")
							 ->setKeywords("Excel dengan PHP")
							 ->setCategory("Menghasilkan File Excel");
							 
// Menambah Data
echo date('H:i:s') , " Menambah Data" , EOL;
$query = mysql_query('select nim, nama, alamat from mahasiswa');

$objPHPExcel->getActiveSheet()->setCellValue('E6', 'No');
$objPHPExcel->getActiveSheet()->setCellValue('F6', 'NIM');
$objPHPExcel->getActiveSheet()->setCellValue('G6', 'Nama');
$objPHPExcel->getActiveSheet()->setCellValue('H6', 'Alamat');

$i = 8;
$no= 1;
while($data=mysql_fetch_array($query)){
	$objPHPExcel->getActiveSheet()->setCellValue('E'.$i, $no);
	$objPHPExcel->getActiveSheet()->setCellValue('F'.$i, $data['nim']);
	$objPHPExcel->getActiveSheet()->setCellValue('G'.$i, $data['nama']);
	$objPHPExcel->getActiveSheet()->setCellValue('H'.$i, $data['alamat']);
	$i++;
	$no++;
}

$objPHPExcel->getActiveSheet()->getStyle('C6:K6')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C6:K6')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C6:K6')->getFill()->getStartColor()->setARGB('FF200893');
$objPHPExcel->getActiveSheet()->getStyle('D6:G6')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('D6:G6')->getFill()->getStartColor()->setARGB('FF200893');

$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(25);

$objPHPExcel->setActiveSheetIndex(0);

// Menambahkan Gambar
$objDrawing = new PHPExcel_Worksheet_Drawing();
$objDrawing->setName('Universitas Negeri Malang');
$objDrawing->setDescription('Logo UM');
$objDrawing->setPath('gambar/um.jpg');
$objDrawing->setCoordinates('A1');
$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

$objPHPExcel->getActiveSheet()->mergeCells('C1:K1');
$objPHPExcel->getActiveSheet()->setCellValue('C1', "UNIVERSITAS NEGERI MALANG");
$objPHPExcel->getActiveSheet()->mergeCells('C2:K2');
$objPHPExcel->getActiveSheet()->setCellValue('C2', "JL.SEMARANG");
$objPHPExcel->getActiveSheet()->mergeCells('C3:K3');
$objPHPExcel->getActiveSheet()->setCellValue('C3', "TEKNIK ELEKTRO");
$objPHPExcel->getActiveSheet()->mergeCells('C4:K4');
$objPHPExcel->getActiveSheet()->setCellValue('C4', "PENDIDIKAN TEKNIK INFORMATIKA");
$objPHPExcel->getActiveSheet()->mergeCells('C5:K5');
$objPHPExcel->getActiveSheet()->setCellValue('C5', "MAHASISWA BERPRESTASI");
$objPHPExcel->getActiveSheet()->getStyle('C1:K5')->getFont()->setName('Times New Roman');
$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setSize(16);
$objPHPExcel->getActiveSheet()->getStyle('C2')->getFont()->setSize(10);
$objPHPExcel->getActiveSheet()->getStyle('C3:K4')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('C5')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('C1:K5')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('A1:K5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

echo date('H:i:s') , " Penulisan Data Pada Format Microsoft Excel 2010" , EOL;
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
echo date('H:i:s') , " Penulisan Data ke dalam " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo date('H:i:s') , " Penulisan Data Berhasil" , EOL;
echo 'File dapat dilihat di ' , getcwd() , EOL;