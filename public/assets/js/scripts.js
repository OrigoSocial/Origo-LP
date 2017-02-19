/**
 * Scroll to element.
 *
 * @param clicked_link
 * @param nav_height
 */
function scroll_to (clicked_link, nav_height) {
	var element_class = clicked_link.attr('href');
	var scroll_to = $(element_class).offset().top - nav_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}

/**
 * Submit a form.
 *
 * @param form
 * @param email
 */
function registerHandler (form, email) {
	$.ajax({
		method: $(form).attr('method'),
		url: $(form).attr('action') + (email ? '?email=' + email : ''),
		data: $(form).serializeArray()
	}).done(function (res) {
		var toast = new Toast({
			message: res.message
		});

		if (res.success && res.complete) {
			$('.form-two').fadeOut();

			setTimeout(function () {
				$('#top-content .thank-you').addClass('slideDown');
			}, 750);

			return;
		}

		if (res.success) {
			toast.show();

			$('.form-one').fadeOut();
			//$('#top-content .oval-container').fadeOut();

			// Show the next form
			setTimeout(function () {
				$('.form-two').addClass('slideDown');
			}, 750);
		}
	}).fail(function (res) {
		var toast;

		if (res.responseJSON.email) {
			toast = new Toast({
				message: res.responseJSON.email[0],
				isError: true
			});
		} else if (res.responseJSON.name) {
			toast = new Toast({
				message: res.responseJSON.name[0],
				isError: true
			});
		}

		toast.show();
	});
}

jQuery(document).ready(function() {
	// Navigation
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
	});
    
    // Wow
    new WOW().init();
    
    // Modals
	$('.launch-modal').on('click', function(e){
		e.preventDefault();
		$( '#' + $(this).data('modal-id') ).modal();
	});

	var email = '';

	$('.form-one form').validate({
		rules: {
			email: 'required'
		},
		messages: {
			email: {
				required: 'We need your email to notify you when the Beta is out.'
			}
		},
		submitHandler: function (form) {
			email = $(form).find('#email').val();
			registerHandler(form);
		}
	});

	$('.form-two form').validate({
		rules: {
			name: 'required'
		},
		messages: {
			name: {
				required: 'We need your name to know how to address you.'
			}
		},
		submitHandler: function (form) {
			registerHandler(form, email);
		}
	});

	$('#early-access form').validate({
		rules: {
			early_access_code: 'required'
		},
		messages: {
			early_access_code: {
				required: 'Please enter your early access code.'
			}
		},
		submitHandler: function (form) {
			$.ajax({
				method: 'post',
				url: '/early-access',
				data: {
					_token: $(form).find('input[name="_token"]').val(),
					early_access_code: $(form).find('input[name="early_access_code"]').val()
				}
			}).done(function (res) {
				if (res.success) {
					new Toast({
						message: res.message,
						isError: res.isError
					}).show();
				}
			}).fail(function (res) {
				new Toast({
					message: 'There was an error verifying your access code.',
					isError: res.isError
				}).show();
			})
		}
	});
});