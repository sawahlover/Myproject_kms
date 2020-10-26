$(document).ready(function(){
    $(".filemanager").fancybox({
        'width'				: '90%',
        'height'			: '90%',
        'autoScale'			: true,
        'transitionIn'		: 'zoom',
        'transitionOut'		: 'none',
        'type'				: 'iframe'
    });
})

function notifikasi(msg=null,tipe=null,times=null,$title=null,$icon=null){
    let time=500;
    if(times!=null){
        time=times;
    }
    $.notify({ 
        icon: $icon, 
        message:msg,
        title:$title,
        icon_type:'class',
        },{
        type: tipe,
        spacing: 10,                  
        timer: time,
        placement: {
            from: 'top', 
            align: 'right'
        },
        offset: {
            x: 30, 
            y: 30
        },
        delay: 100,
        z_index: 10000,
        animate: {
            enter: 'animated bounce',
            exit: 'animated bounce'
        }
    });
}