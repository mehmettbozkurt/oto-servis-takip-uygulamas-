<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>yonetim_ayarlar"><i class="material-icons">people</i> Yöneticiler</a></li>
	    <li class="active"><i class="material-icons">person_add</i> Yönetici Ekle</li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Yönetici Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>Yonetim_ayarlar/yonetici_ekle/" method="POST" accept-charset="utf-8">

					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label">Ad</label> 
							<input type="text" class="form-control" name="ad" placeholder="Adınızı Giriniz" required=""> 
						</div>
					</div>
					<div class="form-group"> 
					 	<div class="form-line"> 
							<label class="control-label">Soyad</label> 
							<input type="text" class="form-control" name="soyad" placeholder="Soyadınızı Giriniz" required=""> 
						</div>
					</div>
					<div class="form-group"> 
					 	<div class="form-line"> 
							<label class="control-label">Kullanıcı Adı</label> 
							<input type="text" class="form-control" name="kullaniciAdi" placeholder="Sisteme Giriş için Kullanıcı Adı Giriniz" required=""> 
						</div>
					</div>
					<div class="form-group"> 
					 	<div class="form-line"> 
							<label class="control-label">Şifre</label> 
							<input type="password" class="form-control" name="sifre" placeholder="Şifrenizi Giriniz" minlength="4" required=""> 
						</div>
					</div>

					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>

