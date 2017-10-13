
$('#template-contactform-submit').click(function(){
	var valid=$("#template-contactform").valid();
	
	if(valid){
		var contactName=$('#template-contactform-name').val();
		var contactEmail=$('#template-contactform-email').val();
		var contactSubject=$('#template-contactform-subject').val();
		var contactMessage=$('#template-contactform-message').val();
		
		if($('.check-email').text()==''){
			sendUsEmail(contactName,contactEmail,contactSubject,contactMessage);
		}else{
			$('#template-contactform-email').focus();
		}
	}
	
});
	
function sendUsEmail(contactName,contactEmail,contactSubject,contactMessage){

	$.ajax({
			type: 'POST',
          	url: 'pages/serverside/sendEmail.php',
         	data: {name:contactName,email:contactEmail,subject:contactSubject,message:contactMessage,type:'sendUsEmail'},
        }).done(function(data){
        	$('.success-message span').html(data);
        	$('.success-message').show();
        	$('.success-message').fadeOut(6000);
        	$("#template-contactform").refresh();

        }).fail(function (data) {
            $('.error-message span').html(data);
            $('.error-message').show(data);
            $('.error-message').fadeOut(6000);
        });
}

function checkEmail(){
	var contactEmail=$('#template-contactform-email').val();

	$.ajax({
			type: 'POST',
          	url: 'pages/serverside/sendEmail.php',
         	data: {email:contactEmail,type:'checkEmail'},
        }).done(function(data){
        	console.log(data);
        	$('.check-email').html(data).show();
        	// $('.success-message').fadeOut(6000);

        }).fail(function (data) {
            // $('.error-message span').html(data);
            // $('.error-message').show(data);
            // $('.error-message').fadeOut(6000);
        });
}

//==================================================================

// else{
			// if(contactName.length >20){
			// 	$('.name-length').show();
			// 	$('.name')='';
			// 	$('.name').focus();
			// }
		// }

	// var contactName=$('#template-contactform-name').val();
	// var contactEmail=$('#template-contactform-email').val();
	// var contactSubject=$('#template-contactform-subject').val();
	// var contactMessage=$('#template-contactform-message').val();
	// var notEmppty=true;
	// if(contactName==''){
	// 	$('#template-contactform-name').attr('placeholder',' *Name');
	// 	$('.name').addClass('error');
	// 	notEmppty=true;
	// }else{
	// 	notEmppty=false;
	// }
	// if(contactEmail==''){
	// 	$('#template-contactform-email').attr('placeholder',' *Email');
	// 	$('.email').addClass('error');
	// 	notEmppty=true;
	// }else{
	// 	notEmppty=false;
	// }
	// if(contactSubject==''){
	// 	$('#template-contactform-subject').attr('placeholder',' *Subject');
	// 	$('.subject').addClass('error');
	// 	notEmppty=true;
	// }else{
	// 	notEmppty=false;
	// }
	// if(contactMessage==''){
	// 	$('#template-contactform-message').attr('placeholder',' *Message');
	// 	$('.message').addClass('error');
	// 	notEmppty=true;
	// }else{
	// 	notEmppty=false;
	// }
	

	// if(notEmppty==false){
	// 	sendUsEmail(contactName,contactEmail,contactSubject,contactMessage);
	// } 