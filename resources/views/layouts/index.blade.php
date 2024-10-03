<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>APP Music</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    {{-- Navbar --}}
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-md mb-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Aplikasi Music</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Renaldy Galih Arayaji</a>
          </li>
          
        </ul>
      </div>
    </div>
    </nav>

    {{-- Main --}}
    <div class="container mx-auto p-6">
        @yield('content')
    </div>

    {{-- sweetalert --}}
    @include('sweetalert::alert')

    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>


        // Delete
        $('.confirm-delete').click(function(event) {

            //This will choose the closest form to the button
            var form =  $(this).closest("form");

            //don't let the form submit yet
            event.preventDefault();

            //configure sweetalert alert as you wish
            Swal.fire({
              title: 'Are You Sure?',
              // text: "Data Akan di Hapus",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'yes, Delete!'
            }).then((result) => {
              if (result.isConfirmed) {
                Swal.fire(
                'Success!',
                'Delete Successfully',
                'success'
                )
                form.submit();
              }
            })
        });

        // Audio
        document.addEventListener('DOMContentLoaded', function() {
            let currentAudio = null;
            let currentButton = null;
            document.querySelectorAll('.play-button').forEach(button => {
                button.addEventListener('click', function() {
                    const audioId = this.getAttribute('data-audio-id');
                    const audio = document.getElementById(audioId);
                    if (currentAudio === audio && !audio.paused) {
                        // Jika audio yang sama sedang diputar, pause dan reset
                        audio.pause();
                        audio.currentTime = 0;
                        this.querySelector('.icon-play').classList.remove('hidden');
                        this.querySelector('.icon-stop').classList.add('hidden');
                        currentAudio = null;
                        currentButton = null;
                        // Enable semua tombol
                        document.querySelectorAll('.play-button').forEach(otherButton => {
                            otherButton.disabled = false;
                        });
                    } else {
                        // Jika ada audio yang sedang diputar, stop audio tersebut
                        if (currentAudio) {
                            currentAudio.pause();
                            currentAudio.currentTime = 0;
                            if (currentButton) {
                                currentButton.querySelector('.icon-play').classList.remove('hidden');
                                currentButton.querySelector('.icon-stop').classList.add('hidden');
                            }
                        }
                        // Play audio yang dipilih
                        audio.play();
                        this.querySelector('.icon-play').classList.add('hidden');
                        this.querySelector('.icon-stop').classList.remove('hidden');
                        currentAudio = audio;
                        currentButton = this;
                        // Disable semua tombol lainnya
                        document.querySelectorAll('.play-button').forEach(otherButton => {
                            if (otherButton !== this) {
                                otherButton.disabled = true;
                            }
                        });
                        // Saat audio selesai diputar, enable semua tombol
                        audio.onended = function() {
                            currentAudio = null;
                            currentButton = null;
                            document.querySelectorAll('.play-button').forEach(otherButton => {
                                otherButton.disabled = false;
                            });
                            // Setel ikon ke default
                            button.querySelector('.icon-play').classList.remove('hidden');
                            button.querySelector('.icon-stop').classList.add('hidden');
                       };
                    }
                });
            });
        });

    </script>
</body>
</html>