<h2 class="text-center">Crear Usuario</h2>
<div class="row">
    <p class="text-center">Ingrese sus datos personales <strong>Para crear la cuenta</strong></p>
</div>
<div class="row">
    {*<form accept-charset="utf-8" action="index.php?action=SignUp" class="simform SignUp">
        <div class="sminputs">
            <div class="input full">
                <label class="string optional" for="user-name">Email*</label>
                <input name="email" class="string optional" maxlength="255" id="user-email-create" placeholder="Email" type="email" size="50" />

            </div>
        </div>
        <div class="sminputs">
            <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input name="password" class="string optional" maxlength="255" id="user-pw-create" placeholder="Password" type="text" size="50" />
            </div>
            <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input name="password2" class="string optional" maxlength="255" id="user-pw-repeat-create" placeholder="Repeat password" type="text" size="50" />

            </div>
        </div>
        <div class="simform__actions">
            <input class="sumbit" name="commit" type="submit" value="Create Account" />
            <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
        </div>
    </form>*}
    <form class="form-horizontal SignUp" action="index.php?action=SignUp">
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password"  name="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 control-label">Repetir Password</label>
            <div class="col-sm-10">
                <input type="password" name="password2" class="form-control" id="inputPassword2" placeholder="Repetir Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    </form>
</div>
