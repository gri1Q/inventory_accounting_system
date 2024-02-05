<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Models\Category;

use function App\Helpers\alert;


class CategoryController extends Controller
{

    public function index()
    {
        return view('pages.category.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        dump(session());
        return view('pages.category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create(['name' => $request->input('name')]);
        $message = $category ? 'Категория успешно создана.' : 'Не удалось создать категорию.';
        $status = $category ? 'success' : 'error';
        alert($message, $status);
        return redirect()->back();
    }

    public function show(/*Category $category*/)
    {
        return "Страница показа данной  категорий";
    }

    public function edit(/*Category $category*/)
    {
        return "Страница редактирования категорий";
    }

    public function update(/*UpdateCategoryRequest $request, Category $category*/)
    {
        return "Страница обновления категории";
    }

    public function delete(/*Category $category*/)
    {
        return "Страница удаления категорий";
    }


}
