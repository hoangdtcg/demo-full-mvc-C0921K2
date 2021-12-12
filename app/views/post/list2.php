<div class="container">
    <div class="row">
        <?php if (isset($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="card col mr-3">
                    <img class="card-img-top" src="upload/default.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post->title ?></h5>
                        <p class="card-text"><?php echo $post->content ?></p>
                        <p class="card-text"><?php echo $post->post_time ?></p>
                        <div class="action-group">
                            <a href="index.php?page=post-update&id=<?php echo $post->id ?>">Update</a>
                            <a onclick="return confirm('Ban muon xoa khong?')" href="index.php?page=post-delete&id=<?php echo $post->id ?>">Delete</a>
                        </div>
                        <a href="index.php?page=post-detail&id=<?php echo $post->id ?>" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
                <p>Ở đây không có gì bạn eii</p>
        <?php endif; ?>

    </div>

</div>