<?php
class BangunDatar
{
    public function area()
    {
    }
    public function circumference()
    {
    }
    public function enlarge($scale)
    {
    }
    public function shrink($scale)
    {
    }
}

class Lingkaran extends BangunDatar
{
    public $jariJari;

    public function __construct($jariJari)
    {
        $this->jariJari = $jariJari;
    }

    public function area()
    {
        return pi() * pow($this->jariJari, 2);
    }

    public function circumference()
    {
        return 2 * pi() * $this->jariJari;
    }

    public function enlarge($scale)
    {
        $this->jariJari *= $scale;
    }

    public function shrink($scale)
    {
        $this->jariJari /= $scale;
    }
}

class Persegi extends BangunDatar
{
    public $sisi;

    public function __construct($sisi)
    {
        $this->sisi = $sisi;
    }

    public function area()
    {
        return pow($this->sisi, 2);
    }

    public function circumference()
    {
        return 4 * $this->sisi;
    }

    public function enlarge($scale)
    {
        $this->sisi *= $scale;
    }

    public function shrink($scale)
    {
        $this->sisi /= $scale;
    }
}

class PersegiPanjang extends BangunDatar
{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function area()
    {
        return $this->panjang * $this->lebar;
    }

    public function circumference()
    {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($scale)
    {
        $this->panjang *= $scale;
        $this->lebar *= $scale;
    }

    public function shrink($scale)
    {
        $this->panjang /= $scale;
        $this->lebar /= $scale;
    }
}

class Descriptor
{
    public static function describe($bangunDatar)
    {
        if ($bangunDatar instanceof Lingkaran) {
            $namaBangun = 'Lingkaran';
        } elseif ($bangunDatar instanceof Persegi) {
            $namaBangun = 'Persegi';
        } elseif ($bangunDatar instanceof PersegiPanjang) {
            $namaBangun = 'Persegi Panjang';
        } else {
            $namaBangun = 'Bangun Datar';
        }

        $luas = $bangunDatar->area();
        $keliling = $bangunDatar->circumference();

        echo "Bangun datar ini adalah $namaBangun yang memiliki luas $luas dan keliling $keliling.\n";
    }
}

//input disini, bisa menggunakan salah satu bangun datar atau semuanya
$lingkaran = new Lingkaran(10);
Descriptor::describe($lingkaran);

$persegi = new Persegi(4);
Descriptor::describe($persegi);

$persegiPanjang = new PersegiPanjang(5, 10);
Descriptor::describe($persegiPanjang);

?>