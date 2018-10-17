<?php
//grab vars
$f = $_GET['f'];
$b = $_GET['b'];
$j = $_GET['j'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>MarkIT Media - Print Proof Form</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="main">
    	<div id="logo">
        	<img src="images/logo.png" width="739" height="149" border="0" />
        </div>
        <div class="contentWrapper">
        	<h1>Job: <?php echo $j; ?></h1>
            <p>Attached is a proof of the order you have placed. We do our best to provide perfection on every item we produce.</p>
            <p>To help ensure we provide the quality you expect please review and follow proofing steps below:</p>
        </div>
        <img src="images/step1.png" width="426" height="44" border="0" />
        <div class="contentWrapper">
        	<div id="proof1">
            	<p>Front</p>
                <a href="Client_Proof/<?php echo $f; ?>" target="_blank"><img src="Client_Proof/<?php echo $f; ?>" width="334" height="209" border="0" /></a>
                <p class="small">click to enlarge</p>
            </div>
            <div id="proof2">
            	<p>Back</p>
                <?php if($b) { ?>
                 <a href="Client_Proof/<?php echo $b; ?>" target="_blank"><img src="Client_Proof/<?php echo $b; ?>" width="334" height="209" border="0" /></a>
                <?php } else { ?>
				<img src="images/blank.jpg" width="334" height="209" border="0" />
                <?php } ?>
                <p class="small">click to enlarge</p>
            </div>
            <div class="check">
            	<input id="check1" onclick="document.getElementById('check1').disabled=true" class="checkbox" type="checkbox" name="proof" />
                <p>I have reviewed both sides of my print proof.</p>
            </div>
            <div class="clear"></div>
        </div>
        <div id="disabled1" class="disabled"></div>
        <div id="step2">
        	<form action="email_function.php" method="post" />
            <input type="hidden" name="job" value="<?php echo $j; ?>" />
            <input type="hidden" name="front" value="<?php echo $f; ?>" />
            <?php if (!$b) { ?>
            	<input type="hidden" name="back" value="blank.jpg" />
            <?php } else { ?>
            	<input type="hidden" name="back" value="<?php echo $b; ?>" />
            <?php } ?>
            <img src="images/step2.png" width="426" height="44" border="0" />
            <div class="contentWrapper">
            	<div class="check">
                    <input class="checkbox" type="checkbox" name="proof" />
                    <p>I confirm that all contact information (email, phone, address, etc) is correct.</p>
            	</div>
                <div class="check">
                    <input class="checkbox" type="checkbox" name="proof" />
                    <p>I have checked the spelling on all text.</p>
            	</div>
                <div class="check">
                    <input class="checkbox" type="checkbox" name="proof" />
                    <p>The colors and design are according to my specifications.</p>
            	</div>
            </div>
        </div>
        <img src="images/step3.png" width="426" height="44" border="0" />
        <div class="contentWrapper">
        	<p>I have carefully examined Markit Media's proof and determined that the proof is ready for press. I understand that my product will not be printed until this form is completed. Markit Media is not responsible for any errors that have been approved in the above form. Timely completion of this proof form will ensure a quick turn-around time for project. If corrections need  to be made to above proof DO NOT APPROVE FOR PRESS. Click the corrections button and give description of the necessary corrections.</p>
        </div>
        <p align="center" style="margin-bottom:20px;"></p>
        <input style="float:left; margin-left:100px;" type="submit" style="cursor:pointer;" class="buttons" value="APPROVE FOR PRESS" />
        </form>
        <form style="width:300px; float:left;" action="corrections.php" method="post">
            <input type="hidden" name="job" value="<?php echo $j; ?>" />
            <input type="hidden" name="front" value="<?php echo $f; ?>" />
            <?php if (!$b) { ?>
                <input type="hidden" name="back" value="blank.jpg" />
            <?php } else { ?>
                <input type="hidden" name="back" value="<?php echo $b; ?>" />
            <?php } ?>
            
            <input type="submit" style="cursor:pointer;" class="buttons" value="CORRECTIONS NEEDED" />
 		</form>
        <br style="clear:both;" />
        <p align="center" style="margin-bottom:20px;" >&nbsp;</p>
    </div>
</div>
</body>
</html>
