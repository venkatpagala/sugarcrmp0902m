<?php /* Smarty version 2.6.11, created on 2009-07-02 10:39:47
         compiled from modules/ModuleBuilder/tpls/studioRelationships.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/studioRelationships.tpl', 42, false),)), $this); ?>
<?php if ($this->_tpl_vars['view_module'] != 'KBDocuments'): ?>
<input type='button' name='addrelbtn' value='<?php echo $this->_tpl_vars['mod_strings']['LBL_BTN_ADD_RELATIONSHIP']; ?>
'
	class='button' onclick='ModuleBuilder.moduleLoadRelationship2("");' style="margin-bottom:5px;">
<?php endif; ?>
<div id='relGrid'></div>
<?php if ($this->_tpl_vars['empty']):  echo smarty_function_sugar_translate(array('label' => 'LBL_NO_RELS','module' => 'ModuleBuilder'), $this);?>
</h3><?php endif;  if ($this->_tpl_vars['studio']):  echo smarty_function_sugar_translate(array('label' => 'LBL_CUSTOM_RELATIONSHIPS','module' => 'ModuleBuilder'), $this);?>
</h3><?php endif; ?>
<script>
var relationships = {"relationships":<?php echo $this->_tpl_vars['relationships']; ?>
};
<?php echo '
var relStore = new Ext.data.Store({
    data: relationships,
    reader: new Ext.data.JsonReader({
        root:"relationships",
        id: "id"
        }, Ext.data.Record.create([
            {name:\'name\', mapping:\'name\'},
            {name:\'relationship_name\', mapping:\'relationship_name\'},
            {name:\'lhs_module\'}, {name:\'rhs_module\'},
            {name:\'relationship_type\'}, {name:\'rsub\'}, {name:\'lsub\'}]))
});

var grid = new Ext.grid.GridPanel({
    store: relStore,
     columns: [
        {id:\'id\', header: SUGAR.language.get(\'ModuleBuilder\',\'LBL_REL_NAME\'), width: 200, sortable: true, dataIndex: \'name\'},
        {header: SUGAR.language.get(\'ModuleBuilder\',\'LBL_LHS_MODULE\'), width: 120, sortable: true, dataIndex: \'lhs_module\'},
        {header: SUGAR.language.get(\'ModuleBuilder\',\'LBL_REL_TYPE\'), width: 120, sortable: true, dataIndex: \'relationship_type\'},
        {header: SUGAR.language.get(\'ModuleBuilder\',\'LBL_RHS_MODULE\'), width: 120, sortable: true, dataIndex: \'rhs_module\'}
    ],
    renderTo:\'relGrid\',
    sm: new Ext.grid.RowSelectionModel({singleSelect:true}),
	width:Ext.isIE ? Ext.get(Ext.getDom(\'relGrid\').parentNode).getWidth() - 25 : "100%",
    autoHeight: true
});
grid.on(\'rowclick\', function(grid, i){
	var rel = grid.getStore().getAt(i);
	ModuleBuilder.tabPanel.remove("relEditor");
	ModuleBuilder.moduleLoadRelationship2(rel.data.relationship_name);
});

'; ?>

ModuleBuilder.module = '<?php echo $this->_tpl_vars['view_module']; ?>
';
ModuleBuilder.MBpackage = '<?php echo $this->_tpl_vars['view_package']; ?>
';
ModuleBuilder.helpRegisterByID('relGrid');
<?php if ($this->_tpl_vars['fromModuleBuilder']): ?>
ModuleBuilder.helpSetup('relationshipsHelp','default');
<?php else: ?>
ModuleBuilder.helpSetup('studioWizard','relationshipsHelp');
<?php endif; ?>
</script>