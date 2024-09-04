<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
    <div class="container mt-5 pt-2 card" style="max-width : 360px">
        <h2 class="d-flex justify-content-center">Login</h2>
        <form action="/register" method="post" class="needs-validation" novalidate>
            @csrf
            <div class="form-floating mt-3 py-2 gy-2">
                <input class="form-control" id="floatingInput" name = 'name' type="text" placeholder="username" required>
                <label for="floatingInputValue">Username</label>
                <div class="invalid-feedback">
                    Wajib diisi!
                </div>
            </div>
            <div class="form-floating mt-3 py-2 gy-2">
                <input class="form-control" id="floatingInput" name = 'email' type="text" placeholder="email" required>
                <label for="floatingInputValue">Email</label>
                <div class="invalid-feedback">
                    Wajib diisi!
                </div>
            </div>
            <div class="form-floating mb-3 py-2 gy-2">
                <input class="form-control" id="floatingInput" type="password" name="password" id="" placeholder="password" required>
                <label for="floatingInputValue">Password</label>
                <div class="invalid-feedback">
                    Wajib diisi!
                </div>
            </div>
            @if (session('message'))
                <div class="text-danger">
                    {{ session('message') }}
                </div>
            @endif
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary m-2 " type="submit">Register</button>
            </div>
            <div class="my-2">
                Telah punya akun?
                <a href="/login">Silahkan Login</a>
            </div>
        </form>
    </div>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
</body>
</html>