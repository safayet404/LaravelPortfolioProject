@extends('Layout.app')
@section('title','Contact')
@section('content')

<div class="container-fluid jumbotron mt-5 ">
    <div class="row ">
        <div class="col-md-12  text-center">
            <h1 class="page-top-title mt-3">- যোগাযোগ -</h1>
        </div>
    </div>
</div>


<div class="container">

    <div class="row">


        <div style="width: auto;" class="col-md-6">

        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.7795806424583!2d90.3794092149848!3d23.932858084499724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5792c308c61%3A0xc2fc223c7b716353!2sMaruf%20Store!5e0!3m2!1sen!2sbd!4v1626544149902!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


        </div>

        <div class="col-md-6">

                <h5 class="service-card-title">যোগাযোগ করুন </h5>
                <div class="form-group ">
                    <input id="contactNameId" type="text" class="form-control w-100" placeholder="আপনার নাম">
                </div>
                <div class="form-group">
                    <input id="contactMobileId" type="text" class="form-control  w-100" placeholder="মোবাইল নং ">
                </div>
                <div class="form-group">
                    <input id="contactEmailId" type="text" class="form-control  w-100" placeholder="ইমেইল ">
                </div>
                <div class="form-group">
                    <input id="contactMsgId" type="text" class="form-control  w-100" placeholder="মেসেজ ">
                </div>
                <button id="contactSendBtnId" type="submit" class="btn btn-block normal-btn w-100">পাঠিয়ে দিন </button>

        </div>


    </div>



</div>






@include('Layout.Footer')

@endsection