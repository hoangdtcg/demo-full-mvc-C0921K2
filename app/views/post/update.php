<form method="post" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Title" value="<?php echo $post->title?>">
    <input type="text" name="content" placeholder="Content" value="<?php echo $post->content?>">
    <input type="date" name="post_time" placeholder="Post_time" value="<?php echo $post->post_time?>">
    <input type="file" name="fileUpToLoad">
    <img style="width: 100px" src="<?php echo $post->image ?>" alt="">
    <button type="submit">Update</button>
    <a href="index.php?page=post-list">
        <button type="button">Quay lai</button></a>
</form>
