<?php include ('header.html') ?>

<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg" id="home">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">Andrew & Julee</h1>
    <h2>Are getting married</h2>
    <h2><b>17.07.2017</b></h2>
    <h2>Portsmouth Women's Club</h2>
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
    <img class="w3-round-large w3-grayscale-min" src="http://audreyrosephoto.com/wp-content/uploads/2014/07/2014-07-30_0175.jpg" style="width:100%;margin:64px 0">
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

<!--
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:15px;">X</span>
      <h1 class="w3-wide">CAN YOU COME?</h1>
      <p>We really hope you can make it.</p>
      <form action="/wedding.php" method="post">
        <p><label class="w3-left">Name*</label><input class="w3-input w3-border" type="text" placeholder="Julee Harlow" name="fullname"></p>
        <p><label class="w3-left">Email*</label><input class="w3-input w3-border" type="text" placeholder="JuleeH@email.com" name="email"></p>
        <p><label class="w3-left">Dietary Restrictions</label><input class="w3-input w3-border" type="text" placeholder="No dietary restictions." name="diet"></p>
        <div class="w3-half">
          <p><label class="w3-left">Adults*</label><input class="w3-input w3-border" type="number" name="adults" min="0" value="0" placeholder="0"></p>
        </div>
        <div class="w3-half" style="padding-left: 8px;">
          <p><label class="w3-left">Children*</label><input class="w3-input w3-border" type="number" name="children" min="0" value="0" placeholder="0"></p>
        </div>
        <p><i>Sincerely, Andrew & Julee</i></p>
        <div class="w3-row">
          <div class="w3-half">
            <button onclick="document.getElementById('id01').style.display='none'" type="submit" name="going" class="w3-button w3-block w3-green">Going</button>
          </div>
          <div class="w3-half">
            <button onclick="document.getElementById('id01').style.display='none'" type="submit" name="notgoing" class="w3-button w3-block w3-red">Can't come</button>
          </div>
        </div>
      </form>
      
    </div>
  </div>
</div>
-->

<!--- RSVP -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright" style="font-size:15px;">X</span>
      <h1 class="w3-wide w3-center">CAN YOU COME?</h1>
      <p class="w3-center">We really hope you can make it.</p>

      <form id="regForm" action="/action_page.php">
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
<script>
  //var guests = [];
  var list = document.getElementById('guest_list');
  var num_guests = 1;
//fruits.push("Kiwi"); 

function addGuest()
{
    var x = document.getElementById("guest_name").value;
    //guests.push[x];
    var entry = document.createElement('li');
    entry.id = num_guests;
    entry.setAttribute("class","w3-display-container");

    var span = document.createElement('span');
    span.innerHTML = "&times;";
    span.setAttribute("class", "w3-button w3-transparent w3-display-right");
    span.onclick = function() {removeGuest(this) };
    
    entry.appendChild(document.createTextNode(x));
    entry.appendChild(span);
    
    list.appendChild(entry);
    num_guests++;
    //window.alert(guests.toString());

}


function removeGuest(e)
{
  e.parentNode.parentNode.removeChild(e.parentNode);
}

  var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}</script>

</body>
</html>
