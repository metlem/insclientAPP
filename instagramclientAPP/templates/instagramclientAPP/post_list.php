
<title>Ýnstagram Kullanýcý Bilgilerini Alma</title>
<style type="text/css">
*{padding:0px;margin:0px;font: 14px Tahoma}
#Bilgiler,form{margin:20px auto;width:500px}
input{padding:5px;width:500px}
#Bilgiler span{display:block;padding:5px;background: #ddd; border:1px solid #ccc;margin-bottom:2px}
#Bilgiler strong{font-weight:700;width:120px;float:left}
</style>

<form action="" method="POST">
	<input type="text" name="kullanici" id="input" placeholder="Instagram Kullanici Adinizi Giriniz"/>
</form>
 
 <?php
 if($_POST){
	Function Baglan($a){
		$ch=curl_init();
		curl_setopt($ch, CURLOPT_URL, $a);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST , 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
		$isle =curl_exec($ch);
		curl_close($ch);
		return $isle;
	}
	$Kullanici=$_POST["kullanici"];	
	$Link = Baglan("https://api.instagram.com/v1/users/search?q=$Kullanici&access_token=477010641.560244e.edace8bef8ce495993113063a85015e1");
	

 }
 ?>


<div id="Bilgiler">
	<span> <img src="<?=json_decode($Link)->data["0"]->profile_picture?>" alt="" /> </span>
	<span> <strong>Tam Adi</strong>: <?=json_decode($Link)->data["0"]->username?> </span>
	<span> <strong>Bio</strong>: <?=json_decode($Link)->data["0"]->bio?> </span>
	<span> <strong>Web Sitesi</strong>: <a href="<?=json_decode($Link)->data["0"]->website?>"><?=json_decode($Link)->data["0"]->website?></a></span>
	<span> <strong>Instagram ID</strong>: <?=json_decode($Link)->data["0"]->id?></span>
</div>
<?php}?>