# Fiche technique — TROK

**Équipe :** Sarah, Erica · **Version** 01.00 **Date :** 04/11/2026

---

## 1 · Ce qu'on va construire

TROK (trok.be) est un site réservé aux étudiants. Il permet de donner, troquer ou vendre à bas prix des vêtements, des fournitures scolaires et des objets en tout genre. Les échanges se font en main propre sur le campus.

### a. Les pages du site

- **Accueil** : bandeau photo avec le slogan « Ici, rien ne se perd, tout se TROK », section « Trouve ton campus », carte des campus, nouveautés du site
- **Annonces** : toutes les annonces, organisées en sections par catégorie (Meubles, Informatique, Décoration, Vêtements)
- **Fiche annonce** : photo, titre, description, prix, vendeur, recommandations
- **Vendre** : dépôt d'une annonce, avec l'Assistant augmenté
- **Panier** : récapitulatif des objets choisis avant de passer la commande
- **Comment ça marche ?** : présentation du projet (« Qui sommes-nous ? ») et 4 étapes pour acheter sur TROK
- **Mon compte** : quatre onglets (Mes informations, Mes favoris, Mes commandes, Mes annonces)
- **Pages complémentaires** : Contact, mentions légales, politique de confidentialité

### b. Les éléments présents sur les pages

- Menu (Annonces, Vendre, Comment ça marche ?) → sur toutes les pages
- Barre de recherche, icône compte, icône panier → sur toutes les pages
- Pied de page (liens, réseaux sociaux, grand logo TROK) → sur toutes les pages
- Bandeau photo avec slogan → sur la page Accueil
- Carte interactive des campus → sur la page Accueil
- Carrousel d'annonces (avec flèches) → sur les pages Accueil, Annonces et Fiche annonce (recommandations)
- Carte d'annonce (photo, titre, prix, boutons favori et panier) → sur les pages Accueil, Annonces, Fiche annonce et Mon compte
- Texte d'introduction « Trouve ton bon plan sur le campus ! » → sur la page Annonces
- Bouton « Retour » → sur la page Fiche annonce
- Formulaire de dépôt (zone photo, informations du produit, détails du produit, bouton de publication) → sur la page Vendre
- Liste des articles, total, boutons « Continuer mes achats » et « Passer la commande » → sur la page Panier
- Bandeau rose, bloc « Qui sommes-nous ? », trois étiquettes (Durable, Accessible, Solidaire), quatre bulles numérotées → sur la page Comment ça marche ?
- Onglets du compte → sur la page Mon compte
- Carte de profil et bloc « Informations personnelles » → sur la page Mon compte, onglet Mes informations
- Grille de cartes avec pagination → sur la page Mon compte, onglets Mes favoris, Mes commandes et Mes annonces

### c. Les contenus

- Textes (slogan, explications, valeurs) → d'où ils viennent : écrits par l'équipe
- Photos des objets → d'où elles viennent : ajoutées par les étudiants quand ils déposent une annonce
- Photos de profil → d'où elles viennent : ajoutées par les étudiants dans leur compte
- Photo du bandeau d'accueil → d'où elle vient : choisie par l'équipe
- Logo TROK et icônes (compte, panier, favoris, modification) → d'où ils viennent : créés par l'équipe dans les maquettes
- Fond de carte des campus → d'où il vient : OpenStreetMap ou Google Maps

### d. Ce qui change à l'écran

- Menu sur mobile → s'ouvre et se ferme quand on clique dessus
- Onglet du compte → l'onglet actif passe en vert et le contenu en dessous change
- Cœur favori → se remplit et l'annonce est ajoutée aux favoris
- Bouton panier → l'article est ajouté et le panier se met à jour
- Panier → le total se recalcule quand on ajoute ou retire un article
- Catégorie ou filtre actif → la liste des annonces se met à jour
- Carrousel → défile quand on clique sur les flèches ou qu'on glisse au doigt
- Formulaire Vendre → message d'erreur si un champ manque, message de confirmation après la publication
- Analyse de la photo par l'IA → indicateur de chargement, puis les champs se remplissent
- Annonce → son statut change (disponible, réservée, donnée)

### e. Les données qui bougent

- Annonces (titre, description, catégorie, état, type d'échange, prix, photos, campus) → d'où elles viennent : de la base de données du site, alimentée par les étudiants
- Favoris, commandes et annonces d'un compte → d'où ils viennent : de la base de données, liés au compte connecté
- Panier → d'où il vient : des articles choisis par l'utilisateur pendant sa visite
- Localisation des campus et des points de remise → d'où elle vient : d'une API de cartographie (OpenStreetMap ou Google Maps)
- Indicateurs de l'éco-challenge (nombre d'objets réemployés, déchets évités) → d'où ils viennent : calculés à partir des annonces
- La structure de ces données est décrite dans le fichier `Contrat.json`

