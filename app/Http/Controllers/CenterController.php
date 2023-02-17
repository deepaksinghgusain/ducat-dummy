<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CenterLandingPage;
use App\Mail\HomeEnqueryMail;
use App\Models\HomeEnquiry;

class CenterController extends Controller
{
    public function index($slug)
    {
        $data = CenterLandingPage::where('seo_url', $slug)->first();

        return view('center', compact('data'));
    }

    public function query(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'contactNumber' => 'nullable|digits:10'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with("danger", $validator->errors()->first());
        }

        $type = "Online Enquiry";

        $remark = '';
        if ($request->course) {
            $remark .= 'Course:- ' . $request->course;
        }
        if ($request->branch) {
            $remark .= ' Branch:- ' . $request->branch;
        }
        if ($request->branch != "Gurugram") {
            $key = '8c85abec94fdc856884df63afc5c5fef';
        } else {
            $key = '9086cb7d92b4e9f49ccfde13a087475d';
        }
        $data = "key=" . $key . "&lead_type=" . $type . "&name=" . $request->name . "&contact_num=" . $request->contactNumber . "&email=" . $request->email . "&text=" . 'any' . "&remark=" . $remark . "&state=" . 'any' . "&city=" . 'any' . "&Address=" . 'any' . "&pin=" . 'any' . "&country=" . 'any' . "&category=" . 'any' . "&param1=" . 'any' . "&param2=" . 'any';
        if ($request->email) {
            $data .= "&email=" . $request->email;
        }
        if ($request->course) {
            $data .= '&category=' . $request->course;
        }

        $this->CrulData($data);

        if ($request->popup) {
            \Cookie::queue(\Cookie::make('popupoptiondata', $request->popup, 30 * 24 * 3600));
        }
        $data = HomeEnquiry::create($request->all());

        (\Mail::to(env('MAIL_home'))->send(new HomeEnqueryMail($data)));

        return redirect()->to("thank-you");
    }

    function crulData($data)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://vleads.in/app/api/get-web-leads");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        $response = curl_exec($ch);
    }

    function thank() {
        return view('thank-you');
    }
}
