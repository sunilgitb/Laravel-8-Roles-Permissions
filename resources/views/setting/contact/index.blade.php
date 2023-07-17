@extends('admin.layouts.apps')
@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">DataTable with default features</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body" style="margin-left: 250px;">

  
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
        @can('Contact access')
        @foreach($contacts as $contact)
          <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
           
      @endforeach
    </td>
            <td>
            @can('Contact edit')
                          <a href="{{route('contact.edit',$contact->id)}}" class="btn btn-info btn-sm" style="margin-right: 150px;">Edit</a>
                          @endcan

                          @can('contact delete')
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
