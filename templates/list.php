<?php require ('header.php') ?>

<style type="text/css">
	.comments {
		margin-bottom: 20px;
	}
	.entry {
		margin-bottom: 10px;
		border: 1px solid #A9A9A9;
		-webkit-border-radius: 5px;
		        border-radius: 5px;
		background: #F5F5F5;
		padding: 20px;
	}
	.ba-p {
		margin-bottom: 20px;
	}
	.ba-article,
	.ba-add {
		padding-left: 20px;

	}
</style>

<h1 class="ba-article">Article</h1>


<?php foreach ($records as $row): ?>
	<div class="entry">

		<h3>
		<a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['header']?></a>
		<?php if(IS_ADMIN): ?>
			<a href="?act=edit-entry&id=<?=$row['id']?>"><i class="icon-edit"></i></a>
				<a href="?act=delete-entry&id=<?=$row['id']?>"><i class="icon-trash"></i></a>
		<?php endif ?>
		</h3>
		<p class="ba-p"><?=$row['content']?></p>
		<div class="comments">
			<span class="date"><?=$row['date']?></span>
			<span class="author"><?=$row['author']?></span>
			<a href="?act=view-entry&id=<?=$row['id']?>"><?=$row['comments']?> comments</a>
		</div>

	</div>

<?php endforeach ?>


<div class="pages">
<span>Pages:</span>
<?php for ($i = 1; $i <= $pages; $i++): ?>
    <?php if ($i == $page): ?><?=$i?>
    <?php else: ?><a href="?page=<?=$i?>"><?=$i?></a>
    <?php endif ?>

<?php endfor ?>
</div>


<?php if(IS_ADMIN): ?>


	<h3 class="ba-add">Add new</h3>


	<form action="?act=do-new-entry" method="POST" class="well">
		<label>Author</label>
		<input name="author" type="text">
		<label>Header</label>
		<input name="header" type="text">
		<label>Content</label>
		<textarea name="content"></textarea>
		<div>
			<button type="submit" class="btn">Post</button>
		</div>
	</form>

<?php endif ?>

<?php require ('footer.php') ?>
