<?php

	function db_connect() {

        // Define connection as a static variable, to avoid connecting more than once 
        

        // Try and connect to the database, if a connection has not been established yet
        if(!isset($db)) {
            // Load configuration as an array. Use the actual location of your configuration file
            $config = parse_ini_file('C:/wamp64/www/Wedding/config.ini'); 
            $db = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
        }
        else
        {
        	print "already connected <br>";
        }

        // If connection was not successful, handle the error
        if($db === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return mysqli_connect_error(); 
        }
        print "connect <br>";
        return $db;
    }


    
	function create($fullname, $email, $attending, $adults, $children, $diet = null)
	{
		$db = db_connect();
		$sql = "";
		if($diet == null)
		{
			$sql = "INSERT INTO ATTENDEES (ID, FULLNAME, EMAIL, ATTENDING, DIET, ADULTS, CHILDREN) VALUES (NULL, '$fullname', '$email', '$attending', 'N/A', $adults, $children)";
		}
		else
		{
			$sql = "INSERT INTO ATTENDEES (ID, FULLNAME, EMAIL, ATTENDING, DIET, ADULTS, CHILDREN) VALUES (NULL, '$fullname', '$email', '$attending', '$diet', $adults, $children)";
		}
		

		print "$sql <br>";

		if(mysqli_query($db,$sql))
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: ".$sql."<br>".$db->error;
		}

		mysqli_close($db);
	}



	create("testname","email@test", "yes", 2, 3, "fish");
	create("testname","email@test", "yes", 2, 3);


	fuction 


?>