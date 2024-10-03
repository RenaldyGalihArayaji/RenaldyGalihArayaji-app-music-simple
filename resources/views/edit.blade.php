@extends('layouts.index')
@section('content')

<form class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6" action="{{ route('artist.update', $data->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="ArtistName" id="ArtistName" class=" @error('ArtistName') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->ArtistName}}" />
        <label for="ArtistName" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Artist Name</label>
        @error('ArtistName')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="PackageName" id="PackageName" class=" @error('PackageName') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->PackageName}}" />
        <label for="PackageName" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Package Name</label>
        @error('PackageName')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="ImageURL" id="ImageURL"  class=" @error('ImageURL') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->ImageURL}}" />
        <label for="ImageURL" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image URL</label>
        @error('ImageURL')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="text" name="SampleURL" id="SampleURL" class=" @error('SampleURL') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->SampleURL}}" />
        <label for="SampleURL" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sample URL</label>
        @error('SampleURL')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    
    <div class="relative z-0 w-full mb-6 group">
        <input type="number" name="price" id="price" class=" @error('price') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->price}}" />
        <label for="price" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
        @error('price')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    <div class="relative z-0 w-full mb-6 group">
        <input type="date" name="ReleaseDate" id="ReleaseDate" class=" @error('ReleaseDate') is-invalid @enderror block py-3 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{ $data->ReleaseDate}}" />
        <label for="ReleaseDate" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Release Date</label>
        @error('ReleaseDate')
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="w-full sm:w-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
    <a href="{{ route('artist.index')}}" type="submit" class="w-full sm:w-auto text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Back</a>
</form>

@endsection