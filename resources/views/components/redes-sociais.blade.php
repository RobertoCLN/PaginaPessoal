@props(['links'])

<div class="social-links text-center">

    @foreach ($links as $link)
        <x-social-link
            :url="$link['url']"
            :rede="$link['rede']"
            :icone="$link['icone']"
        />
    @endforeach

</div>