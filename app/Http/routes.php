  <?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    
    
         
route::get('/home', ['as' => 'home',function()
            {  
            return('welcome');
            }
           ]);      
    
   
    
 route::get('/ricette',['as' => 'tutte.ricette',    'uses' => 'ControllerRicette@showlist']);

route::get('/ricette/nuovo',       ['as' => 'ricette.new',    'uses' => 'ControllerRicette@showNewForm']);


route::post('/ricette',           ['as' => 'ricette.post',  'uses' => 'ControllerRicette@Store']);         

route::get('/ricette/{id}',       ['as'=>  'ricette.single','uses' => 'ControllerRicette@showSingle']);
route::get('/ricette/{id}/edita', ['as' => 'ricette.edit',  'uses' => 'ControllerRicette@showEditForm']);
route::put('/ricette/{id}',       ['as' => 'ricette.put',   'uses' => 'ControllerRicette@edit']); 
route::get('/ricette/{id}/cancella', ['as' => 'ricette.edit',  'uses' => 'ControllerRicette@deleteSingle']);
    //
Route::auth();

Route::get('/home', 'HomeController@index');
    
});




