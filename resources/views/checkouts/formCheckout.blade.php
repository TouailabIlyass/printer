<div class="form-group row">
            <label for="quantite" class="col-sm-2 col-form-label">quantite</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="quantite" name="quantite"  value="{{old('quantite') ??  $checkout->quantite}}">
            @error('quantite') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">total</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="total" name="total"  value="{{old('total') ??  $checkout->total}}">
            @error('total') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

	@csrf