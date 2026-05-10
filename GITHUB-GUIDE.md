# 📚 Guide complet - Publier votre site sur GitHub

Ce guide vous accompagne **étape par étape** pour mettre votre site GFE Étanchéité sur GitHub.

---

## 🎯 Option 1 : Via l'interface web GitHub (Le plus simple, sans ligne de commande)

### Étape 1 : Créer un compte GitHub

1. Allez sur [github.com](https://github.com/)
2. Cliquez sur "Sign up"
3. Créez votre compte (gratuit)

### Étape 2 : Créer un nouveau repository

1. Une fois connecté, cliquez sur le **"+" en haut à droite** → "New repository"
2. Remplissez les informations :
   ```
   Repository name: gfe-etancheite
   Description: Site web officiel GFE - Étanchéité zone montagne
   ☑️ Public (ou Private si vous préférez)
   ☑️ Add a README file (cochez cette case)
   Add .gitignore: None (on l'a déjà créé)
   License: None
   ```
3. Cliquez sur **"Create repository"**

### Étape 3 : Uploader les fichiers

1. Dans votre nouveau repository, cliquez sur **"Add file"** → **"Upload files"**
2. **Glissez-déposez** tous les fichiers de votre site web :
   - Tous les fichiers `.html`
   - Le dossier `images/`
   - `sitemap.xml`, `robots.txt`, `favicon.png`
   - `.gitignore`, `README.md`, etc.
3. En bas, ajoutez un message de commit :
   ```
   🎉 Initial commit - Site GFE Étanchéité complet
   ```
4. Cliquez sur **"Commit changes"**

### ✅ C'est fait !

Votre site est maintenant sur GitHub à l'adresse :
```
https://github.com/VOTRE-USERNAME/gfe-etancheite
```

---

## 🎯 Option 2 : Via la ligne de commande (Pour les développeurs)

### Prérequis

- Git installé sur votre ordinateur ([télécharger Git](https://git-scm.com/))
- Un terminal (Terminal sur Mac/Linux, Git Bash sur Windows)

### Étape 1 : Créer le repository sur GitHub

1. Allez sur [github.com/new](https://github.com/new)
2. Créez le repository "gfe-etancheite"
3. **Ne cochez RIEN** (pas de README, pas de .gitignore)
4. Cliquez sur "Create repository"

### Étape 2 : Initialiser Git localement

Ouvrez un terminal dans le dossier de votre site et exécutez :

**Sur Mac/Linux :**
```bash
chmod +x init-git.sh
./init-git.sh
```

**Sur Windows :**
```cmd
init-git.bat
```

**Ou manuellement :**
```bash
# Initialiser Git
git init

# Ajouter tous les fichiers
git add .

# Premier commit
git commit -m "🎉 Initial commit - Site GFE Étanchéité complet"

# Renommer la branche en main
git branch -M main

# Ajouter le remote GitHub
git remote add origin https://github.com/VOTRE-USERNAME/gfe-etancheite.git

# Pousser le code
git push -u origin main
```

### ✅ C'est fait !

Votre code est maintenant sur GitHub !

---

## 🚀 Étape suivante : Déployer le site en ligne

Maintenant que votre code est sur GitHub, vous pouvez le déployer sur :

### 1. **Cloudflare Pages** (Recommandé)
- Gratuit, rapide, CDN mondial
- Suivez le guide dans `DEPLOYMENT.md`

### 2. **Netlify**
- Interface simple, très populaire
- Suivez le guide dans `DEPLOYMENT.md`

### 3. **Vercel**
- Ultra-rapide, moderne
- Suivez le guide dans `DEPLOYMENT.md`

---

## 🔄 Mettre à jour votre site après modifications

### Via l'interface web GitHub :

1. Allez dans votre repository
2. Cliquez sur le fichier à modifier
3. Cliquez sur l'icône ✏️ (Edit)
4. Faites vos modifications
5. En bas : "Commit changes"

### Via la ligne de commande :

```bash
# Après avoir modifié des fichiers :

git add .
git commit -m "Description de vos modifications"
git push
```

---

## 📋 Commandes Git utiles

```bash
# Voir le statut de vos fichiers
git status

# Voir l'historique des commits
git log --oneline

# Annuler les modifications non commitées
git checkout -- nom-du-fichier.html

# Créer une nouvelle branche
git checkout -b nouvelle-fonctionnalite

# Changer de branche
git checkout main

# Fusionner une branche
git merge nouvelle-fonctionnalite
```

---

## ❓ FAQ

### Q : Je n'ai jamais utilisé Git, c'est compliqué ?
**R :** Utilisez l'**Option 1** (interface web). C'est aussi simple que de déposer des fichiers dans un dossier Dropbox !

### Q : Puis-je garder le repository privé ?
**R :** Oui ! Créez un repository **Private** au lieu de Public. Seul vous y aurez accès.

### Q : Comment inviter un collaborateur ?
**R :** Settings → Collaborators → Add people

### Q : Je veux supprimer le repository, comment faire ?
**R :** Settings → (tout en bas) Delete this repository

### Q : Faut-il payer pour GitHub ?
**R :** Non ! GitHub est **gratuit** pour un usage illimité (public ou privé).

---

## 🎉 Félicitations !

Vous avez maintenant :
- ✅ Votre code versionné sur GitHub
- ✅ Un historique de toutes vos modifications
- ✅ Un backup sécurisé de votre site
- ✅ La possibilité de collaborer avec d'autres
- ✅ La base pour déployer en ligne automatiquement

**Prochaine étape :** Consultez `DEPLOYMENT.md` pour mettre votre site en ligne ! 🚀

---

**Besoin d'aide ?**  
📧 Contactez votre développeur ou consultez [docs.github.com](https://docs.github.com/)
