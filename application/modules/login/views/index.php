<div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>Admin</b>LTE</a>
</div>
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?php echo base_url('auth'); ?>" method="post">
        <?php if(!empty($msg)): ?>
            <div class="form-group">
                <div class="callout callout-danger">
                    <?php echo $msg; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </div>
    </form>
</div>
