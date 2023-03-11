<?php
/**
 * Block Style Guide
 */
return array(
	'title'      => esc_html__( 'Block Style Guide', 'lensation' ),
	'categories' => array( 'lensation' ),
	'content'    => '<!-- wp:heading {"level":1} -->
					<h1>Heading One</h1>
					<!-- /wp:heading -->

					<!-- wp:heading -->
					<h2>Heading Two</h2>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":3} -->
					<h3>Heading Three</h3>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":4} -->
					<h4>Heading four</h4>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":5} -->
					<h5>Heading Five</h5>
					<!-- /wp:heading -->

					<!-- wp:heading {"level":6} -->
					<h6>Heading Six</h6>
					<!-- /wp:heading -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Preformatted Block</h2>
					<!-- /wp:heading -->

					<!-- wp:preformatted {"className":"is-style-lensation-wp-preformatted"} -->
<pre class="wp-block-preformatted is-style-lensation-wp-preformatted">The Road Not Taken, by Robert Frost

Two roads diverged in a yellow wood,
And sorry I could not travel both
And be one traveler, long I stood
And looked down one as far as I could
To where it bent in the undergrowth;
Then took the other, as just as fair,
And having perhaps the better claim,
Because it was grassy and wanted wear;
Though as for that the passing there
Had worn them really about the same,
And both that morning equally lay
In leaves no step had trodden black.
Oh, I kept the first for another day!
Yet knowing how way leads on to way,
I doubted if I should ever come back.
I shall be telling this with a sigh
Somewhere ages and ages hence:
Two roads diverged in a wood, and I—
I took the one less traveled by,
And that has made all the difference.

...and heres a line of some really, really, really, really long text, just to see how it is handled and to find out how it overflows;</pre>
<!-- /wp:preformatted -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Ordered List</h2>
					<!-- /wp:heading -->

					<!-- wp:list {"ordered":true} -->
					<ol><li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li><li>Donec ullamcorper nulla non metus auctor fringilla.<ol><li>Condimentum euismod aenean</li><li>Purus commodo ridiculus.</li><li>Nibh commodo vestibulum.</li></ol></li><li>Cras justo odio, dapibus ac facilisis in.</li></ol>
					<!-- /wp:list -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Unordered List</h2>
					<!-- /wp:heading -->

					<!-- wp:list -->
					<ul><li>Nullam id dolor id nibh ultricies vehicula ut id elit.</li><li>Donec ullamcorper nulla non metus auctor fringilla.<ul><li>Condimentum euismod aenean</li><li>Purus commodo ridiculus.</li><li>Nibh commodo vestibulum.</li></ul></li><li>Cras justo odio, dapibus ac facilisis in.</li></ul>
					<!-- /wp:list -->

					<!-- wp:heading -->
					<h2>Verse</h2>
					<!-- /wp:heading -->

					<!-- wp:verse {"className":"is-style-lensation-wp-verse"} -->
					<pre class="wp-block-verse is-style-lensation-wp-verse">This is an example of the core Gutenberg verse block.</pre>
					<!-- /wp:verse -->

					<!-- wp:heading -->
					<h2>Separator</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Here are examples of the three separator styles of the core Gutenberg separator block.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:separator {"className":"is-style-dots"} -->
					<hr class="wp-block-separator is-style-dots"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Table</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Here is an example of the core Gutenberg table block.</p>
					<!-- /wp:paragraph -->

					<!-- wp:table {"hasFixedLayout":true,"className":"is-style-lensation-wp-table"} -->
					<figure class="wp-block-table is-style-lensation-wp-table"><table class="has-fixed-layout"><tbody><tr><td>Employee</td><td>Salary</td><td>Position</td></tr><tr><td>Jane Doe</td><td>$100k</td><td>CEO</td></tr><tr><td>Jane Doe</td><td>$100k</td><td>CTO</td></tr><tr><td>Jane Doe</td><td>$100k</td><td>Engineering</td></tr><tr><td>Fred Bloggs</td><td>$100k</td><td>Marketing</td></tr></tbody></table></figure>
					<!-- /wp:table -->

					<!-- wp:heading -->
					<h2>Latest Posts, List View</h2>
					<!-- /wp:heading -->

					<!-- wp:latest-posts /-->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Latest Posts, Grid View</h2>
					<!-- /wp:heading -->

					<!-- wp:latest-posts {"postLayout":"grid","columns":2} /-->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Blockquote</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna sed diam ed diam eget risus varius eget.</p>
					<!-- /wp:paragraph -->

					<!-- wp:quote {"className":"is-style-lensation-block-quote"} -->
					<blockquote class="wp-block-quote is-style-lensation-block-quote"><p>Donec sed odio dui. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p><cite>Rich Tabor</cite></blockquote>
					<!-- /wp:quote -->

					<!-- wp:paragraph -->
					<p>Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius blandit sit amet non magna sed diam ed diam eget risus varius eget.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Alternate Blockquote</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>The alternate block quote style can be tarageted using the <strong>.wp-block-quote.is-large</strong>. CSS selector. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<!-- /wp:paragraph -->

					<!-- wp:quote {"className":"is-style-large"} -->
					<blockquote class="wp-block-quote is-style-large"><p>Donec sed odio dui. Maecenas faucibus mollis interdum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p><cite>Rich Tabor</cite></blockquote>
					<!-- /wp:quote -->

					<!-- wp:paragraph -->
					<p>The alternate block quote style can be tarageted using the <strong>.wp-block-quote.is-large</strong>. CSS selector. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading -->
					<h2>Audio</h2>
					<!-- /wp:heading -->

					<!-- wp:audio -->
					<figure class="wp-block-audio"><audio controls src="https://example.com"></audio><figcaption>An example of an Audio Block caption</figcaption></figure>
					<!-- /wp:audio -->

					<!-- wp:paragraph -->
					<p>Curabitur blandit tempus porttitor. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Buttons</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Nullam id dolor id nibh ultricies vehicula ut id elit. <strong>Center aligned</strong>:</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"align":"center"} -->
					<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="#">Center aligned button</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:paragraph -->
					<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"align":"center","className":"is-style-outline"} -->
					<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link" href="#">Left aligned button</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->

					<!-- wp:paragraph -->
					<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Maecenas sed diam eget risus varius.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Categories</h2>
					<!-- /wp:heading -->

					<!-- wp:categories /-->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Archives</h2>
					<!-- /wp:heading -->

					<!-- wp:archives /-->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Columns</h2>
					<!-- /wp:heading -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut </p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Pull Quote</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Here is an example of the core pull quote block, set to display centered. Nulla vitae elit libero, a pharetra augue. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<!-- /wp:paragraph -->

					<!-- wp:pullquote {"className":"is-style-lensation-pullquote"} -->
					<figure class="wp-block-pullquote is-style-lensation-pullquote"><blockquote><p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere est at lobortis.</p><cite>Rich Tabor, ThemeBeans.com</cite></blockquote></figure>
					<!-- /wp:pullquote -->

					<!-- wp:heading -->
					<h2>Wide Aligned</h2>
					<!-- /wp:heading -->

					<!-- wp:pullquote {"align":"wide","className":"is-style-lensation-pullquote"} -->
					<figure class="wp-block-pullquote alignwide is-style-lensation-pullquote"><blockquote><p>Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed ibendum nulla sed consectetur.</p><cite>Rich Tabor, Founder at ThemeBeans.com</cite></blockquote></figure>
					<!-- /wp:pullquote -->

					<!-- wp:heading -->
					<h2>Full Width</h2>
					<!-- /wp:heading -->

					<!-- wp:pullquote {"align":"full","className":"is-style-lensation-pullquote"} -->
					<figure class="wp-block-pullquote alignfull is-style-lensation-pullquote"><blockquote><p>Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed ibendum nulla sed consectetur.</p><cite>Rich Tabor, Founder at ThemeBeans.com</cite></blockquote></figure>
					<!-- /wp:pullquote -->

					<!-- wp:paragraph -->
					<p>Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
					<!-- /wp:paragraph -->

					<!-- wp:pullquote {"textAlign":"left","align":"left","className":"is-style-lensation-pullquote"} -->
					<figure class="wp-block-pullquote alignleft has-text-align-left is-style-lensation-pullquote"><blockquote><p>Here we have a left-aligned pullquote.</p><cite>Rich Tabor</cite></blockquote></figure>
					<!-- /wp:pullquote -->

					<!-- wp:paragraph -->
					<p>Donec id elit non mi porta gravida at eget metus. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Vestibulum id ligula porta felis euismod semper.</p>
					<!-- /wp:paragraph -->

					<!-- wp:pullquote {"textAlign":"right","align":"right","className":"is-style-lensation-pullquote"} -->
					<figure class="wp-block-pullquote alignright has-text-align-right is-style-lensation-pullquote"><blockquote><p>Here we have a right-aligned pullquote.</p><cite>Rich Tabor</cite></blockquote></figure>
					<!-- /wp:pullquote -->

					<!-- wp:paragraph -->
					<p>Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Image Block</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Maecenas faucibus mollis interdum.</p>
					<!-- /wp:paragraph -->

					<!-- wp:image {"id":18852,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image size-large"><img src="https://catchspaces.sfo2.cdn.digitaloceanspaces.com/fse-pro/images/flight-path-on-gray-a-1024x485.jpg" alt="" class="wp-image-18852"/><figcaption>Here is an example of an image block caption</figcaption></figure>
					<!-- /wp:image -->

					<!-- wp:heading -->
					<h2>Wide aligned</h2>
					<!-- /wp:heading -->

					<!-- wp:image {"align":"wide","id":18852,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image alignwide size-large"><img src="https://catchspaces.sfo2.cdn.digitaloceanspaces.com/fse-pro/images/flight-path-on-gray-a-1024x485.jpg" alt="" class="wp-image-18852"/><figcaption>Here is an example of an image block caption</figcaption></figure>
					<!-- /wp:image -->

					<!-- wp:heading -->
					<h2>Full Width</h2>
					<!-- /wp:heading -->

					<!-- wp:image {"align":"full","id":18852,"sizeSlug":"large","linkDestination":"none"} -->
					<figure class="wp-block-image alignfull size-large"><img src="https://catchspaces.sfo2.cdn.digitaloceanspaces.com/fse-pro/images/flight-path-on-gray-a-1024x485.jpg" alt="" class="wp-image-18852"/><figcaption>Here is an example of an image block caption</figcaption></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<!-- /wp:paragraph -->

					<!-- wp:image {"align":"left","id":18852,"sizeSlug":"medium","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="alignleft size-medium"><img src="https://catchspaces.sfo2.cdn.digitaloceanspaces.com/fse-pro/images/flight-path-on-gray-a-300x142.jpg" alt="" class="wp-image-18852"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<!-- /wp:paragraph -->

					<!-- wp:image {"align":"right","id":18852,"sizeSlug":"medium","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="alignright size-medium"><img src="https://catchspaces.sfo2.cdn.digitaloceanspaces.com/fse-pro/images/flight-path-on-gray-a-300x142.jpg" alt="" class="wp-image-18852"/></figure></div>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
					<!-- /wp:paragraph -->

					<!-- wp:separator -->
					<hr class="wp-block-separator"/>
					<!-- /wp:separator -->

					<!-- wp:heading -->
					<h2>Video Block</h2>
					<!-- /wp:heading -->

					<!-- wp:embed {"url":"https://player.vimeo.com/video/243191812?h=a742105876\u0026dnt=1\u0026app_id=122963","type":"video","providerNameSlug":"vimeo","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
					<figure class="wp-block-embed is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
					https://player.vimeo.com/video/243191812?h=a742105876&amp;dnt=1&amp;app_id=122963
					</div></figure>
					<!-- /wp:embed -->

					<!-- wp:heading -->
					<h2>Wide Aligned</h2>
					<!-- /wp:heading -->

					<!-- wp:embed {"url":"https://player.vimeo.com/video/243191812?h=a742105876\u0026dnt=1\u0026app_id=122963","type":"video","providerNameSlug":"vimeo","responsive":true,"align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
					<figure class="wp-block-embed alignwide is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
					https://player.vimeo.com/video/243191812?h=a742105876&amp;dnt=1&amp;app_id=122963
					</div></figure>
					<!-- /wp:embed -->

					<!-- wp:heading -->
					<h2>Full Width</h2>
					<!-- /wp:heading -->

					<!-- wp:embed {"url":"https://player.vimeo.com/video/243191812?h=a742105876\u0026dnt=1\u0026app_id=122963","type":"video","providerNameSlug":"vimeo","responsive":true,"align":"full","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
					<figure class="wp-block-embed alignfull is-type-video is-provider-vimeo wp-block-embed-vimeo wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
					https://player.vimeo.com/video/243191812?h=a742105876&amp;dnt=1&amp;app_id=122963
					</div></figure>
					<!-- /wp:embed -->',
);
