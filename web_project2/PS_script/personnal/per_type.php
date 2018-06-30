<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_type", "", true, table_type);
//        $(document).on("click", ".table_type tbody tr td:not(:last-child)", function () {
//            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
//            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_type", [clickedBtnID], true, function (data) {
//                $.each(data, function (i, k) {
//                    $("#type_nameE").val(data[i].type_name);
//                    $("#type_idE").val(data[i].type_id)
//                });
//                $("#editType").modal("show");
//            });
//        });
    });
    function show_type() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_type", "", true, table_type);
    }

    function table_type(data) {
        $(".table_type").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', '<center>' + data[i].type_code + '</center>', data[i].type_name, '<center><img class="btn-edit" id="' + data[i].type_id + '" data-toggle="modal" data-target="#editType" onclick="javascript: slEditType(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].type_id + '" onclick="javascript: delType(this)"/></center>']);
        });
        $('#table_type_show').html('<table class="table table-bordered table-striped table-hover table_type dataTable" width="100%"></table>');
        $('.table_type').DataTable({
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
                {title: "ประเภท"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
//                $(nRow).attr('id', $(nRow).find('img').attr('id'));
//                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addType(ATYPE) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ATYPE, [$('#type_code').val(), $('#type_name').val()], true, function (data) {
            show_type();
            swal("บันทึกสำเร็จ!", "ประเภทใหม่พร้อมใช้งาน", "success");
            $('#addType').modal('hide');
        });
    }
    function slEditType(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_type", [$(data).attr("id")], true, function (data) {
            $.each(data, function (i, k) {
                $("#type_codeE").val(data[i].type_code);
                $("#type_nameE").val(data[i].type_name);
                $("#type_idE").val(data[i].type_id)
            });
        });
    }
    function editType(ETYPE) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ETYPE, [$('#type_idE').val(), $('#type_codeE').val(), $('#type_nameE').val()], true, function (data) {
            show_type();
            swal("แก้ไขสำเร็จ!", "ประเภทของคุณ อัพเดทเเล้ว", "success");
            $('#editType').modal('hide');
        });
    }
    function delType(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DTYPE", [$(data).attr("id")], true, function (data) {
                show_type();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>