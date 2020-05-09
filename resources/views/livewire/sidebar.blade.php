<div 
x-show="sidebar">
    <div class="fixed inset-0 flex z-40 justify-end">
        <div 
        x-show="sidebar" 
        x-transition:enter="transition-opacity ease-linear duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-linear duration-300"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0">
        <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>

        <div class="flex-shrink-0 w-14">
        <!-- Force sidebar to shrink to fit close icon -->
        </div>
        <div 
        x-show="sidebar" 
        x-transition:enter="transition ease-in-out duration-300 transform"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="-translate-x-0"
        x-transition:leave="transition ease-in-out duration-300 transform"
        x-transition:leave-start="-translate-x-0"
        x-transition:leave-end="translate-x-full"
        class="relative flex-1 flex flex-col max-w-2xl w-full bg-white">
        <div class="absolute top-0 left-0 -ml-14 p-1">
            <button @click="sidebar = false" class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600" aria-label="Close sidebar">
            <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex-shrink-0 flex items-center px-4">
            <img class="h-8 w-auto" src="/img/logos/workflow-logo-on-white.svg" alt="Workflow" />
            </div>
            <div class="mt-6 grid grid-cols-1 row-gap-6 col-gap-4 sm:grid-cols-6 px-4">
            <div class="sm:col-span-6">
                <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                CSS
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                <textarea wire:model="css" rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                
                
                </textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
            </div>
            </div>
        </div>
        <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
            <a href="#" class="flex-shrink-0 group block focus:outline-none">
            <div class="flex items-center">
                <div>
                <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </div>
                <div class="ml-3">
                <p class="text-base leading-6 font-medium text-gray-700 group-hover:text-gray-900">
                    Tom Cook
                </p>
                <p class="text-sm leading-5 font-medium text-gray-500 group-hover:text-gray-700 group-focus:underline transition ease-in-out duration-150">
                    View profile
                </p>
                </div>
            </div>
            </a>
        </div>
        </div>
    </div>
</div>