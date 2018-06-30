<?

include('Excel/reader.php');
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('tis620');
$data->read('xls/test.xls');


$arr = array();
$s = 0;

			
mysql_connect("localhost","root","1234");
mysql_select_db("db_test");
	for ($x = 2; $x <= count($data->sheets[$s]["cells"]);$x++) {
		
		for($i=1;$i<=7;$i++){
			$arr[$i] =  $data->sheets[$s]["cells"][$x][$i];
		}
		$sql = "INSERT INTO tbl_excel VALUE('%s','%s','%s','%s','%s','%s','%s');";
		$v = vsprintf($sql,$arr);
		echo $v;
		echo  '<br/>';
		mysql_query($v);

	}
mysql_close();

?>
