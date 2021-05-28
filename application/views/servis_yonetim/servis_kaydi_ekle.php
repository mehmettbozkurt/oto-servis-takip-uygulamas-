<div class="block-header">

    <ol class="breadcrumb breadcrumb-col-cyan">

        <li><a href="<?php echo base_url("panel"); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>

        <li><a href="<?php echo base_url("panel/hizmet_yonetim"); ?>"><i class="material-icons">settings</i> Servis
                Kaydı Listesi</a></li>

        <li class="active"><i class="material-icons">add</i>Servis Kaydı Ekle</a></li>

    </ol>
</div>
<div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Servis Kaydı Ekle</h2>
            </div>

            <div class="body">

                <form action="" method="POST"
                      accept-charset="utf-8" enctype="multipart/form-data" id="servis_kayit_kaydet">
                    <div >
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="control-label">Müşteri Adı </label>
                                        <input type="text" class="form-control" name="musteri_adi"
                                               placeholder="Müşteri Adı Giriniz" required="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="control-label">Marka </label>
                                        <select name="marka" class="form-control marka" required="">
                                            <option value="">Marka Seçiniz</option>
                                            <?php foreach ($markalar as $marka) { ?>
                                                <option value="<?php echo $marka->marka ?>"><?php echo $marka->marka ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="control-label">Model </label>
                                        <select name="model" class="form-control arac_modeller" required="">
                                            <option value="">Model Seçiniz</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="control-label">Tamir Türü </label>
                                        <select name="tamir_turu" class="form-control tamir_turu" required="">
                                            <option value="">Tamir Türü Seçiniz</option>
                                            <?php foreach ($tamir_turleri as $tur) { ?>
                                                <option value="<?php echo $tur->tamir_turu ?>"><?php echo $tur->tamir_turu ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label class="control-label">Tamir Yeri </label>
                                        <select name="tamir_yeri" class="form-control tamir_yeri" required="">
                                            <option value="">Tamir Yeri Seçiniz</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line"  i>
                                        <label class="control-label">Tamir Tarihi </label>
                                        <input type="date" name="tamir_tarihi" class=" form-control"
                                               placeholder="Tamir Tarihi Seçiniz" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line"  i>
                                        <label class="control-label">Tamir Saati </label>
                                        <input type="time" name="tamir_saati" class=" form-control"
                                               placeholder="Tamir Tarihi Seçiniz" required="">
                                    </div>
                                </div>
                            </div>
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
<script>
  <?php if($this->session->flashdata("mesaj")!=NULL){?>

        $.notify("<?php echo $this->session->flashdata('mesaj')['icerik']; ?>", {

            type: '<?php echo $this->session->flashdata('mesaj')['tip']; ?>',

            animate: {

                enter: 'animated zoomInRight',

                exit: 'animated zoomOutRight'

            }

        });

    <?php } ?>
</script>
