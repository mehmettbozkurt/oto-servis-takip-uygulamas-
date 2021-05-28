<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris_yonetim_model extends CI_Model{
	
	public function __construct()
	{
        parent::__construct();
	}

	public function giris($kullaniciAdi,$sifre)
	{
		$where =  array('kullaniciAdi' => $kullaniciAdi, 'kullaniciSifre' => $sifre);
		$this->db->where($where);
		return $this->db->get("kullanicilar")->row();
	}


	public function sayfaSayisi()
	{
		return $this->db->query("SELECT(  
					      SELECT COUNT(*)  
					      FROM   kullanicilar
					      ) AS kullaniciSayisi,  
					      (SELECT COUNT(*)  
					      FROM   arac_bilgisi  
					      ) AS aracSayisi,
					      (SELECT COUNT(*)  
					      FROM   musteriler  
					      ) AS musteriSayisi,
					       (SELECT COUNT(*)  
					      FROM   servisler  
					      ) AS servisSayisi,
					      (SELECT COUNT(*)  
					      FROM   servis_kayitlari  
					      ) AS servisAracSayisi
					      
					   

					FROM DUAL")->row();
		
	}



}

 ?>