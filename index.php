<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Dashboard</title>
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
        <li class="space-x-3">

            <a href="" class="bg-white rounded p-2 w-52 flex items-center gap-3"> 
                <i class="fa-solid fa-gauge text-red-800"></i>
                <span class="font-medium text-red-800">Dashboard</span>
                </a>

        </li>
        <li> 

            <a href="filiere.php" class="rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                <i class="fa-solid fa-graduation-cap text-white" ></i>
                <span class="font-medium text-white">Filières</span></a>

        </li>
        <li>

            <a href="niveau.php" class=" rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                <i class="fa-solid fa-layer-group text-white" ></i>
                <span class="font-medium text-white">Niveaux</span></a>

        </li>
        <li>

            <a href="classe.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                <i class="fa-solid fa-chalkboard-user text-white" ></i>
                <span class="font-medium text-white">Classes</span></a>

        </li>
        <li>

            <a href="etudiant.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                <i class="fa-solid fa-user-graduate text-white" ></i>
                <span class="font-medium text-white">Etudiants</span></a>

        </li>
        <li>

            <a href="statistique.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                <i class="fa-solid fa-chart-simple text-white" ></i>
                <span class="font-medium text-white">Statistiques</span></a>

        </li>
    </ul>
    </aside>

    
    <div class="w-[80%] ml-[20%] bg-sky-50 min-h-screen">

        <!-- menu -->

        <header class="bg-white fixed top-0 right-0 w-[80%] h-[50px]  shadow-lg p2 flex items-center justify-between">
            <div class="w-full flex items-center justify-between px-3">
                <div>
                    <input type="text" placeholder="rechercher....." class="rounded-xl border w-65">
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

        <!-- LES CARDS -->
         
            <p class="font-bold">Espace Administrateur</p>
            <div class="flex justify-between items-center mt-4">
               <div class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl mt-2 transition duration-300 ease-in-out
                     hover:-translate-y-1 hover:scale-90">
                     <div class="flex items-center gap-6">
                        <div class="w-12 h-12 bg-red-800 rounded-xl"></div>
                        <div>
                            <p>Filières</p>
                            <p>05</p>
                        </div>
                     </div>
                    </div>
               <div  class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                     hover:-translate-y-1 hover:scale-90"></div>
               <div  class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                     hover:-translate-y-1 hover:scale-90"></div>
               <div  class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                     hover:-translate-y-1 hover:scale-90"></div>

            </div>

            <!-- Tableau -->

               <div class="mt-10">

                 <p class="font-bold">Derniers étudidants enregistrés</p>
                <table class=" mt-4 w-full shadow-xl">
                    <thead class="bg-red-50 border border-gray-300">
                        <th class="p-3">Matricule</th>
                        <th class="p-3">Nom</th>
                        <th class="p-3">Prénom</th>
                        <th class="p-3">Sexe</th>
                        <th class="p-3">Classe</th>
                        <th class="p-3">Filière</th>
                        <th class="p-3">Niveau</th>
                    </thead>

                    <tbody class="text-center">

                       <tr>
                        <td class="p-3">ES221-2026-084</td>
                        <td class="p-3">Diop</td>
                        <td class="p-3">Aminata</td>
                        <td class="p-3">F</td>
                        <td class="p-3">L1 GL</td>
                        <td class="p-3">Génie Logiciel</td>
                        <td class="p-3">L1</td>
                       </tr>

                       <tr class="bg-red-50 border border-gray-300">
                        <td class="p-3">ES221-2026-085</td>
                        <td class="p-3">Ndiaye</td>
                        <td class="p-3">Moussa</td>
                        <td class="p-3">M</td>
                        <td class="p-3">L2 DG </td>
                        <td class="p-3">Design graphique</td>
                        <td class="p-3">L2</td>
                       </tr>


                       <tr>
                        <td class="p-3">ES221-2026-086</td>
                        <td class="p-3">Fall</td>
                        <td class="p-3">Marième</td>
                        <td class="p-3">F</td>
                        <td class="p-3">L1 Dev</td>
                        <td class="p-3">Developpement Web</td>
                        <td class="p-3">L1</td>
                       </tr>


                       <tr class="bg-red-50 border border-gray-300">
                        <td class="p-3">ES221-2026-087</td>
                        <td class="p-3">Ndoye</td>
                        <td class="p-3">Coumba</td>
                        <td class="p-3">F</td>
                        <td class="p-3">M1 RS</td>
                        <td class="p-3">Réseaux</td>
                        <td class="p-3">M1</td>
                       </tr>

                       <tr>
                        <td class="p-3">ES221-2026-088</td>
                        <td class="p-3">Gueye</td>
                        <td class="p-3">Assane</td>
                        <td class="p-3">M</td>
                        <td class="p-3">L3 MD </td>
                        <td class="p-3">Markting Digitale</td>
                        <td class="p-3">L3</td>
                       </tr>

                       
                    </tbody>
                 </table>

               </div>


               <p class="mt-10 font-bold">Les classes avec le plus d'étudiants</p>
               <div class="flex justify-between items-center mt-4">

                   <div class="w-70 h-30 shadow-lg border border-gray-300 rounded-2xl mt-2 transition duration-300 ease-in-out
                         hover:-translate-y-2 hover:scale-105"></div>
                   <div  class="w-70 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                         hover:-translate-y-2 hover:scale-105"></div>
                   <div  class="w-70 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                         hover:-translate-y-2 hover:scale-105"></div>
                   
               </div>

            
        </main>
    </div>

</div>








</body>
</html>