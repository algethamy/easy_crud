<?php

namespace EFrontSA\EasyCRUD\Http\Controllers\Admin;

use EFrontSA\EasyCRUD\Http\Requests\CityRequest;
use EFrontSA\EasyCRUD\Models\BasicCRUDTrait;
use EFrontSA\EasyCRUD\Models\City;
use EFrontSA\EasyCRUD\Requests\CRUDRequest;

class CityController extends Controller
{
    use BasicCRUDTrait;

    public function __construct(City $model) // You can change the model type hint to update the model in this controller
    {
        $this->model = $model;
        $this->view = 'cities'; // where the views located. the trait look for (index, create, edit) views.

        app()->bind(CRUDRequest::class, CityRequest::class); // bind your request with CRUDRequest interface
    }
}
