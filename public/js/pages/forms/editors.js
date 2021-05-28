
var baseUrl = $("base").attr("href");

$(function () {

    //TinyMCE
     tinymce.suffix = ".min";

    tinyMCE.baseURL = baseUrl + '/public/admin/plugins/tinymce';

    tinymce.init({

        selector: "textarea#tinymce,textarea.tinymce",theme: "modern",height: 400,
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
       ],
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
       toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
       image_advtab: true ,
       relative_urls : false,
       remove_script_host : false,
       convert_urls : true,
       language :   "tr_TR",
       external_filemanager_path:"public/admin/plugins/filemanager/",

       filemanager_title:"Sivassoft Dosya Yöneticisi" ,
       external_plugins: { "filemanager" : tinyMCE.baseURL+ "/plugins/responsivefilemanager/plugin.min.js"},

        file_picker_types:'file image media',file_picker_callback:function(cb,value,meta){
            var width=window.innerWidth-30;
            
            var height=window.innerHeight-60;
            if(width>1800)width=1800;
            if(height>1200)height=1200;
            if(width>600){
                var width_reduce=(width-20)%138;
                width=width-width_reduce+10;
            }
                var urltype=2;
                if(meta.filetype=='image'){urltype=1;
                }if(meta.filetype=='media'){urltype=3;
                }
                var title="Sivassoft Dosya Yöneticisi";
                if(typeof this.settings.filemanager_title!=="undefined"&&this.settings.filemanager_title){title=this.settings.filemanager_title;
                }
                var akey="key";
                if(typeof this.settings.filemanager_access_key!=="undefined"&&this.settings.filemanager_access_key){akey=this.settings.filemanager_access_key;
                }
                var sort_by="";
                if(typeof this.settings.filemanager_sort_by!=="undefined"&&this.settings.filemanager_sort_by){sort_by="&sort_by="+this.settings.filemanager_sort_by;
            }
            var descending="false";
                if(typeof this.settings.filemanager_descending!=="undefined"&&this.settings.filemanager_descending){descending=this.settings.filemanager_descending;
                }
                var fldr="";
                if(typeof this.settings.filemanager_subfolder!=="undefined"&&this.settings.filemanager_subfolder){fldr="&fldr="+this.settings.filemanager_subfolder;
            }
            var crossdomain="";
                if(typeof this.settings.filemanager_crossdomain!=="undefined"&&this.settings.filemanager_crossdomain){crossdomain="&crossdomain=1";
                if(window.addEventListener){window.addEventListener('message',filemanager_onMessage,false);
            }else{window.attachEvent('onmessage',filemanager_onMessage);
            }}tinymce.activeEditor.windowManager.open({title:title,file:this.settings.external_filemanager_path+'dialog.php?type='+urltype+'&descending='+descending+sort_by+fldr+crossdomain+'&lang='+this.settings.language+'&akey='+akey,width:width,height:height,resizable:true,maximizable:true,inline:1},{setUrl:function(url){cb(url);
                }});
            },

    });
    jQuery(document).ready(function($){


        $('#download-button').on('click',function(){
            ga('send','event','button','click','download-buttons');
        });

        $('.toggle').click(function(){
            var _this=$(this);
            $('#'+_this.data('ref')).toggle(200);
            var i=_this.find('i');
            if(i.hasClass('icon-plus')){i.removeClass('icon-plus');
                i.addClass('icon-minus');
            }else{i.removeClass('icon-minus');
                i.addClass('icon-plus');
            }
        });
    });

   

});
