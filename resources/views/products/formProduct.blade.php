<div class="form-group row">
            <label for="intitule" class="col-sm-2 col-form-label">intitule</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="intitule" name="intitule"  value="{{old('intitule') ??  $product->intitule}}">
            @error('intitule') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">description</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="description" name="description"  value="{{old('description') ??  $product->description}}">
            @error('description') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="categorie_id" class="col-sm-2 col-form-label">categorie_id</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="categorie_id" name="categorie_id"  value="{{old('categorie_id') ??  $product->categorie_id}}">
            @error('categorie_id') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="prix" class="col-sm-2 col-form-label">prix</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="prix" name="prix"  value="{{old('prix') ??  $product->prix}}">
            @error('prix') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="size" class="col-sm-2 col-form-label">size</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="size" name="size"  value="{{old('size') ??  $product->size}}">
            @error('size') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="color" class="col-sm-2 col-form-label">color</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="color" name="color"  value="{{old('color') ??  $product->color}}">
            @error('color') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

	@csrf