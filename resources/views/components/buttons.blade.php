<div class="absolute w-full top-0 left-0 z-10 flex justify-end space-x-2 p-4">
    <div wire:click="delete()" class="cursor-pointer rounded-full shadow-md bg-white w-8 h-8 text-purple-500 flex justify-center items-center">
        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
    </div>
    <div @click="openModal()" class="cursor-pointer rounded-full shadow-md bg-white w-8 h-8 text-purple-500 flex justify-center items-center">
        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
    </div>
    <div wire:click="moveDown()" class="cursor-pointer rounded-full shadow-md bg-white w-8 h-8 text-purple-500 flex justify-center items-center">
        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
    </div>
    <div wire:click="moveUp()" class="cursor-pointer rounded-full shadow-md bg-white w-8 h-8 text-purple-500 flex justify-center items-center">
        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </div>
</div>