<?php session_start(); ?>
<?php include 'date.php'; ?>

<?php
if (!isset($_SESSION['filieres'])) {
    $_SESSION['filieres'] = $filieres;
}

$filieres = $_SESSION['filieres'];
?>

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
                        <i class="fa-solid fa-graduation-cap text-white"></i>
                        <span class="font-medium text-white">Filières</span></a>

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
                <p>Vue d'ensemble des effectifs, des formations et des clases</p>
                <div class="flex justify-between items-center mt-4">

                    <div class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl mt-2 transition duration-300 ease-in-out
                     hover:-translate-y-1 hover:scale-90">
                        <div class="flex items-center gap-10 mt-5 ml-4">
                            <div class="w-12 h-12 bg-red-800 rounded-xl flex items-center justify-center">

                                <i class="fa-solid fa-graduation-cap text-white text-xl"></i>
                            </div>
                            <div>

                                <p class="font-medium">Filières</p>
                                <p class="font-bold text-2xl"><?php echo count($filieres) ?></p>
                            </div>
                        </div>

                        <a href="filiere.php">

                            <i class="fa-solid fa-right-long text-red-800 ml-50"></i>
                        </a>
                    </div>
                    <div class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                          hover:-translate-y-1 hover:scale-90">
                        <div class="flex items-center gap-10 mt-5 ml-4">
                            <div class="w-12 h-12 bg-red-800 rounded-xl flex items-center justify-center">`
                                <i class="fa-solid fa-layer-group text-white text-xl"></i>
                            </div>
                            <div>

                                <p class="font-medium">Niveaux</p>
                                <p class="font-bold text-2xl"><?php echo count($niveaux) ?></p>
                            </div>
                        </div>

                        <a href="niveau.php">

                            <i class="fa-solid fa-right-long text-red-800 ml-50"></i>
                        </a>
                    </div>

                    <div class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                          hover:-translate-y-1 hover:scale-90">
                        <div class="flex items-center gap-10 mt-5 ml-4">
                            <div class="w-12 h-12 bg-red-800 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-chalkboard-user text-white text-xl"></i>
                            </div>
                            <div>

                                <p class="font-medium">Classes</p>
                                <p class="font-bold text-2xl"><?php echo count($classes) ?></p>
                            </div>
                        </div>

                        <a href="classe.php">

                            <i class="fa-solid fa-right-long text-red-800 ml-50"></i>
                        </a>
                    </div>

                    <div class="w-60 h-30 shadow-lg border border-gray-300 rounded-2xl transition duration-300 ease-in-out
                          hover:-translate-y-1 hover:scale-90">
                        <div class="flex items-center gap-10 mt-5 ml-4">
                            <div class="w-12 h-12 bg-red-800 rounded-xl flex items-center justify-center">
                                <i class="fa-solid fa-user-graduate text-white text-xl"></i>
                            </div>
                            <div>

                                <p class="font-medium">Etudiants</p>
                                <p class="font-bold text-2xl"><?php echo count($etudiants) ?></p>
                            </div>
                        </div>
                        <a href="etudiant.php">

                            <i class="fa-solid fa-right-long text-red-800 ml-50"></i>
                        </a>
                    </div>

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
                            <th class="p-3">Telephone</th>
                            <th class="p-3">Adresse</th>
                            <th class="p-3">Date de Naissance</th>
                        </thead>

                        <tbody class="text-center">
                            <?php foreach ($etudiants as $etudiant) { ?>
                                <tr>
                                    <td class="p-3"><?php echo $etudiant["matricule"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["nom"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["prenom"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["sexe"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["code_classe"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["telephone"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["adresse"] ?></td>
                                    <td class="p-3"><?php echo $etudiant["date_naissance"] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>



            </main>
        </div>

    </div>








</body>

</html>