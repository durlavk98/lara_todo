{{-- In work, do what you enjoy. --}}
<x-main>
  <div class="grid grid-cols-2">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900 mt-5">Today's Todo</h3>
      <p class="mt-1 text-sm text-gray-600">
        @foreach ($todos as $todo)
          @if ($todo->date == date('Y-m-d') )
            <livewire:component.todo-card :todo='$todo'>
          @endif
        @endforeach
      </p>
    </div>
    <div>
      <livewire:todo.create/>
    </div>
  </div>
</div>
  <div>
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Date
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Todo
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
            Actions
          </th>
        </tr>
      </thead>
      <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($todos as $todo)
          @if ($todo->date != date('Y-m-d') )
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="">
                    <div class="text-sm font-medium text-gray-900">
                      {{$todo->date}}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <a href="{{route('todo.show', $todo->id)}}" class="text-2xl no-underline hover:underline">
                  @if ($todo->completed)
                      <strike>{{$todo->title}}</strike>
                  @else
                      {{$todo->title}}
                  @endif
                </a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap flex">
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
              </td>
            </tr>
          @endif
        @endforeach
      </tbody>
    </table>
  </div>
</x-main>