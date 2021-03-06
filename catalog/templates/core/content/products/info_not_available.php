<?php
/**
  @package    catalog::templates::content
  @author     Loaded Commerce
  @copyright  Copyright 2003-2014 Loaded Commerce, LLC
  @copyright  Portions Copyright 2003 osCommerce
  @copyright  Template built on DevKit http://www.bootstraptor.com under GPL license 
  @license    https://github.com/loadedcommerce/loaded7/blob/master/LICENSE.txt
  @version    $Id: info_not_available.php v1.0 2013-08-08 datazen $
*/
?>
<!--content/products/info_not_available.php start-->   
<div class="row">
  <h1><?php echo $lC_Product->getTitle(); ?></h1>
  <p><?php echo $lC_Language->get('product_not_available') . ' ' . $lC_Product->getDateAvailable(); ?></p>
  <div class="button-set col-sm-12 col-lg-12 clearfix">
    <form action="<?php echo lc_href_link(FILENAME_DEFAULT, null, 'AUTO'); ?>" method="post">
      <button onclick="$(this).closest('form').submit();" class="pull-right btn btn-lg btn-primary" type="submit"><?php echo $lC_Language->get('button_continue'); ?></button>
    </form>
  </div>
</div>
<!--content/products/info_not_available.php end-->