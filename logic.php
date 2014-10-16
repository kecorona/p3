<?php
		if($firstName = file("firstName.txt", FILE_IGNORE_NEW_LINES)) && ($lastName = file("lastName.txt", FILE_IGNORE_NEW_LINES)) {
			$firstName = "";
			$lastName = "";
			$userName = "";
			$count = $_POST["user_count"];
			for ($i = 0; $i < $count; $i++) {
				$user_first = $firstName[rand(0, 10000)];
				$user_last = $lastName[rand(0, 10000)];

				if ($i != 0) {
					$userName .= (.$user_first" ".$user_last;
				}
			}

			return $userName;
		}
?>

<!--				if (isset($_POST["birthday"])) {
					$word = strtolower($word);
				}
				
				if (isset($_POST["bio"])) {
					$word = ucfirst($word);
				}

				if(isset($_POST["numeric"])) {
					$password .= rand(0, 9);
				}
				if(isset($_POST["special"])) {
					$password .= $special[array_rand($special, 1)];
				}

				if ($i != 0) {
					$password .= ("-".$word);
				} else {
					$password .= $word;
				}
			}

			return $password;
				
	} -->