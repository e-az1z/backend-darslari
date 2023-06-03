<?php

	// 1-dars

	// $str_1 = "Assalomu aleykum bo'lajak dasturchi 1";
	// $str_2 = 'Assalomu aleykum bo\'lajak dasturchi 2';
	// $res = $str_1 . "<br>";
	// $res .= $str_2;
	// echo $res;

	// $x = 2;
	// $matn = "men ";
	// $matn .= "bo'lajak ";
	// $matn .= "PHP ";
	// $matn_1 .= '8 ';
	// $matn .= $matn_1 - --$x;
	// $matn .= "dasturchiman ";
	// echo $matn;

	// $string = "Assalomu aleykum";
	// $result = $string[1];
	// echo $result;

	// $narx = 10000;
	// echo 'olmaning narxi $narx so\'m';

	// $narx = '10000';
	// echo gettype($narx + 0);

	// 2-dars

	// strlen(), strtolewer(), strtoupper(), ucfirst()
	// strlen() - matndagi baytlar sonin qaytaradi
	// strtolower() - barcha harflarni kichik qiladi
	// strtoupper() - barcha harflarni katta qiladi
	// ucfirst() - birincha so'zdagi harfni katta qiladi

	// $str_1 = "assalomu aleykum";
	// $str_1 = strtoupper($str_1);
	// echo $str_1;

	// substr(), strpos(), strrpos()
	// substr() - matndan berilgan positsiyadan boshlab, kerakli miqdorda belgini olish
	// strpos() - Matndan qidirilayotgan qiymatni turgan positsiyasini aniqlaydi
	// strrpos(), - matndan qidirilayotgan qiymatni turgan positsiyasini aniqlaydi, eng oxirgi topilganini

	// $str_2 = "Salom php dasturchi! php ajoyib dasturlash tili";
	// $find = "php";
	// $res = substr($str_2, 0);
	// echo ($res !== $find) ? "$find - topildi" : "topilmadi";

	// $str_2 = "Salom php dasturchi! php ajoyib dasturlash tili";
	// $find = "ajoyib";
	// $res = strpos($str_2, $find);
	// $pos = substr($str_2, $res);
	// echo ($res ? " " : $pos = '');
	// echo $pos."<br>";

	// 3-dars

	# str_shuffle() - matndagi harflarni random orqali turgan o'rnini almashtiradi.
	# str_replace() - matninig bir qismini boshqasiga almashtirish uchun ishlatiladi.
	# md5() - matnni md5 hashga almashtirib beradi(shifrlaydi).
	# htmlspecialchars() - maxsus belgilarni HTML entitiyga almashtiradi.
	# strip_tags() - matndan HTML teglarini olib tashlaydi

	# substr_conunt() - qidirilayotgan qiymat matnda nechta joyda borligini aniqlaydi.
	# trim() - matning ikki tarafidan probel yoki belgilarni olib tashlaydi.
	# ltrim() - va rtrim() - qaysi tomondan olib tashlash kerak bo'lsa ko'rsatadi.
	# str_word_count() - matnda nechta so'z borligini aniqlaydi.
	# strstr - matndan berilgan qiymat bo'yicha qidiradi va topilgan positsiyadan boshlab oxirgacha bo'lgan matn qismini qaytaradi.

	$matn = "assalom";
	$matn_2 = "alik Salom php dast#urchi! php ajoyib dastur9lash tili php php game a lot of people";
	$count = 0;

	echo str_shuffle($matn) . "<br>";
	echo str_replace('php', 'web', $matn_2, $count) . "<br>";
	echo "{$count}<br>";

	$md_5 = md5($matn);
	echo "{$md_5} <br>";

	$h1 = "<b>Salom Dasturchi</b>";
	echo "Orginal " . $h1 . "<br>";
	echo htmlentities($h1) . "<br>";
	echo strip_tags($h1) . "<br>";

	echo substr_count($matn_2, "php", 8) . "<br>";

	// trim()
 	$trim = " % test % ";

	echo strlen($trim) . "<br>";
	$res_1 = trim($trim, " % ");
	var_dump($res_1);

	echo "<br>";

	$text   = "\t\tThese are a few words :) ...  ";
	$binary = "\x09Example string\x0A";
	$hello  = "Hello World";
	var_dump($text, $binary, $hello);

	print "<br>";

	$trimmed = trim($text);
	var_dump($trimmed);

	print "<br>";

	$trimmed = trim($text, " \t.");
	var_dump($trimmed);

	print "<br>";

	$trimmed = trim($hello, "Hdle");
	var_dump($trimmed);

	print "<br>";

	$res_2 = str_word_count($matn_2);
	echo $res_2;

	echo "<br>";

	echo strstr($matn_2, "php");

?>