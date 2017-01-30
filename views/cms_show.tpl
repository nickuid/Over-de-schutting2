<div id="content">
    <form action="./model/update_user.php" method="post">
    <table>
    {foreach from=$result item=oneItem}
                <tr>
                    <td><input type="text" class="input" placeholder="name" name="name" value="{$oneItem.name}" required></td>
                </tr>
                <tr>
                <td><select name="status" class="input" name="status">
                      <option value="{$oneItem.status}">Momenteel: {$oneItem.status} </option>
                      <option value="afgewezen">Afgewezen</option>
                      <option value="goedgekeurd">Goedgekeurd</option>
                    </select></td>
                </tr>
                {/foreach}
                <tr>
                    <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
                </tr>
            
            

    </table>
    
</form>
</div>
<style>
    #content
    {
        margin-left: 200px;
    }
    .input
    {
       width: 250px; 
    }
    
</style>
