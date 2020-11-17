<div class="form-group row">
            <label for="categorie" class="col-sm-2 col-form-label">categorie</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="categorie" name="categorie"  value="{{old('categorie') ??  $categorie->categorie}}">
            @error('categorie') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

	@csrf