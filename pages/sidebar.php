<?php 
	$pages = ['music','bio','shows','contact']; 
?>
<div id="sidebar">
	<ul>
<?php foreach ($pages as $menuPage) : ?>		
		<li <?php if ($menuPage == $pageName) echo 'class="current"'?>>
	<?php if ($menuPage == $pageName) echo '<h1>'?>
			<a href="<?=url($menuPage)?>"><?=ucfirst($menuPage)?></a>
	<?php if ($menuPage == $pageName) echo '</h1>'?>	
		</li>				
<?php endforeach ?>
		<li class="external"><a href="https://thealbumclub.bandcamp.com" target="_blank">bandcamp<span class="arrow">&#9654;</span></a></li>
    	<li class="external"><a href="https://www.facebook.com/TheAlbumClubBand" target="_blank">facebook<span class="arrow">&#9654;</span></a></li>
	</ul>
</div>
