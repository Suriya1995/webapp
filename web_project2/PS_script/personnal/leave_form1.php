<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", 'sl_data_form', '', true, function (data) {
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
    });
</script> 