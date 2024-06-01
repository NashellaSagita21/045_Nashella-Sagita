<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sela's Book | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
        <body class="bg-secondary">
    <div class="container p-0 rounded-2 shadow bg-white">
            @include('menu')
            @include('banner')
            @include('sidebar')
            @include('konten')
            @include('footer')
            @include('populer')
            @include('copyright')
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!-- modal -->

    <button
      type="button"
      class="btn btn-primary d-none btnModal"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
    >
      <!-- Launch demo modal -->
    </button>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 modalTitle" id="exampleModalLabel"></h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body row">
            <div class="modalImage col-md-6 col-12"></div>
            <div class="col-md-6 col-12">
              <div class="modalDeskripsi"></div>
              <div class="d-md-flex">
                <span
                  class="ms-auto text-danger fw-bold d-block text-center modalHarga"
                ></span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              <!-- Close -->
            </button>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script src="javascript/main.js"></script>
    <script>
      document.querySelectorAll('.btnDetail').forEach(item => {
        item.addEventListener('click', (e) => {
            let parent = e.target.parentNode.parentNode;

            let gambar = parent.querySelector('.card-img-top').src;
            let judul = parent.querySelector('.judul').innerHTML;
            let deskripsi = parent.querySelector('.deskripsi') ? parent.querySelector('.deskripsi').innerHTML : '<i>tidak ada informasi yang tersedia</i>';

            let tombolModal = document.querySelector('.btnModal');
            tombolModal.click();

            document.querySelector('.modalTitle').innerHTML = judul;
            let image = document.createElement('img');
            image.src = gambar;
            image.classList.add('w-100');
            document.querySelector('.modalImage').innerHTML = '';
            document.querySelector('.modalImage').appendChild(image);
            document.querySelector('.modalDeskripsi').innerHTML = deskripsi;
            document.querySelector('.modalHarga').innerHTML = harga;

            const nohp = '62857123123';
            let pesan = `https://api.whatsapp.com/send?phone=${nohp}&text=Halo, saya mau pesan produk ini ${gambar}`;

            document.querySelector('.btnBeli').href = pesan;
        });
      });
    </script>
  </body>
</html>