# Dictionnaire de données de gameFlix

## Games (`game`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre jeu|
|name|VARCHAR(64)|NOT NULL|Le nom du jeu|
|synopsis|TEXT|NOT NULL|Synopsis du jeu|
|trailer|VARCHAR(64)|NULL|La bande annonce du jeu du jeu|
|note|INT|NULL|Note du jeu donné par les utilisateurs|
|publishedAt|DATETIME|NULL|L'année de parution du jeu|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|
|serieId|Entity|PRIMARY KEY, UNSIGNED, NULL|l'identifiant de la série|
|editorId|Entity|PRIMARY KEY, UNSIGNED, NULL|l'identifiant de l'éditeur|
|developerId|Entity|PRIMARY KEY, UNSIGNED, NULL|l'identifiant du developpeur|

## Walkthrough (`walkthrough`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du walkthrough|
|name|VARCHAR(64)|NOT NULL|Le nom du walkthrough|
|link|VARCHAR(64)|NOT NULL|lien de la vidéo youtube du walkthrough|
|part|VARCHAR(64)|NULL|Numéro de la partie du walkthrough|
|publishedAt|DATETIME|NULL|L'année de parution du walkthrough|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|
|gameId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant du jeu|

## Categories (`category`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

## Categories_games (`category_game`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|gameId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant du jeu|
|categoryId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant de la catégorie|

## Series (`serie`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la série de jeu|
|name|VARCHAR(64)|NOT NULL|Le nom de la série|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

## Platform (`platform`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la plateform|
|name|VARCHAR(64)|NOT NULL|Le nom de la plateform|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

## Platform_Game (`platform_game`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|gameId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant du jeu|
|platformId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant de la plateforme|

## Editor (`editor`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de l'éditeur|
|name|VARCHAR(64)|NOT NULL|Le nom de l'éditeur|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

## Developer (`developer`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du developpeur|
|name|VARCHAR(64)|NOT NULL|Le nom du developpeur|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

## Comments (`comment`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du commentaire|
|title|VARCHAR(64)|NOT NULL|Titre du commentaire|
|content|TEXT|NOT NULL|Contenu du commentaire|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|
|userId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant de l'utilisateur|
|gameId|Entity|PRIMARY KEY, UNSIGNED, NOT NULL|l'identifiant du jeu|


## User (`user`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de l'utilisateur|
|name|VARCHAR(64)|NOT NULL|Le nom de l'utilisateur|
|email|VARCHAR(64)|NOT NULL|Le mail de l'utilisateur|
|password|VARCHAR(255)|NOT NULL|Le mot de passe de l'utilisateur|
|profilePic|VARCHAR(255)|NOT NULL|l'image de profile de l'utilisateur|
|createdAt|DATETIME|NOT NULL, DEFAULT CURRENT_DATETIME|Création dans la bdd|
|updatedAt|DATETIME|NULL, DEFAULT CURRENT_DATETIME|Modification dans la bdd|

