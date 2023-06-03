<?php

	echo "1-topshiriq <br>";
	$text = "Salom Dunyo !";
	echo "{$text} <br><br>";

	echo "2-topshiriq <br>";
	$text_1 = "Salom ";
	$text_2 = "Dunyo !";
	$natija = $text_1;
	$natija .= $text_2;
	echo "{$natija} <br><br>";

	echo "3-topshiriq <br>";
	$ism = "Aziz";
	echo $ism . " " . strlen($ism) . " harfdan iborat <br><br>";

	echo "4-masala <br>";
	$ism = "Aziz";
	echo strstr($ism, "z") . "<br><br>";

	echo "5-masala <br>";
	$str_2 = "Bugun ob havo yaxshi";
	$find = "havo";
	$res = substr($str_2, 0);
	echo ($res !== $find) ? "$find - topildi <br><Br>" : "topilmadi <Br>";

	echo "6-masala <br>";
	$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	$data2 = str_shuffle($data);
	echo substr($data2, 0, 8). "<br><br>";

	echo "7-masala <br>";
	$name = "Assalomu aleykum O'zbekiston";
	$name_2 = " jonajon o'zbekiston";
	$res = substr($name, 0, 16);
	$res_2 = $res;
	$res_2 .= $name_2;
	echo "{$res_2} <br><br>";

	echo "8-masala <br>";
	$gmail = "ergashev@gmail.com";
	$result = substr($gmail, 8);
	echo "{$result} <br><br>";

	echo "9-masala <br>";
	$number = "000346023.24";
	$result = substr($number, 3);
	echo "{$result} <br><br>";

	echo "10-masala <br>";
	$url = "https://kun.uz/50487176";
	$result = substr($url, 15);
	echo "{$result} <br><br>";

	echo "11-masala <br>";
	$name = "/Users/sardordushamov/darslar/kurs/index.php";
	$result = substr($name, 35);
	echo "{$result} <br><br>";

	echo "12-masala <br>";
	$soat = "252233";
	$hour = substr($soat, 0, 2);
	$minut = substr($soat, 2, 2);
	$second = substr($soat, 4, 2);
	echo ($hour <= 24 && $minut <= 60 && $second <= 60) ? "{$hour}:{$minut}:{$second}" : "{$hour}:{$minut}:{$second} bu vaqat mavjud emas" , "<br><br>";

	echo "13-masala <br>";
	$number = "+998999999999";
	echo (strlen($number) == 13) ? "$number telefon nomer mavjud" : " telefon nomer emas" , "<br><br>";

	echo "14-masala <br>";
	$find = "+998939999999";
	$number = substr($find, 4, 2);
	echo  $number == 91 || $number == 90 ? " $number Belline" :
	 		($number == 93 || $number == 94 ? "$number Ucell" :
	 		($number == 97 ? "$number Mobiuz" :
	 		($number == 99 ? "$number Uzmobile" :
	 		"Xato raqam")));;

?>