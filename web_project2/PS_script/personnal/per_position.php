<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_position", "", true, table_position);
//        $(document).on("click", ".table_position tbody tr td:not(:last-child)", function () {
//            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
//            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_Posi", [clickedBtnID], true, function (data) {
//                $.each(data, function (i, k) {
//                    $("#pos_codeE").val(data[i].pos_code);
//                    $("#pos_nameE").val(data[i].pos_name);
//                    $("#pos_idE").val(data[i].pos_id);
//                });
//                $("#editPosi").modal("show");
//            });
//        });
    });
    function show_position() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_position", "", true, table_position);
    }

    function table_position(data) {
        $(".table_position").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', '<center>' + data[i].pos_code + '</center>', data[i].pos_name, '<center><img class="btn-edit" id="' + data[i].pos_id + '" data-toggle="modal" data-target="#editPosi" onclick="javascript: slEditPosi(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].pos_id + '" onclick="javascript: delPosi(this)"/></center>']);
        });
        $('#table_position_show').html('<table class="table table-bordered table-striped table-hover table_position dataTable" width="100%"></table>');
        $('.table_position').DataTable({
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
                {title: "ตำแหน่ง"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
//                $(nRow).attr('id', $(nRow).find('img').attr('id'));
//                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addPosi(APOSI) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", APOSI, [$('#pos_code').val(), $('#pos_name').val()], true, function (data) {
            show_position();
            swal("บันทึกสำเร็จ!", "ตำแหน่งใหม่พร้อมใช้งาน", "success");
            $('#addPosi').modal('hide');
        });
    }
    function slEditPosi(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_Posi", [$(data).attr("id")], true, function (data) {
            $.each(data, function (i, k) {
                $("#pos_codeE").val(data[i].pos_code);
                $("#pos_nameE").val(data[i].pos_name);
                $("#pos_idE").val(data[i].pos_id);
            });
        });
    }
    function editPosi(EPOSI) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", EPOSI, [$('#pos_idE').val(), $('#pos_codeE').val(), $('#pos_nameE').val()], true, function (data) {
            show_position();
            swal("แก้ไขสำเร็จ!", "ตำแหน่งของคุณ อัพเดทเเล้ว", "success");
            $('#editPosi').modal('hide');
        });
    }
    function delPosi(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DPOSI", [$(data).attr("id")], true, function (data) {
                show_position();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>