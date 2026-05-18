<?php


require_once "Spyc.php";
require_once "class.error.php";

class YamlDataParser {
    static function load($file) {
        if (!file_exists($file)) {
            raise_error("$file: File does not exist", 'YamlParserError');
            return false;
        }
        return Spyc::YAMLLoad($file);
    }
}

class YamlParserError extends BaseError {
    static $title = 'Error parsing YAML document';
}
?>
