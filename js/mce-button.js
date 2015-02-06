(function() {
	    tinymce.PluginManager.add('my_mce_button', function( editor, url ) {
	        editor.addButton('my_mce_button', {
	            text: 'peice box',
	            icon: false,
							onclick: function() {
								editor.windowManager.open( {
									title: 'Insert Random Shortcode',
									body: [
										{
											type: 'textbox',
											name: 'heading_1_name',
											label: 'first heading',
											value: 'Basic'
										},
										{
											type: 'textbox',
											name: 'heading_2_name',
											label: 'last heading',
											value: 'class'
										},
										{
											type: 'textbox',
											name: 'price',
											label: 'how much price',
											value: '$15.00 / Month'
										},
										{
											type: 'textbox',
											name: 'button',
											label: 'Text Box',
											value: 'Register now'
										},
										{
											type: 'textbox',
											name: 'feature1_name',
											label: 'feature no 1',
											value: '100 applications'
										},

										{
											type: 'textbox',
											name: 'feature2_name',
											label: 'feature no 2',
											value: '24x7 support available'
										},

										{
											type: 'textbox',
											name: 'feature3_name',
											label: 'feature no 3',
											value: 'No hidden fees'
										},

										{
											type: 'textbox',
											name: 'feature4_name',
											label: 'feature no 4',
											value: 'Free 30-days trial'
										},

										{
											type: 'textbox',
											name: 'feature5_name',
											label: 'feature no 5',
											value: 'Stop anytime easily'
										},

										{
											type: 'listbox',
											name: 'special_class_name',
											label: 'is this special?',
											'values': [
												{text: 'exclusive', value: 'special'},
												{text: 'not exclusive', value: ''}
												
											]
										}
									],
									onsubmit: function( e ) {
										editor.insertContent( '[price_box heading_1="' + e.data.heading_1_name + '" heading_2="' + e.data.multilineName + '" special_class="' + e.data.special_class_name + '" price="' + e.data.heading_1_name + '" button="' + e.data.heading_1_name + '" feature1="' + e.data.feature1_name + '" feature2="' + e.data.feature2_name + '" feature3="' + e.data.feature3_name + '" feature4="' + e.data.feature4_name + '" feature5="' + e.data.feature5_name + '"]');
									}
								});
							}
       });
	    });
})();

