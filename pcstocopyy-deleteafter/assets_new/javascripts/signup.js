(function( $ ) {

	'use strict';

	/*
	Wizard #4
	*/
	var $w4finish = $('#w4').find('ul.pager li.finish'),
		$w4validator = $("#w4 form").validate({
		highlight: function(element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		success: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
			$(element).remove();
		},
		errorPlacement: function( error, element ) {
			element.parent().append( error );
		}
	});

	$w4finish.on('click', function( ev ) {
		ev.preventDefault();
		var validated = $('#w4 form').valid();
		if ( validated ) {
			
			var data = $("#signup_form").serialize();
			showLoading('signup_load','Y');

			$.ajax({
				type: "POST",
				url: $('#url').val()+"user/ajax_signup",

				data: data,
				success: function(html){
				showLoading('signup_load','N');
				$("html, body").animate({ scrollTop: "-100px" });	
				var resp = html.split("#");
			  	//console.log(html);
			  	showMsg(resp[1],resp[0]);
			  	$('#CompanyID').val(resp[2]);
			  	
			  	if (resp[0]=='success')
			  	{
			  		$('#panel-logo').css('display','block');

			  		var notice = new PNotify({
					title: 'Check Your Email',
					text: 'To complete your registration you need to verify your email address.',
					addclass: 'notification-notice click-2-close',
					icon: 'fa fa-info',
					hide: false,
					buttons: {
						closer: false,
						sticker: false
					}
					});

					notice.get().click(function() {
						notice.remove();
					});
			  	}

			  }
			});//end ajax

		}
	});

	$('#w4').bootstrapWizard({
		tabClass: 'wizard-steps',
		nextSelector: 'ul.pager li.next',
		previousSelector: 'ul.pager li.previous',
		firstSelector: null,
		lastSelector: null,
		onNext: function( tab, navigation, index, newindex ) {
			var validated = $('#w4 form').valid();
			if( !validated ) {
				$w4validator.focusInvalid();
				return false;
			}
		},
		onTabClick: function( tab, navigation, index, newindex ) {
			if ( newindex == index + 1 ) {
				return this.onNext( tab, navigation, index, newindex);
			} else if ( newindex > index + 1 ) {
				return false;
			} else {
				return true;
			}
		},
		onTabChange: function( tab, navigation, index, newindex ) {
			var $total = navigation.find('li').size() - 1;
			$w4finish[ newindex != $total ? 'addClass' : 'removeClass' ]( 'hidden' );
			$('#w4').find(this.nextSelector)[ newindex == $total ? 'addClass' : 'removeClass' ]( 'hidden' );
			$('*').scrollTop(0);
		},
		onTabShow: function( tab, navigation, index ) {
			var $total = navigation.find('li').length - 1;
			var $current = index;
			var $percent = Math.floor(( $current / $total ) * 100);
			$('#w4').find('.progress-indicator').css({ 'width': $percent + '%' });
			tab.prevAll().addClass('completed');
			tab.nextAll().removeClass('completed');

		}
	});

	

}).apply( this, [ jQuery ]);
