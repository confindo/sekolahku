$(document).ready(function(){
	$('#languagechoose').change(function(e){
	   	e.preventDefault();
	   	$.ajaxSetup({
	      	headers: {
	          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	      	}
	  	});
	   	$.ajax({
	      	url: "{{ url('/changelang') }}",
	      	method: 'post',
	      	data: {
	         	lang: $('#languagechoose').val(),
	      	},
	      	success: function(result){
	         	console.log(result);
	      	}
	    });
	});
});