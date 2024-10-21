<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Siswa') }}
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
                
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <!-- Modal toggle -->
                        <div class="flex justify-center m-5">
                            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                            Lapor
                            </button>
                        </div>

                            <!-- Main modal -->
                            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative p-4 bg-white rounded-lg shadow sm:p-5">
                                        <!-- Modal header -->
                                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5">
                                            <h3 class="text-lg font-semibold text-gray-900">
                                                Lapor
                                            </h3>
                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="defaultModal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                <div>
                                                    <label for="pname" class="block mb-2 text-sm font-medium text-gray-900">Pelapor</label>
                                                    <input type="text" name="pelapor" id="pname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan nama pelapor" required="">
                                                </div>
                                                <div>
                                                    <label for="tname" class="block mb-2 text-sm font-medium text-gray-900">Terlapor</label>
                                                    <input type="text" name="terlapor" id="tname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan nama terlapor" required="">
                                                </div>
                                                <div>
                                                    <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                                                    <select name="kelas" id="kelas" class="w-full rounded-md border-gray-300">
                                                        <option value="SMK PESAT ITXPRO">-- Pilih Kelas --</option>
                                                        <option value="X-1">X-1</option>
                                                        <option value="X-2">X-2</option>
                                                        <option value="X-3">X-3</option>
                                                        <option value="XI-RPL-1">XI-RPL-1</option>
                                                        <option value="XI-RPL-2">XI-RPL-2</option>
                                                        <option value="XI-DKV">XI-DKV</option>
                                                        <option value="XI-TKJ">XI-TKJ</option>
                                                        <option value="XI-TKJ">XII-RPL</option>
                                                        <option value="XI-TKJ">XII-DKV</option>
                                                        <option value="XI-TKJ">XII-TKJ</option>
                                                    </select>
                                                </div>
                                                <div>
                                                    <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900">Laporan</label>
                                                    <input type="text" name="laporan" id="laporan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukkan laporan" required="">
                                                </div>
                                                <div>
                                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Image</label>
                                                <input name="img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" id="file_input" type="file">
                                                </div>
                                            </div>
                                            <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                                Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
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
            </tr>
        </thead>
        
        <tbody class="text-center">
            @foreach ($siswas as $siswa)


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