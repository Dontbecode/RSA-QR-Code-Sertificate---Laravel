<?php
	$nama = 'namacetak';
	$event = 'statistika';
	
		$gambar = "uploadtamplate/Tamplate1.jpg";
	
	$image = imagecreatefromjpeg($gambar);
	$white = imageColorAllocate($image, 255, 255, 255);
	$black = imageColorAllocate($image, 0, 0, 0);
	$font = "./arial.ttf";
	$size = 200;
	$size1 = 100;
	//definisikan lebar gambar agar posisi teks selalu ditengah berapapun jumlah hurufnya
	$image_width = imagesx($image);  
	//membuat textbox agar text centered
	$text_box = imagettfbbox($size,0,$font,$nama);
	$text_width = $text_box[2]-$text_box[0]; // lower right corner - lower left corner
	$text_height = $text_box[3]-$text_box[1];
	$x = ($image_width/4) - ($text_width/2);
	//generate sertifikat beserta namanya
	imagettftext($image, $size, 0, $x, 1125, $black, $font, $nama);
	imagettftext($image, $size1, 0, $x, 1455, $black, $font, $event);
	//tampilkan di browser
	header("Content-Type: image/png");
	imagejpeg($image);
	imagedestroy($image);
	exit;
   
?>
<html>
<button onclick="window.print()">Cetak Halaman Web</button>
</html>