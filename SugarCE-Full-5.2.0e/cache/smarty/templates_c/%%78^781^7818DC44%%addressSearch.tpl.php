<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/addressSearch.tpl */ ?>
<form id="searchForm" method="get" action="#">
    <table id="searchTable" class="tabForm" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr id="peopleTableSearchRow">
            <td id="searchNameFirst" class="dataLabel" nowrap="NOWRAP">
                <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME']; ?>
: <input name="first_name" id="input_searchNameFirst" type="text">
            </td>
            <td id="searchNameLast" class="dataLabel" nowrap="NOWRAP">
                <?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_ADDRESS_BOOK_LAST_NAME']; ?>
: <input name="last_name" id="input_searchNameLast" type="text">
            </td>
            <td id="searchEmail" class="dataLabel" nowrap="NOWRAP">
                <?php echo $this->_tpl_vars['mod_strings']['LBL_EMAIL']; ?>
 <input name="email_address" id="input_searchEmail" type="text">
            </td>
			<td>
			     <select name="person" id="input_searchPerson">
			         <?php echo $this->_tpl_vars['listOfPersons']; ?>

			     </select>
            </td>
            <td id="searchSubmit" class="dataLabel" nowrap="NOWRAP">
                <input class="button" onclick="SUGAR.email2.addressBook.searchContacts();" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_SEARCH_BUTTON_LABEL']; ?>
   " id="input_searchSubmit" type="button">
            </td>
        </tr>
    </table>
</form>