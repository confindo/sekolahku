$(document).ready(function(){
	let language = $("#language");

	language.change(function(){
		$.ajax({
			type: "POST",
			url: "{{ url('/changelang') }}",
			data: {lang:$(this).val(),_token:'{{ csrf_token() }}'},
			cache: false,
			success: function(data){
				alert("success");
			}
		});
	});
});