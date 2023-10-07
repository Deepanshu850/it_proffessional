<!--perform database connection-->
<?php

include "include/header.php";
include "include/sidebar.php"; ?>



<!-- ...Rest of your HTML code... -->

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title bg-warning">
                <div class="bg-secondary rounded p-2 m-2">
                    <h3 class="text-dark text-center">Client table</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manage <b>clients</b></h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#addclientModal" class="btn btn-success" data-toggle="modal">
                            <i class="material-icons">&#xE147;</i><span>Add New client</span>
                        </a>
                    </div>
                </div>

            </div>
            <table id="client_table" class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="client_data">
                </tbody>
            </table>
            <p class="loading">Loading Data</p>
        </div>
    </div>
</div>

<!-- add Modal HTML -->
<form id="addform" method="post">

    <div id="addclientModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add client</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body add_epmployee">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="name_input" name="name_input" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address_input" id="address_input"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" id="phone_input" name="phone_input" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <!-- perfroming action on buttion using onclick
                     method and just invoking the perticular function call -->
                    <input type="submit" class="btn btn-success" value="Add"  >
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Edit Modal HTML -->
<div id="editclientModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body edit_client">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name_input" id="name_input" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" name="address_input" id="address_input" required></textarea>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" id="phone_input" name="phone_input" class="form-control" required>
                    <input type="hidden" id="client_id" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <!-- perfroming action on buttion using onclick
                     method and just invoking the perticular function call -->
                <input type="submit" class="btn btn-info" onclick="editclient()" value="Save">
            </div>
        </div>
    </div>
</div>

<!-- View Modal HTML -->
<div id="viewclientModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body view_client">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" id="name_input" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" id="address_input" readonly></textarea>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" id="phone_input" class="form-control" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Close">
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteclientModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete client</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete these Records?</p>
                <p class="text-warning"><small>This action cannot be undone.</small></p>
            </div>
            <input type="hidden" id="delete_id">
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <!-- perfroming action on buttion using onclick
                     method and just invoking the perticular function call -->
                <input type="submit" class="btn btn-danger" onclick="deleteclient()" value="Delete">
            </div>
        </div>
    </div>
</div>

<!-- including ajax file in js folder -->
<script src="js\client.js"></script>

<!-- including footer -->
<?php include "include/footer.php"; ?>