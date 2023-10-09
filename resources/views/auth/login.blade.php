@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap nk-wrap-nosidebar">
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                            <div class="brand-logo pb-4 text-center">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg" src="{{asset('backend')}}/images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img logo-img-lg" src="{{asset('backend')}}/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="card card-bordered">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title">Sign-In</h4>
                                        </div>
                                    </div>
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="default-01">Email </label>
                                            </div>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control form-control-lg" id="default-01" name="email" placeholder="Enter your email address or username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="password">Password</label>
                                                <a class="link link-primary link-sm" href="html/pages/auths/auth-reset-v2.html">Forgot Code?</a>
                                            </div>
                                            <div class="form-control-wrap">
                                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                                </a>
                                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your passcode">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                        </div>
                                    </form>
                                    <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{route('register')}}">Create an account</a>
                                    </div>
                                    <div class="text-center pt-4 pb-3">
                                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                    </div>
                                    <ul class="nav justify-center gx-4">
                                        <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- wrap @e -->
                </div>
                <!-- content @e -->
            </div>
        </div>
    </div>
</div>
@endsection
