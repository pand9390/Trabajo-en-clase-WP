<?php get_header(); ?>
<main class=" bg-amber-200  p-8 min-h-screen bg-gray-100">
     <div class=" md:text-5xl text-center"> MI PERFIL</div>
     <br>
     <br>
    <div class="max-w-md mx-auto bg-green-100 rounded-xl shadow-md overflow-hidden md:max-w-6xl border-dashed border-black border-2">
        <div class="md:flex">   
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="<?php echo get_template_directory_uri() ?>/assets/img/perfil.jpg" alt="imagen de perfil" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide md:text-lg text-blue-900 font-semibold">Datos Personales</div>
               
                <p class="mt-2 text-black-500">
                Nombres: Anderson Paúl
                <br>Apellidos:Pérez Cóndor
                <br>Edad:24
                <br>Teléfono: 0988256155
                <br>Correo: pand9390@gmail.com
                </p>
                
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-green-100 rounded-xl shadow-md overflow-hidden md:max-w-6xl content-end border-dashed border-black border-2">
        <div class="md:flex ">
            
            <div class="p-8 ">
                <div class="uppercase tracking-wide md:text-lg text-blue-900 font-semibold">Lenguajes de Programación Utilizados</div>
               
                <p class="mt-2 text-black-500">
                -Java
                <br>-PHP
                <br>-JavaScript
                <br>-HTML 
                <br>-CSS 
                <br>-.NET
                <br>-Perl
                </p>
            </div>
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-80" src="<?php echo get_template_directory_uri() ?>/assets/img/lenguajes.jpg" alt="imagen de perfil" alt="Man looking at item at a store">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-green-100 rounded-xl shadow-md overflow-hidden md:max-w-6xl border-dashed border-black border-2">
        <div class="md:flex">   
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full object-cover md:h-100 md:w-90" src="<?php echo get_template_directory_uri() ?>/assets/img/IDE.jpg" alt="imagen de perfil" alt="Man looking at item at a store">
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide md:text-lg text-blue-900 font-semibold">Entornos de Programación Utilizados</div>
                
                <p class="mt-2 text-black-500">
                -Eclipse
                <br>-Netbeans
                <br>-Visual Studio
                </p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="max-w-md mx-auto bg-green-100 rounded-xl shadow-md overflow-hidden md:max-w-6xl border-dashed border-black border-2">
        <div class="md:flex">   
           
            <div class="p-8">
                <div class="uppercase tracking-wide md:text-lg text-blue-900 font-semibold">Gestores de BDD Utilizados</div>
                
                <p class="mt-2 text-black-500">
                -MySQL
                <br>-MariaDB
                <br>-MongoDB
                <br>PostgreSQL
                </p>
            </div>
            <div class="md:flex-shrink-0">
                <img class="h-48 w-full  object-right md:h-full md:w-80" src="<?php echo get_template_directory_uri() ?>/assets/img/gestoresdeBDD.jpg" alt="imagen de perfil" alt="Man looking at item at a store">
            </div>
        </div>
    </div>


</main>

<?php get_footer(); ?>