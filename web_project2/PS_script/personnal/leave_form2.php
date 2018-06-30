<script>
    var cls = new Call_Service();
    var card_id = '<?= $_SESSION["card_id"]; ?>';
    var name = '<?= $_SESSION["name"]; ?>';
    $(function () {
        cls.GetJSON("../../PS_processDB/personnal/lea_relax.php", 'sl_data_form2', '', true, function (data) {
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

    });

</script> 