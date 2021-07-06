<?php

    $jual = 80000;
    $beli = 50000;

    //maka
    $keuntungan = (($jual - $beli) / $beli) * 100;

    echo ("
        <p>Jual = ".$jual."</p>
        <p>Beli = ".$beli."</p>
        <p>Keuntungan = ...?</p>
        <p>Jawaban : ".$keuntungan."%</p>
    ");


?>