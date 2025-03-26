<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
</head>
<body>
<!-- Get untuk mengambil data dan sintax dan hasilnya bisa dilihat diurl local hostnya sedangkan untuk hist tidak -->
<!-- Post lebih umum digunakan untuk menyimpan suatu data ke server -->
<!-- required perintah untuk tidak dikosongkan lewat html-->

     <form method="POST" action="Latihan02target.php">
        Nama
        <input type="text" name="NAMA"><br>
        Nim
        <input type="text" name="NIM"><br>
        Tgl Lahir
        <input type="date" name="TGLLAHIR"><br>

        <button> kirim data </button> 
    </form>


</body>
</html>