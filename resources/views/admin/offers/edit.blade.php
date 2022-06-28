@extends('admin.layouts.layout')

@section('products')
active
@endsection
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2><br>
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
  
    <form action="{{ route('offer.update',$offer[0]->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
   
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filtr:</strong>
                <select name="type" class="form-control" value="{{ $offer[0]->type }}">
                    <option>{{ $offer[0]->type }}</option>
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
                <input type="text" name="name_uz" class="form-control" value="{{ $offer[0]->name_uz }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Ru:</strong>
                <input type="text" name="name_ru" class="form-control" value="{{ $offer[0]->name_ru }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Eng:</strong>
                <input type="text" name="name_en" class="form-control" value="{{ $offer[0]->name_en }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name Pol:</strong>
                <input type="text" name="name_pl" class="form-control" value="{{ $offer[0]->name_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Uz:</strong>
                <input type="text" name="title_uz" class="form-control" value="{{ $offer[0]->title_uz }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Rus:</strong>
                <input type="text" name="title_ru" class="form-control" value="{{ $offer[0]->title_ru }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Eng:</strong>
                <input type="text" name="title_en" class="form-control" value="{{ $offer[0]->title_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title Pol:</strong>
                <input type="text" name="title_pl" class="form-control" value="{{ $offer[0]->title_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="number" name="price" class="form-control" placeholder="price" value="{{ $offer[0]->price }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Count:</strong>
                <input type="number" name="count" class="form-control" placeholder="count" value="{{ $offer[0]->count }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Uz:</strong>
                <input type="text" name="country_uz" class="form-control" value="{{ $offer[0]->country_uz }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Rus:</strong>
                <input type="text" name="country_ru" class="form-control" value="{{ $offer[0]->country_ru }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Eng:</strong>
                <input type="text" name="country_en" class="form-control" value="{{ $offer[0]->country_en }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country Pol:</strong>
                <input type="text" name="country_pl" class="form-control" value="{{ $offer[0]->country_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>model:</strong>
                <input type="text" class="form-control" name="model" value="{{ $offer[0]->model }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Color:</strong>
        <select id="color" name="color[]" value="{{ $offer[0]->color }}" class="form-control" multiple>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="pink">pink</option>
            <option value="blue">blue</option>
        </select>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Uzb:</strong>
                <input type="text" class="form-control" name="content_uz" value="{{ $offer[0]->content_uz }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Rus:</strong>
                <input type="text" class="form-control" name="content_ru" value="{{ $offer[0]->content_ru }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content Eng:</strong>
                <input type="text" class="form-control" name="content_en" value="{{ $offer[0]->content_en }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content :Pol</strong>
                <input type="text" class="form-control" name="content_pl" value="{{ $offer[0]->content_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Uzb:</strong>
                <input type="text" class="form-control" name="pattern_uz" value="{{ $offer[0]->pattern_uz }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Rus:</strong>
                <input type="text" class="form-control" name="pattern_ru" value="{{ $offer[0]->pattern_ru }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern Eng:</strong>
                <input type="text" class="form-control" name="pattern_en" value="{{ $offer[0]->pattern_en }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>pattern :Pol</strong>
                <input type="text" class="form-control" name="pattern_pl" value="{{ $offer[0]->pattern_pl }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>width:</strong>
                <input type="text" class="form-control" name="width" value="{{ $offer[0]->width }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>height:</strong>
                <input type="text" class="form-control" name="height" value="{{ $offer[0]->height }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>length:</strong>
                <input type="text" class="form-control" name="length" value="{{ $offer[0]->length }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Density:</strong>
                <input type="text" class="form-control" name="density" value="{{ $offer[0]->density }}">
            </div>
        </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
   
    </form>
@endsection