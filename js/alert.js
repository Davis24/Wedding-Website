
window.onload = function alertFailure()
{
  var t = document.getElementById("rsvp_alert");

  t.style.display = "block";
  document.getElementById("rsvp_alert").className += "w3-red";
  document.getElementById("rsvp_alert").childNodes[0].text = "Error!";
  document.getElementById("rsvp_alert").childNodes[0].text = "This email has already been used to RSVP.";
  
}