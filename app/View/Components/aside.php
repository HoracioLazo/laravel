<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Post;

class aside extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function aside(){
        $postes = Post::where('status', 2)->paginate(6);
        return view('components.aside', compact('posts'));

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.aside');
    }
}
