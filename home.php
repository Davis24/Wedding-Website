<?php include ('header.html') ?>

<header class="w3-display-container w3-wide bgimg" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Andrew & Julee</h1>
    <h2><b>Are getting married</b></h2>
    <h2><b>24.03.2017</b></h2>
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

<!-- Background photo 
<div class="w3-display-container bgimg2 w3-grayscale-max">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">You Are Invited</h1><br>
    <h2>Of course..</h2>
  </div>
</div>-->

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
  <p class="w3-xlarge">RSVP COMING CHRISTMAS TIME FRAME</p>


    <!--<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-green-wedding w3-hover-opacity-off" style="padding:8px 60px">RSVP</button>-->
  </p>
</div>

<!--- RSVP Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:15px;">X</span>
      <h1 class="w3-wide w3-center">CAN YOU COME?</h1>
      <p class="w3-center">We really hope you can make it.</p>

      <form id="regForm" method="post" action="/wedding.php">
      <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <p><label>Email:</label><input placeholder="Email" oninput="this.className = ''" name="email"></p>
        <p><input class="w3-radio" type="radio" name="attend" value="attending" checked><label>Attending</label></p>
        <p><input class="w3-radio" type="radio" name="attend" value="not attending"><label>Not Attending</label></p>
      </div>
      <div class="tab">
        <p>Name:</p>
        <p><input placeholder="First Name" oninput="this.className = ''" name="fname"></p>
        <p><input placeholder="Last Name" oninput="this.className = ''" name="lname"></p>
      </div>
      <div class="tab">
        <label>Add additional guests to the list:</label>
        <div class="w3-row">
          <div class="w3-twothird"><input id="guest_name" class="w3-input w3-border" type="text" placeholder="Jane Doe" name="guests"></div>
          <div class="w3-third">
            <button type="button" class="w3-button w3-green w3-border" onclick="addGuest()">+</button>
          </div>
        </div>
        <br/>
          <ul id="guest_list" class="w3-ul w3-card-4">
            <li class="w3-display-container">Jill <span onclick="removeGuest(this)" class="w3-button w3-transparent w3-display-right">&times;</span></li>
            <li class="w3-display-container">Adam <span onclick="removeGuest(this)" class="w3-button w3-transparent w3-display-right">&times;</span></li>
            <li class="w3-display-container">Eve <span onclick="removeGuest(this)" class="w3-button w3-transparent w3-display-right">&times;</span></li>
          </ul>
        <p><label>Dietary Restrictions</label><input class="w3-input w3-border" type="text" placeholder="No dietary restictions." name="diet"></p>
      </div>

      <div style="overflow:auto;">

      <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form:  -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
    </div>
    </form>

<!-- Footer -->
<script src="js/modal.js"></script>

</body>
</html>
