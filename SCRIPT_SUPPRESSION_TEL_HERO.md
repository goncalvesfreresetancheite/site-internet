# Script de suppression des boutons téléphone Hero

## Fichiers à corriger :
- etancheur-annecy.html
- etancheur-lyon.html
- etancheur-valence.html
- etancheur-saint-etienne.html
- etancheur-albertville.html
- etancheur-chamonix.html

## Pattern à remplacer :
```html
<div class="flex flex-col sm:flex-row gap-4 justify-center">
    <a href="#contact" class="btn-primary text-center">
        <i class="fas fa-phone mr-2"></i> 09 83 48 26 97
    </a>
    <a href="#contact" class="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors">
        Devis Offert
    </a>
</div>
```

## Par :
```html
<div class="flex flex-col sm:flex-row gap-4 justify-center">
    <a href="index.html#contact" class="bg-white text-blue-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors shadow-xl">
        <i class="fas fa-file-alt mr-2"></i> Devis Offert
    </a>
</div>
```

## Et ajouter mt-8 sur la section suivante
