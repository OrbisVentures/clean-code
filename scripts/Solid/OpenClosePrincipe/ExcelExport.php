<?php
require_once "ExportInterface.php";

/**
 * ExcelExport Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class ExcelExport implements ExportInterface
{

    public function download($name, $role)
    {
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=userexcel.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        echo '<table border="1">';
        echo '<tr><th>Usuario</th><th>Rol</th></tr>';
        echo "<tr><td>".$name."</td><td>".$role."</td></tr>";
        echo '</table>';
    }
}