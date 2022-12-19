/* Add here all your JS customizations */
var stack_bar_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 0, "spacing2": 0};

function setLeadData(cid,leadid,uid,title){

	checkLogin(uid);

	$('#btnpremiun').css('display','none')
	$('#div_alert').css('display','none');
	$('#div_alert_contact').css('display','none');
	$('#msg_contents').html('');
	$('#msg_contents_contact').html('');

	$('#comp_for').val(cid);
	$('#comp_send').val(uid);
	$('#lead_id').val(leadid);
	$('#subject').val(title);
}

function SetMoreLeadsData(cid,leadid,company_name){

	showLoading('load_leads','Y');//show ajax loading
	$('#leads_from').html(company_name);

	$.ajax({
		type: "POST",
		url: $('#base_url').val()+"sellinglead/getCompanyLeads/",
		data: { cid: cid,leadid: leadid},
		success: function(html){

				showLoading('load_leads','N');//hide ajax loading
				$('#load_leads').html(html);
			}
		});//end ajax

}

function showAlert(errtext,mtype){	

			var notice = new PNotify({
			title: 'Notification',
			text: errtext,
			type: mtype,
			addclass: 'stack-bar-top',
			stack: stack_bar_top,
			width: "100%"
		});
}

$(function() { //shorthand document.ready function
			

	jQuery('.inner-menu-toggle-inside').click(function(){
		jQuery('.footer-special').css('margin-left','300px');
	});

	jQuery('.inner-menu-expand').click(function(){
		jQuery('.footer-special').css('margin-left','375px');
	});

	/////start importer matches
	jQuery('#find_matches').click(function(){
		jQuery('#row_progress').css('display','block');
		jQuery('#div_progress').css('display','block');

		if (jQuery('#msg_contents_matches').html()=='')
			jQuery('#msg_contents_matches').html('We are generating your business matches');
		var ajax_url = jQuery(this).data('url');
		
		jQuery.ajax({
			type	 : 'POST',
			url	 : jQuery('#base_url').val() + ajax_url,
			success: function(html){
				jQuery('#div_progress').css('display','none');
				var resp = html.split("#");
				jQuery('#msg_contents_matches').html(resp[1]);
				//showMsg(resp[1],resp[0]);
			}
		});
	});
	var query_str = getParameterByName('show');
	console.log(query_str+'farooq');
	if (query_str!="matches")
		$('#find_matches').trigger("click");
	//////end importer matches/////

	//start unction for add to contact on matches page
	jQuery(".add_single_contact").click(function(){

		var comp_id	= jQuery(this).data("id");
		jQuery.ajax({
			type	 : 'POST',
			url	 : jQuery('#base_url').val()+'user/AddContact/',
			data	 : {comp_id:comp_id},
			success: function(html){
				var resp = html.split("#");
				  	//console.log(resp);
				  	showMsg(resp[1],resp[0]);
				  }
				}); 
	});
	//end unction for add to contact on matches page

	$('#category').change(function(){
		window.location.href = $('#base_url').val()+'buyers-of-'+jQuery('#category').val();
	});

	$('#countries').change(function(){
		window.location.href = $('#base_url').val()+'buyers-from-'+jQuery('#countries :selected').text();
	});


	if ($("#sell_inquiry").length)
	{
		$("#sell_inquiry").validate(); 

		$("#sell_inquiry").on('submit', function(e){

			var isvalidate = $("#sell_inquiry").valid();

			if(isvalidate)
			{
				e.preventDefault();
				var data = $("#sell_inquiry").serialize();

				$.ajax({
					type: "POST",
					url: $('#base_url').val()+"sellinglead/SendInquiry/",
					data: data,
					success: function(html){
						var resp = html.split("#");
				  	//console.log(resp);
				  	showMsg(resp[1],resp[0]);

				  }
				});//end ajax
			}
		});
	}



	if ($("#buy_inquiry").length)
	{
		$("#buy_inquiry").validate(); 

		$("#buy_inquiry").on('submit', function(e){

			var isvalidate = $("#buy_inquiry").valid();

			if(isvalidate)
			{
				e.preventDefault();
				var data = $("#buy_inquiry").serialize();

				$.ajax({
					type: "POST",
					url: $('#base_url').val()+"buyinglead/SendQuotation/",
					data: data,
					success: function(html){
						var resp = html.split("#");
				  	//console.log(resp);
				  	showMsg(resp[1],resp[0]);
				  	setTimeout(function(){ $(".modal-dismiss").trigger('click'); }, 3000);
				  	
				  	

				  }
				});//end ajax
			}
		});
	}

	///set alert div to hidden and empty error contents
	$('#div_alert').css('display','none');
	$('#msg_contents').html('');

	var refreshId = setInterval(function()
	{
		jQuery('#div_alert').fadeOut("slow");
	}, 10000);


	///start company categories edit
	jQuery('#update-categories').click(function(){

		var values = new Array();
		jQuery.each(jQuery("input[name='business_cat[]']:checked"), function() {
			values.push(jQuery(this).val());
		});
		if(values.length==0){
			showMsg('Select At least one Product Category.','error');
			return;
		}else if(values.length >10){
			showMsg('You can select only upto 10 product categories.','error');
			return;
		}


		showLoading('edit_cat_load','Y');//show ajax loading
		var comp_id  = jQuery('#comp_id').val();
		jQuery.ajax({
			type	 : 'POST',
			url	 : $('#base_url').val() + 'user/UpdateCategories/',
			data	 : ({'comp_id':comp_id, 'values':values}),
			success: function(html){
				var resp = html.split("#");
					showLoading('edit_cat_load','N');//show ajax loading

					showMsg(resp[1],resp[0]);

				}
			});
	}); 
	///end company categories edit

	//functions for messenger ids update
	jQuery('#edit').css('display','none');
	var userkey =	jQuery('#userkey').val();

	jQuery('#messengers').click(function(){
		var dis	=	jQuery('#edit').css('display');
		if(dis== 'none')
		{
			jQuery('#messengers').html('Close');
		}
		else
		{
			jQuery('#messengers').html('Edit');
		}

		jQuery('#edit').slideToggle();
		jQuery('#show').slideToggle();
	});

	jQuery('#update_msgid').click(function(){
		
		var whatsapp 	=	jQuery('#whatsapp').val();
		var skype	=	jQuery('#skype').val();
		var wechat	=	jQuery('#wechat').val();
		showLoading('loading_messenger','Y');
		jQuery.ajax({
			type	 : 'POST',
			url	 : jQuery('#base_url').val()+'user/UpdateMessengerID/',
			data	 : { whatsapp:whatsapp, skype:skype, wechat:wechat, userkey:userkey },
			success: function(html){
					showLoading('loading_messenger','N');
					var resp = html.split("#");
					showMsg(resp[1],resp[0]);
				}
			});

	});//end of function

	jQuery('#msgid_cancel').click(function(){
		jQuery('#messengers').html('Edit');
		jQuery('#edit').slideToggle();
		jQuery('#show').slideToggle();
	});

	jQuery('#msgid_lead').click(function(){
		var status = jQuery('#msgid_lead').val();
		showLoading('loading_messenger','Y');
		jQuery.ajax({
			type	 : 'POST',
			url	 : jQuery('#base_url').val()+'user/IsShowMsgID/',
			data	 : {status:status,userkey:userkey},
			success: function(html){
				showLoading('loading_messenger','N');
				var resp = html.split("#");
				showMsg(resp[1],resp[0]);
			}
		});
	});//end of func
	//end for messenger id update
});


