<h2>Cập Nhật</h2>
<form method="post" enctype="multipart/form-data" action="">
    <input type="text" name="name" placeholder="Nhap ten" value="<?php echo $user->name ?>">
    <input type="email" name="email" placeholder="Nhap Email" value="<?php echo $user->email ?>">
    <input type="text" name="password" placeholder="Nhap password" value="<?php echo $user->password ?>">
    <input type="date" name="birthday" placeholder="Nhap date" value="<?php echo $user->birthday ?>">
    <!--    <input type="text" name="address" placeholder="Nhap dia chi" value="-->
    <?php //echo $user->birthday ?><!--">-->
    <select name="address">
        <?php foreach ($cities as $city): ?>
            <option <?php echo $city->id == $user->city_id ? "selected" : "" ?> value="<?php echo $city->id?>"><?php echo $city->name?></option>
        <?php endforeach; ?>
    </select>
    <input type="file" name="fileUpToLoad">
    <img style="width: 100px" src="<?php echo "upload/" . $user->image ?>" alt="">
    <button type="submit">Update</button>
    <a href="index.php">
        <button>Back</button>
    </a>
</form>
