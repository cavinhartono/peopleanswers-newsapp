<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/auth/style.css') }}" />
    <title>Register</title>
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
                <h2 class="title">Buat Akun</h2>
                <h2 class="subtitle">
                    Jika Anda ada mempunyai akun?
                    <a href="/login" class="link">Masuk Akun.</a>
                </h2>
            </div>
            <form action="/register/store" class="form px-medium">
                <div class="field">
                    <div class="input-form">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="input" placeholder="Mark Zuckerberg" />
                    </div>
                </div>
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
                            <span class="icon" id="eye">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="auto" height="auto" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="64" />
                                    <path d="M490.84,238.6c-26.46-40.92-60.79-75.68-99.27-100.53C349,110.55,302,96,255.66,96c-42.52,0-84.33,12.15-124.27,36.11C90.66,156.54,53.76,192.23,21.71,238.18a31.92,31.92,0,0,0-.64,35.54c26.41,41.33,60.4,76.14,98.28,100.65C162,402,207.9,416,255.66,416c46.71,0,93.81-14.43,136.2-41.72,38.46-24.77,72.72-59.66,99.08-100.92A32.2,32.2,0,0,0,490.84,238.6ZM256,352a96,96,0,1,1,96-96A96.11,96.11,0,0,1,256,352Z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <div class="input-form">
                        <label for="gender">Jenis Kelamin</label>
                        <div class="fleld flex gap-reguler mx-small">
                            <div class="input-form flex center option">
                                <input type="radio" id="man" name="gender" class="input" value="man" />
                                <label for="man"> Laki-laki </label>
                            </div>
                            <div class="input-form flex center option">
                                <input type="radio" id="woman" name="gender" value="woman" class="input" />
                                <label for="woman"> Perempuan </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <button class="btn success">Buat</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const passwordField = document.querySelector('.input[type="password"]');
        document.querySelector('#eye').addEventListener('click', () => {
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