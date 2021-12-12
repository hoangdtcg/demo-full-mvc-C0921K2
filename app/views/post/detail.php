<h2>Detail</h2>
<a href="index.php?page=post-list">Quay lai</a>
<table border="1px">
    <thead>
    <tr>
        <th>Id</th>
        <th>Image</th>
        <th>Title</th>
        <th>Conten</th>
        <th>Post_Time</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $post->id ?></td>
        <td>
            <img style="width: 100px;height: auto" src="<?php echo $post->image ?>" alt="">
        </td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><?php echo $post->post_time ?></td>
    </tr>
    </tbody>
</table>
