<div class="container" style="background-color: #eee; height: 100vh;">

    <h1 class="text-center">Menu Design</h1>

    <div class="row">

        <div class="col-md-3">
            <form class="form-inline" id="menu-add">
                <h3>Add Menu </h3>
                <div class="form-group">
                    <label for="addInputName">Name</label>
                    <input type="text" class="form-control" id="addInputName" placeholder="Item name" required>
                </div>
                <div>&nbsp;</div>
                <div class="form-group">
                    <label for="addInputSlug">Slug &nbsp;</label>
                    <input type="text" class="form-control" id="addInputSlug" placeholder="item-slug" required>
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
            <h3>Menu</h3>
            <div class="dd nestable" id="nestable">
                <ol class="dd-list">

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
                    <li class="dd-item" data-id="2" data-name="About Us" data-slug="about-slug-2" data-new="0"
                        data-deleted="0">
                        <div class="dd-handle">About Us</div>
                        <span class="button-delete btn btn-danger btn-xs pull-right" data-owner-id="2">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </span>
                        <span class="button-edit btn btn-success btn-xs pull-right" data-owner-id="2">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </span>
                    </li>

                    <!--- Item3 --->
                    <li class="dd-item" data-id="3" data-name="Services" data-slug="services-slug-3" data-new="0"
                        data-deleted="0">
                        <div class="dd-handle">Services</div>
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
                    <!--------------------------->

                </ol>
            </div>
        </div>
    </div>
</div>



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link href="../css/menu.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="style.css" rel="stylesheet">
<script>
    $('#nestable').nestable({
            maxDepth: 5
        })
        .on('change', updateOutput);
</script>
