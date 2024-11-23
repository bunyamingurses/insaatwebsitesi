<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use Illuminate\Support\Facades\URL;

//URL::forceScheme('https');



Route::get('/',[Controllers\front\indexController::class,"index"])->name("homepage");

Route::get("/about",[Controllers\front\indexController::class,"about"])->name("about");
Route::get("/mission",[Controllers\front\indexController::class,"mission"])->name("mission");
Route::get("/vision",[Controllers\front\indexController::class,"vision"])->name("vision");
Route::get("/team",[Controllers\front\indexController::class,"team"])->name("team");

Route::get("/services",[Controllers\front\indexController::class,"services"])->name("services");

Route::get("/gallery",[Controllers\front\indexController::class,"gallery"])->name("gallery");
Route::get("/galleryba",[Controllers\front\indexController::class,"galleryBeforeAfter"])->name("galleryBA");

Route::get("/career",[Controllers\front\indexController::class,"career"])->name("career");
Route::post("/careercreate",[Controllers\front\indexController::class,"careerCreate"])->name("careerPost");
Route::get("/careerps",[Controllers\front\indexController::class,"careerPartnerShip"])->name("careerPartnerShip");
Route::post("/careerps",[Controllers\front\indexController::class,"careerPartnerShipCreate"])->name("careerPartnerShipCreate");

Route::get("/contact",[Controllers\front\indexController::class,"contact"])->name("contact");
Route::post("/contactcreate",[Controllers\front\indexController::class,"contactCreate"])->name("contactCreate");



// Login Route Start
Route::prefix("login")->as("login.")->group(function (){
    Route::get("/",[Controllers\login\indexController::class,"index"])->name("index");
    Route::get("/index",[Controllers\login\indexController::class,"index"])->name("index");
    Route::post("/create",[Controllers\login\indexController::class,"login"])->name("loginPost");
    Route::get("/logout",[Controllers\login\indexController::class,"logOut"])->name("logOut");

});
// Login Route Finish






Route::prefix("admin")->as("admin.")->middleware(["loginControl"])->group(function (){
    Route::get("/",[Controllers\admin\indexController::class,"index"])->name("index");
    Route::get("/index.html",[Controllers\admin\indexController::class,"index"])->name("index2");
    
    Route::get("/careerdestroy/{id}",[Controllers\admin\indexController::class,"careerDestroy"])->name("careerDestroy");
    Route::get("/partnershipdestroy/{id}",[Controllers\admin\indexController::class,"partnerShipDestroy"])->name("partnershipDestroy");
    Route::get("/contactdestroy/{id}",[Controllers\admin\indexController::class,"contactDestroy"])->name("contactDestroy");

    Route::prefix("contact")->as("contact.")->group(function (){
        Route::get("/",[Controllers\admin\contact\indexController::class,"index"])->name("index");
    });

    Route::prefix("profile")->as("profile.")->group(function (){
        Route::get("/",[Controllers\admin\profile\indexController::class,"index"])->name("index");
        Route::post("/update",[Controllers\admin\profile\indexController::class,"save"])->name("update");
    });


    Route::prefix("setting")->as("setting.")->group(function (){
        Route::get("/",[Controllers\admin\setting\indexController::class,"index"])->name("index");
        Route::get("/create",[Controllers\admin\setting\indexController::class,"create"])->name("create");
        Route::post("/create",[Controllers\admin\setting\indexController::class,"store"])->name("store");
        Route::get("/edit/{id}",[Controllers\admin\setting\indexController::class,"edit"])->name("edit");
        Route::post("/update/{id}",[Controllers\admin\setting\indexController::class,"update"])->name("update");
        Route::get("/destroy/{id}",[Controllers\admin\setting\indexController::class,"destroy"])->name("destroy");

        Route::get("/about",[Controllers\admin\setting\indexController::class,"about"])->name("about");
        Route::post("/aboutpost",[Controllers\admin\setting\indexController::class,"aboutPost"])->name("aboutPost");
    });

    Route::prefix("service")->as("service.")->group(function (){
        Route::get("/",[Controllers\admin\services\indexController::class,"index"])->name("index");
        Route::get("/create",[Controllers\admin\services\indexController::class,"create"])->name("create");
        Route::post("/create",[Controllers\admin\services\indexController::class,"store"])->name("store");
        Route::get("/edit/{id}",[Controllers\admin\services\indexController::class,"edit"])->name("edit");
        Route::post("/update/{id}",[Controllers\admin\services\indexController::class,"update"])->name("update");
        Route::get("/destroy/{id}",[Controllers\admin\services\indexController::class,"destroy"])->name("destroy");
        Route::get("/popular/{id}",[Controllers\admin\services\indexController::class,"popular"])->name("popular");
    });

    Route::prefix("carousel")->as("carousel.")->group(function (){
        Route::get("/",[Controllers\admin\carousel\indexController::class,"index"])->name("index");
        Route::get("/create",[Controllers\admin\carousel\indexController::class,"create"])->name("create");
        Route::post("/create",[Controllers\admin\carousel\indexController::class,"store"])->name("store");
        Route::get("/edit/{id}",[Controllers\admin\carousel\indexController::class,"edit"])->name("edit");
        Route::post("/update/{id}",[Controllers\admin\carousel\indexController::class,"update"])->name("update");
        Route::get("/destroy/{id}",[Controllers\admin\carousel\indexController::class,"destroy"])->name("destroy");
    });


    // Route::prefix("team")->as("team.")->group(function (){
    //     Route::get("/",[Controllers\admin\team\indexController::class,"index"])->name("index");
    //     Route::get("/create",[Controllers\admin\team\indexController::class,"create"])->name("create");
    //     Route::post("/create",[Controllers\admin\team\indexController::class,"store"])->name("store");
    //     Route::get("/edit/{id}",[Controllers\admin\team\indexController::class,"edit"])->name("edit");
    //     Route::post("/update/{id}",[Controllers\admin\team\indexController::class,"update"])->name("update");
    //     Route::get("/destroy/{id}",[Controllers\admin\team\indexController::class,"destroy"])->name("destroy");
    //     Route::get("/popular/{id}",[Controllers\admin\team\indexController::class,"popular"])->name("popular");

    // });

    Route::prefix("gallery")->as("gallery.")->group(function (){
        Route::get("/",[Controllers\admin\gallery\indexController::class,"index"])->name("index");
        Route::post("/create",[Controllers\admin\gallery\indexController::class,"create"])->name("create");
        Route::get("/destroy/{id}",[Controllers\admin\gallery\indexController::class,"destroy"])->name("destroy");

        Route::get("/beforeafter",[Controllers\admin\gallery\indexController::class,"beforeAfter"])->name("beforeAfter");
        Route::post("/beforeaftercreate",[Controllers\admin\gallery\indexController::class,"beforeAfterCreate"])->name("beforeAfterCreate");
        Route::get("/beforeafterdestroy/{id}",[Controllers\admin\gallery\indexController::class,"beforeAfterDestroy"])->name("beforeAfterDestroy");





    });


});
