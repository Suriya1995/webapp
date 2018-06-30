<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    $(function () {
        table_authority();
    });
    function show_setting() {
        cls.GetJSON("../../PS_processDB/personnal/per_manageSetting.php", "sl_table_setting", "", true, table_setting);
    }

    function table_authority(data) {
        $(".table_authority").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([a, data[i].marry_name, data[i].marry_status, '<img class="btn-delete" id="' + data[i].marry_id + '" onclick="javascript: delMarry(this)"/>']);
        });
        $('#table_authority_show').html('<table class="table table-bordered table-striped table-hover table_authority dataTable" width="100%"></table>');
        $('.table_authority').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ"},
                {title: "ชื่อสิทธิ์"},
                {title: "วุฒิการศึกษา"},
                {title: "วิชาเอก"},
                {title: "สถานศึกษา"},
                {title: "ประเทศ"},
                {title: "..."},
            ]
        });
    }
</script>