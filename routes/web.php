<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/welcome', 'publicationController@welcome' );
Route::get('/result', 'publicationController@result' );
Route::get('/menuResult', 'publicationController@menuResult' );
Route::get('/oneItem', 'publicationController@oneItem' );
Route::get('/commander', 'CommandeController@commander' );

Route::get('/contact', 'contactController@contact' );
Route::get('/send', 'contactController@send' );


Route::get('/', 'publicationController@welcome');

Route::get('homex', 'HController@connecter');
Route::post('homex', 'HController@connecter');



 Route::group(['middleware' => 'prevent-back-history'],function(){
    Auth::routes();
    Route::get('/home', 'HController@home')->name('homex');
    Route::get('homex', 'HController@connecter');
    Route::get('produitIndex', 'ArticleController@index');
    Route::get('statIndex', 'StatController@index');
    
        
  
  

Route::get('/supprimerCategorie', 'articleController@supprimer');
Route::get('/ajouterCategorie', 'articleController@ajouter');
Route::get('/modifierCategorie', 'articleController@modifier');



Route::get('/publicationIndex', 'publicationController@index' );
Route::get('/modifierPublicationForm', 'publicationController@modifierForm' );
Route::get('/afficherPublication', 'publicationController@afficher' );
Route::get('/supprimerPublication', 'publicationController@supprimer' );
Route::post('/modifierPublication', 'publicationController@modifier' );
Route::get('/ajouterPublicationForm', 'publicationController@ajouterForm' );
Route::post('/ajouterPublication', 'publicationController@ajouter' );

Route::get('/commandeIndex', 'commandeController@index' );
Route::get('/afficherCommande', 'commandeController@afficher' );
Route::get('/supprimerCommande', 'commandeController@supprimer' );
Route::get('/validerCommande', 'commandeController@valider' );
Route::get('/invaliderCommande', 'commandeController@invalider' );
Route::get('/commandesArchivees', 'commandeController@archives' );


Route::get('/parametreIndex', 'parametreController@index' );
Route::get('/modifierUserForm', 'parametreController@modifierForm' );
Route::get('/afficherUser', 'parametreController@afficher' );
Route::get('/supprimerUser', 'parametreController@supprimer' );
Route::get('/modifierUser', 'parametreController@modifier' );
Route::get('/ajouterUserForm', 'parametreController@ajouterForm' );
Route::get('/ajouterUser', 'parametreController@ajouter' );


Route::get('messages', 'messagesController@show');
Route::get('supprimerMessage', 'messagesController@supprimer');
Route::get('afficherMessage', 'messagesController@afficher');


Route::get('configurer', 'infoController@configurer');
Route::get('configurerForm', 'infoController@configurerForm');
Route::get('modifierForm', 'infoController@modifierForm');
Route::get('modifierInfo', 'infoController@modifier');
Route::get('informationIndex', 'infoController@index');

Route::get('/syracuse', 'syracuseController@calculer' );
Route::post('/syracuse', 'syracuseController@calculer' );

//Route::get('/home', 'HomeController@index')->name('home');

  });



