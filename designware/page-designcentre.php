<?php
/**
 * Template Name: Design Centre
 */
 ?>

 <?php get_header(); ?>
<div id="main" class="<?php if ($themestyle == 'block') echo 'container_12'; ?>">
<div id="sub-main" class="<?php if ($themestyle != 'block') echo 'container_12'; ?>">
<div id="content" class="<?php echo $class; ?>">
<div id="application">
  <div id="options">
    <p>Click an option to apply a style or click on the image directly.</p>
    <ul id="options-menu">
    <!-- Repeatable Region Template. 
    Style this accordingly and the application would do the rest. DO NOT REMOVE styles and attributes -->
      <li>
        <label for="option{index}">
          <input type="radio" id="option{index}" name="option" value="{id}" onclick="return this.checked? setOption(document.getElementById(this.value)) : false;">
          &nbsp;{title}<br/><span class="tooltip"></span></label>
      </li>
      <!-- end -->
    </ul>

    <span class="btn-wrap"><a href="" class="print-btn" onclick="window.print()">Print Your Selections</a></span>
  </div> <!-- /. options -->

  <div id="panel">
  <!-- Furniture Layout Item. 
  Each furniture must have the following HTML markup. Note the file naming scheme with respect to "id" attribute. Note naming scheme for "name" and "data-option" attributes on images. Each Changable option should have a class of "option", attribute "data-attribute", attribute "data-option" with value = "partname", attribute "data-attributevalue" -->
    <div class="inner">
      <div id="chair-element" class="element">
      <div class="options"><img src="<?php echo get_template_directory_uri(); ?>/designware/chair.png" name="chair" id="chair"  onclick="setOptions($(this).sibilings('.option'));" title="Chair"><img src="<?php echo get_template_directory_uri(); ?>/designware/chair-top.png" name="chair" id="chair-top" class="option" data-attribute="" title="Chair Top Bracket" data-option="top" data-attributevalue="" style="
    top: 40px;
    left: 36px;
" onclick="setOption(this);"> <img  onclick="setOption(this);" src="<?php echo get_template_directory_uri(); ?>/designware/chair-cushion.png" data-attributevalue="" title="Chair Cushion" name="chair" id="chair-cushion" class="option" data-option="cushion" data-attribute="" style="
    top: 123px;
    left: 53px;
"> <br style="clear:both;">
      </div>
      <div class="actions">
        <!-- Option to swaps colour/ pattern from 1 Furniture Layout Item's options to other(2) Furniture Layout Item options using "id" attribute of option images. swapOptionAttributes(from get DOMElement by i,to get DOMElement by id) -->
        <input class="action-btn" type="button" name="swap" value="Swap" onclick="swapOptionAttributes(document.getElementById('chair-cushion'),document.getElementById('chair-top'));">
	<!-- Option to reset the Furniture Layout Item's options to original state using "name" attribute of images -->
         <input class="action-btn" type="button" name="reset" value="Reset" onclick="resetOptions('chair');">
        <!-- Option to copy colour/ pattern from 1 Furniture Layout Item to next or previous Furniture Layout Item in panel using "name" attribute of images. copyOptionAttributes(from,to) -->
        <input class="action-btn" type="button" name="switch" value="»" onclick="copyOptionAttributes('chair','table');">
        
      </div>
    </div> <!-- / #chair-element -->
    <!-- end -->

    <div id="table-element" class="element">
      <div class="options"><img src="<?php echo get_template_directory_uri(); ?>/designware/table.png"  onclick="setOptions($(this).sibilings('.option'));" name="table" id="table" title="Bess Table" style="
"> <img src="<?php echo get_template_directory_uri(); ?>/designware/table-top.png"  onclick="setOption(this);" title="Table Glass" name="table" id="table-top" class="option" data-attribute="" data-option="top" data-attributevalue="" style="
    top: 43px;
    left: 94px;
"> <img src="<?php echo get_template_directory_uri(); ?>/designware/table-sidepanel.png"  onclick="setOption(this);" title="Table Side Panels" data-attributevalue="" name="table" id="table-sidepanel" class="option" data-option="sidepanel" data-attribute="" style="
    top: 79px;
    left: 59px;
"> <br style="clear:both;">
      </div>
      <div class="actions">
        <input class="action-btn" type="button" name="switch" value="&laquo;" onclick="copyOptionAttributes('table','chair');">
        <input class="action-btn" type="button" name="swap" value="Swap" onclick="swapOptionAttributes(document.getElementById('table-sidepanel'),document.getElementById('table-top'));">
        <input class="action-btn" type="button" name="reset" value="Reset" onclick="resetOptions('table');">
      </div>
    </div> <!-- / #table- element -->
    <br style="clear:both;display:block;">
  </div>
    </div>

  <br style="clear:both;display:block;"/>
  <div id="palette">
    <div class="col one-half">
      <h3>Colours</h3>
      <div id="colours">
       
       <!-- Repeatable Region Template. 
       Style this accordingly and the application would do the rest. DO NOT REMOVE styles and attributes -->
      <a href="javascript:void(0);" title="{name}" class="swatch star-five" onclick="setColor(this.style.backgroundColor);" style="background-color: grey;">&nbsp;</a>
      <!-- end -->
      
      </div>
    </div>
    
    <div class="col one-half last">
      <h3>Patterns</h3>
      <div id="patterns"> 
        <!-- Repeatable Region Template. Style this accordingly and the application would do the rest. DO NOT REMOVE styles and attributes -->
        <a href="javascript:void(0);" id="{value}" class="swatch" onclick="setPattern('{value}');" title="{name}" style="background-image:url('http://stellamagnolia.com/wp-content/themes/unique/designware/pattern-{value}.png');">&nbsp;</a><!-- end -->
      </div>
      </div>
    </div>
    
</div> <!-- / #application -->
</div>
</div>
</div>

<?php get_footer(); ?>