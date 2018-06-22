<?php
	class _STRING
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
			if(self::IsString())
			    return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _Empty()
		{
			if(self::_Check() && self::_IsFull())
			    return '';
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
			if(self::$InputData == NULL || self::$InputData == '')
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
        public static function IsString()
        {
            if(is_string(self::$InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
    	public static function ToUpper()
    	{
        	if(self::_Check() && self::_IsFull())
            	return strtoupper(self::$InputData);
        	return NULL;
    	}
//------------------------------------------------------------------------------------------------------------------
    	public static function ToLower()
    	{
        	if(self::_Check() && self::_IsFull())
            	return strtolower(self::$InputData);
        	return NULL;
    	}    	
//------------------------------------------------------------------------------------------------------------------
        public static function CropLeft($Removable)
        {
            if(self::_Check())
                return ltrim(self::$InputData , $Removable);
            return NULL;
        }   	
//------------------------------------------------------------------------------------------------------------------
        public static function CropRight($Removable)
        {
            if(self::_Check())
                return rtrim(self::$InputData , $Removable);
            return NULL;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------