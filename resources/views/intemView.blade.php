<x-app-layout>
    <div class="d-flex justify-content-end">
        {{-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Edit
        </button> --}}
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
                        {{-- @foreach ($id as $info)
                            <div class="col-md-10">
                                <form method="post" id="editTable">
                                    @csrf
                                    <label>Table No.:- {{ $info['table_no'] }}</label>
                                </form>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        @endforeach --}}
                    </div>
                    <hr><br>
                    <div class="row mb-3">
                        <div class="col-md-1">
                            Status: 
                        </div>
                        <div class="col-md-2">
                            Active
                        </div>
                        <div class="col-md-2">
                            <input type="checkbox" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-1">
                            <label class="col-form-label">Item Name:</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Item Name">
                        </div>
                        <div class="col-md-1">
                            <label class="col-form-label">Price:</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-1">
                            <label class="col-form-label">Category:</label>
                        </div>
                        <div class="col-md-9">
                            <select style="color: black">
                                <option disabled>select..</option>
                                @foreach ($cats as $cat)
                                <option value="{{$cat['id']}}">{{$cat['name']}}1</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row ml-6">
                        <div class="col-md-1">
                            <button class="btn btn-success">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="content ml-4" style="width: 95%; ">
        <div class="card">
            <div class="">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 35%">
                                Iteam Name
                            </th>
                            <th style="width: 10%">
                                Qty
                            </th>
                            <th style="width: 10%">
                                Price
                            </th>
                            <th style="width: 8%" class="text-center">
                                Total
                            </th>
                            <th style="width: 15%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    AdminLTE v3
                                </a>
                                <br />
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    25
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                    </div>
                                </div>
                                <small>
                                    57% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Cancle
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    AdminLTE v3
                                </a>
                                <br />
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                    </li>
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                    </li>
                                </ul>
                            </td>
                            <td class="project_progress">
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47"
                                        aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                    </div>
                                </div>
                                <small>
                                    47% Complete
                                </small>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">

                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Cancle
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="file" id="imageInput" accept="image/*">
                <img id="imagePreview" alt="Image Preview">



            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
</div>
</x-app-layout>


<!-- Modal -->
<div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detele Table?</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form id="tableForm"> -->
            <div class="modal-body">
                <table id="table" class="table">
                    <th>Are You Sure? Do you want to delte Table Number: ?</th>
                    {{-- <th>

                            <select id="tables">
                                @for ($i = 1; $i < 101; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </th> --}}
                    <h6 style="color: black;">If you delete a table, the associated QR code will no longer function. If
                        you wish to use QR codes for that table again, you'll need to generate a new QR code after
                        recreating the table. Deleting a table renders its previous QR code invalid, so generating a new
                        QR code is necessary to establish a connection between the table and the QR code.</h6>

                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">No</button>
                <button class="btn btn-danger" id="submit">Yes</button>
            </div>
            <!-- </form> -->
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#submit').on('click', function() {
            $.ajax({
                url: '/table/detele',
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "table": ""
                },
                success: function(response) {
                    location.href = "/table"
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });
    });
     $(document).ready(function(){
         $("#itm_ser").select2();
        });
        // $('#itm_ser').on("select2:select", function(e){
        // });
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="../js/menulist.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/js/jquery.Jcrop.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-jcrop/0.9.15/css/jquery.Jcrop.min.css">

<style>
    #imageContainer {
  width: 300px;
  height: 300px;
  overflow: hidden;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

#uploadedImage {
  max-width: 100%;
  max-height: 100%;
  display: block;
}

#cropButton {
  display: block;
  margin-top: 10px;
}
    </style>
    <script>
function openCropWindow() {
  $('#imagePreview').Jcrop({
    aspectRatio: 190 / 190, // Set the desired aspect ratio for cropping
    boxWidth: 600,
    boxHeight: 600,
    // Add event handlers for cropping, etc.
  });
}

const imageInput = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');

imageInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener('load', function() {
      imagePreview.src = reader.result;
      // Open cropping window after image is loaded
      openCropWindow();
    });
    reader.readAsDataURL(file);
  }
});

    </script>
        