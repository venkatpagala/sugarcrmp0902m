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
Studio2.fieldTpl = new Ext.XTemplate(
	"<div class='le_field' id='{name}{id}'>" +
	"<img class='le_edit' src='themes/Sugar/images/edit_inline.gif' style='float:right; cursor:pointer;' " +
	"onclick=\"var value_label = document.getElementById('le_label_{$idCount}').innerHTML; var value_tabindex = document.getElementById('le_tabindex_{$idCount}').innerHTML;" +
	"ModuleBuilder.getContent('module=ModuleBuilder&action=editProperty&view_module={$module}&view={$view}" +
	"&id_label=le_label_{$name}&name_label=label_{label}&title_label={label}&value_label=' + value_label + '" +
	"&id_tabindex=le_tabindex_{$idCount}&name_tabindex=tabindex&value_tabindex=' + value_tabindex );\" />" +
	"<span id='le_label_{name}{id}'>{label}</span>"+
	"<span class='field_name'>{name}</span>"+
	"<span class='field_label'>{label}</span>"+
	"<span id='le_tabindex_{name}{id}' class='field_tabindex'>{tabindex}</span>");

Studio2.FieldDD = function(id, sGroup) {
	Studio2.FieldDD.superclass.constructor.call(this, id, sGroup);
};


