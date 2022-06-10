<x-guest-layout>
<div class="contenedor">
     <form action="{{route('login')}}" method="post">
     	@csrf
        <h1> Iniciar sesión</h1>
     	<label> Email </label><br>
     	<input class="box" type="text" name="Email" required="" placeholder="Correo Electrónico"><br>
     	<label> Contraseña </label><br>
     	<input class="box" type="password" name="password" required="" placeholder="Contraseña"><br><br>
        <input class="boton" type="submit" value="Registrar">

</div>
</x-guest-layout>