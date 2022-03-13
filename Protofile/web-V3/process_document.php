<?php
session_start();
// connect to the database
	$link = mysqli_connect("localhost", "admin", "123", "preregistration_db");
	mysqli_set_charset($link, "utf8");
/*************************************************************/	
	if($link) echo 'ok';
//uploaded the html document
	$ds          = DIRECTORY_SEPARATOR;
	$storeFolder = 'uploads';
	if (!empty($_FILES)) {
		$uploaded_document = basename($_FILES['file']["name"]);	
		$target_file = $storeFolder.$ds.$uploaded_document;
		$tmp_name = $_FILES['file']["tmp_name"];
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		if($FileType == "html" && $_FILES["file"]["size"] <= 5000000)	
			move_uploaded_file($tmp_name, $target_file);
	}
/*************************************************************/

//analyze the document and convert it to structure database
	$doc = new DOMDocument();
	$doc->loadHTMLFile($target_file);
	$xpath = new DOMXpath($doc);
	$elements = $xpath->query('//tr[@class="pass"]');
	$course = array(4);
	$index;
	$completed_course = trim('المادة منجزة');
	$registered_course= trim('المادة مسجلة');
	$studentId = substr($uploaded_document,0,-5);
	$_SESSION["SId"] =$studentId;
	if (!is_null($elements)) {
		foreach ($elements as $element) {
			$nodes = $element->childNodes;
			$index = 7;
			foreach ($nodes as $node)
				$course[$index--] = trim($node->nodeValue);
			$str = substr(trim($course[7]),0,23);
			if($completed_course==$str)
			{
				$grade = trim(substr(trim($course[7]),40,4));
				if(mysqli_query($link, "Insert into register values($studentId, $course[1], $course[5],'$grade')")== false);
					mysqli_query($link, "update register set grade='$grade' where studentId=$studentId and courseId=$course[1]");				
			}
			elseif($registered_course==$str)
			mysqli_query($link, "Insert into register values($studentId, $course[1], $course[5],NULL)");
		}
	}
/*************************************************************/
//close the database connection
	mysqli_close($link);
?>
