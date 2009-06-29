<?php /* Smarty version 2.6.11, created on 2009-06-25 11:25:48
         compiled from modules/ModuleBuilder/tpls/listView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'modules/ModuleBuilder/tpls/listView.tpl', 63, false),array('function', 'math', 'modules/ModuleBuilder/tpls/listView.tpl', 67, false),array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/listView.tpl', 83, false),)), $this); ?>
<form name='edittabs' id='edittabs' method='POST' action='index.php'>
<?php echo '
<script>
studiotabs.reset();
</script>
'; ?>

<input type='hidden' name='action' value=<?php echo $this->_tpl_vars['action']; ?>
>
<input type='hidden' name='view' value=<?php echo $this->_tpl_vars['view']; ?>
>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='subpanel' value='<?php echo $this->_tpl_vars['submodule']; ?>
'>
<input type='hidden' name='local' value='<?php echo $this->_tpl_vars['local']; ?>
'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<?php if ($this->_tpl_vars['fromPortal']): ?>
    <input type='hidden' name='PORTAL' value='1'>
<?php endif; ?>
<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<input type='hidden' name='to_pdf' value='1'>
<link rel="stylesheet" type="text/css" href="modules/ModuleBuilder/tpls/ListEditor.css" />

<table id="content">
<tr><td colspan='100'><?php echo $this->_tpl_vars['buttons']; ?>
</td></tr><tr>
<td>

<?php echo smarty_function_counter(array('start' => 0,'name' => 'groupCounter','print' => false,'assign' => 'groupCounter'), $this);?>

<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['list']):
?>
    <?php echo smarty_function_counter(array('name' => 'groupCounter'), $this);?>

<?php endforeach; endif; unset($_from);  echo smarty_function_math(array('assign' => 'groupWidth','equation' => "100/".($this->_tpl_vars['groupCounter'])."-5"), $this);?>


<?php echo smarty_function_counter(array('start' => 0,'name' => 'slotCounter','print' => false,'assign' => 'slotCounter'), $this);?>

<?php echo smarty_function_counter(array('start' => 0,'name' => 'modCounter','print' => false,'assign' => 'modCounter'), $this);?>


<?php $_from = $this->_tpl_vars['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['list']):
?>

<div id=<?php echo $this->_tpl_vars['label']; ?>
 style="float: left; border: 1px gray solid; padding:4px; margin-right:4px; margin-top: 8px; width:<?php echo $this->_tpl_vars['groupWidth']; ?>
%;">
<h3 ><?php echo $this->_tpl_vars['label']; ?>
</h3>
<ul id='ul<?php echo $this->_tpl_vars['slotCounter']; ?>
'>

<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?>

<li name="width=<?php echo $this->_tpl_vars['value']['width']; ?>
%" id='subslot<?php echo $this->_tpl_vars['modCounter']; ?>
' class='draggable' >
    <table width='100%'>
        <tr>
            <td id='subslot<?php echo $this->_tpl_vars['modCounter']; ?>
label' style="font-weight: bold;"><?php if (! empty ( $this->_tpl_vars['value']['label'] )):  echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['value']['label'],'module' => $this->_tpl_vars['language']), $this); elseif (! empty ( $this->_tpl_vars['value']['vname'] )):  echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['value']['vname'],'module' => $this->_tpl_vars['language']), $this); else:  echo $this->_tpl_vars['key'];  endif; ?></td>
            <td></td>
            <td align="right">
                <img src="themes/Sugar/images/edit_inline.gif" style="cursor: pointer;"
                onclick="var value_label = document.getElementById('subslot<?php echo $this->_tpl_vars['modCounter']; ?>
label').innerHTML; var value_width = document.getElementById('subslot<?php echo $this->_tpl_vars['modCounter']; ?>
width').innerHTML; ModuleBuilder.getContent('module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['view_module'];  if (isset ( $this->_tpl_vars['subpanel'] )): ?>&<?php echo $this->_tpl_vars['subpanel'];  endif;  if ($this->_tpl_vars['MB']): ?>&MB=<?php echo $this->_tpl_vars['MB']; ?>
&view_package=<?php echo $this->_tpl_vars['view_package'];  endif; ?>&id_label=subslot<?php echo $this->_tpl_vars['modCounter']; ?>
label&name_label=label_<?php if (isset ( $this->_tpl_vars['value']['label'] )):  echo $this->_tpl_vars['value']['label'];  else:  echo $this->_tpl_vars['key'];  endif; ?>&title_label=<?php echo $this->_tpl_vars['MOD']['LBL_LABEL_TITLE']; ?>
&value_label=' + value_label + '&id_width=subslot<?php echo $this->_tpl_vars['modCounter']; ?>
width&name_width=<?php echo $this->_tpl_vars['MOD']['LBL_WIDTH']; ?>
&value_width=' + value_width );">
            </td>
            </tr>
            <tr class='fieldValue'>
                <?php if (empty ( $this->_tpl_vars['hideKeys'] )): ?><td>[<?php echo $this->_tpl_vars['key']; ?>
]</td><?php endif; ?>
                <td align="right" colspan="2"><span id='subslot<?php echo $this->_tpl_vars['modCounter']; ?>
width'><?php echo $this->_tpl_vars['value']['width']; ?>
</span><span>%</span></td>
        </tr>
    </table>
</li>

<script>
studiotabs.tabLabelToValue['<?php echo $this->_tpl_vars['value']['label']; ?>
|<?php echo $this->_tpl_vars['key']; ?>
'] = '<?php echo $this->_tpl_vars['key']; ?>
';
if(typeof(studiotabs.subtabModules['subslot<?php echo $this->_tpl_vars['modCounter']; ?>
']) == 'undefined')studiotabs.subtabModules['subslot<?php echo $this->_tpl_vars['modCounter']; ?>
'] = '<?php echo $this->_tpl_vars['value']['label']; ?>
|<?php echo $this->_tpl_vars['key']; ?>
';
</script>

<?php echo smarty_function_counter(array('name' => 'modCounter'), $this);?>

<?php endforeach; endif; unset($_from); ?>

<li id='topslot<?php echo $this->_tpl_vars['slotCounter']; ?>
' class='noBullet'>&nbsp;</li>

</ul>
</div>

<?php echo smarty_function_counter(array('name' => 'slotCounter'), $this);?>

<?php endforeach; endif; unset($_from); ?>
</td>
</tr></table>


<span class='error'><?php echo $this->_tpl_vars['error']; ?>
</span>

<script>
<?php echo '
function dragDropInit(){
    studiotabs.fields = {};
    studiotabs.slotCount = ';  echo $this->_tpl_vars['slotCounter']; ?>
;
    studiotabs.modCount = <?php echo $this->_tpl_vars['modCounter']; ?>
;
    Ext.dd.DragDropMgr.mode = Ext.dd.DragDropMgr.POINT;


    <?php echo '

    for(msi = 0; msi < studiotabs.slotCount ; msi++){
        studiotabs.fields["topslot"+ msi] = new Studio2.ListDD("topslot" + msi, "subTabs", true);
    }
    for(msi = 0; msi < studiotabs.modCount ; msi++){
            studiotabs.fields["subslot"+ msi] = new Studio2.ListDD("subslot" + msi, "subTabs", false);
    }

    studiotabs.fields["subslot"+ (msi - 1) ].updateTabs();
}
'; ?>

Ext.dd.DragDropMgr.mode = Ext.dd.DragDropMgr.INTERSECT;
dragDropInit();
ModuleBuilder.helpRegister('edittabs');
ModuleBuilder.helpRegisterByID('content', 'div');

ModuleBuilder.helpSetup('<?php echo $this->_tpl_vars['helpName']; ?>
', '<?php echo $this->_tpl_vars['helpDefault']; ?>
');
if('<?php echo $this->_tpl_vars['from_mb']; ?>
')
    ModuleBuilder.helpUnregisterByID('savebtn');
ModuleBuilder.MBpackage = '<?php echo $this->_tpl_vars['view_package']; ?>
';
</script>



<div id='logDiv' style='display:none'>
</div>

<?php echo $this->_tpl_vars['additionalFormData']; ?>


</form>

