
<script>
    $(function () {


          
        cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "getYear", '', true, function (data) {

            var array = [];
            var array2 = [];
            $.each(data, function (i) {
                if (data[i].year != '543') {
                    array.push({label: data[i].year, value: data[i].num});
                    array2.push({x: data[i].year, y: data[i].num});
                }
            });
            getMorris('donut', 'donut_chart', array, array2);
            getMorris('bar', 'bar_chart', array, array2);


        });
        $('#datein').select2();
        $('#dateout').select2();

    });
    //function graph//
    function getMorris(type, element, data, data2) {
      var count = 0;
      var max  = 0;
      var min = 0;
      for(var i =0; i < data2.length; i++){
        count += parseInt(data2[i].y);
      }

        max = parseInt(data2[0].x) -543;
        min = parseInt(data2[data2.length -1].x) -543;
        cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "getYbetween", [min, max], true, table_chart_show);
  // end function graph//

  $('#count').html(count);
        if (type === 'bar') {
            Morris.Bar({
                element: element,
                data: data2,
                xkey: 'x',
                ykeys: ['y'],
                labels: ['จำนวนคน'],
                barColors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(0, 150, 136)'],
            });
        } else if (type === 'donut') {
            Morris.Donut({
                element: element,
                data: data,
                colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)'],
                formatter: function (y) {
                    return y + 'คน'
                }
            });
        }
    }
    //option1
    function secdatein() {
        var e = document.getElementById("datein");
        var secdatein = e.options[e.selectedIndex].value;
        secdatein = secdatein - 543;

              cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "get_data_year_table", [secdatein], true, function (data2) {

                table_chart_show(data2);


            });

        if (($('#dateout').val() != '' ) && ($('#datein').val() != '' ))  {
            var max = '';
            var min = '';
            var secdateout = $('#dateout').val() - 543;
            if (secdateout > secdatein) {
                max = secdateout;
                min = secdatein;
            } else {
                max = secdatein;
                min = secdateout;
            }
            cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "get_year_between", [max, min], true, function (data) {

                var array = [];
                var array2 = [];
                $.each(data, function (i) {
                    if (data[i].year != '543') {
                        array.push({label: data[i].year, value: data[i].num});
                        array2.push({x: data[i].year, y: data[i].num});
                    }
                });
                $('#donut_chart').html('');
                $('#bar_chart').html('');
                getMorris('donut', 'donut_chart', array, array2);
                getMorris('bar', 'bar_chart', array, array2);

            });
        } else {
            var func = '';
            if($('#datein').val() != ''){
                secdatein = secdatein;
                func = "get_year";
            }else if($('#dateout').val() != ''){
                secdatein = $('#dateout').val() -543;
                func = "get_year";
            }else{
                secdateout = '';
                func = "getYear";
            }
            cls.GetJSON("../../PS_processDB/personnal/sup_db.php", func, [secdatein], true, function (data) {

                var array = [];
                var array2 = [];
                $.each(data, function (i) {
                    if (data[i].year != '543') {
                        array.push({label: data[i].year, value: data[i].num});
                        array2.push({x: data[i].year, y: data[i].num});
                    }
                });
                $('#donut_chart').html('');
                $('#bar_chart').html('');
                getMorris('donut', 'donut_chart', array, array2);
                getMorris('bar', 'bar_chart', array, array2);
            });
        }
    }
    //option end //

//option dateuot //
    function secdateout() {
        var e = document.getElementById("dateout");
        var secdateout = e.options[e.selectedIndex].value;
        secdateout = secdateout - 543;

             cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "get_data_year_table", [secdateout], true, function (data2) {

            table_chart_show(data2);

            });

        if (($('#datein').val() != '') && ($('#dateout').val() != '' ))  {
            var max = '';
            var min = '';
            var secdatein = $('#datein').val() - 543;


            if (secdateout > secdatein) {
                max = secdateout;
                min = secdatein;
            } else {
                max = secdatein;
                min = secdateout;
            }
            cls.GetJSON("../../PS_processDB/personnal/sup_db.php", "get_year_between", [max, min], true, function (data) {


                var array = [];
                var array2 = [];
                $.each(data, function (i) {
                    if (data[i].year != '543') {
                        array.push({label: data[i].year, value: data[i].num});
                        array2.push({x: data[i].year, y: data[i].num});
                    }
                });
                $('#donut_chart').html('');
                $('#bar_chart').html('');
                getMorris('donut', 'donut_chart', array, array2);
                getMorris('bar', 'bar_chart', array, array2);



            });
        } else {
            var func = '';
            if($('#dateout').val() != ''){
                secdateout = secdateout;
                func = "get_year";
            }else if($('#datein').val() != ''){
                secdateout = $('#datein').val() -543;
                func = "get_year";
            }else{
                secdateout = '';
                func = "getYear";
            }
            cls.GetJSON("../../PS_processDB/personnal/sup_db.php", func, [secdateout], true, function (data) {
                var array = [];
                var array2 = [];
                $.each(data, function (i) {
                    if (data[i].year != '543') {
                        array.push({label: data[i].year, value: data[i].num});
                        array2.push({x: data[i].year, y: data[i].num});
                    }
                });
                $('#donut_chart').html('');
                $('#bar_chart').html('');
                getMorris('donut', 'donut_chart', array, array2);
                getMorris('bar', 'bar_chart', array, array2);
            });
        }


    }
    // end option dateuot //

  //ตาราง chart //

    function table_chart_show(data) {
        $(".table_chart_show").html('');
        var dataSet = [];
        var a = 0;
        $.each(data, function (i, k) {
            a++;
            dataSet.push(['<center>' + a + '</center>', data[i].card_id, data[i].pro_prefix +'  '+ data[i].pro_fname +' '+ data[i].pro_lname , data[i].pos_name , data[i].class_name , DateThai(data[i].pro_dateOut) ,]);
        });
        $('#table_chart').html('<table class="table table-bordered table-striped table-hover table_chart_show dataTable" width="100%"></table>');
        $('.table_chart_show').DataTable({
            responsive: true,
            data: dataSet,
            columns: [
                {title: "ลำดับ", width: "1%"},
                {title: "เลขบัตรประชาชน", width: "10%"},
                {title: "ชื่อ-สกุล", width: "21%"},
                {title: "ตำแหน่ง", width: "10%"},
                {title: "กลุ่มงาน", width: "13%"},
                {title: "วันเกษียณอายุ", width: "15%"},


            ]
        });


    }


</script>
