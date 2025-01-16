<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            //var
            // tes rek
            $totalProyek = 4;
            //$totalGaji
            //$gajiBersih

            define('pokokGaji', 5000000);
            define('pajak', 0.12);
            define('bonus', 500000);

            $totalProyek *= bonus;
            $totalGaji = pokokGaji + $totalProyek;
            $gajiBersih = $totalGaji - ($totalGaji * pajak);

            echo "Bonus anda sebesar $totalProyek <br/>";
            echo "Total gaji anda setelah mendapatkan bonus adalah $totalGaji <br/>";
            echo "Gaji bersih yang anda dapatkan sebesar $gajiBersih <br/>";
        ?>    
</body>
</html>