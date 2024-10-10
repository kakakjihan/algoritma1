<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Grade Nilai</title>
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
            text-align: center;
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
    <h2>Menentukan grade Nilai</h2>
    <form action="output.php" method="post">
        <input type="number" name="nilai" placeholder="Masukkan nilai (0-100)" required>
        <button type="submit">Tentukan Grade</button>
    </form>
</div>

</body>
</html>
