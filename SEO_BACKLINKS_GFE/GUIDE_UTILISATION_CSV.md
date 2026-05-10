# 📊 Guide d'utilisation - BACKLINKS_TRACKING.csv

## 🎯 Objectif du fichier

Ce fichier CSV permet de suivre en temps réel tous vos backlinks : création, statut, vérification, et performance.

---

## 📂 Comment utiliser ce fichier

### Étape 1 : Importer dans Google Sheets

1. Aller sur https://sheets.google.com/
2. **Fichier** → **Importer**
3. Sélectionner `BACKLINKS_TRACKING.csv`
4. Options d'import :
   - Type : Remplacer la feuille de calcul
   - Séparateur : Virgule
   - Convertir texte en nombres : **NON** (décocher)
5. Cliquer **Importer les données**

### Étape 2 : Mise en forme recommandée

1. **Figer la première ligne** (en-têtes) :
   - Affichage → Figer → 1 ligne
2. **Filtrer les colonnes** :
   - Sélectionner ligne 1 → Données → Créer un filtre
3. **Couleurs par statut** :
   - ⏳ "À faire" : Orange
   - 🔄 "En cours" : Bleu
   - ✅ "Fait" : Vert

### Étape 3 : Mise à jour quotidienne

Chaque soir, après vos inscriptions :
1. Remplir colonne "Date inscription"
2. Changer "Statut" de "À faire" → "Fait"
3. Noter "Anchor text" utilisé
4. Ajouter "Notes" si besoin (numéro compte, login, etc.)

---

## 📋 Description des colonnes

### Colonnes principales

| Colonne | Description | Exemple |
|---------|-------------|---------|
| **ID** | Numéro unique (1-75) | 1, 2, 3... |
| **Catégorie** | Type de source backlink | Annuaires BTP, Haute Autorité, Forums, etc. |
| **Nom de la source** | Nom du site/annuaire | Pages Jaunes, L'Annuaire BTP, etc. |
| **URL** | Lien vers le site | https://www.pagesjaunes.fr/ |
| **DA** | Domain Authority (Ahrefs/Moz) | 85, 42, 30... |
| **DoFollow** | Type de lien (Oui/Non) | Oui = Jus SEO transmis |

### Colonnes de suivi

| Colonne | Description | Format |
|---------|-------------|--------|
| **Date inscription** | Date création backlink | 25/02/2026 |
| **Date vérification** | Dernière vérification lien actif | 15/03/2026 |
| **Statut** | État actuel | À faire / En cours / Fait |
| **Lien actif** | Le backlink fonctionne-t-il ? | Oui / Non / À vérifier |
| **Anchor text** | Texte du lien | GFE Étanchéité, site web, en savoir plus |
| **URL cible** | Page de destination | https://goncalves-freres-etancheite.fr/ |

### Colonnes organisationnelles

| Colonne | Description | Utilité |
|---------|-------------|---------|
| **Notes** | Observations libres | Login : xxx, compte créé, email validé, etc. |
| **Priorité** | Importance | Critique / Haute / Moyenne |
| **Temps estimé** | Durée inscription | 10min, 30min, 1h, etc. |

---

## 🎨 Codes couleur recommandés

