<?php

if( ! defined( 'ABSPATH' ) ) exit; 

/* Include Class file. */
require get_parent_theme_file_path( '/inc/include/custom.cls.php' );

/* Include Custom Post Type file. */
require get_parent_theme_file_path( '/inc/include/custom-posttype.php' );

/* Object for a class */
$FunctionOBJ	=	new WPCustomClass();

/* Call Function for Add Option Page in Admin Panel */
WPCustomClass::WPOptionPage();


add_action( 'wp_ajax_act_store_contact_form_data', 'cf_store_contact_form_data' );
add_action( 'wp_ajax_nopriv_act_store_contact_form_data', 'cf_store_contact_form_data' );
function cf_store_contact_form_data()
{	
	if( isset($_POST['txtfullname']) && isset($_POST['txtemail']) && isset($_POST['txtaboutproject']) && isset($_POST['g-recaptcha-response']) && isset($_POST['action']) && $_POST['action'] == "act_store_contact_form_data" )
	{
		$full_name 			= $_POST['txtfullname'];
	    $email_address		= $_POST['txtemail'];
	    $about_project		= $_POST['txtaboutproject'];
	    $recaptcha_secret 	= '6LdTi10qAAAAABSG1pQ-Cp409EypR0wHjHXd4kD3';
	    $recaptcha_response = $_POST['g-recaptcha-response'];

	    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
	    $captcha_success = json_decode($verify);

	    if ($captcha_success->success == false) 
	    {
	    	$output = array(
	    		"status"	=>	0,
	    		"message"	=>	"reCAPTCHA verification failed."
	    	);
	    }
	    else
	    {
	    	global $wpdb;
        	$table_name = "wp_db7_forms";

        	$form_serialize_data = serialize(array(
        		"full-name"		=>	$full_name,
        		"your-email"	=>	$email_address,
        		"about-project"	=>	$about_project
        	));

        	$form_arr = array(
	            "form_post_id"  =>  740,
	            "form_value"    =>  $form_serialize_data,
	            "form_date"     =>  date("Y-m-d H:i:s")
	        );

	        if( $wpdb->insert($table_name, $form_arr) )
	        {
	        	/*$to = 'hitesh.wp@gmail.com';
	            $subject = 'Naksh Technology inquiry';
	            $body = '<table cellspacing="0" cellpadding="0" dir="ltr" border="1"
	            style="table-layout: fixed; font-size: 10pt; font-family: Arial; width: 0px; border-collapse: collapse; border: none;">
	            <colgroup>
	              <col
	                width="100">
	              <col width="100">
	              <col width="100">
	              <col width="100">
	            </colgroup>
	            <tbody>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; vertical-align: middle; font-size: 14pt; font-weight: bold; border: 0;"
	                  rowspan="2" colspan="4">
	                  <div style="max-height: 42px;">Contact us page</div>
	                </td>
	              </tr>
	              <tr style="height: 21px;"></tr>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; padding: 2px 10px; vertical-align: bottom; border: 1px solid rgb(204, 204, 204);"
	                  rowspan="1" colspan="4">Name : '.$form_data["yourname"].'</td>
	              </tr>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; padding: 2px 10px; vertical-align: bottom; border: 1px solid rgb(204, 204, 204);"
	                  rowspan="1" colspan="4">Contact number : '.$form_data["contactnumber"].'</td>
	              </tr>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; padding: 2px 10px; vertical-align: bottom; border: 1px solid rgb(204, 204, 204);"
	                  rowspan="1" colspan="4">Email : '.$form_data["emailadddress"].'</td>
	              </tr>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; padding: 2px 10px; vertical-align: bottom; border: 1px solid rgb(204, 204, 204);"
	                  rowspan="1" colspan="4">Company Name : '.$form_data["companyname"].'</td>
	              </tr>
	              <tr
	                style="height: 21px;">
	                <td
	                  style="overflow: hidden; padding: 2px 10px; vertical-align: bottom; border: 1px solid rgb(204, 204, 204);"
	                  rowspan="1" colspan="4">Message or comment : '.$form_data["message"].'</td>
	              </tr>
	            </tbody>
	          </table>';
	            $headers = array('Content-Type: text/html; charset=UTF-8');

	            wp_mail( $to, $subject, $body, $headers );*/
		    	$output = array(
		    		"status"	=>	1,
		    		"message"	=>	"Your detail has been successfully send to us!."
		    	);
		    }
			else
		    {
		    	$output = array(
		    		"status"	=>	0,
		    		"message"	=>	"Something went wrong!."
		    	);
		    }
	    }
	}
	else
    {
    	$output = array(
    		"status"	=>	1,
    		"message"	=>	"perameters are missing!."
    	);
    }

	echo json_encode($output); die;
}