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
    <div class="row" style="color: white">
        <div class="col-5 ml-3">
            <label class="col-form-label">Category Name:</label>
            <input type="text" id="category" class="form-control" placeholder="Category Name" />
            <button class="btn btn-success" id="add_cat">Add New</button>
        </div>
        <div class="row">
            <div class="col-md-6">
            </div>
        </div>
    </div>

    {{-- Menu List --}}
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"> --}}
    {{-- <link href="../css/menu.css" rel="stylesheet"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
    {{-- <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg container" style="color: #eee; height: 100vh;">

        <h1 class="text-center">Menu/Order</h1>
    
        <div class="row">
    
            <div class="col-md-3">
                <form class="form-inline" id="menu-add">
                    <h3>Add Menu</h3>
                    <div class="form-group">
                        <label for="addInputName">Iteam</label>
                        <input type="text" class="form-control" id="addInputName" placeholder="Item name" required>
                    </div>
                    <div>&nbsp;</div>
                    <div class="form-group">
                        <label for="addInputSlug">Description &nbsp;</label>
                        <input type="text" class="form-control" id="addInputSlug" placeholder="item-slug Eg:- Extra Cheez" required>
                    </div>
                    <div>&nbsp;</div>
                    <button class="btn btn-primary" id="addButton"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add
                        Item</button>
                </form>
    
                <form class="" id="menu-editor" style="display: none;">
                    <h3>Editing <span id="currentEditName"></span></h3>
                    <div class="form-group">
                        <label for="addInputName">Name</label>
                        <input type="text" class="form-control" id="editInputName" placeholder="Item name" required>
                    </div>
                    <div class="form-group">
                        <label for="addInputSlug">Slug</label>
                        <input type="text" class="form-control" id="editInputSlug" placeholder="item-slug">
                    </div>
                    <div>&nbsp;</div>
                    <button class="btn btn-info" id="editButton">Edit</button>
                </form>
            </div>
            <div class="col-md-9">
                <h3>Order</h3>
                <div class="dd nestable" id="nestable">
                    <ol class="dd-list">
                        <li data-id="2" data-name="About Us" data-slug="about-slug-2" data-new="0" data-deleted="0" class="dd-item row">
                            <div class="dd-handle col-7">Iteams <span class="additional-text" style="text-align: revert;">Additional Text Here</span></div>
                            <div class="dd-handle col-1 mx-3">Qty</div>
                            <div class="dd-handle col-3">Price</div>
                            <div class="button-container">
                                <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="2">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </span>
                                <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </li>
                        <!--- Initial Menu Items --->
    
                        <!--- Item1 --->
                        <li class="dd-item" data-id="1" data-name="Home" data-slug="home-slug-1" data-new="0"
                            data-deleted="0">
                            <div class="dd-handle">Home </div>
                            <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="1">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                            <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="1">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </li>
    
                        <!--- Item2 --->
                        <li data-id="2" data-name="About Us" data-slug="about-slug-2" data-new="0" data-deleted="0" class="dd-item row">
                            <div class="dd-handle col-7">About Us <span class="additional-text" style="text-align: revert;">Additional Text Here</span></div>
                            <div class="dd-handle col-1 mx-3">Price</div>
                            <div class="dd-handle col-3">Price</div>
                            <div class="button-container">
                                <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="2">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </span>
                                <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="2">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </div>
                        </li>
                        <!--- Item3 --->
                        <li class="dd-item" data-id="3" data-name="Services" data-slug="services-slug-3" data-new="0"
                            data-deleted="0">
                            <div class="dd-handle">Services</div>
                            <span>
                            </span>
                            <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="3">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                            <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="3">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                            <!--- Item3 children --->
                            <ol class="dd-list">
                                <!--- Item4 --->
                                <li class="dd-item" data-id="4" data-name="UI/UX Design" data-slug="uiux-slug-4"
                                    data-new="0" data-deleted="0">
                                    <div class="dd-handle">UI/UX Design</div>
                                    <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="4">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </span>
                                    <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="4">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </span>
                                </li>
    
                                <!--- Item5 --->
                                <li class="dd-item" data-id="5" data-name="Web Design" data-slug="webdesign-slug-5"
                                    data-new="0" data-deleted="0">
                                    <div class="dd-handle">Web Design </div>
                                    <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="5">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </span>
                                    <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="5">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </span>
                                </li>
    
                            </ol>
                        </li>
                        <li class="dd-item" data-id="6" data-name="Contact Us" data-slug="contact-slug-6"
                            data-new="0" data-deleted="0">
                            <div class="dd-handle">Contact Us</div>
                            <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="6">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                            <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="6">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- Menu list end --}}
    <section class="content ml-4" style="width: 95%; ">

        <!-- Default box -->
        <div class="card">
            {{-- <div class="card-header">
            <h2 class="card-title ml-8">Order</h2>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div> --}}
            <div class="">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 35%">
                                Category Name
                            </th>
                            <th style="width: 10%">
                                Items
                            </th>
                            <th style="width: 15%">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cats as $cat)
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    {{ $cat['name'] }}
                                </a>
                                <br />
                                <small>
                                    Created {{ $cat['created_at'] }}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    {{ $cat['items_count'] }}
                                </ul>
                            </td>
                            <td class="project-actions text-left">
                                <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#EditCategory">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
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
                            <td class="project-actions text-left">

                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Delte
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Cancle
                                </a>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
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
<div class="modal fade" id="EditCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="eCategory" id="" class="form-controll" placeholder="Category Name" style="width: 100%"/>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
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
                    "table": "1"
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
