<?php
$buah1 = [
    'id'=> '170402',
    'nama' => 'Durian',
    'warna' => 'Kuning',
    'Stock' => '2',
    'Harga' => 'Rp50000', 
    'Deskripsi' => 'Buah nya manis, warnanya Kuning, kalo dimakan bikin  ketagihan kaya ngeliat kamu'
];
$buah2 = [
    'id'=> '170402',
    'nama' => 'Apel',
    'warna' => 'Merah',
    'Stock' => '17',
    'Harga' => 'Rp5000', 
    'Deskripsi' => 'Buah nya manis, warnanya Merah, kalo dimakan bikin  ketagihan kaya ngeliat kamu'
];
$buah3 = [
    'id'=> '170402',
    'nama' => 'Jeruk',
    'warna' => 'Orange',
    'Stock' => '7',
    'Harga' => 'Rp15.000', 
    'Deskripsi' => 'Buah nya manis, warnanya Orange, kalo dimakan bikin  ketagihan kaya ngeliat kamu'
];
$buah4 = [
    'id'=> '170402',
    'nama' => 'Pisang',
    'warna' => 'Kuning',
    'Stock' => '2',
    'Harga' => 'Rp50000', 
    'Deskripsi' => 'Buah nya manis, warnanya Kuning, kalo dimakan bikin  ketagihan kaya ngeliat kamu'
];
$buah5 = [
    'id'=> '170402',
    'nama' => 'Alpuket',
    'warna' => 'Hijau',
    'Stock' => '2',
    'Harga' => 'Rp150000', 
    'Deskripsi' => 'Buah nya manis, warnanya Hijau, kalo dimakan agak pait kaya kehidupan'
];

$data = [$buah1, $buah2, $buah3, $buah4, $buah5]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($data as $row){ ?>
        <tr>
            <td><?= $row ['id'];?></td>
            <td><?= $row ['nama'];?></td>
            <td><?= $row ['warna'];?></td>
            <td><?= $row ['Stock'];?></td>
            <td><?= $row ['Harga'];?></td>
            <td><?= $row ['Deskripsi'];?></td>
        </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>