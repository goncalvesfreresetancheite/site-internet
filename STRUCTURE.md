# 🗺️ Structure du site GFE Étanchéité

## 📊 Architecture complète (40+ pages)

```
gfe-etancheite/
│
├── 🏠 PAGES PRINCIPALES (5)
│   ├── index.html                      # Page d'accueil
│   ├── contact.html                    # Formulaire contact
│   ├── devis.html                      # Demande devis gratuit
│   ├── services.html                   # Liste services (optionnel)
│   └── a-propos.html                   # À propos GFE (optionnel)
│
├── ⚖️ PAGES LÉGALES (3)
│   ├── mentions-legales.html           # Mentions légales
│   ├── politique-confidentialite.html  # RGPD
│   └── politique-cookies.html          # Gestion cookies
│
├── 📝 BLOG (4 articles)
│   ├── blog-terrasse-fuit-savoie.html  # Terrasse qui fuit : 3 solutions
│   ├── blog-montagne.html              # Étanchéité zone montagne 2026
│   ├── blog-dallettes.html             # Dallettes sur plots guide complet
│   └── blog-reglementations.html       # Réglementation 2026
│
├── 🏆 RÉALISATIONS / PORTFOLIO (3)
│   ├── realisation-student-factory.html     # Résidence étudiante Gières (2 800m²)
│   ├── realisation-josephine-baker.html     # Hôtel 4★ Val Thorens (1 200m²)
│   └── realisation-jandri-les-2-alpes.html  # Jandri 1,3,4 Les 2 Alpes
│
├── 🗺️ PAGES DÉPARTEMENTS (8)
│   ├── etancheite-savoie.html          # Savoie (73)
│   ├── etancheite-haute-savoie.html    # Haute-Savoie (74)
│   ├── etancheite-isere.html           # Isère (38)
│   ├── etancheite-rhone.html           # Rhône (69)
│   ├── etancheite-ain.html             # Ain (01)
│   ├── etancheite-loire.html           # Loire (42)
│   ├── etancheite-drome.html           # Drôme (26)
│   └── etancheite-ardeche.html         # Ardèche (07)
│
├── 🏙️ PAGES VILLES PRINCIPALES (9)
│   ├── etancheur-chambery.html         # Chambéry (73)
│   ├── etancheur-annecy.html           # Annecy (74)
│   ├── etancheur-grenoble.html         # Grenoble (38)
│   ├── etancheur-lyon.html             # Lyon (69)
│   ├── etancheur-albertville.html      # Albertville (73)
│   ├── etancheur-aix-les-bains.html    # Aix-les-Bains (73)
│   ├── etancheur-valence.html          # Valence (26)
│   ├── etancheur-saint-etienne.html    # Saint-Étienne (42)
│   └── etancheur-chamonix.html         # Chamonix (74)
│
├── ⛷️ PAGES STATIONS DE SKI (15)
│   ├── etancheite-val-thorens.html     # Val Thorens (73) - 2 300m
│   ├── etancheite-courchevel.html      # Courchevel (73) - 1 850m
│   ├── etancheite-meribel.html         # Méribel (73) - 1 450m
│   ├── etancheite-les-2-alpes.html     # Les 2 Alpes (38) - 1 650m
│   ├── etancheite-alpe-huez.html       # Alpe d'Huez (38) - 1 860m
│   ├── etancheite-la-plagne.html       # La Plagne (73) - 2 100m
│   ├── etancheite-les-arcs.html        # Les Arcs (73) - 1 600m
│   ├── etancheite-tignes.html          # Tignes (73) - 2 100m
│   ├── etancheite-megeve.html          # Megève (74) - 1 113m
│   ├── etancheite-chamonix.html        # Chamonix (74) - 1 035m
│   ├── etancheite-les-menuires.html    # Les Menuires (73)
│   ├── etancheite-morzine.html         # Morzine (74)
│   ├── etancheite-avoriaz.html         # Avoriaz (74)
│   ├── etancheite-serre-chevalier.html # Serre Chevalier (05)
│   └── etancheite-les-gets.html        # Les Gets (74)
│
├── 📁 RESSOURCES
│   ├── images/                         # Images (20+ photos)
│   │   ├── logo-gfe.png
│   │   ├── hero-*.jpg
│   │   ├── realisation-*.jpg
│   │   └── [autres images...]
│   │
│   ├── sitemap.xml                     # Plan du site (SEO)
│   ├── robots.txt                      # Instructions robots
│   └── favicon.png                     # Icône du site
│
└── 📚 DOCUMENTATION
    ├── README.md                       # Documentation principale
    ├── GITHUB-GUIDE.md                 # Guide GitHub pas à pas
    ├── DEPLOYMENT.md                   # Guide déploiement
    ├── CHANGELOG.md                    # Historique modifications
    ├── START-HERE.md                   # Instructions rapides
    ├── .gitignore                      # Fichiers ignorés par Git
    ├── init-git.sh                     # Script init (Mac/Linux)
    └── init-git.bat                    # Script init (Windows)
```

