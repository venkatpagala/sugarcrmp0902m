<?php /* Smarty version 2.6.11, created on 2009-06-08 21:26:03
         compiled from modules/Administration/index.tpl */ ?>

<?php echo $this->_tpl_vars['MY_FRAME']; ?>


<?php $_from = $this->_tpl_vars['ADMIN_GROUP_HEADER']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j'] => $this->_tpl_vars['val1']):
?>
   
   <?php if (isset ( $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][1] )): ?>
   <p><?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][0];  echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][1]; ?>

   <table width="100%" cellpadding="0" cellspacing="1" border="0" class="tabDetailView2">
   
   <?php else: ?>
   <p><?php echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][0];  echo $this->_tpl_vars['GROUP_HEADER'][$this->_tpl_vars['j']][2]; ?>

   <table width="100%" cellpadding="0" cellspacing="1" border="0" class="tabDetailView2">
   <?php endif; ?>
      
    <?php $this->assign('i', 0); ?>
    <?php $_from = $this->_tpl_vars['VALUES_3_TAB'][$this->_tpl_vars['j']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['link_idx'] => $this->_tpl_vars['admin_option']):
?>
    <?php if (isset ( $this->_tpl_vars['COLNUM'][$this->_tpl_vars['j']][$this->_tpl_vars['i']] )): ?>
    <tr>
            <td width="20%" class="tabDetailViewDL2" nowrap><?php echo $this->_tpl_vars['ITEM_HEADER_IMAGE'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
&nbsp;<a href='<?php echo $this->_tpl_vars['ITEM_URL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
' class="tabDetailViewDL2Link"><?php echo $this->_tpl_vars['ITEM_HEADER_LABEL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</a></td>
            <td align="left" width="30%" class="tabDetailViewDF2"><?php echo $this->_tpl_vars['ITEM_DESCRIPTION'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</td>  
              
            <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
            <?php if ($this->_tpl_vars['COLNUM'][$this->_tpl_vars['j']][$this->_tpl_vars['i']] == '0'): ?>                           
                    <td width="20%" class="tabDetailViewDL2" nowrap><?php echo $this->_tpl_vars['ITEM_HEADER_IMAGE'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
&nbsp;<a href='<?php echo $this->_tpl_vars['ITEM_URL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
' class="tabDetailViewDL2Link"><?php echo $this->_tpl_vars['ITEM_HEADER_LABEL'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</a></td>
                    <td align="left" width="30%" class="tabDetailViewDF2"><?php echo $this->_tpl_vars['ITEM_DESCRIPTION'][$this->_tpl_vars['j']][$this->_tpl_vars['i']]; ?>
</td>
              
            <?php else: ?>
            <td width="20%" class="tabDetailViewDL2" nowrap>&nbsp;</td>
            <td align="left" width="30%" class="tabDetailViewDF2">&nbsp;</td>
            <?php endif; ?>
   </tr>
   <?php endif; ?>
   <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
   <?php endforeach; endif; unset($_from); ?>
           
</table>
</p>
<?php endforeach; endif; unset($_from); ?>