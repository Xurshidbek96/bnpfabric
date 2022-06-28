@extends('admin.layouts.layout')

@section('statistics')
active
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Statistic</h2><br>
        </div>
    </div>
</div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?
        $st = DB::table('statistics')->count();

        if($st > 0)
        {?>
            <form action="{{ route('statistics.update',$statistic[0]->id) }}" method="POST">
            @csrf
            @method('PUT')<?
            $v1 = $statistic[0]->product;
            $v2 = $statistic[0]->partners;
            $v3 = $statistic[0]->year;
        }

        else {?>
            <form action="{{ route('statistics.store')}}" method="POST">
            @csrf
                <?
            $v1 = '';
            $v2 = '';
            $v3 = '';
        }
    ?>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product : </strong>
                <input type="text" name="product" value="{{ $v1 }}" class="form-control" placeholder="product">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Partners : </strong>
                <input type="text" name="partners" value="{{ $v2 }}" class="form-control" placeholder="partners">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Year : </strong>
                <input type="number" name="year" value="{{ $v3 }}" class="form-control" placeholder="year">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</form>
@endsection