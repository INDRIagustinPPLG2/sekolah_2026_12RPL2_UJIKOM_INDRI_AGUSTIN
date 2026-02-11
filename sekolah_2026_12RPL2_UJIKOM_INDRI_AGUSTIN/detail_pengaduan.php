<?php
$koneksi = mysqli_connect("localhost","root","", "ujikom_12rpl2_indriagustin");

$sql ="select * from `input_aspirasi`";

$query = mysqli_query($koneksi, $sql);

// perulangan
while($data = mysqli_fetch_assoc($query)){ ?>
<p>Lokasi <?php echo $data['lokasi']; ?> </p>
<p>Keterangan <?php echo $data['keterangan']; ?> </p>
<p>status <?php echo $data['status']; ?> 
<hr/>
<?php } ?>

