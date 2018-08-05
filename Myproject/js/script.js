$('.upload').click(function(){
var status=$('textarea').val();	
var imageid="";
var uploadform=$('#uploadform *').length;
if(uploadform>3)
{
	
	imageid=$('input[name="hidepost"]').val();
}	
if(status=="")
{
alert("Please Write Something");		
}
else
{
	$.ajax({
		url:"functions.php",
		data:{status:status,action:"hello",imagepost:imageid},
		method:"post",
		success:function(data)
		{
		$('#postlist').load("account.php #postlist");
		}
});
$('textarea').val("");	
}	
});
$('#coverform').submit(function(e){
	e.preventDefault();
	var formData = new FormData(this);
	$.ajax({
		url:"functions.php",
		data:formData,
		type:"post",
		cache: false,
        contentType: false,
        processData: false,
		success:function(data)
			{
			$('.profilecover').css('background-image','url('+data+')');
			$('#myModal').modal('toggle');
			}
		});
	
	});
$('#Profileform').submit(function(e){
e.preventDefault();
var formDatas = new FormData(this);
$.ajax({
		url:"functions.php",
		data:formDatas,
		type:"post",
		cache: false,
        contentType: false,
        processData: false,
		success:function(data)
			{
			
   			$('.profilepicture img').attr("src",data);
			$('#Profilemodal').modal('toggle');
			
			}
		});
	
	});
$('#uploadhomeimage').submit(function(e){
	e.preventDefault();
var formimage=new FormData(this);
$.ajax({
		url:"functions.php",
		data:formimage,
		type:"post",
		cache:false,
		contentType:false,
		processData:false,
		success: function(data)
		{
		$('textarea').after("<input type='hidden' value='"+ data +"' name='hidepost'>");
		$('#imageupload').modal('toggle');	
		}
	});		
});	
$('#logoutbutton').click(function(e){
	e.preventDefault();
	$.ajax({
		url:"functions.php",
		type:"POST",
		data:{action:"goodbye"},
		success: function(data)
		{
			if(data=="goodbye")
			{
			window.location.href ='index.php';	
			}
		}
		});
});
$('.sentbutton').click(function()
{
	var friendid=$(this).attr('data-myAttri');
	var image=$(this);
	$(image).find('img').show();
	$(image).attr('disabled',false);
	$.ajax({
		url:"functions.php",
		type:"POST",
		data:{action:"request",friendid:friendid},
		success:function(data)
		{
			$(image).find('img').hide();
			$(image).html('Request Send');
			$(image).attr('disabled',true);
			
		}
		});	
});
$('.acceptbutton').click(function(){
	var accept=$(this);
	var friendid=$(this).attr('data-accept');
	$.ajax({
		url:"functions.php",
		type:"POST",
		data:{action:"accept",friendid:friendid},
		success: function(data)
		{
			alert(data);
			$(accept).html('Friends');
			$(accept).parent().find('.deletebutton').hide();	
		}
		});
	
	
});
$('.deletebutton').click(function(){
	var deleterequest=$(this);
	var frienddelete=$(this).attr('data-delete');
	$.ajax({
		url:"functions.php",
		type:"POST",
		data:{action:"delete",friendid:frienddelete},
		success: function(data)
		{
			$(deleterequest).html('Request Deleted');
			$(deleterequest).parent().find('.acceptbutton').hide();	
			$(deleterequest).attr('disabled',true);
			
		}
		});
});
$('.like').click(function()
{
	var likethis=$(this);
	var attri=$(this).attr('data-like');
	var postid=$(this).attr('data-hidden');
if(attri==0)
{		
		$.ajax({
		url:"functions.php",
		type:"post",
		dataType: 'json',
		data:{action:"like",postid:postid},
		success: function(data)
		{
			$(likethis).css("color","#03F");
			$(likethis).html("<p><i class='fa fa-thumbs-down' aria-hidden='true'></i>Unlike</p>");
			$(likethis).attr('data-like','1');
			$(likethis).parent().find('.number').text(data.likes);
		}
		
		});	
}

else
{
		$.ajax({
		url:"functions.php",
		type:"POST",
		dataType: 'json',
		data:{action:"unlike",postid:postid},
		success: function(data)
		{
			$(likethis).html("<p><i class='fa fa-thumbs-up' aria-hidden='true'></i> Like</p>");
			$(likethis).css("color","#000");
			$(likethis).attr('data-like','0');
			$(likethis).parent().find('.number').text(data.likes);	
		}
				});		
}
	});
$('.down').click(function(){
	var down=$(this);
	var attri=$(this).attr('data-hidden');
	if(attri==0)
	{	
	$(down).parent().parent().parent().find('.showcomment').css('display','inline-block');
	$(down).attr('data-hidden','1');
	
	}
	else
	{
		$(down).parent().parent().parent().find('.showcomment').css('display','none');
		$(down).attr('data-hidden','0');
	}
});
$('.comment').bind("enterkey",function(e)
{
	var userid=$(this).attr('data-id');
	var comment=$(this).val();
	var list=$(this);
	var i;
	$.ajax({
		url:"functions.php",
		type:"POST",
		data:{action:"comment",userid:userid,comment:comment},
		success: function(data)
		{
		var img=$(list).parent().parent().find('.commentimage').html();
		$(list).parent().parent().find('.commentimage').before('<div class="commentimage1 col-lg-1">'+ img +'</div>' + '<div class="commenttext1" col-lg-8"><p>' + data+ '</p></div>'+'<div class="clear"></div>' );
			$(list).val('');
		}
		
		
		
		});
	
	
	
});
$('.comment').keyup(function(e)
{
	if(e.keyCode==13)
	{
	$(this).trigger("enterkey");	
	}
	
});