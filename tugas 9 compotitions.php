<!-- alfi nur inayati ningrum -->
<!-- 20051397063 -->




<?php
class Roda
{
	private $merk;
	private $ring;
	public	function __construct($merk, $ring)
	{
		$this->merk = $merk;
		$this->ring = $ring;
	}
	public	function getMerk()
	{
		return $this->merk;
	}
	public	function getRing()
	{
		return $this->ring;
	}
}
class Mobil
{
	public  $roda;
	//komposisi --> has a
	public $warna;
	public	function setWarna($warna)
	{
		$this->warna = $warna;
	}
	public	function getWarna()
	{
		return $this->warna;
	}
	public	function setRoda($m, $r)
	{
		$this->roda = new Roda($m, $r);
	}
	public	function getMerkRoda()
	{
		return $this->roda->getMerk();
	}
	public	function getRingRoda()
	{
		return $this->roda->getRing();
	}
}
class TesterRelasi
{
	public static
	function main($args)
	{
		//Komposisi
		$mobil = new Mobil();
		$mobil->setWarna("Biru");
		$mobil->setRoda("Bridgestone", 15);
		echo "Warna mobil : ".$mobil->getWarna(), "\n";
		echo "Merk roda mobil : ".$mobil->getMerkRoda(), "\n";
		echo "Ukuran ring roda : ".strval($mobil->getRingRoda()), "\n";
	}
}
TesterRelasi::main(array());

?>