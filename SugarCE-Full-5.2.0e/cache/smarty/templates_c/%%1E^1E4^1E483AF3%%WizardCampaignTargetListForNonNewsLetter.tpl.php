<?php /* Smarty version 2.6.11, created on 2009-06-26 17:25:24
         compiled from modules/Campaigns/tpls/WizardCampaignTargetListForNonNewsLetter.tpl */ ?>

	<input type="hidden" id="existing_target_count" name="existing_target_count" value=<?php echo $this->_tpl_vars['TARGET_COUNT']; ?>
>			
	<input type="hidden" id="added_target_count" name="added_target_count" value=''>				
	<input type="hidden" id="wiz_list_of_existing_targets" name="wiz_list_of_existing_targets" value="">				
	<input type="hidden" id="wiz_list_of_targets" name="wiz_list_of_targets" value="">				
	<input type="hidden" id="wiz_remove_target_list" name="wiz_remove_target_list" value="">				



	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<th colspan="5" align="left" class="dataField"><h4 class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_TARGET_LISTS']; ?>
</h4></th>
	</tr>
	<tr>
	<td class="dataLabel" colspan="5"><?php echo $this->_tpl_vars['MOD']['LBL_WIZARD_TARGET_MESSAGE1']; ?>
<br></td>
	</tr>
	<tr><td colspan=5>&nbsp;</td></tr>
	<tr>
	<td class="dataLabel" colspan="4"><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_TARGET']; ?>
&nbsp;
	<input id="popup_target_list_type" name="popup_target_list_type" type='hidden'>
	<input id="popup_target_list_name" name="popup_target_list_name" type="hidden" value="">
	<input id='popup_target_list_id' name='popup_target_list_id' title='List ID' type="hidden" value=''>
	<input title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" type="button" tabindex='1' class="button" value='<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
' name=btn3 id='target_list_button'
 	onclick='open_popup("ProspectLists", 600, 400, "", true, false,  <?php echo $this->_tpl_vars['encoded_target_list_popup_request_data']; ?>
, "single", true);'>	
	</span sugar='slot'>	
	</td>
	<td class="dataLabel">&nbsp;</td>
	</tr>
	<tr><td colspan=5>&nbsp;</td></tr>
	<tr>
	<td class="dataLabel" colspan="5"><?php echo $this->_tpl_vars['MOD']['LBL_WIZARD_TARGET_MESSAGE2']; ?>
<br></td>
	</tr>
	<tr>
	<td width='10%' class="dataLabel"><?php echo $this->_tpl_vars['MOD']['LBL_TARGET_NAME']; ?>
</td>
	<td width='20%' class="dataLabel">
		<input id="target_list_name" name="target_list_name" type='text' size='40'>
	</td>
	<td width='10%' class="dataLabel">
		<span sugar='slot28'><?php echo $this->_tpl_vars['MOD']['LBL_TARGET_TYPE']; ?>
</span sugar='slot'>
	</td>
	<td class="dataField" width='20%' >
		<span sugar='slot28b'>
		<select id="target_list_type" name="target_list_type"><?php echo $this->_tpl_vars['TARGET_OPTIONS']; ?>
</select>
		<input id='target_list_id' name='target_list_id' title='List ID' type="hidden" value=''>
		</span sugar='slot'>
	</td>
	<td width='30%'><input type='button' value ='<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_TARGET']; ?>
' class= 'button' onclick="add_target('false');"></td>
	</tr>
	<tr><td colspan=5>&nbsp;</td></tr>
	</table>
	<table width = '100%' class='tabDetailView'>
		<tr><td><?php echo $this->_tpl_vars['MOD']['LBL_TRACKERS_ADDED']; ?>
</td></tr>
		<tr><td>
		
			<table bprder=1 width='100%'><tr class='tabDetailView'>
				<td width='25%'><b><?php echo $this->_tpl_vars['MOD']['LBL_TARGET_NAME']; ?>
</b></td>
			    <td width='25%'><b><?php echo $this->_tpl_vars['MOD']['LBL_TARGET_TYPE']; ?>
</b></td><td>&nbsp;</td>
			    <td width='25%'><b>&nbsp;</b></td>			    
		    </tr>
			</table>
			<div id='added_targets'>
				<?php echo $this->_tpl_vars['EXISTING_TARGETS']; ?>

			</div>
	
	
		</td></tr>
	</table>
	
	<p>


		<script>
		var image_path = '<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
