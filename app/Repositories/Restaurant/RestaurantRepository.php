<?php
namespace App\Repositories\Restaurant;

use Auth;
use App\Models\Restaurant;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\Restaurant\RestaurantRepositoryInterface;
use Hash;

class RestaurantRepository extends BaseRepository implements RestaurantRepositoryInterface
{
    public function __construct(Restaurant $restaurant)
    {
        $this->model = $restaurant;
    }
    
}
