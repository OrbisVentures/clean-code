<?php

require_once "BadExport.php";
require_once "User.php";
require_once "Export.php";
require_once "ExcelExport.php";
require_once "CsvExport.php";
$user = new User();

/**
 * asi esta mal programado
 */
$badExport = new BadExport();
$badExport->export($user);

/**
 * esta es la forma correcta de programar
 */

$excelInteface = new ExcelExport();
$csvInterface = new CsvExport();

$export1 = new Export($excelInteface);
$export1->exportUser($user);

$export2 = new Export($csvInterface);
$export2->exportUser($user);
