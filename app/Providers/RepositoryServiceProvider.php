<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use App\Repositories\User\ProductRepository;
use App\Repositories\User\ProductRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderItem\OrderItemRepository;
use App\Repositories\OrderItem\OrderItemRepositoryInterface;
use App\Repositories\Shipper\ShipperRepository;
use App\Repositories\Shipper\ShipperRepositoryInterface;
use App\Repositories\Shipment\ShipmentRepository;
use App\Repositories\Shipment\ShipmentRepositoryInterface;
use App\Repositories\UserShow\UserShowRepository;
use App\Repositories\UserShow\UserShowRepositoryInterface;
use App\Repositories\Restaurant\RestaurantRepository;
use App\Repositories\Restaurant\RestaurantRepositoryInterface;
use App\Repositories\OrderItemStatusCode\OrderItemStatusCodeRepository;
use App\Repositories\OrderItemStatusCode\OrderItemStatusCodeRepositoryInterface;
use App\Repositories\County\CountyRepository;
use App\Repositories\County\CountyRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(ProductRepositoryInterface::class, ProductRepository::class);
        App::bind(OrderRepositoryInterface::class, OrderRepository::class);
        App::bind(OrderItemRepositoryInterface::class, OrderItemRepository::class);
        App::bind(ShipperRepositoryInterface::class, ShipperRepository::class);
        App::bind(ShipmentRepositoryInterface::class, ShipmentRepository::class);
        App::bind(UserShowRepositoryInterface::class, UserShowRepository::class);
        App::bind(RestaurantRepositoryInterface::class, RestaurantRepository::class);
        App::bind(OrderItemStatusCodeRepositoryInterface::class, OrderItemStatusCodeRepository::class);
        App::bind(ItemRepositoryInterface::class, ItemRepository::class);
    }
}
