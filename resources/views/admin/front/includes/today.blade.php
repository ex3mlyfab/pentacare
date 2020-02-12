 <!-- Data list view starts -->
 <section id="data-thumb-view" class="data-thumb-view-header">
    <div class="action-btns d-none">
        <div class="btn-dropdown mr-1 mb-1">
            <div class="btn-group dropdown actions-dropodown">
                <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
                    <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
                </div>
            </div>
        </div>
    </div>
    <!-- dataTable starts -->
    <div class="table-responsive">
        <table class="table data-thumb-view">
            <thead>
                <tr>
                    <th></th>
                    <th>Image</th>
                    <th>NAME</th>
                    <th>FOLDER NO</th>
                    <th>TO SEE</th>
                    <th>STATUS</th>
                    <th>PAYMENT STATUS</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td class="product-img"><img src="../../../app-assets/images/elements/apple-watch.png" alt="Img placeholder">
                    </td>
                    <td class="product-name">Apple Watch series 4 GPS</td>
                    <td class="product-category">Computers</td>
                    <td>
                        <div class="progress progress-bar-success">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:97%"></div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">on hold</div>
                            </div>
                        </div>
                    </td>
                    <td class="product-price">$69.99</td>
                    <td class="product-action">
                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="product-img"><img src="../../../app-assets/images/elements/magic-mouse.png" alt="Img placeholder">
                    </td>
                    <td class="product-name">Beats HeadPhones</td>
                    <td class="product-category">Computers</td>
                    <td>
                        <div class="progress progress-bar-primary">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="40" aria-valuemax="100" style="width:83%"></div>
                        </div>
                    </td>
                    <td>
                        <div class="chip chip-success">
                            <div class="chip-body">
                                <div class="chip-text">Delivered</div>
                            </div>
                        </div>
                    </td>
                    <td class="product-price">$69.99</td>
                    <td class="product-action">
                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>
    <!-- dataTable ends -->

    <!-- add new sidebar starts -->
    <div class="add-new-data-sidebar">
        <div class="overlay-bg"></div>
        <div class="add-new-data">
            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                <div>
                    <h4 class="text-uppercase">Thumb View Data</h4>
                </div>
                <div class="hide-data-sidebar">
                    <i class="feather icon-x"></i>
                </div>
            </div>
            <div class="data-items pb-3">
                <div class="data-fields px-2 mt-3">
                    <div class="row">
                        <div class="col-sm-12 data-field-col">
                            <label for="data-name">Name</label>
                            <input type="text" class="form-control" id="data-name">
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-category"> Category </label>
                            <select class="form-control" id="data-category">
                                <option>Audio</option>
                                <option>Computers</option>
                                <option>Fitness</option>
                                <option>Appliance</option>
                            </select>
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-status">Order Status</label>
                            <select class="form-control" id="data-status">
                                <option>Pending</option>
                                <option>Canceled</option>
                                <option>Delivered</option>
                                <option>On Hold</option>
                            </select>
                        </div>
                        <div class="col-sm-12 data-field-col">
                            <label for="data-price">Price</label>
                            <input type="text" class="form-control" id="data-price">
                        </div>
                        <div class="col-sm-12 data-field-col data-list-upload">
                            <form action="#" class="dropzone dropzone-area" id="dataListUpload">
                                <div class="dz-message">Upload Image</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                <div class="add-data-btn">
                    <button class="btn btn-primary">Add Data</button>
                </div>
                <div class="cancel-data-btn">
                    <button class="btn btn-outline-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- add new sidebar ends -->
</section>
<!-- Data list view end -->
