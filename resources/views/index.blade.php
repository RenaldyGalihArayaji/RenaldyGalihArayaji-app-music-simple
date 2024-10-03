@extends('layouts.index')
@section('content')

    {{-- Menu Add New --}}
    <a href="{{ route('artist.create')}}" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-4 transition duration-200 ease-in-out">
            Add New
    </a>

    {{-- Table Data --}}
    <div class="relative overflow-x-auto shadow-lg rounded-lg mt-6">
        <table class="w-full text-sm text-left rtl:text-right text-gray-600 dark:text-gray-300">
             <thead class="text-xs text-gray-900 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-4">No.</th>
                    <th scope="col" class="px-6 py-4">
                        <div class="flex items-center">
                            Package Name 
                            <a href="#" class="ml-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-4">
                        <div class="flex items-center">
                            Artist Name
                            <a href="#" class="ml-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-4">
                        <div class="flex items-center">
                            Date Release
                            <a href="#" class="ml-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-4">
                        <div class="flex items-center">
                            Audio
                            <a href="#" class="ml-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-4">
                        <div class="flex items-center">
                            Price
                            <a href="#" class="ml-1">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                     <th scope="col" class="px-2 py-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $loop->iteration}}</th>
                        <td class="px-6 py-4 flex gap-3 items-center">
                            <img src="{{ $item->ImageURL }}" alt="Image of {{ $item->PackageName }}" class="w-32 h-auto object-cover">
                            <h5 class="text-lg font-medium text-gray-600">
                                {{ $item->PackageName}}
                            </h5>
                        </td>
                        <td class="px-6 py-4 gap-3 items-center">{{ $item->ArtistName}}</td>
                        <td class="px-6 py-4 gap-3 items-center">{{ date('d F Y', strtotime($item->ReleaseDate)) }}</td>
                        <td class="px-6 py-4 gap-3 items-center">
                            <button class="play-button p-3 shadow-lg border border-cyan-300 rounded-full bg-slate-100" data-audio-id="audio-player-{{ $loop->iteration }}">
                                <svg class="icon-play w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 18V6l8 6-8 6Z"/>
                                </svg>
                                <svg class="icon-stop w-6 h-6 text-gray-800 dark:text-white hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <rect width="12" height="12" x="6" y="6" stroke="currentColor" stroke-linejoin="round" stroke-width="2" rx="1"/>
                                </svg>
                            </button>
                        
                            <!-- HTML5 Audio Player -->
                            <audio id="audio-player-{{ $loop->iteration }}" src="{{ $item->SampleURL }}" class="hidden"></audio>
                        </td>                   
                        <td class="px-6 py-4 gap-3 items-center">{{ formatNumber($item->price) }}
                        </td>
                        <td class="px-6 py-4 flex item-center">
                            {{-- Edit Data --}}
                            <a href="{{ route('artist.edit', $item->id)}}" class="font-medium text-blue-600 dark:text-blue-400 hover:underline">
                                <!-- Icon Edit -->
                                <svg class="w-6 h-6 text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>
                            </a>
                            {{-- Delete Data --}}
                            <form action="{{ route('artist.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class=" confirm-delete font-medium text-blue-600 dark:text-blue-400 hover:underline">
                                    <!-- Icon Delete -->
                                    <svg class="w-6 h-6 text-red-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center py-4 text-gray-500 dark:text-gray-400 font-medium">
                            No Data Available
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    
@endsection