Ext.extend(Studio2.FieldDD, Ext.dd.DDProxy, {

    startDrag: function(x, y) {
        // make the proxy look like the source element
		var dragEl = this.getDragEl();
		var clickEl = this.getEl();
		dragEl.innerHTML = clickEl.innerHTML;
		dragEl.className = clickEl.className;
		Studio2.copyId = null;
//		this.showAnimation = true;

		if (Studio2.isSpecial(clickEl) && (Studio2.establishLocation(clickEl) == 'toolbox')) {
			var copy = Studio2.copyElement(clickEl);
			Studio2.setCopy(copy);
			clickEl.parentNode.insertBefore(copy,clickEl.nextSibling);
        	Ext.get(clickEl).setStyle( "display", "none");	// don't want it to take up any space
		} else {
			Ext.get(clickEl).setStyle( "visibility", "hidden"); // want a empty space as we're dragging it away from this place
		}

    },

    endDrag: function(e) {
     	ModuleBuilder.state.isDirty=true;
        var srcEl = this.getEl();
        var proxy = this.getDragEl();
        var proxyid = proxy.id;
        var thisid = this.id;

        if (Ext.get(srcEl)) { // if we have a valid srcEl still...hasn't been deleted earlier
			// Show the proxy element and animate it to the src element's location
			Ext.get(proxy).setStyle( "visibility", "");
			Ext.get(srcEl).setStyle( "display", ""); // display!=none for getXY to work
			Ext.get(proxy).alignTo(srcEl, 'tl', null, {
				callback: function(){
					Ext.get(proxyid).setStyle( "visibility", "hidden");
					if(typeof(Ext.get(thisid)) != 'undefined' && Ext.get(thisid)!=null) Ext.get(thisid).setStyle( "visibility", "");
				}
			});
		}

		if (Studio2.isSpecial(srcEl) && Studio2.copy()) {
			Studio2.activateCopy(); // activateCopy makes it active, and removes the flag that says there is a copy
		} else {
			// Cleanup - if we still have a copy element here, then remove it
//			Studio2.removeCopy();
		}
    },

	onInvalidDrop: function(e) {
		var dragEl = this.getDragEl();
		dragEl.innerHTML = '';
		Studio2.removeCopy();
		Ext.get(this.getEl()).setStyle("display", "block");
	},

    onDragDrop: function(e, id) {
		var srcEl = this.getEl();
		var destEl = Ext.get(id).dom; // where this element is being dropped

		var srcLocation = Studio2.establishLocation(srcEl);
		var destLocation = Studio2.establishLocation(destEl);

		// CASE1: Trying to delete an item from the toolbox or move fields within the toolbox - don't allow
		if ( ((srcLocation == 'toolbox') && (destLocation == 'delete')) ||
			 ((srcLocation == 'toolbox') && (destLocation == 'toolbox'))) {
			Studio2.removeCopy();
			Ext.get(srcEl).setStyle( "display", "block");	// make it visible again - we made special elements invisible in startDrag
			return;
		}
		// CASE2: Delete a panel element
		// if source was in a panel (not toolbox) and destination is delete then remove this element
		if ((srcLocation == 'panels') && (destLocation == 'delete')) {

			if(Studio2.isSpecial(srcEl)) //nsingh- Bug 23057 Disallow deleting a (filler) as it does not make sense to do so.
				return;
			var parent = srcEl.parentNode;
			var sibling = srcEl.previousSibling;
			while(sibling != null) {
				if (sibling.className && (sibling.className.indexOf('le_field') != -1)) {
					break;
				}
				sibling = sibling.previousSibling;
			}
			if (sibling == null) {
				sibling = srcEl.nextSibling;
				while(sibling != null) {
					if (sibling.className && (sibling.className.indexOf('le_field') != -1)) {
						break;
					}
					sibling = sibling.nextSibling;
				}
			}
			Studio2.removeElement(srcEl);
			Studio2.unregisterExpandableField( srcEl );
//			this.showAnimation = false; // can't show animation as the source no longer exists
			if (sibling == null) {
	        	// If we've just deleted the last field from a panel then we need to tidy up
				Studio2.tidyFields(parent);
			} else {
				Studio2.registerExpandableField(sibling);
				//if (!Studio2.isIE) //console.log("case2");
			}
			return;
		} // end delete

		// CASE3: Simple field swap
		// Either neither one is special, or they're both special and both in panels
		if (( ! Studio2.isSpecial(srcEl) && ! Studio2.isSpecial(destEl)) ||
			( Studio2.isSpecial(srcEl) && Studio2.isSpecial(destEl) && (srcLocation == 'panels') && (destLocation == 'panels')) ) {
			Studio2.swapElements(srcEl, destEl);
			this.runSpecialCode(srcEl, destEl);
			////console.log("case3");
			return;
		}

		// CASE4: swapping a special field from the toolbox with a field in a panel
		if (Studio2.copy() && (destLocation == 'panels')) {
			// CASE: split a field
			////console.log("destEl:"+destEl.id);
			//Disallow (filler) on (filler)
			 if( Studio2.isSpecial(destEl) ) {Studio2.removeCopy(); return }

			var destSibling = Studio2.nextField( destEl ) || Studio2.prevField( destEl );
			if( Studio2.isExpandable( destEl ) && destEl.getAttribute("state") == 'expanded' ){
				////console.log("returned NO OP.");
				Studio2.removeCopy(); return;
			}
			if( Studio2.isExpandable( destEl ) && destEl.getAttribute("state") == 'reduced' ){ Studio2.unregisterExpandableField( destEl ); }
			var copy = Studio2.copyElement(srcEl);
			Studio2.activateElement(copy);
			Ext.get(copy).setStyle( "display", "");
			Studio2.swapElements( Studio2.copy(),destEl );
			Ext.get(srcEl).setStyle( "display", "");
			Studio2.registerExpandableField (destSibling );
			//console.log("case4");
			return;
		}

		// CASE5: moving a plain field from the panel to a special field in the toolbox - just copy
		if ( ! Studio2.isSpecial(srcEl) && Studio2.isSpecial(destEl) && (destLocation == 'toolbox')) {
			// make a copy of the destination
			if(Studio2.isExpandable (srcEl ) && Studio2.isExpanded( srcEl)) {
				Studio2.toggleFieldWidth(srcEl.id); //bring back the old filler.
				Studio2.unregisterExpandableField ( srcEl );
			}
			//check if srcSibling needs to expand
//			var srcSibling = ;

			var copy = Studio2.copyElement(destEl);
			var destination = document.getElementById('availablefields');
			destination.appendChild(copy);
			Studio2.swapElements(copy,srcEl);
			Ext.get(srcEl).setStyle( "display", "");
			Studio2.activateElement(copy);
			//if src is expanded, reduce it then unregister
			//console.log("case5");

			//After Swap Only.
			Studio2.registerExpandableField( Studio2.nextField( srcEl ) || Studio2.prevField( srcEl ) );
			return;
		}

		//CASE6: (filler) droppped on a expandable field.
		if(Studio2.isSpecial(srcEl)  && destLocation == srcLocation  ){
			//Disallow Swap if dropping on a expanded field.
			if( Studio2.isExpandable( destEl ) && Studio2.isExpanded( destEl )) {return; }
			var srcSibling = Studio2.prevField( srcEl ) || Studio2.nextField( srcEl );
			var destSibling = Studio2.prevField( destEl ) || Studio2.nextField( destEl );
			Studio2.swapElements(srcEl, destEl); //don't change order.
			//console.log("case6_1: SrcEl:"+srcEl.id+" Dest El:"+destEl.id);
			////console.log("case6_1: Src Sibling:"+srcSibling.id +" dest Sibling: " +destSibling.id);
			if ( !Studio2.isExpandable( destSibling ) && Studio2.isExpandable(srcSibling) && Studio2.isReduced(srcSibling) && !(srcSibling.id == destEl.id && srcEl.id == destSibling.id)) {
				////console.log("6_1_2");
				Studio2.unregisterExpandableField( srcSibling );
				Studio2.registerExpandableField (destSibling );
				Studio2.unregisterExpandableField( destEl );
			}
			if ( !Studio2.isExpandable( destEl ) && Studio2.isSpecial( destSibling )) {
				Studio2.registerExpandableField (destEl );
			}
			if(!Studio2.isSpecial(destSibling)) {Studio2.registerExpandableField (destSibling )}
			return;
		}
		//CASE 7: A special field swapped with a regular field. Source is not-special, destination is special.
		if(!Studio2.isSpecial(srcEl) && Studio2.isSpecial(destEl) && destLocation == srcLocation) {
			/**
				if destination's left sibling is expandable.
					unregister left sibling from expandable.
				if src field's left sibling is not special
					register left sibling to expandable.
			*/
			//console.log("case7");

			var srcSibling = Studio2.prevField(srcEl) || Studio2.nextField( srcEl ) ;
			var destSibling = Studio2.prevField(destEl) || Studio2.nextField( destEl );

		//	//console.log("Src EL:"+srcEl.id, "DestEl:"+destEl.id+" SrcSibling:"+srcSibling.id+" DestSibling:"+destSibling.id);
			var sameRow = (srcSibling!=null && destSibling!=null) ? (srcSibling.id == destEl.id && destSibling.id == srcEl.id) : false;

			if (Studio2.isExpandable( srcEl ) && Studio2.isExpanded( srcEl )) {return;} //disallow dropping expanded fields onto fillers.
			if (Studio2.isExpandable ( srcEl ) && Studio2.isReduced( srcEl ) && !sameRow) {Studio2.unregisterExpandableField( srcEl );}
			if (Studio2.isExpandable (destSibling) && !sameRow ){Studio2.unregisterExpandableField( destSibling )}
			//expand src sibling
			if( srcEl.id == destSibling.id && srcSibling.id == destEl.id ) {Studio2.registerExpandableField ( srcEl ) }
			Studio2.swapElements(srcEl, destEl);
			if (Studio2.isSpecial(destSibling)) {Studio2.registerExpandableField(srcEl)}
			Studio2.registerExpandableField( srcSibling );

			return;

		}

		if( !Studio2.isSpecial( srcEl ) && Studio2.isSpecial( destEl) && destLocation == 'panels' && srcLocation =='toolbox'){
//			console.log("case8");
			var destSibling = Studio2.nextField( destEl ) || Studio2.prevField ( destEl );
			Studio2.unregisterExpandableField( destSibling );
			Studio2.swapElements( srcEl,destEl );
			return;
		}



		Studio2.swapElements( srcEl,destEl );
		this.runSpecialCode(srcEl,destEl);
		if ((srcLocation != destLocation)) {
			if (Studio2.isSpecial(srcEl) && ! Studio2.isSpecial(destEl))  {
				Studio2.removeElement(srcEl);
//				this.showAnimation = false;
				return;
			}
			if (Studio2.isSpecial(destEl) && ! Studio2.isSpecial(srcEl))  {
				Studio2.removeElement(destEl);
//				this.showAnimation = false;
				return;
			}
		}


    },
    runSpecialCode: function(srcEl, destEl){
		var srcLeftSibling = Studio2.prevField(srcEl);
		var srcRightSibling = Studio2.nextField(srcEl);
		var destRightSibling = Studio2.nextField(destEl);
		var destLeftSibling = Studio2.prevField(destEl);


		//console.log("srcLeftSibling:")
	//For every affected element unexpand if needed.
	//registration vs Transformation.

		if ( Studio2.isExpandable (srcEl ) && Studio2.isExpandable( destEl) ){
			//src is dest now. copy dest's properties to src.
			Studio2.swapStates( srcEl, destEl );
			//srcEl.setAttribute("state", destEl.getAttribute("state"));
		}
		var registerSrc = !Studio2.isExpandable( srcEl );
		var destExpandable = !Studio2.isSpecial(destEl) && ((null==destRightSibling && null==destLeftSibling)
							|| (null !== destRightSibling) && Studio2.isSpecial(destRightSibling));

		var srcUnexpandable = !Studio2.isSpecial(srcEl) && ((null!==srcLeftSibling && !Studio2.isSpecial(srcLeftSibling))
							|| ((null !== srcRightSibling) && !Studio2.isSpecial(srcRightSibling)));
		var destUnexpandable = !Studio2.isSpecial(destEl) && ((null!==destLeftSibling && !Studio2.isSpecial(destLeftSibling))
							|| ((null!== destRightSibling) && !Studio2.isSpecial(destRightSibling)));


			if( registerSrc ){
				////console.log("Source is Expandable: "+srcEl.id);
				Studio2.registerExpandableField( srcEl );
			}
			if(srcUnexpandable){
				Studio2.unregisterExpandableField(  srcEl );
			}
			if(destExpandable){
			////console.log("Destination is Expandable: "+destEl.id);
				Studio2.registerExpandableField(destEl);
			}
			if(destUnexpandable){
				Studio2.unregisterExpandableField( destEl );
			}
		if(srcLeftSibling!==null && !Studio2.isSpecial(srcLeftSibling) && !Studio2.isSpecial(srcEl))
			Studio2.unregisterExpandableField( srcLeftSibling );



	return;
    }

});


