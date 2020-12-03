<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="padding: 30px;">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Phone</th>
                            <th>message</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contatcs as $contatc)
                        <tr>
                            <td>{{$contatc->id}}</td>
                            <td>{{$contatc->name}}</td>
                            <td>{{$contatc->email}}</td>
                            <td>{{$contatc->subject}}</td>
                            <td>{{$contatc->phone}}</td>
                            <td>{{$contatc->message}}</td>
                       
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Phone</th>
                            <th>message</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

</x-app-layout>