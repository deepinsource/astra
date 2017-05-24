<?php
/**
 * View General
 *
 * @package     Astra
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2015, Brainstorm Force
 * @link        http://wpastra.com/
 * @since       Astra 1.0
 */

?>

<dev class="wrap ast-clear">
	<div id="poststuff">
		<div id="post-body" class="metabox-holder">
			<div id="postbox-container-2" class="postbox-container astra-row">

				<div id="normal-sortables-1" class="astra-col-33">
					 <div class="postbox ">
						<h2 class="ui-sortable-handle"><span><?php _e( 'Welcome to Astra', 'astra' ); ?></span></h2>
						<div class="inside">
							<p>
								<?php _e( 'Astra is a very lightweight and beautiful theme made to work with Page Builders.', 'astra' ); ?>
							</p>
							<p>
								<?php _e( 'Go ahead and start customizing your website.', 'astra' ); ?>
							</p>
							<a class="submit button button-primary" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"><?php _e( 'Customize', 'astra' ); ?></a>
						</div>
					 </div>
				</div>

			</div><!-- #postbox-container-2 -->

		</div>
	</div>

</dev>
