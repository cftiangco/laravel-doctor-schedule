<div class="mb-1 flex flex-col">
  <label for=""class="font-medium">{{$label}}</label>
  <input 
    type="{{$type}}"
    name="{{$name}}"
    id="{{$name}}"
    value="{{$value}}"
    placeholder="{{$placeHolder}}" 
    {{ $attributes->merge(["class" => "border outline-none focus:border-blue-400 active:border-blue-400 rounded px-3 py-1"]) }} 
  />
</div>