/*
 * Ext JS Library 1.1.1
 * Copyright(c) 2006-2007, Ext JS, LLC.
 * licensing@extjs.com
 *
 * http://www.extjs.com/license
 */
Ext.UpdateManager.defaults.indicatorText="<div class=\"loading-indicator\">Betöltés...</div>";if(Ext.View){Ext.View.prototype.emptyText=""}if(Ext.grid.Grid){Ext.grid.Grid.prototype.ddText="{0} kiválasztott sor"}if(Ext.TabPanelItem){Ext.TabPanelItem.prototype.closeText="Fül bezárása"}if(Ext.form.Field){Ext.form.Field.prototype.invalidText="A mező tartalma érvénytelen"}if(Ext.LoadMask){Ext.LoadMask.prototype.msg="Betöltés..."}Date.monthNames=["Január","Február","Március","�?prilis","Május","Június","Július","Augusztus","Szeptember","Október","November","December"];Date.dayNames=["Vasárnap","Hétfő","Kedd","Szerda","Csütörtök","Péntek","Szombat"];if(Ext.MessageBox){Ext.MessageBox.buttonText={ok:"OK",cancel:"Mégsem",yes:"Igen",no:"Nem"}}if(Ext.util.Format){Ext.util.Format.date=function(A,B){if(!A){return""}if(!(A instanceof Date)){A=new Date(Date.parse(A))}return A.dateFormat(B||"y.m.d")}}if(Ext.DatePicker){Ext.apply(Ext.DatePicker.prototype,{todayText:"Ma",minText:"Ez a dátum korábbi a megengedettnél",maxText:"Ez a dátum későbbi a megengedettnél",disabledDaysText:"",disabledDatesText:"",monthNames:Date.monthNames,dayNames:Date.dayNames,nextText:"Következő hónap (Control+Jobbra)",prevText:"Előző hónap (Control+Balra)",monthYearText:"Hónaőválasztás (Control+Fel/Le: év választás)",todayTip:"{0} (Szóköz)",format:"y.m.d",startDay:1})}if(Ext.PagingToolbar){Ext.apply(Ext.PagingToolbar.prototype,{beforePageText:"Oldal",afterPageText:"a {0}-ból/ből",firstText:"Első oldal",prevText:"Előző oldal",nextText:"Következő",lastText:"Utolsó oldal",refreshText:"Friss�t",displayMsg:"{0} - {1} a {2}-ból/ből",emptyMsg:"Nincs megjelen�thető adat"})}if(Ext.form.TextField){Ext.apply(Ext.form.TextField.prototype,{minLengthText:"A mező hossza minimum {0}",maxLengthText:"A mező hossza maximum {0}",blankText:"Kötelező mező",regexText:"",emptyText:null})}if(Ext.form.NumberField){Ext.apply(Ext.form.NumberField.prototype,{minText:"A mező minimum értéke {0} lehet",maxText:"A mező maximum értéke {0} lehet",nanText:"{0} nem értelmezhető számként"})}if(Ext.form.DateField){Ext.apply(Ext.form.DateField.prototype,{disabledDaysText:"Letiltva",disabledDatesText:"Letiltva",minText:"A dátum későbbi kell legyen {0}-nál/nél",maxText:"A dátum korábbi kell legyen {0}-nál/nél",invalidText:"{0} nem valódi dátum - a mező formátuma: {1}",format:"y.m.d"})}if(Ext.form.ComboBox){Ext.apply(Ext.form.ComboBox.prototype,{loadingText:"Betöltés...",valueNotFoundText:undefined})}if(Ext.form.VTypes){Ext.apply(Ext.form.VTypes,{emailText:"A mező tartalma e-mail c�m lehet, formátum: \"user@domain.com\"",urlText:"A mező tartalma webc�m lehet, formátum: \"http:/"+"/www.domain.com\"",alphaText:"A mező csak betűket (a-z) és aláhúzás (_) karaktert tartalmazhat.",alphanumText:"A mező csak betűket (a-z), számokat (0-9) és aláhúzás (_) karaktert tartalmazhat"})}if(Ext.grid.GridView){Ext.apply(Ext.grid.GridView.prototype,{sortAscText:"Növekvő rendezés",sortDescText:"Csökkenő rendezés",lockText:"Oszlop lezárás",unlockText:"Oszlop felengedés",columnsText:"Oszlopok"})}if(Ext.grid.PropertyColumnModel){Ext.apply(Ext.grid.PropertyColumnModel.prototype,{nameText:"Név",valueText:"Érték",dateFormat:"Y m j"})}if(Ext.SplitLayoutRegion){Ext.apply(Ext.SplitLayoutRegion.prototype,{splitTip:"Húzás: átméretezés",collapsibleSplitTip:"Húzás: átméretezés, duplaklikk: eltüntetés."})};
