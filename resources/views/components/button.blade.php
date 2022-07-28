@switch($skin)
  @case('primary')
    <button 
      type="{{$type}}" 
      class="bg-blue-500 text-white rounded shadow text-sm px-1 py-1 md:px-5 md:py-2 md:text-md hover:bg-blue-400"
    >{{$label}}</button>
  @break
  @case('danger')
    <button 
      type="{{$type}}" 
      class="bg-red-500 text-white px-5 py-2 rounded shadow hover:bg-red-400"
    >{{$label}}</button>
  @break
@endswitch
