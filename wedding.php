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
  <div class="w3-display-middle w3-text-black w3-center"></div>
</div>

<!-- Registry -->
<div class="w3-container w3-padding-64" id="registry">
  <div class="w3-content">
    <h1 class="w3-center w3-text-black"><b><i class="px36 fa fa-gift"></i> Registry <i class="px36 fa fa-gift"></i></b></h1>
    <p>As we strive to live with less, we ask for no gifts please. Your presence and support is the greatest gift we could ask for! In lieu of gifts, donations could be made to <b><a href="http://www.foodgatherers.org">food gatherers</a></b>. A food rescue and hunger alleviation organization where Julee volunteers.</p><br>
  </div>
</div>

<!-- Wedding Party -->
<div class="w3-container w3-padding-64" id="weddingparty">
  <div class="w3-content">
    <h1 class="w3-center w3-text-white"><b>Wedding Party</b></h1>
    <div class="w3-half">
      <div class="w3-bar w3-center">
        <h2>BRIDESMAIDS</h2>
        <p>Anne Gray Harlow -- Maid of Honor</p>
        <p>Laine Koch -- Matron of Honor</p>
        <p>Lindsay Voigtsberger</p>
        <p>Macy Henry</p>
        <p>Kasey Kight</p>
        <p>Lauren Caughorn</p>
        <p>Sydney Schaaf</p>
        <br/>
        <h2>FLOWER GIRL</h2>
        <p>Caroline Gauldin</p>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-bar w3-center">
        <h2>GROOMSMEN</h2>
        <p>Spencer Henry -- Best Man</p>
        <p>Sudipto Aich</p>
        <p>Lance Saunders</p>
        <p>Tommy Harris</p>
        <p>Jonathan Harlow</p>
        <br/>
        <h2>RING BEARERS</h2>
        <p>Elijah Koch</p>
        <p>Noah Koch</p>
      </div>
    </div>
  </div>
</div>
