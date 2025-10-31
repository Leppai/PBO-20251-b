<?php

namespace App\Math;

class LuasLingkaran{
    public const phi = 3.14;

    private int $r;

    public function __construct($rValue = 1) {
        echo "ini dari construct WHEN YAHHH  <br>";
        $this->r = $rValue;
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->r * $this->r);
        echo "Lingkaran {$nama} ini hasil nya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "Ini testing static 🎉";
    }

    public function __destruct() {
        echo "<br> udah ah capee malasss";
    }
}



// LuasLingkaran::testing(); //static method