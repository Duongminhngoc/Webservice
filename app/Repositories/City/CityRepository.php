<?php
namespace App\Repositories\City;

use Auth;
use App\Models\City;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\City\CityRepositoryInterface;
use Hash;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    public function __construct(City $city)
    {
        $this->model = $city;
    }
    public function getCities()
    {
    	return $this->model->pluck('name', 'id')->toArray();
    }
}
