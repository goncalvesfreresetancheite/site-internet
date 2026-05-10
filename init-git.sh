#!/bin/bash

# 🚀 Script d'initialisation Git pour GFE Étanchéité
# Ce script initialise le repository Git et prépare le premier commit

echo "🏔️  Initialisation du repository GFE Étanchéité..."
echo ""

# Initialiser Git
git init
echo "✅ Repository Git initialisé"

# Ajouter tous les fichiers
git add .
echo "✅ Fichiers ajoutés au staging"

# Premier commit
git commit -m "🎉 Initial commit - Site GFE Étanchéité

- Site web complet avec 40+ pages
- Blog technique (4 articles)
- Portfolio (3 réalisations)
- Pages départements (8)
- Pages villes (9)
- Pages stations de ski (15)
- Design responsive Tailwind CSS
- SEO optimisé
- Solution privilégiée: Étanchéité bitumineuse SBS"

echo "✅ Premier commit créé"
echo ""
echo "📋 Prochaines étapes:"
echo ""
echo "1. Créez un repository sur GitHub:"
echo "   👉 https://github.com/new"
echo ""
echo "2. Copiez l'URL de votre nouveau repository"
echo ""
echo "3. Liez votre repository local:"
echo "   git remote add origin https://github.com/VOTRE-USERNAME/gfe-etancheite.git"
echo ""
echo "4. Poussez votre code:"
echo "   git branch -M main"
echo "   git push -u origin main"
echo ""
echo "🎉 C'est terminé !"
