/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.extraplugins='popup,filebrowser';
	config.filebrowserBrowseUrl = 'js/kcfinder/browse.php';
	//config.filebrowserUploadUrl = 'php/upload.php';
    config.toolbar= null;
	config.toolbarGroups= null;

	config.font_names=
	    'Canterbury/Canterbury, sans-serif;' +
		'Arial/Arial, Helvetica, sans-serif;' +
		'Comic Sans MS/Comic Sans MS, cursive;' +
		'Courier New/Courier New, Courier, monospace;' +
		'Georgia/Georgia, serif;' +
		'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
		'Tahoma/Tahoma, Geneva, sans-serif;' +
		'Times New Roman/Times New Roman, Times, serif;' +
		'Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;' +
		'Verdana/Verdana, Geneva, sans-serif';
	
	//config.font_names=  'Canterbury/Canterbury';
	config.extraPlugins='sourcedialog,filebrowser,font,justify,colorbutton';

	config.skin='office2013';

	config.removeButtons='About';

};
