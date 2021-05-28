<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servis_yonetim_model extends CI_Model

{
    function __construct()
    {
        parent::__construct();
    }


    public function markalar()
    {

        return $this->db
            ->select("id,marka")
            ->group_by("marka")
            ->get("arac_bilgisi")->result();

    }

    public function modeller($marka)
    {

        return $this->db
            ->select("model,marka")
            ->where("marka", $marka)
            ->get("arac_bilgisi")->result();

    }

    public function tamir_turleri()
    {

        return $this->db
            ->select("id,tamir_turu")
            ->group_by("tamir_turu")
            ->get("servisler")->result();

    }

    public function musteri_kontrol($musteri_adi)
    {

        return  $this->db
            ->select("LOWER(musteri_adi) AS musteri_adi,musteri_id")
            ->where("musteri_adi", $musteri_adi)
            ->get("musteriler")->row();

    }

  public function servis_kayit_kaydet($servis_array)
    {

        return $this->db->insert("servis_kayitlari", $servis_array);
    }
    public function musteri_ekle($musteri_adi)
    {

        $temp_arr = [
            'musteri_adi' =>$musteri_adi
        ];
        $this->db->insert("musteriler", $temp_arr);
        return $this->db->insert_id();
    }

    public function arac_bilgi($marka, $model)
    {

        return $this->db
            ->where("marka", $marka)
            ->where("model", $model)
            ->get("arac_bilgisi")->row();

    }

    public function servis_bilgi($tamir_turu, $tamir_yeri)
    {

        return $this->db
            ->where("tamir_turu", $tamir_turu)
            ->where("tamir_yeri", $tamir_yeri)
            ->get("servisler")->row();

    }

 public function servis_kontrol($tamir_tarihi, $tamir_saati)
    {

        return $this->db
            ->where("tamir_tarihi", $tamir_tarihi)
            ->where("tamir_saati", $tamir_saati)
            ->get("servis_kayitlari")->row();

    }
    public function tamir_yeri_listesi($tamir_turu)
    {

        return $this->db
            ->select("tamir_turu,tamir_yeri")
            ->where("tamir_turu", $tamir_turu)
            ->get("servisler")->result();

    }

    public function servis_ekle($servis)

    {

        return $this->db->insert("servis_bilgisi", $servis);

    }



}


?>