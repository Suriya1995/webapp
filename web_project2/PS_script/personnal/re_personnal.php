<script>

 $(function () {

     cls.GetJSON("../../PS_processDB/personnal/re_personnal.php", "table_report_personnal", '', true, function (data2) {
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
            dataSet.push(['<a data-toggle="modal" data-target="#modal_report_per " id = "' + data[i].class_id + '"onclick="javascript: datamodal(this)">' + data[i].class_name + '</a>']);
            
        });
        
        $('#table_report_per').html('<table class="table table-bordered table-striped table-hover table_show dataTable" width="100%"></table>');
        $('.table_show').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "บุคลากร", width: "10%"},
               
            ]
        });
    }

        //modal in table 
    function datamodal(data) {
      
            cls.GetJSON("../../PS_processDB/personnal/re_personnal.php", "modal_table_report_personnal", [$(data).attr('id')], true, function (data) {
              
                    $(".table_inmodal_report_per").html('');
                    var dataSet = [];
                    var a = 0;
                    $.each(data, function (i, k) {
                        a++;
                        dataSet.push([a, data[i].pro_prefix + ' ' + data[i].pro_fname + ' ' + data[i].pro_lname ,data[i].type_name,data[i].pos_name ,data[i].lv_name, data[i].tel ,data[i].email]) ;
                    });
                    $('#table_inmodal_report_per').html('<table class="table table-bordered table-striped table-hover table_inmodal_report_per dataTable " width="100%"></table>');
                    $('.table_inmodal_report_per').DataTable({
                        responsive: true,
                        data: dataSet,
                        columns: [
                            {title: "ลำดับ"},
                            {title: "ชื่อ-สกุล"},
                            {title: "ประเภท"},
                            {title: "ตำแหน่ง"},
                            {title: "ระดับ"},
                            {title: "เบอรโทร"},
                            {title: "อิเมล์"},
                        ]
                    });
                });
    }

    


    

 

    </script>