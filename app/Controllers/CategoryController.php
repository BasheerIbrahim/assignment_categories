<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Factories\CategoryFactory;
use App\Repositories\CategoryRepository;
use CodeIgniter\API\ResponseTrait;

class CategoryController extends BaseController
{
    use ResponseTrait;

    public function __construct()
    {
        $this->categoryRepository = new CategoryRepository();
        $this->categoryFactory = new CategoryFactory();
    }


    public function index()
    {
        $data['categories']= $this->categoryRepository->getParents();
        return $this->respond($data, 200);
    }

    public function show($id)
    {
        return $this->respond(['children'=>$this->categoryRepository->getChildren($id)], 200);
    }

    public function getTree()
    {
        $categories= $this->categoryRepository->getWithChildren();
        return $this->respond($this->categoryFactory->categoryList($categories),200);
    }
}
