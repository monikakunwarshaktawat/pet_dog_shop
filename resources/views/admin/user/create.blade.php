 @extends('admin/layouts/app')
@section('main-content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Admin</h3>
              </div>
                @include('includes/message')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter user name" name="name">
                  </div>
                  
                   <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>

                   <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                  </div>
                   
                   <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" placeholder="confirm the password" name="confirm_password">
                  </div>
                                
                                    
                  <div class="form-group">
                <label>Assign Role:-</label>
                <div class="row">
                  @foreach ($roles as $role)
                      <div class="col-lg-3">
                        <div class="checkbox">
                       <p> <input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</p>
                        </div>
                      </div>
                  @endforeach
                </div>
                <!-- /.card-body -->
                     
        
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary mr-5">Submit</button>
                  <a class="btn btn-danger" href="{{route('user.index')}}">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
 
      <!-- ./row -->
    </section>
    <!-- /.content -->

  @endsection