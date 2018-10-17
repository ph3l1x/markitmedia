<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
  */

$email_id = isset($_REQUEST['email_id']) ? (int)$_REQUEST['email_id'] : false;
$customer_id = isset($_REQUEST['customer_id']) ? (int)$_REQUEST['customer_id'] : false;

if(!$customer_id){
    echo 'please select a customer first';
    exit;
}
$email = module_email::get_email($email_id);
if(!count($email) || $email['email_id']!=$email_id){
    $email_id=false;
    $email = false;
}
if(!$email_id){
    // creating a new email
    $can_edit_emails = true;
}else{
    $can_edit_emails = false; // don't want to edit existing email
}

$current_template = isset($_REQUEST['template_name']) ? $_REQUEST['template_name'] : 'email_template_blank';
$find_other_templates = 'email_template_';

$to = module_user::get_contacts(array('customer_id'=>$customer_id));
$bcc = module_config::c('admin_email_address','');

$headers = @unserialize($email['headers']);

if($current_template && !$email_id){
    $template = module_template::get_template_by_key($current_template);
    //todo: replace fields.
    //$replace = module_invoice::get_replace_fields($invoice_id,$invoice);
    if($email['customer_id']){
        $customer_data = module_customer::get_customer($email['customer_id']);
        $replace = module_customer::get_replace_fields($email['customer_id'],false,$customer_data);
        $template->assign_values($replace);
    }
    if($email['job_id']){
        $job_data = module_job::get_job($email['job_id']);
        $replace = module_job::get_replace_fields($email['job_id'],$job_data);
        $template->assign_values($replace);
    }
    if($email['website_id']){
        $website_data = module_website::get_website($email['website_id']);
        $replace = module_website::get_replace_fields($email['website_id'],$website_data);
        $template->assign_values($replace);
    }
    $email['text_content'] = $template->render('html');
    $email['subject'] = $template->replace_description();
}

$options = array(
    'cancel_url' => module_email::link_open(false),
    'complete_url' => module_email::link_open(false),
    'customer_id' => $customer_id,
);
$options = module_email::get_email_compose_options($options);

?>

<?php if($can_edit_emails){ ?>
<form action="" method="post" id="template_change_form">
    <input type="hidden" name="template_name" value="" id="template_name_change">
</form>

<form action="" method="post" enctype="multipart/form-data" id="email_send_form">
    <input type="hidden" name="_process" id="process_tag" value="send_email">
    <input type="hidden" name="options" value="<?php echo base64_encode(serialize($options));?>">
<?php } ?>

