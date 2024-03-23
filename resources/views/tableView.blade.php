<x-app-layout>
    <div class="d-flex justify-content-end">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add
        </button>
    </div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __('Table') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- bootsrap  -->
                    <div class="row">
                        @foreach($tables as $table)
                        <!-- {{ $table->table_no }}
                        {{ $table->table_url }} -->
                        <a href="{{url('table/'.$table->table_url)}}">
                            <div class="card text-white mr-3 mb-3 @if($table->status == 0) bg-success @else bg-danger @endif" style="max-width: 13rem;">
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
                <h5 class="modal-title" id="exampleModalLongTitle">Add Tables</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form id="tableForm"> -->
                <div class="modal-body">
                    <table id="table" class="table">
                        <th>Number of Table You Want To Add</th>
                        <th>
                            <form method="post">
                            <select id="tables">
                                @for($i = 1; $i < 101; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </form>
                        </th>
                        <h6 style="color: black;">You Will Get QR Code after create table(s)</h6>

                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary" id="submit">Save changes</button>
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    
$(document).ready(function() {
    $('#submit').on('click', function() {
    let tables = $('#tables').val();
    console.log(tables);
    $.ajax({
        url: '/table/add',
        type: 'POST',
        data: {
            "_token": "{{ csrf_token() }}",
            "tables": tables,
            
        },
        success: function(response) {
            alert('Opration Success! Please Refresh the page!');
        },
        error: function(error) {
            console.error(error);
        }
    });
});
});
</script>
            <!-- $.ajax({
                url: '/', // Replace with the actual URL where you want to submit the form
                type: 'GET',
                data: $('#tables').serialize(), // Use serialized form data
                success: function(response) {
                    console.log(response); // Log the response inside success callback
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    }); -->