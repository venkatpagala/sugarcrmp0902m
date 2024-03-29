<?php /* Smarty version 2.6.11, created on 2009-07-02 11:36:41
         compiled from modules/ModuleBuilder/tpls/editProperty.tpl */ ?>
<form name="editProperty" id="editProperty" onsubmit='return false;'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='saveProperty'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<?php if (isset ( $this->_tpl_vars['view_package'] )): ?><input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'><?php endif; ?>
<input type='hidden' name='subpanel' value='<?php echo $this->_tpl_vars['subpanel']; ?>
'>
<input type='hidden' name='to_pdf' value='true'>

<?php if (isset ( $this->_tpl_vars['MB'] )): ?>
<input type='hidden' name='MB' value='<?php echo $this->_tpl_vars['MB']; ?>
'>
<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif; ?>

<?php echo '
<script>
	function saveAction() {
		for(var i=0;i<document.editProperty.elements.length;i++)
		{
			var field = document.editProperty.elements[i];
			if (field.className.indexOf(\'save\') != -1 )
			{
				if (field.value != \'no_change\')
				{
					var property = field.name.substring(\'editProperty_\'.length);
					var id = field.id.substring(\'editProperty_\'.length);
					document.getElementById(id).innerHTML = field.value;
				}
			}
		}
	}
	

	function switchLanguage( language )
	{
'; ?>

        var request = 'module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['editModule']; ?>
&selected_lang=' + language ;
        <?php $_from = $this->_tpl_vars['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['property']):
?>
                request += '&id_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['id']; ?>
&name_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['name']; ?>
&title_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['title']; ?>
&label_<?php echo $this->_tpl_vars['key']; ?>
=<?php echo $this->_tpl_vars['property']['label']; ?>
' ;
        <?php endforeach; endif; unset($_from);  echo '
        ModuleBuilder.getContent( request ) ;
    }

</script>
'; ?>


<table>

	<?php $_from = $this->_tpl_vars['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['property']):
?>
	<tr>
		<td width = "50%" align='right'><?php if (isset ( $this->_tpl_vars['property']['title'] )):  echo $this->_tpl_vars['property']['title'];  else:  echo $this->_tpl_vars['property']['name'];  endif; ?>:</td>
		<td>
			<input class='save' type='hidden' name='<?php echo $this->_tpl_vars['property']['name']; ?>
' id='editProperty_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
' value='no_change'>
			<?php if (isset ( $this->_tpl_vars['property']['hidden'] )): ?>
				<?php echo $this->_tpl_vars['property']['value']; ?>

			<?php else: ?>
				<input onchange='document.getElementById("editProperty_<?php echo $this->_tpl_vars['id'];  echo $this->_tpl_vars['property']['id']; ?>
").value = this.value' value='<?php echo $this->_tpl_vars['property']['value']; ?>
'>
			<?php endif; ?>
		</td>	
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td><input class="button" type="Button" name="save" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" onclick="saveAction(); ModuleBuilder.submitForm('editProperty')"></td>
	</tr>
</table>
</form>

<script>
ModuleBuilder.helpSetup('layoutEditor','property', 'east');
</script>

