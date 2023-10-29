<html>

<head>
    <title>Tampil Data Mahasiswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
               <th colspan="3">
                Tampil Data Mahasiswa
                </th> 
            </tr>
            <tr>
                <th>Nama siswa</th>
                <th>:</th>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <?= $tgl; ?>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>
                    <?= $tpl; ?>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</>
                <td>
                    <?= $gender; ?>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr> 
                <td colspan="3" align="center">
                    <a href="<?= base_url('Tugasuts');
?>">kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>