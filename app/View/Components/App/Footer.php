<?php

namespace App\View\Components\App;

use App\Models\Category;
use App\Models\Course;
use App\Models\Good;
use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Footer extends Component
{
    public Collection $pages;

    public Collection $serviceCategories;

    public Collection $productCategories;

    public Collection $goodCategories;

    public Collection $services;

    public Collection $products;

    public Collection $courses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $categoriesQuery = Category::query()
            ->whereNull('parent_id')
            ->where('published', true)
            ->where('bottom', true);

        $this->serviceCategories = (clone $categoriesQuery)->where('type', Service::class)->get();

        $this->productCategories = (clone $categoriesQuery)->where('type', Product::class)->get();

        $this->goodCategories = (clone $categoriesQuery)->where('type', Good::class)->get();

        $this->pages = Page::query()->where('published', true)
            ->where('bottom', true)
            ->get();

        $this->services = Service::query()->where('published', true)
            ->where('bottom', true)
            ->get();

        $this->products = Product::query()->where('published', true)
            ->where('bottom', true)
            ->get();

        $this->courses = Course::query()->where('published', true)
            ->where('bottom', true)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.app.footer');
    }
}
