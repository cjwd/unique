(function() {  
    tinymce.create('tinymce.plugins.accordion', {
		/**
		 * Initializes the plugin, this will be executed after the plugin has been created.
		 * This call is done before the editor instance has finished it's initialization so use the onInit event
		 * of the editor instance to intercept that event.
		 *
		 * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
		 * @param {string} url Absolute URL to where the plugin is located.
		 */
		init : function(ed, url) {
				// Register example button
				ed.addButton('accordion', {
				title : 'Shortcode Accordion',
				image : url + '/images/accordion.png',
				onclick : function() {
					ed.focus();
					ed.selection.setContent(
					'[accordion]<br/> \
					[ac-item title="your title" titlecolor="" titlebackground="" signcolor="" signbackground="" contentcolor="" contentbackground=""]your content[/ac-item]<br/> \
					[ac-item title="your title" titlecolor="" titlebackground="" signcolor="" signbackground="" contentcolor="" contentbackground=""]your content[/ac-item]<br/> \
					[ac-item title="your title" titlecolor="" titlebackground="" signcolor="" signbackground="" contentcolor="" contentbackground=""]your content[/ac-item]<br/> \
					[ac-item title="your title" titlecolor="" titlebackground="" signcolor="" signbackground="" contentcolor="" contentbackground=""]your content[/ac-item]<br/> \
					[/accordion]<br/>'
					);
				}
			});
		},
		/**
		 * Creates control instances based in the incomming name. This method is normally not
		 * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
		 * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
		 * method can be used to create those.
		 *
		 * @param {String} n Name of the control to create.
		 * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
		 * @return {tinymce.ui.Control} New control instance or null if no control was created.
		 */
		createControl : function(n, cm) {
			return null;
		}
	});
	// Register plugin
	tinymce.PluginManager.add('accordion', tinymce.plugins.accordion);  
})(); 