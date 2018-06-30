<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_inside", "", true, table_inside);
//        $(document).on("click", ".table_inside tbody tr td:not(:last-child)", function () {
//            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
////                $('#addBnOut').parent().find('#off_number').addClass('off_number');
//            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_BnIn", [clickedBtnID], true, function (data) {
//                $.each(data, function (i, k) {
//                    $("#class_codeE").val(data[i].class_code);
//                    $("#class_nameE").val(data[i].class_name);
//                    $("#class_idE").val(data[i].class_id);
//                });
//                $("#editBnIn").modal("show");
//            });
//        });
    });
    function show_inside() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_inside", "", true, table_inside);
    }

    function table_inside(data) {
        $(".table_inside").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', '<center>' + data[i].class_code + '</center>', data[i].class_name, '<center><img class="btn-edit" id="' + data[i].class_id + '" data-toggle="modal" data-target="#editBnIn" onclick="javascript: slEditBnIn(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].class_id + '" onclick="javascript: delBnIn(this)"/></center>']);
        });
        $('#table_inside_show').html('<table class="table table-bordered table-striped table-hover table_inside dataTable" width="100%"></table>');
        $('.table_inside').DataTable({
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
                {title: "กลุ่มงาน"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
//                $(nRow).attr('id', $(nRow).find('img').attr('id'));
//                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addBnIn(ADDBNIN) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ADDBNIN, [$('#class_code').val(), $('#class_name').val()], true, function (data) {
            show_inside();
            swal("บันทึกสำเร็จ!", "ตำแหน่งใหม่พร้อมใช้งาน", "success");
            $('#addBnIn').modal('hide');
        });
    }
    function slEditBnIn(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_BnIn", [$(data).attr("id")], true, function (data) {
            $.each(data, function (i, k) {
                $("#class_codeE").val(data[i].class_code);
                $("#class_nameE").val(data[i].class_name);
                $("#class_idE").val(data[i].class_id);
            });
        });
    }
    function editBnIn(EBNIN) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", EBNIN, [$('#class_idE').val(), $('#class_codeE').val(), $('#class_nameE').val()], true, function (data) {
            show_inside();
            swal("แก้ไขสำเร็จ!", "ตำแหน่งของคุณ อัพเดทเเล้ว", "success");
            $('#editBnIn').modal('hide');
        });
    }
    function delBnIn(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DELBNIN", [$(data).attr("id")], true, function (data) {
                show_inside();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>