<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Information System: Edit Users</title>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/familynunito.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/DataTables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/Register/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register/css/Pretty-Registration-Form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Register/css/styles.css') }}">
</head>


<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    
                    <li class="nav-item"><a class="nav-link " href="/home"><i class="fas fa-tachometer-alt"></i><span>Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/student"><i class="fas fa-table"></i><span>Students</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/user"><i class="fas fa-users"></i><span>Users</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    @foreach ($users as $student)
                    <a class="btn btn-outline-danger ml-3 btn-sm" href="/user"> <i class="fas fa-arrow-left">Back</i> </a>
                    </div>
                </nav>
               
               

                <div class="row register-form ">
                    <div class="col-md-8 offset-md-2 ">
                    
                        <form action="/user/{{ $student->id }}" method="post" class="custom-form shadow" style="margin-top: 29px;">
                            @csrf
                            @method('PATCH')

                            @if (count($errors) > 0)
                                <div class = "alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br/>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            @foreach ($users as $user)
                                <h1 style="height: 55px;">Edit Users</h1>
                                <div class="form-row form-group" style="margin-bottom: 5px;">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name</label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control " type="text" name="name" value="{{ old('name') ?? $user->name }}"></div>
                                    
                                </div>
                                <div class="form-row form-group" style="margin-bottom: 5px;">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" value="{{ old('email') ?? $user->email}}"></div>
                                </div>
                                <div class="form-row form-group" style="margin-bottom: 5px;">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Role</label></div>
                                    <div class="col-sm-6 input-column">
                                        <div class="dropdown">
                                            <select class="btn btn-primary dropdown-toggle" name="role">
                                            <div class="dropdown-menu">
                                                <?php 
                                                echo '<option class="dropdown-item" value="admin"'.(($user->role == "admin") ? "selected" : ""). '>Admin</a>';
                                                echo '<option class="dropdown-item" value="0"'.(($user->role != "admin") ? "selected" : ""). '>User</a>';
                                                ?>
                                                
                                            </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row form-group" style="margin-bottom: 5px;">
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password" id="password"><span style="font-size: 12px; opacity: 0.8;">Leave as Blank if you don't want to change password</span></div>
                                </div>
                            @endforeach
                            
                        <button class="btn btn-light submit-button" type="submit" style="padding: 5px 22px;padding-right: 20px;padding-top: 9px;padding-bottom: 8px;">Save Changes</button>
                        @endforeach
                        </form>
                    </div>
                    
                </div>
                
            </div>

            

            
                    
            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('css/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('css/admin/jquery.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
    <script type="text/javascript" src="{{ asset('css/DataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('css/Register/js/jquery.min.js') }} "></script>
    <script src="{{ asset('css/Register/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/Register/js/Multi-step-form.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        });
    </script>

</html>