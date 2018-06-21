<?php
	include_once 'PracticalLibrary/Practical.php';
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	$InputArray = array();
//------------------------------------------------------------------------------------------------------------------	
	$InputFile = 'FilePath';
//------------------------------------------------------------------------------------------------------------------
	$InputNumber = 1;
//------------------------------------------------------------------------------------------------------------------
	include_once 'PracticalLibrary/Caller.php';
	$InputObject = new CALLER;
//------------------------------------------------------------------------------------------------------------------
	$InputString = 'Hello World';
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
	_Array($InputArray)->_Get();
	_Array($InputArray)->_IsSet();
	_Array($InputArray)->_IsEmpty();
	_Array($InputArray)->_Check();
	_Array($InputArray)->_Empty();
	_Array($InputArray)->_IsFull();
	_Array($InputArray)->CountDimensions();
	_Array($InputArray)->InputData;
	_Array($InputArray)->IsArray();
	// And other functions
//------------------------------------------------------------------------------------------------------------------
	_File($InputFile)->_Get();
	_File($InputFile)->_IsSet();
	_File($InputFile)->_IsEmpty();
	_File($InputFile)->_Check();
	_File($InputFile)->_Empty();
	_File($InputFile)->_IsFull();
	_File($InputFile)->InputData;
	// And other functions
//------------------------------------------------------------------------------------------------------------------
	_Number($InputNumber)->_Get();
	_Number($InputNumber)->_IsSet();
	_Number($InputNumber)->_IsEmpty();
	_Number($InputNumber)->_Check();
	_Number($InputNumber)->_Empty();
	_Number($InputNumber)->_IsFull();
	_Number($InputNumber)->InputData;
	// And other functions 
//------------------------------------------------------------------------------------------------------------------
	_Object($InputObject)->_Get();
	_Object($InputObject)->_IsSet();
	_Object($InputObject)->_IsEmpty();
	_Object($InputObject)->_Check();
	_Object($InputObject)->_Empty();
	_Object($InputObject)->_IsFull();
	_Object($InputObject)->InputData;
	// And other functions 
//------------------------------------------------------------------------------------------------------------------
	_String($InputString)->_Get();
	_String($InputString)->_IsSet();
	_String($InputString)->_IsEmpty();
	_String($InputString)->_Check();
	_String($InputString)->_Empty();
	_String($InputString)->_IsFull();
	_String($InputString)->InputData;
	// And other functions 
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%