<x-guest-layout>
    <section class="login-content">
       <div class="row m-0 align-items-center bg-white vh-100">
          <div class="col-md-6">
             <div class="row justify-content-center">
                <div class="col-md-10">
                   <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card" style="z-index: 2;">
                      <div class="card-body">
                         <a href="{{route('dashboard')}}" class="navbar-brand d-flex align-items-center mb-3">
                            <!-- Cambio de icono a uno más adecuado para una veterinaria -->
                            <img src="{{asset('images/logo/veterinary-logo.png')}}" width="100" class="text-primary border border-primary rounded" alt="Logo Huellitas Saludables">
                            <h4 class="logo-title ms-3">{{env('APP_NAME', 'Huellitas Saludables')}}</h4>
                         </a>
                         <h2 class="mb-2 text-center">Iniciar Sesión</h2>
                         <p class="text-center">Ingresa para mantenerse conectado con la salud de tu mascota.</p>
                         <x-auth-session-status class="mb-4" :status="session('status')" />

                         <!-- Errores de Validación -->
                         <x-auth-validation-errors class="mb-4" :errors="$errors" />
                         <form method="POST" action="{{ route('login') }}" data-toggle="validator">
                             {{csrf_field()}}
                            <div class="row">
                               <div class="col-lg-12">
                                  <div class="form-group">
                                     <label for="email" class="form-label">Correo Electrónico</label>
                                     <input id="email" type="email" name="email"  value="{{env('IS_DEMO') ? 'admin@huellitassaludables.com' : old('email')}}" class="form-control"  placeholder="admin@huellitassaludables.com" required autofocus>
                                  </div>
                               </div>
                               <div class="col-lg-12">
                                  <div class="form-group">
                                     <label for="password" class="form-label">Contraseña</label>
                                     <input class="form-control" type="password" placeholder="********"  name="password" value="{{ env('IS_DEMO') ? 'contraseña' : '' }}" required autocomplete="current-password">
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <div class="form-check mb-3">
                                     <input type="checkbox" class="form-check-input" id="customCheck1">
                                     <label class="form-check-label" for="customCheck1">Recuérdame</label>
                                  </div>
                               </div>
                               <div class="col-lg-6">
                                  <a href="{{route('auth.recoverpw')}}"  class="float-end">¿Olvidaste tu contraseña?</a>
                               </div>
                            </div>
                            <div class="d-flex justify-content-center">
                               <button type="submit" class="btn btn-primary">{{ __('Iniciar Sesión') }}</button>
                            </div>
                            <p class="text-center my-3">¿O iniciar sesión con otras cuentas?</p>
                            <div class="d-flex justify-content-center">
                               <!-- Se pueden mantener los enlaces a redes sociales o ajustar según sea necesario -->
                               <ul class="list-group list-group-horizontal list-group-flush">
                                  <li class="list-group-item border-0 pb-0">
                                     <a href="#"><img src="{{asset('images/brands/fb.svg')}}" alt="Facebook"></a>
                                  </li>
                                  <li class="list-group-item border-0 pb-0">
                                     <a href="#"><img src="{{asset('images/brands/gm.svg')}}" alt="Google"></a>
                                  </li>
                                  <!-- Más enlaces de redes sociales si es necesario -->
                               </ul>
                            </div>
                            <p class="mt-3 text-center">
                               ¿No tienes una cuenta? <a href="{{route('auth.signup')}}" class="text-underline">Haz clic aquí para registrarte.</a>
                            </p>
                         </form>
                      </div>
                   </div>
             </div>
          </div>
       </div>
       <div class="col-md-6 d-md-block d-none bg-light p-0 mt-n1 vh-100 overflow-hidden" style="z-index: 1;">
          <!-- Cambio en la imagen de la sección derecha -->
          <img src="{{asset('images/fondo/fondo3.png')}}" class="img-fluid gradient-main animated-scaleX" alt="Cuidado de Mascotas">
       </div>
    </div>
 </section>
 </x-guest-layout>
