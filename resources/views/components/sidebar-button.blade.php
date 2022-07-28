<a href="{{$location}}" class="group {{ $isSelected ? 'border-l-8 border-blue-500':'' }}">
  <li class="flex flex-col items-center border p-3 text-gray-600">
    @if(!$isSelected)
      <div class="h-5 md:h-12 w-2 bg-blue-400 absolute left-0 rounded hidden group-hover:block"></div>
    @endif
    {{ $slot }}
    <span class="hidden md:block">{{ $label }}<span>
  </li>
</a>