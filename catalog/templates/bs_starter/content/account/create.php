<?php
/**
  @package    catalog::templates::content
  @author     Loaded Commerce, LLC
  @copyright  Copyright 2003-2013 Loaded Commerce Development Team
  @copyright  Portions Copyright 2003 osCommerce
  @copyright  Template built on DevKit http://www.bootstraptor.com under GPL license 
  @license    https://github.com/loadedcommerce/loaded7/blob/master/LICENSE.txt
  @version    $Id: create.php v1.0 2013-08-08 datazen $
*/
?>
<!--content/info/create.php start-->
<div class="row">
  <div class="col-sm-12 col-lg-12">
    <h1 class="no-margin-top"><?php echo $lC_Template->getPageTitle(); ?></h1>
    <?php 
      if ( $lC_MessageStack->size('create') > 0 ) echo '<div class="message-stack-container alert alert-danger small-margin-bottom small-margin-left">' . $lC_MessageStack->get('create') . '</div>' . "\n"; 
    ?>
    <div class="row">
      <form role="form" class="form-inline" name="create" id="create" action="<?php echo lc_href_link(FILENAME_ACCOUNT, 'create=save', 'SSL'); ?>" method="post" onsubmit="return check_form(create);">
        <div class="col-sm-6 col-lg-6 large-padding-left margin-top">
          <div class="well no-padding-top">
            <h3><?php echo $lC_Language->get('personal_details_title'); ?></h3>
              <div class="form-group full-width margin-bottom"><label class="sr-only"></label><?php echo lc_draw_input_field('firstname', null, 'placeholder="' . $lC_Language->get('field_customer_first_name') . '" class="form-control"'); ?></div>
              <div class="form-group full-width margin-bottom"><label class="sr-only"></label><?php echo lc_draw_input_field('lastname', null, 'placeholder="' . $lC_Language->get('field_customer_last_name') . '" class="form-control"'); ?></div>
              <?php
              if (ACCOUNT_DATE_OF_BIRTH == '1') {
                echo '<div class="form-group full-width no-wrap"><label class="small-margin-right normal"><abbr title="' . $lC_Language->get('field_customer_date_of_birth') . '">' . $lC_Language->get('field_customer_date_of_birth_abbr') . '</abbr></label>' . lc_draw_date_pull_down_menu('dob', null, false, null, null, @date('Y')-1901, -5, 'class="form-control" style="width:27%;"') . '</div>';
                //echo '<div class="form-group"><label></label>' . lc_draw_input_field('dob', null, 'placeholder="' . $lC_Language->get('field_customer_date_of_birth') . '" class="form-control"') . '</div>'; 
              }
              if (ACCOUNT_GENDER > -1) {
                ?>
                <div class="form-group no-wrap margin-top">
                  <label class="normal"><?php echo $lC_Language->get('field_customer_gender'); ?></label>
                  <select class="form-control" name="gender" id="gender">
                    <option value="m" checked="checked"><?php echo $lC_Language->get('gender_male'); ?></option>
                    <option value="f"><?php echo $lC_Language->get('gender_female'); ?></option>
                  </select>
                </div>
                <?php
              }
              if (ACCOUNT_NEWSLETTER == '1') {  
                ?>
                <br />
                <div class="checkbox margin-top">
                  <label class="normal"><?php echo $lC_Language->get('field_customer_newsletter'); ?><input id="newsletter" class="small-margin-left" type="checkbox" checked="checked" value="1" name="newsletter"></label>
                </div>                
                <?php
              }
              ?>      
          </div>
        </div>
        <div class="col-sm-6 col-lg-6 margin-top clearfix">
          <div class="well no-padding-top">
            <h3><?php echo $lC_Language->get('login_details_title'); ?></h3>
            <div class="form-group full-width margin-bottom"><?php echo lc_draw_input_field('email_address', ($_POST['email']) ? $_POST['email'] : '', 'placeholder="' . $lC_Language->get('field_customer_email_address') . '" class="form-control"'); ?></div>
            <div class="form-group full-width margin-bottom"><?php echo lc_draw_password_field('password', 'class="form-control" placeholder="' . $lC_Language->get('field_customer_password') . '"'); ?></div>
            <div class="form-group full-width margin-bottom"><?php echo lc_draw_password_field('confirmation', 'placeholder="' .  $lC_Language->get('field_customer_password_confirmation') . '" class="form-control"'); ?></div>
            <?php
            if (DISPLAY_PRIVACY_CONDITIONS == '1') {
              echo '<div class="form-group no-wrap">' . lc_draw_checkbox_field('privacy_conditions', null, null, 'class="form-control no-margin-top small-margin-right" style="width:5%;"') . '<label style="font-weight:200;">' . sprintf($lC_Language->get('create_account_terms_confirm'), lc_href_link(FILENAME_INFO, 'privacy', 'AUTO')) . '</label></div>';
            }
            ?>
          </div>
        </div>
      </form>
    </div>
    <div class="btn-set small-margin-top clearfix">
      <button class="pull-right btn btn-lg btn-primary" onclick="$('#create').submit();" type="button"><?php echo $lC_Language->get('button_continue'); ?></button>
      <a href="<?php echo lc_href_link(FILENAME_INFO); ?>"><button class="pull-left btn btn-lg btn-default" type="button"><?php echo $lC_Language->get('button_back'); ?></button></a>
    </div> 
    <hr>
  </div>
</div>                           
<!--content/info/create.php end-->