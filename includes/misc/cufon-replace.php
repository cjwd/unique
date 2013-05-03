<?php 
	
add_action('wp_footer', 'add_cufon');
function add_cufon(){

$fontbody = explode('|', get_option('mytheme_fontbody'));
$fonth = explode('|', get_option('mytheme_fonth'));
$fontmainnav = explode('|', get_option('mytheme_fontmainnav'));
$fonthsidebar = explode('|', get_option('mytheme_fonthsidebar'));
$fonthfooter = explode('|', get_option('mytheme_fonthfooter'));
$fontslogan = explode('|', get_option('mytheme_fontslogan'));
$fontstunningtext = explode('|', get_option('mytheme_fontstunningtext'));

$colortextbody = get_option('mytheme_bodytextcolor');
if ($colortextbody != "") $colortextbody = ", color:'".$colortextbody."'";
$colorstextbody = get_option('mytheme_bodytextshadowcolor');
if ($colorstextbody != "") $colorstextbody = ", textShadow:'".$colorstextbody." 1px 1px 3px'";

$colorhbody = get_option('mytheme_bodyhcolor');
if ($colorhbody != "") $colorhbody = ", color:'".$colorhbody."'";
$colorshbody = get_option('mytheme_bodyhshadowcolor');
if ($colorshbody != "") $colorshbody = ", textShadow:'".$colorshbody." 1px 1px 3px'";

$colormainnav = get_option('mytheme_mainnavtextcolor');
if ($colormainnav != "") $colormainnav = ", color:'".$colormainnav."'";
$colorsmainnav = get_option('mytheme_mainnavtextshadowcolor');
if ($colorsmainnav != "") $colorsmainnav = ", textShadow:'".$colorsmainnav." 1px 1px 3px'";

$colorhsidebar = get_option('mytheme_sidebarhcolor');
if ($colorhsidebar != "") $colorhsidebar = ", color:'".$colorhsidebar."'";
$colorhshadowsidebar = get_option('mytheme_sidebarhshadowcolor');
if ($colorhshadowsidebar != "") $colorhshadowsidebar = ", textShadow:'".$colorhshadowsidebar." 1px 1px 3px'";

$colorhfooter = get_option('mytheme_footerhcolor');
if ($colorhfooter != "") $colorhfooter = ", color:'".$colorhfooter."'";
$colorhshadowfooter = get_option('mytheme_footerhshadowcolor');
if ($colorhshadowfooter != "") $colorhshadowfooter = ", textShadow:'".$colorhshadowfooter." 1px 1px 3px'";

$colorslogan = get_option('mytheme_slogancolor');
if ($colorslogan != "") $colorslogan = ", color:'".$colorslogan."'";
$colorsslogan = get_option('mytheme_sloganshadowcolor');
if ($colorsslogan != "") $colorsslogan = ", textShadow:'".$colorsslogan." 1px 1px 3px'";

$colorstunningtext = get_option('mytheme_stunningtextcolor');
if ($colorstunningtext == "") $colorstunningtext = ", color:'#5f5f5f'"; else $colorstunningtext = ", color:'".$colorstunningtext."'";
$colorsstunningtext = get_option('mytheme_stunningtextshadowcolor');
if ($colorsstunningtext != "") $colorsstunningtext = ", textShadow:'".$colorsstunningtext." 1px 1px 3px'";

?>
<?php if (isset($fontbody[1]) && $fontbody[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fontbody[2] ?>'></script> <?php } ?>
<?php if (isset($fonth[1]) && $fonth[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fonth[2] ?>'></script> <?php } ?>
<?php if (isset($fontmainnav[1]) && $fontmainnav[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fontmainnav[2] ?>'></script> <?php } ?>
<?php if (isset($fonthsidebar[1]) && $fonthsidebar[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fonthsidebar[2] ?>'></script> <?php } ?>
<?php if (isset($fonthfooter[1]) && $fonthfooter[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fonthfooter[2] ?>'></script> <?php } ?>
<?php if (isset($fontslogan[1]) && $fontslogan[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fontslogan[2] ?>'></script> <?php } ?>
<?php if (isset($fontstunningtext[1]) && $fontstunningtext[1] == 'cufonfont') { ?>
<script type='text/javascript' src='<?php echo $fontstunningtext[2] ?>'></script> <?php } ?>
<script type="text/javascript">
	<?php
	if (isset($fontbody[1]) && $fontbody[1] == 'cufonfont') {
	echo "Cufon.replace('body', { hover:true, fontFamily:'".$fontbody[0]."' ".$colortextbody.$colorstextbody." });"; }
	if (isset($fonth[1]) && $fonth[1] == 'cufonfont') {
	echo "Cufon.replace('h1, h2, h3, h4, h5, h6, .h-wrapper h1, .h-wrapper h2, .h-wrapper h3, .h-wrapper h4, .h-wrapper h5, .h-wrapper h6', { hover:true, fontFamily:'".$fonth[0]."' ".$colorhbody.$colorshbody." });"; }
	if (isset($fontmainnav[1]) && $fontmainnav[1] == 'cufonfont') {
	echo "Cufon.replace('#main-nav a', { hover:true, fontFamily:'".$fontmainnav[0]."' ".$colormainnav.$colorsmainnav." });"; }
	if (isset($fonthsidebar[1]) && $fonthsidebar[1] == 'cufonfont') {
	echo "Cufon.replace('.sidebar .widget > h3, .sidebar .widget > .h-wrapper h3', { hover:true, fontFamily:'".$fonthsidebar[0]."' ".$colorhsidebar.$colorhshadowsidebar." });"; }
	if (isset($fonthfooter[1]) && $fonthfooter[1] == 'cufonfont') {
	echo "Cufon.replace('#footer-wrapper .widget > h4', { hover:true, fontFamily:'".$fonthfooter[0]."' ".$colorhfooter.$colorhshadowfooter." });"; }
	if (isset($fontslogan[1]) && $fontslogan[1] == 'cufonfont') {
	echo "Cufon.replace('#slogan', { hover:true, fontFamily:'".$fontslogan[0]."' ".$colorslogan.$colorsslogan." });"; }
	if (isset($fontstunningtext[1]) && $fontstunningtext[1] == 'cufonfont') {
	echo "Cufon.replace('.stunningtext-title', { hover:true, fontFamily:'".$fontstunningtext[0]."' ".$colorstunningtext.$colorsstunningtext." });"; }
	?>
</script>

<?php } ?>