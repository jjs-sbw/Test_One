<?php
namespace as3;


	/**
	 * @file 
	 * Test the abstract Dao class using the TestDao class
	 */
class TestDaoTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * Default constructor should return an exception
	 *
	 * @expectedException \as3\MalFormedConnectionException
	 */
	 public function testDaoDefaultConstructor()
	 {
	 	$testConnection = new TestDao();
	 }
	 
	/**
	 * Test the constructor for an object data source
	 */
	 public function testDaoObjectConstructor()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	
	 }
	 
	/**
	 * Test the constructor for an database data source
	 */
	 public function testDaoDBConstructor()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	
	 }
	 
	/**
	 * Test the constructor for an file data source
	 */
	 public function testDaoFileConstructor()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	
	 }
	 
	/**
	 * Test the connection flag for a data source
	 */
	 public function testDaoObjectConnectionFlag()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	
	 }
	 
	/**
	 * Test the source object connection string creation
	 */
	 public function testDaoObjectConnectionString()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }

	/**
	 * Test the source database connection string creation
	 */
	 public function testDaoDatabaseConnectionString()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }
	 
	 /**
	 * Test the source database connection string creation
	 */
	 public function testDaoFileConnectionString()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }
	 
	/**
	 * Test the object source disconnect method 
	 */
	 public function testDaoObjectDisconnect()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$disconnectFlag = false;
	 	$testConnection->disconnect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $disconnectFlag);
	 	$connectionType = null;
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionString = null;
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }
	 
	 
	/**
	 * Test the database source disconnect method 
	 */
	 public function testDaoDatabaseDisconnect()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$disconnectFlag = false;
	 	$testConnection->disconnect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $disconnectFlag);
	 	$connectionType = null;
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionString = null;
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }
	 
	 
	/**
	 * Test the file source disconnect method 
	 */
	 public function testDaoFileDisconnect()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$disconnectFlag = false;
	 	$testConnection->disconnect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $disconnectFlag);
	 	$connectionType = null;
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionString = null;
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	
	 }
	 
	/**
	 * Test the source object select method
	 */
	 public function testDaoObjectSelect()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->select();
	 	$connectionString = "Data._data_1 Select";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = new Data();
	 	$testData_1 = $testDataSource->getData_1();
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	
	 }
	 
	/**
	 * Test the source database select method
	 */
	 public function testDaoDatabaseSelect()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->select();
	 	$connectionString = "Database selection method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = null;
	 	$testData_1 = null;
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	
	 }
	 
	/**
	 * Test the source file select method
	 */
	 public function testDaoFileSelect()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->select();
	 	$connectionString = "File selection method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = null;
	 	$testData_1 = null;
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	
	 }
	 
	/**
	 * Test the source object update method
	 */
	 public function testDaoObjectUpdate()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->update();
	 	$connectionString = "Data._data_1 Update";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = new Data();
	 	$testData_1 = $testDataSource->getData_1();
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	$updateString_1 = "one";
	 	$updateString_2 = "one";
	 	$testDataSource->updateArray_1($updateString_1, $updateString_2);
	 	$testData_1 = $testDataSource->getData_1();
	 	$this->assertEquals($testData_1[$updateString_1], $updateString_2);
	 	
	 }
	 
	/**
	 * Test the source database update method
	 */
	 public function testDaoDatabaseUpdate()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->update();
	 	$connectionString = "Database update method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = null;
	 	$testData_1 = null;
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	$updateString_1 = null;
	 	$updateString_2 = null;
	 	// more PDO handling logic here
	 	
	 }
	 
	/**
	 * Test the source file update method
	 */
	 public function testDaoFileUpdate()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->update();
	 	$connectionString = "File update method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testDataSource = null;
	 	$testData_1 = null;
	 	$this->assertEquals($testConnection->getResult(), $testData_1);
	 	$updateString_1 = null;
	 	$updateString_2 = null;
	 	// More file based handling logic here
	 	
	 }
	 
	/**
	 * Test the source object delete method
	 */
	 public function testDaoObjectDelete()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->delete();
	 	$connectionString = "Data._data_1 Delete";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$arrayLength = 2;
	 	$testResultDelete = $testConnection->getResult();
	 	$this->assertEquals(count($testResultDelete), $arrayLength);
	 	$this->assertEquals($testResultDelete['two'], 2);
	 	$this->assertEquals($testResultDelete['three'], 3);
	 }
	 
	/**
	 * Test the source database delete method
	 */
	 public function testDaoDatabaseDelete()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->delete();
	 	$connectionString = "Database delete method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	//$arrayLength = 2;
	 	$testResultDelete = null;
	 	$this->assertEquals($testConnection->getResult(), $testResultDelete);
	 	
	 }
	 
	/**
	 * Test the source file delete method
	 */
	 public function testDaoFileDelete()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->delete();
	 	$connectionString = "File delete method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	//$arrayLength = 2;
	 	$testResultDelete = null;
	 	$this->assertEquals($testConnection->getResult(), $testResultDelete);
	 	
	 }
	 
	 /**
	 * Test the source object insert method
	 */
	 public function testDaoObjectInsert()
	 {
	 	$connectionType = "object";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is an object based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->insert();
	 	$connectionString = "Data._data_1 Insert";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$arrayLength = 4;
	 	$testResultDelete = $testConnection->getResult();
	 	$this->assertEquals(count($testResultDelete), $arrayLength);
	 	$this->assertEquals($testResultDelete['four'], 4);
	 	$this->assertEquals($testResultDelete['three'], 3);
	 }
	 
	 
	/**
	 * Test the source database insert method
	 */
	 public function testDaoDatabaseInsert()
	 {
	 	$connectionType = "database";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a database source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->insert();
	 	$connectionString = "Database insert method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$result = null;
	 	$testResultDelete = $testConnection->getResult();
	 	$this->assertEquals($testResultDelete, $result);
	 	
	 }
	 
	 
	 /**
	 * Test the source file insert method
	 */
	 public function testDaoFileInsert()
	 {
	 	$connectionType = "file";
	 	$testConnection = new TestDao($connectionType);
	 	$this->assertEquals($testConnection->getType(), $connectionType);
	 	$connectionFlag = true;
	 	$testConnection->connect();
	 	$this->assertEquals($testConnection->getDB_Connection_Flag(), $connectionFlag);
	 	$connectionString = "This is a file based data source.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$testConnection->insert();
	 	$connectionString = "File insert method not complete.";
	 	$this->assertEquals($testConnection->getConnection(), $connectionString);
	 	$result = null;
	 	$testResultDelete = $testConnection->getResult();
	 	$this->assertEquals($testResultDelete, $result);
	 	
	 }
	 
}

?>
