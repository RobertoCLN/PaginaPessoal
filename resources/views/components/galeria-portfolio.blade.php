@props(['cards'])
<div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul>
          
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              @foreach ($cards as $card)
                <x-portfolio-item-card
                  :imagem="$card['imagem']"
                  :titulo="$card['titulo']"
                  :categoria="$card['categoria']"
                  :filtro="$card['filtro']"
                />
              @endforeach
        </div></div>
          

      </div>