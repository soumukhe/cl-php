<!DOCTYPE html>
<html>
	
<head>
	<title>
		Cisco Live Lab 2
	</title>
        <link rel="icon" type="image/x-icon" href="cisco-live.png">
</head>

<body style="text-align:left;">
	
	<h1> <span style="color:green;">
		Front Page Student01: </span>  <span style="color:blue">your SID# "Student ID#" is 1</span>
	</h1>
     
        <h2>Cisco Live ltraci-2226: Lab2 Topology</h2>
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
		else if(array_key_exists('button3', $_POST)) {
			button3();
		}
		else if(array_key_exists('button4', $_POST)) {
			button4();
		}
		else if(array_key_exists('buttonx', $_POST)) {
			buttonx();
		}

                else if(array_key_exists('button5', $_POST)) {
                        button5();
                }

                else if(array_key_exists('button6', $_POST)) {
                        button6();
                }

                else if(array_key_exists('button7', $_POST)) {
                        button7();
                }
                else if(array_key_exists('button8', $_POST)) {
                        button8();
                }
	







        	function button1() {
                     
                     echo "details..." . "<br>";
		     echo "ping from: POD1_Web" . "<br>";
                     echo "ping to: &nbsp;&nbsp;&nbsp; POD1_app" . "<br>";



                     $ssh = new Net_SSH2('10.2.255.21');
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }
                     
                     ob_start();
                     
                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.21 -c 5 -W 1 -i .3');
                     echo "</pre>";
                     
                     $value = ob_get_contents();
                     
                     ob_end_clean();
                     
                     echo $value;
                     echo nl2br ("\n");
                     
		     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value); 
                     
                     
                     if ($match == "1") {
                     echo "<h1 style='color:olive;'>Results: ping successful</h1>" ;
                     
                     } else {
                     echo "<h1 style='color:red;'>Results: ping NOT successful</h1>";
                     };

		}



        	function button2() {
                     
                     echo "details..." . "<br>";
                     echo "ping from: POD1_Web" . "<br>";
                     echo "ping to: &nbsp;&nbsp;&nbsp;  POD2_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.21');
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }
                     
                     ob_start();
                     
                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.22 -c 5 -W 1 -i .3');
                     echo "</pre>";
                     
                     $value = ob_get_contents();
                     
                     ob_end_clean();
                     
                     echo $value;
                     echo nl2br ("\n");
                     
		     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value); 
                     
                     
                     if ($match == "1") {
                     echo "<h1 style='color:olive;'>Results: ping successful</h1>" ;
                     
                     } else {
                     echo "<h1 style='color:red;'>Results: ping NOT successful</h1>";
                     };

		}


        	function button3() {
                     
                     echo "details..." . "<br>";
                     echo "ping from: POD2_Web" . "<br>";
                     echo "ping to: &nbsp;&nbsp;&nbsp;  POD2_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.22');
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }
                     
                     ob_start();
                     
                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.22 -c 5 -W 1 -i .3');
                     echo "</pre>";
                     
                     $value = ob_get_contents();
                     
                     ob_end_clean();
                     
                     echo $value;
                     echo nl2br ("\n");
                     
		     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value); 
                     
                     
                     if ($match == "1") {
                     echo "<h1 style='color:olive;'>Results: ping successful</h1>" ;
                     
                     } else {
                     echo "<h1 style='color:red;'>Results: ping NOT successful</h1>";
                     };

		}



        	function button4() {
                     
                     echo "details..." . "<br>";
                     echo "ping from: POD2_Web" . "<br>";
                     echo "ping to: &nbsp;&nbsp;&nbsp;  POD1_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.22');
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }
                     
                     ob_start();
                     
                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.21 -c 5 -W 1 -i .3');
                     echo "</pre>";
                     
                     $value = ob_get_contents();
                     
                     ob_end_clean();
                     
                     echo $value;
                     echo nl2br ("\n");
                     
		     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value); 
                     
                     
                     if ($match == "1") {
                     echo "<h1 style='color:olive;'>Results: ping successful</h1>" ;
                     
                     } else {
                     echo "<h1 style='color:red;'>Results: ping NOT successful</h1>";
                     };

		}


                function button5() {

                     echo "details..." . "<br>";
                     echo "flow from: POD1_Web" . "<br>";
                     echo "flow to:  &nbsp;&nbsp;&nbsp; POD1_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.21');
                     $ssh->setTimeout(60);
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }


                     ob_start();

                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.21 -c 1 -W 1 -i .3');
                     echo "</pre>";

                     $value = ob_get_contents();

                     ob_end_clean();



                     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value);


                     if ($match == "1") {

                          echo "<pre>";
                          #print $ssh->exec("sudo ip vrf exec vrf-101  ssh cisco@10.4.201.22 'vmstat 1 120'  " );
                          print $ssh->exec("sudo ip vrf exec vrf-101 ssh cisco@10.4.201.21 'for i in {1..40}; do echo -n Flow:  $i ; date ; sleep 1; done' ");
                          echo "</pre>";
     
                          echo nl2br ("\n");
     
     
     		     }else {
                          echo "<h1 style='color:red;'>Results: Not Reachable cannot send flows</h1>";
                          };

                     }

                function button6() {

                     echo "details..." . "<br>";
                     echo "flow from: POD1_Web" . "<br>";
                     echo "flow to:  &nbsp;&nbsp;&nbsp; POD2_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.21');
                     $ssh->setTimeout(60);
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }


                     ob_start();

                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.22 -c 1 -W 1 -i .3');
                     echo "</pre>";

                     $value = ob_get_contents();

                     ob_end_clean();



                     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value);


                     if ($match == "1") {

                          echo "<pre>";
                          #print $ssh->exec("sudo ip vrf exec vrf-101  ssh cisco@10.4.201.22 'vmstat 1 120'  " );
                          print $ssh->exec("sudo ip vrf exec vrf-101 ssh cisco@10.4.201.22 'for i in {1..40}; do echo -n Flow:  $i ; date ; sleep 1; done' ");
                          echo "</pre>";
     
                          echo nl2br ("\n");
     
                          }else {
                          echo "<h1 style='color:red;'>Results: Not Reachable cannot send flows</h1>";
                          };
     		     

                }





                function button7() {

                     echo "details..." . "<br>";
                     echo "flow from: POD2_Web" . "<br>";
                     echo "flow to:  &nbsp;&nbsp;&nbsp; POD2_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.22');
                     $ssh->setTimeout(60);
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }



                     ob_start();

                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.22 -c 1 -W 1 -i .3');
                     echo "</pre>";

                     $value = ob_get_contents();

                     ob_end_clean();



                     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value);


                     if ($match == "1") {


                          echo "<pre>";
                          #print $ssh->exec("sudo ip vrf exec vrf-101  ssh cisco@10.4.201.22 'vmstat 1 120'  " );
                          print $ssh->exec("sudo ip vrf exec vrf-101 ssh cisco@10.4.201.22 'for i in {1..40}; do echo -n Flow:  $i ; date ; sleep 1; done' ");
                          echo "</pre>";
     
        		  echo nl2br ("\n");

                          }else {
                          echo "<h1 style='color:red;'>Results: Not Reachable cannot send flows</h1>";
                          };




                }


                function button8() {

                     echo "details..." . "<br>";
                     echo "flow from: POD2_Web" . "<br>";
                     echo "flow to:  &nbsp;&nbsp;&nbsp; POD1_app" . "<br>";

                     $ssh = new Net_SSH2('10.2.255.22');
                     $ssh->setTimeout(60);
                     if (!$ssh->login('some user', 'some password')) {
                         exit('Login Failed');
                     }



                     ob_start();

                     echo "<pre>";
                     print $ssh->exec('sudo ip vrf exec vrf-101 ping 10.4.201.21 -c 1 -W 1 -i .3');
                     echo "</pre>";

                     $value = ob_get_contents();

                     ob_end_clean();



                     $pattern = "/(?<![\w\d])0% packet loss(?![\w\d])/";
                     $match = preg_match($pattern, $value);


                     if ($match == "1") {

                          echo "<pre>";
                          #print $ssh->exec("sudo ip vrf exec vrf-101  ssh cisco@10.4.201.22 'vmstat 1 120'  " );
                          print $ssh->exec("sudo ip vrf exec vrf-101 ssh cisco@10.4.201.21 'for i in {1..40}; do echo -n Flow:  $i ; date ; sleep 1; done' ");
                          echo "</pre>";
         		  echo nl2br ("\n");


                          }else {
                          echo "<h1 style='color:red;'>Results: Not Reachable cannot send flows</h1>";
                          };




                }





		function buttonx() {
			echo " ";
		}
	?>

	<form method="post">
		<input type="submit" name="button1"
				class="button" value="Ping POD1_Web-2-POD1_App" />

		<input type="submit" name="button2"
				class="button" value="Ping POD1_Web-2-POD2_App" />
		
		<input type="submit" name="button3"
				class="button" value="Ping POD2_Web-2-POD2_App" />

		<input type="submit" name="button4"
				class="button" value="Ping POD2_Web-2-POD1_App" />

                <input type="submit" name="buttonx" style="background-color: orange; color: black"
                                class="button" value="Clear Screen" /><br><br>
               
                <span style="color:blue"> <b>The Flow buttons below will take a minute to complete.  Please be patient... </b> </span><br>


                <input type="submit" name="button5" style="height:100px; width:195px; background-color: green; color: white"
                                class="button" value= "Flow Pod1_Web-2-Pod1_App&#13;&#10;Please be patient&#13;&#10;will run for 40 seconds" style="text-align:center;" />

                <input type="submit" name="button6" style="height:100px; width:195px; background-color: green; color: white"
                                class="button" value= "Flow Pod1_Web-2-Pod2_App&#13;&#10;Please be patient&#13;&#10;will run for 40 seconds" style="text-align:center;" />


                <input type="submit" name="button7" style="height:100px; width:195px; background-color: green; color: white"
                                class="button" value= "Flow Pod2_Web-2-Pod2_App&#13;&#10;Please be patient&#13;&#10;will run for 40 seconds" style="text-align:center;" />


                <input type="submit" name="button8" style="height:100px; width:195px; background-color: green; color: white"
                                class="button" value= "Flow Pod2_Web-2-Pod1_App&#13;&#10;Please be patient&#13;&#10;will run for 40 seconds" style="text-align:center;" />







	</form>

<p> After Clicking Button please <b>wait</b> for the script to complete and update screen <br>
    <span style="color:blue"> Watch your browser tab for it to <b> stop spinning </b> </span>
</p>
<i> Front page created by Soumitra Mukherji </i>
</head>

</html>

