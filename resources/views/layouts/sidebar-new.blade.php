       <div class="widgetBox">
                            
                        <div class="widgetHead">
                            <h5>Query Form</h5>
                        </div>

                        <div class="widgetContent">
                        
                            {!! Form::open(["class"=>"formStyle","id"=>"sidebar-query","action"=>"PagesController@contactUsQuery"]) !!}
                                <input type="text" placeholder="Name" name="name" autocomplete="no">
                                <input type="email" placeholder="Email" name="email"  autocomplete="no">
                                <input type="tel" name="contactNumber" placeholder="Contact Number"  autocomplete="no">
                                <input type="text" placeholder="Subject" value="Online Courses" style="display:none;" name="subject"  autocomplete="no">
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
                                <select name="course"  class="coursename select2" autocomplete="no">
                                    <option value="">Select Course</option>
                                   @include("main.layouts.form.course")
                                </select>
                                <textarea placeholder="Query here" name="message"  autocomplete="no" class="mb-0"></textarea>
                                <label><span>What is <span id="no1"></span> plus <span id="no2"></span>?</span></label>
                                <input name="answer" id="answer" pattern="7" type="text" title="Please answer the question to prove you are human" placeholder="your answer"  autocomplete="no">
                                <input type="submit" value="Submit" class="buttonStyleOrange">
                            {!! Form::close() !!}
                           
                        </div>

                    </div> <!-- End of WidgetBox -->
