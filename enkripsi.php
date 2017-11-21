<?php
include_once "index.php";
$string = $_POST['plain'];
$pilihan = $_POST['pilihan'];
$panjang = strlen($string);

//BEGIN ENCRYPT
if ($pilihan == "enkripsi"){

	//mengubah string ke array
	$nomor = 0;
	for ($i=0;$i<$panjang;$i++){
		if ($i % 3 == 2){
			$compact[$nomor] = substr($string,$i,1);
			$nomor++;
		}
		else{
			$potong = substr($string,$i,1);
			$str[$i] = $potong;
		}

	}

	/*var_dump($compact);
	echo "<br>";
	var_dump($str);*/

	echo "Plain textnya adalah "."<b>$string</b>";
	echo "<br>";
	$kalimat_hilang = implode("", $compact);
	echo "Huruf yang dihilangkan adalah : "."<b>$kalimat_hilang</b>";
	echo "<br>";
	$kalimat_sisa = implode("",$str);
	echo "Huruf sisanya adalah : "."<b>$kalimat_sisa</b>";
	echo "<br>";

	echo "Chiper textnya adalah "."<b>$kalimat_sisa</b>"."&"."<b>$kalimat_hilang</b>";

/*END ENCRYPT*/
}elseif($pilihan == "dekripsi"){
	//BEGIN DECRYPT

//mengubah string ke array
for ($i=0;$i<$pnj;$i++){
	$potong = substr($string,$i,1);
	$str[$i] = $potong;
}

//konversi array 1 dimensi -> 2 dimensi
$no = 0;
for($i=0; $i < $bulat; $i++){
      for($j=0; $j < 10; $j++){
            $newstr[$i][$j]=$str[$no];
            $no++;
      }
}

//tuker posisi dekripsi

//kembali ke 1 dimensi
$no = 0;
for ($i=0; $i<$bulat; $i++){
	for ($j=0; $j<10; $j++){
		$balik[$no]= $compact[$i][$j];
	$no++;}
	}

//hasil akhir
echo "Cipher text : ";
echo "<table border=1>";
echo "<tr>";
for ($i=0;$i<$len;$i++){
	echo "<td width=15px align=center>".$str[$i];
}
echo "</td></tr></table>";
echo "<br><br>";
echo "<table border=1>";
echo "<tr>";
echo "Plain text : <br>";
for ($i=0;$i<$lth;$i++){
	echo "<td width=15px align=center>".$balik[$i];
}
echo "</td></tr></table>";
echo "<br>";
echo "<center><a href=index.php style='text-decoration:none;'>Kembali ke Index</a></center>";
//proses akhir dekripsi

}
else{
	echo"<script>alert('tentukan pilihan enkripsi atau dekripsi');document.location='index.php';</script>";
}
?>
