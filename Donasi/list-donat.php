<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi</title>
</head>
<body>
    <header>
        <h3>Donatur</h3>
    </header>

    <nav>
        <a href="Form-donasi.php">Tambah</a>
    </nav>

    <br>
    <table  border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Telepon/HP</th>
                <th>Jenis Donasi</th>
                <th>Pengkhususan Donasi</th>
                <th>Keterangan Donasi</th>
                <th>Jumlah (Rp.)</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $sql = "SELECT *FROM Donasi";
        $query = mysqli_query($db, $sql);

        while($donatur = mysqli_fetch_array($query)){
            echo"<tr>";
            echo "<td>".$donatur['Nama']."</td>";
            echo "<td>".$donatur['E-mail']."</td>";
            echo "<td>".$donatur['Telepon/HP']."</td>";
            echo "<td>".$donatur['Jenis Donasi']."</td>";
            echo "<td>".$donatur['Pengkhususan Donasi']."</td>";
            echo "<td>".$donatur['Keterangan Donasi']."</td>";
            echo "<td>".$donatur['Jumlah (Rp.)']."</td>";

            echo "<td>";
            echo "<a href='form-donasi.php?id=".$donatur['Nama']."'>Edit</a> | ";
            echo "</td>";

            echo "</tr>";
        }
        ?>
        </tbody>
    </table> 

    <p> Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>