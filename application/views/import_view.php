 <?php
			
		
			
$sales=$_SESSION['name'];
require_once "..\classes\PHPExcel.php";

require "config.php";

//using file upload
if(empty($_FILES))
{
    echo"
    <form method='post' enctype='multipart/form-data' action='load.php'>
    <input type='file' name='excel' accept='.xls, .xlsx'>
    <br>
    <button type='submit'>Load</button>
    </form>";
}
else{
    //load excel file using PHPExcell
$excel=PHPExcel_IOFactory::load($_FILES['excel']['tmp_name']);
$excel->setActiveSheetIndex(0);
//determines which row the data series start
 $i=2;

//loop until the end of the series
while ($excel->getActiveSheet()->getCell('A'.$i)->getValue()!=""){
    //get  cells value
   // $Row_id=$excel->getActiveSheet()->getCell('A'.$i)->getValue();
//$order_id=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
   // $order_date=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
	//converting Excel date format to a formatted and readable
   // $order_date = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP((int)$order_date));
$name=$excel->getActiveSheet()->getCell('A'.$i)->getValue();
$surname=$excel->getActiveSheet()->getCell('B'.$i)->getValue();
$email=$excel->getActiveSheet()->getCell('C'.$i)->getValue();
$company=$excel->getActiveSheet()->getCell('E'.$i)->getValue();
$designation=$excel->getActiveSheet()->getCell('F'.$i)->getValue();
$phone=$excel->getActiveSheet()->getCell('D'.$i)->getValue();
$addr1=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
$city=$excel->getActiveSheet()->getCell('H'.$i)->getValue();
$province=$excel->getActiveSheet()->getCell('K'.$i)->getValue();
$zip=$excel->getActiveSheet()->getCell('I'.$i)->getValue();
$country=$excel->getActiveSheet()->getCell('K'.$i)->getValue();

    //$name=$excel->getActiveSheet()->getCell('G'.$i)->getValue();
$sql1= "select CustID from dbo.customer";
$stmt1 = sqlsrv_query( $conn, $sql1 );

	while( $row = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) ) 
		{
			$temp= explode("C",$row['CustID']);
			
		}
		$temp[1]+=1;
		$num = 123;
$str_length = 3;

// hardcoded left padding if number < $str_length
$custID= substr("0000{$temp[1]}", -$str_length);

// output: 0123
		
		//$custID="C".$temp[1];
		 $custID="C".$custID;
		 
$phone='0'.$phone;
$sql="INSERT INTO [dbo].[Customer]
           ([CustID]
           ,[Name]
           ,[Surname]
           ,[Email]
           ,[Phone]
           ,[Company]
           ,[Address]
           ,[City]
           ,[Zip_code]
           ,[Province]
           ,[Country]
           ,[Date_Added]
           ,[SalesID]
		   ,[Designation])
     VALUES
           ('$custID'
           ,'$name'
           ,'$surname'
           ,'$email'
		   ,'$phone'
           ,'$company'
           ,'$addr1'
           ,'$city'
           ,'$zip'
           ,'$province'
		   ,'$country'
		   ,GetDate()
		   ,'$sales'
		   ,'$designation')
	 ";
//$params = array();
////$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
//$stmt = sqlsrv_query( $conn, $sql , $params, $options );
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false ) {
if( ($errors = sqlsrv_errors() ) != null) {
 foreach( $errors as $error ) {
     echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
     echo "code: ".$error[ 'code']."<br />";
     echo "message: ".$error[ 'message']."<br />";
     echo $sql;
     die;
 }
}
}
$sql2= "select StatusID from dbo.status";
$stmt2 = sqlsrv_query( $conn, $sql2 );

	while( $row = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ) 
		{
			$temp= explode("ST",$row['StatusID']);
			
		}
	$num=	(int)$temp[1];
$num+=1;
		
$str_length = 3;

// hardcoded left padding if number < $str_length
$StatusID= substr("0000{$num}", -$str_length);

// output: 0123
		
		//$custID="C".$temp[1];
		  $StatusID="ST".$StatusID;
		 
$sql3="INSERT INTO [dbo].[Status]
           ([StatusID]
           ,[CustID]
           ,[Status_Name]
           ,[Status_Date])
     VALUES
           ('$StatusID'
           ,'$custID'
           ,'Not Attempted'
           ,getdate())";
		   $stmt3 = sqlsrv_query( $conn, $sql3 );
if( $stmt3 === false ) {
if( ($errors = sqlsrv_errors() ) != null) {
 foreach( $errors as $error ) {
     echo "SQLSTATE: ".$error[ 'SQLSTATE']."<br />";
     echo "code: ".$error[ 'code']."<br />";
     echo "message: ".$error[ 'message']."<br />";
     echo $sql;
     die;
 }
}
}

$i++;

}
echo $message= '<div class="alert alert-success">Upload Success</div>';

}

?>
<br>
	<form>

		<button formaction="Exportcust.php" class="btn btn-primary">Export Customers</button>
        </form>
        <br>
        <br>
        	<form>

		<button formaction="Exportleads.php" class="btn btn-primary">Export leads</button>
        </form>
        
        
	
	    
	<br><br>

  <a href="dashboard.php">Back</a>
</body>

    var dataTable = $('#example').DataTable({
        "sDom": "<'exportOptions text-right'B><'table-responsive't><'row'<p>>",
       	"scrollCollapse": true,
        "paging": true,
        // "bSort": true,
        "info": false,

        buttons: [ 
  
        	{
                extend:    'excelHtml5',
                text:      'Excel',
                className: 'btn btn-primary',
                title: 'Data export',
                // titleAttr: 'Export all rows to Excel file',
            },

            {
                extend:    'pdfHtml5',
                text:      'PDF',
                className: 'btn btn-primary',
                orientation: 'landscape',
                title: 'Data export',
                // titleAttr: 'Export all rows to PDF file',
                // pageSize: 'LEGAL'

            },

            {
                extend:    'copyHtml5',
                text:      'Copy Data',
                className: 'btn btn-primary',
                // titleAttr: 'Copy all rows to clipboard',
            },
		],

    });
	

</script>
  
</html>
<input type="hidden" id="sale" value="<?php echo $_SESSION['name']; ?>">






    <script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
	 var value = $("#sale").val();
  $.ajax({
   url:"fetch.php?field="+value,
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
$(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>






