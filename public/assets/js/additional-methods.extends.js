jQuery.validator.addMethod('forceId', function(value, element, params) {
    var check = true;

    if (params == '' || params == 0) check = false;

    return this.optional(element) || check;
}, 'Invalid ID');

jQuery.validator.addMethod('multipleEmail', function(value, element, params) {
    var check = true,
        aEmails = value.split(','),
        total = aEmails.length,
        val = '';

    for (var i = 0; i < total; i++)
    {
        val = $.trim(aEmails[i]);

        check = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(val);

        if (check == false) break;
    }

    return this.optional(element) || check;
}, 'Please enter valid email addresse(s).');

jQuery.validator.addMethod('requiredCK', function(value, element, params) {
    var editor = $(element).ckeditorGet();
    return ! (editor.getData() == '');
}, 'This field is required.');

jQuery.validator.addMethod('notEqualTo', function(value, element, params) {
    var check = false;

    if (value != $(params).val()) check = true;

    return this.optional(element) || check;
}, '');

jQuery.validator.addMethod('afterDate', function(value, element, params) {
    if ( ! value) return true;

    var to = new Date(value);
    var from = new Date(params);

    if (to.getTime() < from.getTime()) return false;

    return true;
});

jQuery.validator.addMethod('beforeDate', function(value, element, params) {
    if ( ! value) return true;

    var to = new Date(value);
    var from = new Date(params);

    if (to.getTime() > from.getTime()) return false;

    return true;
});

jQuery.validator.addMethod('time', function(value, element, params) {
    var check = false;
    var re = /^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/;

    if (re.test(value)) check = true;

    return this.optional(element) || check;
}, 'Please enter a correct time');

jQuery.validator.addMethod('dateMDY', function(value, element, param) {
    var check = false;
    var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    if( re.test(value)){
        var adata = value.split('/');
        var gg, mm;
        gg = parseInt(adata[1],10);
        mm = parseInt(adata[0],10);

        var aaaa = parseInt(adata[2],10);
        var xdata = new Date(aaaa,mm-1,gg);
        if ( ( xdata.getFullYear() == aaaa ) && ( xdata.getMonth () == mm - 1 ) && ( xdata.getDate() == gg ) )
            check = true;
        else
            check = false;
    } else
        check = false;
    return this.optional(element) || check;
}, 'Please enter a correct date');

jQuery.validator.addMethod('ofDateFormat', function(value, element, param) {
    var check = false,
        format = param.toUpperCase(),
        aDate = '',
        mm = '', dd = '', yyyy = '';

    switch (format) {
        case 'YYYY/MM/DD':
        case 'YYYY-MM-DD':
        case 'YY/MM/DD':
        case 'YY-MM-DD':
            aDate = value.split(/[-\.\/ ]/);

            yyyy = aDate[0];
            mm = aDate[1];
            dd = aDate[2];
            break;

        case 'YYYY/DD/MM':
        case 'YYYY-DD-MM':
        case 'YY/DD/MM':
        case 'YY-DD-MM':
            aDate = value.split(/[-\.\/ ]/);
            yyyy = aDate[0];
            dd = aDate[1];
            mm = aDate[2];
            break;

        case 'DD-MM-YYYY':
        case 'DD/MM/YYYY':
        case 'DD-MM-YY':
        case 'DD/MM/YY':
            aDate = value.split(/[-\.\/ ]/);
            dd = aDate[0];
            mm = aDate[1];
            yyyy = aDate[2];
            break;

        case 'MM-DD-YYYY':
        case 'MM/DD/YYYY':
        case 'MM-DD-YY':
        case 'MM/DD/YY':
            aDate = value.split(/[-\.\/ ]/);
            mm = aDate[0];
            dd = aDate[1];
            yyyy = aDate[2];
            break;

        case 'YYYYMMDD':
            yyyy = substr(value, 0, 4);
            mm = substr(value, 4, 2);
            dd = substr(value, 6, 2);
            break;

        case 'YYYYDDMM':
            yyyy = substr(value, 0, 4);
            dd = substr(value, 4, 2);
            mm = substr(value, 6, 2);
            break;

        case 'MM-YYYY':
        case 'MM/YYYY':
        case 'MM-YY':
        case 'MM/YY':
            aDate = value.split(/[-\.\/ ]/);
            mm = aDate[0];
            yyyy = aDate[1];
            dd = 1;

            break;

        case 'MMYYYY':
        case 'MMYY':
            mm = substr(value, 0, 2);
            yyyy = substr(2, 4);

            dd = 1;
            break;

        default:
            check = false;
    }

    var xdata = new Date(yyyy, mm-1, dd);
    if ((xdata.getFullYear() == yyyy) && (xdata.getMonth() == mm - 1) && (xdata.getDate() == dd))
        check = true;
    else
        check = false;

    return this.optional(element) || check;

}, 'Invalid date format');

