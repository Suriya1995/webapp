<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    var pro_id = '<?= $_SESSION["pro_id"]; ?>';
    var numDay = '';
    var numDay2 = '';
    $(function () {

        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_leaves", "", true, table_leaves);
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_leavesmp", "", true, table_leavesmp);
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_approve", "", true, table_approve);
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_approvesmp", "", true, table_approvesmp);
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "get_data_day", "", true, function (data) {
            if (data[0].num == null) {
                numDay = 0;
            } else {
                numDay = data[0].num;
            }
            $('#leave_daylax').val(numDay);
            $('#leave_totalday').val(numDay);
        });
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "get_data_day2", "", true, function (data) {
            if (data[0].num2 == null) {
                numDay2 = 0;
            } else {
                numDay2 = data[0].num2;
            }
        });
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "get_data_lastDate", "", true, function (data) {
            if (data != '') {
                $('#leave_lastday').val(formatDateShow(data[0].leave_Indaysmp));
                $('#leave_lastday2').val(formatDateShow(data[0].leave_outdaysmp));
                $('#leave_totalsmp2').val(data[0].leave_totalsmp);
            }
        });

        $(".btn-print").click(function () {
            cls.GetJSON("../../fpdf/testpdf.php", 'print_from1', '', true, function (data) {
                
                window.open('../../fpdf/MyPDF/a.pdf', '_blank');
            });
        });
        $(".btn-print2").click(function () {
            cls.GetJSON("../../fpdf/print_fpdf2.php", 'print_from2', '', true, function (data) {

                window.open('../../fpdf/MyPDF/print2.pdf', '_blank');
            });
        });
        $('#input-hide').hide();
        $('#input-2').hide();
        $('#input-Position').hide();
        $('#ssss').click(function () {

            if (document.getElementById('ssss').checked) {
                $('#input-hide').show();
                $('#input-2').show();
                $('#input-Position').show();
            } else {
                $('#input-hide').hide();
                $('#input-2').hide();
                $('#input-Position').hide();
            }
        });
        $.datetimepicker.setLocale('th');
        $("#pro_birthday").datetimepicker({
            timepicker: false,
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
        $("#leave_dates").datetimepicker({
            timepicker: false,
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
        
        $("#leave_date").val(DateToday());
        
        function formatDatePK(date) {
            var srt = [];
            srt[0] = date.substr(0, 2);
            srt[1] = date.substr(3, 2);
            var year = date.substr(6, 4) - 543;
            if (date == '') {
                return '';
            } else {
                return srt[0] + "/" + srt[1] + "/" + year;
            }
        }

        var optsDate = {
            format: 'd/m/Y', // รูปแบบวันที่ 
            formatDate: 'd/m/Y',
            timepicker: false,
            closeOnDateSelect: true,
        }
        var setDateFunc = function (ct, obj) {
            var minDateSet = formatDatePK($("#leave_Inday").val());
            var maxDateSet = formatDatePK($("#leave_outday").val());
            if (($('#leave_outday').val() != '') && ($('#leave_Inday').val() != '')) {
                var ddd = jsDateDiff(formatDateDB($('#leave_Inday').val()), formatDateDB($('#leave_outday').val()));
                $('#leave_dayreplace').val(ddd + 1);
            }

            if ($(obj).attr("id") == "leave_Inday") {
                this.setOptions({
                    minDate: true,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "leave_outday") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }//วันที่ฟอร์มแรก
        $("#leave_Inday,#leave_outday").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            onShow: setDateFunc,
            onSelectDate: setDateFunc,
        }));
        $("#leave_datesmp").datetimepicker({
            timepicker: false,
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
        var setDateFunc = function (ct, obj) {
            var minDateSet = formatDatePK($("#leave_Indaysmp").val());
            var maxDateSet = formatDatePK($("#leave_outdaysmp").val());
            if (($('#leave_outdaysmp').val() != '') && ($('#leave_Indaysmp').val() != '')) {
                var ddd = jsDateDiff(formatDateDB($('#leave_Indaysmp').val()), formatDateDB($('#leave_outdaysmp').val()));
                $('#leave_totalsmp').val(ddd + 1);
            }

            if ($(obj).attr("id") == "leave_Indaysmp") {
                this.setOptions({
                    minDate: true,
                    maxDate: maxDateSet ? maxDateSet : false
                })
            }
            if ($(obj).attr("id") == "leave_outdaysmp") {
                this.setOptions({
                    maxDate: false,
                    minDate: minDateSet ? minDateSet : false
                })
            }
        }
        $("#leave_Indaysmp,#leave_outdaysmp").datetimepicker($.extend(optsDate, {
            yearOffset: 543,
            onShow: setDateFunc,
            onSelectDate: setDateFunc,
        }));
        $("#leave_lastday").datetimepicker({
            timepicker: false,
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
        $("#leave_lastday2").datetimepicker({
            timepicker: false,
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
        $('#addPerson').find("#pro_picture").change(function () {
            readURLProfile(this);
        });
    }
    );
    function show_tableApprov() {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_approve", "", true, table_approve);
    }

    function show_tableApprovsmp() {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "sl_table_approvesmp", "", true, table_approvesmp);
    }
    function addRelax(ALR) {
//        alert($("#leave_date").val());
        if ($('#leave_dayreplace').val() == '') {
            var num = 0;
        } else {
            var num = parseInt($('#leave_dayreplace').val());
        }
        var num_check = parseInt(numDay);
        var total = num_check + num;
        if (total >= 30) {
            swal({
                title: "แจ้งเตือน!",
                text: "<span style=\"color: #CC0000\">จำนวนวันลาของคุณเกินกำหนด<span><br><span style=\"color: #CC0000\">คุณลาได้อีก " + (30 - num_check) + " วัน<span>",
                html: true,
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            var array = [];
            array.push($('#leave_write').val(), formatDateDB($('#leave_date').val()), 'ลาพักผ่อน', $('#leave_topic').val(), $('#leave_name').val(), $('#position_name').val(), $('#levels_la').val(), $('#sangkad_la').val()
                    , $('#leave_daylax').val(), $('#leave_totalday').val(), formatDateDB($('#leave_Inday').val()), formatDateDB($('#leave_outday').val()), $('#leave_dayreplace').val(), $('#leave_address').val(), $('#tel_leave').val(), $('#leave_since').val()
                    , $('#leave_name2').val(), $('#pos_name').val(), $('#name_place').val(), formatDateDB($('#leave_dates').val()));
            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", ALR, array, true, function (data) {

                window.location.href = 'form_leave.php';
            });
        }
    }

    function addPsm(ASM) {
        if ($('#leave_totalsmp').val() == '') {
            var num = 0;
        } else {
            var num = parseInt($('#leave_totalsmp').val());
        }
        var num_check = parseInt(numDay2);
        var total = num_check + num;
        if (total >= 30) {
            swal({
                title: "แจ้งเตือน!",
                text: "<span style=\"color: #CC0000\">จำนวนวันลาของคุณเกินกำหนด<span><br><span style=\"color: #CC0000\">คุณลาได้อีก " + (30 - num_check) + " วัน<span>",
                html: true,
                timer: 2000,
                showConfirmButton: false
            });
        } else {
            var Improfile = $('#pro_pictureE').prop('files')[0];
            var form_data_img = new FormData();
            form_data_img.append('Improfile', Improfile);
            $.ajax({
                url: '../../PS_processDB/personnal/lea_relax.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data_img,
                type: 'post',
                success: function (data) {
                    var array = [];
                    array.push($('#leave_writesmp').val(), $('#leave_type').val(), $('input[name=leave]:checked', '#leave_type2').val(), $('#leave_sincesmp').val(), formatDateDB($('#leave_Indaysmp').val()), formatDateDB($('#leave_outdaysmp').val()), $('#leave_totalsmp').val()
                            , formatDateDB($('#leave_lastday').val()), formatDateDB($('#leave_lastday2').val()), $('#leave_totalsmp2').val(), $('#leave_address2').val(), $('input[name=leave2]:checked', '#leave_type3').val(), formatDateDB($('#leave_datesmp').val())
                            , $('#leader_name').val(), $('#name_mesmp').val(), $('#posi_name').val(), $('#degree_name').val(), $('#sangkad_name').val(), $('#Tel_me').val(), data);
                    cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", ASM, array, true, function (data2) {


                        window.location.href = 'form_leavesick.php';
                        // alert(data);

                    });
                }
            });
        }
    }

    function table_leaves(data) {
        $(".table_leaves").html('');
        var dataSet = [];
        var a = 0;
        var tag = [];
        $.each(data, function (i, k) {
            if (data[i].status_leaves == '0') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-amber waves-effect">รอดำเนินการ</button>';
            }
            if (data[i].status_leaves == '1') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-red waves-effect">อนุมัติ</button>';
            }
            if (data[i].status_leaves == '2') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect">ไม่อนุมัติ</button>';
            }
            a++;
            dataSet.push([a, data[i].leave_name, 'ลาพักผ่อน', data[i].leave_Inday, data[i].leave_outday, tag, '<img class="btn-delete" id="' + data[i].leavelax_id + '" onclick="javascript: delapprov(this)"/>']);
        });
        $('#table_leaves_show').html('<table class="table table-bordered table-striped table-hover table_leaves dataTable" width="100%"></table>');
        $('.table_leaves').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ"},
                {title: "เรื่อง"},
                {title: "วันที่ลา"},
                {title: "ลาถึงวันที่"},
                {title: "สถานะ"},
                {title: "..."},
            ]
        });
    }
    function table_leavesmp(data) {
        $(".table_leavesmp").html('');
        var dataSet = [];
        var a = 0;
        var tag = [];
        $.each(data, function (i, k) {
            if (data[i].status_leaves2 == '0') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-amber waves-effect">รอดำเนินการ</button>';
            }
            if (data[i].status_leaves2 == '1') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-red waves-effect">อนุมัติ</button>';
            }
            if (data[i].status_leaves2 == '2') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect">ไม่อนุมัติ</button>';
            }
            a++;
            dataSet.push([a, data[i].name_mesmp, data[i].leave_type, data[i].leave_Indaysmp, data[i].leave_outdaysmp, tag, '<img class="btn-delete" id="' + data[i].leave_idsmp + '" onclick="javascript: delsmp(this)"/>']);
        });
        $('#table_leavesmp_show').html('<table class="table table-bordered table-striped table-hover table_leavesmp dataTable" width="100%"></table>');
        $('.table_leavesmp').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ"},
                {title: "เรื่อง"},
                {title: "วันที่ลา"},
                {title: "ลาถึงวันที่"},
                {title: "สถานะ"},
                {title: "..."},
            ]
        });
    }

    function table_approve(data) {
        $(".table_approve").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([a, data[i].leave_name, '<a data-toggle="modal" data-target="#detailLeavelax" onclick="javascript: slelax(' + data[i].leavelax_id + ')">' + 'ลาพักผ่อน' + '</a>', data[i].leave_Inday, data[i].leave_outday, '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect" onclick="javascript: approv(' + data[i].leavelax_id + ')">อนุมัติ</button> <button style="border-radius: 12px" type="button" class="btn bg-red waves-effect" onclick="javascript: Napprov(' + data[i].leavelax_id + ')">ไม่อนุมัติ</button>']);
        });
        $('#table_approve_show').html('<table class="table table-bordered table-striped table-hover table_approve dataTable" width="100%"></table>');
        $('.table_approve').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อ"},
                {title: "เรื่อง"},
                {title: "วันที่ลา"},
                {title: "ลาถึงวันที่"},
                {title: "สถานะ"},
            ]
        });
    }

    function slelax(data) {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", 'sl_detail_form1', [data], true, function (data) {
            $('#write').html(data[0].leave_write);
            $('#date1').html(DateThai(data[0].leave_date));
            $('#name').html(data[0].leave_name);
            $('#topic').html(data[0].leave_topic);
            $('#position').html(data[0].position_name);
            $('#levels').html(data[0].levels_la);
            $('#sangkad').html(data[0].sangkad_la);
            $('#lacollect').html(data[0].leave_daylax);
            $('#latotal').html(data[0].leave_totalday);
            $('#Inday').html(DateThai(data[0].leave_Inday));
            $('#outday').html(DateThai(data[0].leave_outday));
            $('#dayreplace').html(data[0].leave_dayreplace);
            $('#address').html(data[0].leave_address);
            $('#Tel1').html(data[0].tel_leave);
            $('#since').html(data[0].leave_since);
            $('#name2').html(data[0].leave_name2);
            $('#pos').html(data[0].pos_name);
            $('#place').html(data[0].name_place);
            $('#dates').html(DateThai(data[0].leave_dates));
        });
    }
    ///อนุมัติฟอร์ม2   
    function table_approvesmp(data) {
        $(".table_approvesmp").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<input type="checkbox" id="' + a + '" class="filled-in chk-col-blue"><label for="' + a + '"></label>', a, data[i].name_mesmp, '<a data-toggle="modal" data-target="#detailLeavesmp" onclick="javascript: slapprovesmp(' + data[i].leave_idsmp + ')">' + data[i].leave_type + '</a>', data[i].leave_Indaysmp, data[i].leave_outdaysmp, '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect" onclick="javascript: approvsmp(' + data[i].leave_idsmp + ')">อนุมัติ</button> <button style="border-radius: 12px" type="button" class="btn bg-red waves-effect" onclick="javascript: approvsmp2(' + data[i].leave_idsmp + ')">ไม่อนุมัติ</button>']);
        });
        $('#table_approvesmp_show').html('<table class="table table-bordered table-striped table-hover table_approvesmp dataTable" width="100%"></table>');
        $('.table_approvesmp').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: '<input type="checkbox" id="all" class="filled-in chk-col-blue"><label for="all"><h5>ทั้งหมด</h5></label>'},
                {title: "ลำดับ"},
                {title: "ชื่อ"},
                {title: "เรื่อง"},
                {title: "วันที่ลา"},
                {title: "ลาถึงวันที่"},
                {title: "สถานะ"},
            ]
        });
    }

    function slapprovesmp(data) {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", 'get_data_form2', [data], true, function (data) {
            $('#date').html(data[0].leave_datesmp);
            $('#writesmp').html(data[0].leave_writesmp);
            $('#type1').html(data[0].leave_type);
            $('#leader').html(data[0].leader_name);
            $('#nameme').html(data[0].name_mesmp);
            $('#posiname').html(data[0].posi_name);
            $('#degree').html(data[0].degree_name);
            $('#sangkad2').html(data[0].sangkad_name);
            if (data[0].leave_type2 == 'ขอลา') {
                $('.ss').prop('checked', true);
            }
            if (data[0].leave_type2 == 'กิจส่วนตัว') {
                $('.aa').prop('checked', true);
            }
            if (data[0].leave_type2 == 'คลอดบุตร') {
                $('.dd').prop('checked', true);
            }
            $('#sincesmp').html(data[0].leave_sincesmp);
            $('#Indaysmp').html(data[0].leave_Indaysmp);
            $('#outdaysmp').html(data[0].leave_outdaysmp);
            $('#totalsmp').html(data[0].leave_totalsmp);
            $('#lastday').html(data[0].leave_lastday);
            $('#lastday2').html(data[0].leave_lastday2);
            $('#totalsmp2').html(data[0].leave_totalsmp2);
            $('#address2').html(data[0].leave_address2);
            $('#Tel').html(data[0].Tel_me);
        });
    }
    function approv(id) {
        swal({
            title: "คุณต้องการอนุมัติหรือไม่?",
            type: "info",
            showCancelButton: true,
            confirmButtonText: "ต้องการ",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {

            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "APPROV", ['1', id], true, function () {
                swal({
                    title: "อนุมัติสำเร็จ",
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = '../../PS_mainpage/personnal/leaves_approv.php';
            });
        });
    }
    function Napprov(id) {
        swal({
            title: "คุณไม่ต้องการอนุมัติใช่ไหม",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {

            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "APPROV", ['2', id], true, function () {

                show_tableApprov();
                swal({
                    title: "ยกเลิกสำเร็จ!!",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    }
    function approvsmp(id) {
        swal({
            title: "คุณต้องการอนุมัติหรือไม่?",
            type: "info",
            showCancelButton: true,
            confirmButtonText: "ต้องการ",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {

            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "APPROV2", ['1', id], true, function () {

                show_tableApprovsmp();
                swal({
                    title: "อนุมัติสำเร็จ",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    }
    function approvsmp2(id) {
        swal({
            title: "คุณไม่ต้องการอนุมัติใช่ไหม",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {

            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "APPROV2", ['1', id], true, function () {

                show_tableApprovsmp();
                swal({
                    title: "อนุมัติสำเร็จ",
                    timer: 2000,
                    showConfirmButton: false
                });
            });
        });
    }
    function delapprov(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "DLX", [$(data).attr("id")], true, function (data) {
                show_tableApprovsmp();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
                window.location.href = '../../PS_mainpage/personnal/check_status.php';
            });
        });
    }
    function delsmp(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", "DSMP", [$(data).attr("id")], true, function (data) {
                show_tableApprovsmp();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
                window.location.href = '../../PS_mainpage/personnal/check_status2.php';
            });
        });
    }

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

    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode

        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }//ดักพิมได้แต่ตัวเลข

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
    function jsDateDiff(strDate1, strDate2) {
        var theDate1 = Date.parse(strDate1) / 1000;
        var theDate2 = Date.parse(strDate2) / 1000;
        var diff = (theDate2 - theDate1) / (60 * 60 * 24);
        return diff;
    }

    function table_power(data) {
        $(".table_power").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([a, data[i].name_class]);
        });
        $('#table_power_show').html('<table class="table table-bordered table-striped table-hover table_power dataTable" width="100%"></table>');
        $('.table_power').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "..."},
                {title: "หน่วยงาน"},
            ]
        });
    }

</script> 