<?php
$currencyTo = $_GET['currencyTo'];
$currencyFrom = $_GET['currencyFrom'];
$amount = $_GET['amount'];

$filename = "http://www.google.com/finance/converter?a=$amount&from=$currencyFrom&to=$currencyTo";

$elementId = "currency_converter_result";
@$doc = new DOMDocument();
@$doc->loadHTMLFile($filename);
$rawNumber = @$doc->getElementsByTagName("span")->item(0)->nodeValue;

// Format the number
$outputNumber = number_format($rawNumber, 2, '.', '');
echo $outputNumber;

?>

