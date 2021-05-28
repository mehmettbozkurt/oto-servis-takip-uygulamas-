<style type="text/css" media="screen">

a{

    text-decoration: none!important;

    cursor: pointer!important;

}    

</style>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

    <a href="javascript:void(0)">

    <div class="info-box hover-zoom-effect">

        <div class="icon bg-orange">

            <i class="material-icons">people</i>

        </div>

        <div class="content">

            <div class="text">Müşteriler</div>

            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->musteriSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->musteriSayisi ?></div>

        </div>

    </div>

    </a>

</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

    <a href="javascript:void(0)">

    <div class="info-box hover-zoom-effect">

        <div class="icon bg-orange">

            <i class="material-icons">ballot</i>

        </div>

        <div class="content">

            <div class="text">Servis Tamir</div>

            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->servisSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->servisSayisi ?></div>

        </div>

    </div>

    </a>

</div>


<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

    <a href="javascript:void(0)">

    <div class="info-box hover-zoom-effect">

        <div class="icon bg-orange">

            <i class="material-icons">email</i>

        </div>

        <div class="content">

            <div class="text">Servisteki Araçlar</div>

            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->servisAracSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->servisAracSayisi ?></div>

        </div>

    </div>

    </a>

</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

    <a href="javascript:void(0)>">

    <div class="info-box hover-zoom-effect">

        <div class="icon bg-orange">

            <i class="material-icons">account_circle</i>

        </div>

        <div class="content">

            <div class="text">Yöneticiler</div>

            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->kullaniciSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->kullaniciSayisi ?></div>

        </div>

    </div>

    </a>

</div>




    