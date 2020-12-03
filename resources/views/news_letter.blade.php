<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News Letter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 30px;">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $newss)
                        <tr>
                            <td>{{$newss->id}}</td>
                            <td>{{$newss->email}}</td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>