<?php
    $ID = $_POST["ID"];
    $password = $_POST["password"];

	if ( !( $database = mysql_connect( "localhost", "se", "se" ) ) )
    die( "Could not connect to database </body></html>" );
    if ( !mysql_select_db( "se", $database ) )
    die( "Could not open products database </body></html>" );

	$sql="SELECT `Password` FROM `accountdata` WHERE `Account`='".$ID."'";	
	$result=mysql_query($sql);	
	$row_result=mysql_fetch_assoc($result);
	if(isset($ID))
{
    //將讀取出來的資料取出欄位名稱為username的資料，並且存在$admin
    $admin=$row_result["Password"];
    if($password==$admin)
    {
        echo "welcome ~";
    }
	else
		echo "LogIn fail!";
}
    mysql_close( $database );
?>