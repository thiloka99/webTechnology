<?php
class Account{
	private $customer;
	private $accountNo;
	private $balance;
	public static $annuallnterestRate = 4;
	
	public function __construct($cus, $accNo, $b){
		$this->customer = $cus;
		$this->accountNo = $accNo;
		$this->balance = $b;
	}
	public function getBalance(){
		return $this->balance;
	}
	public function setlnitialBalance($amount){
		$this->balance = $amount;
	}
	public function deposite($amount){
		$this->balance = $this->balance + $amount;
	}
	public function withdrawal($amount){
		$this->balance = $this->balance - $amount;
	}
	public function calMonthlylnterest(){
		$interest = ($this->balance * (self::$annuallnterestRate/100))/12;
		$this->balance += $interest;
	}
	public function modifylnterestRate($rate){
		self:$annuallnterestRate = $rate;
	}
}

$AA = new Account("Nimal", 20155593, 1000);
echo print_r($AA);
echo "<br>";

$AA->deposite(500);
echo print_r($AA)."<br>";

$AA->withdrawal(700);
echo print_r($AA)."<br>";

//miss doing code
$AA->setlnitialBalance("2000");
$AA->withdrawal("300");
print($AA->getBalance());
print($AA::$annuallnterestRate);
print("<br>");
$AA->calMonthlylnterest();
$AA->modifylnterestRate(10);
print($AA::$annuallnterestRate);
print("<br>");
print($AA->getBalance());
?>