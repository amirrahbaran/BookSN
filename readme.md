## Book Store
A book social network system

### tinker commands
$book = new App\Book;
$book->name = "Laravel: Up and Running";
$book->pages = 454;
$book->isbn = "978-1491936085";
$book->price = 37;
$book->published_at = "2016-12-03";
$book->save();

App\Book::create([
    'name'=>'Laravel: Learn By Coding', 
    'pages'=>88, 
    'isbn'=>'B0775K3VK7', 
    'price'=>3, 
    'published_at'=>'November 3, 2017'
    ]);

$book = new App\Book;
$book->name = "Learning Laravel's Eloquent";                                              
$book->pages = 202;
$book->isbn="1784391581";
$book->price = 24;
$book->published_at="July 27, 2015";
$book->save();

App\Book::create([
    'name'=>'Laravel Testing Decoded', 
    'pages'=>311, 
    'isbn'=>'B00D8O19O6', 
    'price'=>10, 
    'published_at'=>'May 28, 2013'
    ]);

App\Book::create([
    'name'=>'Time Management For Creative People', 
    'pages'=>516, 
    'isbn'=>'978-9063694234', 
    'price'=>17, 
    'published_at'=>'(October 6, 2016'
    ]);