<?php
namespace as3;

   /**
	* @file 
	* TestDao is used to test the abstract class Dao 
	*/
	
class TestDao extends Dao
{
  /**
   * Constructor function
   * Create an object with a know value
   *
   * @access public
   * @param string $type (default "object")
   */
   
   public function __construct($sourceType = "none")
   {
     parent::__construct($sourceType);
   }
   
   /**
    * Data object connection methods are next 
    * Start with the data object connection
    */
    /*
    public function connect()
    {
    	if (!$this->getDB_Connection_Flag()) // if there is no existing data connection
    	{
    	     // if the connection type is set, then set the connection flag 
    		if (!$this->getType()) 
    		{
    		   $this.setDBConnection_Flag(true);
    		}
    		// else the connection is not set do nothing
    	}
    	else
    	{
    		return true; // already connected, take no action and return true
    	}
    
    }
    */
}
	
