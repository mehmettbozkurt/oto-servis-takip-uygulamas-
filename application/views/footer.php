</section>
</div>


<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url(); ?>public/plugins/autosize/autosize.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/momentjs/moment.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

<script src="<?php echo base_url(); ?>public/plugins/bootstrap/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>
<script src="<?php echo base_url(); ?>public/plugins/light-gallery/js/lightgallery-all.js"></script>
<script src="<?php echo base_url(); ?>public/js/pages/tables/jquery-datatable.js"></script>
<script src="<?php echo base_url(); ?>public/js/pages/forms/advanced-form-elements.js"></script>

</body>

<script type="text/javascript">

    function silOnayi(url, tip) {
        swal({
                title: "Silmek istediğinizden emin misiniz?",
                text: tip + " nesnesini silirseniz bi daha göremeyeceksiniz",
                type: "error",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Evet, Sil!",
                closeOnConfirm: false,
                cancelButtonText: "İptal"
            },
            function () {
                swal("Silindi!", tip + " silinmiştir.", "success");
                setTimeout(function () {
                    window.location = url;
                }, 2000);
            });
    }

    $('.datepicker').bootstrapMaterialDatePicker({
        format: 'dddd DD MMMM YYYY',
        clearButton: true,
        weekStart: 1,
        time: false
    });

    $('.timepicker').bootstrapMaterialDatePicker({
        format: 'HH:mm',
        clearButton: true,
        date: false
    });
    $(".marka").on("change", function () {
        var marka = $(this).val();
        if (marka != 0 && marka != "" && marka != undefined) {
            loading();
            $(".arac_modeller").html('');

            $.ajax({
                type: "POST",
                url: "./Servis_yonetim/model_listesi/",
                data: {"marka": marka},
                dataType: "json",
                success: function (data) {
                    swal.close();
                    $(".arac_modeller").html('<option value="">Lütfen Model Seçiniz</option>');
                    $.each(data, function (key, sonuc) {
                        $(".arac_modeller").append('<option value="' + sonuc.model + '">' + sonuc.model + '</option>');
                    });

                }
            });
        }

    })
    $(".tamir_turu").on("change", function () {
        var tamir_turu = $(this).val();
        if (tamir_turu != 0 && tamir_turu != "" && tamir_turu != undefined) {
            loading();
            $(".tamir_yeri").html('');

            $.ajax({
                type: "POST",
                url: "./Servis_yonetim/tamir_yeri_listesi/",
                data: {"tamir_turu": tamir_turu},
                dataType: "json",
                success: function (data) {
                    swal.close();
                    $(".tamir_yeri").html('<option value="">Lütfen Tamir Yeri Seçiniz</option>');
                    $.each(data, function (key, sonuc) {
                        $(".tamir_yeri").append('<option value="' + sonuc.tamir_yeri + '">' + sonuc.tamir_yeri + '</option>');
                    });

                }
            });
        }

    })
    $("#servis_kayit_kaydet").on("submit", function (e) {

        e.preventDefault();
        var data = $('#servis_kayit_kaydet').serializeArray();
        swal({
                title: "Onaylıyor musunuz",
                text: "Servis Kaydı Oluşturulmak Üzere...",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Evet",
                cancelButtonText: "Vazgeç",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function () {
               $.ajax({
                    type: "POST",
                    url: "./Servis_yonetim/servis_kayit_kaydet/",
                    data: data,
                    dataType: "json",
                    success: function (response) {
                        if ( response.result == 1) {
                            $("#servis_kayit_kaydet").trigger("reset");
                            swal("İşlem Başarılı", response.message, "success")
                        }else{
                             swal("İşlem Başarısız", response.message, "warning")
                        }
                    }
                });
            });



    });


</script>
</html>