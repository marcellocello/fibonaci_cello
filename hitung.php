<?php
        include "index.php";
        
        $angkasebelum = $_POST['angkasebelum'];
        $angkaskrng = $_POST['angkaskrng'];
        $jumlah = $_POST['jumlah'];
    
        echo "Angka Sebelumnya : ".$angkasebelum."<br>";
        echo "Angka Sekarang : ".$angkaskrng."<br>";
        echo "Jumlah Deret : ".$jumlah."<br>";
    
        for($i = 0; $i<$jumlah; $i++){
            $output = $angkaskrng + $angkasebelum;
            echo $output.", ";
            
            $angkasebelum = $angkaskrng;
            $angkaskrng = $output;
        }
    ?>