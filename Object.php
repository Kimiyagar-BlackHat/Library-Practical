<?php
	class _OBJECT
	{
        public $InputData;
        public function __construct($Data)
        {
            $this->InputData = $Data;
            return $this->InputData;
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
			if($this->IsObject())
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
			if(empty((array)$this->InputData))
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
        public function IsObject()
        {
            if(is_object($this->InputData))
                return TRUE;
            return FALSE;
        }
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------
	}
//------------------------------------------------------------------------------------------------------------------