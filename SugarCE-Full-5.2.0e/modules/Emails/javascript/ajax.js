/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/**
 */
var AjaxObject = {
	ret : '',
	currentRequestObject : null,
	//timeout : 30000, // 30 second timeout default
	timeout : 9999999999, // 30 second timeout default
	forceAbort : false,
	trail : new Array(),

	/**
	 */
	_reset : function() {
		this.timeout = 30000;
		this.forceAbort = false;
	},

	folderRenameCleanup : function() {
		SUGAR.email2.folders.setSugarFolders();
	},

	fullSyncCleanup : function(o) {
		this.folders.checkMailCleanup(o);
		SUGAR.email2.settings.settingsDialog.hide();
	},

	/**
	 */
	composeCache : function(o) {
		var idx = SUGAR.email2.composeLayout.currentInstanceId; // post instance increment
		// get email templates and user signatures
		var ret = JSON.parse(o.responseText);

		SUGAR.email2.composeLayout.emailTemplates = ret.emailTemplates;
		SUGAR.email2.composeLayout.signatures = ret.signatures;
		SUGAR.email2.composeLayout.fromAccounts = ret.fromAccounts;

		SUGAR.email2.composeLayout.setComposeOptions(idx);
	},


	handleDeleteSignature : function(o) {
		hideOverlay();
		var ret = JSON.parse(o.responseText);
		SUGAR.email2.composeLayout.signatures = ret.signatures;
    	var field = document.getElementById('signature_id');
		SUGAR.email2.util.emptySelectOptions(field);

		for(var i in ret.signatures) { // iterate through assoc array
			var opt = new Option(ret.signatures[i], i);
			field.options.add(opt);
		}
		setSigEditButtonVisibility();
	},
	
	/**
	 */
	handleDeleteReturn : function(o) {
		// force refresh ListView
		hideOverlay();
		if(document.getElementById('focusEmailMbox')) {
			YAHOO.namespace('frameFolders').selectednode = SUGAR.email2.folders.getNodeFromMboxPath(document.getElementById('focusEmailMbox').innerHTML);
		}

		// need to display success message before calling next async call?
		document.getElementById(this.target).innerHTML = o.responseText;
	},

	/**
	 */
    handleFailure : function(o) {
		// Failure handler
		overlay('Exception occurred...', o.statusText, 'alert');



	},

	handleReplyForward : function(o) {
		var a = JSON.parse(o.responseText);
		globalA = a;
		var idx = SUGAR.email2.composeLayout.currentInstanceId;

		document.getElementById('email_id' + idx).value = a.uid;
		document.getElementById('emailSubject' + idx).value = a.name;
		document.getElementById('addressTo' + idx).value = a.from;

		if(a.cc) {
			document.getElementById('addressCC' + idx).value = a.cc;
		}

		if(a.type) {
			document.getElementById('type' + idx).value = a.type;
		}

		// apply attachment values
		SUGAR.email2.composeLayout.loadAttachments(a.attachments);

		setTimeout("callbackReplyForward.finish(globalA);", 500);
	},

	handleReplyForwardForDraft : function(o) {
		var a = JSON.parse(o.responseText);
		globalA = a;
		var idx = SUGAR.email2.composeLayout.currentInstanceId;

		document.getElementById('email_id' + idx).value = a.uid;
		document.getElementById('emailSubject' + idx).value = a.name;
		document.getElementById('addressTo' + idx).value = a.to;

		if(a.cc) {
			document.getElementById('addressCC' + idx).value = a.cc;
		}

		if(a.bcc) {
			document.getElementById('addressBCC' + idx).value = a.bcc;
		}

		
		if(a.type) {
			document.getElementById('type' + idx).value = a.type;
		}

		// apply attachment values
		SUGAR.email2.composeLayout.loadAttachments(a.attachments);

		setTimeout("callbackReplyForward.finish(globalA);", 500);
	},
		
	/**
	 */
	handleSuccess : function(o) {
		document.getElementById(this.target).innerHTML = o.responseText;
		hideOverlay();
	},

	/**
	 */
	ieDeleteSuccess : function(o) {
		hideOverlay();
		SUGAR.email2.accounts.addNewAccount();

		var ret = JSON.parse(o.responseText);
		var ms = document.getElementById('ieAccountList');
		var ms2 = document.getElementById('ieAccountListShow');

		for(i=0; i<ms.options.length; i++) {
			if(ret.id == ms.options[i].value) {
				document.ieSelect.ieId.options[i] = null;
			}
		}

		for(j=0; j<ms2.options.length; j++) {
			if(ret.id == ms2.options[j].value) {
				ms2.options[j] = null;
			}
		}

		AjaxObject.setFromAccounts(ret);
		SUGAR.email2.accounts.rebuildAccountList();
		alert(app_strings.LBL_EMAIL_IE_DELETE_SUCCESSFUL);
		SUGAR.email2.accounts.rebuildFolderList();
		SUGAR.email2.search.markSearchAccountListDirty();
		
	},

	setFromAccounts : function(obj) {
		if (obj.fromAccounts != null) {
			SUGAR.email2.composeLayout.fromAccounts = obj.fromAccounts;
		}
	}, 
	
	/**
	 */
	ieSaveSuccess : function(o) {
		document.getElementById('saveButton').disabled = false;
		var a = JSON.parse(o.responseText);
		if (a) {
			if(a.error) {
				overlay(app_strings.LBL_EMAIL_ERROR_DESC, app_strings.LBL_EMAIL_ERROR_CHECK_IE_SETTINGS, 'alert');
				SUGAR.email2.accounts.ieAccountError(SUGAR.email2.accounts.errorStyle);
			} else {
				resp = JSON.parse(o.responseText);
				SUGAR.email2.search.markSearchAccountListDirty();
				SUGAR.email2.accounts.fillIeAccount(o.responseText);
				SUGAR.email2.accounts.focusOrCreateIeEl(o.responseText);
				SUGAR.email2.folders.startEmailCheckOneAccount(resp.id, true);
				AjaxObject.setFromAccounts(resp);
			}
		} else {
		     hideOverlay();
		     overlay(app_strings.LBL_EMAIL_ERROR_DESC, app_strings.LBL_EMAIL_ERROR_SAVE_ACCOUNT, 'alert'); 
		}
		
	},

	/**
	 */
	loadAttachments : function(o) {
		var result = JSON.parse(o.responseText);

		SUGAR.email2.composeLayout.loadAttachments(result);
	},

	/**
	 */
	loadSignature : function(o) {
		var ret = JSON.parse(o.responseText);
		SUGAR.email2.signatures[ret.id] = ret.signature_html;
		SUGAR.email2.composeLayout.setSignature(SUGAR.email2.signatures.targetInstance);
	},

	/**
	 * Follow up to mark email read|unread|flagged
	 */
	markEmailCleanup : function(o) {
		var ret = JSON.parse(o.responseText);
		if (!ret['status']) {
        	hideOverlay();
			overlay(app_strings.LBL_EMAIL_ERROR_DESC, ret['message'], 'alert');			
		} else {
			SUGAR.email2.contextMenus.markEmailCleanup();
		} // else
	},

	/**
	 */
	rebuildShowFolders : function(o) {
		var t = JSON.parse(o.responseText);
		var show = document.getElementById('ieAccountListShow');

		SUGAR.email2.util.emptySelectOptions(show);

		for(i=0; i<t.length; i++) { // iterate through assoc array
			var opt = new Option(t[i].text, t[i].value, t[i].selected);
			opt.selected = t[i].selected;
			show.options.add(opt);
		}

		SUGAR.email2.search.markSearchAccountListDirty();
		SUGAR.email2.accounts.renderTree();
	},

	/**
	 */
	rebuildShowFoldersForSearch : function(o) {
		var t = JSON.parse(o.responseText);
		var show = document.getElementById('accountListSearch');

		SUGAR.email2.util.emptySelectOptions(show);

		for(i=0; i<t.length; i++) { // iterate through assoc array
			var opt = new Option(t[i].text, t[i].value);
			opt.protocol = t[i].protocol;
			show.options.add(opt);
		}


		SUGAR.email2.search.accountListSearchChange(show);
	},

	/**
	 */
	saveListViewSortOrderPart2 : function() {
		// create the JSON string the func expects
		focusFolderPath = '[ "Home", "' + ieName + '"';

		var f = new String(focusFolder);
		var fEx = f.split('.');

		for(i=0; i<fEx.length; i++) {
			focusFolderPath += ', "' + fEx[i] +'"'
		}

		focusFolderPath += ']';

		YAHOO.namespace('frameFolders').selectednode = SUGAR.email2.folders.getNodeFromMboxPath(focusFolderPath);
		SUGAR.email2.listView.populateListFrame(YAHOO.namespace('frameFolders').selectednode, ieId, 'true');
	},

	/**
	 *
	 */
	sendEmailCleanUp : function(o) {
		hideOverlay();
		var ret = JSON.parse(o.responseText);
		if (ret) {
		  SUGAR.email2.composeLayout.forceCloseCompose(ret.composeLayoutId);
		  //SUGAR.email2.addressBook.showContactMatches(ret.possibleMatches);
		} else if (o.responseText) {
		  overlay(app_strings.LBL_EMAIL_ERROR_GENERAL_TITLE, o.responseText, 'alert');
		}
		SUGAR.email2.grid.getDataSource().reload();
		//Disabled while address book is disabled
		
	},

	/**
	 */
	settingsFolderRefresh : function(o) {
		//SUGAR.email2.accounts.rebuildFolderList(); // refresh frameFolder
		var ret = JSON.parse(o.responseText);
		var user = document.getElementById('userFolders');
		var grp = document.getElementById('groupFolders');
		var grpAdd = document.getElementById('groupFoldersAdd');
		var editGroupFolderList = document.getElementById('editGroupFolderList');
		if (document.getElementById('groupFolderAddName') != null) {
			document.getElementById('groupFolderAddName').value = '';
		} // if
		if (document.getElementById('addNewFolders') != null) {
			document.getElementById('addNewFolders').style.display = '';
		}
		if (document.getElementById('saveGroupFolder') != null) {
			document.getElementById('saveGroupFolder').style.display = 'none';
		}
		if (document.getElementById('cancelEditGroupFolder') != null) {
			document.getElementById('cancelEditGroupFolder').style.display = 'none';
		} // if

		SUGAR.email2.util.emptySelectOptions(user);
		SUGAR.email2.util.emptySelectOptions(grp);
		SUGAR.email2.util.emptySelectOptions(grpAdd);
		SUGAR.email2.util.emptySelectOptions(editGroupFolderList);

		for(i=0; i<ret.userFolders.length; i++) {
			var display = ret.userFolders[i].name;
			var value = ret.userFolders[i].id;
			var selected = (ret.userFolders[i].selected != "") ? true : false;
			var opt = new Option(display, value, selected);
			opt.selected = selected;
			user.options.add(opt);
		}

		for(i=0; i<ret.groupFolders.length; i++) {
			var display = ret.groupFolders[i].name;
			var value = ret.groupFolders[i].id;
			var selected = (ret.groupFolders[i].selected != "") ? true : false;
			var opt = new Option(display, value, selected);
			var optAdd = new Option(display, value, selected);
			opt.selected = selected;
			grp.options.add(opt);

			if(grpAdd) {
				grpAdd.options.add(new Option(display, value));
			}
			if (editGroupFolderList) {
				editGroupFolderList.options.add(new Option(display, value));
			}
		}
	},

	/**
	 */
	startRequest : function(callback, args, forceAbort) {
		if(this.currentRequestObject != null) {
			if(this.forceAbort == true) {
				YAHOO.util.Connect.abort(this.currentRequestObject, null, false);
			}
		}



		this.currentRequestObject = YAHOO.util.Connect.asyncRequest('POST', "./index.php", callback, args);
		this._reset();
	},

	/**
	 */
	updateFolderSubscriptions : function() {
		SUGAR.email2.folders.lazyLoadSettings(); // refresh view in Settings overlay
		SUGAR.email2.folders.setSugarFolders(1000);// refresh view in TreeView
	},

	/**
	 */
	updateFrameFolder : function() {
		SUGAR.email2.folders.checkEmailAccounts();
	},

	/**
	 */
	updateUserPrefs : function(o) {
		SUGAR.email2.userPrefs = JSON.parse(o.responseText);



		SUGAR.email2.folders.startCheckTimer(); // starts the auto-check interval
	},

	/**
	 */
	uploadAttachmentSuccessful : function(o) {
		// clear out field
		document.getElementById('email_attachment').value = '';

		var ret = JSON.parse(o.responseText);
		var idx = SUGAR.email2.composeLayout.currentInstanceId;
		var overall = document.getElementById('addedFiles' + idx);
		var index = overall.childNodes.length;

		// bucket
		var tmp = Ext.DomHelper.append(overall, {
			tag : 'div',
			id : 'email_attachment_bucket' + idx + index
		}, true);

		var d = tmp.dom;

		// remove button
		Ext.DomHelper.append(d, {
			tag:'img',
			src: 'themes/Sugar/images/minus.gif',
			cls: 'image',
			style: 'cursor:pointer',
			align: 'absmiddle',
			onclick: "SUGAR.email2.composeLayout.deleteUploadAttachment('"+idx +index+"', '"+ret.guid+ret.name+"');"
		});
		// file icon
		Ext.DomHelper.append(d, {
			tag:'img',
			src: 'themes/default/images/attachment.gif',
			id:'email_attachmentImage' + idx + index,
			align: 'absmiddle',
			cls: 'image'
		});
		// hidden id field
		Ext.DomHelper.append(d, {
			tag:'input',
			type: 'hidden',
			value: ret.guid+ret.name,
			name:'email_attachment' + index,
			id:'email_attachment' + idx + index
		});
		// file name
		if (ret.nameForDisplay != null) {
			d.innerHTML += ret.nameForDisplay + "&nbsp;";
		} else {
			d.innerHTML += ret.name + "&nbsp;";
		}
		// br
		Ext.DomHelper.append(d, {
			tag:'br'
		});

		if(SUGAR.email2.util.isIe()) {
			document.getElementById('addedFiles' + idx).innerHTML = document.getElementById('addedFiles' + idx).innerHTML;
		}

		// hide popup
		SUGAR.email2.addFileDialog.hide();
		// focus attachments
		SUGAR.email2.composeLayout.showAttachmentPanel(idx);
	}
};


