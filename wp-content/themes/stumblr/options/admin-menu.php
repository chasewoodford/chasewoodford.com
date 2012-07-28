<?php
add_action('admin_menu', 'create_theme_options_page');
add_action('admin_init', 'register_and_build_fields');
add_action('admin_notices', 'stumblr_admin_notice');

function create_theme_options_page() {
	add_theme_page('Stumblr Options', 'Stumblr Options', 'administrator', 'stumblr_admin', 'options_page_fn');
}

function register_and_build_fields() {
	// SETTINGS
	register_setting('plugin_options', 'plugin_options', 'validate_setting');
	add_settings_section('main_section', 'Main Settings', 'section_cb', __FILE__);
	add_settings_field('stumblr_logo', 'Logo:', 'logo_setting', __FILE__, 'main_section'); 
	add_settings_field('stumblr_color_scheme', 'Color Scheme:', 'color_scheme_setting', __FILE__, 'main_section');
	add_settings_field('stumblr_show_title', 'Show Titles:', 'show_title_setting', __FILE__, 'main_section');
	add_settings_field('stumblr_highlight_color', 'Highlight Color:', 'highlight_color_setting', __FILE__, 'main_section');
	// JS
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"));
	wp_register_script('jscolor', (get_template_directory_uri()."/resources/jscolor/jscolor.js"),'jquery',false,true);
	wp_enqueue_script('jscolor');
	// CSS
	wp_register_style('options_page', (get_template_directory_uri()."/options/options_page.css"));
	wp_enqueue_style('options_page');
}

function options_page_fn() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-tools"></div>
		<h2>Stumblr Options</h2>
		<p>Take control of your theme, by overriding the default settings with your own specific preferences.</p>

		<form method="post" action="options.php" enctype="multipart/form-data">
			<?php settings_fields('plugin_options'); ?>
			<?php do_settings_sections(__FILE__); ?>
			<p class="submit">
				<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
			</p>
		</form>
	</div>
<?php
}

function stumblr_admin_notice(){
	if($_REQUEST['settings-updated']){
		echo "<div class='updated'><p>Updated</p></div>";
	}
}

// highlight colour 
function highlight_color_setting() {
	$options = get_option('plugin_options');
	echo "<input name='plugin_options[stumblr_highlight_color]' type='text' value='{$options['stumblr_highlight_color']}' class=\"color {hash:true,required:false,pickerPosition:'right',pickerClosable:true}\"/>";
}

// Color Scheme
function color_scheme_setting() {
	$options = get_option('plugin_options');
	$items = array("light", "minimal", "custom");

	echo "<select name='plugin_options[stumblr_color_scheme]'>";
	foreach ($items as $item) {
		$selected = ( $options['stumblr_color_scheme'] === $item ) ? 'selected = "selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
}

// Responsive  Setting
function show_title_setting() {
	$options = get_option('plugin_options');
	$items = array("yes", "no");

	echo "<select name='plugin_options[stumblr_show_title]'>";
	foreach ($items as $item) {
		$selected = ( $options['stumblr_show_title'] === $item ) ? 'selected = "selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
}

// Logo
function logo_setting() {
	echo '<input type="file" name="stumblr_logo" />';
	$options = get_option('plugin_options');
	if($options['stumblr_logo'] != ''){
		echo "<br/><img src='{$options['stumblr_logo']}' />";
	}
}

function validate_setting($plugin_options) {
	$keys = array_keys($_FILES);
	$i = 0;

	foreach ($_FILES as $image) {
	// if a files was upload
		if ($image['size']) {
			// if it is an image
			if (preg_match('/(jpg|jpeg|png|gif)$/', $image['type'])) {
				$override = array('test_form' => false);
				$file = wp_handle_upload($image, $override);

				$plugin_options[$keys[$i]] = $file['url'];
			} else {
				$options = get_option('plugin_options');
				$plugin_options[$keys[$i]] = $options[$logo];
				wp_die('No image was uploaded.');
			}
		} else {
			// else, retain the image that's already on file.
			$options = get_option('plugin_options');
			$plugin_options[$keys[$i]] = $options[$keys[$i]];
		}
		$i++;
	}

	return $plugin_options;
}

function section_cb() {}
