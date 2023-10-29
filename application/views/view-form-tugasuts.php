<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <Form   action="<?=     base_url('tugasuts/cetak');   ?>"
method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                    <?php echo form_error('nama'); ?>
                </td>
            </tr>
            <tr> 
                <th>NIS</th>
                <td>:</td>
                <td> 
                    <input type="text" name="nis" id="nis">
                    <?php echo form_error('nis'); ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <input type="text" name="kelas" id="kelas">
                    <?php echo form_error('kelas'); ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tgl" id="tgl">
                    <?php echo form_error('tgl'); ?>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <input type="text" name="tpl" id="tpl">
                    <?php echo form_error('tpl'); ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                    <?php echo form_error('alamat'); ?>
                </td>
            </tr>
            
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td>
                    <form name="gender" id="gender">
                        <input type="radio" name="gender" value="male" id="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="female">Female</label>
                    </form>
                </td>

            </tr>

            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                    <?php echo form_error('agama'); ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>