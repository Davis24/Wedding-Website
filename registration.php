<?php 
	include ('header.html'); 
	$fullname = $email = $attending = $diet = "";
	$adults = $children = 0;	

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['going']))
		{
			$fullname = sanitize_input($_POST["fullname"]);
			$email = sanitize_input($_POST["email"]);
			$diet = sanitize_input($_POST["diet"]);
			$attending = "Yes";
			$adults = $_POST["adults"];
			$children = $_POST["children"];
			create($fullname, $email, $attending, $adults, $children, $diet);
		}
		else
		{
			$fullname = sanitize_input($_POST["fullname"]);
			$email = sanitize_input($_POST["email"]);
			$attending = "No";
			create($fullname, $email, $attending, $adults, $children);
		}
	}

	

	function sanitize_input($data)
	{
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}

		
	function db_connect() {

        // Define connection as a static variable, to avoid connecting more than once 
        

        // Try and connect to the database, if a connection has not been established yet
        if(!isset($db)) {
            // Load configuration as an array. Use the actual location of your configuration file
            $config = parse_ini_file('C:/wamp64/www/Wedding-Website/config.ini'); 
            $db = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
        }
        else
        {
        	#print "already connected <br>";
        }

        // If connection was not successful, handle the error
        if($db === false) {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return mysqli_connect_error(); 
        }
        #print "connect <br>";
        return $db;
    }


    //Create Function    
	function create($fullname, $email, $attending, $adults, $children, $diet = null)
	{
		$db = db_connect();
		$successful = 0;
		$sql = "";
		if($diet == null)
		{
			$sql = "INSERT INTO ATTENDEES (ID, FULLNAME, EMAIL, ATTENDING, DIET, ADULTS, CHILDREN) VALUES (NULL, '$fullname', '$email', '$attending', 'N/A', $adults, $children)";
		}
		else
		{
			$sql = "INSERT INTO ATTENDEES (ID, FULLNAME, EMAIL, ATTENDING, DIET, ADULTS, CHILDREN) VALUES (NULL, '$fullname', '$email', '$attending', '$diet', $adults, $children)";
		}
		

		#print "$sql <br>";
		if(mysqli_query($db,$sql))
		{
			if($attending == "Yes")
			{
				print '<div class="w3-container w3-green w3-center">
					<h2>Success!</h2>
  						<h3>We can\'t wait to see you!</h3>
					</div>';
			}
			else
			{
				print '<div class="w3-container w3-green">
  					<h3>Awwww!</h3>
  						<p>It\'s unfortunate you\'ll be missing out but we understand.</p>
					</div>';
			}
			
		}
		else
		{
			print '<div class="w3-container w3-red">
  					<h3>Oh No!</h3>
  						<p>Something went wrong please try again or contact [email].</p>
					</div>';
			echo "Error: ".$sql."<br>".$db->error;
		}
		
		mysqli_close($db);
	}





?>