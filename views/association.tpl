<div id="content">
    <h1>Pagina wijzigen</h1>
    <p>Content:</p>
       <table>
           <tr>
               <td>name</td>
               <td>city</td>
           </tr>
        </table>
        <hr>
        <table>
        {foreach from=$result item=oneItem}
           <tr>
                <td>{$oneItem.name}</td>
                <td>{$oneItem.city}</td>

           </tr>

        {/foreach}
    </table>
    
</div>
<style>
#content
{
    margin-left: 200px;
}
</style>



