@extends('admin.layouts.apps')
@section('content')
   <div class="container mx-auto" style="max-width: 800px;">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        @if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.contacts.update',$contact->id)}}">
                  @csrf
                  @method('put')
                  <div class="flex flex-col space-y-2">
                    <label for="title" class="text-gray-700 select-none font-medium">Name</label>
                    <input id="title" type="text" name="name" value="{{ old('name',$contact->name) }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>
                  <div class="flex flex-col space-y-2">
                    <label for="title" class="text-gray-700 select-none font-medium">Email</label>
                    <input id="title" type="text" name="email" value="{{ old('email',$contact->email) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                </div>

               

                <h3 class="text-xl my-4 text-gray-600">Role</h3>
                <div class="grid grid-cols-3 gap-4">
                  <div class="relative inline-flex">

                    <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="publish">
                      <option value="0">Draft</option>
                      <option value="1" @if($contact->publish) selected @endif>Publish</option>
                    </select>
                  </div>
                </div>
                <div class="text-center mt-16 mb-16">
                  <button type="submit" class="btn btn-info">Submit</button>
                </div>
              </div>


            </div>
        </main>
    </div>
</div>
@endsection
