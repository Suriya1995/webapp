<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_level", "", true, table_level);
//        $(document).on("click", ".table_level tbody tr td:not(:last-child)", function () {
//            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
//            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_Level", [clickedBtnID], true, function (data) {
//                $.each(data, function (i, k) {
//                    $("#lv_nameE").val(data[i].lv_name);
//                    $("#lv_idE").val(data[i].lv_id)
//                });
//                $("#editLevel").modal("show");
//            });
//        });
    });
    function show_level() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_level", "", true, table_level);
    }

    function table_level(data) {
        $(".table_level").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', '<center>' + data[i].lv_code + '</center>', data[i].lv_name, '<center><img class="btn-edit" id="' + data[i].lv_id + '" data-toggle="modal" data-target="#editLevel" onclick="javascript: slEditLevel(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].lv_id + '" onclick="javascript: delLv(this)"/></center>']);
        });
        $('#table_level_show').html('<table class="table table-bordered table-striped table-hover table_level dataTable" width="100%"></table>');
        $('.table_level').DataTable({
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
                {title: "รหัส"},
                {title: "ระดับ"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
//                $(nRow).attr('id', $(nRow).find('img').attr('id'));
//                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addLevel(ALV) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ALV, [$('#lv_code').val(), $('#lv_name').val()], true, function (data) {
            show_level();
            swal("บันทึกสำเร็จ!", "ระดับใหม่พร้อมใช้งาน", "success");
            $('#addLevel').modal('hide');
        });
    }
    function slEditLevel(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_Level", [$(data).attr("id")], true, function (data) {
            $.each(data, function (i, k) {
                $("#lv_codeE").val(data[i].lv_code);
                $("#lv_nameE").val(data[i].lv_name);
                $("#lv_idE").val(data[i].lv_id)
            });
        });
    }
    function editLevel(ELV) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ELV, [$('#lv_idE').val(), $('#lv_codeE').val(), $('#lv_nameE').val()], true, function (data) {
            show_level();
            swal("แก้ไขสำเร็จ!", "ระดับของคุณ อัพเดทเเล้ว", "success");
            $('#editLevel').modal('hide');
        });
    }
    function delLv(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DLV", [$(data).attr("id")], true, function (data) {
                show_level();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>