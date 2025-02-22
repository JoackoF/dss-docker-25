<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<p class='text-red-500 text-center'>Debes iniciar sesión para acceder al panel de control.</p>";
    echo "<div class='text-center mt-4'><a href='index.php' class='text-blue-500 hover:underline'>Ir al Login</a></div>";
    exit(); 
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
        <p class="text-lg text-gray-600 mb-6">Has iniciado sesión exitosamente.</p>
        
        <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Cerrar sesión</a>
    </div>

</body>
</html>
