<?php

namespace App\View\Components;

use App\Models\Category;
use Closure;
use Faker\Factory;
use Illuminate\Console\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Factory|Htmlable|string|Closure|Application
    {
        return view('components.category-dropdown', [
            'categories' => Category::all(),
            'currentCategory' => Category::firstWhere('slug', request('category'))
        ]);
    }
}
