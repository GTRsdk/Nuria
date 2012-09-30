<?php
/*
 * Project: Nuria
 * File: install/templates/server.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 4: Server Settings</h2>
    <progress value="4" max="6">
             <span>60</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="server">
        <table cellpadding="5" cellspacing="0">
            <tr>
                <td><label title="The name of your Game">Game Name</label></td>
                <td><input type="text" class="input" name="game_name" id="game_name" required value="Nuria"></td>
            </tr>
            <tr>
                <td><label title="Change only if you changed the design folder">Style URL</label></td>
                <td><input type="url" class="input" name="style_url" id="style_url" required value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/design/"></td>
            </tr>
            <tr>
                <td><label title="Change only if you changed the javascript folder">Script URL</label></td>
                <td><input type="url" class="input" name="script_url" id="script_url" required value="http://<?php echo $_SERVER['HTTP_HOST']; ?>/design/"></td>
            </tr>
            <tr>
                <td><label title="URL to your forum">Forum URL</label></td>
                <td><input type="url" class="input" name="forum_url" id="forum_url" value="https://github.com/NewOpportunity/Nuria"></td>
            </tr>
            <tr>
                <td><label title="Enable easter design">Easter</label></td>
                <td>
                    <select name="easter">
                        <option value="true">True</option>
                        <option value="false" selected="selected">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label title="Enable winter design">Winter</label></td>
                <td>
                    <select name="winter">
                        <option value="true">True</option>
                        <option value="false" selected="selected">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label title="Enable christmas design">Christmas</label></td>
                <td>
                    <select name="christmas">
                        <option value="true">True</option>
                        <option value="false" selected="selected">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label title="Enable halloween design">Halloween</label></td>
                <td>
                    <select name="halloween">
                        <option value="true">True</option>
                        <option value="false" selected="selected">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label title="Activate only if your server support SMTP">Enable e-mails</label></td>
                <td>
                    <select name="smtp">
                        <option value="true" selected="selected">True</option>
                        <option value="false">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label title="E-mail to send game e-mails">E-mail</label></td>
                <td><input type="email" class="input" name="email" id="email" required value="no-reply@<?php echo $_SERVER['HTTP_HOST']; ?>"></td>
            </tr>
            <tr>
                <td><label title="ulti-Accounting check">Double Login</label></td>
                <td>
                    <select name="double_login">
                        <option value="true">True</option>
                        <option value="false" selected="selected">False</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><center><h3>Extra Settings</h3></center></td>
            </tr>
            <tr>
                <td><label title="Default storage capacity">Storage</label></td>
                <td><input type="number" class="input" name="storage" id="storage" min="1500" step="100" required value="1500"></td>
            </tr>
            <tr>
                <td><label title="Default transport capacity">Transport</label></td>
                <td><input type="number" class="input" name="transport" id="transport" min="500" step="100" required value="500"></td>
            </tr>
            <tr>
                <td><label title="Buildings - construction list size">Town queue</label></td>
                <td><input type="number" class="input" name="town_queue" id="town_queue" min="1" step="1" required value="3"></td>
            </tr>
            <tr>
                <td><label title="Army - construction list size">Army queue</label></td>
                <td><input type="number" class="input" name="army_queue" id="army_queue" min="1" step="1" required value="3"></td>
            </tr>
            <tr>
                <td><label title="Notes length">Notes</label></td>
                <td><input type="number" class="input" name="notes" id="notes" min="200" max="8192" step="50" required value="200"></td>
            </tr>
            <tr>
                <td><label title="Premium notes length">Premium notes</label></td>
                <td><input type="number" class="input" name="premium_notes" id="premium_notes" min="200" max="8192" step="50" required value="8150"></td>
            </tr>
            <tr>
                <td><label title="Duration of a trading route in seconds">Route time</label></td>
                <td><input type="number" class="input" name="route_time" id="route_time" min="60" step="60" required value="604800"></td>
            </tr>
            <!-- Need improve
            <tr>
                <td><label title="Code to put before 'body' tag in all game pages. Don't work full, comprove text in izariam/config/izariam.php">Analytics</label></td>
                <td>
                    <textarea name="analytics" id="analytics" rows="4" cols="15"></textarea>
                </td>
            </tr>
            -->
        </table>
        <br>
        <input type="submit" class="button" value=" Next Step ">
        <input type="hidden" name="server" value="1">
    </form>
</center>