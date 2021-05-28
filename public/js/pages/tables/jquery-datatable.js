$(function () {
    $('.js-basic-example').DataTable({
	   	order: [[ 0, 'desc' ]],
		columnDefs: [
		    { "visible": false, "targets": 0 }
		  ],
		language: {
			paginate: {
		      next: "Sonraki",
		      previous:"Önceki"
		    },
		    lengthMenu: "_MENU_ Kayıt göster",
		    search: "Arama:",
		    zeroRecords: "Kayıt Bulunamadı",
		    info: "Gösterilen sayfa _PAGE_ / _PAGES_"
		  }
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});