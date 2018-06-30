<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_lvboss", "", true, table_lvboss);
//        $(document).on("click", ".table_lvboss tbody tr td:not(:last-child)", function () {
//            var clickedBtnID = $(this).parent().attr('id'); // or var clickedBtnID = this.id
//            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_lvboss", [clickedBtnID], true, function (data) {
//                $.each(data, function (i, k) {
//                    $("#lvb_nameE").val(data[i].lvb_name);
//                    $("#lvb_idE").val(data[i].lvb_id)
//                });
//                $("#editLVB").modal("show");
//            });
//        });
    });
    function show_levelBoss() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_table_lvboss", "", true, table_lvboss);
    }

    function table_lvboss(data) {
        $(".table_lvboss").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', '<center>' + data[i].lvb_code + '</center>', data[i].lvb_name, '<center><img class="btn-edit" id="' + data[i].lvb_id + '" data-toggle="modal" data-target="#editLVB" onclick="javascript: slEditLVB(this)"/>' + ' ' + '<img class="btn-delete" id="' + data[i].lvb_id + '" onclick="javascript: delLVB(this)"/></center>']);
        });
        $('#table_lvboss_show').html('<table class="table table-bordered table-striped table-hover table_lvboss dataTable" width="100%"></table>');
        $('.table_lvboss').DataTable({
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
                {title: "ตำแหน่งบริหาร"},
                {title: "..."},
            ],
            "fnRowCallback": function (nRow) {
//                console.log($(nRow).find('img').attr('id'));
//                $(nRow).attr('id', $(nRow).find('img').attr('id'));
//                $(nRow).css('cursor', 'pointer');
            }
        });
    }
    function addLVB(ALVB) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ALVB, [$('#lvb_code').val(), $('#lvb_name').val()], true, function (data) {
            show_levelBoss();
            swal("บันทึกสำเร็จ!", "ตำแหน่งใหม่พร้อมใช้งาน", "success");
            $('#addLVB').modal('hide');
        });
    }
    function slEditLVB(data) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "sl_dataEdit_lvboss", [$(data).attr("id")], true, function (data) {
            $.each(data, function (i, k) {
                $("#lvb_codeE").val(data[i].lvb_code);
                $("#lvb_nameE").val(data[i].lvb_name);
                $("#lvb_idE").val(data[i].lvb_id)
            });
        });
    }
    function editLVB(ELVB) {
        cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", ELVB, [$('#lvb_idE').val(), $('#lvb_codeE').val(), $('#lvb_nameE').val()], true, function (data) {
            show_levelBoss();
            swal("แก้ไขสำเร็จ!", "ตำแหน่งของคุณ อัพเดทเเล้ว", "success");
            $('#editLVB').modal('hide');
        });
    }
    function delLVB(data) {
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
            cls.GetJSON("../../PS_processDB/personnal/per_manageBasic.php", "DLVB", [$(data).attr("id")], true, function (data) {
                show_levelBoss();
                swal("ลบสำเร็จ!", "ข้อมูลของคุณถูกลบเรียบร้อยเเล้ว", "success");
            });
        });
    }
</script>