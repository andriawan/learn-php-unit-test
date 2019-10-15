<?php

require_once('OperasiHitung.php');

class OperasiHitungTest extends PHPUnit_Framework_TestCase {

  public function testTambah() {
	$operasi = new OperasiHitung();
	$a = 1;
	$b = 3;
	
	$hasil = $a + $b;
	
	$hasil_operasi = $operasi->tambah($a, $b);
	
	$this->assertTrue($hasil == $hasil_operasi);
	
  }
  
  public function testKurang() {
	$operasi = new OperasiHitung();
	$a = 1;
	$b = 3;
	
	$hasil = $a - $b;
	
	$hasil_operasi = $operasi->kurang($a, $b);
	
	$this->assertTrue($hasil == $hasil_operasi);
	
  }
  
  public function testBagi() {
	$operasi = new OperasiHitung();
	$a = 1;
	$b = 3;
	
	$hasil = $a / $b;
	
	$hasil_operasi = $operasi->bagi($a, $b);
	
	$this->assertTrue($hasil == $hasil_operasi);
	
  }
  
  public function testKali() {
	$operasi = new OperasiHitung();
	$a = 1;
	$b = 3;
	
	$hasil = $a * $b;
	
	$hasil_operasi = $operasi->kali($a, $b);
	
	$this->assertTrue($hasil == $hasil_operasi);
	
  }
  
}
?>