///////////////////////////////////////////////////////////////////////////
////	PER MODULE CALLBACK OBJECTS
AjaxObject.accounts = {
	saveOutboundCleanup : function(o) {
		var ret = JSON.parse(o.responseText);

		SUGAR.mailers = ret.mailers;
		SUGAR.email2.accounts.rebuildMailerOptions();
		SUGAR.email2.accounts.outboundDialog.hide();

		/*// clear out form
		var form = document.getElementById('outboundEmailForm');

		for(i=0; i<form.elements.length; i++) {
			if(form.elements[i].name == 'mail_smtpport') {
				form.elements[i].value = 25;
			} else if(form.elements[i].type != 'button') {
				form.elements[i].value = '';
			} else if(form.elements[i].type == 'checkbox') {
				form.elements[i].checked = false;
			}
		}*/

		// preselect new SMTP server
		var sel = document.forms['ieAccount'].elements['outbound_email'];

		for(i=0; i<sel.options.length; i++) {
			if(sel.options[i].value == ret.newId) {
				sel.options[i].selected = true;
				return;
			}
		}
	},

	callbackDeleteOutbound : {
		success	: function(o) {
			var ret = JSON.parse(o.responseText);
			hideOverlay();
			SUGAR.mailers = ret;
			SUGAR.email2.accounts.rebuildMailerOptions();
		},
		
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	},
	
	callbackEditOutbound : {
		success	: function(o) {
			var ret = JSON.parse(o.responseText);
			// show overlay
			SUGAR.email2.accounts.showAddSmtp();

			// fill values
			document.getElementById("mail_id").value = ret.id;
			document.getElementById("mail_sendtype").value = ret.mail_sendtype;
			document.getElementById("mail_name").value = ret.name;
			document.getElementById("mail_smtpserver").value = ret.mail_smtpserver;
			document.getElementById("mail_smtpport").value = ret.mail_smtpport;
			document.getElementById("mail_smtpuser").value = ret.mail_smtpuser;
			document.getElementById("mail_smtppass").value = ret.mail_smtppass;
			document.getElementById("mail_smtpauth_req").checked = (ret.mail_smtpauth_req == 1) ? true : false;
			document.getElementById("mail_smtpssl").checked = (ret.mail_smtpssl == 1) ? true : false;
		},
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	},
	
	callbackCheckMailProgress : {
	   success : function(o) {
	       if (typeof(SUGAR.email2.accounts.totalMsgCount) == "undefined") {
	           SUGAR.email2.accounts.totalMsgCount = -1;
	       }
	       
	       //Check for server timeout / errors
	       var ret = JSON.parse(o.responseText);
	       var done = false;
		   
	       if (typeof(o.responseText) == 'undefined' || o.responseText == "" || ret == false) {
	           hideOverlay();
	           overlay(app_strings.LBL_EMAIL_ERROR_DESC, app_strings.LBL_EMAIL_ERROR_TIMEOUT, 'alert');
	           SUGAR.email2.accounts.totalMsgCount = -1;
               //SUGAR.email2.folders.rebuildFolders();
               done = true;
	       } 
	       
	       var currIeId = ret['ieid'];
	       
	      
	       var serverCount = ret.count;
	       
	       if (ret['status'] == 'done') {
	           for(i=0; i < SUGAR.email2.accounts.ieIds.length; i++) {
	               if (i == SUGAR.email2.accounts.ieIds.length - 1) {
	                   //We are all done
	                   done = true;
	                   break;
	               } else if (SUGAR.email2.accounts.ieIds[i] == currIeId) {
	                   //Go to next account
	                   currIeId = SUGAR.email2.accounts.ieIds[i+1];
	                   ret.count = 0;
	                   SUGAR.email2.accounts.totalMsgCount = -1;
	                   break;
	               }
	           }
	       } 
	       else if (ret.mbox && ret.totalcount && ret.count) {
	           SUGAR.email2.accounts.totalMsgCount = ret.totalcount;
	           if (ret.count >= ret.totalcount) {
	               serverCount = 0;
	           }
	       } else if (SUGAR.email2.accounts.totalMsgCount < 0 && ret.totalcount) {
	           SUGAR.email2.accounts.totalMsgCount = ret.totalcount;
	       } else {
		       hideOverlay();
               overlay(app_strings.LBL_EMAIL_ERROR_DESC, app_strings.LBL_EMAIL_ERROR_TIMEOUT, 'alert');
               SUGAR.email2.accounts.totalMsgCount = -1;
               done = true;
		   }
	       
	       if (done) {
	           SUGAR.email2.accounts.totalMsgCount = -1;
	           hideOverlay();
	           SUGAR.email2.folders.rebuildFolders();
	           SUGAR.email2.grid.getDataSource().reload();
	       } else if (SUGAR.email2.accounts.totalMsgCount < 0) {
               Ext.MessageBox.updateProgress(0, "Checking Account " + (i + 2) + " of " + SUGAR.email2.accounts.ieIds.length);
               AjaxObject.startRequest(AjaxObject.accounts.callbackCheckMailProgress, urlStandard + 
                                '&emailUIAction=checkEmailProgress&ieId=' + currIeId + "&currentCount=0&synch=" + ret.synch);
           } else {
               Ext.MessageBox.updateProgress(ret.count / SUGAR.email2.accounts.totalMsgCount,
                   app_strings.LBL_EMAIL_DOWNLOAD_STATUS.replace(/\[\[count\]\]/, ret.count).replace(/\[\[total\]\]/, SUGAR.email2.accounts.totalMsgCount));
	           AjaxObject.startRequest(AjaxObject.accounts.callbackCheckMailProgress, urlStandard + 
                   '&emailUIAction=checkEmailProgress&ieId=' + currIeId + "&currentCount=" + serverCount + 
                   '&mbox=' + ret.mbox + '&synch=' + ret.synch);
	       }
	   },
	   failure : AjaxObject.handleFailure,
       timeout : AjaxObject.timeout,
       scope   : AjaxObject
	}
};

