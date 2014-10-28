<?php
		$faker = Faker::create();
		
		$submit = Input::get('submit');
		$user_count = Input::get('user_count');
		$address = Input::get('address');
		$bio = Input::get('bio');

		$user = '';

		

		if ($submit) {
			for ($i = 0; $i < $user_count; $i++) {
				 $name = $faker->name; 

				if ($address != null) {
					$address = $faker->address;
				}
				if ($bio != null) {
					$bio = $faker->text;
				} 
				 
				$user = array($name, $address, $bio);

				
			}

			
		}
		?>

	




