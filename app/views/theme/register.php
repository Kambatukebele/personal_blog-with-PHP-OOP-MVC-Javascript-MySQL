<?php $this->view("theme", "header", $data);  ?>

<div class="register">
  <div class="container">
    <div class="register_all">
      <h1>Register your Account</h1>
    </div>
  </div>
</div>

<!-- FORM REGISTRATION -->
<div class="form">
  <div class="container">
    <div class="form_all">
      <form method="POST">
        <div class="form__inputs">
          <div class="form__input">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="firstname">
          </div>
          <div class="form__input">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" placeholder="lastname">
          </div>
        </div>
        <div class="form__inputs">
          <div class="form__input">
            <label for="email">Last Name</label>
            <input type="text" name="email" placeholder="email">
          </div>
          <div class="form__input">
            <label for="password">Last Name</label>
            <input type="text" name="password" placeholder="password">
          </div>
        </div>

        <div class="form_button">
          <button type="submit">Register</button>
        </div>

        <p class="form__transfert">Already have an account? <a href="<?=ROOT?>login">Log in here</a></p>
      </form>
      <div class="form__api">
        <div class="form__api--text">
          OR <br> <br> Register with Google
        </div>

        <div class="mt-3">
          <button class="btn btn-success"><a class="text-white text-decoration-none" href="#">Google</a></button>
        </div>

      </div>
    </div>
  </div>

</div>
<?php $this->view("theme", "footer", $data);  ?>