<?php
namespace App\Repositories\County;

use Auth;
use App\Models\County;
use Input;
use App\Repositories\BaseRepository;
use App\Repositories\County\CountyRepositoryInterface;
use Hash;

class CountyRepository extends BaseRepository implements CountyRepositoryInterface
{
    public function __construct(County $county)
    {
        $this->model = $county;
    }

    public function getCounties()
    {
    	return $this->model->pluck('name', 'id')->toArray();
    }
}
