<?php

namespace App\Helper;

use App\Models\FaqCategory;
use App\Models\BlogCategory;
use App\Models\Testimonial;
use App\Models\BasicSetting;
use App\Models\Category;
use App\Models\Asset;
use App\Models\UpcomingBatch;
use App\Models\Placement;
use App\Models\Gallery;
use App\Models\WorkShopAtCollege;
use App\Models\WorkShopAtDucat;
use App\Models\Blog;
use App\Models\OnlineCategory;
use Carbon\Carbon;

/**
 * Class ModelHelper
 * @package App\Helper
 */
class ModelHelper
{

    function send_crul_data_vlead($name, $email = 'any', $mobile = 'any', $course = 'any', $branch = 'any')
    {
        $data = '';
        /*
        
"key" : "8c85abec94fdc856884df63afc5c5fef"
"lead_type" : "string"
"category" : "string"
"name" : "string
"email" : "string"
"contact_num" : "number"
"state" : "string"
"city" : "string"
"Address" : "string"
"pin" : "number"
"country" : "string"
"text" : "string"
"param1" : "string"
"param2" : "string"
"remark" : "string"
        
        */
        $lead_type = 'website';
        $category = 'any';
        $state = 'any';
        $city = 'any';
        $address = 'any';
        $country = 'any';
        $text = 'Course=' . $course . "&Branch=" . $branch;
        $param1 = 'custId=3487';
        $param2 = 'any';
        $remark = 'any';
        $pin = 'any';

        $key = "8c85abec94fdc856884df63afc5c5fef";
        $data = "key=" . $key;
        $data .= "&lead_type=" . $lead_type;
        $data .= "&category=" . $category;
        $data .= "&name=" . $name;
        $data .= "&email=" . $email;
        $data .= "&contact_num=" . $mobile;
        $data .= "&state=" . $state;
        $data .= "&city=" . $city;
        $data .= "&Address=" . $address;
        $data .= "&pin=" . $pin;
        $data .= "&country=" . $country;
        $data .= "&text=" . $text;
        $data .= "&param1=" . $param1;
        $data .= "&param2=" . $param2;
        $data .= "&remark=" . $remark;
        // $data=[];
        //   $data[]=["key"=>$key];
        // $data[]=["lead_type"=>$lead_type];
        // $data[]=["category"=>$category];
        // $data[]=["name"=>$name];
        // $data[]=["email"=>$email];
        // $data[]=["contact_num"=>$mobile];
        // $data[]=["state"=>$state];
        // $data[]=["city"=>$city];
        // $data[]=["Address"=>$address];
        // $data[]=["pin"=>$pin];
        // $data[]=["country"=>$country];
        // $data[]=["text"=>$text];
        // $data[]=["param1"=>$param1];
        // $data[]=["param2"=>$param2];
        // $data[]=["remark"=>$remark];
        $data = ["key" => $key, "lead_type" => $lead_type, "category" => $category, "name" => $name, "email" => $email, "contact_num" => $mobile, "state" => $state, "city" => $city, "Address" => $address, "pin" => $pin, "country" => $country, "text" => $text, "param1" => $param1, "param2" => $param2, "remark" => $remark];


        $data = json_encode($data);
        dd($data);


        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://vleads.in/app/api/get-web-leads");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));


        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        $response = curl_exec($ch);

        dd($response, $server_output, $data);
    }

    function send_crul_data($name, $email = '', $mobile = '', $course = '', $branch = '')
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(

            //https://{host}/v2/OpportunityManagement.svc/Capture
            CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r6d71a09906c233120d1f9d2d350c97fa&secretKey=b14efe872242dafaa327df67be5dbd35806ed35b',
            //CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/OpportunityManagement.svc/Capture??accessKey=u$re320a2f4a7fd19ca1baa93d048ea3e4d&secretKey=b44008330d254ea2f4f97c0c40f552089cac3a8f',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '[
  {
  "Attribute":"FirstName",
  "Value":"' . $name . '"
  },
  {
  "Attribute":"LastName",
  "Value":""
  },
  {
  "Attribute":"EmailAddress",
  "Value":"' . $email . '"
  },
  {
  "Attribute":"Phone",
  "Value":"' . $mobile . '"
  },
  {
  "Attribute":"mx_Course",
  "Value":"' . $course . '"
  },
  {
  "Attribute":"Mx_Branch",
  "Value":"' . $branch . '"
  },
  {
  "Attribute":"mx_Source",
  "Value":"website"
  }
  
  
]',

            CURLOPT_HTTPHEADER => array(

                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        // echo "<pre>";
        // print_r( json_decode($response,true));die;
    }

    public function getCategoryListSIdebar()
    {
        $data = BlogCategory::orderBy("created_at", "desc")->limit(10)->get();
        return $data;
    }

    public function getCategoryBlog($seo_url)
    {
        $data = BlogCategory::where("seo_url", $seo_url)->first();
        return $data;
    }

    public function getsingleBlog($seo_url)
    {
        $data = Blog::where("seo_url", $seo_url)->first();
        return $data;
    }


