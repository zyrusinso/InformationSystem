<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Information System: Home</title>
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/familynunito.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   
  
</head>

<header><meta name="csrf-token" content="{{ csrf_token() }}" /></header>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    
                    <li class="nav-item"><a class="nav-link active" href=""><i class="fas fa-tachometer-alt"></i><span>Home</span></a></li>
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
                        
                        <ul class="navbar-nav flex-nowrap ml-auto">
                            
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"></span><img class="border rounded-circle img-profile" src="https://t4.ftcdn.net/jpg/00/64/67/63/360_F_64676383_LdbmhiNM6Ypzb3FM4PPuFP9rHe7ri8Ju.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="profile/1"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <button type="button" class="dropdown-item"  data-toggle="modal" data-target="#myModal" id="open"><i class="fas fa-cog fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Account Settings</button>
                                     
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
                
                <!-- My modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Account Settings</h5>
                    
                        </button>
                        
                    </div>
                    
                    <div class="modal-body">      
                    <div class="alert alert-danger" style="display:none"></div>
      
                    <div class="row register-form">
                    <div class="col-md-12 ">

                        @foreach ($authUser as $user)
                            <form action="/admin/{{ $user->id }}" id="my_form" method="POST">
                            {{csrf_field()}}
                            @method('PATCH')
            
                            
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control " type="text" id="name" name="name" value="{{ old('name') ??  $user->name }}"></div>
                            </div>
                            <div class="form-row form-group" style="margin-bottom: 5px;">
                                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email</label></div>
                                <div class="col-sm-6 input-column"><input class="form-control" type="email" id="email" name="email" value="{{ old('email') ??  $user->email  }}"></div>
                            </div>
                            <div class="form-row form-group" >
                                
                                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                                    <div class="col-sm-6 input-column"><input class="form-control" type="password" name="password" id="password" ><span style="font-size: 12px; opacity: 0.8;" style="margin-bottom: 5px;">Leave as blank if you don't want to change password</span></div>
                                
                            </div>
                            
                            
                    </div>
                    
                </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" id="ajaxSubmit" >Save</button> 
                        <!-- onclick="showModal()" -->
                        
                        
                    </div>
                    </div>
                    </form>
                    @endforeach 
                    
                    
                </div>
                </div>


                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Home</h3></a>
                    </div>
                    
                </div>
                    <form>
                        <div class="row" style="margin-right: 1.25rem; margin-left: 2.25rem;">
                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <h1>New Registered</h1>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">Newly Registered: 4</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-content pt-3 pl-3 pb-1">
                                            <div class="widget-chart-flex">
                                                <div class="widget-numbers">
                                                    <div class="widget-chart-flex">
                                                        <div class="fsize-4">
                                                            <h1>Student List <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="/admin/student">View</a></h1>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="widget-subheading mb-0 opacity-5">No. Of Students: 19</h6>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </form>
                        
                    
                </div>
                
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('css/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('css/admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/chart.min.js') }}"></script>
    <script src="{{ asset('css/admin/js/bs-init.js') }}"></script>
    <script src="{{ asset('css/admin/jquery.js') }}"></script>
    <script src="{{ asset('css/admin/js/theme.js') }}"></script>
    <script>
        function form_submit(e) {
        e.preventDefault();
        document.getElementById("my_form").submit();
        }

        

    </script>

    <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               
               jQuery.ajax({
                  url: "/admin/{{ $user->id }}",
                  method: 'patch',
                  data: {
                     _token:'{{ csrf_token() }}',
                     name: jQuery('#name').val(),
                     email: jQuery('#email').val(),
                     oldpassword: jQuery('#oldpassword').val(),
                     password: jQuery('#password').val(),
                     
                  },
                  success: function(result){
                  	if(result.errors)
                  	{
                        $(document).ready(function(){
                            $("#myModal").modal('show');
                        });

                  		jQuery('.alert-danger').html('');

                  		jQuery.each(result.errors, function(key, value){
                  			jQuery('.alert-danger').show();
                  			jQuery('.alert-danger').append('<li>'+value+'</li>');
                  		});
                  	}
                  	else
                  	{
                  		jQuery('.alert-danger').hide();
                  		$('#open').hide();
                  		$('#myModal').modal('show');
                  	}
                  }});
               });
            });
      </script>


</body>
</html>
</body>

</html>