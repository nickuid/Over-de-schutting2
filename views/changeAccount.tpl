<div id="content">
    
    <form action="./model/update_user.php" method="post">
        <table>
               <tr>
                    <td><input type="text" class="textField" placeholder="name" name="name" value="{$result.0.name}" required></td>
                </tr>
                <tr>
                    <td><input type="text" class="textField" placeholder="password" name="password" value="{$result.0.password}" required></td>
                </tr>
                <tr>
                    <td><input type="text" class="textField" placeholder="email" name="email" value="{$result.0.email}" required></td>
                </tr>

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
</style>
