<?php
/**
 * File For: estimateMaker.com
 * File Name: users.blade.php.
 * Author: Mike Giammattei
 * Created On: 6/5/2017, 9:52 PM
 */;
 ?>
@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@stop