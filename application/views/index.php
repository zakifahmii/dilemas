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
        <form action="<?= base_url('pesertadidik/cetak'); ?>" method="post">
            <table>
                <tr>
                    <td><label>Nama Siswa</label></td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <?= form_error("nama"); ?>
                <tr>
                    <td><label>NIS</label></td>
                    <td><input type="text" name="nis"></td>
                </tr>
                <?= form_error("nis"); ?>
                <tr>
                    <td><label>Kelas</label></td>
                    <td><input type="text" name="kelas"></td>
                </tr>
                <?= form_error("kelas"); ?>
                <tr>
                    <td><label>Tempat Lahir</label></td>
                    <td><input type="text" name="tmpt_lahir"></td>
                </tr>
                <?= form_error("tmpt_lahir"); ?>
                <tr>
                    <td><label>Tanggal Lahir</label></td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <?= form_error("tgl_lahir"); ?>
                <tr>
                    <td><label>Alamat</label></td>
                    <td><textarea name="alamat"></textarea></td>
                </tr>
                <?= form_error("alamat"); ?>
                <tr>
                    <td><label>Jenis Kelamin</label></td>
                    <td>
                        <input type="radio" name="jk" value="Laki-laki"> Laki-laki <br>
                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </td>
                </tr>
                <?= form_error("jk"); ?>
                <tr>
                    <td><label>Agama</label></td>
                    <td>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <?= form_error("jk"); ?>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </section>
</body>

</html>