@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Products</div>

                <div class="panel-body">
                @if($errors->all())
                <div class="alert alert-danger" role="alert">
                <p> Validation Error. Tolong baiki</p>

                <ul>
                    @foreach ($errors->all() as $message)
                    <li>{{$message }}</li>
                    @endforeach
                </ul>
                </div>

                @endif
                <!-- tambah from kat sini -->
               {!! Form::open(['route' => 'products.store']) !!}
               <div class="form-group">
                   
               
               {!!Form::label('product_name', 'Product Name');!!}

                {!!Form::text('product_name','',['class'=>'form-control']);
                !!}
                </div>

                <div class="form-group">
                   
               
               {!!Form::label('product_description', 'Product Description');!!}

                {!!Form::text('product_description','',['class'=>'form-control']);
                !!}
                </div>

                <div class="form-group">
                   
               
               {!!Form::label('product_price', 'Product Price');!!}

                {!!Form::text('product_price','',['class'=>'form-control']);
                !!}
                </div>

                <div class="form-group">
                {!!Form::label('condition', 'Condition');!!}
                {!!Form::radio('condition', 'new', true);!!} New
                {!!Form::radio('condition', 'used', false);!!} Used
                 </div>

                <div class="form-group">
                {!!Form::label('state_id', 'State');!!}

                {!!Form::select('state_id',$states, null, ['placeholder' => 'Select State','class'=>'form-control','id'=>'state_id']);!!}
                </div>

                <div class="form-group">
                {!!Form::label('area_id', 'area');!!}

                {!!Form::select('area_id',$areas, null, ['placeholder' => 'Select area','class'=>'form-control','id'=>'area_id']);!!}
                </div>

                 <div class="form-group">
                {!!Form::label('brand_id', 'Brand');!!}

                {!!Form::select('brand_id',$brands, null, ['placeholder' => 'Select Brand','class'=>'form-control','id'=>'brand_id']);!!}
                </div>


                <div class="form-group">
                {!!Form::label('category_id', 'category');!!}

                {!!Form::select('category_id',$categories, null, ['placeholder' => 'Select category','class'=>'form-control','id'=>'category_id']);!!}
                </div>

                 <div class="form-group">
                {!!Form::label('subcategory_id', 'subcategory');!!}

                {!!Form::select('subcategory_id',$subcategories, null, ['placeholder' => 'Select subcategory','class'=>'form-control','id'=>'subcategory_id']);!!}
                </div>

                <div class="form-group">
                <button type="submit" class="btn btn-primary">
                Submit</button>

                <a href="{{ route('products.index') }} " class=" btn btn-default">Cancel</a>
                </div>






                {!! Form::close() !!}


               <!-- tutup form kat sini  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
    $( document ).ready(function() {
       // console.log
       $( "#state_id" ).change(function() {

        var state_id = $(this).val();
        console.log(state_id);

        var ajax_url = '/products/areas/' + state_id;
        $.get( ajax_url, function( data ) {

        $('#area_id').empty().append('<option value="">Select Area</option');

        $.each(data, function(area_id,area_name){

            $('#area_id').append('<option value ='+area_id+'>'+area_name+'</option>');
        });

        });
       });
    });
    </script>
@endsection