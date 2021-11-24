<?php

namespace App\Factories;

class CategoryFactory
{
    public function categoryList(array $data): string
    {
        $html = '';
        foreach ($data as $category) {
            $html .= '<li>'. $category['name'] .'</li>';
            if (array_key_exists('children',$category) && !empty($category['children'])) {
                $html .= '<ul>';
                $html .= $this->categoryList($category['children']);
                $html .= '</ul>';
            }
        }
        return $html;

    }
}