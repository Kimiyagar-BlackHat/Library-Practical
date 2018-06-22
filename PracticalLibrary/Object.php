<?php
	class _OBJECT
	{
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%        
        private static $InputData;
        private static $Instance;
//------------------------------------------------------------------------------------------------------------------    
        private function __construct($Data)
        {
            self::$InputData = $Data;
            return self::$InputData;
        }
//------------------------------------------------------------------------------------------------------------------            
        public static function _Set($Data)
        {
            if (is_null(self::$Instance))
                self::$Instance = new self($Data);
            return self::$Instance;
        }        
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		public static function _Get()
		{
		    if(self::_Check() && self::_IsSet())
		        return self::$InputData;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------		
		public static function _Check()
		{
			if(self::IsObject())
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _Empty()
		{
			if(self::_Check() && self::_IsFull())
			    return NULL;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------		
		public static function _IsSet()
		{
			if(isset(self::$InputData) && self::_IsFull())
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _IsEmpty()
		{
			if(empty((array)self::$InputData))
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _IsFull()
		{
			if(!self::_IsEmpty())
			    return TRUE;
            return FALSE;
		}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public static function IsObject()
        {
            if(is_object(self::$InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------