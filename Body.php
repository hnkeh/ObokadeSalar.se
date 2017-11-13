<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="mailto:reception@orebrostudentkar.se?subject=Bokning%20av%20sal">Boka Sal</a></li>
             <li><a href="https://play.google.com/store/apps/details?id=se.obokadesalar.obokadesalar&hl=en">Android app</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-center"> 
      <h3>Välj universitetshus</h3>
    <form method="POST" action="Logic.php">
    <select name="selected_house">
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
    <input class="btn btn-primary" type="submit" name="search_button" value="Sök">
    </form>
      <hr>
    <div id="results">