<table class="tableclass tableclass_form tableclass_full">

    <?php  if($can_edit_emails && isset($find_other_templates) && strlen($find_other_templates) && isset($current_template) && strlen($current_template)){
        $other_templates = array();
        foreach(module_template::get_templates() as $possible_template){
            if(strpos($possible_template['template_key'],$find_other_templates)!==false){
                // found another one!
                $other_templates[$possible_template['template_key']] = $possible_template['description'];
            }
        }
        if(count($other_templates)>0){
            ?>
            <tr>
                <th>
                    <?php _e('Email Template');?>
                </th>
                <td>
                    <select name="template_name" id="template_name">
                        <option value="email_template_blank"><?php _e('Blank');?></option>
                        <?php foreach($other_templates as $other_template_key => $other_template_name){ ?>
                            <option value="<?php echo htmlspecialchars($other_template_key);?>"<?php echo $current_template==$other_template_key ? ' selected':'';?>><?php echo htmlspecialchars($other_template_name);?></option>
                        <?php } ?>
                    </select>
                    <script type="text/javascript">
                        $(function(){
                           $('#template_name').change(function(){
                               //$('#template_name_change').val($(this).val());
                               //$('#template_change_form')[0].submit();
                               $('#process_tag').val('change_email_template');
                               $('#email_send_form')[0].submit();
                           });
                        });
                    </script>
                </td>
            </tr>
            <?php
        }
    } ?>
    <tr>
        <th class="width1">
            <?php _e('From:');?>
        </th>
        <td>
            <?php if($can_edit_emails){ ?>
            <div id="email_from_view">
            <?php echo htmlspecialchars($options['from_name'] . ' <'.$options['from_email'].'>'); ?> <a href="#" onclick="$(this).parent().hide(); $('#email_from_edit').show(); return false;"><?php _e('edit');?></a>
            </div>
            <div id="email_from_edit" style="display:none;">
            <input type="text" name="from_name" value="<?php echo htmlspecialchars($options['from_name']);?>">
            &lt;<input type="text" name="from_email" value="<?php echo htmlspecialchars($options['from_email']);?>">&gt
            </div>
            <?php }else{
                if(isset($headers['FromEmail'])){
                    echo htmlspecialchars($headers['FromEmail']);
                }
            } ?>
        </td>
    </tr>
    <tr>
        <th>
            <?php _e('To:');?>
        </th>
        <td>
            <?php if($can_edit_emails){ ?>
            <?php
            // drop down with various options, or a blank inbox box with an email address.
            if(count($to) > 1){
            ?>
            <select name="custom_to">
                <!-- <option value=""><?php _e('Please select');?></option> -->
                <?php foreach($to as $t){ ?>
                    <option value="<?php echo htmlspecialchars($t['email']);?>||<?php echo htmlspecialchars($t['name']);?>||<?php echo (int)$t['user_id'];?>"<?php if(isset($to_select)&&$to_select==$t['email'])echo ' selected';?>><?php echo htmlspecialchars($t['email']) . ' - ' . htmlspecialchars($t['name']);?></option>
                <?php } ?>
            </select>
            <?php }else{
                $t = array_shift($to);
                ?>
                <input type="hidden" name="custom_to" value="<?php echo htmlspecialchars($t['email']);?>||<?php echo htmlspecialchars($t['name']);?>">
                    <?php echo htmlspecialchars($t['email']) . ' - ' . htmlspecialchars($t['name']);?>

            <?php } ?>
            <?php }else{
            if(isset($headers['to']) && is_array($headers['to'])){
    foreach($headers['to'] as $to){
        echo $to['email'].' ';
    }
}
            } ?>
        </td>
    </tr>
    <tr>
        <th>
            <?php _e('BCC:');?>
        </th>
        <td>
            <?php if($can_edit_emails){ ?>
            <input type="text" name="bcc" value="<?php echo htmlspecialchars($bcc);?>" style="width:400px">
            <?php }else{if(isset($headers['bcc']) && is_array($headers['bcc'])){
    foreach($headers['bcc'] as $to){
        echo $to['email'].' ';
    }
}}?>
        </td>
    </tr>
    <?php if (class_exists('module_website',false)){ ?>
    <tr>
        <th><?php _e('Related Website:');?></th>
        <td>
            <?php 
            $websites = module_website::get_websites(array('customer_id'=>$customer_id));
            if($can_edit_emails){
                echo print_select_box($websites,'website_id',isset($email['website_id']) ? $email['website_id'] : false,'',true,'name'); 
            }else if(isset($email['website_id']) && $email['website_id']){
                echo isset($websites[$email['website_id']]) ? htmlspecialchars($websites[$email['website_id']]['name']) : _l('Deleted');
            }else{
                _e('N/A');
            }
             ?>
        </td>
    </tr>
    <?php } ?>
    <?php if (class_exists('module_job',false)){ ?>
    <tr>
        <th><?php _e('Related Job:');?></th>
        <td>
            <?php 
            $jobs = module_job::get_jobs(array('customer_id'=>$customer_id));
            if($can_edit_emails){
                echo print_select_box($jobs,'job_id',isset($email['job_id']) ? $email['job_id'] : false,'',true,'name'); 
            }else if(isset($email['job_id']) && $email['job_id']){
                echo isset($jobs[$email['job_id']]) ? htmlspecialchars($jobs[$email['job_id']]['name']) : _l('Deleted');
            }else{
                _e('N/A');
            }
            ?>
        </td>
    </tr>
    <?php } ?>
    <tr>
        <th>
            <?php _e('Subject:');?>
        </th>
        <td>
            <?php if($can_edit_emails){ ?>
            <input type="text" name="subject" value="<?php echo htmlspecialchars($email['subject']);?>" style="width:400px;">
            <?php }else echo htmlspecialchars($email['subject']); ?>
        </td>
    </tr>
    <tr>
        <th>
            <?php _e('Attachment:'); ?>
        </th>
        <td>
            <?php
            // uploado an attachment here, or generate one from a pdf on send.
            // (eg: sending an invoice pdf)
            foreach($email['attachments'] as $uri => $attachment){
                if(is_array($attachment)){
                    if($attachment['preview']){
                        echo '<a href="'.$attachment['preview'].'">';
                    }
                    echo htmlspecialchars($attachment['name']);
                    if($attachment['preview']){
                        echo '</a>';
                    }
                }else{
                    echo htmlspecialchars($attachment);
                }
                echo '<br/>';
            }
            if($can_edit_emails){
            ?>
            <div id="email_attach_holder">
                <div class="dynamic_block">
                    <input type="file" name="manual_attachment[]" value="">
                    <a href="#" class="add_addit" onclick="return seladd(this);">+</a>
                    <a href="#" class="remove_addit" onclick="return selrem(this);">-</a>
                </div>
            </div>
            <script type="text/javascript">
                set_add_del('email_attach_holder');
            </script>
            <?php } ?>
        </td>
    </tr>
    <tr>
        <th>
            <?php _e('Message:'); ?>
        </th>
        <td id="email_message">
            <?php if(!$can_edit_emails){

                if(strlen($email['html_content'])){
                    echo module_security::purify_html($email['html_content']);
                }else{
                    echo forum_text($email['text_content']);
                }

             }else{ ?>
            <textarea name="content" id="email_content_editor" rows="10" cols="30" style="width:450px; height: 350px;"><?php echo htmlspecialchars($email['text_content']); ?></textarea>

                                    <script type="text/javascript" src="<?php echo _BASE_HREF;?>js/tiny_mce3.4.4/jquery.tinymce.js"></script>
<script type="text/javascript">
	$().ready(function() {
		$('#email_content_editor').tinymce({
			// Location of TinyMCE script
			script_url : '<?php echo _BASE_HREF;?>js/tiny_mce3.4.4/tiny_mce.js',

            relative_urls : false,
            convert_urls : false,

			// General options
			theme : "advanced",
            //fullpage,
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,advlist",

			// Theme options
            theme_advanced_buttons1 : "undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,link,unlink,anchor,image,cleanup,code,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell",
			/*theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",*/
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

            height : '300px',
            width : '100%'

		});
	});
</script>
            <?php } ?>
        </td>
    </tr>
    <?php if($can_edit_emails){ ?>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="send" value="<?php _e('Send email');?>" class="submit_button save_button">
        </td>
    </tr>
    <?php } ?>
</table>

<?php if($can_edit_emails){ ?>
</form>
<?php }else{ ?>

<input type="button" name="print" onclick="pop_and_print_email();" value="Print" class="submit_button">
    <script type="text/javascript">
        function pop_and_print_email(){
          var w = window.open();

          var headers =  $("#headers").html();
          var field= $("#field1").html();
          var field2= $("#field2").html();

          var html = "<!DOCTYPE HTML>";
            html += '<html lang="en-us">';
            html += '<head><style></style></head>';
            html += "<body>";
            html += $('#email_message').html();
            html += "</body>";
            w.document.write(html);
            w.window.print();
            w.document.close();
        }
    </script>
<?php } ?>