';
		<?php echo '
		
			//create variables that will be used to monitor the number of target url
			var targets_added = 0;
			//variable that will be passed back to server to specify list of targets
			var wiz_list_of_targets_array = new Array();
			
			//this function adds selected target to list
			function add_target(from_popup){

				//perform validation
				if(validate_step4(from_popup)){
					TRGTNAME = \'target_list_name\';
					TRGTID = \'target_list_id\';
					TRGTYPE = \'target_list_type\';

				if(from_popup == \'true\'){
					TRGTNAME = \'popup_target_list_name\'
					TRGTID = \'popup_target_list_id\'
					TRGTYPE = \'popup_target_list_type\'										
				}
				
				//increment target count value
					targets_added++;
					document.getElementById(\'added_target_count\').value = targets_added ;
					//get the appropriate values from target form
					var trgt_name = document.getElementById(TRGTNAME);
					var trgt_id = document.getElementById(TRGTID);
					var trgt_type = document.getElementById(TRGTYPE);
//					var selInd = trgt_type.selectedIndex;
//                    trgt_type_text_value = trgt_type.options[selInd].text		
					var trgt_type_text = trgt_type.value ;
					'; ?>

					//display the selected display text, not the value
					<?php echo $this->_tpl_vars['PL_DOM_STMT']; ?>
			
					<?php echo '
					//construct html to display chosen tracker
					var trgt_name_html = "<input id=\'target_name"+targets_added +"\' type=\'hidden\' size=\'20\' maxlength=\'255\' name=\'added_target_name"+targets_added+"\' value=\'"+trgt_name.value+"\' >"+trgt_name.value;
					var trgt_id_html = "<input type=\'hidden\' name=\'added_target_id"+trackers_added+"\' id=\'added_target_id"+trackers_added+"\' value=\'"+trgt_id.value+"\' >";
					var trgt_type_html = "<input name=\'added_target_type"+trackers_added+"\' id=\'added_target_type"+trackers_added+"\' type=\'hidden\' value=\'"+trgt_type.value+"\'/>"+trgt_type_text;

					'; ?>

					//display the html
					var trgt_html = "<div id='trgt_added_"+targets_added+"'> <table width='100%' class='tabDetailViewDL2'><tr class='tabDetailViewDL2' ><td width='25%'>"+trgt_name_html+"</td><td width='25%'>"+trgt_type_html+"</td><td>"+trgt_id_html+"<a href='#' onclick=\"remove_target('trgt_added_"+targets_added+"','"+targets_added+"'); \" >  <img src='<?php echo $this->_tpl_vars['IMAGE_PATH']; ?>
delete_inline.gif' alt='rem' align='absmiddle' border='0' height='12' width='12'><?php echo $this->_tpl_vars['MOD']['LBL_REMOVE']; ?>
</a></td></tr></table></div>";						
					document.getElementById('added_targets').innerHTML = document.getElementById('added_targets').innerHTML + trgt_html;

					//add values to array in string, seperated by "@@" characters
					wiz_list_of_targets_array[targets_added] = trgt_id.value+"@@"+trgt_name.value+"@@"+trgt_type.value;					
					//assign array to hidden input, which will be used by server to process array of targets
					document.getElementById('wiz_list_of_targets').value = wiz_list_of_targets_array.toString();					
					
					//now lets clear the form to allow input of new target	
					trgt_name.value = '';
					trgt_id.value = '';
					trgt_type.value = 'default';				

					<?php echo '
					if(targets_added ==1){
						document.getElementById(\'no_targets\').style.display=\'none\';
					}
				}
			}
			
			//this function will remove the selected target from the ui, and from the target array
			function remove_target(div,num){
					//clear UI
					var trgt_div = document.getElementById(div);
					trgt_div.style.display = \'none\';
					parentNE=trgt_div.parentNode;
					parentNE.removeChild(trgt_div);
					//clear target array from this entry and assign to form input
					wiz_list_of_targets_array[num] = \'\';										
					document.getElementById(\'wiz_list_of_targets\').value = wiz_list_of_targets_array.toString();					
			}

			//this function will remove the existing target from the ui, and add it\'s value to an array for removal upon save
			function remove_existing_target(div,id){
					//clear UI
					var trgt_div = document.getElementById(div);
					trgt_div.style.display = \'none\';
					parentNE=trgt_div.parentNode;
					parentNE.removeChild(trgt_div);
					//assign this id to form input for removal
					document.getElementById(\'wiz_remove_target_list\').value += \',\'+id;					
			}

					
		
	   /*
	     * this is the custom validation script that will validate the fields on step3 of wizard
	     * this is called directly from the add target button
	     */
	    
	    function validate_step4(from_popup){
			if(from_popup==\'true\'){
				return true;
			}
	        requiredTxt = SUGAR.language.get(\'app_strings\', \'ERR_MISSING_REQUIRED_FIELDS\');
	        var stepname = \'wiz_step3_\';
	        var has_error = 0;
	        var fields = new Array();
	        fields[0] = \'target_list_name\'; 
	        fields[1] = \'target_list_type\';
	        //loop through and check for empty strings (\'  \')
	        var field_value = \'\'; 
	        if( (trim(document.getElementById(fields[0]).value) !=\'\') ||  (trim(document.getElementById(fields[1]).value) !=\'\')){
	            for (i=0; i < fields.length; i++){
	                field_value = trim(document.getElementById(fields[i]).value);
	                if(field_value.length<1){
	                  add_error_style(\'wizform\', fields[i], requiredTxt +\' \' +document.getElementById(fields[i]).title );
	                  has_error = 1;
	                }
	            }
	        }else{
	            //no values have been entered, return false without error
	            return false;
	        }
	        //error has been thrown, return false
	        if(has_error == 1){
	            return false;
	        }
	        return true;
	
	    } 


			/**
			*This function will iterate through list of targets and gather all the values.  It will
			*populate these values, seperated by delimiters into hidden inputs for processing
			*/
			function gathertargets(){
				//start with the newly added targets, get count of total added
				count = parseInt(targets_added);
				final_list_of_targets_array = new Array();
				//iterate through list of added targets
				for(i=1;i<=count;i++){
					//make sure all values exist
					if( document.getElementById(\'target_name\'+i)  &&  document.getElementById(\'is_optout\'+i)  &&  document.getElementById(\'target_url\'+i) ){
						//make sure the check box value is int (0/1)
						var opt_val = \'0\';
						if(document.getElementById(\'is_optout\'+i).checked){opt_val =1;}
						//add values for this target entry into array of target entries
						final_list_of_targets_array[i] = document.getElementById(\'target_name\'+i).value+"@@"+opt_val+"@@"+document.getElementById(\'target_url\'+i).value;
					}
				}
				//assign array of target entries to hidden input, which will be used by server to process array of targets				
				document.getElementById(\'wiz_list_of_targets\').value = final_list_of_targets_array.toString();					

				//Now lets process existing targets, get count of existing targets
				count = parseInt(document.getElementById(\'existing_target_count\').value);
				final_list_of_existing_targets_array = new Array();
				//iterate through list of existing targets
				for(i=0;i<count;i++){
					//make sure all values exist
					if( document.getElementById(\'existing_target_name\'+i)  &&  document.getElementById(\'existing_is_optout\'+i)  &&  document.getElementById(\'existing_target_url\'+i) ){
						//make sure the check box value is int (0/1)
						var opt_val = \'0\';
						if(document.getElementById(\'existing_is_optout\'+i).checked){opt_val =1;}
						//add values for this target entry into array of target entries
						final_list_of_existing_targets_array[i] = document.getElementById(\'existing_target_id\'+i).value+"@@"+document.getElementById(\'existing_target_name\'+i).value+"@@"+opt_val+"@@"+document.getElementById(\'existing_target_url\'+i).value;
					}
				}
				//assign array of target entries to hidden input, which will be used by server to process array of targets				
				document.getElementById(\'wiz_list_of_existing_targets\').value = final_list_of_existing_targets_array.toString();					


			}

			/*
			*This function will populate values based on popup selection, and then call the
			*function to add the entry to the list of targets
			*/
			function set_return_prospect_list(popup_reply_data)
			{
				var form_name = popup_reply_data.form_name;
				var name_to_value_array = popup_reply_data.name_to_value_array;
				
				
				for (var the_key in name_to_value_array)
				{
					if(the_key == \'toJSON\')
					{
						/* just ignore */
					}
					else
					{
						window.document.forms[form_name].elements[the_key].value = name_to_value_array[the_key];
					}
				}
				add_target(\'true\');
			}


			</script>
			'; ?>
