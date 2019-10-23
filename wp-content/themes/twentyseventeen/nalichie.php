<?php
/*
Template Name: Мой шаблон страницы
*/
get_header(); ?>

<div class="wrap">

			<div>
				<div style="float:left">
				<ul>
      			<li><a href="/наличие/трубы-водогазопроводные">Трубы водогазопроводные</a></li>
      			<li><a href="/наличие/трубы-оцинкованные">Трубы оцинкованные</a></li>
      			<li><a href="/наличие/трубы-электросварные">Трубы электросварные</a></li>
      			<li><a href="/наличие/трубы-бесшовные-г-к">Трубы бесшовные г/к</a></li>
      			<li><a href="/наличие/трубы-бесшовные-х-к">Трубы бесшовные х/к</a></li>
      			<li><a href="/наличие/трубы-профильные">Трубы профильные</a></li>
    			</ul>
				</div>



				<div style="float:right">
				<?php twentyseventeen_db();?>
				<?php twentyseventeen_db_getPrice(); ?>
				</div>

			</div>

</div>

<?php
get_footer();

