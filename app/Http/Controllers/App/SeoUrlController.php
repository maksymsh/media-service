<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Good;
use App\Models\News;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Video;
use Illuminate\Http\Request;

class SeoUrlController extends Controller
{
    public function __invoke(Request $request, $slug)
    {
        $category = Category::query()->where('slug', $slug)->first();

        if ($category) {
            $controller = match ($category->type) {
                News::class => app(NewsController::class),
                Product::class => app(ProductController::class),
                Good::class => app(GoodController::class),
                Project::class => app(ProjectController::class),
                Video::class => app(StudyController::class),
            };

            return $controller->category($request, $category);
        }

        $good = Good::query()->where('slug', $slug)->first();

        if ($good) {
            $controller = app(GoodController::class);

            return $controller->good($request, $good);
        }

        $product = Product::query()->where('slug', $slug)->first();

        if ($product) {
            $controller = app(ProductController::class);

            return $controller->product($request, $product);
        }

        $service = Service::query()->where('slug', $slug)->first();

        if ($service) {
            $controller = app(ServiceController::class);

            return $controller->service($request, $service);
        }

        $project = Project::query()->where('slug', $slug)->first();

        if ($project) {
            $controller = app(ProjectController::class);

            return $controller->project($request, $project);
        }

        $news = News::query()->where('slug', $slug)->first();

        if ($news) {
            $controller = app(NewsController::class);

            return $controller->post($request, $news);
        }

        $course = Course::query()->where('slug', $slug)->first();

        if ($course) {
            $controller = app(StudyController::class);

            return $controller->course($request, $course);
        }

        $page = Page::query()->where('slug', $slug)->first();

        if ($page) {
            if ($page->code === 'about') {
                $controller = app(AboutController::class);
                $method = 'index';
            }
            if ($page->code === 'contacts') {
                $controller = app(ContactsController::class);
                $method = 'index';
            }
            if ($page->code === 'news') {
                $controller = app(NewsController::class);
                $method = 'index';
            }
            if ($page->code === 'products') {
                $controller = app(ProductController::class);
                $method = 'index';
            }
            if ($page->code === 'goods') {
                $controller = app(GoodController::class);
                $method = 'index';
            }
            if ($page->code === 'services') {
                $controller = app(ServiceController::class);
                $method = 'index';
            }
            if ($page->code === 'projects') {
                $controller = app(ProjectController::class);
                $method = 'index';
            }
            if ($page->code === 'study') {
                $controller = app(StudyController::class);
                $method = 'index';
            }
            if ($page->code === 'videos') {
                $controller = app(StudyController::class);
                $method = 'videos';
            }

            return $controller->$method($request);
        }

        abort(404);
    }
}