jQuery.validator.addMethod('checkEmail', function(value, element, params) {
    var check = true;

    check = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);

    return this.optional(element) || check;
}, 'Please enter valid email address.');

jQuery.validator.addMethod('noSpaces', function(value, element, params) {
    var check = true;

    check = /^\S+$/.test(value);

    return this.optional(element) || check;
}, 'Spaces are not allowed.');

/* TODO: DRY validations - dontExceedStocks, checkStocks */

jQuery.validator.addMethod('dontExceedStocks', function(value, element, params) {
    if (params == false) return true; // this validation is not required
    if ($('#track_inventory').val() == 'N') return true;

    if (value == 'more') value = 6; // in UI, the value of 6+
    if (parseInt($('#current_stock').val()) >= parseInt(value)) return true;

    return false;
}, 'Exceeds the stocks available.');

jQuery.validator.addMethod('checkStocks', function(value, element, params) {
    if (params == false) return true; // this validation is not required

    if ($(element).parents('td').find('input[name="track_inventory"]').val() == 'N') return true;

    if (value == 'more') value = 6; // in UI, the value of 6+
    current_stock = parseInt($(element).parents('td').find('input[name="current_stock"]').val());
    if (current_stock >= parseInt(value)) return true;

    $.validator.messages.checkStocks = "Only " + current_stock + " stock(s) available.";
    return false;
}, 'Exceeds the stocks available.');

jQuery.validator.addMethod('checkTin', function(value, element, params) {
    if (params == false) return true; // this validation is not required

    var check = true;

    check = /^\d{3}-?\d{3}-?\d{3}-?\d{3}$/.test(value); // specific ddd-ddd-ddd-dd
    //check = /^\d+(-\d+)*$/.test(value); // as long as its a number and a dash

    return this.optional(element) || check;
}, 'Invalid TIN Number.');

jQuery.validator.addMethod('passwordPolicy', function(value, element, params) {
    if (params == false) return true; // this validation is not required

    // at least 2 capital letters
    arrCapital = value.match(/[A-Z]/g);
    if (arrCapital == null) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 capital letters.";
        return false;
    }

    if (arrCapital.length < 2) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 capital letters.";
        return false;
    }

    // at least 2 lowercase letters
    arrLower = value.match(/[a-z]/g);
    if (arrLower == null) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 lowercase letters.";
        return false;
    }

    if (arrLower.length < 2) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 lowercase letters.";
        return false;
    }

    // at least two special characters
    arrSpecial = value.match( /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/g);
    if (arrSpecial == null) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 special characters.";
        return false;
    }

    if (arrSpecial.length < 2) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 special characters.";
        return false;
    }

    // at least 2 numeric characters
    arrNumeric = value.match(/[0-9]/g);
    if (arrNumeric == null) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 numeric characters.";
        return false;
    }

    if (arrNumeric.length < 2) {
        jQuery.validator.messages.passwordPolicy = "Password should have at least 2 numeric characters.";
        return false;
    }

    return true;
}, 'Password should have at least 2 capital letters, 2 lowercase letters, 2 special characters, 2 numeric characters and least 8 total number of alphanumeric characters.');
