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
    <legend>Penggajian</legend>
        <form action="penggajianpro.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama" required>
            <br>
            <label for="">NIP</label>
            <input type="number" name="nip" required>
            <br>
            <label for="">Alamat</label>
            <textarea name="alamat" cols="30" rows="5"></textarea>
            <br>
            <label for="">Hari Kerja</label>
            <input type="number" name="haker" max="30" required>
            <br>
            <input type="submit" value="Simpan" name="simpan">
        </form>
    </fieldset>
</body>
</html>