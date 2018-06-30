<script>

 $(function () {

     cls.GetJSON("../../PS_processDB/personnal/re_position.php", "table_report_position", '', true, function (data2) {
                    table_show(data2);
                    //get function from table table_show and setparameter name (data2)
            });

 });


function table_show(data) {
       
       
        $(".table_show").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push([data[i].pos_name,]);
        });
        $('#table_report_pos').html('<table class="table table-bordered table-striped table-hover table_show dataTable" width="100%"></table>');
        $('.table_show').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "สายงาน", width: "10%"},
             
               
            ]
        });
    }
    </script>