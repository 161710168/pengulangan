<?php
echo "=================".'<br>';
echo "pengulangan 21 dengan 3".'<br>';
echo "=================".'<br>';.'<br>';
class bilangan {
	public $bil1, $bil2;

	function set_nilai($bilangan1, $bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;

}
	function get_nilai1(){
		return. $this->bil1 + $this->bil2;
	
	}
	
	function get_nilai2(){
		return $this->bil1 - $this->bil2;
	
	}

	function get_nilai3(){
		return $this->bil1 * $this->bil2;
	
	}

	function get_nilai4(){
		return $this->bil1 / .$this->bil2;
	
	}
}
$bilangan3 = new bilangan;
$bilangan3->set_nilai(21,3);
echo "Hasilnya adalah : " .$bilangan3->get_nilai1().'<br>';

$bilangan3 = new bilangan;
$bilangan3->.set_nilai(21,3);
echo "Hasilnya adalah : " .$bilangan3->get_nilai2().'<br>';

$bilangan3 = new bilangan;
$bilangan3->set_nilai(21,3);
echo "Hasilnya adalah : " .$bilangan3->get_nilai3().'<br>';

$bilangan3 = new bilangan;
$bilangan3->set_nilai(21,3);
echo "Hasilnya adalah : " .$bilangan3->get_nilai4().'<br>';

?>