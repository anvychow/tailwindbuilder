<div>
    <div class="-translate-x-1/2 absolute bg-yellow-50 left-1/2 p-4 rounded-md transform z-50" wire:loading>
        <div class="flex">
            <div class="flex-shrink-0">
            <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
            </svg>
            </div>
            <div class="ml-3">
            <h3 class="text-sm leading-5 font-medium text-yellow-800">
                PLEASE WAIT
            </h3>
            <div class="mt-2 text-sm leading-5 text-yellow-700">
                <p>
                Please wait while we load your workspace
                </p>
            </div>
            </div>
        </div>
    </div>
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
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Page Title</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" wire:model="title" class="form-input block w-full sm:text-sm sm:leading-5" />
                        </div>
                    </div>
                    <div class="sm:col-span-6 pointer-disabled opacity-50">
                        <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                        CSS
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                        <textarea wire:model="css" disabled rows="3" class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        
                        
                        </textarea>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">COMING SOON</p>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 flex border-t border-gray-200 p-4">
                <a href="#" class="flex-shrink-0 group block focus:outline-none">
                <div class="flex items-center">
                    <div>
                    {{-- <button wire:click="save">save</button> --}}
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>