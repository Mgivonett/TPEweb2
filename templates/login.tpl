
<div class="modo-login">

  <h2 class="text-center">Login</h2>
  <div class="row">
      <p class="text-center">Ingrese su email y password <strong>para ingresar</strong></p>
  </div>
  <div class="row">
    <div class="formulario-de-login">
      <form action="index.php?action=login" class="form-horizontal login-form">
        <div class="form-group">
          <label for="InputEmail1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="user-email" id="InputEmail1" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label for="InputPassword1" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="user-pw" class="form-control" id="InputPassword1" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Login</button>
          </div>
        </div>
      </form>
    </div>
  </div>

<div>
    {include file='createAcount.tpl'}
</div>
