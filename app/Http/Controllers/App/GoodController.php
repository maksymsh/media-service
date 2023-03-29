<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Good;
use App\Models\GoodAttribute;
use App\Models\Page;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\SEO;

class GoodController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        /** @var Builder $goodsQuery */
        $goodsQuery = Good::query()->filter($request->all());

        $goodsIds = $goodsQuery->pluck('id')->toArray();

        $goods = $goodsQuery->paginate();

        $maxPrice = $goodsQuery->max('price');
        $minPrice = $goodsQuery->min('price');

        $attributes = Attribute::query()->whereHas('goodAttributes', function (Builder $q) use ($goodsIds) {
            $q->whereIn('good_id', $goodsIds);
        })->get();

        $attributeValues = [];

        foreach ($attributes as $attribute) {
            $values = GoodAttribute::query()->where('attribute_id', $attribute->id)->get()->unique('value');

            $attributeValues[$attribute->id] = [];

            foreach ($values as $value) {
                $count = Good::query()->whereHas('attributes', function (Builder $q) use ($attribute, $value, &$attributeValues) {
                    $q->where('attribute_id', $attribute->id)
                        ->where('value', $value->value);
                })->count();
                $attributeValues[$attribute->id][$value->id] = [
                    'value' => $value->value,
                    'count' => $count,
                ];
            }
        }

        $categories = Category::query()->where('type', Good::class)->get();

        return view('app.goods.index', [
            'page' => $page,
            'goods' => $goods,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,
            'attributes' => $attributes,
            'attributeValues' => $attributeValues,
            'categories' => $categories,
        ]);
    }

    public function category(Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        $goods = Good::query()->whereHas('categories', fn (Builder $q) => $q->where('id', $category->id))->get();

        $categories = Category::query()->where('type', Good::class)->get();

        return view('app.goods.category', [
            'mainCategory' => $category,
            'goods' => $goods,
            'categories' => $categories,
        ]);
    }

    public function good(Good $good)
    {
        $good->seo_title && SEO::title($good->seo_title);
        $good->seo_description && SEO::description($good->seo_description);
        $good->seo_keywords && SEO::keywords($good->seo_keywords);

        $good->load([
            'attributes.attribute',
        ]);

        return view('app.goods.good', [
            'good' => $good,
        ]);
    }
}
