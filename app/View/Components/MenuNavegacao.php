<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuNavegacao extends Component
{
    public array $linksRedes = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->linksRedes = [
            [
                'url' => 'https://x.com/',
                'rede' => 'twitter',
                'icone' => 'bi-twitter-x'
            ],
            [
                'url' => 'https://github.com/RobertoCLN',
                'rede' => 'github',
                'icone' => 'bi-github'
            ],
            [
                'url' => 'https://www.instagram.com/roberto_clneto/',
                'rede' => 'instagram',
                'icone' => 'bi-instagram'
            ],
            [
                'url' => 'https://www.linkedin.com/in/roberto-lopes-2295b01b1/',
                'rede' => 'linkedin',
                'icone' => 'bi-linkedin'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-navegacao');
    }
}
