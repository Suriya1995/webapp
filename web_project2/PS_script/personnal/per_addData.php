<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    var proID = '<?= $_SESSION["pro_id"]; ?>';
    var lvb_claim = '<?= $_SESSION["lvb_claim"]; ?>';
    var level = '<?= $_SESSION['level']; ?>';
    var NoImg = '../../images/img-profile/no_img.png';
    var table_prifile = '';
    $(function () {
        $('#show_filePerson').html('ยังไม่ได้เลือกไฟล์');
        $('#filePerson').change(function () {
            var myFile = $('#filePerson').prop('files')[0];
            $('#show_filePerson').html(myFile.name).css("color", "#777");
        });
        $(document).on("click", ".table_profile tbody tr td:not(:first-child):not(:last-child)", function () {
            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
            window.location.href = '../../PS_mainpage/personnal/person_DataProfile.php?id=' + clickedBtnID + '&page=viewPerson';
        });
        $(document).on("click", ".table_profile input[type='checkbox']", function () {
            if ($('.table_profile input[type="checkbox"]').is(':checked')) {
                $('#del_selected').prop('hidden', false);
            } else {
                $('#del_selected').prop('hidden', true);
            }
        });
        $('#del_selected').click(function () {
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
                var pro_id = [];
                $("input:checkbox:checked", table_prifile.cells().nodes()).each(function (i) {
                    pro_id.push($(this).attr('value'));
                });
                cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "del_selected", pro_id, true, function (data) {
                    show_profile();
                    $('#del_selected').prop('hidden', true);
                    swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
                });
            });
        });
        $.datetimepicker.setLocale('th');
        $("#pro_birthday").datetimepicker({
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
        var setDateFunc = function (ct, obj) {
            var minDateSet = formatDatePK($("#pro_dateIn").val());
            var maxDateSet = formatDatePK($("#pro_dateOut").val());
            if ($(obj).attr("id") == "pro_dateIn") {
                this.setOptions({
                    minDate: false,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "pro_dateOut") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#pro_dateIn,#pro_dateOut").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            lang: 'th',
            onShow: setDateFunc,
            onSelectDate: setDateFunc,
        }));
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
        cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "sl_table_profile", "", true, table_profile);
        $('#pro_prefix').select2();
        $('#type_id').select2();
        $('#pos_id').select2();
        $('#lv_id').select2();
        $('#lvb_id').select2();
        $('#class_id').select2();
        $('#dep_id').select2();
        $('#sw_input').hide();
        $('#tran_status').select2();
        $('.see_out').hide();
        $('.see_tranout').hide();
    });
    $('#check_tran').click(function () {
        if ($('#check_tran').is(":checked")) {
            $('#sw_input').show();
        } else {
            $('#sw_input').hide();
            $('#pro_transfer').val('');
        }
    });
    $('#check_tranE').click(function () {
        if ($('#check_tranE').is(":checked")) {
            $('#sw_inputE').show();
        } else {
            $('#sw_inputE').hide();
            $('#pro_transferE').val('');
        }
    });
    $('#tran_status').change(function () {
        if ($('#tran_status').val() == '') {
            $('.see_tranout').hide();
            $('.see_out').hide();
            $('.see_tranout').find('.input').val('');
        } else if ($('#tran_status').val() == '1') {
            $('.see_tranout').find('.input').val('');
            $('.see_tranout').show();
            $('#tran_date').val(DateTodayThai());
        } else {
            $('.see_tranout').find('.input').val('');
            $('#tran_date').val(DateTodayThai());
            $('.see_tranout').show();
            $('.see_out').hide();
        }
    });
    function show_profile() {
        cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "sl_table_profile", "", true, table_profile);
    }

    function table_profile(data) {
        $(".table_profile").html('');
        var dataSet = [];
        var a = 0;
        var tools = '';
        $.each(data, function (i, k) {
            a++;
            if (level == '1') {
                tools = '<img class="btn-detail" data-toggle="modal" data-target="#detailPerson" onclick="javascript: slDetail(this)" id="' + data[i].pro_id + '"/>' + ' ' + '<img class="btn-edit" id="' + data[i].pro_id + '" data-toggle="modal" data-target="#editPerson" onclick="javascript: slEdit(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].pro_id + '" onclick="javascript: delProfile(this)"/>';
            } else {
                tools = '<center><img class="btn-detail" data-toggle="modal" data-target="#detailPerson" onclick="javascript: slDetail(this)" id="' + data[i].pro_id + '"/></center>';
            }
            dataSet.push(['<center><input type="checkbox" value="' + data[i].pro_id + '" id="checkBox_' + a + '" class="filled-in chk-col-indigo checkBox_sub"><label for="checkBox_' + a + '"></label></center>', '<center>' + a + '</center>', '<center>' + data[i].pro_idpos + '</center>', cardID(data[i].card_id), data[i].pro_prefix + data[i].pro_fname + ' ' + data[i].pro_lname, data[i].class_name, DateThai(data[i].pro_dateIn), tools]);
        });
        $('#table_profile_show').html('<table class="table table-bordered table-striped table-hover table_profile dataTable" width="100%"></table>');
        table_prifile = $('.table_profile').DataTable({
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
                {title: '<input type="checkbox" id="checkBox_all" class="filled-in chk-col-indigo checkBox_all"><label for="checkBox_all"></label>'},
                {title: "ลำดับ", "width": "1%"},
                {title: "เลขตำแหน่ง", "width": "1%"},
                {title: "เลขบัตรประชาชน", "width": "16%"},
                {title: "ชื่อ-สกุล"},
                {title: "กลุ่มงาน"},
                {title: "วันเข้ารับราชการ", "width": "15%"},
                {title: "...", "width": "12%"},
            ],
            "fnRowCallback": function (nRow) {
                $(nRow).attr('id', $(nRow).find('img').attr('id'));
                $(nRow).css('cursor', 'pointer');
                $('#table_profile_show').find('#checkBox_all').click(function () {
                    if ($('#checkBox_all').is(':checked')) {
                        $('input', table_prifile.cells().nodes()).prop('checked', true);
                    } else {
                        $('input', table_prifile.cells().nodes()).prop('checked', false);
                    }
                });
            }
        });
    }

    $('#addPerson').find("#pro_picture").change(function () {
        readURLProfile(this);
    });
    function readURLProfile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgS').attr('src', e.target.result);
                $('#person_img').attr('href', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#editPerson').find("#pro_pictureE").change(function () {
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
    function addPerson(APS) {
        var Improfile = $('#pro_picture').prop('files')[0];
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
                array.push(split($('#card_id').val()), $('#pro_idpos').val(), $('input[name=group1]:checked', '#pro_sex').val(), $('#pro_prefix').val(), $('#pro_fname').val(), $('#pro_lname').val(), $('#pro_nickname').val()
                        , formatDateDB($('#pro_birthday').val()), $('input[name=group2]:checked', '#pro_status').val(), $('#pos_id').val(), $('#type_id').val(), $('#lvb_id').val(), $('#lv_id').val()
                        , $('#class_id').val(), $('#dep_id').val(), $('#pro_salary').val(), formatDateDB($('#pro_dateIn').val()), formatDateDB($('#pro_dateOut').val()), $('#pro_transfer').val(), data, name, formatDateToday(), name, formatDateToday());
                cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", APS, array, true, function (data) {
                    show_profile()
                    swal("บันทึกสำเร็จ!", "บันทึกข้อมูลบุคลากรลงในระบบเเล้ว", "success");
                    $('#addPerson').modal('hide');
                });
            }
        });
    }
    function delProfile(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "DPS", [$(data).attr("id")], true, function (data) {
                show_profile();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
    function slEdit(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "SLEPS", [$(data).attr("id")], true, function (data) {
            if (data[0].pro_picture == '') {
                $('#imgSE').attr('src', NoImg);
                $('#person_imgE').attr('href', NoImg);
            } else {
                $('#imgSE').attr('src', data[0].pro_picture);
                $('#person_imgE').attr('href', data[0].pro_picture);
            }
            $('#pro_id').val(data[0].pro_id);
            $('#card_idE').val(data[0].card_id);
            $('#pro_idposE').val(data[0].pro_idpos);
            $('#pro_fnameE').val(data[0].pro_fname);
            $('#pro_lnameE').val(data[0].pro_lname);
            $('#pro_nicknameE').val(data[0].pro_nickname);
            $("#pro_sexE input[name=group1E][value='" + data[0].pro_sex + "']").prop("checked", true);
            $("#pro_statusE input[name=group2E][value='" + data[0].pro_status + "']").prop("checked", true);
            $('#pro_salaryE').val(parseInt(data[0].pro_salary));
            $('#pro_birthdayE').val(formatDateShow(data[0].pro_birthday));
            $('#pro_dateInE').val(formatDateShow(data[0].pro_dateIn));
            $('#pro_dateOutE').val(formatDateShow(data[0].pro_dateOut));
            if (data[0].pro_transfer != '') {
                $('#check_tranE').prop("checked", true);
                $('#sw_inputE').show();
                $('#pro_transferE').val(data[0].pro_transfer);
            } else {
                $('#check_tranE').prop("checked", false);
                $('#sw_inputE').hide();
            }
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
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_tranferOut", [data[0].pro_id], true, function (data2) {
                if (data2.length != 0) {
                    if (data2[0].tran_status == '1') {
                        $('#tran_status  option[value="1"]').prop("selected", true);
                        $('#tran_status').select2();
                        $('.see_tranout').show();
                        $('#tran_date').val(formatDateShow(data2[0].tran_date));
                        $('#tran_note').val(data2[0].tran_note);
                        $('#tran_name').val(data2[0].tran_name);
                    } else if ((data2[0].tran_status == '2')) {
                        $('#tran_status  option[value="2"]').prop("selected", true);
                        $('#tran_status').select2();
                        $('.see_tranout').show();
                        $('.see_out').hide();
                        $('#tran_date').val(formatDateShow(data2[0].tran_date));
                        $('#tran_note').val(data2[0].tran_note);
                    }
                } else {
                    $('.see_tranout').hide();
                    $('.see_out').hide();
                    $('#tran_status  option[value="0"]').prop("selected", true);
                    $('#tran_status').select2();
                    $('.see_tranout').find('.input').val('');
                }
            });
        });
    }
    function slDetail(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "SLEPS", [$(data).attr("id")], true, function (data) {
            if (data[0].pro_picture == '') {
                $('#imgSD').attr('src', NoImg);
                $('#person_imgD').attr('href', NoImg);
            } else {
                $('#imgSD').attr('src', data[0].pro_picture);
                $('#person_imgD').attr('href', data[0].pro_picture);
            }
            $('#card_idD').html(data[0].card_id);
            $('#pro_idposD').html(data[0].pro_idpos);
            $('#pro_prefixD').html(data[0].pro_prefix);
            $('#pro_fnameD').html(data[0].pro_fname);
            $('#pro_lnameD').html(data[0].pro_lname);
            $('#pro_nicknameD').html(data[0].pro_nickname);
            if (data[0].pro_sex == 1) {
                $('#pro_sexD').html('ชาย');
            } else {
                $('#pro_sexD').html('หญิง');
            }
            $('#pro_statusD').html(data[0].pro_status);
            $('#pro_salaryD').html(parseInt(data[0].pro_salary));
            $('#pro_birthdayD').html(DateThai(data[0].pro_birthday));
            $('#pro_dateInD').html(DateThai(data[0].pro_dateIn));
            $('#pro_dateOutD').html(DateThai(data[0].pro_dateOut));
            $('#pro_person_create').html(data[0].pro_person_create);
            $('#pro_date_create').html(data[0].pro_date_create);
            $('#pro_person_update').html(data[0].pro_person_update);
            $('#pro_date_update').html(data[0].pro_date_update);
            if (data[0].pro_transfer != '') {
                $('#sw_inputD').show();
                $('#pro_transferD').html(data[0].pro_transfer);
            } else {
                $('#sw_inputD').hide();
            }
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_type", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].type_id == data2[i].type_id) {
                        $('#type_nameD').html(data2[i].type_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_position", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].pos_id == data2[i].pos_id) {
                        $('#pos_nameD').html(data2[i].pos_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_level", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].lv_id == data2[i].lv_id) {
                        $('#lv_nameD').html(data2[i].lv_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_levelBoss", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].lvb_id == data2[i].lvb_id) {
                        $('#lvb_nameD').html(data2[i].lvb_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_class", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].class_id == data2[i].class_id) {
                        $('#class_nameD').html(data2[i].class_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_department", "", true, function (data2) {
                $.each(data2, function (i) {
                    if (data[0].dep_id == data2[i].dep_id) {
                        $('#dep_nameD').html(data2[i].dep_name);
                    }
                });
            });
            cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", "get_tranferOut", [data[0].pro_id], true, function (data2) {
                if (data2.length != 0) {
                    if (data2[0].tran_status == '1') {
                        $('#tran_status  option[value="1"]').prop("selected", true);
                        $('#tran_status').select2();
                        $('.see_tranout').show();
                        $('#tran_dateD').html(DateThai(data2[0].tran_date));
                        $('#tran_noteD').html(data2[0].tran_note);
                        $('#tran_nameD').html(data2[0].tran_name);
                        $('#topic_tran').html('โอนย้ายออก');
                    } else if (data2[0].tran_status == '2') {
                        $('#tran_status  option[value="2"]').prop("selected", true);
                        $('#tran_status').select2();
                        $('.see_tranout').show();
                        $('.see_out').hide();
                        $('#tran_dateD').html(DateThai(data2[0].tran_date));
                        $('#tran_noteD').html(data2[0].tran_note);
                        $('#topic_tran').html('ลาออก');
                    }
                } else {
                    $('.see_tranout').hide();
                    $('.see_out').hide();
                }
            });
        });
    }
    function editPerson(EPSM) {
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
                        , $('#class_idE').val(), $('#dep_idE').val(), $('#pro_salaryE').val(), formatDateDB($('#pro_dateInE').val()), formatDateDB($('#pro_dateOutE').val()), $('#pro_transferE').val(), data, name, formatDateToday(), $('#pro_id').val(), $('#imgSE').attr('src'));
                cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", EPSM, array, true, function (result) {
                    var arr_tran = [];
                    arr_tran.push($('#tran_name').val(), $('#tran_note').val(), formatDateDB($('#tran_date').val()), $('#tran_status').val(), $('#pro_id').val());
                    cls.GetJSON("../../PS_processDB/personnal/per_managePerson.php", 'data_tranfer', arr_tran, true, function (result) {
                        if (proID == $('#pro_id').val()) {
                            var name = $('#pro_fnameE').val() + ' ' + $('#pro_lnameE').val();
                            var card_id = $('#card_idE').val();
                            var fullname = $('#pro_prefixE').val() + $('#pro_fnameE').val() + ' ' + $('#pro_lnameE').val();
                            var class_id = $('#class_idE').val();
                            var pos_id = $('#pos_idE').val();
                            var dep_id = $('#dep_idE').val();
                            var lvb_id = $('#lvb_idE').val();
                            $.post("../../PS_mainpage/personnal/main_personnal.php", {ch_new: 'new', img: data, name: name, card_id: card_id, fullname: fullname, class_id: class_id, pos_id: pos_id, dep_id: dep_id, lvb_id: lvb_id}, function (result) {
                                swal({
                                    title: "บันทึกข้อมูลสำเร็จ!",
                                    text: "ข้อมูลของคุณ ถูกบันทึกลงระบบเเล้ว",
                                    type: "success",
                                    timer: 1000,
                                    showConfirmButton: false,
                                }, function () {
                                    $('#editPerson').modal('hide');
                                    window.location.reload(true);
                                });
//                                show_profile()
//                                swal("แก้ไขสำเร็จ!", "ข้อมูลของคุณ อัพเดทเเล้ว", "success");
//                                $('#editPerson').modal('hide');
                            });
                        } else {
                            show_profile()
                            swal("แก้ไขสำเร็จ!", "ข้อมูลของคุณ อัพเดทเเล้ว", "success");
                            $('#editPerson').modal('hide');
                        }
                    });
                });
            }
        });
    }
    function importPerson(IMUSER) {
        var myFile = $('#filePerson').prop('files')[0];
        var form_data = new FormData();
        form_data.append('filePerson', myFile);
        $.ajax({
            url: '../../PS_processDB/personnal/per_managePerson.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (data) {
                if (data == '1') {
                    show_profile();
                    swal("บันทึกสำเร็จ!", "ข้อมูลบุคลากร บันทึกในระบบเเล้ว", "success");
                    $('#importPerson').modal('hide');
                    $('#show_filePerson').html('ยังไม่ได้เลือกไฟล์');
                }
                if (data == '2') {
                    $('#show_filePerson').html('รูปแบบไฟล์ผิดพลาด *').css("color", "red");
                }
                if (data == '0') {
                    $('#show_filePerson').html('ยังไม่ได้เลือกไฟล์ *').css("color", "red");
                }
            }
        });
    }
</script>