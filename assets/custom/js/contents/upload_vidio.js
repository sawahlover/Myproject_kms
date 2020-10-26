$(document).ready(function(){
    edit_vidio();
    function edit_vidio(){
        const url = $("#linkvidio").val();
        if(url!=''){
            display_vidio(url)
        }
    }
    $(document).on('click','.simpan',function(){
        let act=$(this).attr('data-act')
        let old_btn_act_text=$(".text-simpan").html();
        let tombol = $(".text-simpan");

        $(".dropdown-toggle-split,.simpan").prop('disabled',true);
        tombol.html("Saving content...")
        $.ajax({
            type:'post',
            url:base_url+'contents/simpan',
            data:$("#form-vidio").serialize(),
            dataType:'json',
            error:function(err, desc, jdul){
                $(".dropdown-toggle-split,.simpan").prop('disabled',false);
                tombol.html(old_btn_act_text)
                notifikasi(jdul,'danger',null,desc,null);
            },
            success:function(res){
                $(".dropdown-toggle-split,.simpan").prop('disabled',false);
                tombol.html(old_btn_act_text)
                if(res.success){
                    swal.fire({
                        title:"Successfully",
                        text:"Video uploaded successfully.",
                        type:'success',
                        confirmButtonText: 'Ok',
                    }).then(function(result){
                        if(result.value){
                            if(act==='simpan-new'){
                                window.location.href=base_url+'contents/upload/vidio'
                            }else if(act==='simpan-exit'){
                                window.location.href=base_url+'dashboard'
                            }else if(act==='simpan-edit'){
                                window.location.href=base_url+'contents/upload/vidio/'+res.id
                            }else if(act==='simpan-view'){
                                window.location.href=base_url+'contents/data/vidio'
                            }
                        }
                    });
                }else{
                    notifikasi(res.message,'danger',null,"Gagal");
                }
            }
        })
    })
})
function responsive_filemanager_callback(field_id){
    let url=$("#"+field_id).val();
    display_vidio(url)
}  

function display_vidio(url){
    $("#jquery_jplayer_1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: $("#title").val(),
				m4v: url,
			});
		},
		swfPath: "../../dist/jplayer",
		supplied: "webmv, ogv, m4v",
		size: {
			width: "640px",
			height: "360px",
			cssClass: "jp-video-360p"
		},
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});

    $(".uploadarea").addClass('kt-hidden');
    $("#priview_vidio").removeClass('kt-hidden');
}