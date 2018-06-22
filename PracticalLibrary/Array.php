<?php
	class _ARRAY
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
			if(self::IsArray())							
				return TRUE;
			return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _Empty()
		{
			if(self::_Check() && self::_IsFull())	
				return array();
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
			if(empty(self::$InputData))									
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
        public static function IsArray()
        {
            if(is_array(self::$InputData))	
            	return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public static function CountDimensions()
        {
            if(!self::IsArray())
                return 0;
            $Count = 0;
            foreach (self::$InputData as $Key => $Value)
            {
                new self($Value);
                if (self::IsArray())
                    $Count = max($Count , self::CountDimensions());
            }
            return $Count+1;
        }
//------------------------------------------------------------------------------------------------------------------
        public static function JsonDecode()
        {
            $Output = array();
            if(self::_IsFull())
                $Output = json_decode(self::$InputData , TRUE);
            return $Output;
        }
//------------------------------------------------------------------------------------------------------------------
        public static function JsonEncode()
        {
            $Output = array();
            if(self::_IsFull())
                $Output = json_encode(self::$InputData , TRUE);
            return $Output;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------