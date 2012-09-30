<?php
/*
 * Project: Nuria
 * File: install/templates/finish.php
 * Edited: 30/09/2012
 * By: Ink2Inv
 * Info: izariam@gmail.com
 */
?>
<center>
    <h2>Step 6: Finish</h2>
    <progress value="6" max="6">
             <span>100</span>%
    </progress>
    <br>
    <br>
    <form action="install.php" method="post" id="finish">
        <center>
            <p style="padding: 20px 0px 5px 0px;">
                <font color="red" title="If you don't click, server don't work"><strong>Important!:</strong></font> Click the "Finish" button to finish the install and start to play.
                <br>
                <br>
                And remenber <strong>delete install folder</strong>.
            </p>
        </center>
        <br>
        <input type="submit" class="button" value=" Finish ">
        <input type="hidden" name="finish" value="1">
    </form>
</center>