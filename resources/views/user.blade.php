<!DOCTYPE html>
<html>

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
                    <li class="nav-item"><a class="nav-link active" href=""><i class="fas fa-users"></i><span>Users</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 "></span> 
                                    
                                    <span class="mr-2"></span>
                                    
                                    <img class="border rounded-circle img-profile" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" @foreach ($users as $user) href="/profile/{{ $user->id }}" @endforeach><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                    
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
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Users</h3></a>
                    </div>
                    <div class="container-fluid">
                    
                        <div class="card shadow">
                            
                            <div class="card-body">
                                <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                                    <table class="table" id="dataTable">
                                        <thead>

                                            <tr>
                                                <th style="padding-left: 10px;padding-right: 10px">ID</th>
                                                <th style="padding-left: 10px;padding-right: 10px">Name</th>
                                                <th style="padding-left: 10px;padding-right: 10px">Email</th>
                                                <th style="padding-left: 10px;padding-right: 10px">Role</th>
                                                <th style="padding-left: 10px;padding-right: 10px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($userList as $user)
                                        
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                
                                                <td><?php if($user->role == "admin")
                                                    echo "admin";
                                                    else
                                                        echo "user";
                                                    
                                                ?>
                                                
                                                </td>
                                                
                                                <td><a class="btn btn-primary btn-sm" role="button" href="/user/{{ $user->id }}/edit">Edit</a>
                                                
                                                    
                                                    <form action="/user/delete/{{ $user->id }}" method="POST">
                                                    
                                                    @csrf
                                                    @method('DELETE')         
                                                        <button type="submit" class="btn btn-danger mt-1" onclick="return confirm('Are you sure?')">Delete</a> 
                                                        
                                                    </form>
                                                    
                                
                                                </td>
                                                
                                            </tr>
                                            
                                        @endforeach
                                        </tbody>
                                        
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div>
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
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>