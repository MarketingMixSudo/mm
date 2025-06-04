<div class="border-b border-primary-400">
  <button data-id="{{ $id }}" class="accordion-btn w-full flex justify-between items-center py-5 cursor-pointer">
    <span class="font-semibold font-heading">{{ $title }}</span>
    <span id="icon-{{ $id }}" class="text-primary-400 transition-transform duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    </span>
  </button>
  <div id="content-{{ $id }}" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
    <div class="pb-5">
      {{ $slot }}
    </div>
  </div>
</div>
