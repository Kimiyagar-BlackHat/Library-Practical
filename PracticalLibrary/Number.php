<?php
	class _NUMBER
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
			if(	$this->IsInteger() 	||
				$this->IsDouble() 	||
				$this->IsFloat() 	||
				$this->IsLong() 	||
				$this->IsNumeric()
			)
            return TRUE;
            return FALSE;
		}
//------------------------------------------------------------------------------------------------------------------
		public function _Empty()
		{
			if($this->_Check() && $this->_IsFull())
			    return NULL;
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
			if($this->InputData == NULL || $this->InputData == '')
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
        public function IsInteger()
        {
            if(is_integer($this->InputData) && is_int($this->InputData))
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------
        public function IsDouble()
        {
            if(is_double($this->InputData))
                return TRUE;
            return FALSE;
        }        
//------------------------------------------------------------------------------------------------------------------
        public function IsFloat()
        {
            if(is_float($this->InputData))
                return TRUE;
            return FALSE;
        }      
//------------------------------------------------------------------------------------------------------------------
        public function IsLong()
        {
            if(is_long($this->InputData))
                return TRUE;
            return FALSE;
        }
//------------------------------------------------------------------------------------------------------------------        
        public function IsNumeric()
        {
            if(is_numeric($this->InputData) && !is_nan($this->InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	    public function IsEven()
	    {
	        if($this->_Check() && $$this->InputData%2 == 0)
	            return TRUE;
			return FALSE;
	    }
//------------------------------------------------------------------------------------------------------------------
	    public function IsOdd()
	    {
	        if($this->_Check() && $$this->InputData%2 != 0)
	            return TRUE;
			return FALSE;
	    }     
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	}
//------------------------------------------------------------------------------------------------------------------