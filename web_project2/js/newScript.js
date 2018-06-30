$(function () {
    $('.colorpicker').colorpicker();

    //Dropzone
    Dropzone.options.frmFileUpload = {
        paramName: "file",
        maxFilesize: 2,
    };

    //Masked Input ============================================================================================================================
    var $demoMaskedInput = $('.demo-masked-input');

    //Date
    $demoMaskedInput.find('.date').inputmask('dd/mm/yyyy', {placeholder: '__/__/____'});

    //Time
    $demoMaskedInput.find('.time12').inputmask('hh:mm t', {placeholder: '__:__ _m', alias: 'time12', hourFormat: '12'});
    $demoMaskedInput.find('.time24').inputmask('hh:mm', {placeholder: '__:__ _m', alias: 'time24', hourFormat: '24'});

    //Date Time
    $demoMaskedInput.find('.datetime').inputmask('d/m/y h:s', {placeholder: '__/__/____ __:__', alias: "datetime", hourFormat: '24'});

    //Mobile Phone Number
    $demoMaskedInput.find('.mobile-phone-number').inputmask('+99 (999) 999-99-99', {placeholder: '+__ (___) ___-__-__'});
    
    //Phone Number
   $demoMaskedInput.find('.phone-number').inputmask('9-9999-9999', {placeholder: '__ ____ ____'});
   
    //Mobile Number
   $demoMaskedInput.find('.mobile-number').inputmask('99-9999-9999', {placeholder: '__ ____ ____'});
  
    //Card ID
   $demoMaskedInput.find('.card-id').inputmask('9-9999-99999-99-9', {placeholder: ' -    -     -  - '});
   
    //Prifile Position Id
   $demoMaskedInput.find('.idpos').inputmask('9999', {placeholder: ' '});

// maxlength="5" onkeypress="return isNumberKey(event)"

    //Dollar Money
    $demoMaskedInput.find('.money-dollar').inputmask('99,99 $', {placeholder: '__,__ $'});
  
    //Euro Money
    $demoMaskedInput.find('.money-euro').inputmask('99,99 €', {placeholder: '__,__ €'});

    //IP Address
    $demoMaskedInput.find('.ip').inputmask('999.999.999.999', {placeholder: '___.___.___.___'});

    //Credit Card
    $demoMaskedInput.find('.credit-card').inputmask('9999 9999 9999 9999', {placeholder: '____ ____ ____ ____'});

    //Email
    $demoMaskedInput.find('.email').inputmask({alias: "email"});

    //Serial Key
    $demoMaskedInput.find('.key').inputmask('****-****-****-****', {placeholder: '____-____-____-____'});
    //===========================================================================================================================================

    //Multi-select
    $('#optgroup').multiSelect({selectableOptgroup: true});

});
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode

    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function autoTab2(obj, typeCheck) {
    /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
     หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
     4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
     รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
     หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
     ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
     */
    if (typeCheck == 1) {
        var pattern = new String("_-____-_____-_-__"); // กำหนดรูปแบบในนี้
        var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้     
    } else {
        var pattern = new String("__-____-____"); // กำหนดรูปแบบในนี้
        var pattern_ex = new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้                 
    }
    var returnText = new String("");
    var obj_l = obj.value.length;
    var obj_l2 = obj_l - 1;
    for (i = 0; i < pattern.length; i++) {
        if (obj_l2 == i && pattern.charAt(i + 1) == pattern_ex) {
            returnText += obj.value + pattern_ex;
            obj.value = returnText;
        }
    }
    if (obj_l >= pattern.length) {
        obj.value = obj.value.substr(0, pattern.length);
    }
}