    public function getGalleries()
    {
        $data = Gallery::orderBy("created_at", "desc")->get();
        return $data;
    }

    public function getImageByProduct($model_id, $type, $model)
    {
        $data = Asset::where(["model" => $model, "model_id" => $model_id, "type" => $type])->get();
        return $data;
    }

    public function deleteImageAsset($id)
    {
        $data = Asset::find($id);
        if ($data) {
            $data->delete();
        }
    }

    /**
     * @return array
     */
    public function getCategoriesProduct()
    {
        $data = [];
        $all = Category::all();
        foreach ($all as $a) {
            $data[$a->id] = $a->title;
        }
        return $data;
    }
    function getOnlineCategoryList()
    {
        $data = [];
        $all = OnlineCategory::all();
        foreach ($all as $a) {
            $data[$a->id] = $a->name;
        }
        return $data;
    }
    function getOnlineCategoryListFront()
    {
        $data = [];
        $all = OnlineCategory::all();
        foreach ($all as $a) {
            $data[] = $a;
        }
        return $data;
    }

    function getOnlineCategoryData($id)
    {
        $data = [];
        $all = OnlineCategory::find($id);
        if ($all) {
            return $all;
        }
        return null;
    }

    /**
     * @param $name
     * @return null
     */
    public function getDataFromSetting()
    {
        $result = [];
        $data = BasicSetting::orderBy("name")->get();
        foreach ($data as $d) {
            $result[] = $d->name;
        }

        return json_encode($result);
    }

    public function searchautocomplete($request)
    {
        $result = '';
        $data = BasicSetting::where("name", $request->keyword)->first();
        if ($data) {
            $result = $data->value;
        }
        return ($result);
    }
    public  function getFAQCategoriesSelect()
    {
        $data = [];
        $all = FaqCategory::all();
        foreach ($all as $a) {
            $data[$a->id] = $a->title;
        }
        return $data;
    }

    /**
     * @return array
     */
    public  function getCategoriesSelect()
    {
        $data = [];
        $all = Category::all();
        foreach ($all as $a) {
            $data[$a->id] = $a->title;
        }
        return $data;
    }



    /**
     * @return array
     */
    public  function getBlogCategoriesSelect()
    {

        $data = [];
        $all = BlogCategory::all();
        foreach ($all as $a) {
            $data[$a->id] = $a->title;
        }
        return $data;
    }



    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public  function getTestimonials()
    {
        $all = Testimonial::all();
        return $all;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public  function getTestimonialsViaType($type)
    {
        $all = Testimonial::where('type', $type)->orderBy("created_at", "desc")->limit(20)->get();
        return $all;
    }

    function getListOfUpcomingBatches($branch)
    {
        $branch1 = '';
        //return date('m-d-Y');
        if ($branch == "sector-63-noida") {
            $branch = "Sector 63 Noida";
            $branch = "Sector 63, Noida";
        }
        if ($branch == "greater-noida") {
            $branch = "Greater Noida";
        }
        if ($branch == "noida") {
            $branch1 = "Sector 16, Noida";
        }
        //	dd(date('m/d/Y'));
        //dd(date('m/d/Y')<'01/05/2021');
        // dd(Carbon::now()->format(''));
        // 	$data=UpcomingBatch::where("branch",$branch)->whereDate("startDate",">", date('m/d/Y'))->get();
        // 	dd($data);
        // 	return $data;

        $data1 = UpcomingBatch::where("branch", $branch);
        if ($branch1) {
            $data1->orWhere("branch", $branch1);
        }
        $data1 = $data1->get();
        $data = [];
        foreach ($data1 as $d) {
            if (strtotime($d->startDate) > strtotime(Carbon::now()->format('m/d/Y'))) {
                $data[] = $d;
            }
        }
        return $data;
    }

    function getPlacementUpcoming()
    {
        $data = Placement::whereDate("startDate", ">=", date('m/d/Y'))->orWhereDate("endDate", ">=", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }
    function getPlacementComplete()
    {
        $data = Placement::where("startDate", "<", date('m/d/Y'))->where("endDate", "<", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }

    function getUpcomingWorkShopAtCollege()
    {

        $data = WorkShopAtCollege::where("startDate", ">=", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }
    function getCompleteWorkShopAtCollege()
    {

        $data = WorkShopAtCollege::where("startDate", "<", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }
    function getUpcomingWorkShopAtDucat()
    {

        $data = WorkShopAtDucat::where("startDate", ">=", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }
    function getCompleteWorkShopAtDucat()
    {

        $data = WorkShopAtDucat::where("startDate", "<", date('m/d/Y'))->orderBy("startDate", "desc")->get();
        return $data;
    }
    function getWorkShopAtDucat($seo_url)
    {
        $data = WorkShopAtDucat::where("seo_url", $seo_url)->first();
        return $data;
    }

    function getWorkShopAtCollege($seo_url)
    {
        $data = WorkShopAtCollege::where("seo_url", $seo_url)->first();
        return $data;
    }
}
