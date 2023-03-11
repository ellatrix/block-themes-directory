<?php
/**
 * Getting started template
 */
$spice_fse_name = wp_get_theme();
?>
<div id="getting_started" class="spice-fse-tab-pane active">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h1 class="spice-fse-info-title text-center"><?php 
					/* translators: %s: theme name */
					printf( esc_html__('%s Theme Configuration','spice-fse'), $spice_fse_name ); ?>
				</h1>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-12">
			    <div class="spice-fse-page">
					<div class="spice-fse-theme-info">
						<h2><?php 
						/* translators: %s: theme name */
						printf( esc_html__('%s','spice-fse'), $spice_fse_name ); ?>
						</h2>
						<p><?php esc_html_e( 'Welcome to Spice FSE Theme. It is a  Full Site Editing WordPress theme. It is based on block patterns that allow you to create stunning blogs and websites. The theme comes with a clean and modern responsive design having built in  Business,  About, Service, Portfolio, Team, Testimonial, Contact and Blog templates.', 'spice-fse' ); ?></p>
						<div class="spice-fse-editor">
							<p><?php echo esc_html__('Click here to edit your site','spice-fse'); ?> <a class="button" href="<?php echo esc_url(admin_url( 'site-editor.php' )) ?>"><?php echo esc_html__('Edit site','spice-fse'); ?></a></p>	
						</div>
					</div>
				</div>	
			</div>		
		</div>			
		<div class="row">
			<div class="col-md-6">
				<div class="spice-fse-page">
					<div class="spice-fse-page-top"><?php esc_html_e( 'Features in Spice FSE', 'spice-fse' ); ?>
					</div>
					<div class="spice-fse-page-content">
						<ul class="spice-fse-page-list-flex">
							<li>
								<?php echo esc_html__('Responsive Design','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('17 Templates','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('5 Templates Parts','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Header Pattern(Default,Center,Rigt logo,Full width)','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Hero Banner Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('About Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Service Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Funfact Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Portfolio Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Features Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Cta Pattern ','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Team Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Testomonial Pattern ','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Latest Blog Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('4 Client Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Contact Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Google Map Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Footer Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Footer Social Icon Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Footer Widget Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Sidebar Widget Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Post List Pattern','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Multiple Blog Templates','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('About us Template','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Service Template','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Team Template','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Testimonail Template','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Contact us Template','spice-fse'); ?>
							</li>
							<li>
								<?php echo esc_html__('Portfolio Template','spice-fse'); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="spice-fse-page">
					<div class="spice-fse-page-top"><?php esc_html_e( 'Useful Links', 'spice-fse' ); ?>
				    </div>
					<div class="spice-fse-page-content">
						<ul class="spice-fse-page-list-flex">
							<li>
								<a class="spice-fse-page-quick-setting-link" href="<?php echo esc_url('https://spice-fse.spicethemes.com/'); ?>" target="_blank"><?php echo esc_html__('Spice Fse Demo','spice-fse'); ?></a>
							</li>
							<li>
								<a class="spice-fse-page-quick-setting-link" href="<?php echo esc_url('https://helpdoc.spicethemes.com/category/spice-fse/'); ?>" target="_blank"><?php echo esc_html__('Spice Fse Documentation','spice-fse'); ?></a>
							</li>
							<li>
								<a class="spice-fse-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/contact/'); ?>" target="_blank"><?php echo esc_html__('Pre-sales enquiry','spice-fse'); ?></a>
							</li>
							<li>
								<a class="spice-fse-page-quick-setting-link" href="<?php echo esc_url('https://spicethemes.com/spice-fse-changelog/'); ?>" target="_blank"><?php echo esc_html__('Changelog','spice-fse'); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>