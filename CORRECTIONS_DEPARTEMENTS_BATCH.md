# Corrections à appliquer sur TOUS les départements

## Départements concernés
- ✅ Isère (etancheite-isere.html) - FAIT
- ✅ Haute-Savoie (etancheite-haute-savoie.html) - FAIT  
- ⏳ Ain (etancheite-ain.html)
- ⏳ Rhône (etancheite-rhone.html)
- ⏳ Drôme (etancheite-drome.html)
- ⏳ Ardèche (etancheite-ardeche.html)
- ⏳ Loire (etancheite-loire.html)
- ⏳ Savoie (etancheite-savoie.html)

## Corrections à appliquer

### 1. CTA Hero (ligne ~62-65)
**AVANT:**
```html
<div class="flex flex-col sm:flex-row gap-4 justify-center">
    <a href="#contact" class="btn-primary text-center"><i class="fas fa-phone mr-2"></i> 09 83 48 26 97</a>
    <a href="#contact" class="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors">Devis Offert</a>
</div>
```

**APRÈS:**
```html
<div class="flex justify-center mb-6">
    <a href="index.html#contact" class="btn-primary text-center text-lg px-10 py-4">
        <i class="fas fa-file-alt mr-2"></i> Devis Offert
    </a>
</div>
```

### 2. Texte expérience
**AVANT:** "Depuis 2011"  
**APRÈS:** "15 ans d'expérience"

### 3. Section CTA bas (ligne ~178-193)
**Supprimer le bloc téléphone** (lignes 187-190)  
**Ajouter mb-8 sur le bouton et mb-0 sur la section**

