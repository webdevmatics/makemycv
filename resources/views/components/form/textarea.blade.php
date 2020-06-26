@props(['name','value'=>null])

<div class="form-group">
  <label for="{{$name}}">Summary</label>
<textarea class="form-control" name="{{$name}}" id="{{$name}}" rows="3">{{$value}}</textarea>
</div>
