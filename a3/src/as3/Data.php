<?php
namespace as3;

class Data
{   
       
  /**
   * Private data members to support database testing
   */
  
   private $_data_1 = array(
			"one" => 1,
			"two" => 2,
			"three" =>3,
   );

    private $_data_2 = array(
			"one" => "This is string one",
			"two" => "This is string two",
			"three" => "This is string three",
   );

   private $_main_array = array(
				"array_one" => array(),
   );


   /**
    * Method to return data array 1
    */
    public function getData_1()
    {
	return $this->_data_1;
    } 

   /**
    * Method to return data array 2
    */
    public function getData_2()
    {
	return $this->_data_2;
    } 

   /**
    * Update data in array 1
    */
    public function updateArray_1($index, $newValue)
    {
		if (array_key_exists($index, $this->_data_1))
		{
			$this->_data_1[$index] = $newValue;
		} // need to hande errors and missing keys with
	  	 // some message or logic here
    }
    
   /**
    * Delete data in array 1
    */
    public function deleteItemArray_1($index)
    {
		if (array_key_exists($index, $this->_data_1))
		{
			unset($this->_data_1[$index]);
		} // need to hande errors and missing keys 
	  	 // some message or logic here
    }
    
    /**
    * Insert data in array 1
    */
    public function insertItemArray_1($index, $value)
    {
    	// if the key does not exist.. 
		if (!array_key_exists($index, $this->_data_1))
		{
			$this->_data_1[$index] = $value;
		} // need to hande errors and missing keys 
	  	 // some message or logic here
    }
 
}


