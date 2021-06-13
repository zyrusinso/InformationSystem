<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Information System: Profile</title>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/familynunito.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome5-overrides.min.css') }}">
   
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
                    
                    <li class="nav-item"><a class="nav-link" href="/home"><i class="fas fa-tachometer-alt"></i><span>Home</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin/student"><i class="fas fa-table"></i><span>Students</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/user" <?php if($isAdmin != "admin"){ echo "hidden";} ?>><i class="fas fa-users"></i><span>Users</span></a></li>

                    
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">

            
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
            
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                    <!-- <a class="btn btn-outline-danger ml-3 btn-sm" href="/admin/student"> <i class="fas fa-arrow-left">Back</i> </a> -->
                    </div>
                
                    <div class="container-fluid"></i></button>
                        
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 "></span> 
                                    
                                    <span class="mr-2"></span>
                                    
                                    <img class="border rounded-circle img-profile" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" >
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                        </form>
                                    </div>
                                </div>
                                
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg" width="160" height="160">
                                <br/>@foreach ($students as $student) <a href="/profile/{{ $student->id }}/edit"  class="btn btn-primary <?php if($isAdmin != "admin"){ echo 'invisible';} ?>">Edit Profile</a> 
                                <form action="/profile/delete/{{ $student->id }}" method="POST">
                                @csrf
                                @method('DELETE')         
                                    <button type="submit" class="btn btn-danger mt-1 <?php if($isAdmin != "admin"){ echo 'invisible';} ?>" onclick="return confirm('Are you sure?')">Delete</a> 
                                    @endforeach
                                </form>
                                </div>
                            </div>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                @foreach ($students as $student)
                                    <h6 class="text-primary font-weight-bold m-0">School Info</h6>
                                    
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="last_name"><strong>Section</strong></label><input class="form-control" type="text" id="section" placeholder="{{ $student->section }}" name="section" disabled ></div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="first_name"><strong>Student ID</strong></label><input class="form-control" type="text" id="student_id" placeholder="{{ $student->stud_num }}" name="stud_num" disabled></div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="col">
                                                <div class="form-group"><label for="first_name"><strong>LRN</strong></label><input class="form-control" type="text" id="lrn" placeholder="{{ $student->lrn }}" name="lrn" disabled></div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-row text-center">
                                            <div class="col">
                                                <a  @foreach ($students as $student) href="/profile/{{ $student->id }}/grades" @endforeach class="btn btn-primary">Student Grades</a>
                                            </div>
                                            
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">User Information</p>
                                            
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-row">
                                                    <div class="col">
                                                    <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="{{ $student->first_name }}" name="first_name" disabled></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="{{ $student->last_name }}" name="last_name" disabled></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="first_name"><strong>Middle Name</strong></label><input class="form-control" type="text" id="middle_name" placeholder="{{ $student->middle_name }}" name="middle_name" disabled></div>
                                                    </div>
                                                    <div class="col">
                                                    <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="{{ $student->email }}" name="email" disabled></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>Age</strong></label><input class="form-control" type="text" id="age" placeholder="{{ $student->age }}" name="age" disabled ></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="last_name"><strong>gender</strong></label><input class="form-control" type="text" id="sex" placeholder="{{ $student->gender }}" name="sex" disabled ></div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card shadow">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 font-weight-bold">Contact Information</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="form-group"><label for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="{{ $student->address }}" name="address" disabled></div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>City</strong></label><input class="form-control" type="text" id="city" placeholder="{{ $student->city }}" name="city" disabled></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group"><label for="city"><strong>Contact Number</strong></label><input class="form-control" type="text" id="contactnum" placeholder="{{ $student->contact_num }}" name="contact_num" disabled></div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>©Made by: ICT-1212 Group 1</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>

    <script src="{{ asset('css/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('css/admin/jquery.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
</body>

</html>