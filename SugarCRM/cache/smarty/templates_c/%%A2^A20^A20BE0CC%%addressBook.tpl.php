<?php /* Smarty version 2.6.11, created on 2009-06-08 22:03:08
         compiled from modules/Emails/templates/addressBook.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/Emails/templates/addressBook.tpl', 38, false),)), $this); ?>
<div style='padding:5px;'>
    <button class="button" onclick="SUGAR.email2.addressBook.selectContactsDialogue();" id="selectContacts"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ADD_ENTRIES'), $this);?>
</button>
</div>
<div id="contactsFilterDiv" style='padding:5px;padding-bottom:2px;'>
    <table><tr><td><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADDRESS_BOOK_FILTER']; ?>
:
        <input size="15" type="text" class='input' id="contactsFilter" onkeyup="SUGAR.email2.addressBook.filter(this);">
	    </td><td>
	       <button class="button" onclick="SUGAR.email2.addressBook.clear();" style="padding-bottom: 2px" > 
	       <?php echo $this->_tpl_vars['app_strings']['LBL_CLEAR_BUTTON_LABEL']; ?>
 </button>
	    </td></tr></table>
</div>

<div id="contacts" style="overflow:auto; height:50%; margin:5px; padding:2px; border:1px solid #ccc;"></div>
<br />














