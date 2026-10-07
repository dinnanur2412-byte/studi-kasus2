<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus 2 - Form Input PHP</title>
    <!-- Memanggil file External CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Form Data Diri</h2>

    <!-- Form Input (Metode POST) -->
    <form action="" method="POST">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required placeholder="Masukkan nama lengkap">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="contoh@email.com">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
                
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" rows="4" required placeholder="Masukkan alamat lengkap"></textarea>
        </div>

        <div class="form-group">
            <label for="no_telp">No. Telepon:</label>
            <input type="text" id="no_telp" name="no_telp" required placeholder="08xxxxxxxxxx">
        </div>

        <button type="submit" name="submit">Kirim Data</button>
    </form>

    <?php
    // Memproses data ketika tombol Submit diklik
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $no_telp = htmlspecialchars($_POST['no_telp']);
        ?>

        <!-- Tampilan Hasil Data -->
        <div class="result-box">
            <h3>Hasil Input Data:</h3>
            <div class="result-item"><strong>Nama:</strong> <?php echo $nama; ?></div>
            <div class="result-item"><strong>Email:</strong> <?php echo $email; ?></div>
            <div class="result-item"><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></div>
            <div class="result-item"><strong>Alamat:</strong> <?php echo nl2br($alamat); ?></div>
            <div class="result-item"><strong>No. Telepon:</strong> <?php echo $no_telp; ?></div>
        </div>

        <?php
    }
    ?>
</div>

</body>
</html>