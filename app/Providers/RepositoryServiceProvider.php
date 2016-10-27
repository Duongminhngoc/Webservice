<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use App\Repositories\User\ProductRepository;
use App\Repositories\User\ProductRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\Lesson\LessonRepository;
use App\Repositories\Lesson\LessonRepositoryInterface;
use App\Repositories\Word\WordRepository;
use App\Repositories\Word\WordRepositoryInterface;
use App\Repositories\Result\ResultRepository;
use App\Repositories\Result\ResultRepositoryInterface;
use App\Repositories\UserShow\UserShowRepository;
use App\Repositories\UserShow\UserShowRepositoryInterface;
use App\Repositories\Relationship\RelationshipRepository;
use App\Repositories\Relationship\RelationshipRepositoryInterface;
use App\Repositories\Answer\AnswerRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;


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
        App::bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        App::bind(LessonRepositoryInterface::class, LessonRepository::class);
        App::bind(WordRepositoryInterface::class, WordRepository::class);
        App::bind(ResultRepositoryInterface::class, ResultRepository::class);
        App::bind(UserShowRepositoryInterface::class, UserShowRepository::class);
        App::bind(RelationshipRepositoryInterface::class, RelationshipRepository::class);
        App::bind(AnswerRepositoryInterface::class, AnswerRepository::class);
    }
}
