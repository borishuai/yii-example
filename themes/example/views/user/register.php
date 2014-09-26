<div class="register">
  <h2>Login</h2>
  <?php if (!empty($message)): ?>
    <p class="message"><?php echo $message; ?></p>
  <?php endif; ?>
  <form role="form" action="/user/register" method="post">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Enter username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="profile">Chief Introduction</label>
      <input type="text" class="form-control" name="profile" placeholder="Chief introduction">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>