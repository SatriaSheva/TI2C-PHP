<!DOCTYPE html>
<html>
<head>
  <title>Input Data</title>
  </head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }
    form {
      width: 50%;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
    }
    th {
      text-align: left;
      color: #555;
    }
    td {
      color: #333;
    }
    input[type="text"], textarea, select, input[type="number"] {
      width: calc(100% - 24px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
<body>
  <h1>Input Data</h1>
  <form action="proses.php" method="post">
    <table>
      <tr>
        <th>Nama</th>
        <td><input type="text" name="nama" id="nama" required></td>
      </tr>
      <tr>
        <th>NIM</th>
        <td><input type="text" name="nim" id="nim" required></td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td><textarea name="alamat" id="alamat" required></textarea></td>
      </tr>
      <tr>
        <th>Tempat Tanggal Lahir</th>
        <td><input type="text" name="ttl" id="ttl" required></td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>
          <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Usia</th>
        <td><input type="number" name="usia" id="usia" required></td>
      </tr>
    </table>
    <input type="submit" value="Submit">
  </form>
</body>
</html>
