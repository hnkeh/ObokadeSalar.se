<?php include 'navbar.php'; ?>  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-center"> 
      <h3>Välj universitetshus</h3>
         <div class="house_search_div">
    <form method="POST" action="Logic.php">
    <select name="selected_house" style="float: left;">
    <option value="novahuset">Novahuset</option>
    <option value="langhuset">Långhuset</option>
    <option value="teknikhuset">Teknikhuset</option>
    <option value="forumhuset">Forumhuset</option>
    <option value="prismahuset">Prismahuset P103-P219</option>
    <option value="prismahuset2">Prismahuset P220-P276</option>
    <option value="prismahusetg">Prismahuset Grupprum</option>
    <option value="gymnastikhuset">Gymnastikhuset</option>
    <option value="bilbergskahuset">Bilbegrskahuset</option>
    <option value="campus_uso">Campus USÖ</option>
    <option value="musikskolan">Musikhögskolan</option>
    <option value="bibliotek">Bibliotek Grupprum</option>
    </select>
    <div class="input-group date" style="width: 40%;">
         <input type="text" class="form-control" name="date" value="Idag" >
         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
         </span>
         <input id="search_button" class="btn btn-primary" style="float: right;" type="submit" name="search_button" value="Sök">
         </div>
    </form>
         </div>
      <hr>
    <div id="results">