<?php

include('connection.php');

if(isset($_POST["Import"])){
		$con = getdb();

		echo $filename=$_FILES["file"]["tmp_name"];
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {

	           $sql = "INSERT into subject ('emp_id','firstname','lastname','email','reg_date') 
	            	values('$getData[0]','$getData[1]','$getData[2]','$getData[3]','$getData[4]')";
				var_dump($sql);
					exit();
	         //we are using mysql_query function. it returns a resource on true else False on error
	           $result = $con->query($sql);
				if(!$result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";		
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";	
			
		 }
	}	 
?>		 
