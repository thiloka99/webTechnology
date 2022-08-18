<?php

class Person{
	private $name;
	private $age;
	private $gender;
	const value = 100;
	
	public function __construct($n, $a, $g){
		$this->name = $n; // "this->" daanna one
		$this->age = $a;
		$this->gender = $g;
		
	}
	public function returnValue(){
		return Person::value; // p1 nge start valu eka 100, p1 geth start value eka 100, eka wenas wenne naha
		//return $this->value;
	}
	
	public function setName($n){
		$this->name = $n;
	}
	public function getName(){
		return $this->name;
	}
}

$p1 = new Person("Jenny", 20, "Female"); // object hadanne mehema
$p2 = new Person("Nayani", 19, "Female");
/*echo print ($p1->name);//private ain karala public dammama print wenawa ..... mokada private hinda class eke pita wada karanne naha ---- print eka ain kroth 1 print wena eka nathi wenawa
echo "<br>";*/
$p1->setName("john");
print($p1->getName());//private thiyeddima print karanna nm  getter setter method daanna ona
echo "<br>";


echo print_r($p1); // hadapu object eka print karanawa
echo "<br>";
echo print_r($p2);
?>