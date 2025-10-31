<?php

require_once('./lingkaran.php');

use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(10);
// $lingkaran->r = 12;
$lingkaran->tampil('roda'); //method tampil