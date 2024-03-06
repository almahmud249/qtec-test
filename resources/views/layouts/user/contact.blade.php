@extends('layouts.user.master')
@section('user-content')
    <div class="container">
        <section class="container">
            <div class="parent">
                <div class="appoinment">
                    <h1 class="form-title"><span>Book a Meeting</span></h1>
                    <div class="main-container">
                        <form action="{{route('contact.store')}}" method="post">
                            @csrf
                            <div class="form first">
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" required/>
                                    </div>
                                    <div class="input-field">
                                        <label>Phone No. <span class="text-danger">*</span></label>
                                        <input type="tel" name="phone" required/>
                                    </div>
                                    <div class="input-field">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="text" name="email"/>
                                    </div>
                                </div>
                                <div class="textarea">
                                    <label class="message">Message</label>
                                    <textarea class="message-area w-100" rows="5" name="message"
                                              placeholder=" Give a message "></textarea>
                                </div>
                                <div class="submit-btn-div">
                                    <button class="submit-btn text-white" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="appoinment-footer">
                    <div class="contact-item">
                        <div class="content1">
                            <h5>How Can We Help You?</h5>
                            <p>If you have any questions? So, Please Message or Contact with us. We can try to answer on
                                your questions.</p>
                        </div>
                        <div class="content2">
                            <span class="child"><img src="assets/images/erp/phone.png" alt="phone icon"> <span
                                    class="title w-25">Phone no</span><span class="middle">:</span> <span class="value">+88 01851-988311</span> </span>
                            <br>
                            <span class="child"><img src="assets/images/erp/mail.png" alt="mail icon"> <span
                                    class="title w-25">Email</span><span class="middle">:</span> <span class="value">fnmairinternational79@gmail.com</span></span>
                        </div>
                        <div class="content3">
                            <span>Contact Us:</span>
                            <div>
                                <img src="assets/images/fb.png" alt="">
                                <img src="assets/images/insta.png" alt="">
                                <img src="assets/images/youtube.png" alt="">
                                <img src="assets/images/twitter.png" alt="">
                                <img src="assets/images/linkedin.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Appoinment footer -->
        </section>
    </div>
@endsection
