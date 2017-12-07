<?php include 'navbar.php'; ?>  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-center"> 
      <h3>Skriv in salnamn</h3>
         <div class="house_search_div">
    <form method="POST" action="Logic.php">
    <div class="input-group">
     <input type="text" name="classrooms" placeholder="Ex. L114,N2043,N2035" class="form-control" id="classrooms">
    <input style="margin-top: 1%;" class="btn btn-primary" type="submit" name="single_search_button" value="Sök">
    </div>
    </form>
         </div>
      <hr>
    <div id="results">