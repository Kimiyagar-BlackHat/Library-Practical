<?php
    include_once 'Caller.php';
	function _Array($Data)
	{
		return CALLER::CallerArray($Data);
	}
	function _File($Data)
	{
		return CALLER::CallerFile($Data);
	}
	function _String($Data)
	{
		return CALLER::CallerString($Data);
	}
	function _Number($Data)
	{
		return CALLER::CallerNumber($Data);
	}
	function _Object($Data)
	{
		return CALLER::CallerObject($Data);
	}