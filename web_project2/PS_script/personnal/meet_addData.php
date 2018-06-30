
<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    var i = 0;
    var j = 0;
    $(function () {


    //getjson print table 1 //
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", 'sl_data_form', '', true, function (data) {

                    $('#m_class').html(data[0].class_name);
                    $('#m_lvb').html(data[0].lvb_name);
                    $('#m_cardname').html(data[0].meet_psname);
                    $('#m_date').html(data[0].meet_date);
                    $('#m_no').html(data[0].meet_no);
                    $('#m_name').html(data[0].meet_name);
                    $('#m_dateout').html(data[0].meet_dateout);
                    $('#m_dateback').html(data[0].meet_dateback);
                    $('#m_datefrom').html(data[0].meet_datefrom);
                    $('#m_dateto').html(data[0].meet_dateto);
                    $('#m_product_money').html(data[0].product_money);
                    $('#m_budget_money').html(data[0].budget_money);
                    $('#m_liceplate_stm').html(data[0].liceplate_stm);
                    $('#m_liceplate_car').html(data[0].liceplate_car);
                    $('#m_budget_ve_num').html(data[0].budget_ve_num);
                    $('#m_budget_ve_money').html(data[0].budget_ve_money);

                   

                    });

     //getjson print table 1 //
     


        $('#input-Position').hide();
        $('#hiden').hide();

        $('#budget_1').click(function () {

            if (document.getElementById('budget_1').checked) {

                $('#hiden').show();
                $('#input-Position').show();
              
            }
        });

        $('#input-Position2').hide();
        $('#hiden2').hide();

        $('#budget_2').click(function () {

            if (document.getElementById('budget_2').checked) {
                $('#input-Position').hide();
                $('#hiden').hide();
                $('#hiden2').hide();
                $('#input-Position2').hide();

        }
    });

        $('#budget_3').click(function () {

            if (document.getElementById('budget_3').checked) {
                $('#input-Position').hide();
                $('#hiden').hide();
                $('#hiden2').show();
                $('#input-Position2').show();
               

            }

        });
        
        
        $('#input-Position3').hide();
        $('#hiden3').hide();
          $('#input-Position4').hide();
        $('#hiden4').hide();

        $('#stm_se').click(function () {

            if (document.getElementById('stm_se').checked) {
                $('#hiden3').show();
                $('#input-Position3').show();
                 $('#hiden4').show();
                $('#input-Position4').show();
                $('#hiden5').hide();
                $('#input-Position5').hide();
                 $('#hiden6').hide();
                $('#input-Position6').hide();
                $('#hiden7').hide();
                $('#input-Position7').hide();

            } 
            // else {
            //     $('#hiden3').show();
            //     $('#input-Position3').hide();
            //      $('#hiden4').show();
            //     $('#input-Position4').show();
            // }
        });
        
         $('#input-Position5').hide();
        $('#hiden5').hide();
          $('#input-Position6').hide();
        $('#hiden6').hide();

        $('#budget_ve').click(function () {

            if (document.getElementById('budget_ve').checked) {
                $('#hiden3').hide();
                $('#input-Position3').hide();
                 $('#hiden4').hide();
                $('#input-Position4').hide();
                $('#hiden5').show();
                $('#input-Position5').show();
                 $('#hiden6').show();
                $('#input-Position6').show();
            } else {
                $('#hiden5').show();
                $('#input-Position5').hide();
                 $('#hiden6').show();
                $('#input-Position6').show();
            }
        });

         $('#bus').click(function () {

                if (document.getElementById('bus').checked) {
                    $('#hiden3').hide();
                    $('#input-Position3').hide();
                    $('#hiden4').hide();
                    $('#input-Position4').hide();
                    $('#hiden5').hide();
                    $('#input-Position5').hide();
                    $('#hiden6').hide();
                    $('#input-Position6').hide();
                    $('#hiden7').hide();
                    $('#input-Position7').hide();
       
                } 
                });


         $('#input-Position7').hide();
        $('#hiden7').hide();

        $('#car_ve').click(function () {

            if (document.getElementById('car_ve').checked) {
                $('#hiden3').hide();
                    $('#input-Position3').hide();
                    $('#hiden4').hide();
                    $('#input-Position4').hide();
                    $('#hiden5').hide();
                    $('#input-Position5').hide();
                    $('#hiden6').hide();
                    $('#input-Position6').hide();
                    $('#hiden7').show();
                $('#input-Position7').show();

               

             } 
             else {
                $('#hiden7').show();
                $('#input-Position7').show();
                

            }
        });

       
        
        
      
        





        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_statusmeet", "", true, table_statusmeet);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_statusmapprov", "", true, table_statusmapprov);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_statusmapprov_di", "", true, table_statusmapprov_di);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_reportapprov", [name], true, table_reportapprov);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_statusreport", "", true, table_statusreport);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_meet_report", "", true, table_meet_report);
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_reportcount", "", true, table_reportcount);


        $(".btn-print").click(function () {
            //Hide all other elements other than printarea.
            var printBlock = $(".fm_print");
            printBlock.hide();
            window.print();
            printBlock.show();

        });

        $.datetimepicker.setLocale('th');


        $("#meet_time").datetimepicker({
            datepicker: false,
            format: 'H:i'
        });

        
        
        $("#meet_datefrom").datetimepicker({
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
        $("#meet_dateto").datetimepicker({
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

        $("#location_date_form").datetimepicker({
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

        
        $("#location_todate_form").datetimepicker({
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


        $("#meet_dateout").datetimepicker({
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
        $("#meet_dateback").datetimepicker({
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

        function DateTodayThai(){
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear() + 543;
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            today = dd + '/' + mm + '/' + yyyy;
            return today;
        }
    });




    $('#addPerson').find("#pro_picture").change(function () {
        readURLProfile(this);
    });
    function readURLProfile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgS').attr('src', e.target.result);
                $('#zoom-img').attr('href', e.target.result);
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
    }


    function addmeet(APM) {

        
        var array = [];
        array.push($('#class_name').val(),
                    $('#meet_no').val(), 
                    formatDateDB($('#meet_date').val()),
                    $('#lvb_name').val(), 
                    $('#meet_psname').val(), 
                    $('#meet_name').val(),
                    $('input[name=group2]:checked', '#meet_type').val(), 

                    formatDateDB($('#meet_datefrom').val()), 
                    formatDateDB($('#meet_dateto').val()), 

                    //$('input[name=group3]:checked', '#meet_vehicle').val(), 
                    $('input[name=group4]:checked', '#meet_budget').val(), 
                    formatDateDB($('#meet_dateout').val()),
                    $('#meet_timeout').val(),
                    formatDateDB($('#meet_dateback').val()),
                    $('#meet_timeback').val(),

                  

                    $('#name_pspart').val(), 
                    $('#product_money').val(), 
                    $('#budget_money').val());

       
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APM", array, true, function (data) {
            window.location.href = 'form_meeting.php';
        });


        
        var array2 = [];
        array2.push($('#optgroup').val()  , 
                $('#meet_location').val() , 
                $('#provinces_name').val() , 
                formatDateDB($('#location_date_form').val()) , 
                formatDateDB($('#location_todate_form').val()));
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APM2", array2, true, function (data) {
            window.location.href = 'form_meeting.php';
            
        });

        var array3 = [];
        array3.push($('#optgroup').val());
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APM3", array3, true, function (data) {
            window.location.href = 'form_meeting.php';
            
        });

        
    }

   
   
    function add_report(ARP) {
        var Improfile = $('#pro_pdf').prop('files')[0];
        var form_data_img = new FormData();
        form_data_img.append('Improfile', Improfile);
        $.ajax({
            url: '../../PS_processDB/personnal/meet_manage.php', // point to server-side PHP script 
            dataType: 'text', // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: form_data_img,
            type: 'post',
            success: function (data2) {

                var array = [];
                array.push($('#meet_goal').val(), $('#meet_contents').val(), $('#meet_benefits').val(), data2);
                cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "ARP", array, true, function (data2) {
                    window.location.href = 'tranning_form.php';
                    alert(data2);
                });


            }
        });
    }



    function AddRow() {
        i++;
        $('.uu').append('<div id = "area' + i + '" class="row clearfix "><div class="col-sm-10" ><div class="form-line"><input type="text" id = "name_pspart " class="form-control" placeholder="กรอกชื่อผู้เข้าร่วม" /></div><div class="col-sm-2" ><button type="button"  class="btn btn-danger btn_remov" onclick="javascript: delRow(' + i + ')">X</button></div></div>');


    }//เพิ่มผู้เข้าร่วม

    function delRow(data) {
        $('#area' + data + '').remove();
    }//ลบผู้เข้าร่วม

    function Addlocation() {
//		alert($('.locationh'));

        $('.locationh').clone().prependTo('.dddd').attr('class', 'locationh' + j + '');
        $(' .locationh' + j + '').append('bbbb');
//                console.log(j);
        j++;




    }//เพิ่มสถานที่ เวลา จังหวัด


    function table_statusmeet(data) {
        console.log(data);
        $(".table_statusmeet").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            if (data[i].meet_status == '0') {
                tag = '<img class ="btn-waitaprove" >';
                tag1 = '<img class ="btn-null" >';
                tag2 = '<img class ="btn-null" >';


            }
            if (data[i].meet_status == '1') {
                tag = '<img class ="btn-approve" >';
                tag1 = '<img class ="btn-waitaprove" >';
                tag2 = '<img class ="btn-null" >';
                tag3 = '<img class ="btn-null" >';
            }


            if (data[i].meet_status_vehicle == '1') {
                tag = '<img class ="btn-approve" >';
                tag1 = '<img class ="btn-approve" >';
                tag2 = '<img class ="btn-waitaprove" >';
                tag3 = '<img class ="btn-waitaprove" >';

            }
            if (data[i].meet_status_director == '0') {
                tag3 = '<img class ="btn-null" >';


            }

            if (data[i].meet_status_director == '1') {
                tag = '<img class ="btn-approve" >';
                tag1 = '<img class ="btn-approve" >';
                tag2 = '<img class ="btn-approve" >';
                tag3 = '<img class ="btn-approve" >';

            }




            if (data[i].meet_status == '2') {
                tag = '<img class ="btn-noapprove" >';
                tag1 = '<img class ="btn-noapprove" >';
                tag2 = '<img class ="btn-noapprove" >';
                tag3 = '<img class ="btn-noapprove" >';

            }


            a++;
            dataSet.push([a, data[i].meet_name, data[i].meet_type, data[i].meet_datefrom, data[i].meet_dateback, tag, tag1, tag2, tag3]);
        });
        $('#table_statusmeet_show').html('<table class="table table-bordered table-striped table-hover table_statusmeet dataTable" width="100%"></table>');
        $('.table_statusmeet').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},

                {title: "ชื่อการไปราชการ"},
                {title: "ประเภทราชการ"},
                {title: "วันที่ไปราชการ"},
                {title: "ไปราชการถึงวันที่"},
                {title: "หัวหน้ากลุ่มงาน"},
                {title: "หัวหน้ากลุ่มยานพหนะ"},
                {title: "ผู้อำนวยการ"},
                {title: "สถานะการดำเนินงาน"},
            ]
        });
    }

    function table_statusmapprov(data) {
        console.log(data);
        $(".table_statusmapprov").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {

            a++;
            dataSet.push([a, data[i].meet_psname, '<a data-toggle="modal" data-target="#detailMeet">' + data[i].meet_name + '</a>', data[i].meet_type, data[i].meet_datefrom, data[i].meet_dateback, '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect" aor="' + data[i].meet_id + '" onclick="javascript: approv(this)">อนุมัติ</button> <button style="border-radius: 12px" type="button" class="btn bg-red waves-effect" aor2="' + data[i].meet_id + '"  onclick="javascript: Napprov(this)">ไม่อนุมัติ</button>']);
        });
        $('#table_statusmapprov_show').html('<table class="table table-bordered table-striped table-hover table_statusmapprov dataTable" width="100%"></table>');
        $('.table_statusmapprov').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},
                {title: "ชื่อ-สกุล"},
                {title: "ชื่อการไปราชการ"},
                {title: "ประเภทราชการ"},
                {title: "วันที่ไปราชการ"},
                {title: "ไปราชการถึงวันที่"},
                {title: "สถานะ"},
            ]
        });
    }

    function table_statusmapprov_di(data) {
        console.log(data);
        $(".table_statusmapprov_di").html('');
        var dataSet = [];
        var a = 0;

        $.each(data, function (i, k) {

            a++;
            dataSet.push([a, data[i].meet_psname, '<a data-toggle="modal" data-target="#detailMeet">' + data[i].meet_name + '</a>', data[i].meet_type, data[i].class_name, data[i].meet_datefrom, data[i].meet_dateback, '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect" aor3="' + data[i].meet_id + '" onclick="javascript: approv_di(this)">อนุมัติ</button> <button style="border-radius: 12px" type="button" class="btn bg-red waves-effect" aor4="' + data[i].meet_id + '"  onclick="javascript: Napprov_di(this)">ไม่อนุมัติ</button>']);
        });
        $('#table_statusmapprov_di_show').html('<table class="table table-bordered table-striped table-hover table_statusmapprov_di dataTable" width="100%"></table>');
        $('.table_statusmapprov_di').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},
                {title: "ชื่อ-สกุล"},
                {title: "ชื่อการไปราชการ"},
                {title: "ประเภทราชการ"},
                {title: "หน่วยงาน"},
                {title: "วันที่ไปราชการ"},
                {title: "ไปราชการถึงวันที่"},
                {title: "สถานะ"},
            ]
        });
    }


    function table_reportapprov(data) {
        console.log(data);
        $(".table_reportapprov").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            if (data[i].report_status == '1') {
                tag = '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect">รายงานเสร็จสิ้น</button>';
            } else
                (data[i].report_status == '0')
            {
                tag = ' <img class="btn-edit" id="' + data[i].meet_id + '" data-toggle="modal" data-target="#editreport" />';
            }


            a++;
            dataSet.push([a, '<a data-toggle="modal" >' + data[i].meet_name + '</a>', data[i].meet_type, data[i].meet_datefrom, data[i].meet_dateback, tag]);
        });
        $('#table_reportapprov_show').html('<table class="table table-bordered table-striped table-hover table_reportapprov dataTable" width="100%"></table>');
        $('.table_reportapprov').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},
                {title: "ชื่อการไปราชการ"},
                {title: "ประเภทราชการ"},
                {title: "วันที่ไปราชการ"},
                {title: "ไปราชการถึงวันที่"},
                {title: "รายงาน"},
            ]
        });
    }

    function table_statusreport(data) {
        console.log(data);
        $(".table_statusreport").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {

            a++;
            dataSet.push([a, '<a data-toggle="modal" data-target="#detailMeet">' + data[i].meet_name + '</a>', data[i].meet_type, data[i].meet_datefrom, data[i].meet_dateback, '<button style="border-radius: 12px" type="button" class="btn bg-green waves-effect" aor="' + data[i].meet_id + '" onclick="javascript: approv(this)">อนุมัติ</button> <button style="border-radius: 12px" type="button" class="btn bg-red waves-effect" aor2="' + data[i].meet_id + '"  onclick="javascript: Napprov(this)">ไม่อนุมัติ</button>']);
        });
        $('#table_statusreport_show').html('<table class="table table-bordered table-striped table-hover table_statusreport dataTable" width="100%"></table>');
        $('.table_statusreport').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},

                {title: "ชื่อการไปราชการ"},
                {title: "ประเภทราชการ"},
                {title: "วันที่ไปราชการ"},
                {title: "ไปราชการถึงวันที่"},
                {title: "สถานะ"},
            ]
        });
    }
 
    // table meet_report //
    function table_meet_report(data) {

        $(".table_meet_report").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {

            a++;
            dataSet.push(['<a data-toggle="modal" data-target="#detailreport " id = "' + data[i].class_id + '"onclick="javascript: datamodal(this)">' + data[i].class_name + '</a>']);
        });
        $('#table_meet_report_show').html('<table class="table table-bordered table-striped table-hover table_meet_report dataTable" width="100%"></table>');
        $('.table_meet_report').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"}


            ]
        });
    }
    //---end table meet_report ---//

    function datamodal(data) {
        cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "sl_table_reportcount", [$(data).attr('id')], true, function (data) {
            $(".table_reportcount").html('');
            var dataSet = [];
            var a = 0;
            $.each(data, function (i, k) {

                a++;
                dataSet.push([a, data[i].pro_prefix + ' ' + data[i].pro_fname + ' ' + data[i].pro_lname], '');
            });
            $('#table_reportcount_show').html('<table class="table table-bordered table-striped table-hover table_reportcount dataTable " width="100%"></table>');
            $('.table_reportcount').DataTable({
                responsive: true,
                data: dataSet,
                columns: [
                    {title: "เลือก"},
                    {title: "ชื่อ-สกุล"},
                    {title: "ปีงบประมาณ"}
                ]
            });
        });
    }


    function table_reportcount(data) {
        $(".table_reportcount").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {

            a++;
            dataSet.push([a, data[i].pro_prefix + ' ' + data[i].pro_fname + ' ' + data[i].pro_lname], '');
        });
        $('#table_reportcount_show').html('<table class="table table-bordered table-striped table-hover table_reportcount dataTable " width="100%"></table>');
        $('.table_reportcount').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "เลือก"},
                {title: "ชื่อ-สกุล"},
                {title: "ปีงบประมาณ"}
            ]
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
            cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APPROV", ['1', $(id).attr('aor')], true, function () {
                swal({
                    title: "อนุมัติสำเร็จ",
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = '../../PS_mainpage/personnal/meeting_approv.php';
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

            cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APPROV", ['2', $(id).attr('aor2')], true, function () {

                show_tableApprov();
                swal({
                    title: "ยกเลิกสำเร็จ!!",
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = '../../PS_mainpage/personnal/meeting_approv.php';

            });
        });

    }
