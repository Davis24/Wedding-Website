<?php 

  include ('header.html'); 
  if(filter_has_var(INPUT_POST, 'submit')){
    var_dump($_POST);    

    ## Grabs data
    $first_name = htmlspecialchars($_POST['fname']);
    $last_name = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $guest_list = $_POST['guests'];
    $number_of_guests = count($guest_list);
    $dietary_restrictions = htmlspecialchars($_POST['diet']);
    $attending = htmlspecialchars($_POST['attend']);

    echo "<p>First Name: $first_name</p>";
    echo "<p>LAstName: $last_name</p>";
    echo "<p>email Name: $email</p>";
    echo "<p>diet : $dietary_restrictions</p>";
    echo "<p>attending: $attending</p>";
    echo "<p> # : $number_of_guests</p>";

    ## Post to database
    

  }  
?>

<header class="w3-display-container w3-wide bgimg" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Andrew & Julee</h1>
    <h2><b>Are getting married</b></h2>
    <h2><b>03.24.2018</b></h2>
    <h2><b>Portsmouth Women's Club</b></h2>
  </div>
</header>

<!-- About -->
<div class="w3-container w3-padding-64" id="us">
  <div class="w3-content">
    <h1 class="w3-center w3-text-black"><b>&Prime;Our Story&Prime;</b></h1>
    <img class="w3-round w3-grayscale-min width100" src="img/julee_andrew_2.jpg" style="margin:32px 0">
    <p><i>Ironically, while Julee and Andrew both went to Virginia Tech, it wasn't until Julee moved to Ann Arbor, MI that they met. Andrew came to visit a fellow Hokie (and groomsman) Sudipto. During his visit, Julee and Andrew met at a Tiger's baseball game where they hit it off and talked throughout the evening. They continued to stay in touch, and Andrew made several more trips to Michigan to "visit Sudipto." The rest is history!</i>
    </p>
  </div>
</div>
<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">

    <h1 class="w3-text-black"><b>THE WEDDING</b></h1>
    <img class="w3-round-large w3-grayscale-min width100" src="http://audreyrosephoto.com/wp-content/uploads/2014/07/2014-07-30_0175.jpg" style="margin:64px 0">
    <div class="w3-row">
      <div class="w3-half">
        <h2>When</h2>
        <p>Wedding Ceremony - March 24th 5:00pm</p>
        <p>Reception & Dinner to Immediately Follow</p>
      </div>
      <div class="w3-half">
        <h2>Where</h2>
        <p>Woman's Club of Portsmouth</p>
        <p>304 Sycamore Rd, Portsmouth, VA 23707</p>
      </div>
    </div>
  </div>
</div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-center w3-wide" id="rsvp">
  <h1>HOPE YOU CAN MAKE IT!</h1>
  <p class="w3-large">Kindly Respond By <b>February 14th</b></p>
<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-green-wedding w3-hover-opacity-off" style="padding:8px 60px">RSVP</button>
  </p>
</div>

<!--- RSVP Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:15px;">X</span>
      <h1 class="w3-wide w3-center">CAN YOU COME?</h1>
      <p class="w3-center">We really hope you can make it.</p>

      <form id="regForm" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
      <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <label>Name:</label>
        <input placeholder="First Name" class="w3-input w3-border" style="margin-bottom:5px;" oninput="this.className = ''" name="fname">
        <input placeholder="Last Name" class="w3-input w3-border"  style="margin-bottom:5px;" oninput="this.className = ''" name="lname">
        <br/>
        <label>Email:</label>
        <input class="w3-input w3-border"  placeholder="Email" oninput="this.className = ''" name="email">
        <p><input class="w3-radio" type="radio" name="attend" value="attending" checked><label>Accept with pleasure</label></p>
        <p><input class="w3-radio" type="radio" name="attend" value="not attending"><label>Decline with regrets</label></p>
        <div style="float:right;">
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
      </div>
      <div class="tab">
        <label>Add additional guest to the list:</label>
        <div class="w3-row">
          <div class="w3-twothird"><input id="guest_name" class="w3-input w3-border" type="text" placeholder="Jane Doe" name="guests"></div>
          <div class="w3-third">
            <button type="button" class="w3-button w3-green w3-border" onclick="addGuest()">Add</button>
          </div>
        </div>
        <br/>
          <ul id="guest_list" class="w3-ul w3-card-4"></ul>
          <br/>
          <label>Dietary Restrictions</label>
          <input class="w3-input w3-border" type="text" placeholder="No dietary restictions." name="diet">
          <br/>
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="submit" name="submit" >Submit</button>
          </div>
      </div>
    <!-- Circles which indicates the steps of the form:  -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
    </div>
    </form>

<!-- Footer -->
<script src="js/modal.js"></script>

</body>
</html>