AjaxObject.addressBook = {
	/**
	 * displays search results for a user querying on what contacts, users, leads, prospects they have access to
	 */
	displaySearchResults : function(o) {
		// prep header
		var header = {
			tag : 'table',
			id : 'peopleTable',
			cellpadding : 0,
			cellspacing : 0,
			border : 0,
			width : "100%",
			cls : 'tabForm'
		};

		if(document.getElementById("peopleTable")) {
			//SUGAR.email2.util.removeElementRecursive(document.getElementById("peopleTable"));
			document.getElementById("peopleTable").innerHTML = "";
		} else {
		  Ext.DomHelper.append("contactsDialogueHTML", header);
		}

		Ext.DomHelper.append("peopleTable", {
			tag : 'tr',
			id : 'peopleTableHeaderRow'
		});

		Ext.DomHelper.append('peopleTableHeaderRow', {
			tag : 'td',
			width : "1%",
			cls : 'dataLabel',
			html : "&nbsp;"
		});
		Ext.DomHelper.append('peopleTableHeaderRow', {
			tag : 'td',
			width : "30%",
			cls : 'dataLabel',
			html : app_strings.LBL_EMAIL_ADDRESS_BOOK_NAME
		});
		Ext.DomHelper.append('peopleTableHeaderRow', {
			tag : 'td',
			width : "39%",
			cls : 'dataLabel',
			html : app_strings.LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR
		});
		Ext.DomHelper.append('peopleTableHeaderRow', {
			tag : 'td',
			width : "30%",
			cls : 'dataLabel'
		});
		var ret = JSON.parse(o.responseText);

		for(var i in ret) {
            if (i > -1) {
			    SUGAR.email2.addressBook.displaySearchResultRow(i, ret[i]);
            }
		}
		// cn: bug 13912 - IE's dom is fubar.  fix with IE-hack
		if(SUGAR.email2.util.isIe()) {
			document.getElementById('contactsDialogueHTML').innerHTML = document.getElementById('contactsDialogueHTML').innerHTML;
		}
	},













	/**
	 * Retrieves Contacts (assigned and hand-selected) for the current user
	 */
	getUserContacts : function(o) {
		var ret = JSON.parse(o.responseText);
		SUGAR.email2.addressBook._contactCache = ret;
		SUGAR.email2.addressBook.buildContactList(ret);

		if(SUGAR.email2.addressBook.editContactDialog && SUGAR.email2.addressBook.editContactDialog.isVisible()) {
			SUGAR.email2.addressBook.editContactDialog.hide();
		}




	},

	/**
	 * sets the edit contact mini-form in HTML
	 */
	setEditContactForm : function(o) {
		var ret = JSON.parse(o.responseText);
		var layout = SUGAR.email2.addressBook.editContactDialog.getLayout();
		var panel = new Ext.ContentPanel('editContactTab', {title: ret.contactName});
		//Prepare global variables to be read by the edit form
        module='Contacts';
        panel.setContent(ret.form);

		SUGAR.email2.addressBook.editContactDialog.beginUpdate();
		SUGAR.email2.addressBook.editContactDialog.setTitle(app_strings.LBL_EMAIL_EDIT_CONTACT);
		layout.add('center', panel);

		prefillEmailAddresses(ret.form, ret.prefillData);

		SUGAR.email2.addressBook.editContactDialog.endUpdate();
		SUGAR.email2.addressBook.editContactDialog.show();
		SUGAR.email2.addressBook.editContactDialog.resizeTo(600, 400);
	}
};
/**
 * AddressBook callbacks
 */
