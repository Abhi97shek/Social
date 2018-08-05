$('documnet').ready(function(e) {
	
$('.form1').submit(function(){
	var elements=$('.form1 .form-control');
	flag=0;
	$.each(elements,function(i,value){
		
		if($(this).val()=="")
		{
			
			$(this).parent().parent().addClass("has-error");
			flag=1;
			
		}
		else
		{
			$(this).parent().parent().removeClass("has-error");
			$(this).parent().parent().addClass("has-success");
			
		}
		
	});
	
	 if(flag==1)
	 {
		 return false;
	 }
	 else
	 {
		 return true;
	 }
});
	$('#passc').blur(function(){
		var pass=$('#pass');
		var passc=$('#passc');
	if($(pass).val()!=$(passc).val())
	{
		$('.vpassc span').remove();
		
		$('.vpassc').append('<span>Password Does Not Match</span>');
		
	}	
	else if($(pass).val()==$(passc).val())
	{
		$('.vpassc span').remove();
		
		$('.vpassc').append('<span>Password Match</span>');
	}	
	});
	
	$('#phone').blur(function(){
		if($('#phone').val().length <= 9)
		{
			$('.vphone span').remove();
			$('.vphone').append('<span>Please Check Your No. Of Digits</span>');
			
			
		}
		else if($('#phone').val().length >= 11)
		{
				$('.vphone span').remove();
				
			$('.vphone').append('<span>Please Check Your No. Of Digits</span>');
		}
		else if($('#phone').val().length==10)
		{
			$('.vphone span').remove();
			
		}
		var vali= /^\d*[0-9]$/;
		if(!vali.test($(this).val()))
		{
			$('.vphone span').remove();
			$('.vphone').append('<span>Number Only</span>');
			
		}
		
		
		
		
		
	});
	 
	 


	
});