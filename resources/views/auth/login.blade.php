<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('assets/css/auth/style.css') }}" />
  <title>Login</title>
</head>

<body>
  <div class="container between gap overview">
    <div class="header rounded primary" style="--width: 600px">
      <div class="logo flex center" style="justify-content: start">
        <span class="icon" style="margin-right: 8px">
          <svg xmlns="http://www.w3.org/2000/svg" width="auto" height="auto" fill="currentColor" class="bi bi-meta" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8.217 5.243C9.145 3.988 10.171 3 11.483 3 13.96 3 16 6.153 16.001 9.907c0 2.29-.986 3.725-2.757 3.725-1.543 0-2.395-.866-3.924-3.424l-.667-1.123-.118-.197a54.944 54.944 0 0 0-.53-.877l-1.178 2.08c-1.673 2.925-2.615 3.541-3.923 3.541C1.086 13.632 0 12.217 0 9.973 0 6.388 1.995 3 4.598 3c.319 0 .625.039.924.122.31.086.611.22.913.407.577.359 1.154.915 1.782 1.714Zm1.516 2.224c-.252-.41-.494-.787-.727-1.133L9 6.326c.845-1.305 1.543-1.954 2.372-1.954 1.723 0 3.102 2.537 3.102 5.653 0 1.188-.39 1.877-1.195 1.877-.773 0-1.142-.51-2.61-2.87l-.937-1.565ZM4.846 4.756c.725.1 1.385.634 2.34 2.001A212.13 212.13 0 0 0 5.551 9.3c-1.357 2.126-1.826 2.603-2.581 2.603-.777 0-1.24-.682-1.24-1.9 0-2.602 1.298-5.264 2.846-5.264.091 0 .181.006.27.018Z" />
          </svg>
        </span>
        <span class="subtitle">Meta</span>
      </div>
      <div class="label px-medium" style="height: 524px">
        <h2 class="title">Bergabunglah dengan Facebook</h2>
        <p class="subtitle mx-small">
          Kami akan membantu Anda untuk membuat akun baru dengan
          beberapa langkah mudah.
        </p>
      </div>
      <div class="footer">
        &copy; 2023 Facebook Clone | Cavin Hartono Putra
      </div>
    </div>
    <div class="content" style="--width: calc(100% - 600px)">
      <div class="label">
        <h2 class="title">Masuk Akun</h2>
        <h2 class="subtitle">
          Jika Anda tidak mempunyai akun?
          <a href="/register" class="link">Buat Akun.</a>
        </h2>
      </div>
      <form action="/login/check" class="form px-medium">
        <div class="field">
          <div class="input-form">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="input" placeholder="mark@example.com" />
          </div>
        </div>
        <div class="field">
          <div class="input-form">
            <label for="password">Password</label>
            <div class="password">
              <input type="password" id="password" name="password" class="input" placeholder="Minimal 8 karakter" />
              <span class="icon"></span>
            </div>
          </div>
        </div>
        <div class="field">
          <button class="btn success">Masuk</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    const passwordField = document.querySelector('.input[type="password"]');
    document.querySelector('#eye').addEventListener('click', function() {
      if (passwordField.type === 'password') {
        passwordField.type = "text";
      } else {
        passwordField.type = "password";
      }
      document.querySelector('#eye').classList.toggle('active');
    })
  </script>
</body>

</html>