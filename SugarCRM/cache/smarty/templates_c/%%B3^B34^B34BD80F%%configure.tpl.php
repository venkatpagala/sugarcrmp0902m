<?php /* Smarty version 2.6.11, created on 2009-06-08 21:57:28
         compiled from modules/iFrames/Dashlets/iFrameDashlet/configure.tpl */ ?>


<div style='width:100%'>
<form name='configure_<?php echo $this->_tpl_vars['id']; ?>
' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_<?php echo $this->_tpl_vars['id']; ?>
", SUGAR.mySugar.uncoverPage);'>
<input type='hidden' name='id' value='<?php echo $this->_tpl_vars['id']; ?>
'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="tabForm" align="center">
<tr>
    <td valign='top' nowrap class='dataLabel'><?php echo $this->_tpl_vars['titleLBL']; ?>
</td>
    <td valign='top' class='dataField'>
    	<input class="text" name="title" size='20' maxlength='80' value='<?php echo $this->_tpl_vars['title']; ?>
'>
    </td>
</tr>
<tr>
    <td valign='top' nowrap class='dataLabel'><?php echo $this->_tpl_vars['urlLBL']; ?>
</td>
    <td valign='top' class='dataField'>
    	<input class="text" name="url" size='20' maxlength='255' value='<?php echo $this->_tpl_vars['url']; ?>
'>
    </td>
</tr>
<tr>
    <td valign='top' nowrap class='dataLabel'><?php echo $this->_tpl_vars['heightLBL']; ?>
</td>
    <td valign='top' class='dataField'>
    	<input class="text" name="height" size='20' maxlength='80' value='<?php echo $this->_tpl_vars['height']; ?>
'>
    </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='submit' class='button' value='<?php echo $this->_tpl_vars['saveLBL']; ?>
'>
   	</td>
</tr>
</table>
</form>
</div>