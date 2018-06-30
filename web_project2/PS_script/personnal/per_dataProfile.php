<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    var pro_id = '<?= $_SESSION["pro_id"]; ?>';
    var get_id = '<?= $_GET['id']; ?>';
    var page = '<?= $_GET['page']; ?>';
    var level = '<?= $_SESSION['level']; ?>';
    var lvb_claim = '<?= $_SESSION['lvb_claim']; ?>';
    var NoImg = '../../images/img-profile/no_img.png';
    var dataID = '';
    var i = 1;
    var hide_td = true;

    $(function () {
        if (get_id == '') {
            dataID = pro_id;
        } else {
            dataID = get_id;
        }
        $.datetimepicker.setLocale('th');
        $("#blame_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        if ((lvb_claim != 9) && (lvb_claim != 'NULL')) {
            hide_td = false;
            $('#btn_chName').hide();
            $('#btn_marry').hide();
            $('#btn_heir').hide();
            $('#btn_blame').hide();
            $('.btn_edu').hide();
            $('#btn_hisser').hide();
            $('#btn_serSpecial').hide();
            $('#btn_assignment').hide();
            $('#btn_award').hide();
            $('#btn_academic').hide();
            $('#btn_plan').hide();
            $('#btn_hisroyal').hide();
            $('#btn_salaryup').hide();
            $('#btn_salaryspecial').hide();
            $('.btn-saveAll').hide();
        }

        $("#chName_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#pro_birthdayE").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#hissv_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#hissvp_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#award_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#academic_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        var optsDate = {  
                    format: 'd/m/Y', // รูปแบบวันที่ 
                    formatDate: 'd/m/Y',
                    timepicker: false,   
                    closeOnDateSelect: true,
            }
        var setDateFuncE = function (ct, obj) {
            var minDateSet = formatDatePK($("#pro_dateInE").val());
            var maxDateSet = formatDatePK($("#pro_dateOutE").val());

            if ($(obj).attr("id") == "pro_dateInE") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "pro_dateOutE") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#pro_dateInE,#pro_dateOutE").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFuncE,
            onSelectDate: setDateFuncE,
        }));

        var setDateFuncA = function (ct, obj) {
            var minDateSet = formatDatePK($("#hisas_date_start").val());
            var maxDateSet = formatDatePK($("#hisas_date_end").val());

            if ($(obj).attr("id") == "hisas_date_start") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : true
                })
            }
            if ($(obj).attr("id") == "hisas_date_end") {
                this.setOptions({
                    maxDate: true,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#hisas_date_start,#hisas_date_end").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFuncA,
            onSelectDate: setDateFuncA,
        }));

        var setDateFuncPlan = function (ct, obj) {
            var minDateSet = formatDatePK($("#plan_dateStart").val());
            var maxDateSet = formatDatePK($("#plan_dateEnd").val());

            if ($(obj).attr("id") == "plan_dateStart") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "plan_dateEnd") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#plan_dateStart,#plan_dateEnd").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFuncPlan,
            onSelectDate: setDateFuncPlan,
        }));

        var setDateFuncPlanE = function (ct, obj) {
            var minDateSet = formatDatePK($("#plan_dateStartE").val());
            var maxDateSet = formatDatePK($("#plan_dateEndE").val());

            if ($(obj).attr("id") == "plan_dateStartE") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "plan_dateEndE") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#plan_dateStartE,#plan_dateEndE").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFuncPlanE,
            onSelectDate: setDateFuncPlanE,
        }));

        $("#hisroyal_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        $("#hisslrup_date").datetimepicker({
            timepicker: false,
            maxDate: true,
            format: 'd/m/Y',
            lang: 'th',
            yearOffset: 543,
            onSelectDate: function (dp, $input) {
                var yearT = new Date(dp).getFullYear() - 0;
                var yearTH = yearT + 543;
                var fulldate = $input.val();
                var fulldateTH = fulldate.replace(yearT, yearTH);
                $input.val(fulldateTH);
            },
        });

        var setDateFuncSalary = function (ct, obj) {
            var minDateSet = formatDatePK($("#salarysp_startDate").val());
            var maxDateSet = formatDatePK($("#salarysp_endDate").val());

            if ($(obj).attr("id") == "salarysp_startDate") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : true
                })
            }
            if ($(obj).attr("id") == "salarysp_endDate") {
                this.setOptions({
                    maxDate: true,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#salarysp_startDate,#salarysp_endDate").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFuncSalary,
            onSelectDate: setDateFuncSalary,
        }));

        show_chName();
        show_marry();
        show_heir();
        show_blame();
        show_education();
        show_hisService();
        show_hisSerSpecial();
        show_assignment();
        show_award();
        show_acade();
        show_plan();
        sl_data_plan();
        show_royal();
        show_hisslrup();
        show_salarysp();
        $('#hised_level').select2();
        $('#hised_year').select2();
        $('#show_fileAward').html('ยังไม่เลือกไฟล์');
        $('#award_file').change(function () {
            var myFile = $('#award_file').prop('files')[0];
            $('#show_fileAward').html(myFile.name).css("color", "#777");
        });
        $('#show_fileacademic').html('ยังไม่เลือกไฟล์');
        $('#academic_file').change(function () {
            var myFile = $('#academic_file').prop('files')[0];
            $('#show_fileacademic').html(myFile.name).css("color", "#777");
        });

        $('#address_province').change(function () {
            if ($('#address_province').val() != '') {
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", [$('#address_province').val()], true, function (data) {
                    $('#address_amphur').html('');
                    $('#address_amphur').html('<option value="">เลือก</opition>');
                    $.each(data, function (i) {
                        $("#address_amphur").append('<option value="' + data[i].AMPHUR_ID + '">' + data[i].AMPHUR_NAME + '</opition>');
                    });
                    $('#address_amphur').select2();
                });
            } else {
                $('#address_amphur').html('');
                $('#address_amphur').html('<option  value="">กรุณาเลือกจังหวัด</opition>');
                $('#address_district').html('');
                $('#address_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                $('#address_zip_code').val('');
            }
        });
        $('#address_amphur').change(function () {
            if ($('#address_amphur').val() != '') {
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_district", [$('#address_amphur').val()], true, function (data) {
                    $('#address_district').html('');
                    $('#address_district').html('<option value="">เลือก</opition>');
                    $.each(data, function (i) {
                        $("#address_district").append('<option value="' + data[i].DISTRICT_ID + '">' + data[i].DISTRICT_NAME + '</opition>');
                    });
                    $('#address_district').select2();
                });
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", ['get_code', $('#address_amphur').val()], true, function (data) {
                    if (data.length != '0') {
                        $('#address_zip_code').val(data[0].POSTCODE);
                    } else {
                        $('#address_zip_code').val('');
                    }
                });
            } else {
                $('#address_district').html('');
                $('#address_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                $('#address_zip_code').val('');
            }
        });

        $('#pread_province').change(function () {
            if ($('#pread_province').val() != '') {
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", [$('#pread_province').val()], true, function (data) {
                    $('#pread_amphur').html('');
                    $('#pread_amphur').html('<option value="">เลือก</opition>');
                    $.each(data, function (i) {
                        $("#pread_amphur").append('<option value="' + data[i].AMPHUR_ID + '">' + data[i].AMPHUR_NAME + '</opition>');
                    });
                    $('#pread_amphur').select2();
                });
            } else {
                $('#pread_amphur').html('');
                $('#pread_amphur').html('<option  value="">กรุณาเลือกจังหวัด</opition>');
                $('#pread_district').html('');
                $('#pread_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                $('#pread_zip_code').val('');
            }
        });
        $('#pread_amphur').change(function () {
            if ($('#pread_amphur').val() != '') {
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_district", [$('#pread_amphur').val()], true, function (data) {
                    $('#pread_district').html('');
                    $('#pread_district').html('<option value="">เลือก</opition>');
                    $.each(data, function (i) {
                        $("#pread_district").append('<option value="' + data[i].DISTRICT_ID + '">' + data[i].DISTRICT_NAME + '</opition>');
                    });
                    $('#pread_district').select2();
                });
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", ['get_code', $('#pread_amphur').val()], true, function (data) {
                    if (data.length != '0') {
                        $('#pread_zip_code').val(data[0].POSTCODE);
                    } else {
                        $('#pread_zip_code').val('');
                    }
                });
            } else {
                $('#pread_district').html('');
                $('#pread_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                $('#pread_zip_code').val('');
            }
        });

        $('#check_addr').click(function () {
            if (document.getElementById('check_addr').checked) {
//                if ($('#address_number').val() != '') {
                $('#pread_number').val($('#address_number').val());
                $('#pread_swine').val($('#address_swine').val());
                $('#pread_soi').val($('#address_soi').val());
                $('#pread_road').val($('#address_road').val());
                $('#pread_village').val($('#address_village').val());
                $('#pread_province option[value="' + $('#address_province').val() + '"]').prop('selected', true);
                $('#pread_province').select2();
                $('#pread_zip_code').val($('#address_zip_code').val());
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", [$('#address_province').val()], true, function (data) {
                    $('#pread_amphur').html('');
                    $('#pread_amphur').html('<option value="">เลือก</opition>');
                    $.each(data, function (i) {
                        $("#pread_amphur").append('<option value="' + data[i].AMPHUR_ID + '">' + data[i].AMPHUR_NAME + '</opition>');
                    });
                    $('#pread_amphur option[value="' + $('#address_amphur').val() + '"]').prop('selected', true);
                    $('#pread_amphur').select2();
                });
                if ($('#address_amphur').val() != '') {
                    cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_district", [$('#address_amphur').val()], true, function (data) {
                        $('#pread_district').html('');
                        $('#pread_district').html('<option value="">เลือก</opition>');
                        $.each(data, function (i) {
                            $("#pread_district").append('<option value="' + data[i].DISTRICT_ID + '">' + data[i].DISTRICT_NAME + '</opition>');
                        });
                        $('#pread_district option[value="' + $('#address_district').val() + '"]').prop('selected', true);
                        $('#pread_district').select2();
                    });
                } else {
                    $('#pread_district').html('');
                    $('#pread_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                }
                $('#pread_call').val($('#address_call').val());
                $('#pread_fhone').val($('#address_fhone').val());
//                } else {
//                    $('#pread_amphur').html('');
//                    $('#pread_amphur').html('<option  value="">กรุณาเลือกจังหวัด</opition>');
//                    $('#pread_district').html('');
//                    $('#pread_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
//                }
            } else {
                $('#pread_number').val('');
                $('#pread_swine').val('');
                $('#pread_soi').val('');
                $('#pread_road').val('');
                $('#pread_village').val('');
                $('#pread_province option[value=""]').prop('selected', true);
                $('#pread_province').select2();
                $('#pread_amphur').html('');
                $('#pread_amphur').html('<option  value="">กรุณาเลือกจังหวัด</opition>');
                $('#pread_district').html('');
                $('#pread_district').html('<option  value="">กรุณาเลือกอำเภอ</opition>');
                $('#pread_zip_code').val('');
                $('#pread_call').val('');
                $('#pread_fhone').val('');
            }
        });

        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_address", [dataID], true, function (data) {
