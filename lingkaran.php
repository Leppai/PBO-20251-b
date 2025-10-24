<?php

class LuasLingkaran{
    public const phi = 3.14;

    public int $r;

}

$lingkaran = new LuasLingkaran(20);
$lingkaran->r = 10;
$lingkaran->tampil('roda');

LuasLingkaran::testing();

$rumus = LuasLingkaran::phi * ($lingkaran->r * $lingkaran->r);
echo "Hasil nya adalah: " . $rumus;