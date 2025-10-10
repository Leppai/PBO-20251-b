<?php

class LuasLingkaran{
    public const phi = 3.14;

    public int $r;
}

$lingkaran = new LuasLingkaran();
$lingkaran->r = 10;

$rumus = LuasLingkaran::phi * ($lingkaran->r * $lingkaran->r);
echo "Hasil nya adalah: " . $rumus;