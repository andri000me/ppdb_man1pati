<?php 
  $dtss="siswa".date("Y-m-d").".xls";
  header("Content-type: application/vnd-ms-excel");
  header("Content-Disposition: attachment; filename=$dtss");
?>
<p style="text-align:center;font-weight: bold;">DATA PESERTA DIDIK BARU 2019/2020</p>
<table border="1">
  <tr>
      <th>No</th>
      <th>Tgl Daftar</th>
      <th>Nama Lengkap</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>Alamat</th>
      <th>No Hp</th>
      <th>Nama Ortu</th>
      <th>No Hp Ortu</th>
      <th>Asal SMP</th>
  </tr>
  <?php
    $no=0;
    foreach ($sis as $dt) {
    $no++;
  ?>
  <tr>
    <td><?php echo $no;?></td>
    <td><?php echo $dt->tgl_daftar;?></td>
    <td><?php echo $dt->nama_lengkap;?></td>
    <td><?php echo $dt->tempat_lahir;?></td>
    <td><?php echo $dt->tanggal_lahir;?></td>
    <td><?php echo $dt->jenis_kelamin;?></td>
    <td><?php echo $dt->agama;?></td>
    <td><?php echo $dt->alamat;?></td>
    <td><?php echo $dt->no_hp;?></td>
    <td><?php echo $dt->nama_ortu;?></td>
    <td><?php echo $dt->no_hportu;?></td>
    <td><?php echo $dt->asal_smp;?></td>
    </tr>
  <?php } ?>
</table>