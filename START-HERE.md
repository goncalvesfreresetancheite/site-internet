# 🎯 INSTRUCTIONS RAPIDES - GitHub Setup

## ✅ Fichiers créés pour vous :

1. **`.gitignore`** - Fichiers à ignorer par Git
2. **`README.md`** - Documentation du projet
3. **`GITHUB-GUIDE.md`** - Guide complet étape par étape
4. **`DEPLOYMENT.md`** - Guide de déploiement sur Cloudflare/Netlify/Vercel
5. **`init-git.sh`** - Script d'initialisation (Mac/Linux)
6. **`init-git.bat`** - Script d'initialisation (Windows)

---

## 🚀 Méthode SIMPLE (sans ligne de commande)

### Étape 1 : Créer un compte GitHub
👉 [github.com/signup](https://github.com/signup)

### Étape 2 : Créer un nouveau repository
1. Cliquez sur le **"+"** en haut à droite → "New repository"
2. Nom : **gfe-etancheite**
3. Cochez **"Add a README file"**
4. Cliquez **"Create repository"**

### Étape 3 : Uploader vos fichiers
1. Dans le repository, cliquez **"Add file"** → **"Upload files"**
2. **Glissez-déposez TOUS vos fichiers** (HTML, images, etc.)
3. Message de commit : `Initial commit - Site GFE`
4. Cliquez **"Commit changes"**

### ✅ Terminé !

Votre site est sur GitHub : `https://github.com/VOTRE-NOM/gfe-etancheite`

---

## 💻 Méthode TECHNIQUE (ligne de commande)

### Sur Mac/Linux :
```bash
cd /chemin/vers/votre/site
chmod +x init-git.sh
./init-git.sh
```

### Sur Windows :
```cmd
cd C:\chemin\vers\votre\site
init-git.bat
```

### Puis liez à GitHub :
```bash
git remote add origin https://github.com/VOTRE-NOM/gfe-etancheite.git
git branch -M main
git push -u origin main
```

---

## 📚 Documentation complète

- **Guide débutant :** Lisez `GITHUB-GUIDE.md`
- **Déploiement en ligne :** Lisez `DEPLOYMENT.md`
- **Infos du projet :** Lisez `README.md`

---

## 🎯 Prochaine étape recommandée

**Déployer sur Cloudflare Pages** (gratuit, rapide, CDN mondial) :

1. Allez sur [dash.cloudflare.com](https://dash.cloudflare.com/)
2. Pages → Create a project → Connect to Git
3. Sélectionnez votre repository `gfe-etancheite`
4. Deploy !

Votre site sera en ligne sur : `https://gfe-etancheite.pages.dev`

---

**🏔️ Bon courage avec votre site !**
