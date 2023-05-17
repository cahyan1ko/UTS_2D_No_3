<?php
$url = "https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM";
$response = file_get_contents($url);
$data = json_decode($response, true);
?>
<?php
	require_once('./assets/requires/config.php');
	require_once('./assets/requires/header1.php');
?>
<div class="container">
    <div id="jdlaccr" style="font-size: 36px; color: brown;">UTS Semester 2 Cahya Niko Nandita 2D</div>
</div>
<h1>Data Barang</h1>
<table border="2" style="width: 100%">
    <tr>
        <th>Nama Barang</th>
        <th>Kode barang awalan "S" dan harga jual antara 1000 s/d 10000</th>
    </tr>
    <?php foreach ($data as $barang) : ?>
		<?php if (strpos($barang['g_code'], "S")):TRUE ?>
        <tr>
            <td><?= $barang['i_name'] ?></td>
            <td><?= $barang['g_code'] ?></td>
        </tr>
		<?php endif ?>
    <?php endforeach; ?>
</table>
