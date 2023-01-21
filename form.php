<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$cmsaid=$_SESSION['ccmsaid'];
$username=$_POST['sublabel_48_first'];
$username2=$_POST['sublabel_48_last'];label_34
$uadd=$_POST[ `label_11`];
$idproof1=$_POST[`label_10`];
$idproof2=$_POST[`label_0`];
$idproof3=$_POST[`label_8`];
$idproof4=$_POST[`label_7`];
$mobilenumber=$_POST[`label_34`];
$email=$_POST['label_3'];
$mname=$_POST[`label_35`];
$oadd=$_POST[`label_16`];
$artwork=$_POST[`artwork description`];
$works1=$_POST[`worksample1`];
$works2=$_POST[`worksample2`];
$works3=$_POST[`worksample3`];
$works4=$_POST[ `worksample4`];
$demo=$_POST[`demo`];
$tech=$_POST[`technique`];
$entryid=mt_rand(100000000, 999999999);

 $query=mysqli_query($con,"INSERT INTO `tblartist`(`artist_id`, `first name`, `last name`, `business name`, `address`, `city`, `state`, `pincode`, `mobile phone`, `email`, `media`, `other media`, `artwork description`, `worksample1`, `worksample2`, `worksample3`, `worksample4`, `demo`, `technique`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]','[value-18]','[value-19]')");

    if ($query) {
echo '<script>alert("User Detail has been added.")</script>';
echo "<script>window.location.href ='add-users.php'</script>";

  }
  else
    {
 echo '<script>alert("Something Went Wrong. Please try again.")</script>';       
    }

  
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>WMA User Details</title>
    

    <link rel="apple-touch-icon" href="apple-icon.png">
  


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="add-users.php">User Detail</a></li>
                            <li class="active">Add</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>User</strong><small> Details</small></div>
                            <form name="computer" method="post" action="">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="card-body card-block">
 
                                <div class="form-group"><form class="jotform-form" action="https://submit.jotform.com/submit/230065487271456/" method="post" enctype="multipart/form-data" name="form_230065487271456" id="230065487271456" accept-charset="utf-8" autocomplete="on"><input type="hidden" name="formID" value="230065487271456" /><input type="hidden" id="JWTContainer" value="" /><input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <div class="formLogoWrapper Left">
      <img loading="lazy" class="formLogoImg" src="Logo copy.png" height="160" width="160">
      
    </div>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
