<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\support\functionController;
use App\Models\career;
use App\Models\careerps;
use App\Models\contact;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        return View("front.index");
    }

    public function about()
    {
        return View("front.about");
    }

    public function mission()
    {
        return View("front.ourMission");
    }

    public function vision()
    {
        return View("front.ourVision");
    }

    public function team()
    {
        return View("front.ourTeam");
    }

    public function services()
    {
        return View("front.ourServices");
    }

    public function gallery()
    {
        return View("front.gallery");
    }

    public function galleryBeforeAfter()
    {
        return View("front.galleryBeforeAfter");
    }

    public function career()
    {
        return View("front.career");
    }

    public function careerCreate(Request $request)
    {
        if (isset($request->name) && isset($request->email) && isset($request->phone) && $request->File("file") != null) {
            $name = functionController::security($request->name);
            $email = functionController::security($request->email);
            $number = functionController::security($request->phone);


            $file = $request->File("file");
            if ($file->getClientOriginalExtension() == "pdf") {
                $fileName = rand(1,999999999) . "-" . date("Y-m-d") . "." . $file->getClientOriginalExtension();
                $file->move(public_path("cvFiles/"),$fileName);

                $all=[
                    "name"=>$fileName,
                    "email"=>$email,
                    "number"=>$number,
                    "fileName"=>$fileName
                ];

                $create=career::create($all);
                if ($create){
                    return redirect()->back()->with("status","履歴書の提出手続きが完了しました。該当する方には改めてご連絡させていただきます。");
                }else{
                    return redirect()->back()->with("status","履歴書を受け取っていません。もう一度試してください");
                }

            } else {
                return redirect()->back()->with("status", "アップロードできるファイルは .pdf 形式のみです。");
            }
        } else {
            return redirect()->back()->with("status", "空きスペースを残さないでください。");
        }

    }

    public function careerPartnerShip()
    {
        return View("front.careerPartnerShip");
    }

    public function careerPartnerShipCreate(Request $request)
    {
        if (isset($request->companyName) && isset($request->name) && isset($request->email) && isset($request->number) && isset($request->sector) && isset($request->message)){
            $company=functionController::security($request->companyName);
            $name=functionController::security($request->name);
            $email=functionController::security($request->email);
            $number=functionController::security($request->number);
            $sector=functionController::security($request->sector);
            $message=functionController::security($request->message);


            $all=[
                "company"=>$company,
                "name"=>$name,
                "email"=>$email,
                "number"=>$number,
                "sector"=>$sector,
                "message"=>$message
            ];

            $create=careerps::create($all);
            if ($create){
                return redirect()->back()->with("status","あなたのメッセージは配信されました。できるだけ早くご連絡させていただきます");
            }else{
                return redirect()->back()->with("status","メッセージを配信できませんでした。もう一度試してください。");
            }

        }else{
            return redirect()->back()->with("status","空きスペースを残さないでください。");
        }
    }

    public function contact()
    {
        return View("front.contact");
    }

    public function contactCreate(Request $request)
    {
        if (isset($request->name) && isset($request->email) && isset($request->subject) && isset($request->message)){
            $name=functionController::security($request->name);
            $email=functionController::security($request->email);
            $subject=functionController::security($request->subject);
            $message=functionController::security($request->message);


            $all=[
                "name"=>$name,
                "email"=>$email,
                "subject"=>$subject,
                "message"=>$message
            ];

            $create=contact::create($all);
            if ($create){
                return redirect()->back()->with("status","あなたのメッセージは配信されました。");
            }else{
                return redirect()->back()->with("status","メッセージを配信できませんでした。もう一度試してください。");
            }

        }else{
            return redirect()->back()->with("status","空きスペースを残さないでください。");
        }
    }

}
