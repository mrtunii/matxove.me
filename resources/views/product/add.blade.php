@extends('layouts.app')

@section('content')
    <style>
        textarea {
            resize: none;
        }
    </style>

    <div class="content-container">
        <h1 class="page-title ninobold" style="width: 100%; text-align: center;">დამატება</h1>
        <form class="shofy-form" action="/product/insert" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="input-field">
                <h3 class="out-label ninobold">დასახელება</h3>
                <input class="ninonormal" required type="text"  id="fullname" name="title">
            </div>
            <div class="input-field">
                <h3 class="out-label ninobold">აღწერა</h3>
                <textarea  class="ninonormal" id="fullname" rows="3" name="description"></textarea>
            </div>
            <div class="input-field">
                <h3 class="out-label ninobold">რამდენი დღით შეგიძლიათ განათხოვრება?</h3>
                <input type="number" required id="day_count" name="day_count" min="1" value="1">
            </div>

            <div class="input-field">
                <h3 class="out-label ninobold">კატეგორია</h3>
               <select  name="category_id" class="ninonormal" required>
                   @foreach($categories as $category)
                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach
               </select>
            </div>
            <div class="input-field">
                <h3 class="out-label ninobold">ატვირთეთ სურათი</h3>
                <input name="image"  type="file" class="ninonormal">
            </div>
            <div class="input-field" ><button type="submit" class="btn btn-block green ninobold"><i class="fa fa-save"></i> შენახვა</button></div>
        </form>
    </div>

@stop