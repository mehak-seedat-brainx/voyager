<?php

// ----------------------------------------------------------------------------------------------------
// - Display Errors
// ----------------------------------------------------------------------------------------------------
ini_set('display_errors', 'On');
ini_set('html_errors', 0);

// ----------------------------------------------------------------------------------------------------
// - Error Reporting
// ----------------------------------------------------------------------------------------------------
error_reporting(-1);

include("database/dbClass.php");
$db= new DbManger;
$db->dbinit();
$data= $db->showProjects();



foreach ($data as $object)
{
	$proservices = $object["ProServices"];
	$proservicesarr = explode(" ", $proservices);
	foreach ($proservicesarr as $value) 
	{
		$value1=trim($value);

		if(strtolower($value1) == "ux/ui")
		{
			echo "ux"." ";
		}
		else
		{
			echo strtolower($value1)." ";
		} 
	}

}
echo "<br><br>";

foreach ($data as $object1)
{
	$proindustry = $object1["ProIndustry"];
	$proindustryarr = explode(",", $proindustry);
	foreach ($proindustryarr as $values) 
	{
		$value2=trim($values);

		if(strtolower($value2) == "auto & vehicles")
		{
			echo "vehicles"." ";
		}
		else if(strtolower($value2) == "news & magazine")
		{
			echo "news"." ";
		}
		else
		{
			echo strtolower($value2)." ";
		} 
	}

}
?>