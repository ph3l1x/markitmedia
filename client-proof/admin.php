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
        	<h1>Generate Link</h1>
            <form action="makeLink.php" method="post" />
            <p class="label"><span>Customer/Job Name</span>
            <input class="text" type="text" name="name" />
            </p>
            
            <p class="label"><span>Proof for Front</span>
            <input class="text" type="text" name="front" />
            </p>
            
            <p class="label"><span>Proof for Back (if needed)</span>
            <input class="text" type="text" name="back" />
            </p>
            
            <p class="label"><span>Client's Email</span>
            <input class="text" type="text" name="email" />
            </p>
            
            <p class="label"><span>Sender's Email</span>
            <input class="text" type="text" name="ccemail" />
            </p>
            <input type="submit" style="cursor:pointer;" class="buttons" value="SEND LINK" />
            </form>
            <br />
        </div>
    </div>
</div>
</body>
</html>
