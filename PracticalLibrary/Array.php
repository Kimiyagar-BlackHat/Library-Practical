<?php
	class _ARRAY
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
			if($this->IsArray())							
				return TRUE;
			return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _Empty()
		{
			if($this->_Check() && $this->_IsFull())	
				return array();
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
			if(empty($this->InputData))									
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
        public function IsArray()
        {
            if(is_array($this->InputData))	
            	return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
        public function CountDimensions()
        {
            if(!$this->IsArray())
                return 0;
            $Count = 0;
            foreach ($this->InputData as $Key => $Value)
            {
                $this->__construct($Value);
                if ($this->IsArray())
                    $Count = max($Count , $this->CountDimensions());
            }
            return $Count+1;
        }
//------------------------------------------------------------------------------------------------------------------
        public function JsonDecode()
        {
            $Output = array();
            if($this->_IsFull())
                $Output = json_decode($this->InputData , TRUE);
            return $Output;
        }
//------------------------------------------------------------------------------------------------------------------
        public function JsonEncode()
        {
            $Output = array();
            if($this->_IsFull())
                $Output = json_encode($this->InputData , TRUE);
            return $Output;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------