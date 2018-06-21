<?php
    include_once 'Array.php';
    include_once 'File.php';
    include_once 'Number.php';
    include_once 'Object.php';
    include_once 'String.php';
	class CALLER
	{
        public static function CallerArray($Data)
        {
            return new _ARRAY($Data);
        }
        public static function CallerFile($Data)
        {
            return new _FILE($Data);
        }
        public static function CallerNumber($Data)
        {
            return new _NUMBER($Data);
        }
        public static function CallerObject($Data)
        {
            return new _OBJECT($Data);
        }
        public static function CallerString($Data)
        {
            return new _STRING($Data);
        }                                
    }