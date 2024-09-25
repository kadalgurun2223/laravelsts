
@extends('layout.doc')

@section('container')
    
    
<section class="page-section" id="about">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Tentang saya</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">{{$nami}}</h3>
                    <p class="text-muted mb-0">Halo nama Saya Moch Fadilah Rifaldi</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Jurusan</h3>
                    <p class="text-muted mb-0">Jurusan saya di sekolah ini adalah jurusan Pengrembangan Perangkat Lunak Dan Game</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Asal Sekolah</h3>
                    <p class="text-muted mb-0">Saya bersekolah di SMK BAKTI NUSANTARA 666</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                    <h3 class="h4 mb-2">Keahlian</h3>
                    <p class="text-muted mb-0">Saya bisa menggunakan laravel</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
