<x-app-layout :assets="$assets ?? []" :titleSubHeader="$titleSubHeader ?? 'Huellitas Saludables'" :descriptionSubHeader="$descriptionSubHeader ?? 'Veterinaria'">
    <div>
       {!! Form::open(['route' => ['clientes.store'], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
       <div class="row">
          <div class="col-xl-12 col-lg-8">
             <div class="card">
                <div class="card-header d-flex justify-content-between">
                   <div class="header-title">
                      <h4 class="card-title">Registrar nuevo Cliente</h4>
                   </div>
                   <div class="card-action">
                         <a href="{{route('clientes.index')}}" class="btn btn-sm btn-primary" role="button">Back</a>
                   </div>
                </div>
                <div class="card-body">
                   <div class="new-user-info">
                         <div class="row">
                            <div class="form-group col-md-6">
                               <label class="form-label" for="fname">First Name: <span class="text-danger">*</span></label>
                               {{ Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'First Name', 'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="lname">Last Name: <span class="text-danger">*</span></label>
                               {{ Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Last Name' ,'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="add1">Street Address 1:</label>
                               {{ Form::text('userProfile[street_addr_1]', old('userProfile[street_addr_1]'), ['class' => 'form-control', 'id' => 'add1', 'placeholder' => 'Enter Street Address 1']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="add2">Street Address 2:</label>
                               {{ Form::text('userProfile[street_addr_2]', old('userProfile[street_addr_2]'), ['class' => 'form-control', 'id' => 'add2', 'placeholder' => 'Enter Street Address 2']) }}
                            </div>
                            <div class="form-group col-md-12">
                               <label class="form-label" for="cname">Company Name: <span class="text-danger">*</span></label>
                               {{ Form::text('userProfile[company_name]', old('userProfile[company_name]'), ['class' => 'form-control', 'required', 'placeholder' => 'Company Name']) }}
                            </div>
                            <div class="form-group col-sm-12">
                               <label class="form-label" id="country">Country:</label>
                               {{ Form::text('userProfile[country]', old('userProfile[country]'), ['class' => 'form-control', 'id' => 'country']) }}

                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="mobno">Mobile Number:</label>
                               {{ Form::text('userProfile[phone_number]', old('userProfile[phone_number]'), ['class' => 'form-control', 'id' => 'mobno', 'placeholder' => 'Mobile Number']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="altconno">Alternate Contact:</label>
                               {{ Form::text('userProfile[alt_phone_number]', old('userProfile[alt_phone_number]'), ['class' => 'form-control', 'id' => 'altconno', 'placeholder' => 'Alternate Contact']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="email">Email: <span class="text-danger">*</span></label>
                               {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter e-mail', 'required']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="pno">Pin Code:</label>
                               {{ Form::number('userProfile[pin_code]', old('userProfile[pin_code]'), ['class' => 'form-control', 'id' => 'pin_code','step' => 'any']) }}
                            </div>
                            <div class="form-group col-md-12">
                               <label class="form-label" for="city">Town/City:</label>
                               {{ Form::text('userProfile[city]', old('city'), ['class' => 'form-control', 'id' => 'city', 'placeholder' => 'Enter City Name' ]) }}
                            </div>
                         </div>
                         <hr>
                         <h5 class="mb-3">Security</h5>
                         <div class="row">
                            <div class="form-group col-md-12">
                               <label class="form-label" for="uname">User Name: <span class="text-danger">*</span></label>
                               {{ Form::text('username', old('username'), ['class' => 'form-control', 'required', 'placeholder' => 'Enter Username']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="pass">Password:</label>
                               {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                            </div>
                            <div class="form-group col-md-6">
                               <label class="form-label" for="rpass">Repeat Password:</label>
                               {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Repeat Password']) }}
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                   </div>
                </div>
             </div>
          </div>
         </div>
         {!! Form::close() !!}
    </div>
 </x-app-layout>
