@extends('layouts.app')

@section('content')
    <div class="flex items-center h-screen bg-blue-900 bg-hero" x-bind="{ changeBg: true }" :class="{ 'bg-example' : !changeBg , 'bg-hero' : changeBg}">
        <div class="max-w-5xl m-auto bg-white rounded-lg w-3/4 h-64 flex items-center shadow-xl" x-data="{ showPhrase: true }" @mouseover="changeBg = true" @mouseout="changeBg = false">
            <h1 class="w-full text-center text-3xl md:text-5xl font-mono" @mouseover="showPhrase = false" @mouseout="showPhrase = true" x-text="showPhrase ? 'Build Something Amazing...' : '...With Alpine Wind'"></h1>
        </div>
    </div>
@endsection
