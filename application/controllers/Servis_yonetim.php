<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servis_yonetim extends MY_Controller

{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata("kullaniciBilgiler") == NULL) {
            $this->session->set_flashdata('mesaj', "Lütfen Giriş Yapınız!");
            redirect(base_url());
        }

        $this->load->model("Servis_yonetim_model", "servis");


    }


    public function servis_kaydi_ekle()
    {
        $data["markalar"] = $this->servis->markalar();
        $data["tamir_turleri"] = $this->servis->tamir_turleri();
        $this->load->view("header");
        $this->load->view("sidebar");
        $this->load->view("servis_yonetim/servis_kaydi_ekle", $data);
        $this->load->view("footer");

    }

    public function model_listesi()
    {
        $marka = html_escape(trim($this->input->post("marka")));
        echo json_encode($this->servis->modeller($marka), JSON_UNESCAPED_UNICODE);

    }

    public function tamir_yeri_listesi()
    {
        $tamir_turu = html_escape(trim($this->input->post("tamir_turu")));
        echo json_encode($this->servis->tamir_yeri_listesi($tamir_turu), JSON_UNESCAPED_UNICODE);

    }


    public function servis_kayit_kaydet()

    {
        $musteri_adi = html_escape(trim($this->input->post("musteri_adi")));
        $marka = html_escape(trim($this->input->post("marka")));
        $model = html_escape(trim($this->input->post("model")));

        $tamir_tarihi = html_escape(date("Y-m-d", strtotime($this->input->post("tamir_tarihi"))));
        $tamir_saati = html_escape(trim($this->input->post("tamir_saati")));
        $tamir_turu = html_escape(trim($this->input->post("tamir_turu")));
        $tamir_yeri = html_escape(trim($this->input->post("tamir_yeri")));

        $musteri_bilgi = $this->servis->musteri_kontrol(strtolower($musteri_adi));
        if (empty($musteri_bilgi)) {
            $musteri_bilgi = $this->servis->musteri_ekle($musteri_adi);
            $musteri_id = $musteri_bilgi;
        } else {
            $musteri_id = $musteri_bilgi->musteri_id;
        }
        $arac_bilgi = $this->servis->arac_bilgi($marka, $model);
        $servis_bilgi = $this->servis->servis_bilgi($tamir_turu, $tamir_yeri);
        $servis_kontrol = $this->servis->servis_kontrol($tamir_tarihi, $tamir_saati);

        if (empty($servis_kontrol)) {
            $servis_array = array(
                'musteri_id' => $musteri_id,
                'arac_id' => $arac_bilgi->id,
                'servis_id' => $servis_bilgi->id,
                'tamir_tarihi' => $tamir_tarihi,
                'tamir_saati' => $tamir_saati,
                'tamir_durumu' => 0, // Onay Bekleniyor
            );


            if ($this->servis->servis_kayit_kaydet($servis_array)) {
                 $response = array(
                'result' => 1,
                'message' => $musteri_adi . " müşterisi için servis kaydı oluşturulmuştur."
              );


            } else {
                 $response = array(
                'result' => 0,
                'message' => $musteri_adi . "  müşterisi için servis kaydı oluşruluruken hata oluştu. Lütfen tekrar deneyiniz"
              );

            }
        } else {
            $response = array(
                'result' => 0,
                'message' => "Girmiş Olduğunuz Tarihte Servis Dolu .Lütfen Başka Bir Tarih Seçiniz!"
           );
        }

        echo json_encode($response);


    }


}


?>