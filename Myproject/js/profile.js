$('.upload').click(function(){
$.ajax({
	url:"functions.php",
	data:{action:"hello"},
	method:"post",
	success:function(data)
		{
		alert(data);
		}
	
	
	
	
	});
	});