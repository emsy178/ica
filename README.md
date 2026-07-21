# Thème WordPress ICA (Institut de la Collaboration Appliquée)

## Description
Thème WordPress personnalisé pour l'Institut de la Collaboration Appliquée, affilié à l'OQRC.

## Structure du thème
```
ica-theme/
├── style.css              # Fichier d'en-tête du thème (requis par WordPress)
├── functions.php          # Fonctions et configuration du thème
├── header.php             # En-tête du site
├── footer.php             # Pied de page du site
├── front-page.php         # Template de la page d'accueil
├── assets/
│   ├── css/
│   │   └── main.css       # Styles CSS principaux
│   ├── js/
│   │   └── main.js        # JavaScript principal
│   └── images/
│       └── photo-1497366754035-f200968a6e72.avif
└── README.md              # Ce fichier
```

## Installation

### Option 1: Installation directe dans WordPress

1. **Copier le thème dans WordPress**
   ```bash
   # Si WordPress est installé dans /var/www/html/wordpress
   sudo cp -r /var/www/ica/wp-theme/ica-theme /var/www/html/wordpress/wp-content/themes/
   ```

2. **Activer le thème dans WordPress**
   - Connectez-vous à l'admin WordPress (http://votre-domaine.com/wp-admin)
   - Allez dans **Apparence > Thèmes**
   - Trouvez "ICA Theme" et cliquez sur **Activer**

### Option 2: Installation via ZIP

1. **Créer une archive ZIP**
   ```bash
   cd /var/www/ica/wp-theme
   zip -r ica-theme.zip ica-theme/
   ```

2. **Télécharger via WordPress**
   - Allez dans **Apparence > Thèmes > Ajouter**
   - Cliquez sur **Téléverser un thème**
   - Sélectionnez le fichier `ica-theme.zip`
   - Cliquez sur **Installer maintenant**
   - Activez le thème

## Configuration

### Menu de navigation
1. Allez dans **Apparence > Menus**
2. Créez un nouveau menu
3. Ajoutez vos liens de navigation
4. Assignez le menu à l'emplacement "Menu Principal"

### Paramètres recommandés
- **Lecture**: Définissez une page statique comme page d'accueil
- **Permaliens**: Structure recommandée: `/%postname%/`

## Fonctionnalités

### Personnalisation visuelle
Le thème inclut un panneau de paramètres accessible via l'icône d'engrenage en haut à droite de la page:
- **5 thèmes de couleurs**: Bleu OQRC, Vert Corporate, Vert Tech, Vert Naturel, Vert Académique
- **Options visuelles**:
  - Highlight jaune sur les textes importants
  - Formes décoratives d'arrière-plan
  - Floating cards dans le hero
  - Icônes modernes (SVG)
- **6 styles de hero**:
  - Gradient animé (par défaut)
  - Image corporate
  - Image corporate 2 (photo locale)
  - Image premium
  - Gradient simple
  - Image personnalisée (upload)

### Sections de contenu
- **Hero**: Titre principal et appel à l'action
- **Mission**: Présentation de la mission
- **Valeurs**: 5 cartes de valeurs
- **Certification**: Programme de certification
- **Public cible**: 5 types de public
- **Contact**: Formulaire de contact

## Personnalisation

### Modifier les couleurs
Éditez `/assets/css/main.css` et modifiez les variables CSS:
```css
:root {
    --primary: #2B5F7F;
    --secondary: #0C71C3;
    /* ... autres variables */
}
```

### Modifier le contenu
Éditez le fichier `front-page.php` pour personnaliser le contenu des sections.

### Ajouter des fonctionnalités
Ajoutez vos fonctions personnalisées dans `functions.php`.

## Support WordPress
- WordPress 5.0+
- PHP 7.4+

## Auteur
OCTAVE EMMANUEL

## Licence
GNU General Public License v2 or later
