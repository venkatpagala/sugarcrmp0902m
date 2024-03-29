/**
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
 */


SUGAR.mySugar = function() {
	var originalLayout = null;
	var configureDashletId = null;
	var currentDashlet = null;
	var leftColumnInnerHTML = null;
	var leftColObj = null;
	var maxCount;
	var warningLang;
	



	var activeTab = activePage;
	var current_user = current_user_id;
	
	var module = moduleName;



	
	var charts = new Object();
	
	if (module == 'Dashboard'){
		cookiePageIndex = current_user + "_activeDashboardPage";
	}
	else{
		cookiePageIndex = current_user + "_activePage";
	}
	
	var homepage_dd;
	




	return {











































		
















		















		













































		








		
		clearChartsArray: function(){
			charts[activeTab] = new Object();
		},
		
		addToChartsArray: function(name, xmlFile, width, height, styleSheet, colorScheme, langFile){

			if (charts[activeTab] == null){
				charts[activeTab] = new Object();
			}
			charts[activeTab][name] = new Object();
			charts[activeTab][name]['name'] = name;
			charts[activeTab][name]['xmlFile'] = xmlFile;
			charts[activeTab][name]['width'] = width;
			charts[activeTab][name]['height'] = height;
			charts[activeTab][name]['styleSheet'] = styleSheet;
			charts[activeTab][name]['colorScheme'] = colorScheme;	
			charts[activeTab][name]['langFile'] = langFile;				
		},

		loadSugarChart: function(name, xmlFile, width, height, styleSheet, colorScheme, langFile){
			loadChartSWF(name, xmlFile, width, height, styleSheet, colorScheme, langFile);
		},
		
		loadSugarCharts: function(){
			for (id in charts[activeTab]){
				if(id != 'undefined'){
					SUGAR.mySugar.loadSugarChart(charts[activeTab][id]['name'], 
											 charts[activeTab][id]['xmlFile'], 
											 charts[activeTab][id]['width'], 
											 charts[activeTab][id]['height'],
											 charts[activeTab][id]['styleSheet'],
											 charts[activeTab][id]['colorScheme'],
											 charts[activeTab][id]['langFile']);
				}
			}
		},














































































        







        



















































		



























		





































		


























		







		
		// get the current dashlet layout
		getLayout: function(asString) {
			columns = new Array();
			for(je = 0; je < 3; je++) {
			    dashlets = document.getElementById('col_'+activeTab+'_'+ je);
			    		    
				if (dashlets != null){
				    dashletIds = new Array();
				    for(wp = 0; wp < dashlets.childNodes.length; wp++) {
				      if(typeof dashlets.childNodes[wp].id != 'undefined' && dashlets.childNodes[wp].id.match(/dashlet_[\w-]*/)) {
						dashletIds.push(dashlets.childNodes[wp].id.replace(/dashlet_/,''));
				      }
				    }
					if(asString) 
						columns[je] = dashletIds.join(',');
					else 
						columns[je] = dashletIds;
				}
			}

			if(asString) return columns.join('|');
			else return columns;
		},

		// called when dashlet is picked up
		onDrag: function(e, id) {
			originalLayout = SUGAR.mySugar.getLayout(true);   	
		},
		
		// called when dashlet is dropped
		onDrop: function(e, id) {	
			newLayout = SUGAR.mySugar.getLayout(true);
		  	if(originalLayout != newLayout) { // only save if the layout has changed
				SUGAR.mySugar.saveLayout(newLayout);
				SUGAR.mySugar.loadSugarCharts(); // called safely because there is a check to be sure the array exists
		  	}
		},
		
		// save the layout of the dashlet  
		saveLayout: function(order) {
			ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVING_LAYOUT'));
			var success = function(data) {
				ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_SAVED_LAYOUT'));
				window.setTimeout('ajaxStatus.hideStatus()', 2000);
			}
			
			url = 'index.php?to_pdf=1&module='+module+'&action=DynamicAction&DynamicAction=saveLayout&layout=' + order + '&selectedPage=' + activeTab;
			var cObj = YAHOO.util.Connect.asyncRequest('GET', url, {success: success, failure: success});					  
		},





















		uncoverPage: function(id) {
			if (!isIE){	
				document.getElementById('dlg_c').style.display = 'none';	
			}		
			configureDlg.hide();
            if ( document.getElementById('dashletType') == null ) {
                dashletType = '';
            } else {
                dashletType = document.getElementById('dashletType').value;
            }
			SUGAR.mySugar.retrieveDashlet(SUGAR.mySugar.configureDashletId, dashletType);
		},
		
		// call to configure a Dashlet
		configureDashlet: function(id) {
			ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'));
			configureDlg = new YAHOO.widget.SimpleDialog("dlg", 
															{ visible:false, 
															  width:"510", 
															  effect:[{effect:YAHOO.widget.ContainerEffect.SLIDETOP, duration:0.5},
															  		  {effect:YAHOO.widget.ContainerEffect.FADE,duration:0.5}], 
															  fixedcenter:true, 
															  modal:true, 
															  draggable:false }
														);
			
			fillInConfigureDiv = function(data){
				ajaxStatus.hideStatus();
				// uncomment the line below to debug w/ FireBug
				// console.log(data.responseText); 
				try {
					eval(data.responseText);
				}
				catch(e) {
					result = new Array();
					result['header'] = 'error';
					result['body'] = 'There was an error handling this request.';
				}
				configureDlg.setHeader(result['header']);
				configureDlg.setBody(result['body']);
				var listeners = new YAHOO.util.KeyListener(document, { keys : 27 }, {fn: function() {this.hide();}, scope: configureDlg, correctScope:true} );
				configureDlg.cfg.queueProperty("keylisteners", listeners);

				configureDlg.render(document.body);
				configureDlg.show();
				configureDlg.configFixedCenter(null, false) ;
				SUGAR.util.evalScript(result['body']);
			}

			SUGAR.mySugar.configureDashletId = id; // save the id of the dashlet being configured
			var cObj = YAHOO.util.Connect.asyncRequest('GET','index.php?to_pdf=1&module='+module+'&action=DynamicAction&DynamicAction=configureDashlet&id=' + id, 
													  {success: fillInConfigureDiv, failure: fillInConfigureDiv}, null);
		},
		





				
		/** returns dashlets contents
		 * if url is defined, dashlet will be retrieve with it, otherwise use default url
		 *
		 * @param string id id of the dashlet to refresh
		 * @param string url url to be used
		 * @param function callback callback function after refresh
		 * @param bool dynamic does the script load dynamic javascript, set to true if you user needs to refresh the dashlet after load
		 */
		retrieveDashlet: function(id, url, callback, dynamic) {
			ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'));
					
			if(!url) {
				url = 'index.php?action=DynamicAction&DynamicAction=displayDashlet&module='+module+'&to_pdf=1&id=' + id;
				is_chart_dashlet = false;
			}
			else if (url == 'predefined_chart'){
				url = 'index.php?action=DynamicAction&DynamicAction=displayDashlet&module='+module+'&to_pdf=1&id=' + id;
				scriptUrl = 'index.php?action=DynamicAction&DynamicAction=getPredefinedChartScript&module='+module+'&to_pdf=1&id=' + id;
				is_chart_dashlet = true;
			}
			







			
			if(dynamic) {
				url += '&dynamic=true';
			}

		 	var fillInDashlet = function(data) {
		 		ajaxStatus.hideStatus();
				if(data) {		
					SUGAR.mySugar.currentDashlet.innerHTML = data.responseText;				
				}

				SUGAR.util.evalScript(data.responseText);
				if(callback) callback();
				
				var processChartScript = function(scriptData){
					SUGAR.util.evalScript(scriptData.responseText);

					SUGAR.mySugar.loadSugarChart(charts[activeTab][id]['name'], 
												 charts[activeTab][id]['xmlFile'], 
												 charts[activeTab][id]['width'], 
												 charts[activeTab][id]['height'],
												 charts[activeTab][id]['styleSheet'],
												 charts[activeTab][id]['colorScheme'],
												 charts[activeTab][id]['langFile']);
				}
				
				if (is_chart_dashlet){				
					var chartScriptObj = YAHOO.util.Connect.asyncRequest('GET', scriptUrl,
													  {success: processChartScript, failure: processChartScript}, null);
				}
			}
			
			SUGAR.mySugar.currentDashlet = document.getElementById('dashlet_entire_' + id);
			var cObj = YAHOO.util.Connect.asyncRequest('GET', url,
												  {success: fillInDashlet, failure: fillInDashlet}, null);
			return false;
		},
		
		// for the display columns widget
		setChooser: function() {		
			var displayColumnsDef = new Array();
			var hideTabsDef = new Array();

		    var left_td = document.getElementById('display_tabs_td');	
		    var right_td = document.getElementById('hide_tabs_td');			
	
		    var displayTabs = left_td.getElementsByTagName('select')[0];
		    var hideTabs = right_td.getElementsByTagName('select')[0];
			
			for(i = 0; i < displayTabs.options.length; i++) {
				displayColumnsDef.push(displayTabs.options[i].value);
			}
			
			if(typeof hideTabs != 'undefined') {
				for(i = 0; i < hideTabs.options.length; i++) {
			         hideTabsDef.push(hideTabs.options[i].value);
				}
			}
			
			document.getElementById('displayColumnsDef').value = displayColumnsDef.join('|');
			document.getElementById('hideTabsDef').value = hideTabsDef.join('|');
		},
		
		deleteDashlet: function(id) {
			if(confirm(SUGAR.language.get('app_strings', 'LBL_REMOVE_DASHLET_CONFIRM'))) {
				ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_REMOVING_DASHLET'));
				
				del = function() {
					var success = function(data) {
						dashlet = document.getElementById('dashlet_' + id);
						dashlet.parentNode.removeChild(dashlet);
						ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_REMOVED_DASHLET'));
						window.setTimeout('ajaxStatus.hideStatus()', 2000);
					}
				
					
					var cObj = YAHOO.util.Connect.asyncRequest('GET','index.php?to_pdf=1&module='+module+'&action=DynamicAction&DynamicAction=deleteDashlet&activePage=' + activeTab + '&id=' + id, 
															  {success: success, failure: success}, null);
				}
				
				var anim = new YAHOO.util.Anim('dashlet_entire_' + id, { height: {to: 1} }, .5 );					
				anim.onComplete.subscribe(del);					
				document.getElementById('dashlet_entire_' + id).style.overflow = 'hidden';
				anim.animate();
				
				return false;
			}
			return false;
		},
		











		
		addDashlet: function(id, type, type_module) {
			ajaxStatus.hideStatus();
			columns = SUGAR.mySugar.getLayout();
						
			var num_dashlets = columns[0].length;
			if (typeof columns[1] == undefined){
				num_dashlets = num_dashlets + columns[1].length;
			}
			
			if((num_dashlets) >= SUGAR.mySugar.maxCount) {
				alert(SUGAR.language.get('app_strings', 'LBL_MAX_DASHLETS_REACHED'));
				return;
			}			
/*			if((columns[0].length + columns[1].length) >= SUGAR.mySugar.maxCount) {
				alert(SUGAR.language.get('Home', 'LBL_MAX_DASHLETS_REACHED'));
				return;
			}*/
			ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_ADDING_DASHLET'));
			var success = function(data) {
				colZero = document.getElementById('col_'+activeTab+'_0');
				newDashlet = document.createElement('li'); // build the list item
				newDashlet.id = 'dashlet_' + data.responseText;
				newDashlet.className = 'noBullet';
				// hide it first, but append to getRegion
				newDashlet.innerHTML = '<div style="position: absolute; top: -1000px; overflow: hidden;" id="dashlet_entire_' + data.responseText + '"></div>';

				colZero.insertBefore(newDashlet, colZero.firstChild); // insert it into the first column
				
				var finishRetrieve = function() {
					dashletEntire = document.getElementById('dashlet_entire_' + data.responseText);
					dd = new ygDDList('dashlet_' + data.responseText); // make it draggable
					dd.setHandleElId('dashlet_header_' + data.responseText);
					dd.onMouseDown = SUGAR.mySugar.onDrag;  
					dd.onDragDrop = SUGAR.mySugar.onDrop;

					ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_ADDED_DASHLET'));
					dashletRegion = YAHOO.util.Dom.getRegion(dashletEntire);
					dashletEntire.style.position = 'relative';
					dashletEntire.style.height = '1px';
					dashletEntire.style.top = '0px';

					var anim = new YAHOO.util.Anim('dashlet_entire_' + data.responseText, { height: {to: dashletRegion.bottom - dashletRegion.top} }, .5 );
					anim.onComplete.subscribe(function() { document.getElementById('dashlet_entire_' + data.responseText).style.height = '100%'; });	
					anim.animate();
					
					window.setTimeout('ajaxStatus.hideStatus()', 2000);
				}
				
				if (type == 'module'){
					url = null;
					type = 'module';
				}
				else if (type == 'predefined_chart'){
					url = 'predefined_chart';
					type = 'predefined_chart';
				}
				else if (type == 'chart'){
					url = 'chart';
					type = 'chart';
				}
				
				SUGAR.mySugar.retrieveDashlet(data.responseText, url, finishRetrieve, true); // retrieve it from the server
				
				newLayout =	SUGAR.mySugar.getLayout(true);
				SUGAR.mySugar.saveLayout(newLayout);	
			}
			var cObj = YAHOO.util.Connect.asyncRequest('GET','index.php?to_pdf=1&module='+module+'&action=DynamicAction&DynamicAction=addDashlet&activeTab=' + activeTab + '&id=' + id+'&type=' + type + '&type_module=' + type_module, 
													  {success: success, failure: success}, null);						  

			return false;
		},
		
		showDashletsDialog: function() {                                             
			columns = SUGAR.mySugar.getLayout();
			
			var num_dashlets = columns[0].length;
			if (typeof columns[1] == undefined){
				num_dashlets = num_dashlets + columns[1].length;
			}
			
			if((num_dashlets) >= SUGAR.mySugar.maxCount) {
				alert(SUGAR.language.get('app_strings', 'LBL_MAX_DASHLETS_REACHED'));
				return;
			}
			ajaxStatus.showStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'));
			
			var success = function(data) {		
				eval(data.responseText);
									
				dashletsListDiv = document.getElementById('dashletsList');
				dashletsListDiv.innerHTML = response['html'];
				
				document.getElementById('dashletsDialog_c').style.display = '';
				SUGAR.mySugar.dashletsDialog.show();
				SUGAR.mySugar.dashletsDialog.configFixedCenter(null, false) ;

				eval(response['script']);
				ajaxStatus.hideStatus();
			}
			
			var cObj = YAHOO.util.Connect.asyncRequest('GET', 'index.php?to_pdf=true&module='+module+'&action=DynamicAction&DynamicAction=dashletsDialog', {success: success, failure: success});			
			return false;
		},
		
		closeDashletsDialog: function(){
			SUGAR.mySugar.dashletsDialog.hide();
			window.setTimeout("document.getElementById('dashletsDialog_c').style.display = 'none';", 2000);



		},

		toggleDashletCategories: function(category){
			document.getElementById('search_string').value = '';
			document.getElementById('searchResults').innerHTML = '';
			
			var moduleTab = document.getElementById('moduleCategory');
			var moduleTabAnchor = document.getElementById('moduleCategoryAnchor');
			var moduleListDiv = document.getElementById('moduleDashlets');

			var chartTab = document.getElementById('chartCategory');
			var chartTabAnchor = document.getElementById('chartCategoryAnchor');			
			var chartListDiv = document.getElementById('chartDashlets');			
			
			var toolsTab = document.getElementById('toolsCategory');
			var toolsTabAnchor = document.getElementById('toolsCategoryAnchor');			
			var toolsListDiv = document.getElementById('toolsDashlets');	
			
			switch(category){
				case 'module':
					moduleTab.className = 'active';
					moduleTabAnchor.className = 'current';
					moduleListDiv.style.display = '';
					
					chartTab.className = '';
					chartTabAnchor.className = '';
					chartListDiv.style.display = 'none';

					toolsTab.className = '';
					toolsTabAnchor.className = '';
					toolsListDiv.style.display = 'none';										
									
					break;
				case 'chart':
					moduleTab.className = '';
					moduleTabAnchor.className = '';
					moduleListDiv.style.display = 'none';
					
					chartTab.className = 'active';
					chartTabAnchor.className = 'current';
					chartListDiv.style.display = '';					

					toolsTab.className = '';
					toolsTabAnchor.className = '';
					toolsListDiv.style.display = 'none';
					





					break;
				case 'tools':
					moduleTab.className = '';
					moduleTabAnchor.className = '';
					moduleListDiv.style.display = 'none';
					
					chartTab.className = '';
					chartTabAnchor.className = '';
					chartListDiv.style.display = 'none';					

					toolsTab.className = 'active';
					toolsTabAnchor.className = 'current';
					toolsListDiv.style.display = '';					
					
					break;
				default:
					break;					
			}			
			
			document.getElementById('search_category').value = category;
		},
		



































		searchDashlets: function(searchStr, searchCategory){
			var moduleTab = document.getElementById('moduleCategory');
			var moduleTabAnchor = document.getElementById('moduleCategoryAnchor');
			var moduleListDiv = document.getElementById('moduleDashlets');

			var chartTab = document.getElementById('chartCategory');
			var chartTabAnchor = document.getElementById('chartCategoryAnchor');			
			var chartListDiv = document.getElementById('chartDashlets');			
			
			var toolsTab = document.getElementById('toolsCategory');
			var toolsTabAnchor = document.getElementById('toolsCategoryAnchor');			
			var toolsListDiv = document.getElementById('toolsDashlets');			

			if (moduleTab != null && chartTab != null && toolsTab != null){	
				moduleListDiv.style.display = 'none';
				chartListDiv.style.display = 'none';	
				toolsListDiv.style.display = 'none';
			
			}
			// dashboards case, where there are no tabs
			else{
				chartListDiv.style.display = 'none';
			}
			
			var searchResultsDiv = document.getElementById('searchResults');
			searchResultsDiv.style.display = '';
	
			var success = function(data) {
				eval(data.responseText);

				searchResultsDiv.innerHTML = response['html'];
			}
			
			var cObj = YAHOO.util.Connect.asyncRequest('GET', 'index.php?to_pdf=true&module='+module+'&action=DynamicAction&DynamicAction=searchDashlets&search='+searchStr+'&category='+searchCategory, {success: success, failure: success});
			return false;
		},
		
		collapseList: function(chartList){
			document.getElementById(chartList+'List').style.display='none';
			document.getElementById(chartList+'ExpCol').innerHTML = '<a href="#" onClick="javascript:SUGAR.mySugar.expandList(\''+chartList+'\');"><img border="0" src="' + SUGAR.themes.image_server + 'themes/Sugar/images/advanced_search.gif" align="absmiddle" />';
		},
		
		expandList: function(chartList){
			document.getElementById(chartList+'List').style.display='';		
			document.getElementById(chartList+'ExpCol').innerHTML = '<a href="#" onClick="javascript:SUGAR.mySugar.collapseList(\''+chartList+'\');"><img border="0" src="' + SUGAR.themes.image_server + 'themes/Sugar/images/basic_search.gif" align="absmiddle" />';			
		},
		
		collapseReportList: function(reportChartList){
			document.getElementById(reportChartList+'ReportsChartDashletsList').style.display='none';
			document.getElementById(reportChartList+'ExpCol').innerHTML = '<a href="#" onClick="javascript:SUGAR.mySugar.expandReportList(\''+reportChartList+'\');"><img border="0" src="' + SUGAR.themes.image_server + 'themes/default/images/ProjectPlus.gif" align="absmiddle" />';
		},
		
		expandReportList: function(reportChartList){
			document.getElementById(reportChartList+'ReportsChartDashletsList').style.display='';
			document.getElementById(reportChartList+'ExpCol').innerHTML = '<a href="#" onClick="javascript:SUGAR.mySugar.collapseReportList(\''+reportChartList+'\');"><img border="0" src="' + SUGAR.themes.image_server + 'themes/default/images/ProjectMinus.gif" align="absmiddle" />';
		},
		
		clearSearch: function(){
			document.getElementById('search_string').value = '';

			var moduleTab = document.getElementById('moduleCategory');
			var moduleTabAnchor = document.getElementById('moduleCategoryAnchor');
			var moduleListDiv = document.getElementById('moduleDashlets');
			
			document.getElementById('searchResults').innerHTML = '';
			if (moduleTab != null){
				SUGAR.mySugar.toggleDashletCategories('module');
			}
			else{
				document.getElementById('searchResults').style.display = 'none';
				document.getElementById('chartDashlets').style.display = '';
			}
		},
		
		doneAddDashlets: function() {
			SUGAR.mySugar.dashletsDialog.hide();
			return false;
		},

























		



















		












































































		
		renderDashletsDialog: function(){	
			SUGAR.mySugar.dashletsDialog = new YAHOO.widget.Dialog("dashletsDialog", 
																		{ width : "450px",
																		  height: "520px",
																		  fixedcenter : true,
																		  draggable:false,
																		  visible : false, 
																		  effect:[{effect:YAHOO.widget.ContainerEffect.SLIDETOP, duration:0.5},{effect:YAHOO.widget.ContainerEffect.FADE,duration:0.5}],
																		  modal : true,
																		  close:false
																		 } );

			var listeners = new YAHOO.util.KeyListener(document, { keys : 27 }, {fn: function() {SUGAR.mySugar.closeDashletsDialog();} } );
			SUGAR.mySugar.dashletsDialog.cfg.queueProperty("keylisteners", listeners);

			document.getElementById('dashletsDialog').style.display = '';																				 
			SUGAR.mySugar.dashletsDialog.render();
			document.getElementById('dashletsDialog_c').style.display = 'none';			
		}	


























	 }; 
}();
