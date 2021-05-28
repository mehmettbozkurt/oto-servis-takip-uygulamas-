<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim_ayarlar_model extends CI_Model{

	public function __construct()
	{
        parent::__construct();
	}

	public function yonetici_listesi()
	{
		return $this->db->get("kullanicilar")->result();
	}

	public function yonetici_ekle($kullanicilar)
	{
		return $this->db->insert("kullanicilar",$kullanicilar);
	}

	public function yonetici_duzenle($id)
	{
		$this->db->where('kullaniciId',$id);
		return $this->db->get("kullanicilar")->row();
	}

	public function yonetici_guncelle($id,$kullanicilar)
	{
		$this->db->where('kullaniciId',$id);
		return $this->db->update("kullanicilar",$kullanicilar);
	}

	public function yonetici_sil($id)
	{
		$this->db->where("kullaniciId",$id);
		return $this->db->delete("kullanicilar");

	}



}


 ?>