@props([
  'label' => '',
  'rows' => []
])
<div class="mb-1 flex flex-col">
    <label for=""class="font-medium">{{$label}}</label>
    <select name="" id="" {{ $attributes->merge(["class" => "border outline-none focus:border-blue-400 active:border-blue-400 rounded px-3 py-1"]) }} >
        @foreach ($rows as $row)
            <option value="{{$row['id']}}">{{ $row['description'] }}</option>
        @endforeach
    </select>
</div>