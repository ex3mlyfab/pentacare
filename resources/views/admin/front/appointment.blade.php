@extends('admin.admin')

@section('head_css')

<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/plugins/file-uploaders/dropzone.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/pages/data-list-view.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend')}}/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">


@endsection
@section('content')

    <!-- Nav Justified Starts -->
    <section id="nav-justified">
        <div class="row">
            <div class="col-sm-12">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h4 class="card-title">Appointments</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Today's Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="true">Pending Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="messages-tab-justified" data-toggle="tab" href="#messages-just" role="tab" aria-controls="messages-just" aria-selected="false">Missed Appointment</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="settings-tab-justified" data-toggle="tab" href="#settings-just" role="tab" aria-controls="settings-just" aria-selected="false">All Appointments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="settings-tab-justified" data-toggle="tab" href="#settings-just1" role="tab" aria-controls="settings-just" aria-selected="false"> Appointments Review</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content pt-1">
                                <div class="tab-pane active" id="home-just" role="tabpanel" aria-labelledby="home-tab-justified">
                                    @include('admin.front.includes.today')
                                </div>
                                <div class="tab-pane" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-justified">
                                    <p>
                                        Chocolate cake icing tiramisu liquorice toffee donut sweet roll cake. Cupcake dessert icing dragée
                                        dessert. Liquorice jujubes cake tart pie donut. Cotton candy candy canes lollipop liquorice chocolate
                                        marzipan muffin pie liquorice.
                                    </p>
                                </div>
                                <div class="tab-pane" id="messages-just" role="tabpanel" aria-labelledby="messages-tab-justified">
                                    <p>
                                        Tootsie roll oat cake I love bear claw I love caramels caramels halvah chocolate bar. Cotton candy
                                        gummi bears pudding pie apple pie cookie. Cheesecake jujubes lemon drops danish dessert I love
                                        caramels powder.
                                    </p>
                                </div>
                                <div class="tab-pane" id="settings-just" role="tabpanel" aria-labelledby="settings-tab-justified">
                                    <p>
                                        Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                                        pudding pastry.I love caramels caramels halvah chocolate bar. Cotton candy
                                        gummi bears pudding pie apple pie cookie.
                                    </p>
                                </div>
                                <div class="tab-pane" id="settings-just1" role="tabpanel" aria-labelledby="settings-tab-justified">
                                    <p>
                                        Biscuit powder jelly beans. Lollipop candy canes croissant icing chocolate cake. Cake fruitcake powder
                                        pudding pastry.I love caramels caramels halvah chocolate bar. Cotton candy
                                        gummi bears pudding pie apple pie cookie.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('foot_js')
<script src="{{asset('public/backend')}}/app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('public/backend')}}/app-assets/js/scripts/ui/data-list-view.js"></script>

@endsection