function showLoading(ctrl_show,show_hide){

	var loading = '<div class="row"><div class="col-md-12 col-md-offset-6"><img src="images/loading.gif" /></div></div>';
	
	if (show_hide=='Y')
		$('#'+ctrl_show).html(loading);
	else
		$('#'+ctrl_show).html('');

}

function setContactNow(leadid,uid,ajax_path){

	checkLogin(uid);

	showLoading('load_contact','Y');//show ajax loading
	$('#div_alert_contact').css('display','none');
	$('#btnpremiun').css('display','none');
	$('#msg_contents_contact').html('');

	$.ajax({
		type: "POST",
		url: $('#base_url').val()+ajax_path,
		data: { leadid: leadid},
		success: function(html){
			var resp = html.split("###");
				showLoading('load_contact','N');//hide ajax loading
				$('#load_contact').html(resp[1]);
				
				if (resp[0]=='show_premium')//show upgrade button if not premium
					$('#btnpremiun').css('display','inline-block')
			}
	});//end ajax

}

function checkLogin(uid){

	if (uid=='none')//case for user not logged in, send to login page and update session redirect value with url
	{
		$.ajax({
			type: "POST",
			url: $('#base_url').val()+"user/setReturnUrl/",
			data: { return_url: $('#return_url').val()},
			success: function(html){
				window.location = $('#base_url').val()+"user/login";
			}
		});
		return;
	}
}

