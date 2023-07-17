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
            @can('Job create')
              <a href="{{route('admin.contacts.create')}}" class="bg-blue-500 text-blue font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Job</a>
            @endcan
          </div>
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
            <th>Title</th>
            <th>Email</th>
            <th>Actions</th>


          </tr>
        </thead>
        <tbody>
        @can('Contact access')
                @foreach($contacts as $contact)
                <tr class="hover:bg-grey-lighter">
                  <td class="py-4 px-6 border-b border-grey-light">{{ $contact->name }}</td>
                  <td class="py-4 px-6 border-b border-grey-light">{{ $contact->email }}</td>
                 
                  <td class="py-4 px-6 border-b border-grey-light text-right">

                    @can('Contact edit')
                    <a href="{{route('admin.contacts.edit',$contact->id)}}" class="btn btn-info" style="margin-right: 150px;">Edit</a>
                    @endcan

                    @can('Contact delete')
                    <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" class="inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" style="margin-top:-40px; margin-left: 50px;">Delete</button>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
