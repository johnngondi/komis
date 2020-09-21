<?php
$cipherletter = "";
$ciphernopre = "";
$cipherno = "";
$cipherword = "";
$ciphertext = "";

function cipherit($letterno,$a=5,$b=8)
{
	if ($letterno <= 25) {

		$ciphernopre = ($a*$letterno)+$b;
		$cipherno = fmod($ciphernopre, 26);

		if ($cipherno >= 26) {
			$cipherno = $cipherno - 26;
		}

		if ($cipherno == 0) {
		 	$cipherletter = "a";
		}elseif ($cipherno == 1) {
		 	$cipherletter = "b";
		}elseif ($cipherno == 2) {
		 	$cipherletter = "c";
		}elseif ($cipherno == 3) {
		 	$cipherletter = "d";
		}elseif ($cipherno == 4) {
		 	$cipherletter = "e";
		}elseif ($cipherno == 5) {
		 	$cipherletter = "f";
		}elseif ($cipherno == 6) {
		 	$cipherletter = "g";
		}elseif ($cipherno == 7) {
		 	$cipherletter = "h";
		}elseif ($cipherno == 8) {
		 	$cipherletter = "i";
		}elseif ($cipherno == 9) {
		 	$cipherletter = "j";
		}elseif ($cipherno == 10) {
		 	$cipherletter = "k";
		}elseif ($cipherno == 11) {
		 	$cipherletter = "l";
		}elseif ($cipherno == 12) {
		 	$cipherletter = "m";
		}elseif ($cipherno == 13) {
		 	$cipherletter = "n";
		}elseif ($cipherno == 14) {
		 	$cipherletter = "o";
		}elseif ($cipherno == 15) {
		 	$cipherletter = "p";
		}elseif ($cipherno == 16) {
		 	$cipherletter = "q";
		}elseif ($cipherno == 17) {
		 	$cipherletter = "r";
		}elseif ($cipherno == 18) {
		 	$cipherletter = "s";
		}elseif ($cipherno == 19) {
		 	$cipherletter = "t";
		}elseif ($cipherno == 20) {
		 	$cipherletter = "u";
		}elseif ($cipherno == 21) {
		 	$cipherletter = "v";
		}elseif ($cipherno == 22) {
		 	$cipherletter = "w";
		}elseif ($cipherno == 23) {
		 	$cipherletter = "x";
		}elseif ($cipherno == 24) {
		 	$cipherletter = "y";
		}elseif ($cipherno == 25) {
		 	$cipherletter = "z";
		}

	}else{
			if ($letterno == 100) {
				$cipherletter = "?";
			}elseif ($letterno == 101) {
				$cipherletter = "%";
			}elseif ($letterno == 102) {
				$cipherletter = "@";
			}elseif ($letterno == 103) {
				$cipherletter = ":";
			}elseif ($letterno == 104) {
				$cipherletter = "*";
			}elseif ($letterno == 105) {
				$cipherletter = "#";
			}elseif ($letterno == 106) {
				$cipherletter = "$";
			}elseif ($letterno == 107) {
				$cipherletter = "^";
			}elseif ($letterno == 108) {
				$cipherletter = "!";
			}elseif ($letterno == 109) {
				$cipherletter = "+";
			}elseif ($letterno == 110) {
				$cipherletter = "=";
			}elseif ($letterno == 111) {
				$cipherletter = "~";
			}elseif ($letterno == 112) {
				$cipherletter = "`";
			}elseif ($letterno == 113) {
				$cipherletter = ")";
			}elseif ($letterno == 114) {
				$cipherletter = "(";
			}elseif ($letterno == 115) {
				$cipherletter = "_";
			}
	}

	return $cipherletter;
}

