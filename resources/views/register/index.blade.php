@extends('layouts.master')
@section('content')

    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card login-wrapper">
                <div class="card-content">
                    <form method="post" action="/account" accept-charset="UTF-8">
                        <h4 class="center">Create Account</h4>
                            <div class="input-field">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label class="active" for="first_name">First Name</label>
                            </div>
                            <div class="input-field">
                                <input id="last_name" type="text" class="validate">
                                <label class="active" for="last_name">Last Name</label>
                            </div>


                            <div class="input-field">
                                <input id="password" type="password" class="validate">
                                <label class="active" for="password">Password</label>
                            </div>


                            <div class="input-field">
                                <input id="email" type="email" class="validate">
                                <label class="active" for="email">Email</label>
                            </div>
                        <p>
                            <input class="btn-large z-depth-0" value="Create" type="submit">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


@stop