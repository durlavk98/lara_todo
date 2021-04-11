{{-- The best athlete wants his opponent at his best. --}}
<x-main>
    <div>
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Goal</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            This information will be displayed publicly so be careful what you share.
                        </p>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{ route('goal.update', $goal->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                        <label for="title" class="block text-sm font-medium text-gray-700">
                                            Title
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input value="{{$goal->title}}" type="text" name="title" id="title" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-900" placeholder="Complete Graduation">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                        <label for="timeline" class="block text-sm font-medium text-gray-700">
                                            Timeline
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input value="{{$goal->timeline}}" type="text" name="timeline" id="timeline" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-grey-900" placeholder="1 month/ 1 year">
                                        </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                        <label for="priority" class="block text-sm font-medium text-gray-700">
                                            Priority
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <select name="priority" id="priority" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-grey-900">
                                                <option value="high">High</option>
                                                <option value="medium">Medium</option>
                                                <option value="low">Low</option>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                    
                                    <div>
                                        <label for="description" class="block text-sm font-medium text-gray-700">
                                        Description
                                        </label>
                                        <div class="mt-1">
                                        <textarea id="description" name="description" rows="3" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-grey-900 rounded-md" placeholder="Write about the goal in 2-3 sentances."> {{$goal->description}}</textarea>
                                        </div>
                                        <p class="mt-2 text-sm text-gray-500">
                                        Brief description for your goal.
                                        </p>
                                    </div>
                                    
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                        <label for="last_date" class="block text-sm font-medium text-gray-700">
                                            Last Date
                                        </label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input value="{{$goal->last_date}}" type="date" name="last_date" id="last_date" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-grey-900">
                                        </div>
                                        </div>
                                    </div>

                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Update Goal
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>