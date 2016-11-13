<!--<div class="header-search">
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
<button class="search-button">
			<span class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
</button>
	</fieldset>
</form>-->


<div class="form">
<span class="toggle"></span>
<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
<input type="text" placeholder="Search" id="s" name="s" value="">
<input type="submit" value="" id="searchsubmit">
</form>
</div>