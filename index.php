<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalkulator Sederhana | M Iqbal Prasetya XI RPL1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="index.php">			
			<input type="number" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
			<input type="number" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="=" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
	<style>
	body{
		background: #727272;
		font-family: sans-serif;
	}
	 
	.kalkulator{
		width: 335px;
		background: #C0C0C0;
		margin: 100px auto;
		padding: 10px 20px 50px 20px;
		border-radius: 5px;
		box-shadow: 0px 10px 20px 0px #373737;
	}
	.kalkulator h2{
	  color: #383838;
	}
	 
	.bil{
		width: 300px;
		margin: 5px;
		border: none;
		font-size: 16pt;
		border-radius: 5px;
		padding: 10px;	
	}
	 
	.opt{
		font-size: 16pt;
		border: none;
		width: 215px;
		margin: 5px;
		border-radius: 5px;
		padding: 10px;
	}
	 
	.tombol{
		background:#F3C238;
		border-top: none;
		border-right: none;
		border-left: none;
		border-radius: 5px;
		padding: 10px 42px;
		color: #eee;
		font-size: 15pt;
		border-bottom:4px solid #C4AC3D;
		
	}
  .tombol:hover {background-color: #C4AC3D}

 .tombol:active {
  background-color: #C4AC3D;
  box-shadow: 0 3px #666;
  transform: translateY(2px);
  color: #383838;
}
	 
	.brand{
		color: #eee;
		font-size: 11pt;
		float: right;
		text-decoration: none;
		margin: 12px;
	}
	 
	.judul{
		text-align: center;
		color: #eee;
		font-weight: normal;
	}
	</style>
</body>
</html>