# Hodja Auto WordPress Theme

**Modern, professionel og optimeret WordPress tema til Hodja Auto.**

---

## 📁 Struktur

### Root Filer

```
404.php              – 404 fejlside
footer.php           – Global footer
front-page.php       – Forside template
functions.php        – Tema funktioner, hooks & ACF
header.php           – Global header
index.php            – Fallback template
page.php             – Standard side template
style.css            – Tema metadata (påkrævet af WordPress)
```

### CSS Arkitektur (assets/css/)

│ └── usp.css – USP badges/pills│ ├── services.css – Service kort og grid│ ├── hero.css – Hero sektioner│ ├── cta.css – Call-to-action knapper og bokse├── components/││ └── \_vars.css – CSS custom properties (farver, skygger, spacing)├── base/assets/css/```**Lagdelt struktur inspireret af ITCSS:**

│
├── sections/
│ └── contact.css – Kontaktsektion (både forside og kontakt side)
│
├── pages/
│ ├── 404.css – 404 fejlside styling
│ ├── front-page.css – Forside-specifikke overrides og layout
│ ├── policy.css – Politik sider
│ └── servicepage.css – Service undersider
│
├── forms/
│ └── ff-form.css – Fluent Forms styling (scoped til .ff-form-wrapper)
│

├── global.css – Base styling, reset, typografi
├── header.min.css – Header/navigation styling
└── footer.min.css – Footer styling

````

---

## 🎨 CSS Principper

### 1. **Lagdeling (Layers)**
Følg denne rækkefølge:
1. **Base** – Variabler, reset, grundlæggende typografi
2. **Components** – Genbrugelige UI-komponenter (knapper, kort, badges)
3. **Sections** – Større sektioner der kombinerer komponenter
4. **Pages** – Side-specifikke layouts og overrides

### 2. **Scoping**
- **Komponenter** skal være generiske og genbrugelige
- **Page overrides** skal bruge `body.home`, `body.page-slug` for at scope
- Eksempel:
  ```css
  /* ✅ Godt - generisk komponent */
  .hero { ... }

  /* ✅ Godt - forside variant */
  body.home .hero { ... }

  /* ❌ Undgå - blander concerns */
  .home-hero { ... }
````

### 3. **CSS Custom Properties**

Brug altid variabler fra `_vars.css`:

```css
/* ✅ Godt */
color: var(--text);
background: var(--hodja-red);

/* ❌ Undgå */
color: #1f1a17;
background: #b00017;
```

### 4. **Naming Convention**

- Brug **semantiske navne**: `.hero`, `.contact-card`, `.services-grid`
- Brug **BEM** kun ved komplekse komponenter: `.card__header`, `.card--featured`
- Brug **modifiers** med `--`: `.button--primary`, `.hero--compact`

### 5. **Responsive Design**

- Brug `clamp()` for fluid sizing hvor muligt
- Media queries kun når nødvendigt
- Mobile-first approach (base styles = mobile, media queries = desktop)

---

## 🔧 Hvordan Tilføjer Jeg...

### En Ny Komponent

1. Opret fil i `assets/css/components/[navn].css`
2. Skriv generisk, genbrugelig styling
3. Enqueue i `functions.php`:
   ```php
   $component = $theme_dir . '/assets/css/components/[navn].css';
   if (file_exists($component)) {
       wp_enqueue_style('hodja-[navn]', $theme_uri . '/assets/css/components/[navn].css', ['hodja-global'], filemtime($component));
   }
   ```

### En Ny Side Template

1. Opret `templates/page-[slug].php`
2. Hvis behov for specifik styling, opret `assets/css/pages/[slug].css`
3. Enqueue i `functions.php` med side-check:
   ```php
   if (is_page_template('templates/page-[slug].php')) {
       // enqueue CSS
   }
   ```

### Tilpas Forside Layout

- **Generel styling**: Tilføj i relevante komponent-filer
- **Forside-specifikt**: Tilføj til `front-page.css` med `body.home` scope

---

## 🛠️ Development Workflow

### Quick Edits

- Rediger CSS direkte
- Test i browser
- Commit ændringer

### Build Tools (Valgfrit)

**Forudsætning:** Node.js skal være installeret.

Install Node.js (hvis ikke allerede installeret):

```bash
# Via Homebrew (macOS)
brew install node

# Eller download fra https://nodejs.org/
```

Installer PostCSS dependencies:

```bash
npm install
```

Build kommandoer:

```bash
# Build alle CSS filer
npm run build

# Build kun global.css
npm run build:global

# Watch mode (auto-rebuild ved ændringer)
npm run build:watch

# Tilføj vendor prefixes
npm run prefix
```

---

## 📦 Templates

### Standard Side Templates (templates/)

```
page-auto-el-fejlfinding.php      – Auto el & fejlfinding
page-bilreparationer.php          – Bilreparationer
page-bilservice.php               – Bilservice oversigt
page-book-vaerkstedstid-online.php – Booking
page-cookiepolitik.php            – Cookie politik
page-daek-faelge.php              – Dæk & fælge
page-drejearbejde.php             – Drejearbejde
page-faq.php                      – FAQ
page-kontakt.php                  – Kontakt side
page-om-os.php                    – Om os
page-privatlivspolitik.php        – Privatlivspolitik
page-serviceeftersyn.php          – Serviceeftersyn
page-tak-for-booking.php          – Tak for booking
```

### Partials (templates/partials/)

```
acf-info.php                      – ACF kontaktoplysninger partial
ff-form.php                       – Fluent Forms partial (kontaktformular)
```

---

## 🎯 ACF Integration

### Contact Info (group_68ee5d03037b9)

Defineret i `acf-json/group_68ee5d03037b9.json`.

**Shortcode:**

```php
[hodja_contact_info]
[hodja_contact_info hide_email="true"]
```

**Helper funktion:**

```php
$contact = hodja_get_acf_group_values('group_68ee5d03037b9');
echo $contact['phone'];
```

---

## 📋 Checklist Ved Nye Features

- [ ] Tilhører det base, component, section eller page?
- [ ] Er der eksisterende variabler jeg kan bruge?
- [ ] Kan styling genbruges på andre sider?
- [ ] Er naming konsistent med resten af temaet?
- [ ] Virker det responsivt på mobil/tablet/desktop?
- [ ] Er der unødvendige `!important`?
- [ ] Er kode kommenteret hvis kompleks?

---

## 🚀 Deploy

### Via VS Code Task

Brug den definerede task "Deploy & Flush":

```bash
curl -sS "https://hodjaauto.alwaysdata.net/?hodja_flush=1&key=hodja-secret-123"
```

### Manuel Deploy

1. Upload ændrede filer via SFTP (se `.vscode/sftp.json`)
2. Ryd cache på server

---

## 📝 Vedligeholdelse

### Performance

- Minificér CSS for produktion
- Brug conditional loading (kun load CSS når nødvendigt)
- Optimer billeder

### Code Quality

- Valider CSS med stylelint (valgfrit)
- Review kode før commit
- Hold `functions.php` organiseret

---

## 🤝 Bidrag

Ved ændringer:

1. Commit med beskrivende beskeder
2. Test grundigt
3. Push til repository

---

**Version:** 1.0
**Forfatter:** Hodja Auto Development Team
**Sidste opdatering:** December 2025