//            console.log(data);
            if (data != 0) {
                $('#address_number').val(data[0].address_number);
                $('#address_swine').val(data[0].address_swine);
                $('#address_soi').val(data[0].address_soi);
                $('#address_road').val(data[0].address_road);
                $('#address_village').val(data[0].address_village);
                $('#address_province option[value="' + data[0].address_province + '"]').prop('selected', true);
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", [data[0].address_province], true, function (data2) {
                    $('#address_amphur').html('');
                    $('#address_amphur').html('<option value="">เลือก</opition>');
                    $.each(data2, function (i) {
                        $("#address_amphur").append('<option value="' + data2[i].AMPHUR_ID + '">' + data2[i].AMPHUR_NAME + '</opition>');
                    });
                    $('#address_amphur option[value="' + data[0].address_amphur + '"]').prop('selected', true);
                    $('#address_amphur').select2();
                });
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_district", [data[0].address_amphur], true, function (data2) {
                    $('#address_district').html('');
                    $('#address_district').html('<option value="">เลือก</opition>');
                    $.each(data2, function (i) {
                        $("#address_district").append('<option value="' + data2[i].DISTRICT_ID + '">' + data2[i].DISTRICT_NAME + '</opition>');
                    });
                    $('#address_district option[value="' + data[0].address_district + '"]').prop('selected', true);
                    $('#address_district').select2();
                });
                $('#address_zip_code').val(data[0].address_zip_code);
                $('#address_call').val(data[0].address_call);
                $('#address_fhone').val(data[0].address_fhone);

                $('#pread_number').val(data[0].pread_number);
                $('#pread_swine').val(data[0].pread_swine);
                $('#pread_soi').val(data[0].pread_soi);
                $('#pread_road').val(data[0].pread_road);
                $('#pread_village').val(data[0].pread_village);
                $('#pread_province option[value="' + data[0].pread_province + '"]').prop('selected', true);
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_amphur", [data[0].pread_province], true, function (data2) {
                    $('#pread_amphur').html('');
                    $('#pread_amphur').html('<option value="">เลือก</opition>');
                    $.each(data2, function (i) {
                        $("#pread_amphur").append('<option value="' + data2[i].AMPHUR_ID + '">' + data2[i].AMPHUR_NAME + '</opition>');
                    });
                    $('#pread_amphur option[value="' + data[0].pread_amphur + '"]').prop('selected', true);
                    $('#pread_amphur').select2();
                });
                cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_district", [data[0].pread_amphur], true, function (data2) {
                    $('#pread_district').html('');
                    $('#pread_district').html('<option value="">เลือก</opition>');
                    $.each(data2, function (i) {
                        $("#pread_district").append('<option value="' + data2[i].DISTRICT_ID + '">' + data2[i].DISTRICT_NAME + '</opition>');
                    });
                    $('#pread_district option[value="' + data[0].pread_district + '"]').prop('selected', true);
                    $('#pread_district').select2();
                });
                $('#pread_zip_code').val(data[0].pread_zip_code);
                $('#pread_call').val(data[0].pread_call);
                $('#pread_fhone').val(data[0].pread_fhone);
            }
            $('#address_province').select2();
            $('#address_amphur').select2();
            $('#address_district').select2();
            $('#pread_province').select2();
        });

        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_geninfo", [dataID], true, function (data) {
            if (data != 0) {
                $('#gen_prefix option[value="' + data[0].gen_prefix + '"]').prop('selected', true);
                $('#gen_old').val(data[0].gen_old);
                $('#PROVINCE_ID option[value="' + data[0].PROVINCE_ID + '"]').prop('selected', true);
                $('#nationality_id option[value="' + data[0].nationality_id + '"]').prop('selected', true);
                $('#nationality_id_race option[value="' + data[0].nationality_id_race + '"]').prop('selected', true);
                $('#religion_id option[value="' + data[0].religion_id + '"]').prop('selected', true);
                $('#gen_blood option[value="' + data[0].gen_blood + '"]').prop('selected', true);
                $('#gen_soldier option[value="' + data[0].gen_soldier + '"]').prop('selected', true);
                $('#gen_tax').val(data[0].gen_tax);
                $('#gen_passport').val(data[0].gen_passport);
                $('#bank_id option[value="' + data[0].bank_id + '"]').prop('selected', true);
                $('#gen_account_number').val(data[0].gen_account_number);
                $('#gen_email').val(data[0].gen_email);
                $('#gen_facebook').val(data[0].gen_facebook);
                $('#gen_twitter').val(data[0].gen_twitter);
                $('#gen_line').val(data[0].gen_line);
                $('#gen_talent').val(data[0].gen_talent);
                $('#gen_interest').val(data[0].gen_interest);
                $('#expert_name').val(data[0].expert_name);
                $('#expert_ex').val(data[0].expert_ex);
            }
            $('#gen_prefix').select2();
            $('#PROVINCE_ID').select2();
            $('#nationality_id').select2();
            $('#nationality_id_race').select2();
            $('#religion_id').select2();
            $('#gen_blood').select2();
            $('#gen_soldier').select2();
            $('#bank_id').select2();
        });

        cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "SLEPS", [dataID], true, function (data) {
            if (data[0].pro_picture == '') {
                $('#imgSE').attr('src', NoImg);
                $('#person_imgE').attr('href', NoImg);
            } else {
                $('#imgSE').attr('src', data[0].pro_picture);
                $('#person_imgE').attr('href', data[0].pro_picture);
            }
            $('#pro_id').val(data[0].pro_id);
            if (level != '1') {
                $('#type_idE').prop('disabled', true);
                $('#pos_idE').prop('disabled', true);
                $('#lv_idE').prop('disabled', true);
                $('#lvb_idE').prop('disabled', true);
                $('#class_idE').prop('disabled', true);
                $('#dep_idE').prop('disabled', true);
                $('#pro_dateInE').prop('disabled', true);
                $('#pro_dateOutE').prop('disabled', true);
                $('#pro_salaryE').prop('disabled', true);
            }
            $('#showName').html('(' + data[0].pro_prefix + data[0].pro_fname + ' ' + data[0].pro_lname + ')');
            $('#card_idE').val(data[0].card_id);
            $('#gen_card_id').val(data[0].card_id);
            $('#pro_idposE').val(data[0].pro_idpos);
            $('#pro_fnameE').val(data[0].pro_fname);
            $('#gen_fname').val(data[0].pro_fname);
            $('#pro_lnameE').val(data[0].pro_lname);
            $('#gen_lname').val(data[0].pro_lname);
            $('#pro_nicknameE').val(data[0].pro_nickname);
            $('#gen_nickname').val(data[0].pro_nickname);
            $("#pro_sexE input[name=group1E][value='" + data[0].pro_sex + "']").prop("checked", true);
            $('#gen_sex option[value="' + data[0].pro_sex + '"]').prop('selected', true);
            $('#gen_sex').select2();
            $("#pro_statusE input[name=group2E][value='" + data[0].pro_status + "']").prop("checked", true);
            $('#gen_status option[value="' + data[0].pro_status + '"]').prop('selected', true);
            $('#gen_status').select2();
            $('#pro_salaryE').val(parseInt(data[0].pro_salary));
            age(data[0].pro_birthday)
            $('#pro_birthdayE').val(formatDateShow(data[0].pro_birthday));
            $('#gen_birthday').val(formatDateShow(data[0].pro_birthday));
            $('#pro_dateInE').val(formatDateShow(data[0].pro_dateIn));
            $('#pro_dateOutE').val(formatDateShow(data[0].pro_dateOut));
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "SLPF", [$(data).pro_prefix], true, function (data2) {
                $('#pro_prefixE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i, k) {
                    if (data[0].pro_prefix == data2[i].pf_name) {
                        $("#pro_prefixE").append('<option selected="selected" value="' + data2[i].pf_name + '">' + data2[i].pf_name + '</opition>');
                    } else {
                        $("#pro_prefixE").append('<option value="' + data2[i].pf_name + '">' + data2[i].pf_name + '</opition>');
                    }
                });
                $('#pro_prefixE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_type", "", true, function (data2) {
                $('#type_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].type_id == data2[i].type_id) {
                        $("#type_idE").append('<option selected="selected" value="' + data2[i].type_id + '">' + data2[i].type_name + '</opition>');
                    } else {
                        $("#type_idE").append('<option value="' + data2[i].type_id + '">' + data2[i].type_name + '</opition>');
                    }
                });
                $('#type_idE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_position", "", true, function (data2) {
                $('#pos_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].pos_id == data2[i].pos_id) {
                        $("#pos_idE").append('<option selected="selected" value="' + data2[i].pos_id + '">' + data2[i].pos_name + '</opition>');
                    } else {
                        $("#pos_idE").append('<option value="' + data2[i].pos_id + '">' + data2[i].pos_name + '</opition>');
                    }
                });
                $('#pos_idE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_level", "", true, function (data2) {
                $('#lv_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].lv_id == data2[i].lv_id) {
                        $("#lv_idE").append('<option selected="selected" value="' + data2[i].lv_id + '">' + data2[i].lv_name + '</opition>');
                    } else {
                        $("#lv_idE").append('<option value="' + data2[i].lv_id + '">' + data2[i].lv_name + '</opition>');
                    }
                });
                $('#lv_idE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_levelBoss", "", true, function (data2) {
                $('#lvb_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].lvb_id == data2[i].lvb_id) {
                        $("#lvb_idE").append('<option selected="selected" value="' + data2[i].lvb_id + '">' + data2[i].lvb_name + '</opition>');
                    } else {
                        $("#lvb_idE").append('<option value="' + data2[i].lvb_id + '">' + data2[i].lvb_name + '</opition>');
                    }
                });
                $('#lvb_idE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_class", "", true, function (data2) {
                $('#class_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].class_id == data2[i].class_id) {
                        $("#class_idE").append('<option selected="selected" value="' + data2[i].class_id + '">' + data2[i].class_name + '</opition>');
                    } else {
                        $("#class_idE").append('<option value="' + data2[i].class_id + '">' + data2[i].class_name + '</opition>');
                    }
                });
                $('#class_idE').select2();
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_department", "", true, function (data2) {
                $('#dep_idE').html('<option  value="">เลือก</opition>');
                $.each(data2, function (i) {
                    if (data[0].dep_id == data2[i].dep_id) {
                        $("#dep_idE").append('<option selected="selected" value="' + data2[i].dep_id + '">' + data2[i].dep_name + '</opition>');
                    } else {
                        $("#dep_idE").append('<option value="' + data2[i].dep_id + '">' + data2[i].dep_name + '</opition>');
                    }
                });
                $('#dep_idE').select2();
            });
        });
    }
    );
    $(document).find("#pro_pictureE").change(function () {
        readURLProfileE(this);
    });
    function readURLProfileE(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgSE').attr('src', e.target.result);
                $('#person_imgE').attr('href', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    function age(old) {
        var dayBirth = old;
        var getdayBirth = dayBirth.split("-");
        var YB = getdayBirth[0];
        var MB = getdayBirth[1];
        var DB = getdayBirth[2];
        if (MB != 0) {
            var setdayBirth = moment(YB + "-" + MB + "-" + DB);
            var setNowDate = moment();
            var yearData = setNowDate.diff(setdayBirth, 'years', true); // ข้อมูลปีแบบทศนิยม  
            var yearFinal = Math.round(setNowDate.diff(setdayBirth, 'years', true), 0); // ปีเต็ม  
            var yearReal = setNowDate.diff(setdayBirth, 'years'); // ปีจริง  
            var monthDiff = Math.floor((yearData - yearReal) * 12); // เดือน  
            var str_year_month = yearReal + " ปี " + monthDiff + " เดือน"; // ต่อวันเดือนปี  
            $("#gen_old").val(str_year_month);
        } else {
            $("#gen_old").val('ยังไม่ได้ระบุวันเกิด');
        }
    }
    function OnchangAge(old) {
        var dayBirth = old;
        var getdayBirth = dayBirth.split("/");
        var YB = getdayBirth[2] - 543;
        var MB = getdayBirth[1];
        var DB = getdayBirth[0];
        if (MB != 0) {
            var setdayBirth = moment(YB + "-" + MB + "-" + DB);
            var setNowDate = moment();
            var yearData = setNowDate.diff(setdayBirth, 'years', true); // ข้อมูลปีแบบทศนิยม  
            var yearFinal = Math.round(setNowDate.diff(setdayBirth, 'years', true), 0); // ปีเต็ม  
            var yearReal = setNowDate.diff(setdayBirth, 'years'); // ปีจริง  
            var monthDiff = Math.floor((yearData - yearReal) * 12); // เดือน  
            var str_year_month = yearReal + " ปี " + monthDiff + " เดือน"; // ต่อวันเดือนปี  
            $("#gen_old").val(str_year_month);
        } else {
            $("#gen_old").val('ยังไม่ได้ระบุวันเกิด');
        }
    }
    function back() {
        if (page == 'viewPerson') {
            window.location.href = '../../PS_mainpage/personnal/person_addData.php';
        } else {
            window.location.href = '../../PS_mainpage/personnal/person_setting.php';
        }
//        window.history.back();
    }

    function keyupCardId() {
        $('#gen_card_id').val($('#card_idE').val());
    }
    function keyupFname() {
        $('#gen_fname').val($('#pro_fnameE').val());
    }
    function keyupLname() {
        $('#gen_lname').val($('#pro_lnameE').val());
    }
    function keyupNickname() {
        $('#gen_nickname').val($('#pro_nicknameE').val());
    }
    function changeSex() {
        $('#gen_sex option[value=' + $('input[name=group1E]:checked', '#pro_sexE').val() + ']').prop('selected', true);
        $('#gen_sex').select2();
    }
    function changeStatus() {
        $('#gen_status option[value=' + $('input[name=group2E]:checked', '#pro_statusE').val() + ']').prop('selected', true);
        $('#gen_status').select2();
    }
    function changeBirthday() {
        OnchangAge($('#pro_birthdayE').val());
        $('#gen_birthday').val($('#pro_birthdayE').val());
    }
    function show_chName() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_chName", [dataID], true, table_chName);
    }
    function show_marry() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_marry", [dataID], true, table_marry);
    }
    function show_heir() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_heir", [dataID], true, table_heir);
    }
    function show_blame() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_blame", [dataID], true, table_blame);
    }
    function show_education() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_edu", [dataID], true, table_education);
    }
    function show_hisService() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_hisService", [dataID], true, table_hisService);
    }
    function show_hisSerSpecial() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_hisSerSpecial", [dataID], true, table_hisSerSpecial);
    }
    function show_assignment() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_assignment", [dataID], true, table_assignment);
    }
    function show_award() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_award", [dataID], true, table_award);
    }
    function show_acade() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_acade", [dataID], true, table_acade_show);
    }
    function show_plan() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_plan", [dataID], true, table_plan_show);
    }
    function show_royal() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_royal", [dataID], true, table_royal_show);
    }
    function show_hisslrup() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_hisslrup", [dataID], true, table_hisslrup_show);
    }
    function show_salarysp() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_salarysp", [dataID], true, table_salarysp_show);
    }

    function table_chName(data) {
        $(".table_chName").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].chang_nameold, data[i].chang_namenew, DateThai(data[i].chang_date), '<center><img class="btn-delete" id="' + data[i].chang_id + '" onclick="javascript: delChName(this)"/></center>']);
        });
        $('#table_chName_show').html('<table class="table table-bordered table-striped table-hover table_chName dataTable" width="100%"></table>');
        $('.table_chName').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ-สกุลเดิม"},
                {title: "ชื่อ-สกุลใหม่"},
                {title: "วันที่เปลี่ยน"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [4],
                    "visible": hide_td,
                }
            ]
        });
    }
    function addChName(ACN) {
        var array = [];
        array.push($('#fname_old').val() + ' ' + $('#lname_old').val(), $('#fname_new').val() + '  ' + $('#lname_new').val(), formatDateDB($('#chName_date').val()), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", ACN, array, true, function (data) {
            $('#add_chName').removeClass('in');
            $('#add_chName').find('.btn-danger').trigger('click');
            show_chName();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการเปลี่ยนแปลงชื่อเรียบร้อยเเล้ว", "success");
        });
    }
    function delChName(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DCN", [$(data).attr("id")], true, function (data) {
                show_chName();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_marry(data) {
        $(".table_marry").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].marry_name, data[i].marry_status, '<center><img class="btn-delete" id="' + data[i].marry_id + '" onclick="javascript: delMarry(this)"/></center>']);
        });
        $('#table_marry_show').html('<table class="table table-bordered table-striped table-hover table_marry dataTable" width="100%"></table>');
        $('.table_marry').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ-สกุล"},
                {title: "ความสัมพันธ์"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [3],
                    "visible": hide_td,
                }
            ]
        });
    }
    function addMarry(AMR) {
        var array = [];
        array.push($('#marry_fname').val() + ' ' + $('#marry_lname').val(), $('#marry_relationship').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AMR, array, true, function (data) {
            $('#add_marry').removeClass('in');
            $('#add_marry').find('.btn-danger').trigger('click');
            show_marry();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการสมรสเรียบร้อยเเล้ว", "success");
        });
    }
    function delMarry(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DMR", [$(data).attr("id")], true, function (data) {
                show_marry();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_heir(data) {
        $(".table_heir").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].heir_name, data[i].heir_relationship, '<center><img class="btn-delete" id="' + data[i].id_heir + '" onclick="javascript: delHeir(this)"/></center>']);
        });
        $('#table_heir_show').html('<table class="table table-bordered table-striped table-hover table_heir dataTable" width="100%"></table>');
        $('.table_heir').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ-สกุล"},
                {title: "ความสัมพันธ์"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [3],
                    "visible": hide_td,
                }
            ]
        });
    }
    function addHeir(AH) {
        var array = [];
        array.push($('#heir_fname').val() + ' ' + $('#heir_lname').val(), $('#heir_relationship').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AH, array, true, function (data) {
            $('#add_heir').removeClass('in');
            $('#add_heir').find('.btn-danger').trigger('click');
            show_heir();
            swal("บันทึกสำเร็จ!", "บันทึกข้อมูลทายาทเรียบร้อยเเล้ว", "success");
        });
    }
    function delHeir(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DH", [$(data).attr("id")], true, function (data) {
                show_heir();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_blame(data) {
        $(".table_blame").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].blame_name, data[i].blame_somename, DateThai(data[i].blame_date), '<center><img class="btn-delete" id="' + data[i].blame_id + '" onclick="javascript: delBlame(this)"/></center>']);
        });
        $('#table_blame_show').html('<table class="table table-bordered table-striped table-hover table_blame dataTable" width="100%"></table>');
        $('.table_blame').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ความผิด"},
                {title: "กรณีความผิด"},
                {title: "วันที่รับโทษ"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [4],
                    "visible": hide_td,
                }
            ]
        });
    }
    function addBlame(AB) {
        var array = [];
        array.push($('#blame_mistake').val(), $('#blame_mistakeCase').val(), formatDateDB($('#blame_date').val()), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AB, array, true, function (data) {
            $('#add_blame').removeClass('in');
            $('#add_blame').find('.btn-danger').trigger('click');
            show_blame();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติทางวินัยเรียบร้อยเเล้ว", "success");
        });
    }
    function delBlame(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DB", [$(data).attr("id")], true, function (data) {
                show_blame();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }
    function editPerson(EPS) {
        var Improfile = $('#pro_pictureE').prop('files')[0];
        var form_data_img = new FormData();
        form_data_img.append('Improfile', Improfile);
        $.ajax({
            url: '../../PS_processDB/personnal/per_managePerson.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data_img,
            type: 'post',
            success: function (data) {
                var array = [];
                if (data == '0') {
                    data = '';
                }
                array.push(split($('#card_idE').val()), $('#pro_idposE').val(), $('input[name=group1E]:checked', '#pro_sexE').val(), $('#pro_prefixE').val(), $('#pro_fnameE').val(), $('#pro_lnameE').val(), $('#pro_nicknameE').val()
                        , formatDateDB($('#pro_birthdayE').val()), $('input[name=group2E]:checked', '#pro_statusE').val(), $('#pos_idE').val(), $('#type_idE').val(), $('#lvb_idE').val(), $('#lv_idE').val()
                        , $('#class_idE').val(), $('#dep_idE').val(), $('#pro_salaryE').val(), formatDateDB($('#pro_dateInE').val()), formatDateDB($('#pro_dateOutE').val()), data, name, formatDateToday(), $('#pro_id').val(), $('#imgSE').attr('src')
                        , $('#gen_prefix').val(), $('#gen_old').val(), $('#PROVINCE_ID').val(), $('#nationality_id').val(), $('#nationality_id_race').val(), $('#religion_id').val(), $('#gen_blood').val()
                        , $('#gen_soldier').val(), $('#gen_tax').val(), $('#gen_passport').val(), $('#bank_id').val(), $('#gen_account_number').val(), $('#gen_email').val()
                        , $('#gen_facebook').val(), $('#gen_twitter').val(), $('#gen_line').val(), $('#gen_talent').val(), $('#gen_interest').val(), $('#expert_name').val(), $('#expert_ex').val(), dataID
                        , $('#address_number').val(), $('#address_swine').val(), $('#address_soi').val(), $('#address_road').val(), $('#address_village').val(), $('#address_province').val(), $('#address_amphur').val()
                        , $('#address_district').val(), $('#address_zip_code').val(), split($('#address_call').val()), split($('#address_fhone').val()), $('#pread_number').val(), $('#pread_swine').val(), $('#pread_soi').val(), $('#pread_road').val(), $('#pread_village').val(), $('#pread_province').val(), $('#pread_amphur').val()
                        , $('#pread_district').val(), $('#pread_zip_code').val(), split($('#pread_call').val()), split($('#pread_fhone').val()));
                cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", EPS, array, true, function (result) {
                    swal({
                        title: "บันทึกข้อมูลสำเร็จ!",
                        text: "ข้อมูลของคุณ ถูกบันทึกลงระบบเเล้ว",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false,
                    }, function () {
                        if ((pro_id == get_id) || (get_id == '')) {
                            var name = $('#pro_fnameE').val() + ' ' + $('#pro_lnameE').val();
                            var card_id = $('#card_idE').val();
                            var fullname = $('#pro_prefixE').val() + $('#pro_fnameE').val() + ' ' + $('#pro_lnameE').val();
                            var class_id = $('#class_idE').val();
                            var pos_id = $('#pos_idE').val();
                            var dep_id = $('#dep_idE').val();
                            var lvb_id = $('#lvb_idE').val();
                            var tel = split($('#pread_fhone').val());
                            $.post("../../PS_mainpage/personnal/main_personnal.php", {ch_new: 'new', img: data, name: name, card_id: card_id, fullname: fullname, class_id: class_id, pos_id: pos_id, dep_id: dep_id, lvb_id: lvb_id, tel: tel}, function (result) {
                                window.location.reload(true);
                            });
                        } else {
                            window.location.reload(true);
                        }
                    });
                });
            }
        });
    }
    function table_education(data) {
        $(".table_education").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].edu_name, data[i].hised_background, data[i].hised_major, data[i].hised_address, data[i].hised_country, data[i].hised_year, '<center><img class="btn-delete" id="' + data[i].hised_id + '" onclick="javascript: delEdu(this)"/></center>']);
        });
        $('#table_education_show').html('<table class="table table-bordered table-striped table-hover table_education dataTable" width="100%"></table>');
        $('.table_education').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ระดับการศึกษา"},
                {title: "วุฒิการศึกษา"},
                {title: "วิชาเอก"},
                {title: "สถานศึกษา"},
                {title: "ประเทศ"},
                {title: "ปีจบ"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [7],
                    "visible": hide_td,
                }
            ]
        });
    }
    $(".btn-aedu").click(function () {
        if (i < 10) {
            $('<div id="clone_edu' + i + '"><div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">\n\
                   <label >ระดับการศึกษา</label></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">\n\
                        <select class="form-control show-tick hised_level" style="width: 100%" data-live-search="true" id="hised_level' + i + '"></select>\n\
                </div>\n\
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">\n\
                    <label >ปีที่จบ</label></div><div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">\n\
                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="hised_year' + i + '"></select>\n\
                </div></div>\n\
                \n\<div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l"><label >วุฒิการศึกษา</label></div><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><div class="form-group"><div class="form-line"><input type="text" id="hised_background' + i + '" class="form-control" placeholder="กรอกวุฒิการศึกษา"></div></div></div><div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l"><label >วิชาเอก</label></div><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><div class="form-group"><div class="form-line"><input type="text" id="hised_major' + i + '" class="form-control" placeholder="กรอกวิชาเอก"></div></div></div></div>\n\
                <div class="row clearfix"><div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l"><label >สถานศึกษา</label></div><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><div class="form-group"><div class="form-line"><input type="text" id="hised_address' + i + '" class="form-control" placeholder="กรอกสถานศึกษา"></div></div></div><div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l"><label >ประเทศ</label></div><div class="col-lg-4 col-md-4 col-sm-8 col-xs-12"><div class="form-group"><div class="form-line"><input type="text" id="hised_country' + i + '" class="form-control" placeholder="กรอกประเทศ"></div></div></div></div>\n\
            </div>').appendTo($('.insert-edu')).slideDown("slow");
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", 'sl_lv_edu', '', true, function (data) {
                $('#hised_level' + i).html('<option selected="selected" value="">เลือก</opition>');
                $.each(data, function (a) {
                    $('#hised_level' + i).append('<option value="' + data[a].edu_id + '">' + data[a].edu_name + '</opition>');
                });
                $('#hised_year' + i).html('<option selected="selected" value="">เลือก</opition>');
                var d = new Date();
                var n = d.getFullYear();
                for (var y = (n - 70) + 543; y <= n + 543; y++) {
                    $('#hised_year' + i).append('<option value="' + y + '">' + y + '</opition>');
                }
                $('#hised_level' + i).select2();
                $('#hised_year' + i).select2();
                i++;
            });
        }

    });
    $(".btn-dedu").click(function () {
        if (i > 1) {
            i--;
        }
        $("#clone_edu" + i + "").remove();
    });
    function addEdu(AED) {
        var array = [];
        array.push($('#hised_level').val(), $('#hised_year').val(), $('#hised_background').val(), $('#hised_major').val(), $('#hised_address').val(), $('#hised_country').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AED, array, true, function (data) {
            if (i > 1) {
                for (i; i > 1; i--) {
                    var p = i - 1;
                    var array2 = [];
                    array2.push($('#hised_level' + p).val(), $('#hised_year' + p).val(), $('#hised_background' + p).val(), $('#hised_major' + p).val(), $('#hised_address' + p).val(), $('#hised_country' + p).val(), dataID);
                    cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AED, array2, true, function (data) {
                        if (p == 1) {
                            $('#reset_edu').find('#hised_level  option[value=""]').prop("selected", true);
                            $('#hised_level').select2();
                            $('#reset_edu').find('#hised_year  option[value=""]').prop("selected", true);
                            $('#hised_year').select2();
                            $('#reset_edu').find('.btn-danger').trigger('click');
                            show_education();
                            swal("บันทึกสำเร็จ!", "บันทึกประวัติการศึกษาเรียบร้อยเเล้ว", "success");
                        }
                    });
                    $("#clone_edu" + p + "").remove();
                }
            } else {
                $('#reset_edu').find('#hised_level  option[value=""]').prop("selected", true);
                $('#hised_level').select2();
                $('#reset_edu').find('#hised_year  option[value=""]').prop("selected", true);
                $('#hised_year').select2();
                $('#reset_edu').find('.btn-danger').trigger('click');
                show_education();
                swal("บันทึกสำเร็จ!", "บันทึกประวัติการศึกษาเรียบร้อยเเล้ว", "success");
            }
        });
    }
    function delEdu(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DED", [$(data).attr("id")], true, function (data) {
                show_education();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_hisService(data) {
        $(".table_hisService").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].hissv_office, data[i].hissv_department, data[i].hissv_position, data[i].his_idpos, DateThai(data[i].hissv_date), data[i].hissv_salary, data[i].hissv_type, '<center><img class="btn-delete" id="' + data[i].hissv_id + '" onclick="javascript: delHisv(this)"/></center>']);
        });
        $('#table_hisService_show').html('<table class="table table-bordered table-striped table-hover table_hisService dataTable" width="100%"></table>');
        $('.table_hisService').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "กรม"},
                {title: "สังกัด"},
                {title: "ตำแหน่ง"},
                {title: "เลขที่ตำแหน่ง"},
                {title: "วันที่รับราชการ"},
                {title: "เงินเดือน"},
                {title: "ประเภท"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [8],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addHisv(AHISV) {
        var array = [];
        array.push($('#hissv_office').val(), $('#hissv_department').val(), $('#hissv_position').val(), $('#hissv_poscod').val(), formatDateDB($('#hissv_date').val()), $('#hissv_salary').val(), $('#hissv_type').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AHISV, array, true, function (data) {
            $('#add_hisser').removeClass('in');
            $('#add_hisser').find('.btn-danger').trigger('click');
            show_hisService();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรับราชการเรียบร้อยเเล้ว", "success");
        });
    }

    function delHisv(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DHISV", [$(data).attr("id")], true, function (data) {
                show_hisService();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_hisSerSpecial(data) {
        $(".table_hisSerSpecial").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].hissvp_special, data[i].hissvp_topic, data[i].hissvp_code, DateThai(data[i].hissvp_date), data[i].hissvp_place, data[i].hissvp_note, '<center><img class="btn-delete" id="' + data[i].hissvp_id + '" onclick="javascript: delHisvp(this)"/></center>']);
        });
        $('#table_hisSerSpecial_show').html('<table class="table table-bordered table-striped table-hover table_hisSerSpecial dataTable" width="100%"></table>');
        $('.table_hisSerSpecial').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ราชการพิเศษ"},
                {title: "หัวข้อโครงการ"},
                {title: "เลขที่คำสั่ง"},
                {title: "วันที่รับคำสั่ง"},
                {title: "สถานที่"},
                {title: "หมายเหตุ"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [7],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addHisvp(AHISVP) {
        var array = [];
        array.push($('#hissvp_special').val(), $('#hissvp_topic').val(), $('#hissvp_code').val(), formatDateDB($('#hissvp_date').val()), $('#hissvp_place').val(), $('#hissvp_note').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AHISVP, array, true, function (data) {
            $('#add_serSpecial').removeClass('in');
            $('#add_serSpecial').find('.btn-danger').trigger('click');
            show_hisSerSpecial();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรับราชการพิเศษเรียบร้อยเเล้ว", "success");
        });
    }

    function delHisvp(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DHISVP", [$(data).attr("id")], true, function (data) {
                show_hisSerSpecial();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_assignment(data) {
        $(".table_assignment").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].hisas_code, data[i].hisas_poscode, DateThai(data[i].hisas_date_start), DateThai(data[i].hisas_date_end), data[i].hisas_position, data[i].hisas_office, data[i].hisas_pile, data[i].hisas_type, '<center><img class="btn-delete" id="' + data[i].hisas_id + '" onclick="javascript: delHisas(this)"/></center>']);
        });
        $('#table_assignment_show').html('<table class="table table-bordered table-striped table-hover table_assignment dataTable" width="100%"></table>');
        $('.table_assignment').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ", width: "1%"},
                {title: "เลขที่คำสั่ง", width: "13%"},
                {title: "เลขที่ตำแหน่ง", width: "13%"},
                {title: "วันที่เริ่ม", width: "15%"},
                {title: "วันที่สิ้นสุด", width: "18%"},
                {title: "ตำแหน่งสายงาน"},
                {title: "กรม"},
                {title: "สำนัก/กอง"},
                {title: "ประเภทการเคลื่อนไหว", width: "15%"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [9],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addHisas(AHISAS) {
        var array = [];
        array.push($('#hisas_code').val(), $('#hisas_poscode').val(), formatDateDB($('#hisas_date_start').val()), formatDateDB($('#hisas_date_end').val()), $('#hisas_position').val(), $('#hisas_office').val(), $('#hisas_pile').val(), $('#hisas_type').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AHISAS, array, true, function (data) {
            $('#add_assignment').removeClass('in');
            $('#add_assignment').find('.btn-danger').trigger('click');
            show_assignment();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรักษาราชการ มอบหมายงานเรียบร้อยเเล้ว", "success");
        });
    }

    function delHisas(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DHISAS", [$(data).attr("id")], true, function (data) {
                show_assignment();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_award(data) {
        $(".table_award").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            var file_down = data[i].award_file.split(".");
            file_down = file_down[file_down.length - 1];
            var file_tootip = data[i].award_file.split("/");
            file_tootip = file_tootip[file_tootip.length - 1];
//            alert(file_tootip);
            if (file_down == 'pdf') {
                file_down = '<center><a href="' + data[i].award_file + '" download><img class="icon-pdf"/></a></center>';
            } else if ((file_down == "doc") || (file_down == "docx")) {
                file_down = '<center><a href="' + data[i].award_file + '" download><img class="icon-word"/></a></center>';
            } else if ((file_down == "png") || (file_down == "jpg")) {
                file_down = '<center><a href="' + data[i].award_file + '" download><img class="icon-picture"/></a></center>';
            } else if ((file_down == "txt")) {
                file_down = '<center><a href="' + data[i].award_file + '" download><img class="icon-txt"/></a></center>';
            } else if ((file_down == "xlsx") || ((file_down == "xls"))) {
                file_down = '<center><a href="' + data[i].award_file + '" download><img class="icon-excel"/></a></center>';
            } else {
                file_down = 'ไม่มีไฟล์เเนบ';
            }
            dataSet.push(['<center>' + a + '</center>', DateThai(data[i].award_date), data[i].award_topic, file_down, '<center><img class="btn-delete" id="' + data[i].award_id + '" path="' + data[i].award_file + '"onclick="javascript: delAward(this)"/></center>']);
        });
        $('#table_award_show').html('<table class="table table-bordered table-striped table-hover table_award dataTable" width="100%"></table>');
        $('.table_award').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "วันที่ได้รับประกาศ"},
                {title: "เรื่องที่ได้รับ"},
                {title: "ไฟล์ดาวน์โหลด"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [4],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addAward(AAWARD) {
        var awardfile = $('#award_file').prop('files')[0];
        var form_data_img = new FormData();
        form_data_img.append('awardfile', awardfile);
        $.ajax({
            url: '../../PS_processDB/personnal/per_manageDataProfile.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data_img,
            type: 'post',
            success: function (data) {
                if (data != '1') {
                    var array = [];
                    array.push(formatDateDB($('#award_date').val()), $('#award_topic').val(), data, dataID);
                    cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AAWARD, array, true, function (data) {
                        $('#add_award').removeClass('in');
                        $('#add_award').find('.btn-danger').trigger('click');
                        $('#show_fileAward').html('ยังไม่เลือกไฟล์');
                        show_award();
                        swal("บันทึกสำเร็จ!", "บันทึกประวัติการได้รับรางวัลเรียบร้อยเเล้ว", "success");
                    });
                } else if (data == '1') {
                    $('#show_fileAward').html('รูปแบบไฟล์ผิดพลาด *').css("color", "red");
                }
            }
        });
    }

    function delAward(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DAWARD", [$(data).attr("id"), $(data).attr("path")], true, function (data) {
                show_award();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_acade_show(data) {
        $(".table_acade").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            var file_down = data[i].academic_file.split(".");
            file_down = file_down[file_down.length - 1];
            var file_tootip = data[i].academic_file.split("/");
            file_tootip = file_tootip[file_tootip.length - 1];
//            alert(file_tootip);
            if (file_down == 'pdf') {
                file_down = '<center><a href="' + data[i].academic_file + '" download><img class="icon-pdf"/></a></center>';
            } else if ((file_down == "doc") || (file_down == "docx")) {
                file_down = '<center><a href="' + data[i].academic_file + '" download><img class="icon-word"/></a></center>';
            } else if ((file_down == "png") || (file_down == "jpg")) {
                file_down = '<center><a href="' + data[i].academic_file + '" download><img class="icon-picture"/></a></center>';
            } else if ((file_down == "txt")) {
                file_down = '<center><a href="' + data[i].academic_file + '" download><img class="icon-txt"/></a></center>';
            } else if ((file_down == "xlsx") || ((file_down == "xls"))) {
                file_down = '<center><a href="' + data[i].academic_file + '" download><img class="icon-excel"/></a></center>';
            } else {
                file_down = 'ไม่มีไฟล์เเนบ';
            }
            dataSet.push(['<center>' + a + '</center>', data[i].academic_name, data[i].academic_type, DateThai(data[i].academic_date), file_down, '<center><img class="btn-delete" id="' + data[i].academic_id + '" path="' + data[i].academic_file + '"onclick="javascript: delAcade(this)"/></center>']);
        });
        $('#table_acade_show').html('<table class="table table-bordered table-striped table-hover table_acade dataTable" width="100%"></table>');
        $('.table_acade').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อผลงานวิชาการ"},
                {title: "ประเภทผลงานวิชาการ"},
                {title: "วันที่ได้รับ"},
                {title: "ไฟล์ดาวน์โหลด"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [5],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addAcade(AACADE) {
        var acadefile = $('#academic_file').prop('files')[0];
        var form_data_img = new FormData();
        form_data_img.append('acadefile', acadefile);
        $.ajax({
            url: '../../PS_processDB/personnal/per_manageDataProfile.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data_img,
            type: 'post',
            success: function (data) {
                if (data != '1') {
                    var array = [];
                    array.push($('#academic_name').val(), $('#academic_type').val(), formatDateDB($('#academic_date').val()), data, dataID);
                    cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AACADE, array, true, function (data) {
                        $('#add_academic').removeClass('in');
                        $('#add_academic').find('.btn-danger').trigger('click');
                        $('#show_fileacademic').html('ยังไม่เลือกไฟล์');
                        show_acade();
                        swal("บันทึกสำเร็จ!", "บันทึกผลงานวิชาการเรียบร้อยเเล้ว", "success");
                    });
                } else if (data == '1') {
                    $('#show_fileacademic').html('รูปแบบไฟล์ผิดพลาด *').css("color", "red");
                }
            }
        });
    }

    function delAcade(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DACADE", [$(data).attr("id"), $(data).attr("path")], true, function (data) {
                show_acade();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_plan_show(data) {
        $(".table_plan").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].plan_name, data[i].plan_detail, DateThai(data[i].plan_dateStart), DateThai(data[i].plan_dateEnd), '<center><img class="btn-edit" id="' + data[i].plan_id + '" data-toggle="modal" data-target="#editPlan" onclick="javascript: slEditPlan(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].plan_id + '" onclick="javascript: delPlan(this)"/></center>']);
        });
        $('#table_plan_show').html('<table class="table table-bordered table-striped table-hover table_plan dataTable" width="100%"></table>');
        $('.table_plan').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "หัวข้อ / เป้าหมายแผนงาน"},
                {title: "รายละเอียด"},
                {title: "วันที่เริ่มต้น"},
                {title: "วันที่สิ้นสุด"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [5],
                    "visible": hide_td,
                }
            ]
        });
    }

    function calandar_plan(initialLocaleCode, data) {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listMonth'
            },
            selectable: false,
            selectHelper: true,
            select: function (start, end) {
                var title = prompt('Event Title:');
                var eventData;
                if (title) {
                    eventData = {
                        title: title,
                        start: start,
                        end: end
                    };
                    $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                }
                $('#calendar').fullCalendar('unselect');
            },
            defaultDate: formatDateToday(),
            locale: initialLocaleCode,
            buttonIcons: false, // show the prev/next text
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: (function () {
                return data;
            })(),
        });
        $('#calendar').fullCalendar('removeEvents');
        $('#calendar').fullCalendar('addEventSource', data);
        $('#calendar').fullCalendar('rerenderEvents');
    }

    function addPlan(APLAN) {
        var array = [];
        array.push($('#plan_name').val(), $('#plan_detail').val(), formatDateDB($('#plan_dateStart').val()), formatDateDB($('#plan_dateEnd').val()), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", APLAN, array, true, function (data) {
            $('#add_plan').removeClass('in');
            $('#plan_reset').find('.btn-danger').trigger('click');
            show_plan();
            sl_data_plan();
            swal("บันทึกสำเร็จ!", "บันทึกแผนงานของคุณเรียบร้อยเเล้ว", "success");
        });
    }

    function delPlan(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DPLAN", [$(data).attr("id")], true, function (data) {
                show_plan();
                sl_data_plan();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function sl_data_plan() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_table_plan", [dataID], true, function (data) {
            var dateCalandar = [];
            $.each(data, function (i, k) {
                if (data[i].plan_status == '1') {
                    dateCalandar.push({'title': data[i].plan_name, 'start': data[i].plan_dateStart, 'end': endDate(data[i].plan_dateEnd), color: '#009900'});
                } else {
                    dateCalandar.push({'title': data[i].plan_name, 'start': data[i].plan_dateStart, 'end': endDate(data[i].plan_dateEnd), color: '#ff9900'});
                }
            });
            calandar_plan('th', dateCalandar);
        });
    }

    function slEditPlan(data) {

        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "sl_data_plan", [$(data).attr("id")], true, function (data) {
            $('#plan_nameE').val(data[0].plan_name);
            $('#plan_detailE').val(data[0].plan_detail);
            $('#plan_dateStartE').val(formatDateShow(data[0].plan_dateStart));
            $('#plan_dateEndE').val(formatDateShow(data[0].plan_dateEnd));
            $('#plan_idE').val(data[0].plan_id);
            if (data[0].plan_status == '1')
            {
                $("#check_status").prop('checked', true);
                $('#show_statusE2').html('ดำเนินการเสร็จสิ้น');
                $('#show_statusE2').show();
                $('#show_statusE').hide();
            } else
            {
                $("#check_status").prop('checked', false);
                $('#show_statusE2').hide();
                $('#show_statusE').html('กำลังดำเนินตามแผนงาน');
                $('#show_statusE').show();
            }
        });
    }
    $('#check_status').click(function () {
        if ($('#check_status').is(":checked")) {
            $('#show_statusE2').html('ดำเนินการเสร็จสิ้น');
            $('#show_statusE2').show();
            $('#show_statusE').hide();
            $('#plan_status').val('1');
        } else {
            $('#show_statusE2').hide();
            $('#show_statusE').html('กำลังดำเนินตามแผนงาน');
            $('#show_statusE').show();
            $('#plan_status').val('0');
        }
    });
    function editPlan(EPLAN) {
        var array = [];
        array.push($('#plan_nameE').val(), $('#plan_detailE').val(), formatDateDB($('#plan_dateStartE').val()), formatDateDB($('#plan_dateEndE').val()), $('#plan_status').val(), $('#plan_idE').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", EPLAN, array, true, function (data) {
            show_plan();
            sl_data_plan();
            $('#editPlan').modal('hide');
            swal("แก้ไขสำเร็จ!", "บันทึกแผนงานของคุณเรียบร้อยเเล้ว", "success");
        });
    }

    function table_royal_show(data) {
        $(".table_royal").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].hisroyal_name, data[i].hisroyal_somename, DateThai(data[i].hisroyal_date), '<center><img class="btn-delete" id="' + data[i].hisroyal_id + '" onclick="javascript: delRoyal(this)"/></center>']);
        });
        $('#table_royal_show').html('<table class="table table-bordered table-striped table-hover table_royal dataTable" width="100%"></table>');
        $('.table_royal').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ข้อเครื่องราชทานที่รับ"},
                {title: "ราชกิจจานุเบกษา"},
                {title: "วันที่เปลี่ยน"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [4],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addRoyal(AROYAL) {
        var array = [];
        array.push($('#hisroyal_name').val(), $('#hisroyal_somename').val(), formatDateDB($('#hisroyal_date').val()), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AROYAL, array, true, function (data) {
            $('#add_hisroyal').removeClass('in');
            $('#add_hisroyal').find('.btn-danger').trigger('click');
            show_royal();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรับเครื่องราชาของคุณเรียบร้อยเเล้ว", "success");
        });
    }

    function delRoyal(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DROYAL", [$(data).attr("id")], true, function (data) {
                show_royal();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_hisslrup_show(data) {
        $(".table_hisslrup").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', DateThai(data[i].hisslrup_date), data[i].hisslrup_money, data[i].hisslrup_type, '<center><img class="btn-delete" id="' + data[i].hisslrup_id + '" onclick="javascript: delHisslrup(this)"/></center>']);
        });
        $('#table_hisslrup_show').html('<table class="table table-bordered table-striped table-hover table_hisslrup dataTable" width="100%"></table>');
        $('.table_hisslrup').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "วันที่"},
                {title: "เงินเดือน"},
                {title: "ประเภทการเคลื่อนไหว"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [4],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addHisslrup(AHISSLRUP) {
        var array = [];
        array.push(formatDateDB($('#hisslrup_date').val()), $('#hisslrup_money').val(), $('#hisslrup_type').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", AHISSLRUP, array, true, function (data) {
            $('#add_salaryup').removeClass('in');
            $('#add_salaryup').find('.btn-danger').trigger('click');
            show_hisslrup();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรับเลื่อนขั้นเงินเดือนเรียบร้อยเเล้ว", "success");
        });
    }

    function delHisslrup(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DHISSLRUP", [$(data).attr("id")], true, function (data) {
                show_hisslrup();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }

    function table_salarysp_show(data) {
        $(".table_salarysp").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', DateThai(data[i].salarysp_startDate), DateThai(data[i].salarysp_endDate), data[i].salarysp_money, data[i].salarysp_type, '<center><img class="btn-delete" id="' + data[i].salarysp_id + '" onclick="javascript: delSalarysp(this)"/></center>']);
        });
        $('#table_salarysp_show').html('<table class="table table-bordered table-striped table-hover table_salarysp dataTable" width="100%"></table>');
        $('.table_salarysp').DataTable({
            "oLanguage": {
                "sEmptyTable": "ไม่มีข้อมูลในตาราง",
                "sInfo": "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
                "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
                "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
                "sInfoPostFix": "",
                "sInfoThousands": ",",
                "sLengthMenu": "แสดง _MENU_ แถว",
                "sLoadingRecords": "กำลังโหลดข้อมูล...",
                "sProcessing": "กำลังดำเนินการ...",
                "sSearch": "ค้นหา: ",
                "sZeroRecords": "ไม่พบข้อมูล",
                "oPaginate": {
                    "sFirst": "หน้าแรก",
                    "sPrevious": "ก่อนหน้า",
                    "sNext": "ถัดไป",
                    "sLast": "หน้าสุดท้าย"
                },
                "oAria": {
                    "sSortAscending": ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
                    "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
                }
            },
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "วันที่เริ่ม"},
                {title: "วันที่สิ้นสุด"},
                {title: "เงินพิเศษ"},
                {title: "ประเภทเงินพิเศษ"},
                {title: "..."},
            ],
            "columnDefs": [
                {
                    "targets": [5],
                    "visible": hide_td,
                }
            ]
        });
    }

    function addSalarysp(ASALARYSP) {
        var array = [];
        array.push(formatDateDB($('#salarysp_startDate').val()), formatDateDB($('#salarysp_endDate').val()), $('#salarysp_money').val(), $('#salarysp_type').val(), dataID);
        cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", ASALARYSP, array, true, function (data) {
            $('#add_salaryspecial').removeClass('in');
            $('#add_salaryspecial').find('.btn-danger').trigger('click');
            show_salarysp();
            swal("บันทึกสำเร็จ!", "บันทึกประวัติการรับเงินเพิ่มพิเศษเรียบร้อยเเล้ว", "success");
        });
    }

    function delSalarysp(data) {
        swal({
            title: "คุณต้องการลบหรือไม่?",
            text: "หากลบจะไม่สามารถกู้คืนข้อมูลที่ลบได้อีก!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่, ต้องการลบ!",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/per_manageDataProfile.php", "DSALARYSP", [$(data).attr("id")], true, function (data) {
                show_salarysp();
                swal({
                    title: "ลบสำเร็จ!",
                    text: "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว",
                    timer: 1000,
                    imageUrl: "../../images/thumbs-up.png",
                    showConfirmButton: false
                });
            });
        });
    }
</script>