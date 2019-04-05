<br><br>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 boxyboi text-center">Registration</div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3 text-center"></div>
    <div class="col-md-6 jumbotron">
        <form class="form-horizontal" action="" method="post" novalidate>
            <div class="form-group">
                <label class="control-label">
                    Full Name:
                    <small class="error">
                    * <?=isset($errors['fullname'])? $errors['fullname']:"" ?>
                    </small>
                </label>
                <input class="form-control" type="text" name="fullname" value="<?=$fullname?? ''; ?>" />
            </div>
            <div class="form-group">
                <label class="control-label">
                    Email:
                    <small class="error">
                    * <?=isset($errors['email'])? $errors['email']:"" ?>
                    </small>
                </label>
                <input class="form-control" type="text" name="email" value="<?=$email?? ''; ?>" />
            </div>
            <div class="form-group">
                <label class="control-label">
                    Mobile:
                    <small class="error">
                    * <?=isset($errors['mobile'])? $errors['mobile']:"" ?>
                    </small>
                </label>
                <input class="form-control" type="text" name="mobile" value="<?=$mobile?? ''; ?>" />
            </div>
            <div class="form-group">
                <label class="control-label">
                    Date of Birth:
                    <small class="error">
                    * <?=isset($errors['dob'])? $errors['dob']:"" ?>
                    </small>
                </label>
                <input class="form-control" type="date" name="dob" value="<?=$dob?? ''; ?>" />
            </div>
            <br>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary btn-block" name="submit" />
            </div>
        </form>
    </div>
    <div class="col-md-3 text-center"></div>
</div>