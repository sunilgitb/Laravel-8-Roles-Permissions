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
                  @can('Application create')
                    <a href="{{route('admin.permissions.create')}}" class="bg-blue-500 text-blue font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">New Application</a>
                  @endcan
                </div>  @if(session('success'))
    <div class="alert alert-success" id="success-message-container">
        {{ session('success') }}
    </div>
@endif
<br>

    <div class="table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Resume</th>
            <th>Job Title</th>
            <th>Downloade Resume</th>
            <th>Date</th>
            <th>Actions</th>


          </tr>
        </thead>
        <tbody>
        @can('Application access')
                      @foreach($applications as $application)

          <tr>
            <td>{{ $application->name}}</td>
            <td>{{ $application->email}}</td>
            <td>
              @php
              $fileInfo = pathinfo($application->file);
              $extension = isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '';
              $fileName = 'Resume' . $extension;
              @endphp
              {{ $fileName }}</a>
            </td>
            <td>{{ $application->job_title}}</td>
                <td>
                   
                   <a href="{{ route('resumes.download', $application->id) }}">Download Resume</a>
               </td>
               <td>{{ $application->created_at->setTimezone('Asia/Kolkata') }}</td>

            <td class=" border-b border-grey text-right">
  <div class="">
    <div class="mr-2">
      @can('Application edit')
        <a href="{{ route('admin.applications.edit', $application->id) }}" class="btn btn-info" style="margin-right: 150px;">Edit</a>
      @endcan
    </div>
    <div>
      @can('Application delete')
        <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" class="inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger" style="margin-top:-40px;">Delete</button>
        </form>
      @endcan
    </div>
  </div>
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
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
