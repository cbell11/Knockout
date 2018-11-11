<?php
session_start();
 ?>
<html>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" integrity="sha384-feJI7QwhOS+hwpX2zkaeJQjeiwlhOP+SdQDqhgvvo1DsjtiSQByFdThsxO669S2D" crossorigin="anonymous"></script><script type = 'text/javascript' src='js/main.js'></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/create.css">
<script type = 'text/javascript' src='js/main.js'></script>
<link href="https://fonts.googleapis.com/css?family=Rammetto+One|Rubik|IBM+Plex+Sans+Condensed" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
<script type="text/javascript" src="jquery.js"></script>

<!--Table Code-->
<script type="text/javascript">
function add_row()
{
 $rowno=$("#qna_table tr").length;
 $rowno=$rowno+2;
 $("#qna_table tr:last").after("<tr id='row"+$rowno+"'><td><input class = 'inputbox' type ='text' name = 'questions[]' placeholder ='Question or Definition' required></td><td><input class = 'inputbox' type = 'text' name = 'answers[]' placeholder ='Answer or Term' required></td><td><button class = 'btn' type ='del_button' onclick = delete_row('row"+$rowno+"')><i class = 'fas fa-trash-alt'></i></button></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}
</script>


<title>Create a new Knockout</title>
<div class = 'container'>
<nav class="navbar navbar-fixed-top navbar-expand-md navbar-dark bg-dark">
  <a id='logo' class="navbar-brand" href="home.php">KNOCKOUT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="myKnockouts.php"><i class="fas fa-user-circle"></i> My Knockouts </a>
      </li>
      <li class="nav-item active mr-auto">
        <a class="nav-link ml-1" href="#"><i class="fas fa-search"></i> Find Knockouts</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link ml-1" href="#"><i class="fas fa-align-left"></i> Data</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link ml-1" href="#"><i class="fas fa-question"></i> Help</a>
      </li>
    </ul>
    <ul class = 'navbar-nav '>
    <li class="nav-item dropdown active">
      <a style = 'float: right;' class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php  if (isset($_SESSION['u_uid'])) {
           echo $_SESSION['u_uid'];
        }?>
      </a>
      <div class="dropdown-menu dropdown-menu-right mr-auto" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Edit account</a>
        <a class="dropdown-item" href="#">Change password</a>
        <a class="dropdown-item" href="#">Delete my account</a>
        <div class="dropdown-divider"></div>
        <form action = 'includes/logout.inc.php' method = "POST">
        <button type = 'submit' name = 'submit' class="dropdown-item" >Logout</button>
      </form>
      </div>
    </li></ul>
  </div>
</nav>
</div>
<header>
  <div class='jumbotron'>
  <div id="wrapper">

  <div id="form_div">
    <form autocomplete="off" id = 'createForm' method="post" action="includes/create.inc.php">
    <input class = 'inputbox' id = 'title' type="text" name="title" value="" placeholder="Name your Knockout...">
    <table id= "qna_table" align=center>
     <tr id="row1">
      <td><input class = 'inputbox' type="text" name="questions[]" placeholder="Question or Definition" required></td>
      <td><input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required></td>
      <td><button class = 'btn' type='del_button' onclick = delete_row('row1')><i class = 'fas fa-trash-alt'></i></button></td>
     </tr>
     <tr id="row2">
      <td><input class = 'inputbox' type="text" name="questions[]" placeholder="Question or Definition" required></td>
      <td><input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required></td>
      <td><button class = 'btn' type='del_button' onclick = delete_row('row1')><i class = 'fas fa-trash-alt'></i></button></td>
     </tr>
    </table>
    <div>
    <input class = 'btn' type="button" onclick="add_row();" value="ADD ROW"><br>
    <input class = 'btn' type="submit" name="submit" value="SUBMIT">
  </form>
    <div class = 'container'>
      <div class="row">
    <div class="col-sm-12" style= "">
        <label>
            <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Math' />
          Math
        </label>
        <label>
            <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Sci' />
             Science
        </label>
        <label>
            <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Lang' />
            Languague
        </label>

          <label>
              <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Hist'/>
            History
          </label>
          <label>
              <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Engl' />
               English
          </label>
          <label>
              <input form = 'createForm' type="radio" class="option-input radio" name="subject" value = 'Other' />
              Other
          </label>
        </div>
  </div>
  </div>

  </div>
</div>
</header>



<!--OLD MODEL
<body>
  <div class = 'container'>
    <ol id = 'questions'>
      <li id = 'set1'>
    <div class = 'row'>
      <div class = 'col col-lg'>
          <input class = 'inputbox' type = 'text' name ='questions[]' placeholder="Question or Definition" required>
      </div>
      <div class = 'col col-lg'>
          <input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required>
      </div>
  </div></li>
  <li id = 'set2'>
    <div class = 'row'>
      <div class = 'col col-lg'>
          <input class = 'inputbox' type = 'text' name ='questions[]' placeholder="Question or Definition" required>
      </div>
      <div class = 'col col-lg'>
          <input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required>

      </div>
    </div></li>
    <li id = 'set3'>
      <div class = 'row'>
        <div class = 'col col-lg'>
            <input class = 'inputbox' type = 'text' name ='questions[]' placeholder="Question or Definition" required>
        </div>
        <div class = 'col col-lg'>
            <input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required>

        </div>
      </div></li>
      <li id = 'set4'>
        <div class = 'row'>
          <div class = 'col col-lg'>
              <input class = 'inputbox' type = 'text' name ='questions[]' placeholder="Question or Definition" required>
          </div>
          <div class = 'col col-lg'>
              <input class = 'inputbox' type = 'text' name ='answers[]' placeholder="Answer or Term" required>
      </form>
          </div>
        </div></li>
  </ol>
  <p id = 'errMessage'><p>
    <div class = 'container'>
    <div class = 'row'>
        <div class ='col-lg' style = 'text-align: center;'>
          <button class = 'btn btn-primary' id ='addBtn' type="button">Add Question</button>
        </div>
        <div class='col-lg' style = 'text-align: center;'>
        </div>
        <div class='col-lg' style = 'text-align: center;'>
          <button class = 'btn btn-danger' id ='removeLastBtn' type="button">Remove Last Question</button>
        </div>
  </div>
</div>
    <div style = 'text-align: center;'>
      <input class = 'btn btn-success' id ='submit' type="submit" name = 'submit' value ='Create' form = 'createForm'></input>
    </div>-->
