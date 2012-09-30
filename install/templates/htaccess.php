<?php
/*
 * Project: Nuria
 * File: install/templates/htaccess.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 3: Server URL</h2>
    <progress value="3" max="6">
             <span>40</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="htaccess">
        <table cellpadding="5" cellspacing="0">
            <tr>
            	<td><label title="If you are installing the game on a subfolder put here the name WITH the training slash (/nuria/)">Game subfolder</label></td>
            	<td><?php echo $_SERVER['HTTP_HOST']; ?>/ <input type="text" class="input" name="subfolder" id="subfolder" style="width:200px;" value=""></td>
            </tr>
        </table>
        <br>
        <input type="submit" class="button" value=" Next Step ">
        <input type="hidden" name="htaccess" value="1">
    </form>
</center>