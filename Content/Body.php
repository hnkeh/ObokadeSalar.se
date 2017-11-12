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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">

    </div>
    <div class="col-sm-8 text-center"> 
      <h1>Välj universitetshus</h1>
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