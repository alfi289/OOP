
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Data Keluarga</legend>
        <form action="" method="post">
            <label for="">Masukan Jumlah Anggota Keluarga</label>
            <input type="number" name="jml" min="1" required>
            <br>
            <input type="submit" value="Simpan" name="submit">
            <hr>
        </form>

        <form action="keluargapro.php" method="post">
            <?php
            if(isset($_POST['submit'])){
                $jml = $_POST['jml'];
                for ($i=0; $i < $jml; $i++) { ?>
                    <label for="">Nama</label>
                    <input type="text" name="nama[]" required>
                    <label for="">NIK</label>
                    <input type="number" name="nik[]" required>
                    <label for="">Alamat</label>
                    <textarea name="alamat[]" cols="30" rows="5"></textarea>
                    <label for="">Umur</label>
                    <input type="number" name="umur[]" required>
                    <br>
                    <br>
                <?php } ?>
                <input type="submit" value="Simpan" name="sim">
                <input type="reset" value="Reset">

        </form>
        <?php }
        ?>
    </fieldset>
</body>
</html>
