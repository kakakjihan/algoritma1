<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Keliling Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        input {
            margin: 10px 0;
            padding: 10px;
            width: 100%;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hitung Keliling Segitiga</h2>
    <form method="post" action="output.php">
        <input type="number" name="a" placeholder="Panjang sisi A" required>
        <input type="number" name="b" placeholder="Panjang sisi B" required>
        <input type="number" name="c" placeholder="Panjang sisi C" required>
        <button type="submit">Hitung Keliling</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        // Menghitung keliling
        $keliling = $a + $b + $c;

        echo "<h3>Keliling Segitiga: $keliling</h3>";
    }
    ?>
</div>

</body>
</html>