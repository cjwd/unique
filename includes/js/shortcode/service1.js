(function() {  
    tinymce.create('tinymce.plugins.service1', {
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
				ed.addButton('service1', {
				title : 'Shortcode Service1',
				image : url + '/images/service1.png',
				onclick : function() {
					ed.focus();
					ed.selection.setContent(
					'[service1 column="3" title="Title 1" image="" background="" buttontitle="DETAILS" href=""]your content[/service1]<br/> \
					[service1 column="3" title="Title 2" image="" background="" buttontitle="DETAILS" href=""]your content[/service1]<br/> \
					[service1 column="3" title="Title 3" image="" background="" buttontitle="DETAILS" href=""]your content[/service1]<br/>'
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
	tinymce.PluginManager.add('service1', tinymce.plugins.service1);  
})(); 