<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Koleksi') }}
        </h2>
    </x-slot>




    <body>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        ID
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nama Koleksi
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Jenis
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Jumlah Koleksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($koleksi as $collection)
                                <tr>
                                    <th scope="row">{{ $collection->id }}</th>
                                    <td>{{ $collection->namaKoleksi }}</td>
                                    <td>{{ $collection->jenis }}</td>
                                    <td>{{ $collection->jumlahKoleksi }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable({
                    ajax: '{{ url("getAllCollections") }}',
                    serverSide: false,
                    processing: true,
                    deferRender: true,
                    type: 'GET',
                    destroy: true,
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'namaKoleksi',
                            name: 'namaKoleksi'
                        },
                        {
                            data: 'jenis',
                            name: 'jenis'
                        },
                        {
                            data: 'jumlahKoleksi',
                            name: 'jumlahKoleksi'
                        },
                    ]
                });
            });
        </script>
    </body>

</x-app-layout>