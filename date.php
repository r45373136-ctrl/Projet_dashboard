<?php

$filieres = [
    [
        "code_filiere" => "GL",
        "nom_filiere" => "Génie Logiciel",
        "responsable" => "M. Diop",
        "description" => "Formation en développement logiciel et informatique."
    ],

    [
        "code_filiere" => "DG",
        "nom_filiere" => "Design Graphique",
        "responsable" => "Mme Ndiaye",
        "description" => "Formation en design graphique et communication visuelle."
    ],

    [
        "code_filiere" => "RS",
        "nom_filiere" => "Réseaux et Systèmes",
        "responsable" => "M. Fall",
        "description" => "Formation en réseaux informatiques et administration système."
    ]
];



$niveaux = [
    [
        "code_niveau" => "L1",
        "libelle_niveau" => "Licence 1"
    ],

    [
        "code_niveau" => "L2",
        "libelle_niveau" => "Licence 2"
    ],

    [
        "code_niveau" => "L3",
        "libelle_niveau" => "Licence 3"
    ],

    [
        "code_niveau" => "M1",
        "libelle_niveau" => "Master 1"
    ],

    [
        "code_niveau" => "M2",
        "libelle_niveau" => "Master 2"
    ]
];


$classes = [
    [
        "code_classe" => "GL-M1",
        "nom_classe" => "L1 Génie Logiciel A",
        "capacite" => 30,
        "code_filiere" => "GL",
        "code_niveau" => "L1"
    ],

    [
        "code_classe" => "GL-L2",
        "nom_classe" => "L2 Génie Logiciel A",
        "capacite" => 30,
        "code_filiere" => "GL",
        "code_niveau" => "L2"
    ],

    [
        "code_classe" => "DG-L1",
        "nom_classe" => "L1 Design Graphique A",
        "capacite" => 25,
        "code_filiere" => "DG",
        "code_niveau" => "L1"
    ],

    [
        "code_classe" => "DG-M2",
        "nom_classe" => "L2 Design Graphique A",
        "capacite" => 25,
        "code_filiere" => "DG",
        "code_niveau" => "L2"
    ],

    [
        "code_classe" => "RS-L1",
        "nom_classe" => "L1 Réseaux et Systèmes A",
        "capacite" => 30,
        "code_filiere" => "RS",
        "code_niveau" => "L1"
    ]
];


$etudiants = [
    [
        "matricule" => "E221001",
        "nom" => "Ndiaye",
        "prenom" => "Aminata",
        "date_naissance" => "2005-03-15",
        "sexe" => "F",
        "telephone" => "771234567",
        "adresse" => "Dakar",
        "code_classe" => "GL-L1"
    ],

    [
        "matricule" => "E221002",
        "nom" => "Diop",
        "prenom" => "Moussa",
        "date_naissance" => "2004-07-22",
        "sexe" => "M",
        "telephone" => "781234568",
        "adresse" => "Pikine",
        "code_classe" => "GL-L1"
    ],

    [
        "matricule" => "E221003",
        "nom" => "Fall",
        "prenom" => "Fatou",
        "date_naissance" => "2005-01-10",
        "sexe" => "F",
        "telephone" => "761234569",
        "adresse" => "Guédiawaye",
        "code_classe" => "DG-L1"
    ],

    [
        "matricule" => "E221004",
        "nom" => "Sow",
        "prenom" => "Ibrahima",
        "date_naissance" => "2003-11-05",
        "sexe" => "M",
        "telephone" => "701234570",
        "adresse" => "Rufisque",
        "code_classe" => "GL-L2"
    ],

    [
        "matricule" => "E221005",
        "nom" => "Ba",
        "prenom" => "Mariama",
        "date_naissance" => "2004-09-18",
        "sexe" => "F",
        "telephone" => "751234571",
        "adresse" => "Dakar",
        "code_classe" => "DG-L2"
    ]
];

?>