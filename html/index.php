<!DOCTYPE html>
<html>
	
<head>
	<title>
		How to call PHP function
		on the click of a Button ?
	</title>
</head>

<body style="text-align:left;">
	
	<h1> <span style="color:green;">
		Front Page Student01: </span>  <span style="color:blue">your SID# "Student ID#" is 1</span>
	</h1>
     
        <h2>Lab2 Topology</h2>
           <img src="cl-lab2-topo.png" alt="Trulli" width="900" height="500">
	

	<h4>
		Please make your selection by clicking appropriate button
	</h4>
	
	<?php
        include('Net/SSH2.php');

		if(array_key_exists('button1', $_POST)) {
			button1();
		}
		else if(array_key_exists('button2', $_POST)) {
			button2();
		}
		function button1() {
                     
                     echo "details..." . "<br>";

                     $ssh = new Net_SSH2('10.26.192.72');
                     if (!$ssh->login('someuser', 'somepassword')) {
                         exit('Login Failed');
                     }
                     
                     ob_start();
                     
                     echo "<pre>";
                     print $ssh->exec('ping -c 5 google.com');
                     echo "</pre>";
                     
                     $value = ob_get_contents();
                     
                     ob_end_clean();
                     
                     echo $value;
                     echo nl2br ("\n");
                     
                     $pattern = "/0.0% packet loss/";
                     $match = preg_match($pattern, $value); 
                     
                     
                     if ($match == "1") {
                     echo "<h1 style='color:olive;'>Results: ping successful</h1>" ;
                     
                     } else {
                     echo "<h1 style='color:red;'>Results: ping NOT successful</h1>";
                     };

		}
		function button2() {
			echo " ";
		}
	?>

	<form method="post">
		<input type="submit" name="button1"
				class="button" value="Ping google.com" />
		
		<input type="submit" name="button2"
				class="button" value="Clear Screen" />
	</form>

<p> After Clicking Button please <b>wait</b> for the script to complete and update screen <br>
    <span style="color:blue"> Watch your browser tab for it to <b> stop spinning </b> </span>
</p>
</head>

</html>

