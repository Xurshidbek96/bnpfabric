@extends('admin.layouts.layout')

@section('products')
active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Add New Project</h2><br>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('offer.index') }}"> Back</a>
        </div>
        
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filtr:</strong>
                <select name="type" class="form-control">
                    <option>poplin</option>
                    <option>boz</option>
                    <option>satin</option>
                    <option>ragoshka</option>
                    <option>flanel</option>
                    <option>diagonal</option>
                    <option>eco</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Uz:</strong>
                <input type="text" name="name_uz" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Ru:</strong>
                <input type="text" name="name_ru" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Eng:</strong>
                <input type="text" name="name_en" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Pol:</strong>
                <input type="text" name="name_pl" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Uz:</strong>
                <input type="text" name="title_uz" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Rus:</strong>
                <input type="text" name="title_ru" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Eng:</strong>
                <input type="text" name="title_en" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Pol:</strong>
                <input type="text" name="title_pl" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Count:</strong>
                <input type="number" name="count" class="form-control" placeholder="count">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Uz:</strong>
                <input type="text" name="country_uz" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Rus:</strong>
                <input type="text" name="country_ru" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Eng:</strong>
                <input type="text" name="country_en" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Pol:</strong>
                <input type="text" name="country_pl" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>model:</strong>
                <input type="text" class="form-control" name="model" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <select id="color" name="color[]" class="form-control" multiple>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="pink">pink</option>
            <option value="blue">blue</option>
        </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Uzb:</strong>
                <input type="text" class="form-control" name="content_uz">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Rus:</strong>
                <input type="text" class="form-control" name="content_ru" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Eng:</strong>
                <input type="text" class="form-control" name="content_en" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content :Pol</strong>
                <input type="text" class="form-control" name="content_pl" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Uzb:</strong>
                <input type="text" class="form-control" name="pattern_uz">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Rus:</strong>
                <input type="text" class="form-control" name="pattern_ru" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Eng:</strong>
                <input type="text" class="form-control" name="pattern_en" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern :Pol</strong>
                <input type="text" class="form-control" name="pattern_pl" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>width:</strong>
                <input type="text" class="form-control" name="width" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>height:</strong>
                <input type="text" class="form-control" name="height" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>length:</strong>
                <input type="text" class="form-control" name="length" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Density:</strong>
                <input type="text" class="form-control" name="density" >
            </div>
        </div>

        <div class="col-xs-12 mt-5 col-sm-12 col-md-12">
            <label for="mytextarea">Image</label>
            <input type="file" name="img[]" class="form-control" id="images" multiple="multiple"> <br/>
            <input type="file" name="img[]" class="form-control" id="images" multiple="multiple"> <br/>
            <input type="file" name="img[]" class="form-control" id="images" multiple="multiple"> <br/>
        </div> <br>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script>
        $(function() {
        // Multiple images preview with JavaScript
        var multiImgPreview = function(input, imgPreviewPlaceholder) {

            if (input.files) {
                var filesAmount = input.files.length;

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }

        };

        $('#images').on('change', function() {
            multiImgPreview(this, 'div.imgPreview');
        });
        });    
    </script>

</form>
@endsection
