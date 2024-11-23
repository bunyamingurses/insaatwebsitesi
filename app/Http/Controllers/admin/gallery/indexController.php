<?php

namespace App\Http\Controllers\admin\gallery;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\gallery;
use App\Models\galleryba;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = gallery::get();
        return View("admin.gallery.index", ["gallery" => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->File("foto") != null) {
            $images = $request->file("foto");
            foreach ($images as $imageWrite) {
                if (functionController::resimTurKontrol($imageWrite->getClientOriginalExtension())) {
                    $image = functionController::imageCreateGallery("gallery", $imageWrite->getRealPath(), $imageWrite->getClientOriginalExtension());
                    $imageWebp = functionController::imageCreateWebpGallery("gallery", $imageWrite->getRealPath());
                    $all=[
                        "image"=>$image,
                        "imageWebp"=>$imageWebp
                    ];
                    gallery::create($all);
                }
            }
            return redirect()->back()->with("status","Yüklenembilecek Tüm Fotoğralar Yüklendi.");

        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (isset($id)) {
            $gallery = gallery::where("id", functionController::security($id))->get();
            if ($gallery[0]["imageWebp"]) {
                $delete = gallery::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Fotoğraf Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Fotoğraf ile Silinemedi.");
                }
            }
        }
    }


    /**
     * Display a listing of the resource.
     */
    public function beforeAfter()
    {
        $gallery=galleryba::get();
        return View("admin.gallery.beforeAfter",["gallery"=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function beforeAfterCreate(Request $request)
    {
        if($request->File("before")!=null && $request->File("after")!=null){
            if (functionController::resimTurKontrol($request->File("before")->getClientOriginalExtension())!=0 && $request->File("after")->getClientOriginalExtension()!=0){
                $imageBefore=functionController::imageCreateGallery("galleryba",$request->File("before")->getRealPath(),$request->File("before")->getClientOriginalExtension());
                $imageBeforeWebp=functionController::imageCreateWebpGallery("galleryba",$request->File("before")->getRealPath());
                $imageAfter=functionController::imageCreateGallery("galleryba",$request->File("after")->getRealPath(),$request->File("after")->getClientOriginalExtension());
                $imageAfterWebp=functionController::imageCreateWebpGallery("galleryba",$request->File("after")->getRealPath());

                $all=[
                    "imageBefore"=>$imageBefore,
                    "imageBeforeWebp"=>$imageBeforeWebp,
                    "imageAfter"=>$imageAfter,
                    "imageAfterWebp"=>$imageAfterWebp
                ];

                $create=galleryba::create($all);
                if ($create){
                    return redirect()->back()->with("status","Fotoğraf Eklendi.");
                }else{
                    return redirect()->back()->with("status","Fotoğraf Eklenemedi.");
                }
            }else{
                return redirect()->back()->with("status","Fotoğraflar uygun formatlarda değiller.");
            }
        }else{
            return redirect(route("admin.index"));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function beforeAfterDestroy(string $id)
    {
        if (isset($id)) {
            $gallery = galleryba::where("id", functionController::security($id))->get();
            if ($gallery[0]["imageBeforeWebp"]) {
                $delete = galleryba::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Fotoğraf Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Fotoğraf ile Silinemedi.");
                }
            }
        }
    }
}
