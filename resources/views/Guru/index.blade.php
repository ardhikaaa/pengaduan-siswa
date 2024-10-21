<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guru') }}
        </h2>
    </x-slot>

    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="grid gap-8 lg:grid-cols-1" style="padding-bottom: 50px">
            <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">

                    <section class="dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6">
                            <div class="mx-auto max-w-screen-md sm:text-center">
                                <form action="" method="GET">
                                    <div class="items-center mx-auto space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                                        <div class="relative w-full">
                                            <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900">Search Products</label>
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                                  </svg>                                  
                                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                            </div>
                                            <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border
                                            border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500
                                            focus:border-primary-500"
                                              placeholder="Search for Products" type="text" id="search" name="search" required value ="{{request('search')}}" autocomplete="off">  
                                        </div>
                                        <div>
                                            <button type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-primary-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div>
                      </section>
                </div>
    <div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase">
            <tr>
                <th scope="col" class="px-4 py-3 text-center">No</th>
                <th scope="col" class="px-4 py-3 text-center">Pelapor</th>
                <th scope="col" class="px-4 py-3 text-center">Terlapor</th>
                <th scope="col" class="px-4 py-3 text-center">Kelas</th>
                <th scope="col" class="px-4 py-3 text-center">Laporan</th>
                <th scope="col" class="px-4 py-3 text-center">Bukti</th>
                <th scope="col" class="px-4 py-3 text-center">Status</th>               
                <th scope="col" class="px-4 py-3 text-center">Aksi</th>               
            </tr>
        </thead>
        
        <tbody class="text-center ">
            @foreach ($gurus as $siswa)


            <tr class="border-b dark:border-gray-700">
                <td class="px-4 py-3">{{ $loop->iteration }}</td>
                <td class="px-4 py-3">{{ $siswa->pelapor}}</td>
                <td class="px-4 py-3">{{ $siswa->terlapor}}</td>
                <td class="px-4 py-3">{{ $siswa->kelas}}</td>
                <td class="px-4 py-3">{{ $siswa->laporan}}</td>
                <td class="px-4 py-3"><img  src="{{asset('/storage/products/'.$siswa['img'])}}" alt="gambar" width="70px"></td>
                <td class="px-4 py-3">
                    <span class="
                    @if ($siswa->status == 'sedang dalam tinjauan') bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300
                    @elseif($siswa->status == 'done')  bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 @endif">
                        {{$siswa->status}}
                    </span>
                </td>
                <td class="px-4 py-3">
                    <a href="{{ route('guru.edit', $siswa->id)}}" class="flex items-center justify-center text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                        Edit
                    </a>
                </td>
            </tr>


            @endforeach


        </tbody>

    </table>
    </div>
            
        </div> 
        {{-- {{$produks->links() }}  --}}
    </div>
  </section>


</x-app-layout>