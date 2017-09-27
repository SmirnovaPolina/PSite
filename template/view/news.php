<?php
	include('template/view/base/header.php');
?>
<div class='articles'>
	<div class='header'>
		<h1>Новости сайта</h1>
	</div>
	<?php foreach($news as $articles) :?>
	<div class='news'>
		<h2><?=$articles['header']?></h2>
		<p class='annotation'><?=$articles['content']?></p>
		<div class='option-news'>
			<div class='date'>07.07.2017</div>
			<div class='read-more'><a href='/news/article/<?=$articles['id']?>/'>Читать полностью</a></div>
		</div>
	</div>
	<?php endforeach?>
</div>
<?php
	include('template/view/sitebar.php');
	include('template/view/base/footer.php');
?>