function encrypttext($text,$a=5,$b=8)
{
	$ciphertext = "";
	$cipherword = "";
	//split the sentence into words
	$arrays = explode(" ",$text);
	$totalwords = count($arrays);

	//split the words into letter
	for ($i=0; $i < $totalwords; $i++) { 
		$noofletters = strlen($arrays[$i]);
		//get letters

		for ($j=0; $j < $noofletters; $j++) { 
			//convert letter into numbers
			$letter = $arrays[$i][$j];

			if ($letter == "a") {
				$letterno = 0;
			}elseif ($letter == "b") {
				$letterno = 1;
			}elseif ($letter == "c") {
				$letterno = 2;
			}elseif ($letter == "d") {
				$letterno = 3;
			}elseif ($letter == "e") {
				$letterno = 4;
			}elseif ($letter == "f") {
				$letterno = 5;
			}elseif ($letter == "g") {
				$letterno = 6;
			}elseif ($letter == "h") {
				$letterno = 7;
			}elseif ($letter == "i") {
				$letterno = 8;
			}elseif ($letter == "j") {
				$letterno = 9;
			}elseif ($letter == "k") {
				$letterno = 10;
			}elseif ($letter == "l") {
				$letterno = 11;
			}elseif ($letter == "m") {
				$letterno = 12;
			}elseif ($letter == "n") {
				$letterno = 13;
			}elseif ($letter == "o") {
				$letterno = 14;
			}elseif ($letter == "p") {
				$letterno = 15;
			}elseif ($letter == "q") {
				$letterno = 16;
			}elseif ($letter == "r") {
				$letterno = 17;
			}elseif ($letter == "s") {
				$letterno = 18;
			}elseif ($letter == "t") {
				$letterno = 19;
			}elseif ($letter == "u") {
				$letterno = 20;
			}elseif ($letter == "v") {
				$letterno = 21;
			}elseif ($letter == "w") {
				$letterno = 22;
			}elseif ($letter == "x") {
				$letterno = 23;
			}elseif ($letter == "y") {
				$letterno = 24;
			}elseif ($letter == "z") {
				$letterno = 25;
			}elseif ($letter == "0") {
				$letterno = 100;
			}elseif ($letter == "1") {
				$letterno = 101;
			}elseif ($letter == "2") {
				$letterno = 102;
			}elseif ($letter == "3") {
				$letterno = 103;
			}elseif ($letter == "4") {
				$letterno = 104;
			}elseif ($letter == "5") {
				$letterno = 105;
			}elseif ($letter == "6") {
				$letterno = 106;
			}elseif ($letter == "7") {
				$letterno = 107;
			}elseif ($letter == "8") {
				$letterno = 108;
			}elseif ($letter == "9") {
				$letterno = 109;
			}elseif ($letter == ",") {
				$letterno = 110;
			}elseif ($letter == "/") {
				$letterno = 111;
			}elseif ($letter == ".") {
				$letterno = 112;
			}elseif ($letter == "-") {
				$letterno = 113;
			}elseif ($letter == ";") {
				$letterno = 114;
			}elseif ($letter == ":") {
				$letterno = 115;
			}

			//encrypt the number
			$cipherletter = cipherit($letterno,$a,$b);
			$cipherword .=$cipherletter;
			$cipherletter = "";
		}
		
		$ciphertext .= $cipherword." ";
		$cipherword = "";
				
	}

	return $ciphertext;
	
}

function decipherit($letterno,$a=5,$b=8)
{
	if ($letterno <= 25) {

		$ciphernopre = ($letterno - $b);
	
		$cipherno = ($ciphernopre+26)/$a;
		
		while (is_float($cipherno)) {
			$ciphernopre = $ciphernopre + 26;

			$cipherno = ($ciphernopre+26)/$a;
			
		}

		if ($cipherno >= 26) {
			$cipherno = $cipherno - 26;
		}
			
		if ($cipherno == 0) {
		 	$cipherletter = "a";
		}elseif ($cipherno == 1) {
		 	$cipherletter = "b";
		}elseif ($cipherno == 2) {
		 	$cipherletter = "c";
		}elseif ($cipherno == 3) {
		 	$cipherletter = "d";
		}elseif ($cipherno == 4) {
		 	$cipherletter = "e";
		}elseif ($cipherno == 5) {
		 	$cipherletter = "f";
		}elseif ($cipherno == 6) {
		 	$cipherletter = "g";
		}elseif ($cipherno == 7) {
		 	$cipherletter = "h";
		}elseif ($cipherno == 8) {
		 	$cipherletter = "i";
		}elseif ($cipherno == 9) {
		 	$cipherletter = "j";
		}elseif ($cipherno == 10) {
		 	$cipherletter = "k";
		}elseif ($cipherno == 11) {
		 	$cipherletter = "l";
		}elseif ($cipherno == 12) {
		 	$cipherletter = "m";
		}elseif ($cipherno == 13) {
		 	$cipherletter = "n";
		}elseif ($cipherno == 14) {
		 	$cipherletter = "o";
		}elseif ($cipherno == 15) {
		 	$cipherletter = "p";
		}elseif ($cipherno == 16) {
		 	$cipherletter = "q";
		}elseif ($cipherno == 17) {
		 	$cipherletter = "r";
		}elseif ($cipherno == 18) {
		 	$cipherletter = "s";
		}elseif ($cipherno == 19) {
		 	$cipherletter = "t";
		}elseif ($cipherno == 20) {
		 	$cipherletter = "u";
		}elseif ($cipherno == 21) {
		 	$cipherletter = "v";
		}elseif ($cipherno == 22) {
		 	$cipherletter = "w";
		}elseif ($cipherno == 23) {
		 	$cipherletter = "x";
		}elseif ($cipherno == 24) {
		 	$cipherletter = "y";
		}elseif ($cipherno == 25) {
		 	$cipherletter = "z";
		}

	}else{
			if ($letterno == 100) {
				$cipherletter = "0";
			}elseif ($letterno == 101) {
				$cipherletter = "1";
			}elseif ($letterno == 102) {
				$cipherletter = "2";
			}elseif ($letterno == 103) {
				$cipherletter = "3";
			}elseif ($letterno == 104) {
				$cipherletter = "4";
			}elseif ($letterno == 105) {
				$cipherletter = "5";
			}elseif ($letterno == 106) {
				$cipherletter = "6";
			}elseif ($letterno == 107) {
				$cipherletter = "7";
			}elseif ($letterno == 108) {
				$cipherletter = "8";
			}elseif ($letterno == 109) {
				$cipherletter = "9";
			}elseif ($letterno == 110) {
				$cipherletter = ",";
			}elseif ($letterno == 111) {
				$cipherletter = "/";
			}elseif ($letterno == 112) {
				$cipherletter = ".";
			}elseif ($letterno == 113) {
				$cipherletter = "-";
			}elseif ($letterno == 114) {
				$cipherletter = ";";
			}elseif ($letterno == 115) {
				$cipherletter = ":";
			}
	}

	return $cipherletter;
}

