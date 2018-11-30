<form action="" method="POST">
	pinjam :<input type="date" name="pinjam" id="pinjam ">
	kembali :<input type="date" name="kembali" id="kembali ">
	<button type="submit" name="answer" id="answer" value="answer">submit</button>

</form>

<?php 
	$pinjam =$_POST['pinjam'];
	
	$kembali=$_POST['kembali'];
	$date1 = date('d F Y', strtotime($pinjam)); 
	$date2 = date('d F Y', strtotime($kembali)); 
	
	
	$interval =($date2 - $date1);
	$biaya = 200000*$interval; 
	echo "lama pinjam : " .$interval . "</br> Biaya Sewa : " .$biaya;
?>