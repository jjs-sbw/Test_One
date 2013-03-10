<?php // assignment 3 code stuff
	use Guzzle\Http\Client;
	//use Guzzle\Plugin\OauthPlugin;
	require_once 'bootstrap.php';
	
	//require_once './src/as3/Dao.php';
	//require_once './src/as3/TestDao.php';

	echo "<h1>This is assignment three WEBLAMP 442 Cool Winter Stuff.</h1>";
	
	// create a Slim application
	$app = new \Slim\Slim();
	
	// define a HTTP GET route
	$app->get('/', function()
	{
		echo '<h1>"Hi ya all.. this is Slim" .. included Slim but did not use..</h1>';
		echo "<h2>Except for these lines...</h2>";
	});
	
	// run the application
	$app->run();
	

    echo "<h1>Working Github API... new Github account for test..</h1>";
    echo "<h2>Working user login... use Guzzle to cinteract with Github API</h1>";
    
    // use guzzle to interact with github api..
    $client = new Client('https://api.github.com');
    $request = $client->get('/user')->setAuth('jjs-sbw','gh1gh2gh3');
   
	$response = $request->send();
	
	echo $response->getBody();
	
	
	echo "<h2>Working user emails..</h1>";
    
    // use guzzle to interact with github api..
    $client_1 = new Client('https://api.github.com');
    $request_1 = $client_1->get('/user/emails')->setAuth('jjs-sbw','gh1gh2gh3');
   
	$response_1 = $request_1->send();
	
	echo $response_1->getBody();
	
	echo "<h2>Working user public keys..</h1>";
    
    // use guzzle to interact with github api..
    $client_2 = new Client('https://api.github.com');
    $request_2 = $client_2->get('/user/keys')->setAuth('jjs-sbw','gh1gh2gh3');
   
	$response_2 = $request_2->send();
	
	echo $response_2->getBody();
	
	
	echo "<h2>Working user followers ..</h1>";
    
    // use guzzle to interact with github api..
    $client_3 = new Client('https://api.github.com');
    $request_3 = $client_3->get('/user/followers')->setAuth('jjs-sbw','gh1gh2gh3');
   
	$response_3 = $request_3->send();
	
	echo $response_3->getBody();
	
	// create new data connection
	$data = new as3\TestDao("object");
	$data->connect();
	$data->setConnection($response);
	echo '<h2>Display the result from the first data interface using Assignment 2 Doa.</h2>';
	echo $data->getConnection();
	
	// create another new data connection
	$data_1 = new as3\TestDao("object");
	$data_1->connect();
	$data_1->setConnection($response_1);
	echo '<h2>Display the result from the second data interface using Assignment 2 Doa.</h2>';
	echo $data_1->getConnection();
	
    // create another new data connection
	$data_2 = new as3\TestDao("object");
	$data_2->connect();
	$data_2->setConnection($response_2);
	echo '<h2>Display the result from the third data interface using Assignment 2 Doa.</h2>';
	echo $data_2->getConnection();
	
	
	echo '<h2>Assignment Three is DONE!!!!!!!!!.</h2>';
	
?>
