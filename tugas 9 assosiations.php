<!-- alfi nur inayati ningrum -->
<!-- 20051397063 -->
<!-- one to one -->

<?php
class Advertiser{
	// privar akun diinisialisasi dalam konstraktor dan tidak pernah diubah
	private $account;
	public	function __construct(){
		$this->account = new Account($this->this);
	}
	public	function getAccount(){
		return $this->account;
	}
}
class Account{
	// privar owner diinisialisasi dalam konstraktor dan tidak pernah diubah
	private $owner;
	public	function __construct($owner){
		$this->owner = $owner;
	}
	public	function getOwner(){
		return $this->owner;
	}
}