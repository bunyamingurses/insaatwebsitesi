<?php

namespace App\Http\Controllers\admin\carousel;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\carousel;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel = carousel::get();
        return View("admin.carousel.index", ["carousel" => $carousel]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("admin.carousel.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->foto) && isset($request->carouselTitle) && isset($request->carouselDescription) && isset($request->carouselTicket)) {
            if (functionController::resimTurKontrol($request->File("foto")->getClientOriginalExtension()) == 1) {
                $image = functionController::imageCreate($request, "carousel", "foto");
                $imageWebp = functionController::imageCreateWebp($request, "carousel", "foto");
                $title = functionController::security($request->carouselTitle);
                $description = functionController::security($request->carouselDescription);
                $ticket = functionController::security($request->carouselTicket);

                $all = [
                    "image" => $image,
                    "imageWebp" => $imageWebp,
                    "title" => $title,
                    "description" => $description,
                    "ticket" => $ticket
                ];

                $create = carousel::create($all);
                if ($create) {
                    return redirect()->back()->with("status", "カルーセルが正常に追加されました");
                } else {
                    return redirect()->back()->with("status", "カルーセルを追加できませんでした. もう一度試してください");
                }

            } else {
                return redirect()->back()->with("status", "サポートされている形式の写真を使用してください JPG,JPEG,PNG.");
            }
        } else {
            return redirect()->back()->with("status", "空きスペースを残さないでください");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (isset($id)) {
            $carousel = carousel::where("id", functionController::security($id))->get();
            if ($carousel[0]["title"]) {
                return View("admin.carousel.edit", ["carousel" => $carousel]);
            } else {
                return redirect()->back()->with("status", "そのようなカルーセルは存在しません。");
            }
        } else {
            return redirect(route("admin.index"));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $getCarousel = carousel::where("id", functionController::security($id))->get();
        if ($getCarousel[0]["title"]) {

            if (isset($request->foto)) {
                if (isset($request->carouselTitle) && isset($request->carouselDescription) && isset($request->carouselTicket)) {
                    if (functionController::resimTurKontrol($request->File("foto")->getClientOriginalExtension()) == 1) {
                        $image = functionController::imageCreate($request, "carousel", "foto");
                        $imageWebp = functionController::imageCreateWebp($request, "carousel", "foto");
                        $title = functionController::security($request->carouselTitle);
                        $description = functionController::security($request->carouselDescription);
                        $ticket = functionController::security($request->carouselTicket);

                        $all = [
                            "image" => $image,
                            "imageWebp" => $imageWebp,
                            "title" => $title,
                            "description" => $description,
                            "ticket" => $ticket
                        ];

                        $update = carousel::where("id",functionController::security($id))->update($all);
                        if ($update) {
                            return redirect()->back()->with("status", "カルーセルが正常に更新されました");
                        } else {
                            return redirect()->back()->with("status", "カルーセルの更新に失敗しました もう一度試してください");
                        }

                    } else {
                        return redirect()->back()->with("status", "サポートされている形式の写真を使用してください JPG,JPEG,PNG.");
                    }
                } else {
                    return redirect()->back()->with("status", "そのようなカルーセルは存在しません。");
                }
            } else {
                if (isset($request->carouselTitle) && isset($request->carouselDescription) && isset($request->carouselTicket)) {
                    $title = functionController::security($request->carouselTitle);
                    $description = functionController::security($request->carouselDescription);
                    $ticket = functionController::security($request->carouselTicket);

                    $all = [
                        "title" => $title,
                        "description" => $description,
                        "ticket" => $ticket
                    ];

                    $update = carousel::where("id",functionController::security($id))->update($all);
                    if ($update) {
                        return redirect()->back()->with("status", "カルーセルが正常に更新されました");
                    } else {
                        return redirect()->back()->with("status", "カルーセルの更新に失敗しました もう一度試してください");
                    }

                } else {
                    return redirect()->back()->with("status", "そのようなカルーセルは存在しません。");
                }

            }
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (isset($id)) {
            $carousel = carousel::where("id", functionController::security($id))->get();
            if ($carousel[0]["title"]) {
                $delete = carousel::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Carousel Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Carousel Silinemedi.");
                }
            }
        }
    }
}
