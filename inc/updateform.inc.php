<form action="./index.php" method="POST">

  <div class="container">
    <form action="index.php" method="POST">
      <div class="form-group">

        <div class="form-radio">
          <label for="gender">Anrede</label>
          <div class="form-flex">
            <input type="radio" name="anrede" value="m" id="male" checked="checked" />
            <label for="male">Herr</label>

            <input type="radio" name="anrede" value="w" id="female" />
            <label for="female">Frau</label>

          </div>
        </div>
        <div class="wrap">
          <div class="input-group">
            <div class="col-12 col-sm-5 ">

              <label for="vorname">Vorname: </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"><img src="res/icons/name.png"></i></span>
                </div>
                <input type="text" class="form-control" name="vorname" placeholder="Vorname">
              </div>

              <label for="nachname">Nachname: </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"><img src="res/icons/name.png"></i></span>
                </div>
                <input type="text" class="form-control" name="nachname" placeholder="Nachname">
              </div>

            </div>

            <div class="col-12 col-sm-5 offset-sm-2">
              <label for="username">Username: </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"><img src="res/icons/user.png"></i></span>
                </div>
                <input type="text" class="form-control" name="username" placeholder="bobby96">
              </div>
              <label for="email">E-Mail-Adresse: </label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-key"><img src="res/icons/email.png"></i></span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="sample@gmail.com">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" class=" btn float-right register_btn" name="register" value="Registrieren">
      </div>
    </form>