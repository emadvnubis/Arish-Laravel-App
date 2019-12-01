@extends('layouts.add-product')

@extends('layouts.components')


<!-- define [add-product] body content -->

@section('form')
<?php


echo Form::open([
  'action' => 'ProductController@add_product',
  'method' => 'post' ,
  'class' => 'add_prod_form',
  'file' => true,
  'enctype' => 'multipart/form-data',
  ]);

  echo Form::token();

  echo Form::text('name', null, // auto populated with old input in case of error
   array(
     'class' => 'field required',
     'id' => 'name',
     'placeholder' => 'Add New Product . .',
   ) // end array
 );
  echo Form::textarea('desc', null,
  array(
    'class' => 'textarea',
    'placeholder' => 'descripe your product',
    )
  );
  echo Form::file('Thumbnail');

  echo Form::submit('Click Me!');
  ?>
{{ Form::close() }}

@endsection
