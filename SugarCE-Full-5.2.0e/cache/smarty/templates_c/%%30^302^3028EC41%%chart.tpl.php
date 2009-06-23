<?php /* Smarty version 2.6.11, created on 2009-06-23 09:39:47
         compiled from include/SugarCharts/tpls/chart.tpl */ ?>
<div id="<?php echo $this->_tpl_vars['chartName']; ?>
_div" style="width:<?php echo $this->_tpl_vars['width']; ?>
;height:<?php echo $this->_tpl_vars['height']; ?>
px;z-index:80;<?php echo $this->_tpl_vars['style']; ?>
">
 	<object type="application/x-shockwave-flash" data="include/SugarCharts/swf/chart.swf?inputFile=<?php echo $this->_tpl_vars['chartXMLFile']; ?>
&swfLocation=include/SugarCharts/swf/&inputColorScheme=<?php echo $this->_tpl_vars['chartColorsXML']; ?>
&inputStyleSheet=<?php echo $this->_tpl_vars['chartStyleCSS']; ?>
&inputLanguage=<?php echo $this->_tpl_vars['chartStringsXML']; ?>
" width="100%" height="100%">
		<param name="allowScriptAccess" value="sameDomain"/>
		<param name="movie" value="include/SugarCharts/swf/chart.swf?inputFile=<?php echo $this->_tpl_vars['chartXMLFile']; ?>
&swfLocation=include/SugarCharts/swf/&inputColorScheme=<?php echo $this->_tpl_vars['chartColorsXML']; ?>
&inputStyleSheet=<?php echo $this->_tpl_vars['chartStyleCSS']; ?>
&inputLanguage=<?php echo $this->_tpl_vars['chartStringsXML']; ?>
"/>
		<param name="menu" value="false"/>
		<param name="quality" value="high"/>
		<param name="wmode" value="transparent" />
		<p><?php echo $this->_tpl_vars['app_strings']['LBL_NO_FLASH_PLAYER']; ?>
</p>
	</object>
</div>

<script type="text/javascript">
	if (typeof SUGAR == 'undefined' || typeof SUGAR.mySugar == 'undefined') {
		// no op
	} else {
		SUGAR.mySugar.addToChartsArray('<?php echo $this->_tpl_vars['chartName']; ?>
', '<?php echo $this->_tpl_vars['chartXMLFile']; ?>
', '<?php echo $this->_tpl_vars['width']; ?>
', '<?php echo $this->_tpl_vars['height']; ?>
', '<?php echo $this->_tpl_vars['chartStyleCSS']; ?>
', '<?php echo $this->_tpl_vars['chartColorsXML']; ?>
', '<?php echo $this->_tpl_vars['chartStringsXML']; ?>
');
	}
	
	function loadChartForReports() {
		loadChartSWF('<?php echo $this->_tpl_vars['chartName']; ?>
', '<?php echo $this->_tpl_vars['chartXMLFile']; ?>
', '<?php echo $this->_tpl_vars['width']; ?>
', '<?php echo $this->_tpl_vars['height']; ?>
', '<?php echo $this->_tpl_vars['chartStyleCSS']; ?>
', '<?php echo $this->_tpl_vars['chartColorsXML']; ?>
', '<?php echo $this->_tpl_vars['chartStringsXML']; ?>
');
	}
</script>