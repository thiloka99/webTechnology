<?php
   session_start();
   $user = array("firstname"=>"Raj", "age"=>26, "gender"=>"Male");
  // echo serialize($user);
   $_SESSION["user"] = $user;
  // session_write_close();
?>
   <a href="session.php?action=rem">Remove session data </a>
   
<?php
   if(isset($_GET["action"]) and $_GET["action"] == "rem"){
	  $_SESSION = array();// ""
	  session_destroy();//xamp/temp ekata gihim balanna eke notpadd eke athi array eke wisthara tika, passe remove session dunnama ara temp folder eke aea array eke wisthara remove wenawa
	 // or unset($_SESSION["user"]); // meketh ekamai wenne
   }
  
?>