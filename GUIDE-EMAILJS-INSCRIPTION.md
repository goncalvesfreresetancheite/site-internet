# 📧 Guide d'Inscription et Configuration EmailJS

## 🎯 Objectif
Configurer EmailJS pour recevoir les emails du formulaire de contact GFE en **français** avec **pièces jointes**.

---

## 📝 Étape 1 : Créer un Compte EmailJS (2 minutes)

### 1.1 Inscription
1. Allez sur : **https://www.emailjs.com/**
2. Cliquez sur **"Sign Up"** (en haut à droite)
3. Inscrivez-vous avec :
   - **Email** : hello@agencedelombre.fr (ou votre email principal)
   - **Mot de passe** : [créez un mot de passe sécurisé]
4. Cliquez sur **"Sign Up"**
5. Vérifiez votre email et cliquez sur le lien de confirmation

### 1.2 Connexion
- Une fois inscrit, connectez-vous à : **https://dashboard.emailjs.com/**

---

## 🔧 Étape 2 : Configurer le Service Email

### 2.1 Ajouter un Service Email
1. Dans le dashboard, cliquez sur **"Email Services"** (menu gauche)
2. Cliquez sur **"Add New Service"**
3. Choisissez votre fournisseur :
   - **Gmail** (si vous utilisez Gmail)
   - **Outlook/Hotmail** (si vous utilisez Outlook/Hotmail)
   - **Autre** (selon votre messagerie)

### 2.2 Configuration Gmail (exemple)
Si vous utilisez **Gmail** :
1. Sélectionnez **"Gmail"**
2. Cliquez sur **"Connect Account"**
3. Connectez-vous avec votre compte Gmail
4. Autorisez EmailJS à envoyer des emails
5. Donnez un nom au service : **"GFE Contact"**
6. Cliquez sur **"Create Service"**

### 2.3 Configuration Outlook/Hotmail (exemple)
Si vous utilisez **gfe-etancheite@hotmail.com** :
1. Sélectionnez **"Outlook.com"**
2. Cliquez sur **"Connect Account"**
3. Connectez-vous avec gfe-etancheite@hotmail.com
4. Autorisez EmailJS
5. Donnez un nom : **"GFE Contact"**
6. Cliquez sur **"Create Service"**

### ⚠️ Important : Notez le Service ID
Après création, vous verrez un **Service ID** (ex: `service_abc123`)
➡️ **NOTEZ CE SERVICE ID** (vous en aurez besoin)

---

## 📄 Étape 3 : Créer le Template d'Email en Français

### 3.1 Accéder aux Templates
1. Dans le dashboard, cliquez sur **"Email Templates"** (menu gauche)
2. Cliquez sur **"Create New Template"**

### 3.2 Configuration du Template
Remplissez les champs suivants :

**Template Name** :
```
GFE Demande Devis
```

