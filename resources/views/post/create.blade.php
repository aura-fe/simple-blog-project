@extends('post.layout')

@section('content')
<h1 class="my-3">Ada apa hari ini ?</h1>
<form action="/create" method="post" class="needs-validation" novalidate>
    @csrf
    <div class="form-floating py-2 gy-2">
        <input type="text" name="title" class="form-control" id="floatingInput" placeholder="Judul" required>
        <label for="floatingInputValue">Judul Post</label>
        <div class="invalid-feedback">
            Wajib diisi!
        </div>
    </div>
    <div class="form-floating mb-3 py-2 gy-2">
        <textarea name="content" class="form-control" id="floatingTextarea" placeholder="Tuliskan postinganmu" style="height: 100px" required></textarea>
        <label for="floatingTextarea2">Tuliskan postinganmu disini</label>
        <div class="invalid-feedback">
            Wajib diisi!
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" type="submit">Terbitkan</button>
    </div>
</form>

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
@endsection


