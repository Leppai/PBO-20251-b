<?php

class LuasLingkaran {

    public const phi = 3.14;

    public int $jari;

    public function tampil($nama = 'ban') : void { 
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} ini hasil nya adalah: {$rumus}";
    }

    public static function testing() {
        echo "<br/>";
        echo "ini testing static";
    }

}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 14;
$lingkaran->tampil("roda");

LuasLingkaran::testing();

// $rumus = LuasLingkaran::phi * ($lingkaran->jari * $lingkaran->jari);

// echo "Hasil nya adalah: " . $rumus;
?>