<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version July 11, 2021, 2:27 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tittle',
        'price',
        'image'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
    public function createProduct(Request $request)
    {
        $file = $request->file('image');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'upload/'.uniqid().'.'.$extension;
        $img = Image::make($file);
        $img->save(public_path($path));

        $input = $request->all();
        $input['image'] = $path;

        return $this->create($input);


    }
}
