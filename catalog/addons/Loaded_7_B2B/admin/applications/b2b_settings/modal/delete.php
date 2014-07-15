<?php
/*
  $Id: delete.php v1.0 2013-01-01 datazen $

  LoadedCommerce, Innovative eCommerce Solutions
  http://www.loadedcommerce.com

  Copyright (c) 2013 Loaded Commerce, LLC

  @author     LoadedCommerce Team
  @copyright  (c) 2013 LoadedCommerce Team
  @license    http://loadedcommerce.com/license.html
*/
global $lC_Language, $lC_Template;
?>
<script>
function deleteCustomerAccessGroup(id, name) {
  var accessLevel = '<?php echo $_SESSION['admin']['access'][$lC_Template->getModule()]; ?>';
  if (parseInt(accessLevel) < 4) {
    $.modal.alert('<?php echo $lC_Language->get('ms_error_no_access');?>');
    return false;
  }
  if ( id == 1 || id == 2 ) {
    $.modal.alert('<?php echo $lC_Language->get('delete_error_customer_access_level_prohibited'); ?>');
    return false;
  }
  var jsonLink = '<?php echo lc_href_link_admin('rpc.php', $lC_Template->getModule() . '&action=getCustomerAccessMembers&aid=AID&addon=Loaded_7_B2B'); ?>';
  $.getJSON(jsonLink.replace('AID', parseInt(id)),
    function (data) {
      if (data.rpcStatus == -10) { // no session
        var url = "<?php echo lc_href_link_admin(FILENAME_DEFAULT, 'login'); ?>";
        $(location).attr('href',url);
      }
      if (data.rpcStatus != 1) {
        if (data.rpcStatus == -2) {
          $.modal.alert('<?php echo $lC_Language->get('delete_error_customer_access_level_in_use'); ?> ' + data.totalMembers + ' <?php echo $lC_Language->get('delete_error_customer_access_level_in_use_end'); ?>');
          return false;                    
        } else {
          $.modal.alert('<?php echo $lC_Language->get('ms_error_action_not_performed'); ?>');
          return false;
        }
      }
      $.modal({
        content: '<div id="deleteCustomerAccessGroup">'+
                 '  <div id="deleteConfirm">'+
                 '    <p id="deleteConfirmMessage"><?php echo $lC_Language->get('introduction_delete_customer_access_level'); ?>'+
                 '      <p><b>' + decodeURI(name.replace(/\+/g, '%20')) + '</b></p>'+
                 '    </p>'+
                 '  </div>'+
                 '</div>',
        title: '<?php echo $lC_Language->get('modal_heading_delete_customer_access_level'); ?>',
        width: 300,
        scrolling: false,
        actions: {
          'Close' : {
            color: 'red',
            click: function(win) { win.closeModal(); }
          }
        },
        buttons: {
          '<?php echo $lC_Language->get('button_cancel'); ?>': {
            classes:  'glossy',
            click:    function(win) { win.closeModal(); }
          },
          '<?php echo $lC_Language->get('button_delete'); ?>': {
            classes:  'blue-gradient glossy',
            click:    function(win) {
              var jsonLink = '<?php echo lc_href_link_admin('rpc.php', $lC_Template->getModule() . '&action=deleteCustomerAccessLevel&aid=AID&addon=Loaded_7_B2B'); ?>';
              $.getJSON(jsonLink.replace('AID', parseInt(id)),
                function (data) {
                  if (data.rpcStatus == -10) { // no session
                    var url = "<?php echo lc_href_link_admin(FILENAME_DEFAULT, 'login'); ?>";
                    $(location).attr('href',url);
                  }
                  if (data.rpcStatus != 1) {
                    $.modal.alert('<?php echo $lC_Language->get('ms_error_action_not_performed'); ?>');
                    return false;
                  }
                  oTable.fnReloadAjax();
                }
              );
              win.closeModal();
            }
          }
        },
        buttonsLowPadding: true
      });
    }
  );
}
</script>