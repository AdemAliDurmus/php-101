<?php

class Insan
{
    public $ad_soyad = "Sadık Ortaoğlan";
    public $yas;

    public function goster()
    {
        printf("%s adlı kişinin yaşı: %s <br>\n" , $this->adsoyad , $this->yas);
    }
}

class Alan extends Insan
{
    public $isi = "İşsiz";
}

// $kisi1 = new Alan;
// $kisi1->ad_soyad = "Kadir Ortaoğlan";
// $kisi1->yas = 27;
// $kisi1->isi = "Python Uzmanı";
// printf($kisi1->adsoyad. ' adlı kişi '. $kisi1->yas. 'yaşındadır ve Mesleği'.$kisi1->isi);

// $kisi = new Adam;
// $kisi->ad_soyad = "Ahmet aras";
// $kisi->yas = 25;
// $kisi->goster();
// print_r($kisi);
