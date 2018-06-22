<?php
	class _FILE
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
			if(	self::IsDir() 			||
				self::IsExecutable() 	||
				self::IsLink() 		    ||
				self::IsFile() 		    ||
				self::IsReadable() 	    ||
				self::IsWritable() 	    ||
				self::IsUploadedFile()
            )
            return TRUE;
			return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public static function _Empty()
		{
			if(self::_Check() && self::_IsFull())
            {
            	$Write = self::WriteFile('w' , '');
            	if($Write)
                    return TRUE;
            	else
                    return FALSE;
            }
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
			clearstatcache();
			if(!filesize(self::$InputData))								
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
		public static function IsDir()
        {
            if(is_dir(self::$InputData)) 									
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public static function IsExecutable()
        {
            if(is_executable(self::$InputData)) 							
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsLink()
        {
            if(is_link(self::$InputData)) 									
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsFile()
        {
            if(is_file(self::$InputData)) 									
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsReadable()
        {
            if(is_readable(self::$InputData)) 								
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsWritable()
        {
            if(is_writable(self::$InputData)) 								
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public static function IsUploadedFile()
        {
            if(is_uploaded_file(self::$InputData))							
                return TRUE;
			return FALSE;
        }        
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public static function WriteFile($Method , $String)
        {
            global $Write , $Close;
        	$Open = self::OpenFile($Method);
        	if($Open)
			{
				$Write = fwrite($Open , $String);
				$Close = self::CloseFile();
				return TRUE;
			}
			return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public static function OpenFile($Method)
        {
        	if(self::IsWritable() && self::IsReadable())
        	{
        		return fopen(self::$InputData, $Method);
        	}
        	return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
       	public static function CloseFile()
       	{
       		return fclose(self::$InputData);
       	}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------