**Subject** (Objet de l'email) :
```
Demande devis site 2 // {{nom}} - {{lieu}}
```

**Content** (Corps de l'email en HTML) :
```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
        .header { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); color: white; padding: 30px 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .header h1 { margin: 0; font-size: 24px; }
        .content { background: white; padding: 30px; border-radius: 0 0 10px 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .field { margin-bottom: 20px; border-left: 4px solid #3b82f6; padding-left: 15px; }
        .field-label { font-weight: bold; color: #1e3a8a; margin-bottom: 5px; font-size: 14px; text-transform: uppercase; }
        .field-value { color: #333; font-size: 16px; line-height: 1.5; }
        .footer { text-align: center; margin-top: 30px; padding-top: 20px; border-top: 2px solid #e5e7eb; font-size: 12px; color: #666; }
        .badge { display: inline-block; background: #3b82f6; color: white; padding: 5px 10px; border-radius: 5px; font-size: 12px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📨 Nouvelle Demande de Devis GFE</h1>
            <p style="margin: 10px 0 0 0; font-size: 14px;">Source : Site Web GFE 2.0</p>
        </div>
        
        <div class="content">
            <div class="badge">🆕 Nouveau Contact</div>
            
            <div class="field">
                <div class="field-label">👤 Nom / Société</div>
                <div class="field-value">{{nom}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">📍 Lieu du chantier</div>
                <div class="field-value">{{lieu}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">📞 Téléphone</div>
                <div class="field-value">{{telephone}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">📧 Email</div>
                <div class="field-value">{{email}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">🏢 Profil</div>
                <div class="field-value">{{profil}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">🏗️ Type de projet</div>
                <div class="field-value">{{typeProjet}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">⏰ Délai souhaité</div>
                <div class="field-value">{{delai}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">📝 Description du projet</div>
                <div class="field-value">{{description}}</div>
            </div>
            
            <div class="field">
                <div class="field-label">📎 Pièces jointes</div>
                <div class="field-value">{{attachments}}</div>
            </div>
        </div>
        
        <div class="footer">
            <p><strong>⏱️ Délai de réponse : 4 jours ouvrés maximum</strong></p>
            <p style="margin-top: 10px;">
                Ce message a été envoyé depuis le formulaire de contact du site GFE<br>
                <a href="https://goncalves-freres-etancheite.fr" style="color: #3b82f6; text-decoration: none;">www.goncalves-freres-etancheite.fr</a>
            </p>
            <p style="margin-top: 15px; font-size: 11px; color: #999;">
                Site créé par <a href="https://site.agencedelombre.fr" style="color: #3b82f6;">Agence de l'Ombre</a>
            </p>
        </div>
    </div>
</body>
</html>
```

### 3.3 Configuration des Destinataires

**To Email** (Destinataire principal) :
```
hello@agencedelombre.fr
```

**From Name** (Nom de l'expéditeur) :
```
Site GFE
```

**From Email** (Email de l'expéditeur) :
```
noreply@goncalves-freres-etancheite.fr
```

**Reply To** (Email de réponse) :
```
{{email}}
```
*(Cela permettra de répondre directement au client)*

### 3.4 Sauvegarder le Template
1. Cliquez sur **"Save"** en haut à droite
2. Notez le **Template ID** (ex: `template_xyz789`)

➡️ **NOTEZ CE TEMPLATE ID** (vous en aurez besoin)

---

## 🔑 Étape 4 : Obtenir la Clé Publique (Public Key)

### 4.1 Accéder aux Paramètres
1. Dans le dashboard, cliquez sur **"Account"** (menu gauche)
2. Allez dans l'onglet **"General"**

### 4.2 Copier la Public Key
Vous verrez votre **Public Key** (ex: `abc123XYZ456`)

➡️ **NOTEZ CETTE PUBLIC KEY** (vous en aurez besoin)

---

## 📋 Récapitulatif : Informations à Me Fournir

À la fin de cette configuration, vous devez me fournir **3 informations** :

```
1. SERVICE ID      : service_________
2. TEMPLATE ID     : template_________
3. PUBLIC KEY      : _________________
```

**Exemple** :
```
1. SERVICE ID      : service_abc123xyz
2. TEMPLATE ID     : template_def456uvw
3. TEMPLATE ID     : abc123XYZ456789
```

---

## ✅ Étape 5 : Me Transmettre les Informations

### Option A : Par Email
Envoyez-moi un email à **[votre email dev]** avec :
```
Objet : GFE - Configuration EmailJS

Bonjour,

Voici les informations EmailJS pour le site GFE :

SERVICE ID   : service_abc123xyz
TEMPLATE ID  : template_def456uvw
PUBLIC KEY   : abc123XYZ456789

Merci !
```

### Option B : Par Message
Transmettez-moi directement les 3 informations dans notre conversation.

---

## 🎯 Ce Qui Va Se Passer Ensuite

Une fois que vous m'aurez fourni ces 3 informations, je vais :

1. ✅ Intégrer EmailJS dans le formulaire
2. ✅ Configurer l'envoi avec pièces jointes
3. ✅ Tester l'envoi d'un email
4. ✅ Vérifier que vous recevez l'email en français avec les fichiers

**Temps estimé : 30 minutes**

---

## ❓ FAQ

### Q : C'est vraiment gratuit ?
**R :** Oui ! Le plan gratuit EmailJS offre **200 emails/mois**, largement suffisant pour GFE.

### Q : Dois-je utiliser gfe-etancheite@hotmail.com ?
**R :** Vous pouvez utiliser n'importe quel email. Je recommande :
- **hello@agencedelombre.fr** (pour les tests initiaux)
- Puis activer **gfe-etancheite@hotmail.com** une fois validé

### Q : Les pièces jointes ont une limite ?
**R :** Oui, EmailJS limite à **2 Mo par fichier** et **10 Mo au total** par email. C'est suffisant pour des photos/PDF de devis.

### Q : Puis-je recevoir les emails sur plusieurs adresses ?
**R :** Oui ! Vous pouvez ajouter des Bcc (copies cachées) dans le template ou la configuration du service.

### Q : Combien de temps prend l'inscription ?
**R :** **2-3 minutes** maximum. C'est très simple !

### Q : Que se passe-t-il si je dépasse 200 emails/mois ?
**R :** EmailJS vous enverra une notification. Vous pourrez passer au plan payant (9$/mois pour 1000 emails) ou changer de solution.

---

## 🆘 Besoin d'Aide ?

Si vous rencontrez un problème durant l'inscription :

1. **Documentation EmailJS** : https://www.emailjs.com/docs/
2. **Me contacter** : [votre email de support]
3. **Partage d'écran** : Je peux vous guider en temps réel

---

## 📞 Contact

**Questions** : hello@agencedelombre.fr  
**Support technique** : [votre email support]

---

**Document créé par Agence de L'Ombre**  
*Dernière mise à jour : 11 février 2026*

---

## ⏭️ Prochaine Étape

➡️ **ACTION REQUISE** : Suivez ce guide et transmettez-moi les 3 informations (Service ID, Template ID, Public Key)

Une fois reçues, je configure tout et vous avez votre formulaire opérationnel en français avec pièces jointes ! 🎉
