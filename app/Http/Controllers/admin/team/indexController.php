<?php

namespace App\Http\Controllers\admin\team;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\team;
use Illuminate\Http\Request;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team=team::get();
        return View("admin.team.index",["team"=>$team]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View("admin.team.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (isset($request->name) && isset($request->job) && isset($request->foto)) {
            if (functionController::resimTurKontrol($request->File("foto")->getClientOriginalExtension())) {
                $image = functionController::imageCreate($request, "team", "foto");
                $imageWebp = functionController::imageCreateWebp($request, "team", "foto");
                $name = functionController::security($request->name);
                $job = functionController::security($request->job);

                $all = [
                    "image" => $image,
                    "imageWebp" => $imageWebp,
                    "name" => $name,
                    "job" => $job
                ];

                $create = team::create($all);
                if ($create) {
                    return redirect()->back()->with("status", "Personel ile Eklendi.");
                } else {
                    return redirect()->back()->with("status", "Personel Eklenemedi. Lütfen Tekrar Deneyin.");
                }
            } else {
                return redirect()->back()->with("status", "Lütfen desteklenen biçimlerdeki fotoğrafları kullanın.");
            }
        } else {
            return redirect()->back()->with("status", "Lütfen Boş ALan Bırakmayın.");
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
            $team = team::where("id", functionController::security($id))->get();
            if ($team[0]["name"]) {
                return View("admin.team.edit", ["team" => $team]);
            } else {
                return redirect(route("admin.index"));
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
        if (isset($id)) {
            $team = team::where("id", functionController::security($id))->get();
            if ($team[0]["name"]) {

                if (isset($request->foto)) {
                    if (isset($request->name) && isset($request->job) && isset($request->foto)) {
                        if (functionController::resimTurKontrol($request->File("foto")->getClientOriginalExtension())) {
                            $image = functionController::imageCreate($request, "team", "foto");
                            $imageWebp = functionController::imageCreateWebp($request, "team", "foto");
                            $name = functionController::security($request->name);
                            $job = functionController::security($request->job);

                            $all = [
                                "image" => $image,
                                "imageWebp" => $imageWebp,
                                "name" => $name,
                                "job" => $job
                            ];

                            $update = team::where("id", functionController::security($id))->update($all);
                            if ($update) {
                                return redirect()->back()->with("status", "Hizmet Başarı ile Güncellendi.");
                            } else {
                                return redirect()->back()->with("status", "Hizmet Güncellenemedi. Lütfen Tekrar Deneyin.");
                            }
                        } else {
                            return redirect()->back()->with("status", "Lütfen desteklenen biçimlerdeki fotoğrafları kullanın.");
                        }
                    } else {
                        return redirect()->back()->with("status", "Lütfen Boş ALan Bırakmayın.");
                    }
                } else {
                    if (isset($request->name) && isset($request->job)) {
                        $name = functionController::security($request->name);
                        $job = functionController::security($request->job);
                        $all = [
                            "name" => $name,
                            "job" => $job
                        ];

                        $update = team::where("id", functionController::security($id))->update($all);
                        if ($update) {
                            return redirect()->back()->with("status", "Hizmet Başarı ile Güncellendi.");
                        } else {
                            return redirect()->back()->with("status", "Hizmet Güncellenemedi. Lütfen Tekrar Deneyin.");
                        }

                    } else {
                        return redirect()->back()->with("status", "Lütfen Boş ALan Bırakmayın.");
                    }
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
            $team = team::where("id", functionController::security($id))->get();
            if ($team[0]["name"]) {
                $delete = team::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Personel Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Personel ile Silinemedi.");
                }
            }
        }
    }

    public function popular($id)
    {
        if (isset($id)) {
            $team = team::where("id", functionController::security($id))->get();
            if ($team[0]["name"]) {
                if ($team[0]["isPopular"] == 1) {
                    $all=["isPopular"=>0];
                    $update = team::where("id", functionController::security($id))->update($all);
                    if ($update) {
                        return redirect()->back()->with("status", "Personel Başarı ile Güncellendi.");
                    } else {
                        return redirect()->back()->with("status", "Personel ile Güncellenemedi.");
                    }
                }else{
                    $all=["isPopular"=>1];
                    $update = team::where("id", functionController::security($id))->update($all);
                    if ($update) {
                        return redirect()->back()->with("status", "Personel Başarı ile Güncellendi.");
                    } else {
                        return redirect()->back()->with("status", "Personel Güncellenemedi.");
                    }
                }


            }
        }
    }
}
