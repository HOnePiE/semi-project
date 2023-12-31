@extends('index')

@section('title')
signin
@endsection

@section('page')
<!-- Modal1 -->
<div class="modal fade in" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <div class="signin-form profile">
                    <h3 class="sign">Sign In</h3>
                    <div class="login-form">
                        <form action="" method="post">
                            <input type="email" name="email" placeholder="E-mail" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <div class="tp">
                                <input type="submit" value="Sign In">
                            </div>
                            @csrf
                        </form>
                    </div>
                    <div class="login-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        </ul>
                    </div>
                    <p><a href="{{route('register')}}" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection