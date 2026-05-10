# 🚀 Déploiement Cloudflare Pages - GFE

## 📋 Fichiers à télécharger

Tous les fichiers du projet sont prêts pour Cloudflare Pages.

## 📂 Structure du site :

```
/
├── index.html (page principale)
├── favicon.png
├── sitemap.xml
├── robots.txt
├── images/
│   ├── logo-gfe.png
│   └── [autres images]
├── etancheite-*.html (22 pages départements/stations)
├── etancheur-*.html (9 pages villes)
├── blog-*.html (3 pages blog)
├── realisation-*.html (3 pages réalisations)
├── mentions-legales.html
├── politique-confidentialite.html
└── politique-cookies.html
```

## 🚀 Étapes de déploiement Cloudflare Pages :

### 1. Connectez-vous à Cloudflare
https://dash.cloudflare.com/

### 2. Allez dans "Pages"
- Cliquez sur "Workers & Pages" dans le menu gauche
- Cliquez sur "Create application"
- Choisissez "Pages"
- Cliquez sur "Upload assets"

### 3. Téléchargez les fichiers
- Glissez-déposez TOUS les fichiers du projet
- OU créez un ZIP et uploadez-le

### 4. Configuration du projet
- **Project name** : goncalves-freres-etancheite
- **Production branch** : main
- Cliquez sur "Save and Deploy"

### 5. Configuration du domaine custom
- Une fois déployé, allez dans "Custom domains"
- Ajoutez : www.goncalves-freres-etancheite.fr
- Cloudflare configurera automatiquement le DNS

## ✅ Avantages Cloudflare Pages :
- ✅ Hébergement gratuit illimité
- ✅ CDN mondial ultra-rapide
- ✅ HTTPS automatique
- ✅ Déploiement instantané
- ✅ 500 builds/mois gratuits

## 🌐 URL après déploiement :
https://goncalves-freres-etancheite.pages.dev
