<?php /* Smarty version 2.6.11, created on 2009-06-30 16:02:49
         compiled from include/SugarEmailAddress/templates/forDetailView.tpl */ ?>

			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php $_from = $this->_tpl_vars['emailAddresses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['address']):
?>
				<tr>
					<td class="tabDetailViewDF" style="border:none;">
						<?php if ($this->_tpl_vars['address']['key'] === 'opt_out'): ?>
							<span style="text-decoration: line-through;">
						<?php elseif ($this->_tpl_vars['address']['key'] === 'primary'): ?>
							<b>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'reply_to' && $this->_tpl_vars['item']['key'] != 0): ?>
							<i>
						<?php endif; ?>

						<?php echo $this->_tpl_vars['address']['address']; ?>


						<?php if ($this->_tpl_vars['address']['key'] === 'primary'): ?>
							</b>&nbsp;<i>(<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_PRIMARY']; ?>
)</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'reply_to'): ?>
							</i>&nbsp;<i>(<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_REPLY_TO']; ?>
)</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'opt_out'): ?>
							</span>&nbsp;<i class='error'>(<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_OPT_OUT']; ?>
)</i>
						<?php elseif ($this->_tpl_vars['address']['key'] === 'invalid'): ?>
							<i>(<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_INVALID']; ?>
)</i>
						<?php endif; ?>
					</td>
				</tr>
				<?php endforeach; else: ?>
				<tr>
					<td class="tabDetailViewDF">
						<i><?php echo $this->_tpl_vars['app_strings']['LBL_NONE']; ?>
</i>
					</td>
				</tr>
				<?php endif; unset($_from); ?>
			</table>