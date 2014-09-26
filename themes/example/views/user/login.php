<div class="login">
  <h2>Login</h2>
  <?php if (!empty($message)): ?>
    <p class="message"><?php echo $message; ?></p>
  <?php endif; ?>
  <form role="form" action="/user/login" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>