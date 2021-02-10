<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style type="text/css">
        table tr {
            font-size: 15px;
        }
    </style>
</head>

<body>

    <center>
        <table>
            <tr>
                <th>
                    No.
                </th>
                <th>
                    ID Pendaftaran.
                </th>
                <th>
                    Nama Lengkap
                </th>
                <th>
                    Tempat Lahir
                </th>
                <th>
                    Tanggal Lahir
                </th>
                <th>
                    Jenis Kelamin
                </th>
                <th>
                    Agama
                </th>
                <th>
                    Nomor Hp Siswa
                </th>
                <th>
                    Nama Orang Tua
                </th>
                <th>
                    Nomor Hp Orang Tua
                </th>
                <th>
                    Alamat
                </th>
                <th>
                    Jurusan
                </th>
            </tr>
            <?php
            $no = 1;
            foreach ($dataall as $row) {
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>
                        <?= $row['id_pendaftaran'] ?>
                    </td>
                    <td><?= $row['nm_lengkap'] ?></td>
                    <td>
                        <?= $row['tmp_lahir'] ?>
                    </td>
                    <td>
                        <?= $row['tgl_lahir'] ?>
                    </td>
                    <td>
                        <?= $row['jns_kelamin'] ?>
                    </td>
                    <td>
                        <?= $row['agm'] ?>
                    </td>
                    <td>
                        <?= $row['no_hp'] ?>
                    </td>
                    <td>
                        <?= $row['nm_ortu'] ?>
                    </td>
                    <td>
                        <?= $row['no_hp_ortu'] ?>
                    </td>
                    <td>
                        <?= $row['almt'] ?>
                    </td>
                    <td>
                        <?= $row['jurusan'] ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>