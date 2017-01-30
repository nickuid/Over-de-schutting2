<div id="sidebar">
    <div id="navigation">
        <h3>Navigatie</h3>
    </div>
    <div class="button">
        <a href="cms.php?cms_action=show"><p>Profiel wijzigen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=edit"><p>Pagina wijzigen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=addEvent"><p>Evenement toevoegen</p></a>
    </div>
      <div class="button">
        <a href="cms.php?cms_action=checkUsers"><p>Bekijk gebruikers</p></a>
    </div>
    <div class="button">
        <a href="index.php?action=home"><p>Ga terug</p></a>
    </div>
</div>

<style>
    #sidebar{
    width: 200px;
    float: left;
    background-color: #e7e7e7;
    height: 100%;
    min-height: 100%;
    overflow: hidden;
    left: 0;
    top: 0;
    position: absolute;
}
    #navigation
    {
        background-color: #71beba;
        margin-top: 50px;
        height: 30px;
    }
    h3, p
    {
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 10px;
    }
    a
    {
        text-decoration: none;
        color: black;
    }
    .button
    {
        height: 30px;
        margin: 0;
        padding: 0;
        
    }
    .button:hover
    {
        background-color: darkgrey;
        font-size: 17px;

    }
    
</style>