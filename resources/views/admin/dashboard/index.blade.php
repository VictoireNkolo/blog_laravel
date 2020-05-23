@extends('layout.dashboard')

@section('title', 'Page accueil')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.dashboard.index') }}">Tableau de bord</a>
        </li>
        <li class="breadcrumb-item active">Tableau de bord</li>
    </ol>
    <!-- Icon Cards-->

    <list-user
        :users="{{ json_encode($users) }}"
    >

    </list-user>

@endsection
