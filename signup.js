$(document).ready(function(){
  document.getElementById('edBtn').addEventListener('click', educatorSignUp);
  document.getElementById('stBtn').addEventListener('click', studentSignUp);

});
function educatorSignUp(){
  document.getElementById('edBtn').style.visibility ='hidden';
  document.getElementById('stBtn').style.visibility ='hidden';
  document.getElementById('signup1').style.visibility ='hidden';
  document.getElementById('signup2').style.display ='block';

}
function studentSignUp(){
  document.getElementById('edBtn').style.visibility ='hidden';
  document.getElementById('stBtn').style.visibility ='hidden';
  document.getElementById('signup1').style.visibility ='hidden';
  document.getElementById('signup2').style.display ='block';

}
