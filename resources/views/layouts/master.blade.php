@include('layouts.header')

@yield('main-container')

@if (Cookie::get('popupoptiondata') == '')
    @if (Request::segment(1) == '')
        <div id="popUpForm" class="d-none1">

            <div class="quickForm">

                <h5 class="fontQuicksand">Enquire Now or <a href="tel:7070905090"
                        style="font-size: 15px;">Call-70-70-90-50-90</a></h5>
                <form action="{{ route('center.query') }}" method="post">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="tel" name="contactNumber" placeholder="Contact Number" required pattern="\d{10}">
                    <input type="email" name="email" placeholder="Email" required>

                    <select name="course" required>
                        <option value="">Course Looking for!</option>
                        @include('layouts.form.api-course')
                    </select>
                    <select name="branch" required>
                        <option value="">Select Branch!</option>
                        @include('layouts.form.branch')
                    </select>
                    <input type="hidden" name="popup" value="ga-uu-rr-aa-vv">
                    <input type="checkbox" id="ossm123" name="ossm123" required class="checkbox formLeft">
                    <label for="ossm123" class="formRight">I understand that your personal data will be used in
                        accordance
                        with the <a href="{{ url('privacy-policy') }}">Privacy Policy</a> here *</label>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <input type="submit" value="Submit" class="buttonStyleOrange text-uppercase">
                    </div>
                </form>

            </div>
        </div>
    @endif
@endif
<div id="popUpForm123" style="display:none;">

    <div class="quickForm">

        <h5 class="fontQuicksand">Enquire Now or <a href="tel:7070905090"
                style="font-size: 15px;">Call-70-70-90-50-90</a></h5>
        <form action="{{ route('center.query') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="tel" name="contactNumber" placeholder="Contact Number" required pattern="\d{10}">
            <input type="email" name="email" placeholder="Email" required>

            <select name="course" required>
                <option value="">Course Looking for!</option>
                @include('layouts.form.api-course')
            </select>
            <select name="branch" required>
                <option value="">Select Branch!</option>
                @include('layouts.form.branch')
            </select>
            <input type="hidden" name="popup" value="ga-uu-rr-aa-vv">
            <input type="checkbox" id="ossm1234" name="ossm1234" required class="checkbox formLeft">
            <label for="ossm1234" class="formRight">I understand that your personal data will be used in accordance with
                the
                <a href="{{ url('privacy-policy') }}">Privacy Policy</a> here *</label>
            <div class="clearfix"></div>
            <div class="text-center">
                <input type="submit" value="Submit" class="buttonStyleOrange text-uppercase">
            </div>
        </form>

    </div>


</div>

<div id="popUpForm123123" style="display:none;">

    <div class="quickForm">

        <h5 class="fontQuicksand">Enquire Now or <a href="tel:7070905090"
                style="font-size: 15px;">Call-70-70-90-50-90</a></h5>
        <form action="{{ route('center.query') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="tel" name="contactNumber" placeholder="Contact Number" required pattern="\d{10}">
            <input type="email" name="email" placeholder="Email" required>

            <select name="course" required>
                <option value="">Course Looking for!</option>
                @include('layouts.form.api-course')
            </select>
            <select name="branch" required>
                <option value="">Select Branch!</option>
                @include('layouts.form.branch')
            </select>
            <input type="hidden" name="popup" value="ga-uu-rr-aa-vv">
            <input type="checkbox" id="ossm12345" name="ossm12345" required class="checkbox formLeft">
            <label for="ossm12345" class="formRight">I understand that your personal data will be used in accordance
                with
                the <a href="{{ url('privacy-policy') }}">Privacy Policy</a> here *</label>
            <div class="clearfix"></div>
            <div class="text-center">
                <input type="submit" value="Submit" class="buttonStyleOrange text-uppercase">
            </div>
        </form>

    </div>


</div>


@include('layouts.footer')
