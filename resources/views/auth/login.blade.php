@extends('layouts.app')

@section('content')

    <h3 class="ninobold" style="width:100%; text-align: center; padding-top: 10%; position:absolute;" >მათხოვე.მე</h3>
        <div class="content-container" style="margin-top: 25%;">

            <div class="shofy-form">
                <form action="{{ url('/login') }}" method="post">
                    {{ csrf_field() }}

                <div class="input-field">
                    <h3 class="out-label ninonormal">ელ.ფოსტა</h3>
                    <input type="text" name="email" id="orderno">
                    @if ($errors->has('email'))
                        <span class="help-block ninonormal" style="color:red">
                                        {{ $errors->first('email') }}
                                    </span>
                    @endif
                </div>
                <div class="input-field" style="margin-top: 50px;">
                    <h3 class="out-label ninonormal">პაროლი</h3>
                    <input type="password" name="password" id="amount">
                    @if ($errors->has('password'))
                        <span class="help-block ninonormal " style="color:red">
                                        {{ $errors->first('password') }}
                                    </span>
                    @endif
                </div>
                <button class="btn block green ninobold" style="margin-top: 50px;" type="submit">ავტორიზაცია</button>
                </form>
            </div>
        </div>

    @stop