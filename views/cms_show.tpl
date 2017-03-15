<div id="content">
    <form action="./model/update_user.php" method="post">
    <table>
      <input type="checkbox" name="delid[]" value="*"> delete all?
    {foreach from=$result item=oneItem}

                 <tr>
                    <td><input type="text" class="input" placeholder="id" name="myid[]" value="{$oneItem.id}" readonly="1" required hidden="hidden"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="delid[]" value="{$oneItem.id}"> <input type="text" class="input" placeholder="name" name="myname[]" value="{$oneItem.name}" required></td>

                <td><select class="input" name="mystatus[]">
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
