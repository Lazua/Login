<?php

include "../connect.php";

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Data Kuliah</h2>
    <form action="create.php" method="POST">
        Kode :<input type="text" name="kode">
        <br>
        Matakuliah : <input type="text" name="nama_matkul">
        <br>
        SKS: <input type="text" name="sks">
        <br>
        Semester: <input type="text" name="semester">
        <br>
        Dosen Pengajar : <input type="submit" value="Tambah">
        <br>

        <select name="id_dosen" id="nama_dosen">
            <option value="-">--Pilih salah satu--</option>
            <?php
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <option value="<?php echo $data['id_dosen']; ?>">
                        <?php echo $data['nama_dosen']; ?>
                    </option>
                    <?php
                }
            ?>
        </select>


    </form>
</body>
</html>