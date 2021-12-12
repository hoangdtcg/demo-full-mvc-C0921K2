<div class="col-3">
    <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic">
            <img src="<?php echo "upload/".$user->image ?>" class="img-responsive" alt="">
        </div>
        <!-- END SIDEBAR USERPIC -->
        <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                <?php echo $user->name ?>
            </div>
            <div class="profile-usertitle-job">
                <?php echo $user->email ?>
            </div>
        </div>
        <!-- END SIDEBAR USER TITLE -->
        <!-- SIDEBAR BUTTONS -->
        <div class="profile-userbuttons">
            <a href="index.php?page=user-update&id=<?php echo $user->id ?>"><button  type="button" class="btn btn-success btn-sm">Update</button></a>
            <a href="index.php?page=post-list"><button type="button" class="btn btn-danger btn-sm">Post</button></a>
        </div>
        <!-- END SIDEBAR BUTTONS -->
        <!-- SIDEBAR MENU -->
        <div class="profile-usermenu">
            <ul class="nav">
                <li class="active">
                    <a href="#">
                        <i class="glyphicon glyphicon-home"></i>
                        Overview </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i>
                        Account Settings </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        <i class="glyphicon glyphicon-ok"></i>
                        Tasks </a>
                </li>
                <li>
                    <a href="index.php?page=logout">
                        <i class="glyphicon glyphicon-flag"></i>
                        Logout </a>
                </li>
            </ul>
        </div>
        <!-- END MENU -->
    </div>
</div>