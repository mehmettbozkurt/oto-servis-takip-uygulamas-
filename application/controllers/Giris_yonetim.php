<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris_yonetim extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Giris_yonetim_model","giris");
		
	}

	public function index()
	{
		if($this->session->userdata("kullaniciBilgiler"))
		{
			$data["sayfaSayisi"] = $this->giris->sayfaSayisi();
		
			$this->load->view("header");
			$this->load->view("sidebar",$data);
			$this->load->view("index",$data);
			$this->load->view("footer");

		}else{

			$this->load->view("header");
			$this->load->view("giris");
			$this->load->view("footer");
		
		}
		
	}

	public function giris()
	{
		$kullaniciAdi = $this->input->post("kullaniciAdi",TRUE);
		$sifre = md5($this->input->post("sifre",TRUE));

		$data = $this->giris->giris($kullaniciAdi,$sifre);
		

		if($data){

			$this->session->set_userdata('kullaniciBilgiler', $data);

		}else{

			$this->session->set_flashdata('mesaj', "Kullanıcı adı veya şifre hatalı tekrar deneyiniz.");

		}
		
		redirect(base_url());


	}

	public function cikis()
	{
		$this->session->unset_userdata("kullaniciBilgiler");
		redirect(base_url());
	}

}

 ?>