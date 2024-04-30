<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Roboto", Arial, sans-serif;
            background-color: #f2f2f2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            padding: 40px;
            text-align: center;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 90%;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button {
            padding: 12px 24px;
            margin: 0 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
            background-color: #4CAF50;
            border: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        .button.secondary {
            background-color: #666;
        }

        .button.secondary:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Mahasiswa</h2>
        <p>Choose an action:</p>
        <table>
            <tr>
                <td>
                    <form action="input data.php" method="post">
                        <input type="submit" value="Register" class="button">
                    </form>
                </td>
                <td>
                    <form action="list.php" method="post">
                        <input type="submit" value="List Data" class="button secondary">
                    </form>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>