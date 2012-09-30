<?php
/*
 * Project: Nuria
 * File: install/templates/db.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 1: Database Settings</h2>
    <progress value="1" max="6">
             <span>20</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="database">
        <table cellpadding="5" cellspacing="0">
            <tr>
            	<td><label title="URL to your database host">Hostname</label></td>
            	<td><input type="text" class="input" name="dbhost" id="dbhost" required placeholder="localhost"></td>
            </tr>
            <tr>
                <td><label title="Username to connect to the database">Username</label></td>
                <td><input type="text" class="input" name="dbuser" id="dbuser" required placeholder="root"></td>
            </tr>
            <tr>
                <td><label title="Password to connect to the database">Password</label></td>
                <td><input type="text" class="input" name="dbpass" id="dbpass"></td>
            </tr>
            <tr>
                <td><label title="Name of your database">Database name</label></td>
                <td><input type="text" class="input" name="dbname" required id="dbname"></td>
            </tr>
        </table>
        <br>
        <input type="submit" class="button" value=" Next Step ">
        <input type="hidden" name="database" value="1">
    </form>
</center>