<?php
/*
Template Name: Мой шаблон страницы
*/
get_header(); ?>

<div class="wrap">

			<div>
				<div style="float:left">
				<ul>
      			<li><a href="/nalichie/vgp">Водогазопроводные</a></li>
      			<li><a href="/nalichie/ock">Оцинкованные</a></li>
      			<li><a href="/nalichie/svr">Электросварные</a></li>
      			<li><a href="/nalichie/bsh">Бесшовные г/к</a></li>
      			<li><a href="/nalichie/hol">Бесшовные х/к</a></li>
      			<li><a href="/nalichie/prf">Профильные</a></li>
    			</ul>
				</div>



				<div style="float:right">
				<?php twentyseventeen_db(); ?>
				</div>

			</div>

</div>

<?php
get_footer();

