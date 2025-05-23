@extends('siteOne.master')

@section('content')


        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" method="POST" action="{{ route('postcontact') }}">
                            @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                @if ($errors->any)
                                @error('name')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                                @endif

                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                @if ($errors->any)
                                @error('email')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                                @endif
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input name="phone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                @if ($errors->any)
                                @error('phone')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                                @endif
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea name="msg" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                @if ($errors->any)
                                @error('msg')
                                <small class="text-danger"> {{$message}}</small>
                                @enderror
                                @endif
                            </div>

                            <form action="/your-route" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-floating mb-3 mt-3">
                                  <input name="image" class="form-control" id="image" type="file" />
                                  <label for="image">Image</label>
                                </div>


                                <div class="d-grid">
                                  <button class="btn btn-primary btn-xl" type="submit">Submit</button>
                                </div>
                              </form>

                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