AjaxObject.addressBook.callback = {
	editContact : {
		success	: AjaxObject.addressBook.setEditContactForm,
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	},






















	search : {
		success	: AjaxObject.addressBook.displaySearchResults,
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	}
};

///////////////////////////////////////////////////////////////////////////////
////	COMPOSE LAYOUT
AjaxObject.composeLayout = {
	/**
	 * Populates the record id
	 */
	saveDraftCleanup : function(o) {
		hideOverlay();
		var ret = JSON.parse(o.responseText);
		SUGAR.email2.composeLayout.forceCloseCompose(ret.composeLayoutId);
	}
};

AjaxObject.composeLayout.callback = {
	saveDraft : {
		success	: AjaxObject.composeLayout.saveDraftCleanup,
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	}
};

AjaxObject.detailView = {
	/**
	 * Pops-up a printable view of an email
	 */
	displayPrintable : function(o) {
		var ret = JSON.parse(o.responseText);
		var displayTemplate = new Ext.DomHelper.Template(SUGAR.email2.templates['viewPrintable']);
		// 2 below must be in global context
		meta = ret.meta;
		meta['panelId'] = SUGAR.email2.util.getPanelId();
		email = ret.meta.email;
		if (typeof(email.cc) == 'undefined') {
		  email.cc = "";
		}
		var out = displayTemplate.applyTemplate({
			'app_strings'	: app_strings,
			'theme'			: theme,
			'idx'			: 'Preview',
			'meta'			: meta,
			'email'			: meta.email
		});

		// open popup window
		var popup = window.open('modules/Emails/templates/_blank.html', 'printwin' , 
		    'scrollbars=yes,menubar=no,height=600,width=800,resizable=yes,toolbar=no,location=no,status=no');

		popup.document.write(out);
		popup.document.close();
	},

	/**
	 * Takes formatted response and creates a modal pop-over containing a title and content
	 */
	displayView : function(o) {
		var ret = JSON.parse(o.responseText);

		if(!SUGAR.email2.detailView.viewDialog) {
			SUGAR.email2.detailView.viewDialog = new Ext.LayoutDialog("viewDialog", {
				iframe : true,
				modal	: true,
				width	: 800,
				height	: 450,
				shadow	: true,
				minWidth: 300,
				minHeight: 300,

				center: {
					autoScroll:true,
					closeOnTab: false,
					alwaysShowTabs: false
				}
			});
		} // end lazy load

		SUGAR.email2.detailView.viewDialog.setTitle(ret.title);

		var view = new Ext.ContentPanel('viewDialogContent', {
			title : ret.title,
			width : "100%",
			height : "100%"
		});
		view.setContent(ret.html);

		SUGAR.email2.detailView.viewDialog.beginUpdate();
		SUGAR.email2.detailView.viewDialog.getLayout().add('center', view);
		SUGAR.email2.detailView.viewDialog.show();
		SUGAR.email2.detailView.viewDialog.endUpdate();
		SUGAR.email2.detailView.viewDialog.resizeTo(800, 450);
	},

	/**
	 * Generates a modal popup to populate with the contents of bean's full EditView
	 */
	showQuickCreateForm : function(o) {
		var ret = JSON.parse(o.responseText);

		if(!SUGAR.email2.detailView.quickCreateDialog) {
			SUGAR.email2.detailView.quickCreateDialog = new Ext.LayoutDialog("quickCreate", {
				iframe : true,
				modal	: true,
				width	: 800,
				height	: 450,
				shadow	: true,
				minWidth: 300,
				minHeight: 300,
				title   : app_strings.LBL_EMAIL_QUICK_CREATE,

				center: {
					autoScroll:true,
					closeOnTab: false,
					alwaysShowTabs: false
				}
			});
			SUGAR.email2.detailView.quickCreateDialog.on('beforehide',function(){
				var qsFields = Ext.query('.sqsEnabled');
				for(var qsField in qsFields){
					if (typeof QSFieldsArray[qsFields[qsField].id] != 'undefined')
					Ext.getCmp('combobox_'+qsFields[qsField].id).destroy();
				}
			});
		} // end lazy load

		var qcEditView = new Ext.ContentPanel('quickCreateContent', {
			title : app_strings.LBL_EMAIL_QUICK_CREATE,
			width : "100%",
			height : "100%"
		});
		qcEditView.setContent(ret.html);
/*		var editForm = document.getElementById('form_EmailQCView_' + ret.module);
		editForm.id = 'EditView';
		editForm.name = 'EditView';*/
		SUGAR.util.evalScript(ret.html + '<script language="javascript">enableQS(true);</script>');
		
		SUGAR.email2.detailView.quickCreateDialog.ieId = ret.ieId;
		SUGAR.email2.detailView.quickCreateDialog.uid = ret.uid;
        SUGAR.email2.detailView.quickCreateDialog.mbox = ret.mbox;
        SUGAR.email2.detailView.quickCreateDialog.qcmodule = ret.module;

		SUGAR.email2.detailView.quickCreateDialog.beginUpdate();
		SUGAR.email2.detailView.quickCreateDialog.getLayout().add('center', qcEditView);
		SUGAR.email2.detailView.quickCreateDialog.show();
		SUGAR.email2.detailView.quickCreateDialog.endUpdate();
		SUGAR.email2.detailView.quickCreateDialog.resizeTo(800, 450);

		var editForm = document.getElementById('form_EmailQCView_' + ret.module);
		if (editForm) {
		  editForm.module.value = 'Emails';
		  prefillEmailAddresses(editForm, ret.emailAddress);
		}
	},

	saveQuickCreateForm : function(o) {
	    hideOverlay();
		SUGAR.email2.detailView.quickCreateDialog.hide();
		validate['EditView'] = [ ];
	},

	saveQuickCreateFormAndReply : function(o) {
	    hideOverlay();
	    var ret = JSON.parse(o.responseText);
        SUGAR.email2.detailView.quickCreateDialog.hide();
        var qcd = SUGAR.email2.detailView.quickCreateDialog;
        var type = (qcd.qcmodule == 'Cases') ? 'replyCase' : 'reply';
        if (ret) {
            var emailID = ret.id;
            SUGAR.email2.composeLayout.c0_replyForwardEmail(null, ret.id, 'sugar::Emails', type);
        } else {
            SUGAR.email2.composeLayout.c0_replyForwardEmail(qcd.ieId, qcd.uid, qcd.mbox, type);
        }
        //Cean the validate cache to prevent errors on the next call
        validate['EditView'] = [ ];
    },

	saveQuickCreateFormAndAddToAddressBook : function(o) {
	   hideOverlay();
		SUGAR.email2.detailView.quickCreateDialog.hide();
		SUGAR.email2.complexLayout.findPanel('contactsTab').show();
		validate['EditView'] = [ ];
	},
	
	handleAssignmentDialogAssignAction : function() {
		var select = document.getElementById("userSelect");
		var dist = document.getElementById("dm").value;
		var users = false;
		var userIds = "";
		var rules = false;
		var warn1 = mod_strings.LBL_WARN_NO_USERS;
		var warn2 = "";
	
		for(i=0; i<select.options.length; i++) {
			if(select.options[i].selected == true) {
				userIds = userIds + select.options[i].id + ",";
				users = true;
				warn1 = "";
			}
		}
		
		userIds = userIds.substring(0, (userIds.length - 1));
		if(dist != "") {
			rules = true;
		} else {
			warn2 = mod_strings.LBL_WARN_NO_DIST;
		}
		
		if(users && rules) {
			
			// TO pass list of UIDS/emailIds
			//var uids = SUGAR.email2.listView.getUidsFromSelection();
            var emailUids = SUGAR.email2.listView.getUidsFromSelection();
            var uids = "";
            for(i=0; i<emailUids.length; i++) {
                if(uids != '') {
                    uids += app_strings.LBL_EMAIL_DELIMITER;
                }
                uids += emailUids[i];
            }
			
			var row = SUGAR.email2.grid.getSelections()[0];
			var ieid = row.data.ieId;
		    var mbox = row.data.mbox;
            AjaxObject.startRequest(callbackAssignmentAction, urlStandard + '&emailUIAction=' + "doAssignmentAssign&uids=" + uids + "&ieId=" + ieid + "&folder=" + mbox + "&distribute_method=" + dist + "&users=" +userIds);
            SUGAR.email2.contextMenus.assignmentDialog.hide();
			overlay('Assignment', app_strings.LBL_EMAIL_ONE_MOMENT);
			
		} else {
			alert(mod_strings.LBL_ASSIGN_WARN + "\n" + warn1 + "\n" + warn2);
		}
		
	},
	
	handleAssignmentDialogDeleteAction : function() {
		// TO pass list of UIDS/emailIds
		var uids = SUGAR.email2.listView.getUidsFromSelection();
		var row = SUGAR.email2.grid.getSelections()[0];
		var ieid = row.data.ieId;
	    var mbox = row.data.mbox;
        AjaxObject.startRequest(callbackAssignmentAction, urlStandard + '&emailUIAction=' + "doAssignmentDelete&uids=" + uids + "&ieId=" + ieId + "&folder=" + mbox);
        SUGAR.email2.contextMenus.assignmentDialog.hide();
		overlay(app_strings.LBL_EMAIL_PERFORMING_TASK, app_strings.LBL_EMAIL_ONE_MOMENT);

		// AJAX Call
		
	},
	
	showEmailDetailView : function(o) {
        hideOverlay();
        var ret = JSON.parse(o.responseText);
        SUGAR.email2.contextMenus.emailDetailDialog = new Ext.LayoutDialog("emailDetailDialog", {
            modal   : true,
            iframe : true,
            width   : 750,
            height  : 630,
            shadow  : true,
            minWidth: 500,
            minHeight: 450,
            title   : app_strings.LBL_EMAIL_RECORD,
            
            center: {
				autoScroll:true,
                closeOnTab: false,
                alwaysShowTabs: false                	
            }

        });
        
        var emailDetailDialogContent = new Ext.ContentPanel('emailDetailDialogContent', {
            title : app_strings.LBL_EMAIL_RECORD,
            width : "100%",
            height : "100%"
        });
        emailDetailDialogContent.setContent(ret.html);
        SUGAR.util.evalScript(ret.html);

        SUGAR.email2.contextMenus.emailDetailDialog.beginUpdate();
        SUGAR.email2.contextMenus.emailDetailDialog.getLayout().add('center', emailDetailDialogContent);
        SUGAR.email2.contextMenus.emailDetailDialog.show();
        SUGAR.email2.contextMenus.emailDetailDialog.endUpdate();        
		SUGAR.email2.contextMenus.emailDetailDialog.show();		
	},
	
	showAssignmentDialogWithData : function(o) {
        hideOverlay();
        var ret = JSON.parse(o.responseText);
        SUGAR.email2.contextMenus.assignmentDialog = new Ext.LayoutDialog("assignmentDialog", {
            modal   : true,
            iframe : true,
            width   : 700,
            height  : 350,
            shadow  : true,
            minWidth: 500,
            minHeight: 250,
            title   : app_strings.LBL_EMAIL_ASSIGNMENT,
            
            center: {
				autoScroll:true,
                closeOnTab: false,
                alwaysShowTabs: false                	
            }

        });
        
        var assignmentDialogContent = new Ext.ContentPanel('assignmentDialogContent', {
            title : app_strings.LBL_EMAIL_ASSIGNMENT,
            width : "100%",
            height : "100%"
        });
        assignmentDialogContent.setContent(ret);
        SUGAR.util.evalScript(ret);

        SUGAR.email2.contextMenus.assignmentDialog.beginUpdate();
        SUGAR.email2.contextMenus.assignmentDialog.getLayout().add('center', assignmentDialogContent);
        SUGAR.email2.contextMenus.assignmentDialog.show();
        SUGAR.email2.contextMenus.assignmentDialog.endUpdate();
        
		SUGAR.email2.contextMenus.assignmentDialog.show();
		
	},
	
	showImportForm : function(o) {
        var ret = JSON.parse(o.responseText);
        document.getElementById('quickCreateContent').innerHTML = "";
        hideOverlay();
        if (!ret) {
            return false;
        }

        if(!SUGAR.email2.detailView.importDialog) {
            SUGAR.email2.detailView.importDialog = new Ext.LayoutDialog("importDialog", {
                iframe : true,
                modal   : true,
                width   : 600,
                height  : 225,
                shadow  : true,
                minWidth: 500,
                minHeight: 150,
                title   : app_strings.LBL_EMAIL_IMPORT_SETTINGS,
                syncHeightBeforeShow: true,

                center: {
                    autoScroll:true,
                    closeOnTab: false,
                    alwaysShowTabs: false
                }
            });
            SUGAR.email2.detailView.importDialog.addButton(app_strings.LBL_EMAIL_ARCHIVE_TO_SUGAR);
            SUGAR.email2.detailView.importDialog.addButton(app_strings.LBL_EMAIL_CANCEL, function(o) {
                SUGAR.email2.detailView.importDialog.hide()
                document.getElementById('importDialogContent').innerHTML = "";
            });
            SUGAR.email2.detailView.importDialog.setDefaultButton(SUGAR.email2.detailView.importDialog.buttons[0]);
        } // end lazy load
        SUGAR.email2.detailView.importDialog.buttons[0].purgeListeners();
        SUGAR.email2.detailView.importDialog.buttons[0].on('click', AjaxObject.detailView.getImportAction(ret));

        var qcEditView = new Ext.ContentPanel('importDialogContent', {
            title : app_strings.LBL_EMAIL_QUICK_CREATE,
            width : "100%",
            height : "100%"
        });
        validate = [];
        qcEditView.setContent(ret.html);
        SUGAR.util.evalScript(ret.html);

        SUGAR.email2.detailView.importDialog.beginUpdate();
        SUGAR.email2.detailView.importDialog.getLayout().add('center', qcEditView);
        SUGAR.email2.detailView.importDialog.show();
        SUGAR.email2.detailView.importDialog.endUpdate();
        SUGAR.email2.detailView.importDialog.move = ret.move;
        SUGAR.email2.detailView.importDialog.resizeTo(600, 225);

    },
    getImportAction : function(ret) {
        return function() {
            if (!check_form('ImportEditView')) return false;
			var get = "";
            var editView = document.getElementById('ImportEditView');






            if (editView.assigned_user_id != null) {
                get = get + "&user_id=" + editView.assigned_user_id.value
                //var user_id = editView.assigned_user_id.value;
            }
            var parent_id = editView.parent_id.value;
            var parent_type = editView.parent_type.value;
            var row = SUGAR.email2.grid.getSelections()[0];
            var ieId = row.data.ieId; 
            var mbox = row.data.mbox; 
            var serverDelete = editView.serverDelete.checked;
            var emailUids = SUGAR.email2.listView.getUidsFromSelection();
            var uids = "";
            for(i=0; i<emailUids.length; i++) {
                if(uids != '') {
                    uids += app_strings.LBL_EMAIL_DELIMITER;
                }
                uids += emailUids[i];
            }
            
            var action = 'importEmail&uid=';
            if (SUGAR.email2.detailView.importDialog.move) {
                action = 'moveEmails';
                action = action + '&sourceFolder=' + ret['srcFolder'];
                action = action + '&sourceIeId=' + ret['srcIeId'];
                action = action + '&destinationFolder=' + ret['dstFolder'];
                action = action + '&destinationIeId=' + ret['dstIeId'];
                action = action + '&emailUids=';
            } 
            if (action.search(/importEmail/) != -1) {
                overlay(app_strings.LBL_EMAIL_IMPORTING_EMAIL, app_strings.LBL_EMAIL_ONE_MOMENT);
            } else {
                overlay("Moving Email(s)", app_strings.LBL_EMAIL_ONE_MOMENT);
            }
            
            AjaxObject.startRequest(callbackStatusForImport, urlStandard + '&emailUIAction=' + action + uids + "&ieId=" + ieId + "&mbox=" + mbox + 
            get + "&parent_id=" + parent_id + "&parent_type=" + parent_type + '&delete=' + serverDelete);
            SUGAR.email2.detailView.importDialog.hide();
            document.getElementById('importDialogContent').innerHTML = "";
        }
    },
    showRelateForm : function(o) {
        var ret = JSON.parse(o.responseText);
        document.getElementById('quickCreateContent').innerHTML = "";
        hideOverlay();
        if (!ret) {
            return false;
        }

        if(!SUGAR.email2.detailView.relateDialog) {
            SUGAR.email2.detailView.relateDialog = new Ext.LayoutDialog('relateDialog', {
                iframe : true,
                modal   : true,
                width   : 800,
                height  : 150,
                shadow  : true,
                minWidth: 500,
                minHeight: 150,
                title   : app_strings.LBL_EMAIL_RELATE_EMAIL,
                syncHeightBeforeShow: true,

                center: {
                    autoScroll:true,
                    closeOnTab: false,
                    alwaysShowTabs: false
                }
            });
            SUGAR.email2.detailView.relateDialog.addButton(app_strings.LBL_EMAIL_RELATE_TO, function(o) {
                if (!check_form('ImportEditView')) return false;
				var get = "";
                var editView = document.getElementById('ImportEditView');
                var parent_id = editView.parent_id.value;
                var parent_type = editView.parent_type.value;
                var row = SUGAR.email2.grid.getSelections()[0];
                var ieId = row.data.ieId; 
                var mbox = row.data.mbox; 
                var emailUids = SUGAR.email2.listView.getUidsFromSelection();
                var uids = "";
                for(i=0; i<emailUids.length; i++) {
                    if(uids != '') {
                        uids += app_strings.LBL_EMAIL_DELIMITER;
                    }
                    uids += emailUids[i];
                }
                overlay(app_strings.LBL_EMAIL_PERFORMING_TASK, app_strings.LBL_EMAIL_ONE_MOMENT);
                AjaxObject.startRequest(callbackStatusForImport, urlStandard + '&emailUIAction=relateEmails&uid=' + uids 
                    + "&ieId=" + ieId + "&mbox=" + mbox + "&parent_id=" + parent_id + "&parent_type=" + parent_type);
                SUGAR.email2.detailView.relateDialog.hide();
                document.getElementById('relateDialogContent').innerHTML = "";
            });
            SUGAR.email2.detailView.relateDialog.addButton(app_strings.LBL_EMAIL_CANCEL, function(o) {
                SUGAR.email2.detailView.relateDialog.hide()
                document.getElementById('relateDialogContent').innerHTML = "";
            });
            SUGAR.email2.detailView.relateDialog.setDefaultButton(SUGAR.email2.detailView.relateDialog.buttons[0]);
        } // end lazy load

        var qcEditView = new Ext.ContentPanel('relateDialogContent', {
            title : app_strings.LBL_EMAIL_QUICK_CREATE,
            width : "100%",
            height : "100%"
        });
		validate = [];
        qcEditView.setContent(ret.html);
		SUGAR.util.evalScript(ret.html);

        SUGAR.email2.detailView.relateDialog.beginUpdate();
        SUGAR.email2.detailView.relateDialog.getLayout().add('center', qcEditView);
        SUGAR.email2.detailView.relateDialog.show();
        SUGAR.email2.detailView.relateDialog.endUpdate();
        //SUGAR.email2.detailView.relateDialog.resizeTo(800, 450);

    }
};
/**
 * DetailView callbacks
 */
