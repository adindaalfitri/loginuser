<?php

$siswa = [
    [
        "nama" => "Adinda",
        "alamat" => "Tenggumung",
        "no" => "045612342",
        "foto" => "img/adinda.jpeg"
    ],
    [
        "nama" => "Fitri",
        "alamat" => "Bulak banteng",
        "no" => "089765329",
        "foto" => "img/fitri.jpeg"
    ],
    [
        "nama" => "Hutomo",
        "alamat" => "Wonosari",
        "no" => "034127332",
        "foto" => "img/hutomo.jpeg"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa (Admin)</title>
</head>
<body>
    <h1>Data Siswa (admin)</h1>

    <div>
        <table border="1" cellspacing="0" cellpadding="10" width="40%">
            <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($siswa as $i => $value) : ?>
                    <tr>
                        <th><?= $i+1 ?></th>
                        <th><img src="<?=$value['foto']?>" height="100px" alt=""></th>
                        <th><?=$value['nama']?></th>
                        <th>
                            <a href="detail.php?nama=<?= $value['nama'];?>&foto=<?= $value['foto']?>&alamat=<?= $value['alamat']?>&no=<?= $value['no']?>">
                                <button>Detail</button>
                            </a>
                        </th>
                    </tr>
                <?php endforeach?>
        </table>
            <br>
            <a href="login.php"><button>Back</button></a>
    </div>
</body>
</html>
