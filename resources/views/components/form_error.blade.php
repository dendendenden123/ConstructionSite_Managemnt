@props(["for"])


<div style="color: red">
    @error($for)
      {{$message}}
    @enderror
</div>