var list = document.getElementById('guest_list');
var num_guests = 1;




function addGuest()
{
    var x = document.getElementById("guest_name").value;
    //guests.push[x];
    var entry = document.createElement('li');
    entry.id = num_guests;
    entry.setAttribute("class","w3-display-container");
    
    var input_text = document.createElement('input');
    input_text.setAttribute("name","guests[]");
    input_text.setAttribute("type", "hidden");
    input_text.setAttribute("value", x);

    var span = document.createElement('span');
    span.innerHTML = "&times;";
    span.setAttribute("class", "w3-button w3-transparent w3-display-right");
    span.onclick = function() {removeGuest(this) };
    
    entry.appendChild(document.createTextNode(x));
    entry.appendChild(input_text);
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
    if(document.getElementById("last_name").value.toLowerCase() === 'fenstermaker') {
      document.getElementById("guest_label").style.display = "none";  
      document.getElementById("guest_add").style.display = "none";
    }
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
}