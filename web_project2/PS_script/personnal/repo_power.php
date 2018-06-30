<script type="text/javascript">
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var username = '<?= $_SESSION["username"]; ?>';
    var password = '<?= $_SESSION["password"]; ?>';
    $(function () {

    });
    function table_setting(data) {
        console.log(data);
        $(".table_setting").html('');
        var dataSet = [];
        var sex = '';
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            if (data[i].pro_sex == '1') {
                sex = 'ชาย';
            } else {
                sex = 'หญิง';
            }
            dataSet.push(['<center>' + a + '</center>', cardID(data[i].card_id), data[i].pro_prefix + data[i].pro_fname + ' ' + data[i].pro_lname, data[i].pos_name, data[i].class_name, data[i].type_name, sex]);
        });
        $('#table_setting_show').html('<table class="table table-bordered table-striped table-hover table_setting dataTable" width="100%"></table>');
        $('.table_setting').DataTable({
            dom: 'Bfrtip',
            responsive: true,
            buttons: [
                'copy', 'print'
            ],
            data: dataSet,
            columns: [
                {title: "ลำดับ", "width": "1%"},
                {title: "รหัสบัตรประชาชน"},
                {title: "ชื่อ-สกุล"},
                {title: "ตำแหน่ง"},
                {title: "กลุ่ม"},
                {title: "ประเภท"},
                {title: "เพศ"},
            ],
        });
    }

    $('.detail-power').click(function (data) {
        cls.GetJSON("../../PS_processDB/personnal/repo_powerDB.php", "sl_detail_power", [$(this).attr('id'), $(this).attr('value')], true, table_setting);
    });
    $('.detail-power-man').click(function (data) {
        cls.GetJSON("../../PS_processDB/personnal/repo_powerDB.php", "sl_detail_power_man", [$(this).attr('id')], true, table_setting);
    });
    $('.detail-power-feman').click(function (data) {
        cls.GetJSON("../../PS_processDB/personnal/repo_powerDB.php", "sl_detail_power_feman", [$(this).attr('id')], true, table_setting);
    });
    $('.detail-power-all').click(function (data) {
        cls.GetJSON("../../PS_processDB/personnal/repo_powerDB.php", "sl_detail_power_all", [$(this).attr('id')], true, table_setting);
    });
</script>