AjaxObject.detailView.callback = {
	emailDetail : {
		success	: function(o) {
			SUGAR.email2.o = o;
			var ret = JSON.parse(o.responseText);
			SUGAR.email2.detailView.consumeMetaDetail(ret);
		},
		argument: [targetDiv],
		failure	: AjaxObject.handleFailure,
		timeout	: 0,
		scope	: AjaxObject
	},
	emailPreview : {
		success	: function(o) {
			SUGAR.email2.o = o;
			var ret = JSON.parse(o.responseText);
			SUGAR.email2.detailView.consumeMetaPreview(ret);
		},
		failure	: AjaxObject.handleFailure,
		timeout	: 0,
		scope	: AjaxObject
	},
	viewPrint : {
		success	: AjaxObject.detailView.displayPrintable,
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	},
	viewRaw : {
		success	: AjaxObject.detailView.displayView,
		failure	: AjaxObject.handleFailure,
		timeout	: AjaxObject.timeout,
		scope	: AjaxObject
	}
};





AjaxObject.folders = {
	/**
	 * check-mail post actions
	 */
	checkMailCleanup : function(o) {
		hideOverlay();
		AjaxObject.folders.rebuildFolders(o); // rebuild TreeView

		// refresh focus ListView
		if(SUGAR.email2.grid.getDataSource().baseParams['mbox'] != "" && SUGAR.email2.grid.getDataSource().baseParams['ieId'] != "") {
			SUGAR.email2.grid.getDataSource().baseParams['emailUIAction'] = 'getMessageListXML';
			//SUGAR.email2.grid.getDataSource().initPaging(urlBase, SUGAR.email2.userPrefs.emailSettings.showNumInList);
			//forcePreview = true;
		    //SUGAR.email2.grid.getDataSource().loadPage(1, SUGAR.email2.listView.setEmailListStyles);
		    SUGAR.email2.grid.getDataSource().load({params:{start:0, limit:SUGAR.email2.userPrefs.emailSettings.showNumInList}});
		}
		SUGAR.email2.folders.startCheckTimer(); // resets the timer
	},

	/**
	 */
	rebuildFolders : function(o) {
		hideOverlay();

		var data = JSON.parse(o.responseText);

		email2treeinit(SUGAR.email2.tree, data.tree_data, 'frameFolders', data.param);
		SUGAR.email2.folders.setSugarFolders();
		//SUGAR.email2.tree.render();
	}
};
AjaxObject.folders.callback = {
	checkMail : {
		success	: AjaxObject.folders.checkMailCleanup,
		failure	: AjaxObject.handleFailure,
		timeout	: 600000, // 5 mins
		scope	: AjaxObject
	}
}

