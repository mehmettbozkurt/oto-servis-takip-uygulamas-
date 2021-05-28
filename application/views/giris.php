<style type="text/css" media="screen">

body{
    background-color: #00BCD4;
 }

</style>
<div class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="https://nurcanmakina.com/" ><b>Oto Servis Giriş</b></a>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo base_url(); ?>giris_yonetim/giris">
                    <div class="msg">Uygulama Paneli</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="kullaniciAdi" placeholder="Kullanıcı Adı" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="sifre" placeholder="Şifre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Giriş</button>
                        </div>
                    </div>
                    <?php if($this->session->flashdata("mesaj")){?>
                    <div class="alert bg-red animated shake">
                            <?php echo $this->session->flashdata("mesaj"); ?>
                    </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    setTimeout(function() {
        $(".alert").hide();
    }, 3000);
</script>