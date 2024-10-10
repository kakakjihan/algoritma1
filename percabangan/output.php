
<div class="container">
    <h2>Hasil Grade Nilai</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        // Menentukan grade
        if ($nilai >= 90 && $nilai <= 100) {
            $grade = 'A';
        } elseif ($nilai >= 80) {
            $grade = 'B';
        } elseif ($nilai >= 70) {
            $grade = 'C';
        } elseif ($nilai >= 60) {
            $grade = 'D';
        } elseif ($nilai >= 0) {
            $grade = 'E';
        } else {
            $grade = 'Nilai tidak valid';
        }

        echo "<h3>Nilai: $nilai</h3>";
        echo "<h3>Grade: $grade</h3>";
    } else {
        echo "<h3>Silakan masukkan nilai dari <a href='input.php'>form ini</a>.</h3>";
    }
    ?>
    <button onclick="window.location.href='input.php'">Kembali ke input</button>
    <a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
</div>

</body>
</html>
