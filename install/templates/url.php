<?php
/*
 * Project: Nuria
 * File: install/templates/url.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 2: Server URL</h2>
    <progress value="2" max="6">
             <span>30</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="config">
        <table cellpadding="5" cellspacing="0">
            <tr>
            	<td><label title="WITH a trailing slash: http://example.com/">Base URL</label></td>
            	<td><input type="url" class="input" name="base_url" id="base_url" style="width:200px;" required value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/"></td>
            </tr>
        </table>
        <br>
        <input type="submit" class="button" value=" Next Step ">
        <input type="hidden" name="config" value="1">
    </form>
</center>