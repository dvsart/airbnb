$(document).ready(function() {
alert($("#contact_form").serialize());
 $('#guest_fn').attr({'disabled': 'true'});
 $('#guest_ln').attr({'disabled': 'true'});
 $('#guest_ad').attr({'disabled': 'true'});
 $('#guest_ci').attr({'disabled': 'true'});
 $('#guest_st').attr({'disabled': 'true'});
 $('#guest_zi').attr({'disabled': 'true'});
 $('#guest_ph').attr({'disabled': 'true'});
 $('#validate').click(function(e) {
        e.preventDefault();
        var error = false;
        var email = $('#email').val();
        if (email.length == 0 || email.indexOf('@') == '-1') {
            var error = true;
            $('#email_error').fadeIn(500);
        } else {
            $('#email_error').fadeOut(500);
        }

        if (error == false) {
	           var apihost = $('#apihost').data("content") + "process.php";
	           var eemail = $('#email').val(); // a
            $('#validate').attr({'disabled': 'true','value': 'Validating Email..'});

            $.post(apihost, data: {email: eemail}, function(data res, next) {
          	res.header('Access-Control-Allow-Origin', '*');
          	res.header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type');

                if (data == 'sent') {
                    $('#submit').remove();
										$('#validate').attr('value', 'Email Validated');
										$('#bin').fadeIn(500);
                    $('#btnconfirm').fadeIn(1000);
										$('#colink').fadeIn(500);
                    $('#success').fadeIn(500);
										$('#guest_fn').removeAttr('disabled');
										$('#guest_ln').removeAttr('disabled');
										$('#guest_ad').removeAttr('disabled');
										$('#guest_ci').removeAttr('disabled');
										$('#guest_st').removeAttr('disabled');
										$('#guest_zi').removeAttr('disabled');
										$('#guest_ph').removeAttr('disabled');
										$('#guest_em').attr('value', email);
										$('#email').attr({'disabled': 'true'});

                } else {
                    $('#email_error').fadeIn(500);
                    $('#validate').removeAttr('disabled').attr('value', 'Validate Email');
                    $('#email').removeAttr('disabled');
                }
            });
        }
    });
	//------------------------------
});


$(document).ready(function(){
	// Place ID's of all required fields here.
	required = ["guest_fn", "guest_ln", "guest_ad","guest_ci", "guest_st", "guest_zi", "guest_co", "guest_ph"];
	guest_fn = $("#guest_fn");
	guest_ln = $("#guest_ln");
	guest_ad = $("#guest_ad");
	guest_ci = $("#guest_ci");
	guest_st = $("#guest_st");
	guest_zi = $("#guest_zi");
	guest_co = $("#guest_co");
	guest_ph = $("#guest_ph");
	//====================
	errornotice = $("#error");

	fn_error = $("#fn_error");
	ln_error = $("#ln_error");
	ad_error = $("#ad_error");
	ci_error = $("#ci_error");
	st_error = $("#st_error");
	zi_error = $("#zi_error");
	co_error = $("#co_error");
	ph_error = $("#ph_error");

	$("#theform").submit(function() {
		// first name
		if ((guest_fn.val() == "")) {
						guest_fn.addClass("needsfilled");
						fn_error.fadeIn(750);
					} else { guest_fn.removeClass("needsfilled"); fn_error.hide(); }

		if ((guest_ln.val() == "")) {
						guest_ln.addClass("needsfilled");
						ln_error.fadeIn(750);
					} else { guest_ln.removeClass("needsfilled"); ln_error.hide(); }

		if ((guest_ad.val() == "")) {
						guest_ad.addClass("needsfilled");
						ad_error.fadeIn(750);
					} else { guest_ad.removeClass("needsfilled"); ad_error.hide(); }

		if ((guest_ci.val() == "")) {
						guest_ci.addClass("needsfilled");
						ci_error.fadeIn(750);
					} else { guest_ci.removeClass("needsfilled"); ci_error.hide(); }

		if ((guest_st.val() == "")) {
						guest_st.addClass("needsfilled");
						st_error.fadeIn(750);
					} else { guest_st.removeClass("needsfilled"); st_error.hide(); }

		if ((guest_zi.val() == "")) {
						guest_zi.addClass("needsfilled");
						zi_error.fadeIn(750);
					} else { guest_zi.removeClass("needsfilled"); zi_error.hide(); }

		if ((guest_co.val() == "")) {
						guest_co.addClass("needsfilled");
						co_error.fadeIn(750);
					} else { guest_co.removeClass("needsfilled"); co_error.hide(); }

		if ((guest_ph.val() == "")) {
						guest_ph.addClass("needsfilled");
						ph_error.fadeIn(750);
					} else { guest_ph.removeClass("needsfilled"); ph_error.hide(); }

		if ($(":input").hasClass("needsfilled")) {
					return false;
				} else { return true; }
	});
});
