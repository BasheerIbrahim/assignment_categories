<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'      => static::faker()->realText(30),
            ],
            [
                'name'      => static::faker()->realText(30),
            ],
            [
                'name'      => static::faker()->realText(30),
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 1,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 2,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 4,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 3,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 2,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 3,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 4,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 5,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 6,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 7,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 8,
            ],[
                'name'      => static::faker()->realText(30),
                'parent_id'      => 1,
            ],[
                'name'      => static::faker()->realText(30),
                'parent_id'      => 2,
            ],
            [
                'name'      => static::faker()->realText(30),
                'parent_id'      => 3,
            ],
        ];
        foreach ($data as $category) {
            $this->db->table('categories')->insert($category);
        }
        //
    }
}
