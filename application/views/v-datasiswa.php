<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <table>
                <tr>
                    <td><label>Nama Siswa:</label></td>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <td><label>NIS:</label></td>
                    <td><?= $nis; ?></td>
                </tr>
                <tr>
                    <td><label>Kelas:</label></td>
                    <td><?= $kelas; ?></td>
                </tr>
                <tr>
                    <td><label>Tempat Lahir:</label></td>
                    <td><?= $tmpt_lahir; ?></td>
                </tr>
                <tr>
                    <td><label>Tanggal Lahir:</label></td>
                    <td><?= $tgl_lahir; ?></td>
                </tr>

                <tr>
                    <td><label>Alamat:</label></td>
                    <td><?= $alamat; ?></td>
                </tr>
                <tr>
                    <td><label>Jenis Kelamin:</label></td>
                    <td><?= $jk; ?></td>
                </tr>
                <tr>
                    <td><label>Agama:</label></td>
                    <td><?= $agama; ?></td>
                </tr>
                <tr>
                    <td>
                        <button>
                            <a href="<?php echo base_url().'pesertadidik'?>">Kembali</a>
                        </button>
                    </td>
                </tr>
            </table>
    </section>
</body>
</html>