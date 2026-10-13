<?php

session_start();

include 'date.php';


if (!isset($_SESSION['etudiants'])) {
    $_SESSION['etudiants'] = $etudiants;
}

if (isset($_POST['ajouter'])) {


    $nouveletudiant = [
        "matricule" => $_POST['matricule'],
        "nom" => $_POST['nom'],
        "prenom" => $_POST['prenom'],
        "date_naissance" => $_POST['date'],
        "sexe" => $_POST['sexe'],
        "telephone" => $_POST['telephone'],
        "adresse" => $_POST['adresse'],
        "code_classe" => $_POST['classe'],

    ];
    $_SESSION['etudiants'][] = $nouveletudiant;

    // header("Location: niveau.php");
    // exit;
}

$etudiants = $_SESSION['etudiants'];
?>


!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css">

</head>

<body>

    <div id="overlay"
        class="fixed inset-0 bg-black/50 z-40 hidden md:hidden">
    </div>

    <div class="flex">

        <!-- SIDEBAR -->
        <aside class="fixed left-0 top-0 z-50 w-64 md:w-[20%] h-screen bg-red-800 transform -translate-x-full md:translate-x-0
           transition-transform duration-300">
            <div class="ml-7 mt-6">
                <p class="text-white font-bold  text-3xl">E221</p>

                <P class="text-white text-[14px]">Ecole superieure 221</P>

            </div>
            <ul class="space-y-3 mx-auto flex flex-col items-center mt-8">
                <li>

                    <a href="index.php" class="rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-gauge text-white"></i>
                        <span class="font-medium text-white">Dashboard</span></a>

                </li>
                <li>

                    <a href="filiere.php" class=" rounded  w-52 flex items-center p-2 gap-3  hover:bg-red-700 hover:text-white 
            transition duration-300">
                        <i class="fa-solid fa-layer-group text-white"></i>
                        <span class="font-medium text-white">Filières</span></a>

                </li>
                <li>

                    <a href="niveau.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
            transition duration-300">
                        <i class="fa-solid fa-chalkboard-user text-white"></i>
                        <span class="font-medium text-white">Niveaux</span></a>

                </li>
                <li>

                    <a href="classe.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
            transition duration-300">
                        <i class="fa-solid fa-user-graduate text-white"></i>
                        <span class="font-medium text-white">Classes</span></a>

                </li>
                <li class="space-x-3">

                    <a href="" class="bg-white rounded p-2 w-52 flex items-center gap-3 hover:bg-red-700 hover:text-white 
            transition duration-300">
                        <i class="fa-solid fa-graduation-cap text-red-800"></i>
                        <span class="font-medium text-red-800">Etudiants</span>
                    </a>

                </li>
                <li>

                    <a href="statistique.php" class="rounded p-2  w-52 flex items-center gap-3  hover:bg-red-700 hover:text-white 
                  transition duration-300">
                        <i class="fa-solid fa-chart-simple text-white"></i>
                        <span class="font-medium text-white">Statistiques</span></a>

                </li>
            </ul>
        </aside>


        <div class="w-full md:w-[80%] md:ml-[20%] min-w-0 bg-sky-50 min-h-screen">

            <!-- menu -->

            <header class="bg-white fixed top-0 right-0 w-full md:w-[80%] h-[50px]  shadow-lg p2 flex items-center justify-between">
                <div class="w-full flex items-center justify-between px-3 gap-2">


                <!-- bouton burgur -->

                    <button id="menuBtn"
                        class="md:hidden text-red-800 text-2xl mr-2"
                        aria-label="Ouvrir le menu">
                        <i class="fa-solid fa-bars"></i>
                    </button>


                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass text-gray-700 absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>

                        <input type="search" placeholder="Rechercher..." class=" border border-gray-700 w-65 rounded-sm pl-10">
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full border-2 border-red-800 bg-[url(images/image.png)] bg-cover bg-center"></div>
                        <p class="text-[12px]">Mon Profil</p>
                        <i class="fa-solid fa-chevron-down text-xs" style="color: rgb(6, 7, 7);"></i>
                    </div>
                </div>
            </header>

            <!-- MENU DEROULANT MOBILE -->
            <div id="mobileMenu" class="hidden md:hidden fixed top-[50px] left-0 w-[40%] bg-red-800/85 shadow-lg z-40 p-4">

                <ul class="flex flex-col gap-2">

                    <li>
                        <a href="index.php" class="block p-3 rounded text-white hover:bg-red-700">
                            <i class="fa-solid fa-gauge mr-3 text-white"></i>
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="filiere.php" class="block p-3 rounded text-white hover:bg-red-700">
                            <i class="fa-solid fa-graduation-cap mr-3"></i>
                            Filières
                        </a>
                    </li>

                    <li>
                        <a href="niveau.php" class="block p-3 rounded text-white hover:bg-red-700">
                            <i class="fa-solid fa-layer-group mr-3"></i>
                            Niveaux
                        </a>
                    </li>

                    <li>
                        <a href="classe.php" class="block p-3 rounded text-white hover:bg-red-700">
                            <i class="fa-solid fa-chalkboard-user mr-3"></i>
                            Classes
                        </a>
                    </li>

                    <li>
                        <a href="etudiant.php" class="block bg-white w-40 p-3 rounded text-red-800 hover:bg-red-700 flex items-center">
                            <i class="fa-solid fa-user-graduate mr-3 text-red-800"></i>
                            Étudiants
                        </a>
                    </li>

                    <li>
                        <a href="statistique.php" class="block p-3 rounded text-white hover:bg-red-700">
                            <i class="fa-solid fa-chart-simple mr-3"></i>
                            Statistiques
                        </a>
                    </li>

                </ul>
            </div>



            <!-- contenu -->


            <main class="pt-16 mx-3">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="font-bold text-xl">Gestion des étudiants</p>
                        <p>Consulter et gérer les étudiants inscrits.</p>
                    </div>
                    <a href="A_etudiant.php"><i class="fa-solid fa-square-plus text-red-800 text-3xl"></i></a>

                </div>

                <div class="relative mt-4">
                    <i class="fa-solid fa-magnifying-glass text-gray-700 absolute left-3 top-1/2 -translate-y-1/2 text-sm"></i>

                    <input type="search" placeholder="Rechercher un etudiant..." class=" border border-gray-700 w-70 rounded-sm pl-10 p-[5px] hover:bg-red-50">
                </div>



                <div class="mt-6 w-full max-w-full overflow-x-auto rounded-xl shadow-xl">
                    <table class="w-full min-w-[1000px] border-collapse">
                        <thead class="bg-red-800 border border-gray-300">
                            <th class="p-3 text-white whitespace-nowrap">Matricule</th>
                            <th class="p-3 text-white whitespace-nowrap">Nom</th>
                            <th class="p-3 text-white whitespace-nowrap">Prénom</th>
                            <th class="p-3 text-white whitespace-nowrap">Sexe</th>
                            <th class="p-3 text-white whitespace-nowrap">Classe</th>
                            <th class="p-3 text-white whitespace-nowrap">Telephone</th>
                            <th class="p-3 text-white whitespace-nowrap">Adresse</th>
                            <th class="p-3 text-white whitespace-nowrap">Date de Naissance</th>
                            <th class="p-3 text-white whitespace-nowrap">Action</th>
                        </thead>

                        <tbody class="text-center">
                            <?php foreach ($etudiants as $etudiant) { ?>
                                <tr class="border-b border-gray-200 hover:bg-red-50 transition">
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["matricule"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["nom"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["prenom"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["sexe"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["code_classe"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["telephone"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["adresse"] ?></td>
                                    <td class="p-3 whitespace-nowrap"><?php echo $etudiant["date_naissance"] ?></td>
                                    <td class="p-3 text-red-800 whitespace-nowrap"><a href="">Modifier</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>

            </main>
        </div>

    </div>


    <script>
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menuBtn');
    const overlay = document.getElementById('overlay');
    const mobileMenu = document.getElementById('mobileMenu');

    // Ouvrir et fermer le menu mobile
    menuBtn.addEventListener('click', function () {
        mobileMenu.classList.toggle('hidden');

        const menuOuvert = !mobileMenu.classList.contains('hidden');

        menuBtn.innerHTML = menuOuvert
            ? '<i class="fa-solid fa-xmark"></i>'
            : '<i class="fa-solid fa-bars"></i>';
    });

    // Fermer le menu après avoir choisi une page
    mobileMenu.querySelectorAll('a').forEach(function (lien) {
        lien.addEventListener('click', function () {
            mobileMenu.classList.add('hidden');
        });
    });

    // Gestion de la sidebar existante
    if (sidebar && overlay) {
        overlay.addEventListener('click', function () {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });
    }

    // Fermer le menu avec Échap
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            mobileMenu.classList.add('hidden');
            sidebar?.classList.add('-translate-x-full');
            overlay?.classList.add('hidden');
        }
    });
</script>


</body>

</html>