<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\CategoryModel;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getParents(): array
    {
        $categories = new CategoryModel();
        return $categories->orderBy('id','desc')
            ->where('parent_id',null)
            ->findAll();
    }

    public function getChildren(int $id): array
    {
        $categories = new CategoryModel();
        return $categories->orderBy('id','desc')
            ->where('parent_id',$id)
            ->findAll();
    }

    public function getWithChildren(): array
    {
        $categories = new CategoryModel();
        return $categories->children($categories->findAll());
    }

    public function show(int $id){
        $categoryModel = new CategoryModel();
        $category = $categoryModel->find($id);
        return !empty($category) ? $category : null;
    }

    public function store(array $data){
        $categoryModel = new CategoryModel();
        $category = $categoryModel->save([
            'name'=>$data['name'],
        ]);
        return !empty($category) ? $category : null;

    }

    public function delete(int $id){
        $categoryModel = new CategoryModel();
        $category = $categoryModel->find($id);
        if ($category){
            $categoryModel->delete($id);
            return true;
        }
        return false;
    }
}