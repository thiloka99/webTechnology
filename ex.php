2022-june-22
<?php
   echo "hello world";
   $variable;
   $variable=80;
   echo "<br>$variable";
   echo "<h2> PHP is fun!</h2>";
   echo "Hi",""," I am fine.";
   
   $var1 = "Sri";
   $var2 = "Lanka";
   echo "<br>".$var1." ".$var2;
   //// constant
   echo "<br>";
   define("my_const",18);
   print(my_const);
    echo "<br>---------------<br>";
	$var3=9;
	echo gettype($var3);
	$var3=(integer)$var3;//print 1 then it is true
	$y = intval($var3);
	echo is_int($var3);
	echo "<br>";
	echo gettype($var3);
	echo "<br>";
	
	$marks=89;
	$result="";
	($marks > 50) ? $result = "Pass" : $result = "Fail";
	echo "$result<br>";
	
	function sum($num1=4){ //default value 
		return 5 + $num1;
	}
	echo sum(20);//default value update in 20
	echo "<br>";
	
	$title = "Mr.";
	///////////////
	function printName(){
		$fname = "Roy";
		$lname = "Jhon";
		global $title;
		print ("$title $fname $lname");
	}
	/////////////
	#print($title);
	printName();
	
	echo "<br>";
	$x=8; $m=9;
	function add(){
		$x = 5;
		static $total = 0;
		$total = $total+$x;
		return $total;
	}
	echo add(), "<br>";
	echo add(), "<br>";
	echo add(), "<br>";
	
	echo "<br>--- Exercise(1) ----<br>";
	
	$evensum =0;
	$oddsum =0;
	for($i=0; $i<10; $i++){
		if($i%2 == 0){
			$evensum=$evensum+$i;
			
		}
		else{
			$oddsum=$oddsum+$i;
		}
	
	}
	echo "sum of the even numbers = ".$evensum."<br>";
	echo "sum of the odd numbers = ".$oddsum."<br>";
	
	echo "<br>--- Exercise(2) ----<br>";
	
	for($i=0; $i<51; $i++){
		if($i%3==0 and $i%5==0){
			print ("FizzBuzz<br>");
		}
		else if($i%3 == 0){
			print ("Fizz<br>");
		}
		else if($i%5 == 0){
			print ("Buzz<br>");
		}
		else{
			print ("$i<br>");
		}
		
	}
	
 ?>
  
