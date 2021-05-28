
<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>yonetim_ayarlar"><i class="material-icons">people</i> Yöneticiler</a></li>
	    <li class="active"><i class="material-icons">edit</i> Yönetici Düzenle</li> 
	</ol>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Yönetici Düzenle
		        </h2>
		    </div>
		    <div class="body">
		        <form action="<?php echo base_url() ?>Yonetim_ayarlar/yonetici_guncelle/<?php echo $yonetici->kullaniciId ?>" method="POST" accept-charset="utf-8">
			        <div class="row clearfix">
			            <div class="col-sm-12">

			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Ad</label>
			                        <input type="text" class="form-control" name="ad" placeholder="Adınızı Giriniz" value="<?php echo $yonetici->kullaniciAd ?>"> 
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Soyad</label>
									<input type="text" class="form-control" name="soyad" placeholder="Soyadınızı Giriniz" value="<?php echo $yonetici->kullaniciSoyad ?>"> 
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Kullanıcı Adı</label>
									<input type="text" class="form-control" name="kullaniciAdi" placeholder="Sisteme Giriş için Kullanıcı Adı Giriniz" value="<?php echo $yonetici->kullaniciAdi ?>">
			                    </div>
			                </div>
			                
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Şifre<font color="orange">  ( Aynı kalacaksa boş bırakın )</font></label>
									<input type="password" class="form-control"  placeholder="Şifrenizi Giriniz" name="sifre" value="" >

			                    </div>
			                </div>
			                
			                <div class="form-group"> 
								<button type="submit" class="btn btn-oval btn-primary">Kaydet</button> 
							</div>
			            </div>
			        </div>
		        </form>
    		</div>
		</div>
	</div>
</div>