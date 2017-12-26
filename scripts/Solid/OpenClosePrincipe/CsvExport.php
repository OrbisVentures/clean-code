<?php
require_once "ExportInterface.php";

/**
 * ExcelExport Class
 *
 * @author Jose Guillermo <jguillermo@outlook.com>
 * @copyright (c) 2017, Orbis
 */
class CsvExport implements ExportInterface
{

    public function download($name, $role)
    {
        $data = [
            ['Usuario', 'Rol'],
            [$name, $role],
        ];
        echo $this->array2csv($data);
    }

    private function array2csv(array &$array)
    {
        if (count($array) == 0) {
            return null;
        }
        ob_start();
        $df = fopen("php://output", 'w');
        fputcsv($df, array_keys(reset($array)));
        foreach ($array as $row) {
            fputcsv($df, $row);
        }
        fclose($df);
        return ob_get_clean();
    }
}