<?php

namespace Carbon_Fields\Field;

/**
 * Radio buttons field class.
 */
class Radio_Image_Field extends Select_Field {
	/**
	 * Underscore template of this field.
	 */
	public function template() {
		?>
		<# if (_.isEmpty(options)) { #>
			<em><?php esc_html_e( 'no options', 'carbon-fields' ); ?></em>
		<# } else { #>
			<div class="carbon-radio-image-list">
				<# _.each(options, function(option) { console.log(option.value, value);#>
					<div class="carbon-radio-image-item">
						<label>
							<input type="radio" name="{{{ name }}}" value="{{ option.value }}" {{{ option.value == value ? 'checked="checked"' : '' }}} />

							<figure class="thumbnail-image-wrap {{{ option.value == value ? 'active' : '' }}}">
								<img src="{{{ option.name }}}" />
							</figure>
						</label>
					</div>
				<# }) #>
			</div>
		<# } #>
		<?php
	}
}
