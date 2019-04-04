<?php 


	if (isset($_POST['submit1'])) {
		$value = $_POST['currency'];
		if ($value == "USD") {
			$price1 = "$149.99";
			$price2 = "$169.99";
			$price3 = "$169.99";
			$price4 = "$199.99";
			$price5 = "$199.99";
			$price6 = "$699.99";
		}elseif ($value == "NGN") {
			$price1 = "N149,990";
			$price2 = "N169,990";
			$price3 = "N169,990";
			$price4 = "N199,990";
			$price5 = "N199,990";
			$price6 = "N699,990";
		}
	}else {
		$price1 = "N149,990";
		$price2 = "N169,990";
		$price3 = "N169,990";
		$price4 = "N199,990";
		$price5 = "N199,990";
		$price6 = "N699,990";
	}


 ?>