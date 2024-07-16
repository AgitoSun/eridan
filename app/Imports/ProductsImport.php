<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Insert;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class ProductsImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $rows->forget(0);

        foreach ($rows as $row)
        {
            $category = Category::all()->where('title', $row[8])->first();
            if (empty($category)) {
                $category = Category::create(['title' => $row[8]]);
            }

            $inserts = [$row[11], $row[12], $row[13], $row[14], $row[15], $row[16]];

//            $favorites = false;
//            if ($row[9] == 'Да') {
//                $favorites = true;
//            }

            $product = Product::updateOrCreate(['sku' => $row[2]], [
                'title' => $row[1],
                'metal' => $row[3],
                'weight' => $row[4],
                'size' => $row[5],
                'availability' => $row[6],
                'price' => $row[7],
                'category_id' => $category->id,
                'favorites' => $row[9],
                'created_at' => $row[10],
            ]);

            foreach ($inserts as $insert) {
                if (!empty($insert)) {
                    Insert::create([
                        'name' => $insert,
                        'product_id' => $product->id,
                    ]);
                }
            }
        }
    }
}
