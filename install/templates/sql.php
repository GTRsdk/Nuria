<?php
/*
 * Project: Nuria
 * File: install/templates/sql.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 5: Import Database</h2>
    <progress value="5" max="6">
             <span>80</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="importdb">
        <center>
            <p style="padding: 20px 0px 5px 0px;">
                <font color="red"><strong>Warning!:</strong></font> This can take some time. Do not click, just wait till the next page has been loaded!
            </p>
        </center>
        <br>
        <input type="submit" class="button" value=" Next Step ">
        <input type="hidden" name="importdb" value="1">
    </form>
</center>