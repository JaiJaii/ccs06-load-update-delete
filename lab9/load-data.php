<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Sui', 'Male', 'May 19, 2019', 'Jainos', 'kulotski14@gmail.com', 'Mabalacat City', '09123456789');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Kulotski',
			'gender' => 'Male',
			'birthdate' => 'March 23, 2023',
			'owner' => 'Jainos',
			'email' => 'KulotEdlan@gmail.com',
			'address' => 'Magalang City',
			'contact_number' => '09394278349'
		],
		[
			'name' => 'TMSC',
			'gender' => 'Male',
			'birthdate' => 'April 21, 2021',
			'owner' => 'Jainos',
			'email' => 'Timsportin@gmail.com',
			'address' => 'San Fernando City',
			'contact_number' => '09123456789'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