### f. La fonction intelligente : l'Assistant augmenté

- **Ce qu'elle fait :** elle analyse la photo de l'objet et pré-remplit l'annonce (titre, catégorie, description, état)
- **Ce que l'utilisateur donne :** une photo de l'objet qu'il veut donner, troquer ou vendre
- **Ce qu'il reçoit :** une annonce pré-remplie qu'il peut garder, modifier ou refuser champ par champ

---

## 2 · Avec quels outils

- **WordPress** pour : gérer les pages, les comptes, le type de contenu « Annonce » et la base de données
- **Gutenberg / thème enfant** pour : construire les pages avec des blocs réutilisables (en-tête, carte d'annonce, carrousel) et personnaliser le site sans perdre nos modifications lors des mises à jour du thème parent
- **CSS / theme.json** pour : les couleurs (vert olive et rose), les polices, les espacements et l'adaptation mobile / tablette / ordinateur
- **JavaScript** pour : les éléments qui réagissent aux clics (menu mobile, onglets du compte, favoris, panier, carrousels, appel de l'Assistant augmenté)
- **API / Contrat.json** pour : afficher la carte des campus et décrire la structure des données (annonces, réponse de l'IA)
- **IA / extension** pour : l'Assistant augmenté (une API d'IA appelée depuis le site pour analyser la photo et proposer les champs de l'annonce)

**Autres outils :**

- **PHP** pour : le code côté serveur de WordPress
- **MySQL** pour : stocker les annonces et les comptes
- **Hostinger ou OVH** pour : héberger le site (à comparer sur le prix et les performances)
- **Nom de domaine trok.be** pour : une adresse courte et mémorisable (disponibilité à vérifier)
- **VS Code** pour : écrire le code
- **Git / GitHub** pour : versionner le projet et travailler à deux
- **LocalWP** pour : tester le site en local avant la mise en ligne

---

## 3 · Pourquoi ces choix

- **Pour l'utilisateur :** le site l'aide à donner, troquer ou vendre ses affaires et à trouver des objets à petit prix sur son campus, avec une annonce publiée en quelques clics.
- **Sur mobile et ordinateur :** le site est pensé d'abord pour le mobile (menu replié, carrousels défilables au doigt, cartes empilées). Sur tablette, les grilles passent à deux ou trois colonnes, et sur ordinateur à quatre cartes par rangée.
- **Les interactions :** l'utilisateur peut cliquer sur les annonces, chercher et filtrer par catégorie, ajouter aux favoris ou au panier, remplir le formulaire de dépôt, ajouter une photo, changer d'onglet dans son compte et accepter ou modifier les propositions de l'IA.
- **Le message :** « Ici, rien ne se perd, tout se TROK » : TROK, c'est durable, accessible et solidaire.
- **L'éco-challenge :** le projet donne une seconde vie aux objets au lieu de les jeter, favorise le réemploi entre étudiants et évite la livraison grâce à la remise en main propre sur le campus. Des indicateurs rendent cet impact visible.
- **L'IA :** elle fait gagner du temps et simplifie le dépôt d'une annonce, ce qui encourage les étudiants à publier plus d'objets. L'utilisateur garde le contrôle, car chaque champ reste modifiable.

---

## 4 · Contraintes

### a. Ce qui nous limite

- **Temps :** [date de rendu / fin de sprint]
- **Compétences :** à apprendre : le thème enfant, theme.json, PHP et l'appel à une API d'IA ; [ce qu'on maîtrise déjà]
- **Accessibilité :** contrastes suffisants entre textes et fonds, textes lisibles, navigation simple, texte alternatif sur les images des annonces
- **Écologie :** images légères et compressées, pages simples, peu de scripts
- **Données personnelles :** on ne collecte que le nécessaire (prénom, nom, campus, e-mail, photo de profil), pas d'adresse postale puisqu'il n'y a pas de livraison, et les mots de passe sont protégés (RGPD)
- **Autres :** site compatible avec la plupart des navigateurs, formulaires sécurisés et mises à jour régulières de WordPress et des extensions, budget limité pour l'hébergement et le domaine, modération des annonces

### b. Les 3 règles de notre audit

1. **Accessibilité :** tous les textes sont lisibles (contrastes suffisants) et toutes les images d'annonces ont un texte alternatif.
2. **Éco-conception :** les images sont compressées et chaque page reste légère et simple.
3. **Responsive :** toutes les pages s'affichent et fonctionnent correctement sur mobile, tablette et ordinateur.
