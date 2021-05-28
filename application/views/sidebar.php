<!-- Overlay For Sidebars -->
<style type="text/css">
    .menu-rengi {
        color: #F44336!important;
    }
    
}
</style>
<div class="overlay"></div>

<!-- #END# Overlay For Sidebars -->

<!-- Top Bar -->

<nav class="navbar">

    <div class="container-fluid">

        <div class="navbar-header">

            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>

            <a href="javascript:void(0);" class="bars"></a>

            <a class="navbar-brand" href="<?php echo base_url() ?>">Oto Servis - Uygulama Paneli</a>

        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

                <li><a title="Çıkış Yap" href="<?php echo base_url("/giris_yonetim/cikis") ?>"><i class="material-icons">input</i></a></li>

            </ul>

        </div>

    </div>

</nav>

<!-- #Top Bar -->



<section>

    <aside id="leftsidebar" class="sidebar">



       <div class="menu">

        <ul class="list">

            <li class="header">Menü</li>

            <li>

                <a href="<?php echo base_url(); ?>" class="<?php echo $this->uri->segment(2) == "" ? "menu-rengi":"" ?>">

                    <i class="material-icons">home</i>

                    <span>Anasayfa</span>

                </a>

            </li>

            <li>

                <a href="<?php echo base_url("servis_yonetim/servis_kaydi_ekle"); ?>" class="<?php echo $this->uri->segment(2) == "servis_yonetim/servis_kaydi_ekle" ? "menu-rengi":"" ?>">

                    <i class="material-icons">settings</i>

                    <span>Servis Yönetimi</span>

                </a>

            </li>




                <li>

                    <a href="javascript:void(0);" class="menu-toggle <?php echo $this->uri->segment(2) == "yonetim_ayarlar" ? "toggled menu-rengi":"" ?>">

                        <i class="material-icons">account_circle</i>

                        <span>Yönetici Ayarları</span>

                    </a>

                    <ul class="ml-menu">

                        <li>

                            <a href="<?php echo base_url("yonetim_ayarlar/yeni_yonetici"); ?>">

                                <i class="material-icons">add</i>

                                <span class="sub-menu">Yönetici Ekle</span>

                            </a>

                        </li>

                        <li>

                            <a href="<?php echo base_url("yonetim_ayarlar/"); ?>">

                                <i class="material-icons">format_list_bulleted</i>

                                <span class="sub-menu">Yönetici Listesi</span>

                            </a>

                        </li>

                    </ul>

                </li>


        </ul>

    </div>

    <!-- #Menu -->



</aside>

<!-- #END# Left Sidebar -->



</section>



<section class="content">

    <div class="container-fluid">