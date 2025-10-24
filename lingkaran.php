<?php

class LuasLingkaran{
    public const phi = 3.14;

    public int $r;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->r * $this->r);
        echo "Lingkaran {$nama} ini hasil nya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "Ini testing static 🎉";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->r = 12;
$lingkaran->tampil('roda'); //method tampil

LuasLingkaran::testing(); //static method