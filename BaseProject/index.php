<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>
        
        <div class="headlineContainer">
            <h3>Thank you for visiting ...</h3>
            <h2>pattern-matching.de</h2>            
        </div>
        
        <form>         
            <div class="main">
                <div class="textwrapper">
                    <div class="fieldHeadline">Your Pattern:</div>        

                    <textarea rows="3" cols="80" id="pattern" maxlength="256"  onfocus="setTextAreaActive('pattern');" onblur="setTextAreaInactive('pattern')"></textarea>
                    <div class="fieldHeadline">Your Expression(s) to match:</div>
                    <div id="input1" class="clonedInput">                 
                        <textarea rows="3" cols="80" id="match_1" name="match_1" maxlength="256"  onfocus="setTextAreaActive('match_1');" onblur="setTextAreaInactive('match_1')"></textarea>
                    </div>
                </div>

                <?php
                // put your code here
                ?>
            </div>
            
            
            <div class="buttonContainer">
                <div class="buttonPanelLeft">
                    <input type="button" id="btnAdd" class="buttonStyle" value=" + " />
                    <input type="button" id="btnDel" class="buttonStyle" value=" - " />                   
                </div>
                <div class="buttonPanelRight">
                    <input type="submit" id="btnMatch" class="buttonStyle" value=" Match " />
                </div>
                <div class="buttonPanelClear" />        
            </div>    
        </form>              
       
    </body>
</html>