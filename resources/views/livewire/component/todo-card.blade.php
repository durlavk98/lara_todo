{{-- The whole world belongs to you --}}
<div class="align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all my-8 align-middle w-full max-w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
      <div class="flex justify-between items-center">
        <div class="sm:flex sm:items-start">
          <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
            <i class="fas fa-chess"></i>
          </div>
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <div class="flex justify-between">
              <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                  <a href="{{route('todo.show', $todo->id)}}" class="text-2xl no-underline hover:underline">
                    @if ($todo->completed)
                        <strike>{{$todo->title}}</strike>
                    @else
                        {{$todo->title}}
                    @endif
                  </a>
                </h3>
                <p>{{$todo->date}}</p>
              </div>
            </div>
            <div class="mt-2">
              <p class="text-sm text-gray-500">
                {{$todo->description}}
              </p>
            </div>
          </div>
        </div>
        <div class="flex flex-col">
          <form action="{{route('todo.update', $todo->id)}}" method="POST">
            @csrf
            @method('PUT')
            <button class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
              Done
            </button>
          </form>
          <a href="{{route('todo.edit', $todo->id)}}" class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
            Edit
          </a>
          <form action="{{route('todo.destroy', $todo->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
              Delete
            </button>
          </form>
        </div>
      </div>
    </div>
</div>
  
