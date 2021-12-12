<?php
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header("Location:index.php?page=login");
}
?>
<div class="container">
    <div class="row profile">
        <?php include "app/views/layout/profile.php" ?>
        <div class="col-9">
            <div class="profile-content">
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" value="<?php echo $user->name ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password" value="<?php echo $user->password ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email"  value="<?php echo $user->email ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputBirthday">Birthday</label>
                        <input type="date" class="form-control" id="inputBirthday" name="birthday"  value="<?php echo $user->birthday ?>">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputState">Address</label>
                            <select id="inputState" name="address" class="form-control">
                                <option <?php echo $user->address == "Ha Noi" ? "selected" : "" ?> value="Ha Noi">Ha Noi</option>
                                <option <?php echo $user->address == "Hue" ? "selected" : "" ?> value="Hue">Hue</option>
                                <option <?php echo $user->address == "Phu Tho" ? "selected" : "" ?> value="Phu Tho">Phu Tho</option>
                                <option <?php echo $user->address == "Hai Duong" ? "selected" : "" ?> value="Hai Duong">Hai Duong</option>
                                <option <?php echo $user->address == "Da Nang" ? "selected" : "" ?> value="Da Nang">Da Nang</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="index.php?page=post-list"><button type="button" class="btn btn-secondary">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
