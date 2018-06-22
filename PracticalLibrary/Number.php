<?php
	class _NUMBER
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
			if(	self::IsInteger() 	||
				self::IsDouble() 	||
				self::IsFloat() 	||
				self::IsLong()  	||
				self::IsNumeric()
			)
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
        public static function IsInteger()
        {
            if(is_integer(self::$InputData) && is_int(self::$InputData))
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public static function IsDouble()
        {
            if(is_double(self::$InputData))
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsFloat()
        {
            if(is_float(self::$InputData))
                return TRUE;
            return FALSE;
        }      
//------------------------------------------------------------------------------------------------------------------
        public static function IsLong()
        {
            if(is_long(self::$InputData))
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------        
        public static function IsNumeric()
        {
            if(is_numeric(self::$InputData) && !is_nan(self::$InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	    public static function IsEven()
	    {
	        if(self::_Check() && self::$InputData%2 == 0)
	            return TRUE;
			return FALSE;
	    }
//------------------------------------------------------------------------------------------------------------------
	    public static function IsOdd()
	    {
	        if(self::_Check() && self::$InputData%2 != 0)
	            return TRUE;
			return FALSE;
	    }     
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------