AjaxObject.rules = {
	loadRulesForSettings : function(o) {
		document.getElementById("rulesListCell").innerHTML = o.responseText;
		// assume we have the class we need
		SUGAR.routing.getStrings();
		SUGAR.routing.getDependentDropdowns();
	}
};
////	END PER MODULE CALLBACK OBJECTS
///////////////////////////////////////////////////////////////////////////


var callback = {
	success	: AjaxObject.handleSuccess,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackAccount = {
	success	: AjaxObject.ieSaveSuccess,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackAccountDelete = {
	success	: AjaxObject.ieDeleteSuccess,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackAddGroupFolderFrom = {
	success	: function(o) {
		hideOverlay();
		//SUGAR.email2.accounts.rebuildFolderList(); // refresh frameFolder
		document.getElementById('groupFolderAddName').value = '';
		document.getElementById('groupFoldersAdd').options[0].selected = true;
		document.getElementById('groupFolderAddName').value = '';
		document.getElementById('editGroupFolderList').options[0].selected = true;
		document.getElementById('groupFoldersTeam').options[0].selected = true;
		SUGAR.email2.folders.loadSettingFolder(); // refresh folder multi-selects
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackSaveGroupFolderFrom = {
	success	: function(o) {
		hideOverlay();
		var data = JSON.parse(o.responseText);
		if (data.status != "done") {
			overlay(app_strings.LBL_EMAIL_ERROR_DESC, data.message, 'alert');
			return;
		}
		//SUGAR.email2.accounts.rebuildFolderList(); // refresh frameFolder
		document.getElementById('groupFolderAddName').value = '';
		document.getElementById('groupFoldersAdd').options[0].selected = true;
		document.getElementById('groupFolderAddName').value = '';
		document.getElementById('editGroupFolderList').options[0].selected = true;
		document.getElementById('groupFoldersTeam').options[0].selected = true;
		SUGAR.email2.folders.loadSettingFolder(); // refresh folder multi-selects
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackEditGroupFolder = {
	success	: function(o) {
	hideOverlay();
	var data = JSON.parse(o.responseText);
	document.getElementById('groupFolderAddName').value = data.folderName;
	var groupFoldersAddTo = document.getElementById('groupFoldersAdd');
	
	SUGAR.email2.util.emptySelectOptions(groupFoldersAddTo);
	var grp = document.getElementById('groupFolders');
	for(i=0; i<grp.options.length; i++) {
		groupFoldersAddTo.options.add(new Option(grp.options[i].text, grp.options[i].value));
	}
	
	for (var i = 0 ; i < groupFoldersAddTo.options.length ; i++) {
		if (groupFoldersAddTo.options[i].value == data.parentFolderId) {
			groupFoldersAddTo.options[i].selected = true;
			//break;
		} // if
		if (groupFoldersAddTo.options[i].value == data.folderId) {
			groupFoldersAddTo.options[i] = null;
		}
	} // for
	









},
failure	: AjaxObject.handleFailure,
timeout	: AjaxObject.timeout,
scope	: AjaxObject

};
var callbackStatusForImport = {
success : function (o) {
	hideOverlay();
	if (o.responseText != "")  {
		var statusString = "";
		var data = JSON.parse(o.responseText);
		for(i=0; i<data.length; i++) {
			statusString = statusString + data[i] + '<br/>';
		}
		overlay("status", statusString, 'alert');
	}
	SUGAR.email2.grid.getDataSource().reload();
	
},
failure	: AjaxObject.handleFailure,
timeout	: AjaxObject.timeout,
scope	: AjaxObject
	
};
var callbackComposeCache = {
	success	: AjaxObject.composeCache,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackDelete = {
	success	: AjaxObject.handleDeleteReturn,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackEmailDetailMultiple = {
	success	: function(o) {
		hideOverlay();
		var retMulti = JSON.parse(o.responseText);
		var displayTemplate = new Ext.DomHelper.Template(SUGAR.email2.templates['displayOneEmail']);
		var ret = new Object();

		for(var i=0; i<retMulti.length; i++) {
			ret = retMulti[i];

			SUGAR.email2._setDetailCache(ret);
			SUGAR.email2.detailView.populateDetailView(ret.meta.uid, ret.meta.mbox, ret.meta.ieId, true, SUGAR.email2.innerLayout);
		}
	},
	failure	: AjaxObject.handleFailure,
	timeout	: 0,
	scope	: AjaxObject
};
var callbackListViewSortOrderChange = {
	success	: AjaxObject.saveListViewSortOrderPart2,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject,
	argument	: [ieId, ieName, focusFolder]
};
var callbackEmptyTrash = {
	success	: function(o) {
		hideOverlay();
		AjaxObject.folderRenameCleanup;
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackClearCacheFiles = {
	success	: function(o) {
		hideOverlay();
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolderRename = {
	success	: function(o) {hideOverlay();},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolderDelete = {
	success	: function(o) {
		var ret = JSON.parse(o.responseText);
		if (ret.status) {
		    if (ret.folder_id) {
		        var node = SUGAR.email2.tree.getNodeById(ret.folder_id);
		        node.parentNode.removeChild(node);
		    } else if (ret.ieId && ret.mbox) {
		        var node = SUGAR.email2.folders.getNodeFromIeIdAndMailbox(ret.ieId, ret.mbox);
		        node.parentNode.removeChild(node);
		    }
			hideOverlay();
			//SUGAR.email2.folders.loadSettingFolder();
		} else {
			hideOverlay();
			overlay(app_strings.LBL_EMAIL_ERROR_DESC, ret.errorMessage, 'alert');
		} // else
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolderSave = {
	success	: function(o) {
		var ret = JSON.parse(o.responseText);

		switch(ret.action) {
			case 'newFolderSave':
				SUGAR.email2.folders.rebuildFolders();
			break;
		}
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolderSubscriptions = {
	success	: AjaxObject.updateFolderSubscriptions,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolderUpdate = {
	success	: AjaxObject.updateFrameFolder,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFolders = {
	success	: AjaxObject.folders.rebuildFolders,
	//success : void(true),
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackFullSync = {
	success	: AjaxObject.fullSyncCleanup,
	failure	: AjaxObject.handleFailure,
	timeout	: 9999999999999,
	scope	: AjaxObject
};
var callbackGeneric = {
	success	: function() {
		hideOverlay();
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};








var callbackGetUserContacts = {
	success	: AjaxObject.addressBook.getUserContacts,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackIeAccountRetrieve = {
	success	: function(o) {
		// return JSON encoding
		hideOverlay();
		SUGAR.email2.accounts.fillIeAccount(o.responseText);
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackImportOneEmail = {
	success :  AjaxObject.detailView.showImportForm,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackRelateEmail = {
    success : AjaxObject.detailView.showRelateForm,
    failure : AjaxObject.handleFailure,
    timeout : AjaxObject.timeout,
    scope   : AjaxObject
}
var callbackEmailDetailView = {
    success : AjaxObject.detailView.showEmailDetailView,
    failure : AjaxObject.handleFailure,
    timeout : AjaxObject.timeout,
    scope   : AjaxObject
}
var callbackAssignmentDialog = {
	success :  AjaxObject.detailView.showAssignmentDialogWithData,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject	
};
var callbackAssignmentAction = {
	success :  function(o) {
		SUGAR.email2.grid.getDataSource().reload();
	    hideOverlay();
		if(o.responseText != '') {
	       overlay('Assignment action result', o.responseText, 'alert');
	    } // if
	} ,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackMoveEmails = {
	success :  function(o) {
		SUGAR.email2.grid.getDataSource().reload();
	    hideOverlay();
		if(o.responseText != '') {
	       overlay(app_strings.LBL_EMAIL_ERROR_DESC, o.responseText, 'alert');
	    } // if
	} ,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackLoadAttachments = {
	success	: AjaxObject.loadAttachments,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackLoadRules = {
	success	: AjaxObject.rules.loadRulesForSettings,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackLoadSignature = {
	success	: AjaxObject.loadSignature,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackDeleteSignature = {
	success	: AjaxObject.handleDeleteSignature,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
/*var callbackMoveEmails = {
    success : function(o) { SUGAR.email2.listView.moveEmailsCleanup(o) },
    failure : AjaxObject.handleFailure,
    timeout : AjaxObject.timeout,
    scope   : AjaxObject
}*/
var callbackOutboundSave = {
	success	: AjaxObject.accounts.saveOutboundCleanup,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackQuickCreate = {
	success	: AjaxObject.detailView.showQuickCreateForm,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackQuickCreateSave = {
	success	: AjaxObject.detailView.saveQuickCreateForm,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackQuickCreateSaveAndAddToAddressBook = {
	success	: AjaxObject.detailView.saveQuickCreateFormAndAddToAddressBook,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackQuickCreateSaveAndReply = {
    success : AjaxObject.detailView.saveQuickCreateFormAndReply,
    failure : AjaxObject.handleFailure,
    timeout : AjaxObject.timeout,
    scope   : AjaxObject
}
var callbackQuickCreateSaveAndReplyCase = {
    success : AjaxObject.detailView.saveQuickCreateFormAndReplyCase,
    failure : AjaxObject.handleFailure,
    timeout : AjaxObject.timeout,
    scope   : AjaxObject
}
var callbackRebuildShowAccountList = {
	success	: AjaxObject.rebuildShowFolders,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackRebuildShowAccountListForSearch = {
	success	: AjaxObject.rebuildShowFoldersForSearch,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackRefreshSugarFolders = {
	success	: function(o) {
		var t = JSON.parse(o.responseText);
		SUGAR.email2.folders.setSugarFoldersEnd(t);
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackReplyForward = {
	success	: AjaxObject.handleReplyForward,
	finish : function(a, retryCount) {
		if (typeof(retryCount) == 'undefined') {
			retryCount = 0;
		} else {
			retryCount++;
		}
		var idx = SUGAR.email2.composeLayout.currentInstanceId;
		var t = tinyMCE.getInstanceById('htmleditor' + idx);
        try {
			var html = t.getHTML();

            if (a.type != 'draft') {
    			if(SUGAR.email2.userPrefs.signatures.signature_prepend == 'true') {
    				html += "&nbsp;<div><hr></div>" + a.description;
    			} else {
    				html =  "&nbsp;<div><hr></div>" + a.description + html;
    			}
            }else {
                html = a.description;
            }

			t.setHTML(html);//

		} catch(e) {




			if (retryCount < 5) {
				setTimeout("callbackReplyForward.finish(globalA, " + retryCount + ");", 500);
				return;
			}
		}
		SUGAR.email2.innerLayout.regions.center.getPanel('composeLayout' + idx).setTitle(a.name);
		if (a.parent_name != null && a.parent_name != "") {
			document.getElementById('data_parent_name' + idx).value = a.parent_name;
		}
		if (a.parent_type != null && a.parent_type != "") {
			document.getElementById('data_parent_type' + idx).value = a.parent_type;
		}
		if (a.parent_id != null && a.parent_id != "") {
			document.getElementById('data_parent_id' + idx).value = a.parent_id;
		}
		if (a.fromAccounts.status) {
			var addressFrom = document.getElementById('addressFrom' + idx);
	        SUGAR.email2.util.emptySelectOptions(addressFrom);
	        var fromAccountOpts = a.fromAccounts.data;
	        for(i=0; i<fromAccountOpts.length; i++) {
	              var key = fromAccountOpts[i].value;
	              var display = fromAccountOpts[i].text;
	              var opt = new Option(display, key);
	              if (fromAccountOpts[i].selected) {
	              	opt.selected = true;
	              }
	              addressFrom.options.add(opt);
	        }			
		} // if
		hideOverlay();

	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject,
	argument	: [sendType]
};
var callbackSendEmail = {
	success	: AjaxObject.sendEmailCleanUp,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackSettings = {
	success	: AjaxObject.updateUserPrefs,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackSettingsFolderRefresh = {
	success	: AjaxObject.settingsFolderRefresh,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackLoadSettingFolder = {
	success	: function(o) {
		AjaxObject.settingsFolderRefresh(o);
		SUGAR.email2.accounts.rebuildFolderList(); // refresh frameFolder
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject

};
var callbackUploadAttachment = {
	success	: AjaxObject.uploadAttachmentSuccessful,
	upload	: AjaxObject.uploadAttachmentSuccessful,
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};
var callbackUserPrefs = {
	success	: function(o) {
		SUGAR.email2.userPrefs = JSON.parse(o.responseText);
	},
	failure	: AjaxObject.handleFailure,
	timeout	: AjaxObject.timeout,
	scope	: AjaxObject
};

var callbackContextmenus = {
	markUnread : {
		success : AjaxObject.markEmailCleanup,
		failure : AjaxObject.handleFailure,
		timeout : AjaxObject.timeout,
		scope   : AjaxObject
	}
};












var callbackCheckEmail2 = {
	success : function(o) {
		var ret = JSON.parse(o.responseText);
		overlay(app_strings.LBL_EMAIL_CHECKING_NEW, ret.text);


	},
	failure : AjaxObject.handleFailure,
	timeout : AjaxObject.timeout,
	scope	: AjaxObject
}
