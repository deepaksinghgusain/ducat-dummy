@if(count($dataUpcoming)>0)
    <section class="section-padding-small innerPageStyle">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xl-12 mb-4">
                        
                    <h3>UPCOMING EVENTS</h3>

                </div> <!-- End of COL XL 12 -->
    
            </div> <!-- End of ROW -->

            <div class="row">
                
                @foreach($dataUpcoming as $d)
               <div class="col-xl-4 col-lg-4 col-md-4">

                    <div class="blogBox">
                        
                        <img src="{{ asset($d->featureImage)}}" alt="" class="img-fluid">

                        <div class="blogLinks">{{ strtoupper(date('F d,Y',strtotime($d->startDate)))}}  </div>

                        <h4><a href="{{ url('workshop-at-'.$class.'/'.$d->seo_url) }}">{{ $d->name }}</a></h4>

                        <p>{{ $d->shortDescription }}</p>
                        
                        <div class="readMore"><a href="{{ url('workshop-at-'.$class.'/'.$d->seo_url) }}">Read More</a></div>

                    </div>

                </div> <!-- End of COL XL 4 -->
                @endforeach
            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </section> <!-- End of Discover Ducat -->
@endif