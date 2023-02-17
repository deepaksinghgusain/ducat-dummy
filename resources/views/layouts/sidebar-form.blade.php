       <div class="widgetBox">
                            
                        <div class="widgetHead">
                            <h5>Query Form</h5>
                        </div>

                        <div class="widgetContent">
                        
                            {!! Form::open(["class"=>"formStyle","id"=>"sidebar-query","action"=>"PagesController@contactUsQuery"]) !!}
                            <input name="custom" type="hidden" value="ducat" />
                                <input type="text" placeholder="Name" name="name" autocomplete="no">
                                <input type="email" placeholder="Email" name="email"  autocomplete="no">
                                <input type="tel" name="contactNumber" placeholder="Contact Number"  autocomplete="no">
                                <input type="text" placeholder="Subject" name="subject"  autocomplete="no" style="display:none;" value="default">
                                @if(isset($data->location))
                                    @if($data->location==0)
                                        <select name="branch"  autocomplete="no">
                                            <option value="">Select Branch</option>
                                             @include("layouts.form.branch")
                                        </select>
                                    @else
                                        <input type="text" placeholder="location" name="branch"  autocomplete="no">
                                    @endif
                                @else
                                <select name="branch"  autocomplete="no">
                                    <option value="">Select Branch</option>
                                     @include("layouts.form.branch")
                                </select>
                                @endif
                                <input type="hidden" name="url" value="{{ request()->url() }}" />
                                 @isset($data)
                                        @isset($data->from_email)
                                            @if($data->from_email)
                                                <input name="from_email" type="hidden" value="{{ $data->from_email }}" />
                                            @endif
                                        @endisset
                                @endisset
                                <select name="course"  class="coursename select2" autocomplete="no">
                                    <option value="">Select Course</option>
                                    @php $cou="all"; @endphp
                                    @isset($data)
                                     
                                        
                                        @isset($data->courses_list)
                                            @if($data->courses_list)
                                                @foreach(explode(",",$data->courses_list) as $c_gaurav)
                                                <option value="{{$c_gaurav}}">{{$c_gaurav}}</option>
                                                @endforeach
                                            @else
                                                @include("main.layouts.form.course")
                                            @endif
                                        @else
                                            @include("main.layouts.form.course")
                                        @endisset
                                        
                                    @else
                                    @include("main.layouts.form.course")
                                    @endisset
                                        
                              
                                </select>
                                <textarea placeholder="Query here" name="message"  autocomplete="no" class="mb-0"></textarea>
                                <label><span>What is <span id="no1"></span> plus <span id="no2"></span>?</span></label>
                                <input name="answer" id="answer" pattern="7" type="text" title="Please answer the question to prove you are human" placeholder="your answer"  autocomplete="no">
                                <input type="submit" value="Submit" class="buttonStyleOrange">
                            {!! Form::close() !!}
                           
                        </div>

                    </div> <!-- End of WidgetBox -->
