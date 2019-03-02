$(document).ready(function(){
	$('#language').change(function(e){
	   	e.preventDefault();
	   	$.ajaxSetup({
	      	headers: {
	          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	      	}
	  	});
	   	$.ajax({
	      	url: "{{ url('/changelang') }}",
	      	method: 'POST',
	      	data: {
	         	lang: $('#language').val(),
	      	},
	      	success: function(result){
	         	console.log(result);
	      	}
	    });
	});
});