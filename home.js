$(document).ready(function(){

  document.getElementById('mathBtn').addEventListener('click',mathSearch);
  document.getElementById('histBtn').addEventListener('click',histSearch);
  document.getElementById('englBtn').addEventListener('click',englSearch);
  document.getElementById('bioBtn').addEventListener('click',sciSearch);
  document.getElementById('langBtn').addEventListener('click',langSearch);
  document.getElementById('chemBtn').addEventListener('click',sciSearch);
  document.getElementById('physBtn').addEventListener('click',sciSearch);
  document.getElementById('geogBtn').addEventListener('click',histSearch);
  document.getElementById('psycBtn').addEventListener('click',sciSearch);





  document.getElementById('removeLastBtn').addEventListener('click',removeLastQuestion);
  //$('#createForm').on('submit',createSetArray);


});
function mathSearch(){
  var url = "http://localhost/Knockout/find_knockouts.php?search=math";
  window.location.href = url;
}
function histSearch(){
  var url = "http://localhost/Knockout/find_knockouts.php?search=hist";
  window.location.href = url;
}
function englSearch(){
  var url = "http://localhost/Knockout/find_knockouts.php?search=engl";
  window.location.href = url;
}
function sciSearch(){
  var url = "http://localhost/Knockout/find_knockouts.php?search=sci";
  window.location.href = url;
}
function langSearch(){
  var url = "http://localhost/Knockout/find_knockouts.php?search=lang";
  window.location.href = url;
}
