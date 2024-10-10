<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung Keliling Segitiga</title>
</head>
<body>
    <h1>menghitung Keliling Segitiga</h1>
    <form id="triangleForm" action="result.html" method="GET">
        <label for="sideA">Panjang Sisi A:</label>
        <input type="number" id="sideA" name="sideA" required><br>
        
        <label for="sideB">Panjang Sisi B:</label>
        <input type="number" id="sideB" name="sideB" required><br>
        
        <label for="sideC">Panjang Sisi C:</label>
        <input type="number" id="sideC" name="sideC" required><br>
        
        <button type="submit">Hitung Keliling</button>
    </form>
</body>
</html>
<?php
// Fungsi untuk menghitung keliling segitiga
function hitungKelilingSegitiga($a, $b, $c) {
    return $a + $b + $c;
}

// Input panjang sisi segitiga
$a = 5; // panjang sisi pertama
$b = 6; // panjang sisi kedua
$c = 7; // panjang sisi ketiga

// Hitung keliling
$keliling = hitungKelilingSegitiga($a, $b, $c);
echo "Keliling segitiga dengan sisi $a, $b, dan $c <br>adalah: $keliling cm";
?>
