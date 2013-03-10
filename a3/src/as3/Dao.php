<?php
namespace as3;

/**
 * @file
 * Abstract class to represent a data source 
 * Joseph Simpson -- System Concepts
 */
 
 /**
 * Create a new data connection exception
 */

 class MalFormedConnectionException extends \Exception {}


/**
 * Abstract data connection class
 *
 * Exception trown if the constructor is not overridden
 */

 abstract class Dao
 { 
    
  /**
   ****** protected properties of the Dao class
   */

  /**
   * Data connection 
   * @var string
   */
  protected $_db;

  /**
   * Data connection string needed to connect to data source
   * @var string
   */
  protected $_connection;
  
  /**
   * Data connection type
   * @var string
   */
  protected $_type;


  /**
   * Database host 
   * @var string
   */
  protected $_db_host;

  /**
   * Database user
   * @var string
   */
  protected $_db_user;
  
  /**
   * Database password 
   * @var string
   */
  protected $_db_pass;
  
  /**
   * Database name
   * @var string
   */
  protected $_db_name;
  
  /**
   * Active data connection 
   * @var boolean
   */
  protected $_con_flag;
  
  /**
   * Result from data connection
   * @var array()
   */
  protected $_result;


  /** 
   * Constructor
   * @param string Data connection type
   */
   
   public function __construct($sourceType = "none") 
   {
      $this->setType($sourceType);
      $type_flag = true;
      
      if ($this->getType() == 'object' )
      {
       $type_flag = false;
      }
      
      if ($this->getType() == 'database' )
      {
       $type_flag = false;
      }
      
      if ($this->getType() == 'file' )
      {
       $type_flag = false;
      }
     
      if ($type_flag)
      {
      	throw new MalFormedConnectionException('Data source type must be one of: object,
      	database or file.' . $this->getType() ."  " . $type_flag);
      }
    
   	  return $this; 
   }
   
   /**
    ***** Public Methods 
    */
    
   /**
    * Set the connection type
    */
    public function setType($type)
    {
     	$this->_type = $type;
    }
 
    
   /**
    * Return the connection type
    */
    public function getType()
    {
     	return $this->_type;
    }
    
    
   /**
    * Set the database type
    */
    public function setDB($db)
    {
     	$this->_db = $db;
    }
 
    
   /**
    * Return the database type
    */
    public function getDB()
    {
      return $this->_db;
    }
    
    
   /**
    * Set the database connection string
    */
    public function setConnection($connection)
    {
     	$this->_connection = $connection;
    }
 
    
   /**
    * Return the database connection string
    */
    public function getConnection()
    {
      return $this->_connection;
    }
    
   /**
    * Set the database host name
    */
    public function setDB_Host($db_host)
    {
     	$this->_db_host = $db_host;
    }
 
    
   /**
    * Return the database host name
    */
    public function getDB_Host()
    {
      return $this->_db_host;
    }
    
   /**
    * Set the database user
    */
    public function setDB_User($db_user)
    {
     	$this->_db_user = $db_user;
    }
 
    
   /**
    * Return the database user
    */
    public function getDB_User()
    {
      return $this->_db_user;
    }
    
   /**
    * Set the database password
    */
    public function setDB_Pass($db_pass)
    {
     	$this->_db_pass = $db_pass;
    }
 
    
   /**
    * Return the database password
    */
    public function getDB_Pass()
    {
      return $this->_db_pass;
    }
    
    
    /**
    * Set the database name
    */
    public function setDB_Name($db_name)
    {
     	$this->_db_name = $db_name;
    }
 
    
   /**
    * Return the database name
    */
    public function getDB_Name()
    {
      return $this->_db_name;
    }
    
    /**
    * Set the flag if a data source connection exists
    */
    public function setDB_Connection_Flag($db_con)
    {
     	$this->_con_flag = $db_con;
    }
 
    
   /**
    * Return the data source connection exists flag 
    */
    public function getDB_Connection_Flag()
    {
      return $this->_con_flag;
    }
    
   /**
    * Set the data source result data array
    */
    public function setResult($array_of_stuff = array())
    {
     	$this->_result = $array_of_stuff;
    }
 
    
   /**
    * Return the data source result set
    */
    public function getResult()
    {
      return $this->_result;
    }
    
    
   /**
    * Data object connection methods are next 
    * Start with the data object connection
    */
    public function connect()
    {
    	// check for existing flag 
    	if (!$this->getDB_Connection_Flag()) // if there is no existing data connection
    	{
    	     // if the connection type is set, then set the connection flag 
    		if ($this->getType()) 
    		{
    		   $this->setDB_Connection_Flag(true);
    		}
    		// else the connection is not set do nothing
    	}
    	else
    	{
    		// already connected
    		$this->setDB_Connection_Flag(true);
    	}
    	
    	// Now take action based on the connection type
    	if ($this->getDB_Connection_Flag())
    	{
    	  // record the data source type
    	  $dataType = $this->getType();
    	  switch($dataType)
    	  {
    	  	case "object":
    	  	$this->setConnection("This is an object based data source.");
    	  	break;
    	  	
    	  	case "database":
    	  	$this->setConnection("This is a database source.");
    	  	break;
    	  	
    	  	case "file":
    	  	$this->setConnection("This is a file based data source.");
    	  	break;
    	  	
    	  	default:
    	  	$this->setConnection("Should never get here.");
    	  }
    	  
    	}
    	
    
    } // end connect
    
   /**
    * Data object connection methods are next 
    * Start with the data object connection
    */
    public function disconnect()
    {
    	// check for existing connection flag 
    	if (!$this->getDB_Connection_Flag()) // if there is no existing data connection
    	{
    	     // check to see if the type is set 
    		if ($this->getType()) 
    		{
    		   // if the type is set -- then set to null
    		   $this->setType(null);
    		   $this->setConnection(null);
    		   
    		}
    		// else the connection flag is not set -- set connection string to null
    		$this->setConnection(null);
    	}
    	else
    	{
    		// the connection flag is set to true already - now set to false
    		$this->setDB_Connection_Flag(false);
    		
    		 // check to see if the type is set 
    		if ($this->getType()) 
    		{
    		   // if the type is set -- then set type to null
    		   $this->setType(null);
    		   //set connection string to null
    		   $this->setConnection(null);
    		}
    		// else the connection type is not set -- set connection string to null
    		$this->setConnection(null);
    	}
    
    } // end disconnect
    
   /**
    * Data object selection methods are next 
    * Start with the data object select
    */
    public function select()
    {
    	// check for existing source type 
    	if (!$this->getType()) // if there is no existing data connection
    	{
    	    // Report error condition in connection string 
    	    $this->setConnection("There is no data source connection available.");
    	    return false;
    	}
    	else if (!$this->getDB_Connection_Flag())
    	{
    		// Report error condition in connection string
    		$this->setConnection("There is no data source connection flag set.");
    	    return false;
    	}
    	
    	// Now take action based on the connection type
    	if ($this->getDB_Connection_Flag())
    	{
    	  // record the data source type
    	  $dataType = $this->getType();
    	  switch($dataType)
    	  {
    	  	case "object":
    	  	$this->setConnection("Data._data_1 Select");
    	  	$dataSource = new Data();
    	  	$dataArray = $dataSource->getData_1();
    	  	$this->setResult($dataArray);
    	  	break;
    	  	
    	  	case "database":
    	  	$this->setConnection("Database selection method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	case "file":
    	  	$this->setConnection("File selection method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	default:
    	  	$this->setConnection("Should never get here.");
    	  	$this->setResult(null);
    	  }
    	  
    	}
    	
    
    } // end select
    
    
   /**
    * Data object update methods are next 
    * Start with the data object select and then change the required data
    */
    public function update()
    {
    	// check for existing source type 
    	if (!$this->getType()) // if there is no existing data connection
    	{
    	    // Report error condition in connection string 
    	    $this->setConnection("There is no data source connection available.");
    	    return false;
    	}
    	else if (!$this->getDB_Connection_Flag())
    	{
    		// Report error condition in connection string
    		$this->setConnection("There is no data source connection flag set.");
    	    return false;
    	}
    	
    	// Now take action based on the connection type
    	if ($this->getDB_Connection_Flag())
    	{
    	  // record the data source type
    	  $dataType = $this->getType();
    	  switch($dataType)
    	  {
    	  	case "object":
    	  	$this->setConnection("Data._data_1 Update");
    	  	$dataSource = new Data();
    	  	$dataArray = $dataSource->getData_1();
    	  	$this->setResult($dataArray);
    	  	break;
    	  	
    	  	case "database":
    	  	$this->setConnection("Database update method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	case "file":
    	  	$this->setConnection("File update method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	default:
    	  	$this->setConnection("Should never get here.");
    	  	$this->setResult(null);
    	  }
    	  
    	}
    	
    
    } // end update
    
    
   /**
    * Data object delete methods are next 
    * Start with the data object select and then delete some data
    */
    public function delete()
    {
    	// check for existing source type 
    	if (!$this->getType()) // if there is no existing data connection
    	{
    	    // Report error condition in connection string 
    	    $this->setConnection("There is no data source connection available.");
    	    return false;
    	}
    	else if (!$this->getDB_Connection_Flag())
    	{
    		// Report error condition in connection string
    		$this->setConnection("There is no data source connection flag set.");
    	    return false;
    	}
    	
    	// Now take action based on the connection type
    	if ($this->getDB_Connection_Flag())
    	{
    	  // record the data source type
    	  $dataType = $this->getType();
    	  switch($dataType)
    	  {
    	  	case "object":
    	  	$this->setConnection("Data._data_1 Delete");
    	  	$dataSource = new Data();
    	  	$dataSource->deleteItemArray_1("one");
    	  	$dataArray = $dataSource->getData_1();
    	  	$this->setResult($dataArray);
    	  	break;
    	  	
    	  	case "database":
    	  	$this->setConnection("Database delete method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	case "file":
    	  	$this->setConnection("File delete method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	default:
    	  	$this->setConnection("Should never get here.");
    	  	$this->setResult(null);
    	  }
    	  
    	}
    	
    
    } // end delete
    
    
    /**
    * Data object insert methods are next 
    * Start with the data object then insert some data
    */
    public function insert()
    {
    	// check for existing source type 
    	if (!$this->getType()) // if there is no existing data connection
    	{
    	    // Report error condition in connection string 
    	    $this->setConnection("There is no data source connection available.");
    	    return false;
    	}
    	else if (!$this->getDB_Connection_Flag())
    	{
    		// Report error condition in connection string
    		$this->setConnection("There is no data source connection flag set.");
    	    return false;
    	}
    	
    	// Now take action based on the connection type
    	if ($this->getDB_Connection_Flag())
    	{
    	  // record the data source type
    	  $dataType = $this->getType();
    	  switch($dataType)
    	  {
    	  	case "object":
    	  	$this->setConnection("Data._data_1 Insert");
    	  	$dataSource = new Data();
    	  	$dataSource->insertItemArray_1("four", 4);
    	  	$dataArray = $dataSource->getData_1();
    	  	$this->setResult($dataArray);
    	  	break;
    	  	
    	  	case "database":
    	  	$this->setConnection("Database insert method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	case "file":
    	  	$this->setConnection("File insert method not complete.");
    	  	$this->setResult(null);
    	  	break;
    	  	
    	  	default:
    	  	$this->setConnection("Should never get here.");
    	  	$this->setResult(null);
    	  }
    	  
    	}
    	
    
    } // end insert
    
    
}
 
 
