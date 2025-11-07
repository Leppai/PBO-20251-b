<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(10);
// $lingkaran->jari = 14;
$lingkaran->tampil("roda");

LuasLingkaran::testing();

// $rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

// echo "Hasil nya adalah: " . $rumus;
?>