function setBuyingLeadData(subject,supp_id,receiver_id,lead_id,sterms,supptype,rec_paid,send_paid){

	var validator = $("#buy_inquiry").validate(

		);

	validator.resetForm();


	checkLogin(supp_id);

	$('#div_alert').css('display','none');
	$('#div_alert_contact').css('display','none');
	
	$('#msg_contents').html('');
	$('#msg_contents_contact').html('');

	$('#btnpremiun_buy').css('display','none');
	$('#btn_contact_buyer').css('display','inline-block');
	$('#btnpremiun').css('display','none')

	///set the lead data in modal window
	$('#supp_id').val(supp_id);
	$('#receiver_id').val(receiver_id);
	$('#lead_id').val(lead_id);
	$('#sterms').val(sterms);
	$('#supptype').val(supptype);
	$('#subject').val(subject);

	if (rec_paid!='Y' && send_paid!='Y')// if not paid member show this alert
	{
		$('#div_alert').addClass('alert-danger').removeClass('alert-success');
		$('#div_alert').css('display','block');
		$('#btn_contact_buyer').css('display','none');
		$('#btnpremiun_buy').css('display','inline-block');
		$('#msg_contents').html("To contact buyers, Please upgrade to Premium membership.");

	}
}

function sendProductInquiry(uid){

	checkLogin(uid);
	$('#div_alert_inquiry').css('display','none');
	showLoading('ajax_loader','Y');//show ajax loading

	var compid		=	$('#comp_id').val();
	var proid		=	$('#pro_id').val();
	var detail		= 	$('#details').val();
	var subject		= 	$('#subject').val();
	action	 = $('#base_url').val() + 'products/SendInquiry/';
	$.post( action, { compid: compid, proid:proid, detail:detail, subject:subject},
		function( html ) {
			var resp = html.split("#");
				  	//console.log(resp);
				  	if (resp[0]=="success")
				  		$('#div_alert_inquiry').addClass('alert-success').removeClass('alert-danger');
				  	else
				  		$('#div_alert_inquiry').addClass('alert-danger').removeClass('alert-success');

				  	showLoading('ajax_loader','N');//show ajax loading
				  	$('#div_alert_inquiry').css('display','block');
				  	$('#msg_contents_inquiry').html(resp[1]);
				  }
				  );
}

function add_to_contacts()
{	
	var values = new Array();
	jQuery.each(jQuery("input[name='company_select[]']:checked"), function() {
		values.push(jQuery(this).val());
	});
	if(values.length==0){
		alert('Select at least one importer to add to contact list');
		return false;
	}
	var val = [];
	jQuery("input[name='company_select[]']:checked").each(function(i){
		val[i] = jQuery(this).val();
	});

	jQuery.ajax({
		type	 : 'POST',
		url	 : jQuery('#base_url').val()+'user/AddContactMultiple/',
		data	 : {companies:val},
		success: function(html){
			var resp = html.split("#");
			showMsg(resp[1],resp[0]);
		}


	}); 

}

function toggleChecked(status) {
	jQuery(".check").each( function() {
		jQuery(this).attr("checked",status);
	})
}

function showMsg(msg,msg_type){

	if (msg_type=='error')
	{
		$('#div_alert').addClass('alert-danger').removeClass('alert-success').css('display','block');
		$('#msg_contents').html(msg);
	}
	else
	{
		
		$('#div_alert').addClass('alert-success').removeClass('alert-danger').css('display','block');
		$('#msg_contents').html(msg);
	}
}

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}