function decrypttext($cipher,$a=5,$b=8)
{
	$deciphertext = "";
	$decipherword = "";
	//split the sentence into words
	$arrays = explode(" ",$cipher);
	$totalwords = count($arrays);

	//split the words into letter
	for ($i=0; $i < $totalwords; $i++) { 
		$noofletters = strlen($arrays[$i]);
		//get letters

		for ($j=0; $j < $noofletters; $j++) { 
			//convert letter into numbers
			$letter = $arrays[$i][$j];

			if ($letter == "a") {
				$letterno = 0;
			}elseif ($letter == "b") {
				$letterno = 1;
			}elseif ($letter == "c") {
				$letterno = 2;
			}elseif ($letter == "d") {
				$letterno = 3;
			}elseif ($letter == "e") {
				$letterno = 4;
			}elseif ($letter == "f") {
				$letterno = 5;
			}elseif ($letter == "g") {
				$letterno = 6;
			}elseif ($letter == "h") {
				$letterno = 7;
			}elseif ($letter == "i") {
				$letterno = 8;
			}elseif ($letter == "j") {
				$letterno = 9;
			}elseif ($letter == "k") {
				$letterno = 10;
			}elseif ($letter == "l") {
				$letterno = 11;
			}elseif ($letter == "m") {
				$letterno = 12;
			}elseif ($letter == "n") {
				$letterno = 13;
			}elseif ($letter == "o") {
				$letterno = 14;
			}elseif ($letter == "p") {
				$letterno = 15;
			}elseif ($letter == "q") {
				$letterno = 16;
			}elseif ($letter == "r") {
				$letterno = 17;
			}elseif ($letter == "s") {
				$letterno = 18;
			}elseif ($letter == "t") {
				$letterno = 19;
			}elseif ($letter == "u") {
				$letterno = 20;
			}elseif ($letter == "v") {
				$letterno = 21;
			}elseif ($letter == "w") {
				$letterno = 22;
			}elseif ($letter == "x") {
				$letterno = 23;
			}elseif ($letter == "y") {
				$letterno = 24;
			}elseif ($letter == "z") {
				$letterno = 25;
			}elseif ($letter == "?") {
				$letterno = 100;
			}elseif ($letter == "%") {
				$letterno = 101;
			}elseif ($letter == "@") {
				$letterno = 102;
			}elseif ($letter == ":") {
				$letterno = 103;
			}elseif ($letter == "*") {
				$letterno = 104;
			}elseif ($letter == "#") {
				$letterno = 105;
			}elseif ($letter == "$") {
				$letterno = 106;
			}elseif ($letter == "^") {
				$letterno = 107;
			}elseif ($letter == "!") {
				$letterno = 108;
			}elseif ($letter == "+") {
				$letterno = 109;
			}elseif ($letter == "=") {
				$letterno = 110;
			}elseif ($letter == "~") {
				$letterno = 111;
			}elseif ($letter == "`") {
				$letterno = 112;
			}elseif ($letter == ")") {
				$letterno = 113;
			}elseif ($letter == "(") {
				$letterno = 114;
			}elseif ($letter == "_") {
				$letterno = 115;
			}

			//encrypt the number
			$decipherletter = decipherit($letterno,$a,$b);
			$decipherword .=$decipherletter;
						
		}
		
		$deciphertext .= $decipherword." ";
		$decipherword = "";
	}

	return $deciphertext;
}

$cipher = "";
$final = "";
if (isset($_POST['encrypt'])) {

	$text = strtolower(htmlspecialchars($_POST['text']));
	$a = 5;//htmlspecialchars($_POST['a']);
	$b = 8;//htmlspecialchars($_POST['b']);

	$cipher = encrypttext($text,$a,$b);


}elseif (isset($_POST['decrypt'])) {

	$cipher = htmlspecialchars($_POST['text']);
	$a = 5;//htmlspecialchars($_POST['a']);
	$b = 8;//htmlspecialchars($_POST['b']);

	$final = decrypttext($cipher,$a,$b);
}

?>