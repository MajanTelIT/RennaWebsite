$(function() {
	
		var base_url = $('meta[name="base_url"]').attr('content');//Base Url from meta
	  
	
		$.ajaxSetup({
			headers: {
			  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		setTimeout(function() {
		   $('.alert-success').fadeOut('fast');
		}, 4000);
		
		setTimeout(function() {
		   $('.alert-danger').fadeOut('fast');
		}, 4000);

		
		
		/* Phone number and Alternate number mismatch */
		$.validator.addMethod("alternate_number", function(value, element) {
		   return $('#edit-field-mobile-number-0-value').val() != $('#edit-field-alternate-phone-number-0-value').val()
		}, "Phone number and Alternate phone number should not match"); 

		$.validator.methods.firstChar = function (value, element) {
		   if (/^\s/.test(value) == !0) ab = !1;
		   else ab = !0;
		   return ab
		};

		jQuery.validator.addMethod("onlyAlphabets", function(value, element) {
			return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
		}, 'Name should contain only alphabets.');

        jQuery.validator.addMethod("notEqual", function(value, element) {
            return this.optional(element) || value != $('#primary_email').val();
        }, "Please enter secondary email different from primary email.");

		/*Accepts only valid email format*/

		jQuery.validator.addMethod("checkpassword", function(value, element) {
         // allow only character and space
         var password1 = $('#passwd1').val();
         var password2 = $('#passwd2').val();
         if(password1 == password2)
          return true;
        }, 'Password and confirm password must be same.');

		$.validator.addMethod("onlyForZero", function(value) { return /^[1-9][0-9]*$/.test(value); }, "Please enter valid mobile number.");

		
		$.validator.addMethod("uk", function(value, element) { 
			
		   return this.optional(element) || /^(((\+44\s?\d{4}|\(?0\d{4}\)?)\s?\d{3}\s?\d{3})|((\+44\s?\d{3}|\(?0\d{3}\)?)\s?\d{3}\s?\d{4})|((\+44\s?\d{2}|\(?0\d{2}\)?)\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/.test(value);
		   
		}, "Invalid phone number.");

		$.validator.addMethod("noSpace", function(value, element) { 
		  return value.indexOf(" ") < 0 && value != ""; 
		}, "No space allowed.");

		$.validator.addMethod("numberValidate", function(value, element)
		{
			if (value >= 0) {
			return 1 ;
		}},"Amount can't be negative.");
		
	   
		$.validator.addMethod("post_code", function(value, element) {
		// allow only alphanumeric no space
			return this.optional( element ) || /^(?:(?:[A-PR-UWYZ][0-9]{1,2}|[A-PR-UWYZ][A-HK-Y][0-9]{1,2}|[A-PR-UWYZ][0-9][A-HJKSTUW]|[A-PR-UWYZ][A-HK-Y][0-9][ABEHMNPRV-Y]) [0-9][ABD-HJLNP-UW-Z]{2}|GIR 0AA)$/.test( value );
		}, 'Please enter valid post code.');
			
		$.validator.addMethod( "extension", function( value, element, param ) {
		param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpeg|jpg|PNG|JPEG";
		return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ));
		}, $.validator.format( "Only png, jpeg, jpg are allowed." ) );
		
		$.validator.addMethod( "ExcelExtension", function( value, element, param ) {
		param = typeof param === "string" ? param.replace( /,/g, "|" ) : "csv|xlsx|xls";
		return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ));
		}, $.validator.format( "Only csv, xlsx, xls are allowed." ) );

        $.validator.addMethod( "PDFPPTExtension", function( value, element, param ) {
        param = typeof param === "string" ? param.replace( /,/g, "|" ) : "pdf|ppt|pptx";
        return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ));
        }, $.validator.format( "Only pdf, ppt, pptx are allowed." ) );
		
		$.validator.addMethod("validdomain", function(value, element) {
		// allow only alphanumeric no space
			return this.optional( element ) || /^([a-z0-9]+(-[a-z0-9]+)*\.)+[a-z]{2,}$/.test( value );
		}, 'Please enter valid domain.');
		
		/*Image accepted type*/
        $.validator.addMethod( "extension", function( value, element, param ) {
        param = typeof param === "string" ? param.replace( /,/g, "|" ) : "png|jpe?g|pdf|doc|xls|xlsx|odt";
        return this.optional( element ) || value.match( new RegExp( "\\.(" + param + ")$", "i" ) );
        }, $.validator.format( "Only png,jpeg,jpg are allowed." ) );
	
		$.validator.addMethod('phoneField', function(value, element) {
        return value.match(/^\+?[0-9]+$/);
        },'Enter a valid phone number');
	
		$.validator.addMethod('positive', function(value, element) {
			return value.match(/^\d+$/);
		},'should not be negative');

		$.validator.addMethod("validateEmail", function(value, element, param) {
           
            return value = value.replace(/\(|\)|\s+|-/g, ""), this.optional(element) || value.length > 5 && value.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/);
            
        }, "Please enter a valid email address");
        
        $.validator.addMethod("customValidation" ,function(value, element) {			
			if(/^\s/.test(value) == true)
				ab = false;
			else 
				ab = true;
			return ab; 
         }, 'This Field should not prefix by space.');
         
         $.validator.addMethod("continueZero", function(value) {
			return /^[1-9][0-9]*$/.test(value);
		}, "Please enter valid contact number.");
		
		 $.validator.addMethod("validAmount", function(value) {

            if (value!='') {
               return /^(?!^$)\d*[1-9]?(?:\.[0-9]{1,2})?$/.test(value);
            }else{
                return 1;
            }

			
		}, "Please enter number as well only 2 digit after dot(.)");
		
         // /^[0-9]+([,.][0-9]+)?$/        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

		$.validator.addMethod("numberValidateAmount", function(value, element)
		{
            
            if (value!='') {
                if (value > 0) {
                    return 1 ;
                }
            }else{
                return 1;
            }
        },"Amount must be greater than zero.");
	
		jQuery.validator.addMethod("nameabc", function(value, element) {
         // allow only character no space
         return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
        }, 'Please enter character only.');

        jQuery.validator.addMethod("nameabc2", function(value, element) {
         // allow only character with space
         return this.optional( element ) || /^[a-zA-Z\s]+$/.test( value );
        }, 'Please enter character only.');
         
		
		$.validator.addMethod("nameabc1", function(value, element) {
		// allow only character no space
			return this.optional( element ) || /^[a-z0-9A-Z_\-]+$/.test( value );
		}, 'Please enter alphanumeric only.');

        $.validator.addMethod("nameabc3", function(value, element) 
        { 
           return this.optional(element) || /^(?=.*[a-z0-9])[a-z0-9!@#$%&*_-]+$/i.test(value); 
        }, "Please enter a input field without space.");
		
		$.validator.addMethod("email1", function(value, element) 
		{ 
		   return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value); 
		}, "Please enter a valid email address.");
	
	       /*Customer dilevry address*/

           //alert(base_url)

        $("#login-form").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                email: {
                    required: true,
                    /*validateEmail: true,
                    customValidation: true,
                    email1: true,*/
                    minlength:6,
                    maxlength:60
                    
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength:16
                },
            },
            messages: {                
                email: 
                {
                    required: 'Email Id field is required.',
                },
                password: {                   
                    required: "Password field is required."
                }
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });


        $("#admin-forgot").validate({
            rules:{
                email: {
                    required: true,                             
                    /*customValidation:true,
                    email1: true,
                    validateEmail:true, */
                    minlength: 6,
                    maxlength: 60
                }
            },
            
            messages: {                
                email: 
                {
                    required: 'Email Id field is required.' 
                }
                
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });
        //add static form,edit static form
        $("#addstatic,#editstatic").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                title: {
                    required: true,
                    minlength: 3
                 
                },
                url: {
                    required: true,
                    minlength: 3 
                },
                description: {
                    required: true
                },
                description_arabic: {
                    required: true
                },  
            },
            messages: {                
                title: {                   
                    required: "Page title is required."/*,
                    minlength: "Your password must be at least 8 characters long."*/
                },
                url: {                   
                    required: "Url is required."/*,
                    minlength: "Your password must be at least 8 characters long."*/
                },
                description: {                  
                    required: 'Description field is required.' 
                },
                description_arabic: {                  
                    required: 'Please select arabic description.' 
                },
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });

        //add banner form,edit banner form
        $("#addbanner,#editbanner").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
	            banner_image:{
	                required:true,
	                extension:"jpg|jpeg|png"
	            },
	            banner_name:{
	                required:true,
	                minlength:5,
	                maxlength:20
	            },
	            language:{
	                required:true 
	            },
	            status:{
	                required:true 
	            },
	        },
            messages: {                
                banner_name: {                   
                    required: "Banner Name is required.",
                    minlength:"Please enter atleast 5 characters.",
                    maxlength:"Please enter description in less than 500 characters."
                },
                banner_image: {                   
                    required:'Please select image',
                	extension:'Extension should be jpg,jpeg or png'
                },
                language: {                  
                    required: 'Language field is required.' 
                },
                status: {                  
                    required: 'Status field is required.' 
                },
                
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });

                 //add static form,edit static form
        $("#contactUs").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
	            phone_number:{
	                required:true,
	                minlength:8
	            },
	            fax_number:{
	                required:true,
	                minlength:8
	            },
            messages: {                
                phone_number: {                   
                    required: "Phone Number is required.",
                    minlength:"Please enter atleast 8 characters."
                },
                fax_number: {                   
                    required: "Fax Number is required.",
                    minlength:"Please enter atleast 8 characters."
                },
             },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            	submitHandler: function(form) {
           		form.submit();
            }
        	},
        });


        /*Change Password*/
        $("#change_password").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                old_password: {
                    required: true,
                    /*minlength: 8,*/
                    maxlength: 50
                },
                password: {
                    required: true,
                    /*minlength: 8,*/
                    maxlength: 50
                },
                password_confirmation: {
                    required: true,
                    /*minlength: 8,
                    maxlength: 16,*/
                    equalTo: "#password"
                },  
            },
            messages: {                
                password: {                   
                    required: "Password field is required."/*,
                    minlength: "Your password must be at least 8 characters long."*/
                },
                old_password: {                   
                    required: "Old password field is required."/*,
                    minlength: "Your password must be at least 8 characters long."*/
                },
                password_confirmation: {                  
                    /*minlength: "Your confirm password must be at least 8 characters long.",*/
                    required: "Confirm password field is required.",
                    equalTo: "New password and confirm password must be same."
                },
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });

          /*Admin Edit Profile*/
        $("#my_prifile").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    required: true,
                    nameabc: true,
                    customValidation: true,
                    minlength: 2,
                    maxlength:60
                },                           
                email: {
                    required: true,
                    // customValidation:true,
                    // email1: true,
                    // validateEmail:true, 
                    minlength: 6,
                    maxlength: 60
                }
                
            },
            messages: {    
                email: 
                {
                    remote: 'Email id already exists.'
                }            
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });

        $("#add_role_user").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                name: {
                    required: true,
                    customValidation: true,
                    nameabc: true,
                    minlength: 2,
                    maxlength:60
                },
                email: {
                    required: true,
                    /*email1: true,
                    customValidation: true,*/
                    minlength: 6,
                    maxlength: 60,
                    //validateEmail: true,
                    remote: {
                        url: base_url+'/checkemailadmin/'+$("#user_id").val(),
                        type: "post",                   
                        data: {
                            email: function () 
                                     {
                                         return $("input[name='email']").val();
                                      }
                            },
                        dataFilter: function (data) {
                            var json = JSON.parse(data);
                            
                            if (json.msg) {
                                console.log('exits')
                                return 'false';
                            } else {
                                console.log('notexits')
                                return 'true';
                            }
                        }
                    }
                },
                phone_number: {  
                    required: true,
                    customValidation: true,
                    phoneField: true,
                    minlength: 7,
                    //continueZero:true,
                    maxlength: 20,
                    
                    remote: {
                        url: base_url+'/admin/checkphone_number/'+$("#user_id").val(),
                        type: "post",                   
                        data: {
                            phone_number: function () 
                                     {
                                         return $("input[name='phone_number']").val();
                                      }
                            },
                        dataFilter: function (data) {
                            var json = JSON.parse(data);
                            
                            if (json.msg) {
                                console.log('exits')
                                return 'false';
                            } else {
                                console.log('notexits')
                                return 'true';
                            }
                        }
                    }
                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 16
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    maxlength: 16,
                    equalTo: "#password"
                },  
                
            },
            messages: {                
                name: {
                    
                    minlength: "Name should be greater than or equal to 2 characters.",
                    maxlength: "Name should be less than or equal to 60 characters."
                },
                email:{
                    remote: 'Email id already exists.'
                },
                phone_number: {
                    
                    remote: 'Phone number already exists.'
                },    
                confirm_password: {                  
                    minlength: "Your confirm password must be at least 8 characters long.",
                    equalTo: "Password and confirm password must be same."
                },
            },
            errorElement: "span",
            wrapper: "span",
            errorPlacement: function(error, element) {
                offset = element.offset();
                error.insertAfter(element)
                error.css('color','red');
            },

            submitHandler: function(form) {
            form.submit();
            }
        });

});
