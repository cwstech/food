<x-app-layout>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Edit
        </button>
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- bootsrap  -->
                    <div class="row">
                        @foreach($tables as $table)
                        <!-- {{ $table->table_no }}
                        {{ $table->table_url }} -->
                        <a href="{{url('table/'.$table->table_url)}}">
                            <div class="card text-white  mb-3 @if($table->status == 0) bg-success @else bg-danger @endif" style="max-width: 13rem;">
                                <div class="card-header">Table No:. {{$table->table_no}} </div>
                                <div class="card-body">
                                    <h5 class="card-title">Table is </h5>
                                    <p class="card-text">
                                        @if($table->status == 0)
                                        free
                                        @else
                                        Busy
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </a>
                        @endforeach

                    </div>

                    <!-- end -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Tables</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <table id="table" class="table">
                        <th>Number of Table</th>
                        <th>

                            <select id="tables">
                                @for($i = 1; $i < 101; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </th>
                        <h6 style="color: black;">If you delete a table, the associated QR code will no longer function. If you wish to use QR codes for that table again, you'll need to generate a new QR code after recreating the table. Deleting a table renders its previous QR code invalid, so generating a new QR code is necessary to establish a connection between the table and the code.</h6>

                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="submit" type="submit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>