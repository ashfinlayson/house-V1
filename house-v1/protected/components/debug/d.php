<?php

/**
 * Debug componenet
 */
class d
{
    /**
     * Define constructor so we can use d::d()
     */
    public function __construct()
    {
        
    }

    /**
     * Dump variable with syntax highlighting
     * @param mixed $var variable to display
     * @param string $varName optional variable name to tell dumps apart from each other
     */
    public static function d($var, $varName = '')
    {
        if (php_sapi_name() === 'cli') {
            
            $text = CVarDumper::dumpAsString($var);
            // strip out first and last ' (string delimiter)
            $text = trim($text,"'");
            if (!empty($varName)) {
                $text = $varName . ' ' . $text;
            }

            echo "$text\n";
            return;
        }

        if (!empty($varName)) {
            CVarDumper::dump($varName, 10, true);
        }

        CVarDumper::dump($var, 10, true);
        echo "<br />";
    }

}