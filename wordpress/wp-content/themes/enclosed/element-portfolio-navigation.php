<?php
/*
  This template is used to display the main portfolio navigation.
 */
?>

<ul class="menu-portfolio">
	<?php wp_list_categories("taxonomy=cpo_portfolio_category&title_li="); ?>
</ul>