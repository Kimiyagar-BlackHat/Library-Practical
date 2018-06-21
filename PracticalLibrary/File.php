<?php
	class _FILE
	{
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%        
        public $InputData;
        private static $Instance;
//------------------------------------------------------------------------------------------------------------------    
        private function __construct($Data)
        {
            $this->InputData = $Data;
            return $this->InputData;
        }
//------------------------------------------------------------------------------------------------------------------            
        public static function _Set($Data)
        {
            if (is_null(self::$Instance))
                self::$Instance = new self($Data);
            return self::$Instance;
        }        
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		public function _Get()
		{
		    if($this->_Check() && $this->_IsSet())	
                return $this->InputData;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _Check()
		{
			if(	$this->IsDir() 			||
				$this->IsExecutable() 	||
				$this->IsLink() 		||
				$this->IsFile() 		||
				$this->IsReadable() 	||
				$this->IsWritable() 	||
				$this->IsUploadedFile()
            )
            return TRUE;
			return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _Empty()
		{
			if($this->_Check() && $this->_IsFull())
            {
            	$Write = $this->WriteFile('w' , '');
            	if($Write)
                    return TRUE;
            	else
                    return FALSE;
            }
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------		
		public function _IsSet()
		{
			if(isset($this->InputData) && $this->_IsFull())
                return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _IsEmpty()
		{
			clearstatcache();
			if(!filesize($this->InputData))								
                return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _IsFull()
		{
			if(!$this->_IsEmpty())							
                return TRUE;
            return FALSE;
		}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
		public function IsDir()
        {
            if(is_dir($this->InputData)) 									
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public function IsExecutable()
        {
            if(is_executable($this->InputData)) 							
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsLink()
        {
            if(is_link($this->InputData)) 									
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsFile()
        {
            if(is_file($this->InputData)) 									
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsReadable()
        {
            if(is_readable($this->InputData)) 								
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsWritable()
        {
            if(is_writable($this->InputData)) 								
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsUploadedFile()
        {
            if(is_uploaded_file($this->InputData))							
                return TRUE;
			return FALSE;
        }        
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public function WriteFile($Method , $String)
        {
            global $Write , $Close;
        	$Open = $this->OpenFile($Method);
        	if($Open)
			{
				$Write = fwrite($Open , $String);
				$Close = self::CloseFile();
				return TRUE;
			}
			return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public function OpenFile($Method)
        {
        	if($this->IsWritable() && $this->IsReadable())
        	{
        		return fopen($this->InputData, $Method);
        	}
        	return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
       	public function CloseFile()
       	{
       		return fclose($this->InputData);
       	}
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------