{{-- Success is as dangerous as failure. --}}
    <div>
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <h1 class="text-lg mb-2 text-center font-bold">Create a new todo here</h1>
                    <form action="{{ route('todo.store')}}" method="POST">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="title" class="block text-sm font-medium text-gray-700">
                                        Title
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="title" id="title" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-900" placeholder="Go to gym/ Do laundry">
                                    </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                    <label for="date" class="block text-sm font-medium text-gray-700">
                                        Date
                                    </label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="date" name="date" id="date" class="p-2 focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-grey-900" value="{{date('Y-m-d')}}" disabled>
                                    </div>
                                    </div>
                                </div>
                
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700">
                                    Description
                                    </label>
                                    <div class="mt-1">
                                    <textarea id="description" name="description" rows="3" class="p-2 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-grey-900 rounded-md" placeholder="Write about the tournament in 2-3 sentances."></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">
                                    Brief description for your todo.
                                    </p>
                                </div>

                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Create New Todo
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
