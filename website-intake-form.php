
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
<?php
//get vars
$page = 0;
$pageName = 'Website Intake Form';
$title = 'Markit Media - Scottsdale Printing, Graphics, Website Design, SEO';
$description = "Call 480.245.4287 Scottsdale's Best Print Shop, Signs, Web Marketing, Graphic Design, Website Developer & (SEO) Search Engine Optimization in Old Town Scottsdale Serving the Phoenix Area";
$keywords = "Scottsdale Web Design, Web Development Phoenix, LAMP Developer Scottsdale, Magento ECommerce Scottsdale, Scottsdale Printing, Scottsdale Graphic Design, Search Engine Optimization Scottsdale, Marketing Scottsdale, Php Programming Scottsdale, magento website development phoenix,";
$bottomDescription = "<p>Markit Media is a one stop shop for all your Web, Graphic, Print and Marketing needs. We are a full service web design company in the United States. We are located here in the valley in Scottsdale Arizona. We offer informational and eCommerce web sites. Markit Media can help promote your small business online. We build professional, custom designed, websites. We have packages for new business that include logo and brand identity, 1000 business cards, 1000 tri-fold brochures, custom designed letterhead, and 5 page informative style website.</p>
                	  <p>Markit Media, Scottsdale Web Design, Scottsdale Marketing, Scottsdale Web Developer, Scottsdale Print, Scottsdale Printing, Scottsdale Graphic Design, Professional Marketing Scottsdale AZ, Professional Marketing Phoenix AZ, Professional Marketing Arizona, Professional Web design Scottsdale Arizona, Professional Web Design Phoenix Arizona, Professional Web Design Arizona, Professional Printing Scottsdale Arizona, Professional Printing Phoenix Arizona, Professional Printing Arizona, Professional Business Cards Scottsdale Arizona, Professional Business Cards Phoenix Arizona, Professional Business Cards Arizona.</p>";
require_once('header.php');
?>

<div class="wrapper">
   <div class="">
   <?php
// require the autoloaders
require_once 'constant-contact/src/Ctct/autoload.php';
require_once 'constant-contact/vendor/autoload.php';

use Ctct\Components\Contacts\Contact;
use Ctct\ConstantContact;
use Ctct\Exceptions\CtctException;

// Enter your Constant Contact APIKEY and ACCESS_TOKEN
define("APIKEY", "8jx5eym8ppapj6b2w8385w5s");
define("ACCESS_TOKEN", "875f7c02-01f1-4e76-b5c5-449314b04d52");

$cc = new ConstantContact(APIKEY);

// attempt to fetch lists in the account, catching any exceptions and printing the errors to screen
try {
    $lists = $cc->listService->getLists(ACCESS_TOKEN);
} catch (CtctException $ex) {
    foreach ($ex->getErrors() as $error) {
        print_r($error);
    }
    if (!isset($lists)) {
        $lists = null;
    }
}

// check if the form was submitted
if (isset($_POST['email']) && strlen($_POST['email']) > 1) {
    $action = "Getting Contact By Email Address";
    try {
        // check to see if a contact with the email address already exists in the account
        $response = $cc->contactService->getContacts(ACCESS_TOKEN, array("email" => $_POST['email']));
        
        // create a new contact if one does not exist
        if (empty($response->results)) {
            $action = "Creating Contact";

            $contact = new Contact();
            $contact->addEmail($_POST['email']);
            $contact->addList("1756198921");
            $contact->first_name = $_POST['first_name'];
           

            /*
             * The third parameter of addContact defaults to false, but if this were set to true it would tell Constant
             * Contact that this action is being performed by the contact themselves, and gives the ability to
             * opt contacts back in and trigger Welcome/Change-of-interest emails.
             *
             * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
             */
            $returnContact = $cc->contactService->addContact(ACCESS_TOKEN, $contact, true);

            // update the existing contact if address already existed
        } else {
            $action = "Updating Contact";

            $contact = $response->results[0];
            if ($contact instanceof Contact) {
                $contact->addList("1756198921");
                $contact->first_name = $_POST['first_name'];
              

                /*
                 * The third parameter of updateContact defaults to false, but if this were set to true it would tell
                 * Constant Contact that this action is being performed by the contact themselves, and gives the ability to
                 * opt contacts back in and trigger Welcome/Change-of-interest emails.
                 *
                 * See: http://developer.constantcontact.com/docs/contacts-api/contacts-index.html#opt_in
                 */
                $returnContact = $cc->contactService->updateContact(ACCESS_TOKEN, $contact, true);
            } else {
                $e = new CtctException();
                $e->setErrors(array("type", "Contact type not returned"));
                throw $e;
            }
        }

        // catch any exceptions thrown during the process and print the errors to screen
    } catch (CtctException $ex) {
        echo '<span class="label label-important">Error ' . $action . '</span>';
        echo '<div class="container alert-error"><pre class="failure-pre">';
        print_r($ex->getErrors());
        echo '</pre></div>';
        die();
    }
}
?>

<body>
    <style>
    .clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
* html .clearfix             { zoom: 1; } /* IE6 */
*:first-child+html .clearfix { zoom: 1; } /* IE7 */
        @media(min-width: 749px){
            .right-gift-card, .left-gift-card{
                width: 50%;
                float: left;
            }
        }
        .control-group {
            margin-bottom: .7rem;
           
        }
        .control-group.submit{
            margin-top: 1.2rem;
        }
        .well {
            background: #f5f5f5;
          
            padding: 2rem 1rem 1rem 1rem;
        }
        
        .btn.btn-primary {
            background:#ec5051;
            border-color: #c94541;
        }
        #submitContact {
           padding: 1rem 4.6rem 0rem 0
        }
        h1{
            font-size: 3.5em;
        }
    </style>
<div class="well clearfix">
    <!-- Success Message -->
<?php if (isset($returnContact)) {
    echo '<div class="container alert-success" style="width: 100%">';
    echo '<h1>Thank you for contacting us! </h1>';
    echo '</div>';
} ?>

<!-- Toma -->
  <div class="left-gift-card">
    <h1>Congratulations<br> on your $25 gift card! </h1>
    <h4> Fill this form and we’ll send it to your email. (No strings attached)</h4>

    <form class="form-horizontal" name="submitContact" id="submitContact" method="POST" action="free-25-dollar-gift-card.php">
       
        <div class="control-group">
            <label class="control-label" for="first_name"></label>

            <div class="controls">
                <input type="text" id="first_name" name="first_name" class="form-control " placeholder="Name">
            </div>
        </div>
       
        <div class="control-group">
            <label class="control-label" for="email"></label>

            <div class="controls">
                <input type="email" id="email" name="email"   class="form-control"  placeholder="Email Address">
            </div>
        </div>
        
        
        <div class="control-group submit">
            <label class="control-label">
                <div class="controls">
                    <input type="submit" value="Submit" class="btn btn-primary"/>
                </div>
        </div>
    </form>
    </div><!-- left -->
    <div class="right-gift-card">
        <img src="images/mail.png">
    </div>
</div>



   </div>
</div>


<div id="content">
	<div id="contentTop"></div>
    <div id="contentBody">
    	<div class="wrapper">
        	<div class="welcome">

            

    
<?php
require_once('footer.php');
?>