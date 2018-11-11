var knockoutCount = 0;
var count = 4;
var remId = '';

$(document).ready(function(){
  $(".right").on("click", function(){
    $(".sidebar").toggleClass("show");
  });
  // Get the modal
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
  document.getElementById('addBtn').addEventListener('click',addQuestion);
  document.getElementById('removeLastBtn').addEventListener('click',removeLastQuestion);
  //$('#createForm').on('submit',createSetArray);


});
function addQuestion(){
    var li = document.createElement('LI');
    li.setAttribute("id", "set"+count);


    li.innerHTML ='<div class = "row"><div class = "col col-lg">\
    <input class = "inputbox" type = "text" name = "questions[]" placeholder= "Question or Definition"required>\
    </div> <div class = "col col-lg">\
    <input class ="inputbox" type ="text" name = "answers[]" placeholder="Answer or Term"required>\
    </div></div>';

    document.getElementById('questions').appendChild(li);
    count++;
}
function removeLastQuestion() {
    remId = 'set'+count;
    $('#'+remId).remove();
    count--;
}
/*var li = document.createElement('LI');
li.setAttribute("id", "set"+count);
var div1 = document.createElement('div');
div1.setAttribute("class","row");
var div2 = document.createElement('div');
div2.setAttribute("class","col col-lg");
var input_q = document.createElement('input');
input_q.setAttribute("class", "inputbox");
input_q.setAttribute("type", "text");
input_q.setAttribute("name", "questions[]");
input_q.setAttribute("placeholder", "Question or Definition");
input_q.setAttribute("required","";)
li.appendChild(div1);
li.appendChild(div2);
li.appendChild(input_q);
$("body").append(li);   //using jQuery or*/
