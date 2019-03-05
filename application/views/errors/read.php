<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog Saya</title>
  </head>
  <body>
    <h1>Daftar Artikel</h1>
    <?php foreach ($posts as $post): ?>
      <h2><?php echo $post->a; ?></h2>
      <p><?php echo $post->b; ?></p>
	  <a href="<?php echo base_url('blog/delete/' . $post->a); ?>">Hapus</a>
    <?php endforeach; ?>
  </body>
</html>