<!---อนุมัติ ผู้อำนวยการ-------->
    function approv_di(id) {

        swal({
            title: "คุณต้องการอนุมัติหรือไม่?",
            type: "info",
            showCancelButton: true,
            confirmButtonText: "ต้องการ",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {
            cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APPROV_DI", ['1', $(id).attr('aor3')], true, function () {
                swal({
                    title: "อนุมัติสำเร็จ",
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = '../../PS_mainpage/personnal/meeting_approv_Director.php';
            });
        });

    }
<!-------------------ไม่อนุมัติ ผู้อำนวยการ-------------->
    function Napprov_di(id) {
        swal({
            title: "คุณไม่ต้องการอนุมัติใช่ไหม",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "ใช่",
            cancelButtonText: "ยกเลิก",
            closeOnConfirm: false
        }, function () {

            cls.GetJSON("../../PS_processDB/personnal/meet_manage.php", "APPROV_DI", ['2', $(id).attr('aor4')], true, function () {

                show_tableApprov_di();
                swal({
                    title: "ยกเลิกสำเร็จ!!",
                    timer: 2000,
                    showConfirmButton: false
                });
                window.location.href = '../../PS_mainpage/personnal/meeting_approv_Director.php';

            });
        });

    }





    $(document).find("#pro_pdf").change(function () {
        var name_pdf = $('#pro_pdf').prop('files')[0];
        $('#name_pdf').html(name_pdf.name);
    });







</script>