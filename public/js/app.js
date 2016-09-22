var domain_id;
var client_id_element,client_name_element,client_business_element,client_ref_element,gmail_mail_element,gmail_pass_element,
client_dob_element,client_addr_element,client_no1_element,domain_name_element,domain_p_date_element,domain_reg_element,
domain_ex_date_element,domain_acc_email_element,domain_acc_pass_element = null;

jQuery(function($){ 

	$('.panel-body').find('.table').find('tr').find('td').find('a.edit-domain').on('click' , function(event){

		event.preventDefault();
		 domain_id = event.target.parentNode.parentNode.dataset['domainid'];

		client_id_element = event.target.parentNode.parentNode.childNodes[5];
		var client_id = client_id_element.textContent;

		client_name_element = event.target.parentNode.parentNode.childNodes[7];
		var client_name = client_name_element.textContent;

		client_business_element = event.target.parentNode.parentNode.childNodes[9];
		var client_business = client_business_element.textContent;

		client_ref_element =  event.target.parentNode.parentNode.childNodes[11];
		var client_ref = client_ref_element.textContent;

		gmail_mail_element =  event.target.parentNode.parentNode.childNodes[13];
		var gmail_mail = gmail_mail_element.textContent;

		gmail_pass_element =  event.target.parentNode.parentNode.childNodes[15];
	 	var gmail_pass = gmail_pass_element.textContent;

	 	client_dob_element =  event.target.parentNode.parentNode.childNodes[17];
		var client_dob = client_dob_element.textContent;

		client_addr_element = event.target.parentNode.parentNode.childNodes[19];
		var client_addr = client_addr_element.textContent;

		client_no1_element =  event.target.parentNode.parentNode.childNodes[21];
		var client_no1 = client_no1_element.textContent;

		domain_name_element =  event.target.parentNode.parentNode.childNodes[23];		
		var domain_name = domain_name_element.textContent;

		domain_p_date_element =  event.target.parentNode.parentNode.childNodes[25];
		var domain_p_date = domain_p_date_element.textContent;

		domain_reg_element =  event.target.parentNode.parentNode.childNodes[29];
		var domain_reg = domain_reg_element.textContent;

		domain_ex_date_element =  event.target.parentNode.parentNode.childNodes[27];
		var domain_ex_date = domain_ex_date_element.textContent;

		domain_acc_email_element =  event.target.parentNode.parentNode.childNodes[31];
		var domain_acc_email = domain_acc_email_element.textContent;

		domain_acc_pass_element =  event.target.parentNode.parentNode.childNodes[33];
		var domain_acc_pass = domain_acc_pass_element.textContent;

		$('#client_id').val(client_id);
		$('#client_name').val(client_name);
		$('#client_business').val(client_business);
		$('#client_ref').val(client_ref);
		$('#gmail_mail').val(gmail_mail);
		$('#gmail_pass').val(gmail_pass);
		$('#client_dob').val(client_dob);
		$('#client_addr').val(client_addr);
		$('#client_no1').val(client_no1);
		
		$('#domain_name').val(domain_name);
		$('#domain_p_date').val(domain_p_date);
		$('#domain_reg').val(domain_reg);
		$('#domain_ex_date').val(domain_ex_date);
		$('#domain_acc_email').val(domain_acc_email);
		$('#domain_acc_pass').val(domain_acc_pass);




		
		$('#update-modal').modal();

//console.log("Button clicked");
});


	$('#update-modal').on('click',function(){

		$.ajax({

			type : "get",
			url : updateURL,
			data : { client_id : $('#client_id').val(),
			         client_name : $('#client_name').val(),
			         client_business : $('#client_business').val(),
			         client_ref : $('#client_ref').val(),
			         gmail_mail : $('#gmail_mail').val(),
			         gmail_pass : $('#gmail_pass').val(),
			         client_dob : $('#client_dob').val(),
			         client_addr : $('#client_addr').val(),
			         client_no1 : $('#client_no1').val(),
			         
			         domain_name : $('#domain_name').val(),
			         domain_p_date : $('#domain_p_date').val(),
			         domain_reg : $('#domain_reg').val(),
			         domain_ex_date : $('#domain_ex_date').val(),
			         domain_acc_email : $('#domain_acc_email').val(),
			         domain_acc_pass :  $('#domain_acc_pass').val(),
			         domain_id : domain_id,
			         _token : token 
			     }

		})
		.done(function(msg){
			$(client_id_element).text(msg['client_id']);
			$(client_name_element).text(msg['client_name']);
			$(client_business_element).text(msg['client_business']);
			$(client_ref_element).text(msg['client_ref']);
			$(gmail_mail_element).text(msg['gmail_mail']);
			$(gmail_pass_element).text(msg['gmail_pass']);
			$(client_dob_element).text(msg['client_dob']);
			$(client_addr_element).text(msg['client_addr']);
			$(client_no1_element).text(msg['client_no1']);
			$(domain_name_element).text(msg['domain_name']);
			$(domain_p_date_element).text(msg['domain_p_date']);
			$(domain_reg_element).text(msg['domain_reg']);
			$(domain_ex_date_element).text(msg['domain_ex_date']);
			$(domain_acc_email_element).text(msg['domain_acc_email']);
			$(domain_acc_pass_element).text(msg['domain_acc_pass']);



			

		});
	});

});