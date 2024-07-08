<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="submit"] {
            padding: 10px;
            margin: 10px 0;
            width: calc(100% - 22px);
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konversi Nilai</h1>
        <form method="post">
            <input type="text" name="nilai" placeholder="Masukkan nilai" required>
            <input type="submit" value="Konversi">
        </form>
        <div class="result">
            <?php
                function konversiNilai($nilai) {
                    if ($nilai >= 80.00 && $nilai <= 100.00) {
                        echo "A";
                    } elseif ($nilai >= 76.25 && $nilai <= 79.99) {
                        echo "A-";
                    } elseif ($nilai >= 68.75 && $nilai <= 76.24) {
                        echo "B+";
                    } elseif ($nilai >= 65.00 && $nilai <= 68.74) {
                        echo "B";
                    } elseif ($nilai >= 62.50 && $nilai <= 64.99) {
                        echo "B-";
                    } elseif ($nilai >= 57.50 && $nilai <= 62.49) {
                        echo "C+";
                    } elseif ($nilai >= 55.00 && $nilai <= 57.49) {
                        echo "C";
                    } elseif ($nilai >= 51.25 && $nilai <= 54.99) {
                        echo "C-";
                    } elseif ($nilai >= 43.75 && $nilai <= 51.24) {
                        echo "D+";
                    } elseif ($nilai >= 40.00 && $nilai <= 43.74) {
                        echo "D";
                    } elseif ($nilai >= 0.00 && $nilai <= 39.99) {
                        echo "E";
                    } else {
                        echo "Nilai tidak valid";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nilai = $_POST['nilai'];
                    if (is_numeric($nilai)) {
                        konversiNilai($nilai);
                    } else {
                        echo "Masukkan nilai yang valid.";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
