@inject('modelHelper' ,'\App\Helper\ModelHelper')


@if(count($modelHelper->getCategoryListSIdebar())>0)
    <div class="widgetBox">
            
        <div class="widgetHead">
            <h5> Categories List</h5>
        </div>

        <div class="widgetContent">

        @foreach($modelHelper->getCategoryListSIdebar() as $single)

            <div class="row">
                <div class="col-xl-7 col-md-7 col-7">
                    <h6>{{ $single->title }}</h6>
                </div>
                <div class="col-xl-5 col-md-5 col-5 text-right">
                    <a href="{{ route('category-blog',$single->seo_url) }}" class="normalLink">Details</a>
                </div>
            </div>
            <hr>

        @endforeach
        </div>

    </div> <!-- End of WidgetBox -->
@endif

