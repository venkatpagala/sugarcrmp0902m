<?php
$viewdefs ['Project'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'form' => 
      array (
        'hidden' => '<input type="hidden" name="is_template" value="{$is_template}" />',
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 
          array (
            'customCode' => '{if !empty($smarty.request.return_action) && $smarty.request.return_action == "ProjectTemplatesDetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesDetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && $smarty.request.return_action == "DetailView" && (!empty($fields.id.value) || !empty($smarty.request.return_id)) }<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'DetailView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif $is_template}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'ProjectTemplatesListView\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value=\'index\'; this.form.module.value=\'{$smarty.request.return_module}\'; this.form.record.value=\'{$smarty.request.return_id}\';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}',
          ),
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'estimated_start_date',
          1 => 'estimated_end_date',
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => 'team_name',
        ),
        3 => 
        array (
          0 => 'priority',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => '8',
              'cols' => '60',
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
