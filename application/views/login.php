<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/8/2019
 * Time: 8:09 AM
 */
?>


  <div class="container text-center">
      <form class="form-signin" action="<?=base_url();?>index.php/akses/home" method="post">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputUser" class="sr-only">Username</label>
          <input type="text" id="inputUser" class="form-control" placeholder="Username" required="" name="usrnm">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="pass">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
      </form>
  </div>
  </body>
</html>

