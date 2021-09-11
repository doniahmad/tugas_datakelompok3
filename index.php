<?php
$data_siswa = [
    ["foto" => "doni.png", "nama" => "Doni Ahmad Darmawan", "alamat" => "Kudus,Ds. Karangbener"],
    ["foto" => "viriyadi.jpeg", "nama" => "Tjan Viriyadhi Sidharta Tjandra", "alamat" => "Balikpapan,Perum BDI A1/3"],
    ["foto" => "humam.jpg", "nama" => "Humam Wajdi Manaf", "alamat" => "Kudus, Ds. Prambatan Lor"],
    ["foto" => "fadila.jpg", "nama" => "Fadila Nur Risza", "alamat" => "Kudus,Ds. Kaliwungu"],
    ["foto" => "leosandy.jpg", "nama" => "Leosandy Wahyu Rismono", "alamat" => "Kudus, Jl.Menur,nganguk mranggen"],
    ["foto" => "fawwaz.JPG", "nama" => "Fawwaz Fadhlurrahman Iswara", "alamat" => "Tirtasani residence,Jaten,Karanganyar"],
]
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Data Siswa</title>
</head>

<body>
    <div class="container">
        <h1>11RPL2 - Kelompok 3</h1>

        <Table id="kelompok">
            <tr>
                <th>
                    <h3>Foto</h3>
                </th>
                <th>
                    <h3>Nama</h3>
                </th>
                <th>
                    <h3>Alamat</h3>
                </th>
            </tr>
            <?php foreach ($data_siswa as $siswa) : ?>

                <tr>
                    <td><img src="asset/<?= $siswa["foto"] ?>" alt="<?= $siswa["foto"] ?>"></td>
                    <td><?= $siswa["nama"] ?></td>
                    <td><?= $siswa["alamat"] ?></td>
                </tr>

            <?php endforeach ?>
        </Table>

    </div>

</body>

</html>