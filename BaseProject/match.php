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
                    <div class="resultPattern"> 
                        <?php
                            $pattern = stripslashes($_POST['pattern']);
                             print $pattern;
                        ?>
                    </div>
                    
                    <div class="fieldHeadline">Your Expression(s) to match:</div>

                    <?php
                         $i = 1;
                         $paramName = "match_" . $i;
                         while ($_POST[$paramName] != "") {
                             $expression = stripslashes($_POST[$paramName]);
                             $i++;
                             $paramName = "match_" . $i;

                             if (preg_match($pattern, $expression, $matches)) { ?>
               
                    <div class="resultMatch">
                             <?php 
                                 print $expression; + "<br />";
                             ?>                                   
                    </div>
                    <div class="resultFlag">
                         <img src="myicons/Flag_greed.png" title="Match" border="0" />    
                    </div>
                    <div class="resultClear"></div>
                             <?php    
                             } else {
                             ?>
                    <div class="resultNoMatch">
                             <?php
                                 print $expression; + "<br />";
                             ?>             
                    </div>
                    <div class="resultFlag">
                         <img src="myicons/Flag_red.png" title="No Match" border="0" />    
                    </div>
                    <div class="resultClear"></div>                    
                             <?php
                             }                              
                             
                         }
                     ?>                    
                </div>
            </div>            
            
            <div class="buttonContainer">
                <div class="buttonPanelLeft">
                    <input type="button" id="btnBack" class="buttonStyle" value=" Back " onclick="history.go(-1)" />                
                </div>        
                <div class="buttonPanelClear"></div>        
            </div>    
        </form>        
        
       
    </body>
</html>