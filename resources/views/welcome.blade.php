<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Joyful Bean</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous"/>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-9">
                <!-- Konten utama-->
                <h2>Good Morning, Melanie</h2>
                <p>We don't make your coffee. We make your day</p>
            </div>
            <div class="col-md-3">
                <!-- Sidebar dengan 3 ikon -->
                <div class="sidebar">
                    <i class="fas fa-home"></i>
                    <i class="fas fa-search"></i>
                    <i class="fas fa-user"></i>
                </div>
            </div>

            <div class="row">
                <button type="button" class="col my-3 btn btn-primary mx-3" style="background-color: #A7662C; border: none">
                    <i class="fa-regular fa-heart"></i></i> Rekomendasi
                </button>
                <button type="button" class="col my-3 btn btn-outline-dark mx-3">
                    <i class="fa-regular fa-heart"></i> Coffe
                </button>
                <button type="button" class="col my-3 btn btn-outline-dark mx-3">
                    <i class="fa-regular fa-heart"></i> Non-Coffe
                </button>
                <button type="button" class="col my-3 btn btn-outline-dark mx-3">
                    <i class="fa-regular fa-heart"></i></i> Main Course
                </button>
                <button type="button" class="col my-3 btn btn-outline-dark mx-3">
                    <i class="fa-regular fa-heart"></i></i> Dessert
                </button>
            </div>

            <div class="row row-cols-3">
                @foreach ($menus as $menu)
                    <div class="col p-3">
                        <div class="card" style="width: 20rem;">
                            <img src="{{ asset('/img/' . $menu['gambar']) }}" class="card-img-top"
                                alt="{{ $menu['nama_menu'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $menu['nama_menu'] }}</h5>
                        <p class="card-text">
                                    {{ $menu['deskripsi'] }}</p>
                                    <h5 class="card-text" style="color: #A7662C">{{ $menu['harga'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</html>
