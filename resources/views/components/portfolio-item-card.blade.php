@props(['imagem', 'titulo', 'categoria', 'filtro'])

<div class="col-lg-4 col-md-6 portfolio-item isotope-item {{ $filtro }}">
    <div class="portfolio-content h-100">
        <img src="{{ asset($imagem) }}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>{{ $titulo }}</h4>
            <p>{{ $categoria }}</p>
            <a href="{{ asset($imagem) }}" title="{{ $titulo }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
    </div>
</div>