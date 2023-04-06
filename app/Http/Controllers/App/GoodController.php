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
use ProtoneMedia\Splade\Facades\Splade;

class GoodController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::query()->where('code', 'goods')->firstOrFail();

        $page->seo_title && SEO::title($page->seo_title);
        $page->seo_description && SEO::description($page->seo_description);
        $page->seo_keywords && SEO::keywords($page->seo_keywords);

        /** @var Builder $goodsQuery */
        $goodsQuery = Good::query();

        $goodsIds = $goodsQuery->pluck('id')->toArray();

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
                $attributeValues[$attribute->id][] = [
                    'value' => $value->value,
                    'count' => $count,
                ];
            }
        }

        $attrs = $request->get('attrs');

        if ($request->has('price_from')) {
            $goodsQuery->where('price', '>=', $request->get('price_from'));
        }

        if ($request->has('price_to')) {
            $goodsQuery->where('price', '>=', $request->get('price_to'));
        }

        $sort = $request->get('sort', 'default');

        if ($sort === 'default') {
        }

        if ($sort === 'price') {
            $goodsQuery->orderBy('price');
        }

        if ($sort === 'price_desc') {
            $goodsQuery->orderBy('price', 'desc');
        }

        if ($sort === 'alpha') {
            $goodsQuery->orderBy('name');
        }

        $goodsQuery->where(function (Builder $q) use ($attributeValues, $attrs) {
            foreach ($attributeValues as $attributeId => $values) {
                foreach ($values as $i => $attributeValue) {
                    if (isset($attrs[$attributeId][$i])) {
                        $q->orWhereHas('attributes', function (Builder $aq) use ($attributeId, $attributeValue) {
                            $aq->where('attribute_id', $attributeId)
                                ->where('value', $attributeValue['value']);
                        });
                    }
                }
            }
        });

        $goods = $goodsQuery->paginate();

        $filter = [
            'maxPrice' => (int) $maxPrice,
            'minPrice' => (int) $minPrice,
            'attributeValues' => $attributeValues,
            'data' => $goods,
            'form' => [
                'price_from' => (int) $request->get('price_from', $minPrice),
                'price_to' => (int) $request->get('price_to', $maxPrice),
                'sort' => $request->get('sort', 'default'),
                'attrs' => [],
            ],
        ];

        foreach ($attributes as $attribute) {
            foreach ($attributeValues[$attribute->id] as $i => $value) {
                $filter['form']['attrs'][$attribute->id][$i] = isset($attrs[$attribute->id][$i]);
            }
        }

        Splade::share('filter', $filter);

        $categories = Category::query()->where('type', Good::class)->get();

        return view('app.goods.index', [
            'page' => $page,
            'goods' => $goods,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,
            'attrs' => $attrs,
            'attributes' => $attributes,
            'attributeValues' => $attributeValues,
            'categories' => $categories,
        ]);
    }

    public function category(Request $request, Category $category)
    {
        $category->seo_title && SEO::title($category->seo_title);
        $category->seo_description && SEO::description($category->seo_description);
        $category->seo_keywords && SEO::keywords($category->seo_keywords);

        /** @var Builder $goodsQuery */
        $goodsQuery = Good::query();

        $goodsIds = $goodsQuery->pluck('id')->toArray();

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
                $attributeValues[$attribute->id][] = [
                    'value' => $value->value,
                    'count' => $count,
                ];
            }
        }

        $attrs = $request->get('attrs');

        if ($request->has('price_from')) {
            $goodsQuery->where('price', '>=', $request->get('price_from'));
        }

        if ($request->has('price_to')) {
            $goodsQuery->where('price', '>=', $request->get('price_to'));
        }

        $goodsQuery->where(function (Builder $q) use ($attributeValues, $attrs) {
            foreach ($attributeValues as $attributeId => $values) {
                foreach ($values as $i => $attributeValue) {
                    if (isset($attrs[$attributeId][$i])) {
                        $q->orWhereHas('attributes', function (Builder $aq) use ($attributeId, $attributeValue) {
                            $aq->where('attribute_id', $attributeId)
                                ->where('value', $attributeValue['value']);
                        });
                    }
                }
            }
        });

        $goods = $goodsQuery->paginate();

        $filter = [
            'maxPrice' => (int) $maxPrice,
            'minPrice' => (int) $minPrice,
            'attributeValues' => $attributeValues,
            'form' => [
                'price_from' => (int) $request->get('price_from', $minPrice),
                'price_to' => (int) $request->get('price_to', $maxPrice),
                'sort' => $request->get('sort', 'default'),
                'attrs' => [],
            ],
        ];

        foreach ($attributes as $attribute) {
            foreach ($attributeValues[$attribute->id] as $i => $value) {
                $filter['form']['attrs'][$attribute->id][$i] = isset($attrs[$attribute->id][$i]);
            }
        }

        Splade::share('filter', $filter);

        $categories = Category::query()->where('type', Good::class)->get();

        return view('app.goods.category', [
            'mainCategory' => $category,
            'goods' => $goods,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,
            'attributes' => $attributes,
            'attributeValues' => $attributeValues,
            'categories' => $categories,
        ]);
    }

    public function good(Request $request, Good $good)
    {
        $good->seo_title && SEO::title($good->seo_title);
        $good->seo_description && SEO::description($good->seo_description);
        $good->seo_keywords && SEO::keywords($good->seo_keywords);

        $good->load([
            'attributes.attribute',
        ]);

        $goods = Good::query()->whereHas('categories', function (Builder $q) use ($good) {
            $q->whereIn('id', $good->categories()->pluck('id')->toArray());
        })->get();

        return view('app.goods.good', [
            'good' => $good,
            'goods' => $goods,
        ]);
    }
}
