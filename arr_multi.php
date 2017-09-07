<?php
$extinct = array
	(
		array("Bar-winged rail",1973,"Fiji"),
		array("Bay thrush",1850,"France"),
		array("Guam flycatcher",1983,"United States(Guam)"),
		array("Kirimati sandpiper","19th century","Kirimati"),
		array("Thick-billed ground love",1927,"Solomon Islands"),
		array("Tongatapu rail",1777,"Tonga")
	);
	for ($ct = 0; $ct < 6; $ct++) {
		for ($tc = 0; $tc < 3; $tc++) {
		echo $extinct[$ct][$tc]." ";
		}
		echo "<br>";
	}
$ethnic = array
	(
		array("Aceh","Mie Aceh"),
		array("Medan","Bika Ambon"),
		array("Bandung","Serabi"),
		array("Yogyakarta","Gudeg"),
		array("Sulsel","Sop Konro"),
		array("Padang","Rendang"),
		array("Jambi","Gulai Ikan Patin"),
		array("Palembang","Pempek")
	);
$president = array
	(
		array("Sukarno",1945,1967),
		array("Suharto",1967,1988),
		array("Habibie",1998,1999),
		array("Abdurrahman Wahid",1999,2001),
		array("Not found","n/a","n/a")
	);
echo "<br>";
$os = array("Mountain lion", "Snow Leopard", "Maverick", "Yosemite");
sort($os);
for ($o = 0; $o < count($os); $o++) {
	echo $os[$o]."<br>";
}
echo "<br>";
$lang = array("python", "java", "php", "markup", "c sharp");
sort($lang);
for ($l = 0; $l < count($lang); $l++) {
	echo "<li>".$lang[$l]."</li>";
}

?>