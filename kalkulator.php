<?php


interface bangun_ruang
    {
        public function menghitung();
    }

    class LPersegiPanjang implements bangun_ruang{
        public $Panjang = 0;
        public $Lebar = 0;

        public function menghitung()
        {
            return [
                'Bangun Ruang : ' => 'Luas Persegi Panjang',
                'Panjang : ' => $this->Panjang,
                'Lebar : ' => $this->Lebar,
                'Luas Persegi Panjang : ' => ($this->Panjang * $this->Lebar)
            ];
        }
    }

    class VBola implements bangun_ruang{
        public $Jari = 0;
        public $PHI = 3.14;
        public $AA = 4/3;

        public function menghitung()
        {
            return[
                'Bangun Ruang : ' => 'Volume Bola',
                'Jari - Jari : ' => $this->Jari,
                'Volume Bola : ' => ($this->AA * $this->PHI * $this->Jari *$this->Jari * $this->Jari)
            ];
        }
    }

    class VKerucut implements bangun_ruang{
        public $Jari = 0;
        public $Tinggi = 0;
        public $XX = 1/3;
        public $PHI = 3.14;

        public function menghitung()
        {
            return [
                'Bangun Ruang : ' => 'Volume Kerucut',
                'Jari- Jari  : ' => $this->Jari,
                'Tinggi : ' => $this->Tinggi,
                'Luas Persegi Panjang : ' => ($this->XX * $this->PHI * $this->Jari * $this->Jari * $this->Tinggi)
            ];
        }
    }

    class VKubus implements bangun_ruang{
        public $Rusuk = 12;

        public function menghitung()
        {
            return[
                'Bangun Ruang : ' => 'Volume Kubus',
                'Rusuk : ' => $this->Rusuk,
                'Volume Kubus : ' => ($this->Rusuk * $this->Rusuk * $this->Rusuk)
            ];
        }
    }   
    
    class KelilingLingkaran implements bangun_ruang{
        public $YY = 2;
        public $Jari = 0;
        public $PHI = 3.14;

        public function menghitung()
        {
            return[
                'Bangun Ruang : ' => 'Keliling Lingkaran',
                'Jari-Jari : ' => $this->Jari,
                'Keliling Lingkaran : ' => ($this->PHI * $this->YY * $this->Jari)
            ];
        }
    }


    class KalkulatorBangunRuangFactory {
        public function initializekalkulatorBangunRuang($pilihan, $satuan){
            if($pilihan === 'LPersegiPanjang'){
                return new LPersegiPanjang($satuan);
            }

            if($pilihan === 'VBola'){
                return new VBola($satuan);
            }
                
            if($pilihan === 'VKerucut'){
                return new VKerucut($satuan);
            }

            if($pilihan === 'VKubus'){
                return new VKubus($satuan);
            }

            if($pilihan === 'KelilingLingkaran'){
                return new KelilingLingkaran($satuan);
            }

            throw new Exception("Bangun Ruang Yang Anda Maksud Tidak Tersedia"); 
        }
    }

    $satuan = [
        'Rusuk' => 12,
        'Panjang' => 0,
        'Lebar' => 0,
        'Jari' => 0
    ];
    $pilihan = 'VKubus';
    $kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
    $kalkulatorBangunRuang = $kalkulatorBangunRuangFactory  ->initializekalkulatorBangunRuang($pilihan, $satuan);
    $hasil = $kalkulatorBangunRuang -> menghitung();
    print_r($hasil);


?>

    