---

## 🔗 Liens internes principaux

### Navigation principale
```
Accueil (index.html)
  ├─→ Services (#services)
  ├─→ Zones d'intervention (#zones)
  ├─→ Réalisations (#realisations)
  ├─→ Blog (#blog)
  └─→ Contact (#contact)
```

### Maillage SEO départements
```
Auvergne-Rhône-Alpes
  ├─→ Savoie (73)
  │     ├─→ Chambéry
  │     ├─→ Albertville
  │     ├─→ Aix-les-Bains
  │     ├─→ Val Thorens
  │     ├─→ Courchevel
  │     └─→ Méribel
  │
  ├─→ Haute-Savoie (74)
  │     ├─→ Annecy
  │     ├─→ Chamonix
  │     └─→ Megève
  │
  ├─→ Isère (38)
  │     ├─→ Grenoble
  │     ├─→ Les 2 Alpes
  │     └─→ Alpe d'Huez
  │
  └─→ Rhône (69)
        └─→ Lyon
```

---

## 📈 Stratégie de contenu

### Pages SEO par intention de recherche

**Intention informative :**
- Blog articles → Trafic organique éducatif
- Guides techniques → Expertise démontrée

**Intention locale :**
- Pages départements → "étanchéité Savoie"
- Pages villes → "étancheur Chambéry"
- Pages stations → "étanchéité Val Thorens"

**Intention transactionnelle :**
- Devis gratuit → Conversion principale
- Contact → Lead generation
- Réalisations → Preuve sociale

---

## 🎯 Points d'entrée principaux

1. **Page d'accueil** (index.html)
   - Hero avec CTA "Devis Offert"
   - Services détaillés
   - Zones d'intervention (carte)
   - Réalisations récentes
   - Articles de blog
   - Formulaire contact

2. **Articles de blog** (SEO long tail)
   - Terrasse qui fuit Savoie → Intention problème
   - Étanchéité montagne → Intention expertise
   - Dallettes sur plots → Intention produit
   - Réglementation 2026 → Intention compliance

3. **Pages géolocalisées** (SEO local)
   - Départements → Requêtes larges
   - Villes → Requêtes précises
   - Stations → Niche haute montagne

---

## 🔄 Parcours utilisateur type

```
1. Google : "terrasse qui fuit Savoie"
   ↓
2. Atterrissage : blog-terrasse-fuit-savoie.html
   ↓
3. Lecture article → CTA "Devis Offert"
   ↓
4. Formulaire devis.html
   ↓
5. Lead capturé → Contact téléphonique GFE
```

---

## 📊 Métriques cibles

- **Pages vues/session :** 2.5+
- **Taux de rebond :** <50%
- **Durée session :** >2min
- **Conversion devis :** 3-5%
- **Appels téléphone :** tracking via 09 83 48 26 97

---

**Navigation fluide, SEO optimisé, conversion maximisée** 🚀
