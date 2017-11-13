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