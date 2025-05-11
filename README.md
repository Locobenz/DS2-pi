Système de suivi des candidatures (suivi-candidatures)

Un site permettant aux entreprises de gérer les candidatures et aux candidats de suivre l’état de leur demande en temps réel.

Fonctionnalités

Espace recruteur :

Ajout, édition et suppression de postes à pourvoir

Visualisation et filtrage des candidatures

Changement de statut des candidatures (Acceptée, Refusée, En cours)

Espace candidat :

Inscription et connexion

Soumission de candidature pour un poste

Suivi en temps réel du statut de chaque candidature

Sécurité :

Authentification sécurisée PHP

Protection contre les injections SQL

Technologies

PHP 7.x

MySQL (ou tout autre SGBD compatible)

HTML5 & CSS3

JavaScript (ES6+)

(Optionnel) Bootstrap 4/5 pour le design

Structure du projet

suivi-candidatures/
├── index.php               # Page d'accueil et redirection
├── register.php            # Inscription des recruteurs et candidats
├── login.php               # Authentification des utilisateurs
├── logout.php              # Déconnexion
├── recruiter_dashboard.php # Tableau de bord des recruteurs
├── candidate_dashboard.php # Tableau de bord des candidats
├── job_post.php            # Création et édition d'offres d'emploi
├── application.php         # Soumission et gestion des candidatures
├── config.php              # Configuration de la base de données
├── script.js               # Logique JavaScript (dynamicité, appels AJAX)
├── style.css               # Styles CSS personnalisés
└── assets/                 # Images, icônes et autres ressources

Prérequis

Serveur web (Apache, Nginx)

PHP 7.2 ou supérieur

MySQL 5.7 ou supérieur

Extension PHP PDO pour MySQL

Installation

Cloner le dépôt :

git clone https://votre-repo/suivi-candidatures.git
cd suivi-candidatures

Configurer la base de données :

Créez une base de données (ex. suivi_candidatures).

Importez le script SQL disponible dans database.sql :

mysql -u user -p suivi_candidatures < database.sql

Mettre à jour la configuration :

Ouvrez config.php et renseignez vos identifiants MySQL (hôte, nom de la base, utilisateur, mot de passe).

Droits d’écriture :

Assurez-vous que le dossier assets/ est accessible en écriture si vous gérez des uploads.

Lancer l’application :

Placez le dossier dans votre répertoire web (www ou public_html).

Accédez via votre navigateur à http://localhost/suivi-candidatures.

Utilisation

Recruteur :

Créez un compte via register.php.

Connectez-vous et accédez à votre tableau de bord (recruiter_dashboard.php).

Publiez une offre et gérez les candidatures.

Candidat :

Inscrivez-vous ou connectez-vous.

Parcourez les offres et envoyez votre candidature (application.php).

Suivez le statut dans candidate_dashboard.php.

Contribuer

Les contributions sont les bienvenues ! Pour proposer des améliorations :

Forkez le projet.

Créez une branche feature (git checkout -b feature/ma-fonctionnalite).

Commitez vos changements (git commit -m "Ajout de ma fonction").

Pushez sur la branche (git push origin feature/ma-fonctionnalite).

Ouvrez une Pull Request.

Licence

Ce projet est sous licence MIT. Voir le fichier LICENSE pour plus de détails.

