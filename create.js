var count = 4;
var remId = '';
$(document).ready(function(){
  document.getElementById('addBtn').addEventListener('click',addQuestion);
  document.getElementById('removeLastBtn').addEventListener('click',removeLastQuestion);
  //MODAL
  
});
function addQuestion(){
    var li = document.createElement('LI');
    li.setAttribute("id", "set"+count);

    li.innerHTML ='<div class = "row"><div class = "col col-lg">\
    <input class ="inputbox" type ="text" id ="question'+ count +'"placeholder= "Question or Definition">\
    </div> <div class = "col col-lg">\
    <input class ="inputbox" type ="text" id ="answer'+ count+'"placeholder="Answer or Term">\
    </div></div>';

    document.getElementById('questions').appendChild(li);
    count++;
}
function removeLastQuestion() {
    remId = 'set'+count;
    $('#'+remId).remove();
    count--;
}
