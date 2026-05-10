# 🚀 Guide de déploiement - GFE Étanchéité

Ce guide vous explique comment déployer votre site sur différentes plateformes.

## 📋 Table des matières

1. [Cloudflare Pages (Recommandé)](#cloudflare-pages)
2. [Netlify](#netlify)
3. [Vercel](#vercel)
4. [GitHub Pages](#github-pages)
5. [Serveur traditionnel (FTP)](#serveur-traditionnel)

---

## 🟧 Cloudflare Pages (Recommandé)

**Avantages :** CDN mondial, HTTPS gratuit, performances optimales, domaine custom gratuit

### Étapes :

1. **Créez un compte Cloudflare**
   - Allez sur [dash.cloudflare.com](https://dash.cloudflare.com/)
   - Créez un compte gratuit

2. **Accédez à Pages**
   - Dans le dashboard, cliquez sur "Pages"
   - Cliquez sur "Create a project"

3. **Connectez GitHub**
   - Sélectionnez "Connect to Git"
   - Autorisez Cloudflare à accéder à votre GitHub
   - Sélectionnez le repository `gfe-etancheite`

4. **Configuration du build**
   ```
   Project name: gfe-etancheite
   Production branch: main
   Build command: (laisser vide)
   Build output directory: /
   Root directory: (laisser vide)
   ```

5. **Déployez**
   - Cliquez sur "Save and Deploy"
   - Votre site sera disponible sur `https://gfe-etancheite.pages.dev`

6. **Domaine personnalisé** (optionnel)
   - Allez dans "Custom domains"
   - Ajoutez `www.goncalves-freres-etancheite.fr`
   - Suivez les instructions pour configurer les DNS

**✅ Déploiement automatique :** Chaque push sur `main` redéploie automatiquement !

---

## 🟦 Netlify

**Avantages :** Interface simple, formulaires intégrés, redirections faciles

### Étapes :

1. **Créez un compte Netlify**
   - Allez sur [netlify.com](https://www.netlify.com/)
   - Connectez-vous avec GitHub

2. **Nouveau site**
   - Cliquez sur "Add new site" → "Import an existing project"
   - Sélectionnez "GitHub"
   - Choisissez le repository `gfe-etancheite`

3. **Configuration**
   ```
   Branch to deploy: main
   Build command: (laisser vide)
   Publish directory: /
   ```

4. **Déployez**
   - Cliquez sur "Deploy site"
   - Votre site sera disponible sur `https://random-name.netlify.app`

5. **Domaine personnalisé**
   - Site settings → Domain management → Add custom domain
   - Ajoutez `www.goncalves-freres-etancheite.fr`

---

## ⬛ Vercel

**Avantages :** Très rapide, excellent pour les projets modernes

### Étapes :

1. **Créez un compte Vercel**
   - Allez sur [vercel.com](https://vercel.com/)
   - Connectez-vous avec GitHub

2. **Import project**
   - Cliquez sur "Add New..." → "Project"
   - Sélectionnez le repository `gfe-etancheite`

3. **Configuration**
   ```
   Framework Preset: Other
   Build Command: (laisser vide)
   Output Directory: /
   Install Command: (laisser vide)
   ```

4. **Deploy**
   - Cliquez sur "Deploy"
   - Votre site sera disponible sur `https://gfe-etancheite.vercel.app`

---

## 🟩 GitHub Pages

**Avantages :** Gratuit, simple, intégré à GitHub

### Étapes :

1. **Activez GitHub Pages**
   - Allez dans les Settings de votre repository
   - Section "Pages"
   - Source : Branch `main`, dossier `/ (root)`

2. **Attendez le déploiement**
   - GitHub déploie automatiquement
   - Votre site sera disponible sur `https://VOTRE-USERNAME.github.io/gfe-etancheite/`

3. **Domaine personnalisé**
   - Dans la section Pages, ajoutez votre domaine
   - Configurez les DNS de votre domaine

**⚠️ Note :** GitHub Pages peut avoir des limitations avec certains types de contenu.

---

## 🟨 Serveur traditionnel (FTP)

**Avantages :** Contrôle total, hébergement classique

### Étapes :

1. **Téléchargez tous les fichiers**
   - Clonez le repository : `git clone https://github.com/VOTRE-USERNAME/gfe-etancheite.git`

2. **Connectez-vous en FTP**
   - Utilisez FileZilla, Cyberduck ou votre client FTP préféré
   - Hôte : `ftp.votre-hebergeur.com`
   - Utilisateur et mot de passe fournis par votre hébergeur

3. **Uploadez les fichiers**
   - Uploadez **tous les fichiers** à la racine du site (`/public_html/` ou `/www/`)
   - Conservez la structure des dossiers

4. **Vérifiez**
   - Accédez à `www.goncalves-freres-etancheite.fr`
   - Testez toutes les pages

---

## 🔧 Configuration DNS

Pour pointer votre domaine vers le service de déploiement :

### Pour Cloudflare Pages :
```
Type: CNAME
Name: www
Target: gfe-etancheite.pages.dev
```

### Pour Netlify :
```
Type: CNAME
Name: www
Target: gfe-etancheite.netlify.app
```

### Pour Vercel :
```
Type: CNAME
Name: www
Target: cname.vercel-dns.com
```

---

## ✅ Checklist post-déploiement

- [ ] Le site est accessible
- [ ] Toutes les pages se chargent correctement
- [ ] Les images s'affichent
- [ ] Le formulaire de contact fonctionne
- [ ] Le menu mobile fonctionne
- [ ] Les liens internes fonctionnent
- [ ] Le sitemap.xml est accessible
- [ ] Le robots.txt est accessible
- [ ] HTTPS est activé
- [ ] Certificat SSL valide

---

## 📞 Besoin d'aide ?

Si vous rencontrez des difficultés, contactez-moi ou consultez la documentation des plateformes :
- [Cloudflare Pages Docs](https://developers.cloudflare.com/pages/)
- [Netlify Docs](https://docs.netlify.com/)
- [Vercel Docs](https://vercel.com/docs)

---

**Bonne chance ! 🚀**
