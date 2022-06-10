<x-app-layout>


<div class="bg-img">
  <form action="codigologin.php" method="POST" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="btn2" class="btn">Login</button>
  </form>
</div>


</x-app-layout>