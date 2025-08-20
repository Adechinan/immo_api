<?php

namespace App\View\Components;

use Closure;
use App\Models\Post;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class post_card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public Post $post)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post_card');
    }
}
