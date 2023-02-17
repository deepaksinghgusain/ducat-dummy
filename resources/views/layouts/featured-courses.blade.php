@php 
$courseList=[

   
    "Language"=>"languages",
   
    "Industrial Training"=>"industry-training",
    "Digital Marketing"=>"digital-market",
  
    
    "Web Technology"=>"web-technology",
    "Testing+"=>"software-testing",

    "Database"=>"databases",
  
    "Networking"=>"networking",
 
    "Mobile Application"=>"mobile-application",
    " ERP"=>"erp",
    "Graphic"=>"graphics",
    "Big Data"=>"big-data-hadoop",
    
    "Cloud Computing"=>"cloud-computing",
   
];
$count=count($courseList);
$i=0;
@endphp

@foreach($courseList as $name=>$url) @php $i++; @endphp
<a href="{{ url($url)}}">{{ $name }}</a> @if($i<$count)| @endif 
@endforeach