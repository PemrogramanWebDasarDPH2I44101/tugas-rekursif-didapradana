<?php

$angka = 5;
function kesatu($x, $y){
	if ($x > 0) {
		if ($y > 0) {
			echo "* ";
			$y--;
			kesatu($x, $y);
		}
		else{
			echo "<br>";
			$x--;
			kesatu($x, $x);
		}
	}
}
kesatu ($angka, $angka);
echo "=========================================================<br>";
// NomerDua
function kedua($x, $y, $angka){
	if ($x <= $angka) {
		if ($y <= $x) {
			echo "$y ";
			$y++;
			kedua($x, $y, $angka);
		}
		else{
			echo "<br>";
			$x++;
			kedua($x, 1, $angka);
		}
	}
}
kedua (1, 1, $angka);
?>
