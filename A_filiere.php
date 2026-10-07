<?php include 'date.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">

</head>

<body>

    <div class="flex">

        <!-- SIDEBAR -->
        <aside class="w-[20%] h-screen bg-red-800 fixed left-0 top-0">
            <div class="ml-7 mt-6">
                <p class="text-white font-bold  text-3xl">E221</p>

                <P class="text-white">Ecole superieure 221</P>

            </div>
            <ul class="space-y-3 mx-auto flex flex-col items-center mt-8">
                <li>

                    <a href="index.php" class="rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-gauge text-white"></i>
                        <span class="font-medium text-white">Dashboard</span></a>

                </li>
                <li class="space-x-3">

                    <a href="" class="bg-white rounded p-2 w-52 flex items-center gap-3">
                        <i class="fa-solid fa-graduation-cap text-red-800"></i>
                        <span class="font-medium text-red-800">Filières</span>
                    </a>

                </li>
                <li>

                    <a href="niveau.php" class=" rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-layer-group text-white"></i>
                        <span class="font-medium text-white">Niveaux</span></a>

                </li>
                <li>

                    <a href="classe.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-chalkboard-user text-white"></i>
                        <span class="font-medium text-white">Classes</span></a>

                </li>
                <li>

                    <a href="etudiant.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-user-graduate text-white"></i>
                        <span class="font-medium text-white">Etudiants</span></a>

                </li>
                <li>

                    <a href="statistique.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-chart-simple text-white"></i>
                        <span class="font-medium text-white">Statistiques</span></a>

                </li>
            </ul>
        </aside>


        <div class="w-[80%] ml-[20%] bg-sky-50 min-h-screen">

            <!-- menu -->

            <header class="bg-white fixed top-0 right-0 w-[80%] h-[50px]  shadow-lg p2 flex items-center justify-between">
                <div class="w-full flex items-center justify-between px-3">
                    <div class="relative">
                    <i class="fa-solid fa-magnifying-glass text-gray-700 absolute left-3 top-1/2 -translate-y-1/2 text-sm" ></i>

                    <input type="search" placeholder="Rechercher un etudiant..." class=" border border-gray-700 w-65 rounded-sm pl-10">
                </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-red-800"></div>
                        <p>Mon Profil</p>
                        <i class="fa-solid fa-chevron-down text-xs" style="color: rgb(6, 7, 7);"></i>
                    </div>
                </div>
            </header>



            <!-- contenu -->


            <main class="pt-16 ml-3">

                <p class="font-bold text-xl">Ajouter une filière</p>
                <p>Rensigner les informations de la nouvelle filière</p>
                
                <form action="filiere.php" method="post" class="w-200 p-4 shadow-lg border border-gray-300 rounded-xl mt-4">
                    <div class="flex gap-2">
                        <div>

                            <label for="">Code</label><br>
                            <input type="text" class="border w-94 h-8 rounded-sm" name="code">
                        </div>
                        <div>
                            <label for="">Nom filière</label><br>
                            <input type="text" class="border w-96 h-8 rounded-sm" name="nom">
                        </div>
                    </div><br>
                    <label for="">Responsable</label><br>
                    <input type="text" class="border w-full h-8 rounded-sm" name="responsable"><br><br>

                    <label for="">Description</label><br>
                    <textarea name="description" id="" class="border w-full h-25 rounded-sm"></textarea>
                    <div class="mt-4">
                        <button type="submit" name ="ajouter"class=" bg-red-800 text-white rounded p-2  px-8 gap-3  hover:bg-red-700 hover:text-white 
                               transition duration-300" >Envoyer</button>

                        <a href="" class=" border text-gray-700 rounded p-2  px-8 gap-3  hover:bg-gray-700 hover:text-white 
                       transition duration-300">Annuler</a>
                    </div>
                </form>

            </main>
        </div>

    </div>


</body>

</html>