@extends('admin.layouts.apps')
@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body" style="margin-left: 250px;">

  <div class="container mx-auto px-6 py-2">
                <div class="text-right">
                  @can('Role create')
                    <a href="{{route('admin.roles.create')}}" class="bg-blue-500 text-blue font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Role</a>
                </div>
                @endcan
  @if(session('success'))
    <div class="alert alert-success" id="success-message-container">
        {{ session('success') }}
    </div>
@endif
<br>

    <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Role Name</th>
            <th>Permissions</th>
            <th>Actions</th>


          </tr>
        </thead>
        <tbody>
        @can('Role access')
        @foreach($roles as $role)
          <tr>
            <td>{{ $role->name }}</td>
            <td style="height: 70%!important;">
      @foreach($role->permissions as $permission)
      <span style="height: 50%; font-size: 18px!important;" class="inline-flex items-center justify-center px-2 py-2 mr-2 text-xs font-bold leading-none text-blue bg-gray-500 rounded-full">{{ $permission->name }}</span>
      @endforeach
    </td>
            <td>
            @can('Role edit')
                          <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-info btn-sm" style="margin-right: 150px;">Edit</a>
                          @endcan

                          @can('Role delete')
                          <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" class="inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-sm btn-danger" style="margin-top:-30px; margin-left: 50px;">Delete</button>
                          </form>
                          @endcan
                </td>



          </tr>
          @endforeach
                    @endcan


          <!-- Add more table rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- /.card-body -->
</div>

@endsection

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
