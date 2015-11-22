<!-- src/Jukebox/JukeboxBundle/Resources/views/Jukebox/list.html.php -->
<?php $view->extend('::layout.html.php') ?>

<?php $view['slots']->set('title', 'List of Artists') ?>

<h1>List of Artists</h1>
<ul>
	<?php foreach ($artistas as $artista): ?>
	<li>
		<a href="<?php echo $view['router']->generate('jukebox_jukebox_show', array('id' => $artista->getId())) ?>">
			<?php echo $artista->getName() ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
