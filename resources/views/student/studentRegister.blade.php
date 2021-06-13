<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Information System: Students</title>
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
                    
                    <li class="nav-item"><a class="nav-link " href="/home" ><i class="fas fa-tachometer-alt"></i><span>Home</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="admin/student"><i class="fas fa-table"></i><span>Students</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                    <a class="btn btn-outline-danger ml-3 btn-sm" href="/admin/student"> <i class="fas fa-arrow-left">Back</i> </a>
                    </div>
                </nav>
               

                <div class="row register-form ">
                    <div class="col-md-8 offset-md-2 ">
                        <form action="/admin/student" method="post" class="custom-form shadow" style="margin-top: 29px;">
                            @csrf

                            @if (count($errors) > 0)
                                <div class = "alert alert-danger">
                                    <ul>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br/>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif

                            <h1 style="height: 55px;">Register Students</h1>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">First Name</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control " type="text" name="first_name" value="{{ old('first_name') }}"></div>
                                
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Last Name</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control " type="text" name="last_name" value="{{ old('last_name') }}"></div>
                                
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Middle Name</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="middle_name" value="{{ old('middle_name') }}"></div>
                            </div>

                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">LRN</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="number" name="lrn" value="{{ old('lrn') }}"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Student ID</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="text" name="stud_num" value="{{ old('stud_num') }}"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Age</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="number" style="width: 60px;" name="age" value="{{ old('age') }}" min="0"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Date of Birth</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" placeholder="mm/dd/yyyy"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Section</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="number" style="width: 90px;" name="section" value="{{ old('section') }}" min="1100" max="3000"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Gender</label></div>
                                <div class="col-sm-6 input-column">
                                    <div class="dropdown">
                                        <select class="btn btn-primary dropdown-toggle" name="gender">
                                        <div class="dropdown-menu">
                                            <option class="dropdown-item"> -- Select --</a>
                                            <option class="dropdown-item" value="male"  @if (old('gender') == "male") {{ 'selected' }} @endif>Male</a>
                                            <option class="dropdown-item" value="female" @if (old('gender') == "female") {{ 'selected' }} @endif>Female</a>
                                        </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" value="{{ old('email') }}"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="pass" id="pass"></div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="password" name="pass_confirmation"></div>
                            </div>
                        <button class="btn btn-light submit-button" type="submit" style="padding: 5px 22px;padding-right: 20px;padding-top: 9px;padding-bottom: 8px;">Submit Form</button>
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