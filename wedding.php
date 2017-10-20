<?php 
  include('header.html'); 

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
    // Try and connect to the database, if a connection has not been established yet
    if(!isset($db)) {
      // Load configuration as an array. Use the actual location of your configuration file
      $config = parse_ini_file('C:/wamp64/www/Wedding-Website/config.ini'); 
      $db = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }
    else{ #print "already connected <br>";
    }

    // If connection was not successful, handle the error
    if($db === false) {
    // Handle error - notify administrator, log to a file, show an error screen, etc.
      return mysqli_connect_error(); 
    }
      #print "connect <br>";
      return $db;
  }

  //Create Entry Function    
  function create($fullname, $email, $attending, $adults, $children, $diet = null){
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
        print '<div class="w3-container w3-green w3-center">
            <h3>Awwww!</h3>
              <p>It\'s unfortunate you\'ll be missing out but we understand.</p>
          </div>';
      }
      
    }
    else
    {
      if($db->errno == 1062)
      {
          print '<div class="w3-container w3-red w3-center">
            <h3>Oh No!</h3>
              <p>That email has already been used. We are not accepting updates to RSVPs at this time.</p>
          </div>';
        
      }
      else
      {
          print '<div class="w3-container w3-red w3-center">
            <h3>Oh No!</h3>
              <p>Something went wrong please try again or contact [email].</p>
          </div>';
        
      }
      #echo "Error: ".$mysql."<br>".$db->errno;
    }
    
    mysqli_close($db);
  }

?>

<!-- Wedding information -->
<div class="w3-container w3-padding-32 w3-center" id="accommodations">
  <div class="w3-content">
    <h1 class="w3-text-black"><b>ACCOMMODATIONS</b></h1>
    <div class="w3-row">
      <div class="w3-half">
        <h2>Sheraton Norfolk Waterside</h2>
        <p><a href="http://www.sheratonnorfolkwaterside.com/">235 E Main Street, Norfolk VA, 23510, USA</a></p>
        <p>757-627-4200</p>
      </div>
      <div class="w3-half">
        <h2>Norfolk Waterside Marriott</h2>
        <p><a href="http://www.marriott.com/hotels/travel/orfws-norfolk-waterside-marriott/">777 Waterside Drive, Norfolk, VA, 23510, USA</a></p>
        <p>888-627-8042</p>
      </div>
      <p> Is there a code for a discount? </p>
    </div>
    <hr>
    <h2 class="w3-text-black"><b>TRANSPORTATION</b></h2>
    <h3>Shuttle Transportation</h3>
    <p>Provided transportation will be provided from xx to xx at xx time.</p>
  </div>
</div>


<!-- Area Photo -->
<div class="w3-display-container wedding_image">
  <div class="w3-display-middle w3-text-black w3-center">
  </div>
</div>


<!-- Registry -->
<div class="w3-container w3-padding-64" id="registry">
  <div class="w3-content">
    <h1 class="w3-center w3-text-black"><b><i class="fa fa-gift" style="font-size:36px"></i> Registry <i class="fa fa-gift" style="font-size:36px"></i></b></h1>
    <p>We've decided that your presence is best gift of all. lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.</p><br>
  </div>
</div>

<!-- Wedding Party -->

<div class="w3-container w3-padding-64" id="weddingparty" style="background-color: #466780; color:white;">
  <div class="w3-content">
    <h1 class="w3-center w3-text-white"><b>Wedding Party</b></h1>
    <div class="w3-half">
      <div class="w3-bar w3-center">
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-bar w3-center">
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
        <p>Megan Davis -- Balloon Creator</p>
      </div>
    </div>
  </div>
</div>
