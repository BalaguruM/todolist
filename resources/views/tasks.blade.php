 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todo') }}
        </h2>
    </x-slot>  
  <div class="py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-white">
			<form  role="form" action="{{ route('tasks.post') }}" method="post" id="tasks-form">
			@csrf
            <div class="text-center pt-3 pb-2"> 
                <div class="card">
                  <div class="d-flex flex-row align-items-center">
				     
				    <input type="text" name="title" class="form-control" id=""
                      placeholder="Title...">
					 
                    <input type="text" name="description" class="form-control" id=""
                      placeholder="Description----">
                   
                    <div>
                      <button type="submit" class="badge bg-primary">Add</button>
                    </div>
                  </div>
                </div>
            </div>
			</form>

            <table class="table text-white mb-0">
              <thead>
                <tr>
                 <!-- <th scope="col">User</th> -->
                  <th scope="col">Title</th>				  
                  <th scope="col">Description</th>
                  <th scope="col">Priority</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
			  @foreach($data as $tasks)
                <tr class="fw-normal">			
                <!--  <th>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                      alt="avatar 1" style="width: 45px; height: auto;">
                    <span class="ms-2">{{ $tasks->name }}</span>
                  </th> -->
                  <td class="align-middle">
                    <span>{{ $tasks->title }}</span>
                  </td>
				  <td class="align-middle">
                    <span>{{ $tasks->description }}</span>
                  </td>
                  <td class="align-middle">
                    <h6 class="mb-0"><span class="badge bg-danger">{{ $tasks->status }}</span></h6>
                  </td>
                  <td class="align-middle">
                    <a href="#!" data-mdb-toggle="tooltip" title="Done"><i
                        class="fas fa-check fa-lg text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove"><i
                        class="fas fa-trash-alt fa-lg text-warning"></i></a>
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
</section>
</x-app-layout>