### Par statut
- 🟠 **À faire** : Orange (#FFA500)
- 🔵 **En cours** : Bleu (#3498DB)
- 🟢 **Fait** : Vert (#27AE60)

### Par priorité
- 🔴 **Critique** : Rouge foncé (#C0392B)
- 🟡 **Haute** : Orange (#E67E22)
- ⚪ **Moyenne** : Gris clair (#BDC3C7)

### Par DA (Domain Authority)
- 🟢 **DA >70** : Vert foncé (excellente autorité)
- 🟡 **DA 40-70** : Jaune (bonne autorité)
- 🟠 **DA 20-40** : Orange (autorité moyenne)
- ⚪ **DA <20** : Gris (faible autorité, mais utile pour diversité)

---

## 📊 Filtres utiles

### Filtre 1 : Backlinks à créer cette semaine
- **Statut** = "À faire"
- **Priorité** = "Critique" OU "Haute"
- Trier par **Temps estimé** (croissant)

### Filtre 2 : Backlinks haute autorité (DA >60)
- **DA** > 60
- **Statut** = "À faire"
- Trier par **DA** (décroissant)

### Filtre 3 : Vérification mensuelle
- **Date vérification** < [Date du mois dernier]
- **Lien actif** ≠ "Non"
- Action : Vérifier et mettre à jour

### Filtre 4 : Backlinks perdus/morts
- **Lien actif** = "Non"
- Action : Contacter webmaster ou créer nouveau backlink similaire

---

## 🔄 Routine de mise à jour

### Quotidienne (5 min - chaque soir)

```
1. Ouvrir BACKLINKS_TRACKING.csv
2. Chercher lignes créées aujourd'hui
3. Remplir :
   - Date inscription
   - Statut → "Fait"
   - Anchor text utilisé
   - Notes (login, email validation, etc.)
4. Sauvegarder
```

### Hebdomadaire (30 min - chaque lundi)

```
1. Filtrer Statut = "Fait"
2. Vérifier 5-10 liens créés semaine passée
3. Tester : Lien actif ? (Oui/Non)
4. Mettre à jour "Date vérification"
5. Calculer statistiques :
   - Total backlinks créés
   - DA moyen
   - % DoFollow vs NoFollow
```

### Mensuelle (1h - 1er du mois)

```
1. Rapport complet :
   - Backlinks créés ce mois
   - Backlinks cumulés
   - DA moyen
   - Répartition par catégorie
2. Vérification liens actifs (tous)
3. Identification backlinks morts
4. Planification mois suivant
```

---

## 📈 Statistiques à extraire

### Formules Google Sheets utiles

**Total backlinks créés** :
```
=COUNTIF(I:I,"Fait")
```

**DA moyen des backlinks actifs** :
```
=AVERAGEIF(I:I,"Fait",E:E)
```

**Pourcentage DoFollow** :
```
=COUNTIF(F:F,"Oui")/COUNTIF(I:I,"Fait")*100
```

**Backlinks par catégorie** :
```
=COUNTIF(B:B,"Annuaires BTP")
```

---

## 🎯 Objectifs de tracking

### Semaine 1
- [ ] 15 lignes passées à "Fait"
- [ ] DA moyen >60
- [ ] Notes remplies pour chaque inscription

### Mois 1
- [ ] 30 lignes passées à "Fait"
- [ ] 100% liens vérifiés actifs
- [ ] Dashboard statistiques créé

### Mois 3
- [ ] 75 lignes passées à "Fait"
- [ ] Aucun lien mort
- [ ] Rapport mensuel automatisé

### Mois 6
- [ ] Toutes les 75 lignes complétées
- [ ] Ajout de 50+ nouvelles sources
- [ ] Backlinks vérifiés trimestriellement

---

## ⚠️ Erreurs fréquentes à éviter

### ❌ Erreur 1 : Ne pas noter les logins
**Problème** : Impossible de retrouver compte créé  
**Solution** : Toujours remplir colonne "Notes" avec login/email utilisé

### ❌ Erreur 2 : Oublier validation email
**Problème** : Compte supprimé après 48h  
**Solution** : Noter "Email à valider" dans Notes + vérifier spam

### ❌ Erreur 3 : Ne pas vérifier liens actifs
**Problème** : Backlinks morts non détectés  
**Solution** : Vérification mensuelle obligatoire

### ❌ Erreur 4 : Anchor text identique partout
**Problème** : Sur-optimisation = risque pénalité Google  
**Solution** : Varier les ancres (voir règle 70-20-10)

### ❌ Erreur 5 : Abandonner le suivi
**Problème** : Perte de vue de la progression  
**Solution** : Routine quotidienne stricte (5 min/jour)

---

## 🔗 Liens utiles

### Vérification DA/DR
- **Ahrefs** : https://ahrefs.com/website-authority-checker
- **Moz** : https://moz.com/link-explorer
- **Ubersuggest** : https://neilpatel.com/ubersuggest/

### Vérification lien actif
- **Dead Link Checker** : https://www.deadlinkchecker.com/
- **Broken Link Check** : https://www.brokenlinkcheck.com/

### Gestionnaire mots de passe
- **LastPass** : https://www.lastpass.com/
- **1Password** : https://1password.com/
- **Bitwarden** : https://bitwarden.com/ (gratuit)

---

## 📊 Exemple de rapport mensuel

### Mois de Mars 2026

**Backlinks créés** : 30  
**Backlinks cumulés** : 30  
**DA moyen** : 62  
**DoFollow** : 70% (21/30)  
**Liens actifs** : 100% (30/30)

**Répartition par catégorie** :
- Annuaires BTP : 8 (27%)
- Haute Autorité : 8 (27%)
- Citations NAP : 7 (23%)
- Réseaux Sociaux : 4 (13%)
- Annuaires Locaux : 3 (10%)

**Top 5 sources** :
1. Google Business Profile (DA 100)
2. YouTube (DA 100)
3. Yelp France (DA 93)
4. Bing Places (DA 95)
5. Quora (DA 93)

**Prochaines actions** :
- Continuer annuaires généralistes (10)
- Démarrer forums BTP (5)
- Contacter CCI Savoie et Haute-Savoie
- Rédiger 1er article guest blog

---

## 💾 Sauvegarde & Partage

### Sauvegarde automatique
- Google Sheets sauvegarde automatiquement
- Télécharger copie locale chaque semaine :
  - **Fichier** → **Télécharger** → **CSV** (.csv)

### Partage avec équipe
- Google Sheets → **Partager** (en haut à droite)
- Ajouter emails collaborateurs
- Droits : "Peut modifier" OU "Peut commenter"

### Export Excel (si besoin)
- **Fichier** → **Télécharger** → **Microsoft Excel** (.xlsx)

---

## 🎓 Ressources complémentaires

### Tutoriels Google Sheets
- https://support.google.com/docs/answer/6000292 (Filtres)
- https://support.google.com/docs/answer/46977 (Mise en forme conditionnelle)

### Guides backlinks
- Backlinko : https://backlinko.com/
- Ahrefs Blog : https://ahrefs.com/blog/
- Moz : https://moz.com/learn/seo/backlinks

---

## 📞 Support

**Questions sur le tracking ?**  
- 📧 contact@goncalves-freres-etancheite.fr
- 📚 Consulter README.md
- 📖 Lire QUICK_START_7_DAYS.md

---

**Dernière mise à jour** : 25 février 2026  
**Version** : 1.0  
**Projet** : GFE Étanchéité - Stratégie SEO Backlinks

---

🎯 **"Ce qui est mesuré est amélioré. Ce qui est suivi est accompli."**

Bon suivi ! 📊✨
