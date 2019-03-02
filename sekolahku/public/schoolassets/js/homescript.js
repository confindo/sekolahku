$(document).ready(function(){
	$('#languagechoose').change(function(e){
	   	$.ajax({
            type:'POST',
            url:'/changelang',
            data:{
            	_token : '<?php echo csrf_token() ?>',
            	lang : $('#languagechoose').val()
            },
            success: function(data){
                alert('success');
            }
        });
	});
});