<?php 
	include('index.php');
 ?>
<div class="container">

	<?php
			$message = 'The fibonacci sequence is: <br />1<br />2<br />';
			$powerof = 0;
			$max = 10;
			$temp = $max;
			 
			if(isset($_GET['Go'])) {
			    $powerof = $_GET['Go'];}else{$powerof = 2;
			}
			 
			if($powerof > 100) {
			    $powerof = 100;
			    $message = 'Sorry, your input was too high. I converted it to the maximum value of 100.<br />The fibonacci sequence is: <br />1<br />2<br />';
			}
			 
			$i = 1;
			 
			for($i;$i<$powerof;$i++){
			    $max = $max * $temp;
			}
			 
			$x = 1;
			$y = 2;
			$z = $x + $y;
			 
			echo($message);
			 
			while($z < $max) {
			 
			    $z = $x + $y;
			    echo($z."<br />");
			    $x = $y;
			    $y = $z;
			}
		?>
</div>