<?php }  ?>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.38549" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.38549" type="text/javascript"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/imageinfo.js?v=3.3.38549" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/file-uploader/fileuploader.js?v=3.3.38549"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

	JotForm.init(function(){
	/*INIT-START*/
if (window.JotForm && JotForm.accessible) $('input_11').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_10').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_10', 'Type here...' );
      JotForm.description('input_10', 'Where you want to receive WMA Studio mail.');
if (window.JotForm && JotForm.accessible) $('input_0').setAttribute('tabindex',0);
      JotForm.description('input_0', 'Where you live.');
if (window.JotForm && JotForm.accessible) $('input_7').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_9').setAttribute('tabindex',0);
      JotForm.description('input_9', 'Where we can reach you.');
if (window.JotForm && JotForm.accessible) $('input_34').setAttribute('tabindex',0);
      JotForm.description('input_34', 'Where you can be reached for last minute updates.');
if (window.JotForm && JotForm.accessible) $('input_3').setAttribute('tabindex',0);
      JotForm.description('input_3', 'Used only for WMA Studios.');
if (window.JotForm && JotForm.accessible) $('input_35').setAttribute('tabindex',0);
      JotForm.description('input_35', 'If you would like the We Make Artist website to link to your site.');
      JotForm.description('input_16', 'If no media apply, select OTHER');
if (window.JotForm && JotForm.accessible) $('input_17').setAttribute('tabindex',0);
      JotForm.description('input_17', 'Describe OTHER');
if (window.JotForm && JotForm.accessible) $('input_18').setAttribute('tabindex',0);
      JotForm.setCustomHint( 'input_18', 'Type here...' );
      JotForm.description('input_18', 'Provide a description of your artwork and how it was created.');
      JotForm.description('input_28', 'Please provide .jpg photo of work that is 300 dpi or higher.');
      JotForm.description('input_29', 'Please provide .jpg photo of work that is 300 dpi or higher.');
      JotForm.description('input_31', 'Please provide .jpg photo of work that is 300 dpi or higher.');
      JotForm.description('input_30', 'Please provide .jpg photo of work that is 300 dpi or higher.');
      JotForm.description('input_21', 'Demo done within your booth at times of your choice.');
if (window.JotForm && JotForm.accessible) $('input_26').setAttribute('tabindex',0);
      JotForm.description('input_26', 'Specify your technique or craft.');
      JotForm.alterTexts({"confirmClearForm":"Are you sure you want to clear the form","lessThan":"Your score should be less than"});
      setTimeout(function() {
          JotForm.initMultipleUploads();
      }, 2);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([{"description":"Where you want to receive WMA Studio mail.","name":"city","qid":"0","text":"City:","type":"control_textbox"},{"name":"submit","qid":"1","text":"Submit","type":"control_button"},null,{"description":"Used only for WMA Studio information.","name":"email","qid":"3","text":"E-mail:","type":"control_textbox"},null,null,null,{"name":"zipCode","qid":"7","text":"Zip code:","type":"control_textbox"},{"name":"state","qid":"8","text":"State:","type":"control_dropdown"},{"description":"Where we can reach you.","name":"businessPhone","qid":"9","text":"Business Phone:","type":"control_textbox"},{"description":"Where you want to receive WMA Studio mail.","name":"address","qid":"10","text":"Address:","type":"control_textarea"},{"name":"businessName","qid":"11","text":"Business Name:","type":"control_textbox"},null,null,null,null,{"description":"If no media apply, select OTHER","name":"media","qid":"16","text":"Media:","type":"control_checkbox"},{"description":"Describe OTHER","name":"otherMedia","qid":"17","text":"Other Media:","type":"control_textbox"},{"description":"Provide a description of your artwork and how it was created.","name":"artworkDescription","qid":"18","text":"Artwork Description:","type":"control_textarea"},null,null,{"description":"Demo done within your booth at times of your choice.","name":"demo","qid":"21","text":"Demo:","type":"control_radio"},null,null,null,null,{"description":"Specify your technique or Art.","name":"technique","qid":"26","text":"Technique:","type":"control_textbox"},null,{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample","qid":"28","text":"Work Sample #1:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample29","qid":"29","text":"Work Sample #2:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample30","qid":"30","text":"Work Sample #4:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample31","qid":"31","text":"Work Sample #3:","type":"control_fileupload"},null,null,{"description":"Where you can be reached for last minute Art Festival updates.","name":"mobilePhone","qid":"34","text":"Mobile Phone:","type":"control_textbox"},{"description":"If you would like the We Make Artist website to link to your site.","name":"website","qid":"35","text":"Website:","type":"control_textbox"},null,null,null,null,{"name":"pleaseGive","qid":"40","text":"Please give an additional description of your work, including information about the process used to create your artwork.","type":"control_text"},null,null,null,null,{"name":"wouldYou","qid":"45","text":"Would you be interested in doing a demonstration?","type":"control_text"},{"name":"ifYes","qid":"46","text":"If yes, what technique or craft would you be demonstrating?","type":"control_text"},{"name":"clickTo","qid":"47","text":"Artist Registration Form","type":"control_head"},{"name":"name","qid":"48","text":"Name","type":"control_fullname"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([{"description":"Where you want to receive WMA mail.","name":"city","qid":"0","text":"City:","type":"control_textbox"},{"name":"submit","qid":"1","text":"Submit","type":"control_button"},null,{"description":"Used only for WMA Studio.","name":"email","qid":"3","text":"E-mail:","type":"control_textbox"},null,null,null,{"name":"zipCode","qid":"7","text":"Zip code:","type":"control_textbox"},{"name":"state","qid":"8","text":"State:","type":"control_dropdown"},{"description":"Where we can reach you.","name":"businessPhone","qid":"9","text":"Business Phone:","type":"control_textbox"},{"description":"Where you want to receive WMA mail.","name":"address","qid":"10","text":"Address:","type":"control_textarea"},{"name":"businessName","qid":"11","text":"Business Name:","type":"control_textbox"},null,null,null,null,{"description":"If no media apply, select OTHER","name":"media","qid":"16","text":"Media:","type":"control_checkbox"},{"description":"Describe OTHER","name":"otherMedia","qid":"17","text":"Other Media:","type":"control_textbox"},{"description":"Provide a description of your artwork and how it was created.","name":"artworkDescription","qid":"18","text":"Artwork Description:","type":"control_textarea"},null,null,{"description":"Demo done within your booth at times of your choice.","name":"demo","qid":"21","text":"Demo:","type":"control_radio"},null,null,null,null,{"description":"Specify your technique or craft.","name":"technique","qid":"26","text":"Technique:","type":"control_textbox"},null,{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample","qid":"28","text":"Work Sample #1:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample29","qid":"29","text":"Work Sample #2:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample30","qid":"30","text":"Work Sample #4:","type":"control_fileupload"},{"description":"Please provide .jpg photo of work that is 300 dpi or higher.","name":"workSample31","qid":"31","text":"Work Sample #3:","type":"control_fileupload"},null,null,{"description":"Where you can be reached for last minute WMA Studio updates.","name":"mobilePhone","qid":"34","text":"Mobile Phone:","type":"control_textbox"},{"description":"If you would like the We Make Artist website to link to your site.","name":"website","qid":"35","text":"Website:","type":"control_textbox"},null,null,null,null,{"name":"pleaseGive","qid":"40","text":"Please give an additional description of your work, including information about the process used to create your artwork.","type":"control_text"},null,null,null,null,{"name":"wouldYou","qid":"45","text":"Would you be interested in doing a demonstration?","type":"control_text"},{"name":"ifYes","qid":"46","text":"If yes, what technique or craft would you be demonstrating?","type":"control_text"},{"name":"clickTo","qid":"47","text":"Artist Registration Form","type":"control_head"},{"name":"name","qid":"48","text":"Name","type":"control_fullname"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.38549" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.38549" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
/*PREFERENCES STYLE*/
.formLogoWrapper.Left
 {
        background-image: linear-gradient(to right, rgb(65, 64, 64) , rgb(26, 26, 25));
        background-repeat: no-repeat;
      }
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
    }
  
    .form-all {
      color: #2C3345;
    }
    .form-header-group .form-header {
      color: #2C3345;
    }
    .form-header-group .form-subHeader {
      color: #2C3345;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label,
    span.FITB .qb-checkbox-label,
    span.FITB .qb-radiobox-label,
    span.FITB .form-radio label,
    span.FITB .form-checkbox label,
    [data-blotid][data-type=checkbox] [data-labelid],
    [data-blotid][data-type=radiobox] [data-labelid],
    span.FITB-inptCont[data-type=checkbox] label,
    span.FITB-inptCont[data-type=radiobox] label {
      color: #2C3345;
    }
    .form-sub-label {
      color: #464d5f;
    }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-dropdown,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
    .supernova {
      background-image: none;
    }
    #stage {
      background-image: none;
    }
    
  
    .form-all {
      background-image: none;
    }
  
    .form-all {
      position: relative;
    }
    /* LOGO */
    .form-all:before {
      content: "";
      background-image: url("https://www.jotform.com/uploads/zororyuk2001/form_files/Logo copy.63b9cc65daffc4.03447354.png");
      display: inline-block;
      height: 160px;
      position: absolute;
      background-size: 160px 160px;
      background-repeat: no-repeat;
      width: 100%;
    }
    .form-all {
      margin-top: 180px !important;
    }
    .form-all:before {
      top: -170px;
      left: 0;
      background-position: top left;
    }
           
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>


    <style>
      .formLogoWrapper
      {
        display: inline-block;
        position: absolute;
        width: 100%;
      }

      .form-all:before
      {
        background: none !important;
      }

      .formLogoWrapper.Left
      {
        top: -170px;
        left: 0;
        text-align: left;
      }
    </style>
    <style>
      .form-all:before
      {
        background: none;
      }
    </style>
    <ul class="form-section page-section">
      <li id="cid_47" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_47" class="form-header" data-component="header">Artist Registration Form</h1>
            <div id="subHeader_47" class="form-subHeader">Fill this form correctly and ensue you give us your area of interest and sample of your previous works</div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_48"><label class="form-label form-label-top form-label-auto" id="label_48" for="first_48"> Name </label>
        <div id="cid_48" class="form-input-wide" data-layout="full">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_48" name="q48_name[first]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_48 given-name" size="10" value="" data-component="first" aria-labelledby="label_48 sublabel_48_first" /> <label class="form-sub-label" for="first_48" id="sublabel_48_first" style="min-height:13px" aria-hidden="false">First Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"><input type="text" id="last_48" name="q48_name[last]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_48 family-name" size="15" value="" data-component="last" aria-labelledby="label_48 sublabel_48_last" /> <label class="form-sub-label" for="last_48" id="sublabel_48_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_11"><label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> Business Name:<span class="form-required">*</span> </label>
        <div id="cid_11" class="form-input-wide jf-required" data-layout="half"> <input type="text" id="input_11" name="q11_businessName" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="25" placeholder=" " data-component="textbox" aria-labelledby="label_11" required="" /> </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_10"><label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Address:<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input-wide jf-required" data-layout="full"> <textarea id="input_10" class="form-textarea validate[required]" name="q10_address" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_10"></textarea> </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_0"><label class="form-label form-label-top form-label-auto" id="label_0" for="input_0"> City:<span class="form-required">*</span> </label>
        <div id="cid_0" class="form-input-wide jf-required" data-layout="half"> <input type="text" id="input_0" name="q0_city" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="20" placeholder=" " data-component="textbox" aria-labelledby="label_0" required="" /> </div>
      </li>
      <li class="form-line jf-required" data-type="control_dropdown" id="id_8"><label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> State:<span class="form-required">*</span> </label>
        <div id="cid_8" class="form-input-wide jf-required" data-layout="half"> <select class="form-dropdown validate[required]" id="input_8" name="q8_state" style="width:310px" data-component="dropdown" required="">
            <!--- India states -->
    <option value="">Please Select</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select> </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_7"><label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Pincode:<span class="form-required">*</span> </label>
        <div id="cid_7" class="form-input-wide jf-required" data-layout="half"> <input type="text" id="input_7" name="q7_pinCode" data-type="input-textbox" class="form-textbox validate[required, Numeric]" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="20" placeholder=" " data-component="textbox" aria-labelledby="label_7" required="" /> </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_34"><label class="form-label form-label-top form-label-auto" id="label_34" for="input_34"> Mobile Phone:<span class="form-required">*</span>  </label>
        <div id="cid_34" class="form-input-wide" data-layout="half"> <input type="text" id="input_34" name="q34_mobilePhone" data-type="input-textbox" class="form-textbox validate[required]" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="14" placeholder=" " data-component="textbox" aria-labelledby="label_34" /> </div>
      </li>
      <li class="form-line jf-required" data-type="control_textbox" id="id_3"><label class="form-label form-label-top form-label-auto" id="label_3" for="input_3"> E-mail:<span class="form-required">*</span> </label>
        <div id="cid_3" class="form-input-wide jf-required" data-layout="half"> <input type="text" id="input_3" name="q3_email" data-type="input-textbox" class="form-textbox validate[required, Email]" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="100" placeholder=" " data-component="textbox" aria-labelledby="label_3" required="" /> </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_35"><label class="form-label form-label-top form-label-auto" id="label_35" for="input_35"> Website: </label>
        <div id="cid_35" class="form-input-wide" data-layout="half"> <input type="text" id="input_35" name="q35_website" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="100" placeholder=" " data-component="textbox" aria-labelledby="label_35" /> </div>
      </li>
      <li class="form-line jf-required" data-type="control_checkbox" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Media:<span class="form-required">*</span> </label>
        <div id="cid_16" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_16" data-component="checkbox"><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_0" name="q16_media[]" value="Publicity Designer" required="" /><label id="label_input_16_0" for="input_16_0">Publicity Designer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_1" name="q16_media[]" value="Motion Graphic Designer" required="" /><label id="label_input_16_1" for="input_16_1">Motion Graphic Designer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_2" name="q16_media[]" value="Visual Effect(VFX)" required="" /><label id="label_input_16_2" for="input_16_2">Visual Effect(VFX)</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_3" name="q16_media[]" value="Colorist" required="" /><label id="label_input_16_3" for="input_16_3">Colorist</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_4" name="q16_media[]" value="Song Composer" required="" /><label id="label_input_16_4" for="input_16_4">Song Composer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_5" name="q16_media[]" value="Music Composer" required="" /><label id="label_input_16_5" for="input_16_5">Music Composer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_6" name="q16_media[]" value="Mix And Mastering" required="" /><label id="label_input_16_6" for="input_16_6">Mix And Mastering</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_7" name="q16_media[]" value="Photo Graphre" required="" /><label id="label_input_16_7" for="input_16_7">Photographer</label></span><span class="form-checkbox-item" style="clear:left"><span class="dragger-item"></span><input type="checkbox" aria-describedby="label_16" class="form-checkbox validate[required]" id="input_16_8" name="q16_media[]" value="Other" required="" /><label id="label_input_16_8" for="input_16_8">Other</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_17"><label class="form-label form-label-top form-label-auto" id="" for="input_17"> Other Media: </label>
        <div id="cid_17" class="form-input-wide" data-layout="half"> <input type="text" id="input_17" name="q17_otherMedia" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="100" placeholder=" " data-component="textbox" aria-labelledby="label_17" /> </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_40">
        <div id="cid_40" class="form-input-wide" data-layout="full">label_17
          <div id="text_40" class="form-html" data-component="text" tabindex="0">
            <p>Please give an additional description of your work, including information about the process used to create your artwork.</p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_textarea" id="id_18"><label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Artwork Description:<span class="form-required">*</span> </label>
        <div id="cid_18" class="form-input-wide jf-required" data-layout="full"> <textarea id="input_18" class="form-textarea validate[required]" name="q18_artworkDescription" style="width:648px;height:163px" data-component="textarea" required="" aria-labelledby="label_18"></textarea> </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_28"><label class="form-label form-label-top form-label-auto" id="label_28" for="input_28"> Work Sample #1:<span class="form-required">*</span> </label>
        <div id="cid_28" class="form-input-wide jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop"><span class="iconSvg  dhtupload ">function SvgDhtupload2(props) {
                        return /* @__PURE__ */ react.createElement("svg", dhtupload_svg_extends({
                        width: 54,
                        height: 47,
                        xmlns: "http://www.w3.org/2000/svg"
                        }, props), dhtupload_svg_path || (dhtupload_svg_path = /* @__PURE__ */ react.createElement("path", {
                        d: "M40.213 10.172c1.897.21 3.68.738 5.35 1.58a15.748 15.748 0 0 1 4.374 3.242 15.065 15.065 0 0 1 2.951 4.533c.72 1.704 1.08 3.522 1.08 5.455 0 1.827-.28 3.654-.843 5.48-.562 1.828-1.379 3.47-2.45 4.929A13.39 13.39 0 0 1 46.669 39c-1.599.948-3.452 1.458-5.56 1.528H37.26a1.62 1.62 0 0 1-1.185-.5 1.62 1.62 0 0 1-.501-1.186c0-.457.167-.852.5-1.186.334-.334.73-.5 1.186-.5h3.848c1.44 0 2.75-.37 3.926-1.108a10.851 10.851 0 0 0 3.03-2.846 13.53 13.53 0 0 0 1.95-3.9 14.23 14.23 0 0 0 .686-4.321c0-1.582-.316-3.066-.949-4.454a11.623 11.623 0 0 0-2.582-3.636 12.857 12.857 0 0 0-3.742-2.478 11.054 11.054 0 0 0-4.48-.922l-1.212-.053-.37-1.159c-.878-2.81-2.292-4.998-4.242-6.562-1.95-1.563-4.594-2.345-7.932-2.345-2.108 0-4.005.36-5.692 1.08-1.686.72-3.136 1.722-4.348 3.005-1.212 1.282-2.143 2.81-2.793 4.585-.65 1.774-.975 3.68-.975 5.718h.053l.105 1.581-1.528.264c-1.863.316-3.444 1.317-4.744 3.004-1.3 1.686-1.95 3.584-1.95 5.692 0 2.39.8 4.462 2.398 6.219 1.599 1.757 3.488 2.635 5.666 2.635h4.849c.492 0 .896.167 1.212.5.316.335.474.73.474 1.187 0 .456-.158.852-.474 1.185-.316.334-.72.501-1.212.501h-4.849a10.08 10.08 0 0 1-4.374-.975 11.673 11.673 0 0 1-3.61-2.661 13.173 13.173 0 0 1-2.478-3.9A12.073 12.073 0 0 1 0 28.301c0-2.706.755-5.148 2.266-7.326 1.511-2.178 3.444-3.636 5.798-4.374.14-2.354.658-4.542 1.554-6.562.896-2.02 2.091-3.777 3.584-5.27 1.494-1.494 3.25-2.662 5.27-3.505C20.493.422 22.733 0 25.193 0c1.898 0 3.637.237 5.218.711 1.581.475 3.004 1.151 4.269 2.03a13.518 13.518 0 0 1 3.268 3.215 18.628 18.628 0 0 1 2.266 4.216Zm-11.964 13.44 6.22 6.85c.245.247.368.537.368.87 0 .334-.123.642-.369.923l-.421.263c-.211.246-.484.343-.817.29a1.544 1.544 0 0 1-.87-.448l-3.69-4.11v16.97c0 .492-.166.896-.5 1.212-.334.316-.729.474-1.186.474-.492 0-.896-.158-1.212-.474-.316-.316-.474-.72-.474-1.212V28.25l-3.584 4.005a1.544 1.544 0 0 1-.87.448.959.959 0 0 1-.87-.29l-.42-.264c-.247-.28-.37-.588-.37-.922 0-.334.123-.624.37-.87l6.113-6.746v-.052l.421-.422a.804.804 0 0 1 .396-.29c.158-.053.307-.079.448-.079.175 0 .333.026.474.079.14.053.281.15.422.29l.421.422v.052Z",
                        fill: "none"
                        })));
                        }</span></div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container"><input type="file" id="input_28" name="q28_workSample[]" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="doc, xls, jpg, jpeg, gif, png, mp3, mpeg" data-file-maxsize="5500" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required="" aria-label="Upload a File" /></div>
              </div>
              <div data-wrapper-react="true"></div>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_29"><label class="form-label form-label-top form-label-auto" id="label_29" for="input_29"> Work Sample #2:<span class="form-required">*</span> </label>
        <div id="cid_29" class="form-input-wide jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop"><span class="iconSvg  dhtupload ">function SvgDhtupload2(props) {
                        return /* @__PURE__ */ react.createElement("svg", dhtupload_svg_extends({
                        width: 54,
                        height: 47,
                        xmlns: "http://www.w3.org/2000/svg"
                        }, props), dhtupload_svg_path || (dhtupload_svg_path = /* @__PURE__ */ react.createElement("path", {
                        d: "M40.213 10.172c1.897.21 3.68.738 5.35 1.58a15.748 15.748 0 0 1 4.374 3.242 15.065 15.065 0 0 1 2.951 4.533c.72 1.704 1.08 3.522 1.08 5.455 0 1.827-.28 3.654-.843 5.48-.562 1.828-1.379 3.47-2.45 4.929A13.39 13.39 0 0 1 46.669 39c-1.599.948-3.452 1.458-5.56 1.528H37.26a1.62 1.62 0 0 1-1.185-.5 1.62 1.62 0 0 1-.501-1.186c0-.457.167-.852.5-1.186.334-.334.73-.5 1.186-.5h3.848c1.44 0 2.75-.37 3.926-1.108a10.851 10.851 0 0 0 3.03-2.846 13.53 13.53 0 0 0 1.95-3.9 14.23 14.23 0 0 0 .686-4.321c0-1.582-.316-3.066-.949-4.454a11.623 11.623 0 0 0-2.582-3.636 12.857 12.857 0 0 0-3.742-2.478 11.054 11.054 0 0 0-4.48-.922l-1.212-.053-.37-1.159c-.878-2.81-2.292-4.998-4.242-6.562-1.95-1.563-4.594-2.345-7.932-2.345-2.108 0-4.005.36-5.692 1.08-1.686.72-3.136 1.722-4.348 3.005-1.212 1.282-2.143 2.81-2.793 4.585-.65 1.774-.975 3.68-.975 5.718h.053l.105 1.581-1.528.264c-1.863.316-3.444 1.317-4.744 3.004-1.3 1.686-1.95 3.584-1.95 5.692 0 2.39.8 4.462 2.398 6.219 1.599 1.757 3.488 2.635 5.666 2.635h4.849c.492 0 .896.167 1.212.5.316.335.474.73.474 1.187 0 .456-.158.852-.474 1.185-.316.334-.72.501-1.212.501h-4.849a10.08 10.08 0 0 1-4.374-.975 11.673 11.673 0 0 1-3.61-2.661 13.173 13.173 0 0 1-2.478-3.9A12.073 12.073 0 0 1 0 28.301c0-2.706.755-5.148 2.266-7.326 1.511-2.178 3.444-3.636 5.798-4.374.14-2.354.658-4.542 1.554-6.562.896-2.02 2.091-3.777 3.584-5.27 1.494-1.494 3.25-2.662 5.27-3.505C20.493.422 22.733 0 25.193 0c1.898 0 3.637.237 5.218.711 1.581.475 3.004 1.151 4.269 2.03a13.518 13.518 0 0 1 3.268 3.215 18.628 18.628 0 0 1 2.266 4.216Zm-11.964 13.44 6.22 6.85c.245.247.368.537.368.87 0 .334-.123.642-.369.923l-.421.263c-.211.246-.484.343-.817.29a1.544 1.544 0 0 1-.87-.448l-3.69-4.11v16.97c0 .492-.166.896-.5 1.212-.334.316-.729.474-1.186.474-.492 0-.896-.158-1.212-.474-.316-.316-.474-.72-.474-1.212V28.25l-3.584 4.005a1.544 1.544 0 0 1-.87.448.959.959 0 0 1-.87-.29l-.42-.264c-.247-.28-.37-.588-.37-.922 0-.334.123-.624.37-.87l6.113-6.746v-.052l.421-.422a.804.804 0 0 1 .396-.29c.158-.053.307-.079.448-.079.175 0 .333.026.474.079.14.053.281.15.422.29l.421.422v.052Z",
                        fill: "none"
                        })));
                        }</span></div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container"><input type="file" id="input_29" name="q29_workSample29[]" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="doc, xls, jpg, jpeg, gif, png, mp3, mpeg" data-file-maxsize="5500" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required="" aria-label="Upload a File" /></div>
              </div>
              <div data-wrapper-react="true"></div>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_31"><label class="form-label form-label-top form-label-auto" id="label_31" for="input_31"> Work Sample #3:<span class="form-required">*</span> </label>
        <div id="cid_31" class="form-input-wide jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop"><span class="iconSvg  dhtupload ">function SvgDhtupload2(props) {
                        return /* @__PURE__ */ react.createElement("svg", dhtupload_svg_extends({
                        width: 54,
                        height: 47,
                        xmlns: "http://www.w3.org/2000/svg"
                        }, props), dhtupload_svg_path || (dhtupload_svg_path = /* @__PURE__ */ react.createElement("path", {
                        d: "M40.213 10.172c1.897.21 3.68.738 5.35 1.58a15.748 15.748 0 0 1 4.374 3.242 15.065 15.065 0 0 1 2.951 4.533c.72 1.704 1.08 3.522 1.08 5.455 0 1.827-.28 3.654-.843 5.48-.562 1.828-1.379 3.47-2.45 4.929A13.39 13.39 0 0 1 46.669 39c-1.599.948-3.452 1.458-5.56 1.528H37.26a1.62 1.62 0 0 1-1.185-.5 1.62 1.62 0 0 1-.501-1.186c0-.457.167-.852.5-1.186.334-.334.73-.5 1.186-.5h3.848c1.44 0 2.75-.37 3.926-1.108a10.851 10.851 0 0 0 3.03-2.846 13.53 13.53 0 0 0 1.95-3.9 14.23 14.23 0 0 0 .686-4.321c0-1.582-.316-3.066-.949-4.454a11.623 11.623 0 0 0-2.582-3.636 12.857 12.857 0 0 0-3.742-2.478 11.054 11.054 0 0 0-4.48-.922l-1.212-.053-.37-1.159c-.878-2.81-2.292-4.998-4.242-6.562-1.95-1.563-4.594-2.345-7.932-2.345-2.108 0-4.005.36-5.692 1.08-1.686.72-3.136 1.722-4.348 3.005-1.212 1.282-2.143 2.81-2.793 4.585-.65 1.774-.975 3.68-.975 5.718h.053l.105 1.581-1.528.264c-1.863.316-3.444 1.317-4.744 3.004-1.3 1.686-1.95 3.584-1.95 5.692 0 2.39.8 4.462 2.398 6.219 1.599 1.757 3.488 2.635 5.666 2.635h4.849c.492 0 .896.167 1.212.5.316.335.474.73.474 1.187 0 .456-.158.852-.474 1.185-.316.334-.72.501-1.212.501h-4.849a10.08 10.08 0 0 1-4.374-.975 11.673 11.673 0 0 1-3.61-2.661 13.173 13.173 0 0 1-2.478-3.9A12.073 12.073 0 0 1 0 28.301c0-2.706.755-5.148 2.266-7.326 1.511-2.178 3.444-3.636 5.798-4.374.14-2.354.658-4.542 1.554-6.562.896-2.02 2.091-3.777 3.584-5.27 1.494-1.494 3.25-2.662 5.27-3.505C20.493.422 22.733 0 25.193 0c1.898 0 3.637.237 5.218.711 1.581.475 3.004 1.151 4.269 2.03a13.518 13.518 0 0 1 3.268 3.215 18.628 18.628 0 0 1 2.266 4.216Zm-11.964 13.44 6.22 6.85c.245.247.368.537.368.87 0 .334-.123.642-.369.923l-.421.263c-.211.246-.484.343-.817.29a1.544 1.544 0 0 1-.87-.448l-3.69-4.11v16.97c0 .492-.166.896-.5 1.212-.334.316-.729.474-1.186.474-.492 0-.896-.158-1.212-.474-.316-.316-.474-.72-.474-1.212V28.25l-3.584 4.005a1.544 1.544 0 0 1-.87.448.959.959 0 0 1-.87-.29l-.42-.264c-.247-.28-.37-.588-.37-.922 0-.334.123-.624.37-.87l6.113-6.746v-.052l.421-.422a.804.804 0 0 1 .396-.29c.158-.053.307-.079.448-.079.175 0 .333.026.474.079.14.053.281.15.422.29l.421.422v.052Z",
                        fill: "none"
                        })));
                        }</span></div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container"><input type="file" id="input_31" name="q31_workSample31[]" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="doc, xls, jpg, jpeg, gif, png, mp3, mpeg" data-file-maxsize="5500" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required="" aria-label="Upload a File" /></div>
              </div>
              <div data-wrapper-react="true"></div>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fileupload" id="id_30"><label class="form-label form-label-top form-label-auto" id="label_30" for="input_30"> Work Sample #4:<span class="form-required">*</span> </label>
        <div id="cid_30" class="form-input-wide jf-required" data-layout="full">
          <div class="jfQuestion-fields" data-wrapper-react="true">
            <div class="jfField isFilled">
              <div class="jfUpload-wrapper">
                <div class="jfUpload-container">
                  <div class="jfUpload-text-container">
                    <div class="jfUpload-icon forDesktop"><span class="iconSvg  dhtupload ">function SvgDhtupload2(props) {
                        return /* @__PURE__ */ react.createElement("svg", dhtupload_svg_extends({
                        width: 54,
                        height: 47,
                        xmlns: "http://www.w3.org/2000/svg"
                        }, props), dhtupload_svg_path || (dhtupload_svg_path = /* @__PURE__ */ react.createElement("path", {
                        d: "M40.213 10.172c1.897.21 3.68.738 5.35 1.58a15.748 15.748 0 0 1 4.374 3.242 15.065 15.065 0 0 1 2.951 4.533c.72 1.704 1.08 3.522 1.08 5.455 0 1.827-.28 3.654-.843 5.48-.562 1.828-1.379 3.47-2.45 4.929A13.39 13.39 0 0 1 46.669 39c-1.599.948-3.452 1.458-5.56 1.528H37.26a1.62 1.62 0 0 1-1.185-.5 1.62 1.62 0 0 1-.501-1.186c0-.457.167-.852.5-1.186.334-.334.73-.5 1.186-.5h3.848c1.44 0 2.75-.37 3.926-1.108a10.851 10.851 0 0 0 3.03-2.846 13.53 13.53 0 0 0 1.95-3.9 14.23 14.23 0 0 0 .686-4.321c0-1.582-.316-3.066-.949-4.454a11.623 11.623 0 0 0-2.582-3.636 12.857 12.857 0 0 0-3.742-2.478 11.054 11.054 0 0 0-4.48-.922l-1.212-.053-.37-1.159c-.878-2.81-2.292-4.998-4.242-6.562-1.95-1.563-4.594-2.345-7.932-2.345-2.108 0-4.005.36-5.692 1.08-1.686.72-3.136 1.722-4.348 3.005-1.212 1.282-2.143 2.81-2.793 4.585-.65 1.774-.975 3.68-.975 5.718h.053l.105 1.581-1.528.264c-1.863.316-3.444 1.317-4.744 3.004-1.3 1.686-1.95 3.584-1.95 5.692 0 2.39.8 4.462 2.398 6.219 1.599 1.757 3.488 2.635 5.666 2.635h4.849c.492 0 .896.167 1.212.5.316.335.474.73.474 1.187 0 .456-.158.852-.474 1.185-.316.334-.72.501-1.212.501h-4.849a10.08 10.08 0 0 1-4.374-.975 11.673 11.673 0 0 1-3.61-2.661 13.173 13.173 0 0 1-2.478-3.9A12.073 12.073 0 0 1 0 28.301c0-2.706.755-5.148 2.266-7.326 1.511-2.178 3.444-3.636 5.798-4.374.14-2.354.658-4.542 1.554-6.562.896-2.02 2.091-3.777 3.584-5.27 1.494-1.494 3.25-2.662 5.27-3.505C20.493.422 22.733 0 25.193 0c1.898 0 3.637.237 5.218.711 1.581.475 3.004 1.151 4.269 2.03a13.518 13.518 0 0 1 3.268 3.215 18.628 18.628 0 0 1 2.266 4.216Zm-11.964 13.44 6.22 6.85c.245.247.368.537.368.87 0 .334-.123.642-.369.923l-.421.263c-.211.246-.484.343-.817.29a1.544 1.544 0 0 1-.87-.448l-3.69-4.11v16.97c0 .492-.166.896-.5 1.212-.334.316-.729.474-1.186.474-.492 0-.896-.158-1.212-.474-.316-.316-.474-.72-.474-1.212V28.25l-3.584 4.005a1.544 1.544 0 0 1-.87.448.959.959 0 0 1-.87-.29l-.42-.264c-.247-.28-.37-.588-.37-.922 0-.334.123-.624.37-.87l6.113-6.746v-.052l.421-.422a.804.804 0 0 1 .396-.29c.158-.053.307-.079.448-.079.175 0 .333.026.474.079.14.053.281.15.422.29l.421.422v.052Z",
                        fill: "none"
                        })));
                        }</span></div>
                  </div>
                  <div class="jfUpload-button-container">
                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Upload a File<div class="jfUpload-heading forDesktop">Drag and drop files here</div>
                      <div class="jfUpload-heading forMobile">Choose a file</div>
                    </div>
                  </div>
                </div>
                <div class="jfUpload-files-container"><input type="file" id="input_30" name="q30_workSample30[]" multiple="" class="form-upload-multiple validate[required]" data-imagevalidate="yes" data-file-accept="doc, xls, jpg, jpeg, gif, png, mp3, mpeg" data-file-maxsize="5500" data-file-minsize="0" data-file-limit="0" data-component="fileupload" required="" aria-label="Upload a File" /></div>
              </div>
              <div data-wrapper-react="true"></div>
            </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_45">
        <div id="cid_45" class="form-input-wide" data-layout="full">
          <div id="text_45" class="form-html" data-component="text" tabindex="0">
            <p>Would you be interested in doing a demonstration?</p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_radio" id="id_21"><label class="form-label form-label-top form-label-auto" id="label_21" for="input_21"> Demo:<span class="form-required">*</span> </label>
        <div id="cid_21" class="form-input-wide jf-required" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_21" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_21" class="form-radio validate[required]" id="input_21_0" name="q21_demo" value="Yes" required="" /><label id="label_input_21_0" for="input_21_0">Yes</label></span><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span><input type="radio" aria-describedby="label_21" class="form-radio validate[required]" id="input_21_1" name="q21_demo" value="No" required="" /><label id="label_input_21_1" for="input_21_1">No</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_46">
        <div id="cid_46" class="form-input-wide" data-layout="full">
          <div id="text_46" class="form-html" data-component="text" tabindex="0">If yes, what technique or craft would you be demonstrating?</div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_26"><label class="form-label form-label-top form-label-auto" id="label_26" for="input_26"> Technique: </label>
        <div id="cid_26" class="form-input-wide" data-layout="half"> <input type="text" id="input_26" name="q26_technique" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" value="" maxLength="100" placeholder=" " data-component="textbox" aria-labelledby="label_26" /> </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_1">
        <div id="cid_1" class="form-input-wide" data-layout="full">
          <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_1" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Submit</button></div>
          <div class="form-submit-clear-wrapper"><button id="input_reset_1" type="reset" class="form-submit-reset jf-form-buttons" data-component="button">Clear Form</button></div>
        </div>
      </li>
      <li style="display:none">Should be Empty: <input type="text" name="website" value="" /></li>
    </ul>
  </div>
  <script>
    JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
    JotForm.poweredByText = "Powered by WMA Studios";
  </script><input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="230065487271456" />
  <script type="text/javascript">
    var all_spc = document.querySelectorAll("form[id='230065487271456'] .si" + "mple" + "_spc");
    for (var i = 0; i < all_spc.length; i++)
    {
      all_spc[i].value = "230065487271456-230065487271456";
    }
  </script>
  <!-- <div class="formFooter-heightMask"></div>
  <div class="formFooter f6 branding21">
    <div class="formFooter-wrapper formFooter-leftSide"><a href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=230065487271456&utm_content=jotform_logo&utm_campaign=powered_by_jotform_le" target="_blank" class="formFooter-logoLink"><img class="formFooter-logo" src="https://cdn.jotfor.ms/assets/img/logo2021/jotform-logo-white.svg" alt="Jotform Logo" style="height: 44px;"></a></div>
    <div class="formFooter-wrapper formFooter-rightSide"><span class="formFooter-text">Now create your own Jotform - It's free!</span><a class="formFooter-button" href="https://www.jotform.com/?utm_source=formfooter&utm_medium=banner&utm_term=230065487271456&utm_content=jotform_button&utm_campaign=powered_by_jotform_le" target="_blank">Create your own Jotform</a></div>
  </div> -->
</form><script type="text/javascript">JotForm.ownerView=true;</script><script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.38549"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.38549"></script>