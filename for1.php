<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>
    <form action="" method="post">
    <table align="center">
    <tr>
        <center><h2>Daftar Program</h2></center>
    </tr>
        <tr>
            <td></td>
            <td>1.</td>
            <td>Program Pengulangan Kelipatan 2</td>
        </tr>
        <tr>
            <td></td>
            <td>2.</td>
            <td>Program Pengulangan Kelipatan 5 x 5</td>
        </tr>
        <tr>
            <td></td>
            <td>3.</td>
            <td>Program Ganjil Genap</td>
        </tr>
        <tr>
            <td></td>
            <td>4.</td>
            <td>Program Pengulangan Kuadrat</td>
        </tr>
        <tr>
            <td>Program</td>
            <td>:</td>
            <td><input type="number" name="pilih"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="number" name="angka"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="submit" value="Enter"></td>
        </tr>
    </table>
    </form>
    <center>
    <?php
    if(isset($_POST['submit'])){
        $pilih = $_POST['pilih'];
        $angka = $_POST['angka'];
        echo "<br>";
        if($pilih == 1){
            echo "Program Pengulangan Kelipatan 2<br><br>";
            for($i = 2; $i <= $angka; $i+=2){
                echo $i." ";
            }
        }else if($pilih == 2){
            echo "Program Pengulangan Kelipatan 5 x 5<br><br>";
            for($i = 5; $i <= $angka; $i+=5){
                $hasil = $i * 5;
                echo "Nilai  = $i x 5 = $hasil<br>";
                
            }
        }else if($pilih == 3){
            echo "Program Ganjil Genap<br><br>";
            for($bil = 1; $bil <= $angka; $bil++){
                if( ($bil % 2) == 0){
                    echo "$bil Adalah Bilangan Genap<br>";
                }else {
                    echo "$bil Adalah Bilangan Ganjil<br>";
                }
            }
        }else if($pilih == 4){
            echo "Program Pengulangan Kuadrat<br><br>";
            for ($i=1; $i <= $angka ; $i++) { 
                $hasil = $i * $i;
                echo "$i x $i = $hasil<br>";
            }
        }
    }
    ?>
    </center>
</body>
</html>