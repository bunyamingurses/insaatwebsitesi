<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\career;
use App\Models\contact;
use App\Models\careerps;
use Illuminate\Http\Request;


class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $careers=career::orderBy("id","desc")->get();
        $careerps=careerps::orderBy("id","desc")->get();
        return View("admin.index",["career"=>$careers,"careerps"=>$careerps]);
    }
    
    
    public function careerDestroy($id){
                if (isset($id)) {
            $career = career::where("id", functionController::security($id))->get();
            if ($career[0]["name"]) {
                $delete = career::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "CV Dosyası Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "CV Dosyası Silinemedi.");
                }
            }
        }
    }
    
    
    
    public function partnerShipDestroy($id){
                if (isset($id)) {
            $careerps = careerps::where("id", functionController::security($id))->get();
            if ($careerps[0]["name"]) {
                $delete = careerps::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "Partner Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "Partner Silinemedi.");
                }
            }
        }
    }
    
    
    public function contactDestroy($id){
                if (isset($id)) {
            $contact = contact::where("id", functionController::security($id))->get();
            if ($contact[0]["name"]) {
                $delete = contact::where("id", functionController::security($id))->delete();
                if ($delete) {
                    return redirect()->back()->with("status", "İletişim Bilgisi Başarı ile Silindi.");
                } else {
                    return redirect()->back()->with("status", "İletişim Bilgisi Silinemedi.");
                }
            }
        }
    }

}
