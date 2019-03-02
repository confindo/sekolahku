$(document).ready(function(){
	$('#languagechoose').change(function(e){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

	   	$.ajax({
            type:'POST',
            url:'{{ url("/changelang") }}',
            data:{
            	lang : $('#languagechoose').val()
            },
            success: function(data){
                alert('success');
            }
        });
	});
});