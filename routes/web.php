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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\manager\CapitalsController;
use App\Http\Controllers\manager\AlbumsController;
use App\Http\Controllers\manager\UsersController;
use App\Http\Controllers\manager\ComisionsController;
use App\Http\Controllers\manager\MessagesController;
use App\Http\Controllers\manager\CommentsController;
use App\Http\Controllers\manager\ArticlesController;
use App\Http\Controllers\manager\NotesController;
use App\Http\Controllers\manager\MycommentsController;
use App\Http\Controllers\manager\InvitesController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','can:manage'])->prefix('managerpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('manager.profile');
    Route::prefix('capitals')->group(function(){
        Route::get('',[CapitalsController::class,'all'])->name('manager.capitals');
        Route::get('create',[CapitalsController::class,'create'])->name('manager.capitals.create');
        Route::post('',[CapitalsController::class,'store'])->name('manager.capitals.store');
        Route::delete('{capital_id}/delete',[CapitalsController::class,'delete'])->name('manager.capitals.delete');
        Route::get('{capital_id}/edit',[CapitalsController::class,'edit'])->name('manager.capitals.edit');
        Route::put('{capital_id}/update',[CapitalsController::class,'update'])->name('manager.capitals.update');
    });
    Route::prefix('albums')->group(function(){
        Route::get('',[AlbumsController::class,'all'])->name('manager.albums');
        Route::get('create',[AlbumsController::class,'create'])->name('manager.albums.create');
        Route::post('',[AlbumsController::class,'store'])->name('manager.albums.store');
        Route::delete('{album_id}/delete',[AlbumsController::class,'delete'])->name('manager.albums.delete');
        Route::get('{album_id}/edit',[AlbumsController::class,'edit'])->name('manager.albums.edit');
        Route::get('{album_id}/upload',[AlbumsController::class,'upload'])->name('manager.albums.upload');
        Route::put('{album_id}/update',[AlbumsController::class,'update'])->name('manager.albums.update');
    });
    Route::prefix('users')->group(function(){
        Route::get('',[UsersController::class,'all'])->name('manager.users');
        Route::get('create',[UsersController::class,'create'])->name('manager.users.create');
        Route::get('{user_id}/capitals',[UsersController::class,'capitals'])->name('manager.users.capitals');
        Route::get('{user_id}/addcapital',[UsersController::class,'addcapital'])->name('manager.users.addcapital');
        Route::put('{user_id}/addcapital',[UsersController::class,'addcapitaluser'])->name('manager.users.addcapitaluser');
        Route::post('',[UsersController::class,'store'])->name('manager.users.store');
        Route::delete('{user_id}/delete',[UsersController::class,'delete'])->name('manager.users.delete');
        Route::get('{user_id}/edit',[UsersController::class,'edit'])->name('manager.users.edit');
        Route::put('{user_id}/update',[UsersController::class,'update'])->name('manager.users.update');
    });
    Route::prefix('comments')->group(function(){
        Route::get('confirmed',[CommentsController::class,'confirmed'])->name('manager.comments.confirmed');
        Route::get('unconfirmed',[CommentsController::class,'unconfirmed'])->name('manager.comments.unconfirmed');
        Route::put('{comment_id}/confirm',[CommentsController::class,'confirm'])->name('manager.comments.confirm');
        Route::put('{comment_id}/unconfirm',[CommentsController::class,'unconfirm'])->name('manager.comments.unconfirm');
        Route::delete('{comment_id}/delete',[CommentsController::class,'delete'])->name('manager.comments.delete');
        
    });
    Route::prefix('articles')->group(function(){
        Route::get('',[ArticlesController::class,'all'])->name('manager.articles');
        Route::get('create',[ArticlesController::class,'create'])->name('manager.articles.create');
        Route::get('{article_id}/showarticle',[ArticlesController::class,'showarticle'])->name('manager.articles.showarticle');
        Route::post('',[ArticlesController::class,'store'])->name('manager.articles.store');
        Route::delete('{article_id}/delete',[ArticlesController::class,'delete'])->name('manager.articles.delete');
        Route::get('{article_id}/edit',[ArticlesController::class,'edit'])->name('manager.articles.edit');
        Route::put('{article_id}/confirm',[ArticlesController::class,'confirm'])->name('manager.articles.confirm');
        Route::put('{article_id}/publish',[ArticlesController::class,'publish'])->name('manager.articles.publish');
        Route::put('{article_id}/unconfirm',[ArticlesController::class,'unconfirm'])->name('manager.articles.unconfirm');
        Route::put('{article_id}/unpublish',[ArticlesController::class,'unpublish'])->name('manager.articles.unpublish');
        Route::put('{article_id}/updatecontent',[ArticlesController::class,'updatecontent'])->name('manager.articles.updatecontent');
        Route::post('/uploads',[ArticlesController::class,'uploadimage'])->name('articles.ckeditor.upload');

    });
    Route::middleware('can:note')->prefix('notes')->group(function(){
        Route::get('',[NotesController::class,'all'])->name('manager.notes');
        Route::get('create',[NotesController::class,'create'])->name('manager.notes.create');
        Route::get('{note_id}/shownote',[NotesController::class,'shownote'])->name('manager.notes.shownote');
        Route::post('',[NotesController::class,'store'])->name('manager.notes.store');
        Route::delete('{note_id}/delete',[NotesController::class,'delete'])->name('manager.notes.delete');
        Route::get('{note_id}/edit',[NotesController::class,'edit'])->name('manager.notes.edit');
        Route::put('{note_id}/confirm',[NotesController::class,'confirm'])->name('manager.notes.confirm');
        Route::put('{note_id}/publish',[NotesController::class,'publish'])->name('manager.notes.publish');
        Route::put('{note_id}/unconfirm',[NotesController::class,'unconfirm'])->name('manager.notes.unconfirm');
        Route::put('{note_id}/unpublish',[NotesController::class,'unpublish'])->name('manager.notes.unpublish');
        Route::put('{note_id}/updatecontent',[NotesController::class,'updatecontent'])->name('manager.notes.updatecontent');
        Route::post('/uploads',[NotesController::class,'uploadimage'])->name('notes.ckeditor.upload');

    });
    Route::prefix('comisions')->group(function(){
        Route::get('',[ComisionsController::class,'all'])->name('manager.comisions');
        Route::get('create',[ComisionsController::class,'create'])->name('manager.comisions.create');
        Route::post('',[ComisionsController::class,'store'])->name('manager.comisions.store');
        Route::delete('{comision_id}/delete',[ComisionsController::class,'delete'])->name('manager.comisions.delete');
        Route::get('{comision_id}/edit',[ComisionsController::class,'edit'])->name('manager.comisions.edit');
        Route::get('{comision_id}/introduce',[ComisionsController::class,'introduce'])->name('manager.comisions.introduce');
        Route::put('{comision_id}/update',[ComisionsController::class,'update'])->name('manager.comisions.update');
    });
    Route::prefix('messages')->group(function(){
        Route::get('',[MessagesController::class,'all'])->name('manager.messages');
        Route::get('received',[MessagesController::class,'received'])->name('manager.messages.received');
        Route::get('sent',[MessagesController::class,'sent'])->name('manager.messages.sent');
        Route::get('{message_id}/showmessage',[MessagesController::class,'showmessage'])->name('manager.messages.show');
        Route::get('create',[MessagesController::class,'create'])->name('manager.messages.create');
        Route::post('',[MessagesController::class,'store'])->name('manager.messages.store');
        Route::delete('{message_id}/delete',[MessagesController::class,'delete'])->name('manager.messages.delete');
        Route::get('{message_id}/edit',[MessagesController::class,'edit'])->name('manager.messages.edit');
        Route::put('{message_id}/update',[MessagesController::class,'update'])->name('manager.messages.update');
        Route::get('{message_id}/download',[MessagesController::class,'downloadattach'])->name('manager.messages.downloadattach');
    });
    Route::prefix('invites')->group(function(){
        Route::get('',[InvitesController::class,'all'])->name('manager.invites');
        Route::get('create',[InvitesController::class,'create'])->name('manager.invites.create');
        Route::post('create',[InvitesController::class,'store'])->name('manager.invites.store');
        Route::delete('{code_id}/delete',[InvitesController::class,'delete'])->name('manager.invites.delete');
    });
    Route::get('mycomments',[MycommentsController::class,'all'])->name('manager.mycomments');
    Route::get('videos',[MycommentsController::class,'videos'])->name('manager.videos');
    Route::put('videos',[MycommentsController::class,'updatevideos'])->name('manager.videos.update');
    Route::get('heading',[MycommentsController::class,'heading'])->name('manager.heading');
    Route::put('updateheading',[MycommentsController::class,'updateheading'])->name('manager.heading.update');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('manager.logout');
    Route::resource('gallery', 'GalleryController');
});
Route::middleware(['auth','can:chief'])->prefix('chiefpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('chief.profile');

    Route::prefix('albums')->group(function(){
        Route::get('',[AlbumsController::class,'all'])->name('chief.albums');
        Route::get('create',[AlbumsController::class,'create'])->name('chief.albums.create');
        Route::post('',[AlbumsController::class,'store'])->name('chief.albums.store');
        Route::delete('{album_id}/delete',[AlbumsController::class,'delete'])->name('chief.albums.delete');
        Route::get('{album_id}/edit',[AlbumsController::class,'edit'])->name('chief.albums.edit');
        Route::get('{album_id}/upload',[AlbumsController::class,'upload'])->name('chief.albums.upload');
        Route::put('{album_id}/update',[AlbumsController::class,'update'])->name('chief.albums.update');
    });

    Route::prefix('comments')->group(function(){
        Route::get('confirmed',[CommentsController::class,'confirmed'])->name('chief.comments.confirmed');
        Route::get('unconfirmed',[CommentsController::class,'unconfirmed'])->name('chief.comments.unconfirmed');
        Route::put('{comment_id}/confirm',[CommentsController::class,'confirm'])->name('chief.comments.confirm');
        Route::put('{comment_id}/unconfirm',[CommentsController::class,'unconfirm'])->name('chief.comments.unconfirm');
        Route::delete('{comment_id}/delete',[CommentsController::class,'delete'])->name('chief.comments.delete');
        
    });
    Route::prefix('articles')->group(function(){
        Route::get('',[ArticlesController::class,'all'])->name('chief.articles');
        Route::get('create',[ArticlesController::class,'create'])->name('chief.articles.create');
        Route::get('{article_id}/showarticle',[ArticlesController::class,'showarticle'])->name('chief.articles.showarticle');
        Route::post('',[ArticlesController::class,'store'])->name('chief.articles.store');
        Route::get('{article_id}/edit',[ArticlesController::class,'edit'])->name('chief.articles.edit');
        Route::put('{article_id}/confirm',[ArticlesController::class,'confirm'])->name('chief.articles.confirm');
        Route::put('{article_id}/publish',[ArticlesController::class,'publish'])->name('chief.articles.publish');
        Route::put('{article_id}/unconfirm',[ArticlesController::class,'unconfirm'])->name('chief.articles.unconfirm');
        Route::put('{article_id}/unpublish',[ArticlesController::class,'unpublish'])->name('chief.articles.unpublish');
        Route::put('{article_id}/updatecontent',[ArticlesController::class,'updatecontent'])->name('chief.articles.updatecontent');
        Route::post('/uploads',[ArticlesController::class,'uploadimage'])->name('articles.ckeditor.upload');

    });
    Route::middleware('can:note')->prefix('notes')->group(function(){
        Route::get('',[NotesController::class,'all'])->name('chief.notes');
        Route::get('create',[NotesController::class,'create'])->name('chief.notes.create');
        Route::get('{note_id}/shownote',[NotesController::class,'shownote'])->name('chief.notes.shownote');
        Route::post('',[NotesController::class,'store'])->name('chief.notes.store');
        Route::get('{note_id}/edit',[NotesController::class,'edit'])->name('chief.notes.edit');
        Route::put('{note_id}/confirm',[NotesController::class,'confirm'])->name('chief.notes.confirm');
        Route::put('{note_id}/publish',[NotesController::class,'publish'])->name('chief.notes.publish');
        Route::put('{note_id}/unconfirm',[NotesController::class,'unconfirm'])->name('chief.notes.unconfirm');
        Route::put('{note_id}/unpublish',[NotesController::class,'unpublish'])->name('chief.notes.unpublish');
        Route::put('{note_id}/updatecontent',[NotesController::class,'updatecontent'])->name('chief.notes.updatecontent');
        Route::post('/uploads',[NotesController::class,'uploadimage'])->name('notes.ckeditor.upload');

    });
    Route::get('mycomments',[MycommentsController::class,'all'])->name('chief.mycomments');
    Route::get('videos',[MycommentsController::class,'videos'])->name('chief.videos');
    Route::put('videos',[MycommentsController::class,'updatevideos'])->name('chief.videos.update');
    Route::get('heading',[MycommentsController::class,'heading'])->name('chief.heading');
    Route::put('updateheading',[MycommentsController::class,'updateheading'])->name('chief.heading.update');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('chief.logout');
    Route::resource('gallery', 'GalleryController');
});
Route::middleware(['auth','can:confirm'])->prefix('confirmerpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('confirmer.profile');




    Route::prefix('articles')->group(function(){
        Route::get('',[ArticlesController::class,'all'])->name('confirmer.articles');
        Route::get('create',[ArticlesController::class,'create'])->name('confirmer.articles.create');
        Route::get('{article_id}/showarticle',[ArticlesController::class,'showarticle'])->name('confirmer.articles.showarticle');
        Route::post('',[ArticlesController::class,'store'])->name('confirmer.articles.store');
        Route::get('{article_id}/edit',[ArticlesController::class,'edit'])->name('confirmer.articles.edit');
        Route::put('{article_id}/confirm',[ArticlesController::class,'confirm'])->name('confirmer.articles.confirm');
        Route::put('{article_id}/unconfirm',[ArticlesController::class,'unconfirm'])->name('confirmer.articles.unconfirm');
        Route::put('{article_id}/updatecontent',[ArticlesController::class,'updatecontent'])->name('confirmer.articles.updatecontent');
        Route::post('/uploads',[ArticlesController::class,'uploadimage'])->name('articles.ckeditor.upload');

    });
    Route::middleware('can:note')->prefix('notes')->group(function(){
        Route::get('',[NotesController::class,'all'])->name('confirmer.notes');
        Route::get('create',[NotesController::class,'create'])->name('confirmer.notes.create');
        Route::get('{note_id}/shownote',[NotesController::class,'shownote'])->name('confirmer.notes.shownote');
        Route::post('',[NotesController::class,'store'])->name('confirmer.notes.store');
        Route::get('{note_id}/edit',[NotesController::class,'edit'])->name('confirmer.notes.edit');
        Route::put('{note_id}/confirm',[NotesController::class,'confirm'])->name('confirmer.notes.confirm');
        Route::put('{note_id}/unconfirm',[NotesController::class,'unconfirm'])->name('confirmer.notes.unconfirm');
        Route::put('{note_id}/updatecontent',[NotesController::class,'updatecontent'])->name('confirmer.notes.updatecontent');
        Route::post('/uploads',[NotesController::class,'uploadimage'])->name('notes.ckeditor.upload');

    });

    Route::get('mycomments',[MycommentsController::class,'all'])->name('confirmer.mycomments');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('confirmer.logout');
});
Route::middleware(['auth','can:report'])->prefix('reporterpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('reporter.profile');


    Route::prefix('articles')->group(function(){
        Route::get('',[ArticlesController::class,'all'])->name('reporter.articles');
        Route::get('create',[ArticlesController::class,'create'])->name('reporter.articles.create');
        Route::get('{article_id}/showarticle',[ArticlesController::class,'showarticle'])->name('reporter.articles.showarticle');
        Route::post('',[ArticlesController::class,'store'])->name('reporter.articles.store');
        Route::get('{article_id}/edit',[ArticlesController::class,'edit'])->name('reporter.articles.edit');
        Route::put('{article_id}/updatecontent',[ArticlesController::class,'updatecontent'])->name('reporter.articles.updatecontent');
        Route::post('/uploads',[ArticlesController::class,'uploadimage'])->name('articles.ckeditor.upload');

    });
    Route::middleware('can:note')->prefix('notes')->group(function(){
        Route::get('',[NotesController::class,'all'])->name('reporter.notes');
        Route::get('create',[NotesController::class,'create'])->name('reporter.notes.create');
        Route::get('{note_id}/shownote',[NotesController::class,'shownote'])->name('reporter.notes.shownote');
        Route::post('',[NotesController::class,'store'])->name('reporter.notes.store');
        Route::get('{note_id}/edit',[NotesController::class,'edit'])->name('reporter.notes.edit');
        Route::put('{note_id}/updatecontent',[NotesController::class,'updatecontent'])->name('reporter.notes.updatecontent');
        Route::post('/uploads',[NotesController::class,'uploadimage'])->name('notes.ckeditor.upload');

    });

    Route::get('mycomments',[MycommentsController::class,'all'])->name('reporter.mycomments');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('reporter.logout');
});
Route::middleware(['auth','can:member'])->prefix('memberpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('member.profile');






    Route::prefix('messages')->group(function(){
        Route::get('',[MessagesController::class,'all'])->name('member.messages');
        Route::get('received',[MessagesController::class,'received'])->name('member.messages.received');
        Route::get('sent',[MessagesController::class,'sent'])->name('member.messages.sent');
        Route::get('{message_id}/showmessage',[MessagesController::class,'showmessage'])->name('member.messages.show');
        Route::get('create',[MessagesController::class,'create'])->name('member.messages.create');
        Route::post('',[MessagesController::class,'store'])->name('member.messages.store');
        Route::delete('{message_id}/delete',[MessagesController::class,'delete'])->name('member.messages.delete');
        Route::get('{message_id}/edit',[MessagesController::class,'edit'])->name('member.messages.edit');
        Route::put('{message_id}/update',[MessagesController::class,'update'])->name('member.messages.update');
        Route::get('{message_id}/download',[MessagesController::class,'downloadattach'])->name('member.messages.downloadattach');
    });

    Route::get('mycomments',[MycommentsController::class,'all'])->name('member.mycomments');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('member.logout');
});
Route::middleware(['auth','can:normal'])->prefix('userpanel')->group(function(){
    Route::get('',[CapitalsController::class,'profile'])->name('user.profile');
    Route::get('mycomments',[MycommentsController::class,'all'])->name('user.mycomments');
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('user.logout');
});





Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('{id}/cities/',[HomeController::class,'cities'])->name('cities');
Route::get('/search/{keyword?}',[HomeController::class,'search'])->name('search');
Route::post('/comment',[HomeController::class,'comment'])->name('comment');
Route::get('/image',[HomeController::class,'images'])->name('images');
Route::get('/newsarchive',[HomeController::class,'search'])->name('newsarchive');
Route::get('/notesarchive',[HomeController::class,'searchnotes'])->name('notesarchive');
Route::get('{article_id}/newsdetails', [HomeController::class,'newsdetails'])->name('newsdetails');
Route::get('{note_id}/notedetails', [HomeController::class,'notedetails'])->name('notedetails');


Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showlogin'])->name('showlogin');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showregister'])->name('showregister');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::get('/verify', [\App\Http\Controllers\Auth\AuthController::class, 'showverify'])->name('showverify');
Route::post('/verify', [\App\Http\Controllers\Auth\AuthController::class, 'verify'])->name('verify');






Route::view('/comisions', 'front.comisions')->name('comisions');
Route::view('/imagescollection', 'front.imagescollection')->name('imagescollection');
// Route::view('/gallery', 'front.gallery')->name('gallery');
Route::view('/Committee', 'front.Committee')->name('Committee');
Route::view('/comision', 'front.comision')->name('comision');
Route::view('/contactus', 'front.contactus')->name('contactus');
Route::view('/aboutcouncil', 'front.aboutcouncil')->name('aboutcouncil');