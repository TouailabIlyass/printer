<div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">email</label>
            <div class="col-sm-10">
            <input type="email"  class="form-control" id="email" name="email"  value="{{old('email') ??  $command->email}}">
            @error('email') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">phone</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="phone" name="phone"  value="{{old('phone') ??  $command->phone}}">
            @error('phone') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">firstname</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="firstname" name="firstname"  value="{{old('firstname') ??  $command->firstname}}">
            @error('firstname') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="lastname" class="col-sm-2 col-form-label">lastname</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="lastname" name="lastname"  value="{{old('lastname') ??  $command->lastname}}">
            @error('lastname') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="area" class="col-sm-2 col-form-label">area</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="area" name="area"  value="{{old('area') ??  $command->area}}">
            @error('area') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">address</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="address" name="address"  value="{{old('address') ??  $command->address}}">
            @error('address') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="postalcode" class="col-sm-2 col-form-label">postalcode</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="postalcode" name="postalcode"  value="{{old('postalcode') ??  $command->postalcode}}">
            @error('postalcode') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="house" class="col-sm-2 col-form-label">house</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="house" name="house"  value="{{old('house') ??  $command->house}}">
            @error('house') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="country" class="col-sm-2 col-form-label">country</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="country" name="country"  value="{{old('country') ??  $command->country}}">
            @error('country') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="type_payment" class="col-sm-2 col-form-label">type_payment</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="type_payment" name="type_payment"  value="{{old('type_payment') ??  $command->type_payment}}">
            @error('type_payment') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="mail_paypal" class="col-sm-2 col-form-label">mail_paypal</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="mail_paypal" name="mail_paypal"  value="{{old('mail_paypal') ??  $command->mail_paypal}}">
            @error('mail_paypal') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

<div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">total</label>
            <div class="col-sm-10">
            <input type="text"  class="form-control" id="total" name="total"  value="{{old('total') ??  $command->total}}">
            @error('total') <p style="color:red;"> {{$message}}</p>@enderror
            </div>
        </div>
        

	@csrf