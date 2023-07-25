@props(['title'])

<section class="page-header page-header-modern bg-color-quaternary border-0 m-0">
    <div class="container position-relative z-index-2">
        <div class="row text-center text-md-start py-3">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="font-weight-bold text-color-dark text-10 mb-0">{{ $title }}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb breadcrumb-dark font-weight-bold d-block text-md-end text-4 mb-0">
                    <li><a href="{{ route('home') }}" class="text-decoration-none text-dark">Главная</a></li>
                    <li class="text-upeercase active text-color-primary">{{ $title }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
