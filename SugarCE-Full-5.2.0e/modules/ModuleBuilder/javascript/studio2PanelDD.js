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


Studio2.PanelDD = function(id, sGroup) {
	Studio2.PanelDD.superclass.constructor.call(this, id, sGroup);

    var el = this.getDragEl();
	Ext.get(el).setOpacity(0.67); // The proxy is slightly transparent
    this.goingUp = false;
    this.lastY = 0;
};

	
Ext.extend(Studio2.PanelDD, Ext.dd.DDProxy, {

    startDrag: function(x, y) { 	
        // make the proxy look like the source element
		var dragEl = this.getDragEl();
		var clickEl = this.getEl();
//		dragEl.innerHTML = clickEl.innerHTML; // this includes id's which causes problems for YUI - it often doesn't cleanly remove the dragEl at the end of the drag
		dragEl.className = clickEl.className;
		dragEl.innerHTML = '';
		var title = document.createElement('h3');
		title.appendChild(document.createTextNode(document.getElementById("le_panellabel_"+clickEl.id).childNodes[0].nodeValue));
		dragEl.appendChild(title);
		this.deletePanel = false;
		Studio2.copyId = null;

		if (Studio2.establishLocation(clickEl) == 'toolbox') {
			var copy = Studio2.newPanel();
			Studio2.setCopy(copy);
			clickEl.parentNode.insertBefore(copy,clickEl.nextSibling);

			Ext.get(copy).setStyle('display','block'); // must make it visible - the css sets rows outside of panel to invisible
			Ext.get(clickEl).setStyle("display","none");
		}

		Ext.get(clickEl).setStyle( "visibility", "hidden");

    },

    endDrag: function(e) {
		ModuleBuilder.state.isDirty=true;
//  	alert("endDrag");
     
        var srcEl = this.getEl();
        var proxy = this.getDragEl();      
        var proxyid = proxy.id;
        var thisid = this.id;
        
        if (this.deletePanel) {
			Studio2.removeElement(srcEl);
			// If we've just removed the last panel then we need to put an empty panel back in
			proxy.innerHTML = '';
        	Studio2.tidyPanels();
        } else {
        
	        // Show the proxy element and animate it to the src element's location
	        Ext.get(proxy).setStyle( "visibility", "");
	        Ext.get(srcEl).setStyle( "display",""); // display!=none for getXY to work
	        
			Ext.get(proxy).alignTo(srcEl, 'tl', null, {callback:function(){
				Ext.get(proxyid).setStyle( "visibility", "hidden");
	            Ext.get(thisid).setStyle( "visibility", "");
			}});
	
			if (Studio2.isSpecial(srcEl)) {
				if (Studio2.establishLocation(srcEl) == 'panels') {
					// dropping on the panels means that the panel is no longer special
					Studio2.unsetSpecial(srcEl);
					// add in the template row to the new panel
					var newRow = Studio2.newRow(false);
					srcEl.appendChild(newRow);
					// bug 16470: change the panel title to make it unique
					var view_module = document.getElementById('prepareForSave').view_module.value
					var panelLabel = document.getElementById("le_panelid_"+srcEl.id).childNodes[0].nodeValue.toUpperCase() ;
					var panelNumber = panelLabel.substring('lbl_panel'.length) ;
					var panelDisplay = SUGAR.language.get('ModuleBuilder', 'LBL_NEW_PANEL') + ' ' + panelNumber ;
					document.getElementById("le_panelname_"+srcEl.id).childNodes[0].nodeValue =  panelDisplay ;
					var params = { module: 'ModuleBuilder' , action: 'saveProperty', view_module: view_module }
					if (document.getElementById('prepareForSave').view_package)
					{
					   params ['view_package'] = document.getElementById('prepareForSave').view_package.value ;
					}
					params [ 'label_'+panelLabel ] = panelDisplay ;
					Ext.Ajax.request({
					   url: 'index.php',
                       params: params
                    });
					Studio2.activateElement(newRow);
					Studio2.setSpecial(Studio2.copy());
					Studio2.activateCopy();
					Ext.get(Studio2.copy()).setStyle( "display", "block");
				}
				else
				{
					// we have a special panel that hasn't been moved to the panels area - invalid drop, so remove the copy if there is one
					var copy = document.getElementById(Studio2.copyId);
					copy.parentNode.removeChild(copy);
					Studio2.copyID = null;
				}

			}
		}

    },

	onInvalidDrop: function(e) {
//		alert("invalid");
		var srcEl = this.getEl();
		var dragEl = this.getDragEl();
		dragEl.innerHTML = '';
	},
	
    onDragDrop: function(e, id) {
//		alert("ondragdrop");
		
		var srcEl = this.getEl();
		var destEl = Ext.get(id).dom; // where this element is being dropped
		
		
		// if source was in a panel (not toolbox) and destination is the delete area then remove this element
		if ((Studio2.establishLocation(srcEl) == 'panels') && (Studio2.establishLocation(destEl) == 'delete')) {
			this.deletePanel = true;
			//Studio2.removeElement(srcEl);
		}
    },

    onDrag: function(e) {
        // Keep track of the direction of the drag for use during onDragOver
        var y = e.getPageY();

        if (y < this.lastY) {
            this.goingUp = true;
        } else if (y > this.lastY) {
            this.goingUp = false;
        }

        this.lastY = y;
    },

    onDragOver: function(e, id) {
        var srcEl = this.getEl();
//		var destEl = YAHOO.util.Dom.get(YAHOO.util.DDM.getBestMatch(dds).id);
        var destEl = Ext.getDom(id);

        if ((Studio2.establishLocation(destEl) == 'panels') && (destEl.className.indexOf('le_panel') != -1)) {
        	Ext.get(srcEl).setStyle('visibility','hidden');
        	Ext.get(srcEl).setStyle('display','block');
        	var orig_p = srcEl.parentNode;
            var p = destEl.parentNode;

            if (this.goingUp) {
				p.insertBefore(srcEl, destEl); // insert above
            } else {
                p.insertBefore(srcEl, destEl.nextSibling); // insert below
            }
            Ext.dd.DragDropMgr.refreshCache({'studio2.panels':true});
			//YAHOO.util.DragDropMgr.refreshCache();
        }

    }
});


