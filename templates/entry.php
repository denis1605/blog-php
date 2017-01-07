<?php require ('header.php') ?>
<style type="text/css">
	.comments {
		margin-bottom: 20px;
	}
	.comment,
	.ba-article {
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
	.comment_title {
		padding-left: 20px;

	}
	.comment-content {
		font-size: 18px;
	}
	.content {
		font-size: 20px;
		color: #263238;
	}
	.content_title {
		font-size: 30px;
		color: #263238;

	}
</style>
<div class="ba-article">
<h3 class="content_title"><?=$ENTRY['header']?></h3>
<p class="content"><?=$ENTRY['content']?></p>
<div class="comments">
	<span class="date"><?=$ENTRY['date']?></span>
	<span class="author"><?=$ENTRY['author']?></span>
</div>
</div>



<h5 class="comment_title">Comments:</h5>
<?php foreach ($comments as $row): ?>
	<div class="comment">
		<p class="comment-content"><?=$row['content']?></p>

		<div class="comment-header">
			<span class="date"><?=$row['date']?></span>
			<span class="author"><?=$row['author']?></span>
			<?php if(IS_ADMIN): ?>
				<a href="?act=delete-comment&entry_id=<?=$ENTRY['id']?>&id=<?=$row['id']?>"><i class="icon-trash"></i></a>
			<?php endif ?>

		</div>


	</div>

<?php endforeach ?>


<h5 class="comment_title">Add new comment</h5>


<form action="?act=do-new-comment" method="POST" class="well">
	<input type="hidden" name="entry_id" value="<?=$id?>">
	<label>Author</label>
	<input name="author" type="text">
	<label>Content</label>
	<textarea name="content"></textarea>
	<div>
		<button type="submit" class="btn">Post</button>
	</div>
</form>


<?php require ('footer.php') ?>
