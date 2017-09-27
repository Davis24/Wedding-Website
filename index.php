<?php include ('header.html') ?>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Andrew & Julee</h1>
    <h2>Are getting married</h2>
    <h2><b>17.07.2017</b></h2>
  </div>
</header>


<!-- About -->
<div class="w3-container w3-padding-64" id="us">
  <div class="w3-content">
    <h1 class="w3-center w3-text-black"><b>&Prime;Our Story&Prime;</b></h1>
    <img class="w3-round w3-grayscale-min" src="img/placeholder1.png" style="width:100%;margin:32px 0">
    <p><i>You all know us. And we all know you. We are getting married lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.</i>
    </p><br>
    <p class="w3-center"><a href="#wedding" class="w3-button w3-black w3-round w3-padding-large w3-large">Wedding Details</a></p>
  </div>
</div>

<!-- Background photo -->
<div class="w3-display-container bgimg2">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">You Are Invited</h1><br>
    <h2>Of course..</h2>
  </div>
</div>

<!-- Wedding information -->
<div class="w3-container w3-padding-64 w3-grayscale-min w3-center" id="wedding">
  <div class="w3-content">
    <h1 class="w3-text-black"><b>THE WEDDING</b></h1>
    <img class="w3-round-large w3-grayscale-min" src="img/placeholder1.png" style="width:100%;margin:64px 0">
    <div class="w3-row">
      <div class="w3-half">
        <h2>When</h2>
        <p>Wedding Ceremony - 2:00pm</p>
        <p>Reception & Dinner - 5:00pm</p>
      </div>
      <div class="w3-half">
        <h2>Where</h2>
        <p>Some place, an address</p>
        <p>Some where, some address</p>
      </div>
    </div>
  </div>
</div>

<!-- RSVP section -->
<div class="w3-container w3-padding-64 w3-center w3-wide" id="rsvp" style="background-color: #466780; color: white;">
  <h1>HOPE YOU CAN MAKE IT!</h1>
  <p class="w3-large">Kindly Respond By [Date]</p>
  <p class="w3-xlarge">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-green-wedding w3-hover-opacity-off" style="padding:8px 60px">RSVP</button>
  </p>
</div>

<!-- RSVP modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:15px;">X</span>
      <h1 class="w3-wide">CAN YOU COME?</h1>
      <p>We really hope you can make it.</p>
      <form>
        <p><label class="w3-left">Name</label><input class="w3-input w3-border" type="text" placeholder="Name" name="name"></p>
        <p><label class="w3-left">Email</label><input class="w3-input w3-border" type="text" placeholder="Email" name="email"></p>
        <p><label class="w3-left">Dietary Restrictions</label><input class="w3-input w3-border" type="text" placeholder="Dietary Restrictions" name="diet"></p>
        <div class="w3-half">
          <p><label class="w3-left">Adults</label><input class="w3-input w3-border" type="number" min="0" placeholder="0"></p>
        </div>
        <div class="w3-half" style="padding-left: 8px;">
          <p><label class="w3-left">Children</label><input class="w3-input w3-border" type="number" min="0" placeholder="0"></p>
        </div>
      </form>
      <p><i>Sincerely, Andrew & Julee</i></p>
      <div class="w3-row">
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">Going</button>
        </div>
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">Can't come</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->


</body>
</html>