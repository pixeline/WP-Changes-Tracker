<?php

/**
 * Simple class to properly output CSV data to clients. PHP 5 has a built
 * in method to do the same for writing to files (fputcsv()), but many times
 * going right to the client is beneficial.
 *
 * @author Jon Gales http://www.jongales.com/blog/2009/09/24/php-class-to-write-csv-files/
 */

class CSV_Writer {

    public $data = array();
    public $deliminator;

    /**
     * Loads data and optionally a deliminator. Data is assumed to be an array
     * of associative arrays.
     *
     * @param array $data
     * @param string $deliminator
     */
    function __construct($data, $deliminator = ",")
    {
        if (!is_array($data))
        {
            throw new Exception('CSV_Writer only accepts data as arrays');
        }

        $this->data = $data;
        $this->deliminator = $deliminator;
    }

    private function wrap_with_quotes($data)
    {
        $data = preg_replace('/"(.+)"/', '""$1""', $data);
        return sprintf('"%s"', $data);
    }

    /**
     * Echos the escaped CSV file with chosen delimeter
     *
     * @return void
     */
    public function output()
    {
        foreach ($this->data as $row)
        {
            $quoted_data = array_map(array('CSV_Writer', 'wrap_with_quotes'), $row);
            echo sprintf("%s\n", implode($this->deliminator, $quoted_data));
        }
    }

    /**
     * Sets proper Content-Type header and attachment for the CSV outpu
     *
     * @param string $name
     * @return void
     */
    public function headers($name)
    {
        header('Content-Type: application/csv');
        header("Content-disposition: attachment; filename={$name}.csv");
    }
}

?>