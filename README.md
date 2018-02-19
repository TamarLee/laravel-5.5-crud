# laravel-5.5-crud

1.  დავაინსტალირე ლარაველი. 

2.  შევქმენი მონაცემთა ბაზა.

3.  AppServiceProvider.php - ში ჩავამატე use Illuminate\Support\Facades\Schema; 
      ხოლო boot ფუნქციაში: Schema::defaultStringLength(191);
      
4.  შევქმენი create_posts_table მიგრაციის ფაილი. რომელიშიც დავამატე 
      $table = string('title');
      $table = text('body'); 
      სტრიქონები და გავუშვი php artisan migrate ბრძანება.
        
5.  ასევე შევქმენი Post მოდელი, რომელშიც ჩავამატე
      protected $table = "posts";
      protected $fillable = ['title','body']; სტრიქონები.
    
6.  post კონტროლერში დავამატე use App\Post; ხოლო index მეთოდში ეს სტრიქონი:
      $post = Post::latest()->paginate(5);
      return view('posts.index', compact('posts'))->with('i', (request()->input('page', 1) -1) *5);
 
7.  composer require "laravelcollective/html" ბრძანებით დავაინსტალირე  laravelcollective/html

8.  config/app.php-ში providers => -ში ჩავამატე 
      Collective\Html\HtmlServiceProvider::class, სტრიქონი,
      aliases => -ში ჩავამატე 
      'Form' => Collective\Html\FormFacade::class,
      'Html' => Collective\Html\HtmlFacade::class, ეს სტრიქონები.
      
9.  შევქმენი ახალი როუტი: 
      Route::resource('posts', 'PostController');
      
10. view-ში შევქმენი posts ფოლდერი და ამ ფოლდერში კი index და master ფაილები.
