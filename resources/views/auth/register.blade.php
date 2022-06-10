<x-guest-layout>
<div class="contenedor">
     <form action="{{route('register')}}" method="post">
         @csrf
     	<h1> Ingresar usuario</h1>
     	<label> Nombre </label><br>
     	<input class="box" type="text" name="name" required="" placeholder="ingrese nombre"><br>
     	<label> Email </label><br>
     	<input class="box" type="text" name="email" required="" placeholder="ingrese Email"><br>
     	<label> Contraseña </label><br>
     	<input class="box" type="password" name="password" required="" placeholder="ingrese clave"><br>
         <label> Confirmar contraseña </label><br>
     	<input class="box" type="password" name="password_confirmation" required="" placeholder="ingrese usuario"><br>
        <input type="checkbox"></input> Estoy de acuerdo  términos y condiciones
        <input class="boton" type="submit" name="registrar" value="registrar">
        

</div>
</x-guest-layout>