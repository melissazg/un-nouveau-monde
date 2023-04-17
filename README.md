# Un_Nouveau_Monde
Un Nouveau Monde est une association qui supervise les clubs de cinéma dans les lycées, créée par Nicolas Desole et Marie Bailleule.

Le site internet a pour but de présenter l'association, les créateurs et de pouvoir découvrir et visionner les films d'animation réalisés par les producteurs partenaires.

## Les fonctionnalités :
- Page d'accueil présentant les réalisateurs des films d'animation
- Catalogue des films avec différentes fonctionnalités : ajout, suppression, modification et filtre
- Catalogue de musique
- Une page de présentation pour chaque film contenant le synopsis, le film en streaming, autres infos...
- Page de recommandation de films selon les données entrées par l'utilisateur 
- Présentation de l'association et des collaborateurs (À propos)
- Créer un compte, se connecter, page profil avec modifications des données
- Page de contact avec ReCaptcha
- Panier pour les projections de films
- Footer : Réseaux sociaux, informations de contact (email, numéro de téléphone), horaires et newsletter

Deux types d'utilisateurs :
- Seul l'administrateur peut modifier le catalogue
- Les élèves peuvent naviguer noter et commenter les films

Le projet possède des fixtures qui se chargent à l'aide de la commande : $ php bin/console doctrine:fixtures:load
Le Trello : https://trello.com/b/K67M497C/un-nouveau-monde