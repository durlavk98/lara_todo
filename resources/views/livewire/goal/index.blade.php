{{-- Success is as dangerous as failure. --}}
<x-main>
    <div>
        <div class="bg-gray-50 my-2">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
              <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Set yours goals and don't stop</span>
                <span class="block text-green-400">till you get there.</span>
              </h2>
              <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                  <a href="{{route('goal.create')}}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-600 hover:bg-green-700">
                    Create Goal
                  </a>
                </div>
                <div class="ml-3 inline-flex rounded-md shadow">
                  <a href="#goals" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-green-600 bg-white hover:bg-green-50">
                    Your Goals
                  </a>
                </div>
              </div>
            </div>
        </div>
        <table class="min-w-full divide-y divide-gray-200" id="goals">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Priority
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Goal
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Timeline
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($goals as $goal)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                        <div class="">
                        <div class="text-sm font-medium text-gray-900">
                            <h1 class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{$goal->priority}}
                            </h1>
                        </div>
                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{route('goal.show', $goal->id)}}" class="text-2xl no-underline hover:underline">
                        @if ($goal->completed)
                            <strike>{{$goal->title}}</strike>
                        @else
                            {{$goal->title}}
                        @endif
                    </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                    <a href="{{route('goal.show', $goal->id)}}" class="text-2xl no-underline hover:underline">
                        {{$goal->timeline}}
                    </a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap flex">
                    <form action="{{route('goal.update', $goal->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <button class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Done
                        </button>
                    </form>
                    <a href="{{route('goal.edit', $goal->id)}}" class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                        Edit
                    </a>
                    <form action="{{route('goal.destroy', $goal->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-2 my-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Delete
                        </button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-main>