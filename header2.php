<style>
    @media (max-width: 767px) {
  .not-mobile, .tablet-only, .desktop-only {
    display: none !important;
  }
}

@media (min-width: 768px) and (max-width: 1199px) {
  .mobile-only, .not-tablet, .desktop-only {
    display: none !important;
  }
}

@media (min-width: 1200px) {
  .mobile-only, .tablet-only, .not-desktop {
    display: none !important;
  }
}

@media (min-width: 1600px) {
  .mobile-only, .tablet-only, .desktop-only, .not-large {
    display: none !important;
  }
}

:root {
  --header-height: 96px;
}

@media (max-width: 1199px) {
  :root {
    --header-height: 48px;
  }
}

body {
  padding-top: var(--header-height);
}

header button, header input, header optgroup, header select, header textarea {
  margin: 0;
  font-family: inherit;
  font-size: 100%;
  line-height: 1.15;
}

header div, header span, header object, header iframe, header figure, header h1, header h2, header h3, header h4, header h5, header h6, header p, header blockquote, header pre, header a, header code, header em, header img, header small, header strike, header strong, header sub, header sup, header tt, header b, header u, header i, header ol, header ul, header li, header fieldset, header form, header label, header table, header caption, header tbody, header tfoot, header thead, header tr, header th, header td, header main, header canvas, header embed, header footer, header header, header nav, header section, header video {
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-text-size-adjust: none;
  text-size-adjust: none;
  border: 0;
  margin: 0;
  padding: 0;
}

header ol, header ul {
  list-style: none;
}

header a, header a:hover, header a:active, header a:focus, header a:focus-within {
  text-decoration: none;
}

header .btn-mainwebsite {
  height: var(--size);
  line-height: var(--size);
  padding-left: calc(var(--size) / 3);
  padding-right: calc(var(--size) / 3);
  border-radius: calc(var(--size) / 2);
  font-family: Carnas, DejaVu Sans Mono, Bitstream Vera Sans Mono, Monaco, monospace;
  font-weight: bold;
  font-size: calc(var(--size) * .32);
  justify-content: space-between;
  align-items: center;
  gap: calc(var(--size) / 3);
  text-transform: uppercase;
  white-space: nowrap;
  cursor: pointer;
  filter: blur();
  --size: 48px;
  border: none;
  transition: all .2s;
  display: inline-flex;
}

header .btn-mainwebsite.is-xxs {
  --size: 26px;
}

header .btn-mainwebsite.is-xs {
  --size: 32px;
}

header .btn-mainwebsite.is-s {
  --size: 40px;
}

header .btn-mainwebsite.is-xl {
  --size: 60px;
}

@media (max-width: 1199px) {
  header .btn-mainwebsite {
    --size: 40px;
  }
}

header .btn-mainwebsite.is-large-gap {
  gap: var(--size);
}

header .btn-mainwebsite.is-icon {
  width: var(--size);
  -webkit-user-select: none;
  user-select: none;
  justify-content: center;
  padding-left: 0;
  padding-right: 0;
}

header .btn-mainwebsite.is-icon svg {
  transition: all .2s;
}

header .btn-mainwebsite.is-primary {
  color: #fff;
  background: #a9045d;
}

header .btn-mainwebsite.is-primary.is-alt {
  color: #a9045d;
  background: #a9045d0f;
}

header .btn-mainwebsite.is-secondary {
  color: #fff;
  background: #48bdcb;
}

header .btn-mainwebsite.is-secondary.is-alt {
  color: #48bdcb;
  background: #48bdcb0f;
}

header .btn-mainwebsite.is-white {
  color: #a9045d;
  background: #faf7f9;
}

header .btn-mainwebsite.is-white.is-alt {
  color: #faf7f9;
  background: #faf7f933;
}

header .btn-mainwebsite.is-white.is-alt:hover {
  background: #faf7f94d;
}

header .btn-mainwebsite.is-white.is-alt:active {
  transform: scale(.9);
}

header .btn-mainwebsite.is-anim-y:hover {
  text-decoration: none;
  transition: all .2s cubic-bezier(.34, 1.56, .64, 1);
  transform: translateY(-4px);
}

header .btn-mainwebsite.is-anim-y:active {
  transition: all .2s linear;
  transform: translateY(-2px);
}

header .btn-mainwebsite.is-anim-s:hover {
  text-decoration: none;
  transition: all .2s cubic-bezier(.34, 1.56, .64, 1);
  transform: scale(1.05);
}

header .btn-mainwebsite.is-anim-s:active {
  transition: all .2s linear;
  transform: scale(.95);
}

header .btn-mainwebsite:hover, header .btn-mainwebsite:active, header .btn-mainwebsite:focus, header .btn-mainwebsite:focus-within {
  -webkit-text-decoration: inherit;
  text-decoration: inherit;
}

header {
  height: var(--header-height);
  width: 100%;
  z-index: 100;
  background: #a9045d;
  display: flex;
  position: fixed;
  top: 0;
  left: 0;
  box-shadow: 0 15px 35px #a9045d33;
}

header .container-mainwebsite {
  max-width: 1232px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  padding-left: 150px;
  padding-right: 150px;
}
header .container-mainwebsite-pour-aller-plus-loin {
  max-width: 1232px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  padding-left: 450px;
  padding-right: 450px;
}

header .flex {
  display: flex;
}

header .flex.centered {
  justify-content: center;
}

header .flex.right {
  justify-content: flex-end;
}

header .flex.spaced {
  justify-content: space-between;
}

header .flex.vertical {
  flex-direction: column;
}

header .flex.vertical.reverse {
  flex-direction: column-reverse;
}

header .flex.reverse {
  flex-direction: row-reverse;
}

@media (max-width: 1199px) {
  header {
    background: #a9045d;
    justify-content: space-between;
    box-shadow: 0 8px 15px #a9045d33;
  }

  header:after {
    content: "";
    height: 3px;
    width: 100%;
    pointer-events: none;
    transform-origin: 100% 0;
    background: #a9045d;
    transition: all .2s ease-in-out;
    position: absolute;
    bottom: -3px;
    right: 0;
    transform: scaleX(0);
  }
}

header:before {
  content: "";
  width: 100%;
  height: 100%;
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  z-index: -1;
  position: absolute;
  top: 0;
  left: 0;
}

@media (max-width: 1199px) {
  header:before {
    content: none;
  }
}

header > * {
  -webkit-user-select: none;
  user-select: none;
}

header .logo {
  height: 100%;
  justify-content: center;
  align-items: flex-start;
  padding: 0;
  display: flex;
  margin-left: -24px;
}




header nav#main-nav {
  height: 100%;
  flex-grow: 1;
}

@media (max-width: 1199px) {
  header nav#main-nav {
    display: none;
  }
}

header nav#main-nav ul {
  height: 100%;
  justify-content: space-around;
  gap: 12px;
  margin-left: 16px;
  display: flex;
}

header nav#main-nav ul li {
  height: 100%;
}

header nav#main-nav ul li a, header nav#main-nav ul li span {
  text-transform: uppercase;
  color: #faf7f9cc;
  letter-spacing: -.8px;
  cursor: pointer;
  height: 100%;
  white-space: nowrap;
  flex-direction: column;
  justify-content: center;
  font-family: Carnas;
  font-size: 15px;
  font-weight: bold;
  transition: color .2s ease-in-out;
  display: inline-flex;
  position: relative;
}

header nav#main-nav ul li a:hover, header nav#main-nav ul li span:hover, header nav#main-nav ul li a:active, header nav#main-nav ul li a:focus, header nav#main-nav ul li span:active, header nav#main-nav ul li span:focus {
  color: #faf7f9;
  text-decoration: none;
}

header nav#main-nav ul li a:after, header nav#main-nav ul li span:after {
  content: "";
  height: 8px;
  width: calc(100% - 24px);
  opacity: 0;
  background: #faf7f94d;
  border-radius: 4px;
  transition: all .2s ease-in-out;
  position: absolute;
  bottom: calc(50% - 10px);
  left: 12px;
  transform: scaleX(0);
}

header nav#main-nav ul li.active a, header nav#main-nav ul li.active span, header nav#main-nav ul li:hover a, header nav#main-nav ul li:hover span {
  color: #faf7f9;
  text-decoration: none;
}

header nav#main-nav ul li.active a:after, header nav#main-nav ul li.active span:after, header nav#main-nav ul li:hover a:after, header nav#main-nav ul li:hover span:after {
  opacity: 1;
  transform: scaleX(1);
}

header nav#main-nav ul li.has-children a:before, header nav#main-nav ul li.has-children span:before {
  content: "";
  width: 18px;
  height: 6px;
  opacity: .5;
  filter: grayscale(.8);
  background: url("image/arrow_white.8c64a698.svg");
  transition: all .2s ease-in-out;
  position: absolute;
  bottom: calc(50% - 20px);
  left: calc(50% - 9px);
}

header nav#main-nav ul li.has-children.active a:before, header nav#main-nav ul li.has-children.active span:before {
  opacity: 1;
  filter: none;
  transition: all .2s ease-in-out;
  transform: translateY(4px);
}

header nav#main-nav .indicators {
  z-index: 2;
  width: 200vw;
  height: 4px;
  transform-origin: center;
  position: absolute;
  bottom: -1px;
  left: -100vw;
}

header nav#main-nav .indicators .line {
  width: 100%;
  height: 4px;
  background: #faf7f9;
  border-radius: 4px;
  position: absolute;
  top: 0;
  left: 0;
  transform: scaleX(0);
}

header nav#main-nav .indicators .arrow {
  content: "";
  width: 18px;
  height: 6px;
  transform-origin: 50% 0;
  background: url("image/arrow_white.8c64a698.svg");
  position: absolute;
  bottom: -5px;
  left: calc(50% - 9px);
  transform: rotate(180deg)scale(0);
}

header nav#main-nav .subnav {
  width: 100%;
  top: var(--header-height);
  opacity: 0;
  pointer-events: none;
  transform-origin: 50% 0;
  background: #faf7f9fa linear-gradient(#a9045d1a 0, #a9045d00 64px);
  justify-content: center;
  padding: 32px 0 0;
  position: absolute;
  left: 0;
  box-shadow: 0 15px 35px #4f1c3826;
}

header nav#main-nav .subnav .close {
  width: 18px;
  height: 18px;
  z-index: 2;
  opacity: .3;
  cursor: pointer;
  pointer-events: all;
  background: url("image/close.62220149.svg");
  transition: all .2s ease-in-out;
  position: absolute;
  top: 24px;
  right: 24px;
}

header nav#main-nav .subnav .close:hover {
  opacity: 1;
  transform: rotate(90deg);
}

header nav#main-nav .subnav .close:active {
  transform: rotate(90deg)scale(.7);
}

header nav#main-nav .subnav > div {
  opacity: 0;
  width: 100%;
  pointer-events: none;
  transform-origin: 0;
  padding-top: 48px;
  padding-bottom: 64px;
  position: absolute;
  top: 0;
  left: 0;
}

header nav#main-nav .subnav > div.active {
  pointer-events: all;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex, .container-mainwebsite-pour-aller-plus-loin.flex {
  justify-content: flex-start;
  display: flex;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col {
  min-width: 25%;
  flex-direction: column;
  display: flex;
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col {
  min-width: 25%;
  flex-direction: column;
  display: flex;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col span {
  letter-spacing: 0;
  color: #4f1c38;
  align-self: flex-start;
  margin-bottom: 4px;
  font-family: Open Sans;
  font-size: 14px;
  position: relative;
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col span {
  letter-spacing: 0;
  color: #4f1c38;
  align-self: flex-start;
  margin-bottom: 4px;
  font-family: Open Sans;
  font-size: 14px;
  position: relative;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a {
  letter-spacing: 0;
  color: #a9045d;
  align-self: flex-start;
  margin-bottom: 4px;
  padding-top: 4px;
  padding-bottom: 4px;
  font-family: Open Sans;
  font-size: 14px;
  transition: color .2s cubic-bezier(.34, 1.56, .64, 1);
  position: relative;
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a {
  letter-spacing: 0;
  color: #a9045d;
  align-self: flex-start;
  margin-bottom: 4px;
  padding-top: 4px;
  padding-bottom: 4px;
  font-family: Open Sans;
  font-size: 14px;
  transition: color .2s cubic-bezier(.34, 1.56, .64, 1);
  position: relative;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a:hover, header nav#main-nav .subnav > div .container-mainwebsite.flex .col a:active, header nav#main-nav .subnav > div .container-mainwebsite.flex .col a:focus {
  color: #48bdcb;
  text-decoration: none;
}

header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a:hover, header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a:active, header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a:focus {
  color: #48bdcb;
  text-decoration: none;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a:hover:after {
  transform-origin: 0;
  text-decoration: none;
  transition: transform .2s ease-in-out;
  transform: scaleX(1);
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a:hover:after {
  transform-origin: 0;
  text-decoration: none;
  transition: transform .2s ease-in-out;
  transform: scaleX(1);
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a:after {
  content: "";
  height: 1px;
  width: 100%;
  z-index: -1;
  transform-origin: 100%;
  background: #48bdcb80;
  border-radius: 4px;
  transition: transform .2s ease-in-out;
  position: absolute;
  bottom: calc(50% - 10px);
  left: 0;
  transform: scaleX(0);
}

header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a:after {
  content: "";
  height: 1px;
  width: 100%;
  z-index: -1;
  transform-origin: 100%;
  background: #48bdcb80;
  border-radius: 4px;
  transition: transform .2s ease-in-out;
  position: absolute;
  bottom: calc(50% - 10px);
  left: 0;
  transform: scaleX(0);
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a.title {
  letter-spacing: .7px;
  color: #4f1c3880;
  text-transform: uppercase;
  margin-bottom: 12px;
  font-family: Carnas;
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a.title {
  letter-spacing: .7px;
  color: #4f1c3880;
  text-transform: uppercase;
  margin-bottom: 12px;
  font-family: Carnas;
}

header nav#main-nav .subnav > div .container-mainwebsite.flex .col a.title:after {
  background: #4f1c3880;
}
header nav#main-nav .subnav > div .container-mainwebsite-pour-aller-plus-loin.flex .col a.title:after {
  background: #4f1c3880;
}

header nav#mobile-nav {
  top: var(--header-height);
  width: 100%;
  height: calc(100dvh - var(--header-height));
  pointer-events: none;
  opacity: 0;
  background: #faf7f9f2;
  padding: 6px 12px;
  position: fixed;
  left: 0;
  overflow-y: scroll;
  transform: translateY(-20px);
}

header nav#mobile-nav .collapsible {
  text-transform: uppercase;
  font-family: Carnas, DejaVu Sans Mono, Bitstream Vera Sans Mono, Monaco, monospace;
}

header nav#mobile-nav .collapsible:after {
  content: "";
  width: 18px;
  height: 6px;
  opacity: .3;
  filter: grayscale(.8);
  background: url("image/arrow.7c6d9a80.svg");
  margin-right: 12px;
  transition: all .2s;
}

header nav#mobile-nav .collapsible.active:after {
  opacity: 1;
  filter: none;
  transform: rotate(180deg);
}

header nav#mobile-nav .collapsible.active {
  color: #a9045d;
}

header nav#mobile-nav > .collapsible, header nav#mobile-nav > a {
  font-size: 16px;
}

header nav#mobile-nav .collapsible, header nav#mobile-nav a {
  color: #4f1c38;
  width: 100%;
  text-transform: uppercase;
  height: 48px;
  justify-content: space-between;
  align-items: center;
  font-family: Carnas, DejaVu Sans Mono, Bitstream Vera Sans Mono, Monaco, monospace;
  display: flex;
  box-shadow: 0 1px #a9045d1a;
}

header nav#mobile-nav > .collapsible:last-child, header nav#mobile-nav > a:last-child {
  box-shadow: none;
}

header nav#mobile-nav .content {
  pointer-events: none;
  max-height: 0;
  flex-direction: column;
  padding-left: 12px;
  font-size: 13px;
  display: flex;
  overflow: hidden;
}

header nav#mobile-nav .content.active {
  pointer-events: all;
}

header nav#mobile-nav > .content > .content > a {
  text-transform: none;
  color: #a9045d;
  font-family: Open Sans, Helvetica Neue Light, Helvetica Neue, Helvetica, Arial, sans-serif;
}

header .actions {
  height: 100%;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
  gap: 8px;
  padding: 0 40px;
  display: flex;
}

@media (max-width: 1199px) {
  header .actions {
    display: none;
  }
}

header .actions > div {
  height: 32px;
  min-width: 150px;
  justify-content: flex-end;
  gap: 16px;
  display: flex;
}

header .actions > div .socials {
  gap: 4px;
  display: inline-flex;
}

header .actions > div .socials .btn-mainwebsite {
  background: none;
}

header .actions > div .socials .btn-mainwebsite svg {
  opacity: .8;
  filter: saturate(70%);
}

header .actions > div .socials .btn-mainwebsite:hover {
  background: #faf7f940;
}

header .actions > div .socials .btn-mainwebsite:hover svg {
  opacity: 1;
  filter: none;
}

header .actions > div .newsletter_container-mainwebsite {
  letter-spacing: -.5px;
  text-transform: uppercase;
  color: #4f1c3866;
  align-items: center;
  gap: 12px;
  font-family: Carnas, DejaVu Sans Mono, Bitstream Vera Sans Mono, Monaco, monospace;
  font-size: 14px;
  font-weight: bold;
  display: inline-flex;
}


header .actions-mobile {
  align-items: center;
  gap: 8px;
  margin-right: 8px;
  display: inline-flex;
}

@media (min-width: 1200px) {
  header .actions-mobile {
    display: none;
  }
}

header .actions-mobile .btn-toggle {
  height: 32px;
  width: 32px;
  display: block;
  position: relative;
}

header .actions-mobile .search-toggle:after {
  content: "";
  width: 17px;
  height: 17px;
  background: url("image/search.63309215.svg");
  transition: all .4s;
  position: absolute;
  top: calc(50% - 8.5px);
  left: calc(50% - 8.5px);
}

header .actions-mobile .menu-toggle {
  transition: transform .4s;
}

header .actions-mobile .menu-toggle:after, header .actions-mobile .menu-toggle:before {
  content: "";
  width: 24px;
  height: 14px;
  background: url("image/ham.373eac02.svg");
  transition: all .4s;
  position: absolute;
  top: calc(50% - 7px);
  left: calc(50% - 16px);
}

header .actions-mobile .menu-toggle:before {
  content: "";
  width: 18px;
  height: 18px;
  opacity: 0;
  background: url("image/close.62220149.svg");
  position: absolute;
  top: calc(50% - 9px);
  left: calc(50% - 9px);
  transform: scale(0);
}

header .actions-mobile .menu-toggle.active {
  transform: rotate(270deg);
}

header .actions-mobile .menu-toggle.active:before {
  opacity: 1;
  transform: scale(.8);
}

header .actions-mobile .menu-toggle.active:after {
  opacity: 0;
  transform: scale(0);
}

body.mobile-menu-opened {
  overflow: hidden;
}

body.mobile-menu-opened header:after {
  transform: scaleX(1);
}

body.mobile-menu-opened nav#mobile-nav {
  pointer-events: all;
}

header .logo img {
  height: auto;
  width: 250px;
  margin: 0;
  padding: 0;
  margin-top: -2px;
  margin-left: 24px;
  
}

@media (max-width: 1199px) {
  header .logo {
    justify-content: flex-start;
    align-items: center;
    padding: 0 0 0 0;
    display: inline-flex;
  }

  header .logo a {
    height: var(--header-height);
  }

  header .logo img {
    height: var(--header-height);
    width: auto;
  }
}
/*# sourceMappingURL=index.e2cc605e.css.map */

</style>



<header>
        <div class="logo">
            <!-- <a href="index.php" target="_blank"><img src="/logo_delta_7.2901a2cf.png" srcset="image/logo_delta_7@2x.89b371fd.png 1200w" width="180" height="auto" alt="Revenir à l'accueil"></a> -->
            <a href="index.php" target="_blank"><img src="image/Logo-Delta7-Campus2.png" srcset="image/Logo-Delta7-Campus2@2x.png 1200w" width="180" height="auto" alt="Revenir à l'accueil"></a>
        </div>
    <nav id="main-nav">
        <div class="indicators">
            <div class="line"></div>
            <div class="arrow"></div>
        </div>
        <ul>
            <li class="has-children <?= (isset($_GET['action']) && in_array($_GET['action'], ['videotheque', 'documentheque', 'rechercherAccueil'])) ? 'active' : ''; ?>" data-child="menu-ressources"><a href="#">Nos ressources</a></li>
            <li class="<?= (isset($_GET['action']) && $_GET['action'] == 'presDeChezVous') ? 'active' : ''; ?>"><a href="index.php?action=presDeChezVous">Près de chez vous</a></li>
            <li class="has-children <?= (isset($_GET['action']) && in_array($_GET['action'], ['listeNewsletters', 'listeBenevole', 'listeDonateur'])) ? 'active' : ''; ?>" data-child="menu-pour-aller-plus-loin"><a href="#">Pour aller plus loin</a></li>
            <li class="<?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>"><a href="index.php?action=BenevoleMssion">Découvrir nos missions de bénévolat</a></li>
            <li class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeDictionnaire') ? 'active' : ''; ?>"><a id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a></li>
            <!-- <li><a href="#">Contact</a></li> -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
            </a>
        </ul>
        <div class="subnav">
            <a href="#" class="close"></a>
            <div data-name="menu-ressources">
                <div class="container-mainwebsite flex">
                    <div class="col">
                        <a href="index.php?action=videotheque">Nos vidéos</a>
                        <a href="index.php?action=documentheque">Nos documents</a>
                        <a href="index.php?action=themeRechercher">Recherche par thème</a>
                        <a href="index.php?action=rechercherAccueil">Rechercher</a>
                    </div>
                </div>
            </div>
            <div data-name="menu-pour-aller-plus-loin">
                <div class="container-mainwebsite-pour-aller-plus-loin flex">
                    <div class="col">
                        <a href="index.php?action=listeNewsletters"> S'inscrire à notre newsletter</a>
                        <a href="index.php?action=listeBenevole">Devenir bénévole</a>
                        <a href="index.php?action=listeDonateur">Nous soutenir</a>
                    </div>
                   
                </div>
            </div>
            <div data-name="menu-informer">
                <div class="container-mainwebsite flex">
                    <div class="col">
                        <a href="#index.php?action=listeNewsletters"> S'inscrire à notre newsletter</a>
                        <a href="#index.php?action=listeBenevole">Devenir bénévole</a>
                        <a href="#index.php?action=listeDonateur">Nous soutenir</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="actions">
        <div>
            <div class="socials">
                <a href="https://www.youtube.com/@associationdelta7923" target="_blank" class="btn-mainwebsite is-icon is-xs is-white is-alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.755" height="14.593" viewbox="0 0 20.755 14.593">
                        <path id="icon_youtube" d="M21.371,6.783a2.608,2.608,0,0,0-1.835-1.847C17.918,4.5,11.427,4.5,11.427,4.5s-6.49,0-8.109.437A2.608,2.608,0,0,0,1.484,6.783a27.358,27.358,0,0,0-.434,5.028,27.358,27.358,0,0,0,.434,5.028,2.569,2.569,0,0,0,1.835,1.817c1.619.437,8.109.437,8.109.437s6.49,0,8.109-.437a2.569,2.569,0,0,0,1.835-1.817,27.357,27.357,0,0,0,.434-5.028,27.357,27.357,0,0,0-.434-5.028ZM9.3,14.9V8.725l5.425,3.086L9.3,14.9Z" transform="translate(-1.05 -4.5)" fill="#fff"></path>
                      </svg>
                </a>
                <a href="https://www.linkedin.com/company/delta7/" target="_blank" class="btn-mainwebsite is-icon is-xs is-white is-alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.084" height="17.084" viewbox="0 0 17.084 17.084">
                        <path id="icon_linkedin" d="M3.824,17.084H.282V5.678H3.824ZM2.051,4.123A2.061,2.061,0,1,1,4.1,2.052,2.069,2.069,0,0,1,2.051,4.123ZM17.08,17.084H13.546V11.532c0-1.323-.027-3.02-1.841-3.02-1.841,0-2.124,1.438-2.124,2.925v5.648H6.043V5.678h3.4V7.234h.05A3.722,3.722,0,0,1,12.84,5.392c3.585,0,4.244,2.36,4.244,5.426v6.265Z" transform="translate(0 -0.001)" fill="#fff"></path>
                      </svg>
                </a>
                <a href="https://www.facebook.com/associationdelta7/?locale=fr_FR" target="_blank" class="btn-mainwebsite is-icon is-xs is-white is-alt">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.031" height="17.922" viewbox="0 0 18.031 17.922">
                        <path id="icon_facebook" d="M18.593,9.578A9.015,9.015,0,1,0,8.169,18.484v-6.3H5.879V9.578h2.29V7.592a3.181,3.181,0,0,1,3.405-3.507,13.874,13.874,0,0,1,2.018.176V6.478H12.456a1.3,1.3,0,0,0-1.469,1.408V9.578h2.5l-.4,2.606h-2.1v6.3A9.019,9.019,0,0,0,18.593,9.578Z" transform="translate(-0.563 -0.563)" fill="#fff"></path>
                      </svg>
                      
                </a>
            </div>
        </div>
        <div>
            <a href="https://www.delta7.org/fr" target="_blank" class="btn-mainwebsite is-white is-anim-s is-xs">
                <span>Accès Site</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="13.37" height="13.216" viewbox="0 0 13.37 13.216">
                    <g id="icon_man_white" transform="translate(0.02)">
                      <path id="Path_35" data-name="Path 35" d="M13.082,29.214a7.131,7.131,0,0,1-4.71,4.012c-.106.028-.208.075-.332.118.055.089.083.141.12.193.646.881,1.292,1.756,1.937,2.637.369.5.752.994,1.1,1.507a.888.888,0,0,1-.208,1.3,6.384,6.384,0,0,1-.7.457.538.538,0,0,1-.72-.1,3.1,3.1,0,0,1-.447-.593c-.544-.975-1.07-1.959-1.615-2.933-.263-.476-.554-.937-.858-1.455-.3.518-.59.979-.858,1.455-.544.975-1.066,1.959-1.615,2.933a2.925,2.925,0,0,1-.447.593.543.543,0,0,1-.72.1,6.384,6.384,0,0,1-.7-.457.892.892,0,0,1-.208-1.3c.351-.513.733-1.008,1.1-1.507.646-.881,1.292-1.756,1.937-2.637.037-.047.065-.1.12-.193-.125-.042-.226-.085-.332-.118a7.129,7.129,0,0,1-4.7-4.012,1.85,1.85,0,0,1-.263-.881.947.947,0,0,1,.724-.97.971.971,0,0,1,1.195.589,5.224,5.224,0,0,0,4.106,3.423,2.642,2.642,0,0,0,.66.057,2.642,2.642,0,0,0,.66-.057,5.231,5.231,0,0,0,4.106-3.423.971.971,0,0,1,1.195-.589.947.947,0,0,1,.724.97A2.023,2.023,0,0,1,13.082,29.214Z" transform="translate(0 -26.319)" fill="#a9045d"></path>
                      <path id="Path_36" data-name="Path 36" d="M122.5,1.114c-.041.453-.053.906-.086,1.359q-.031.374-.086.747a.52.52,0,0,1-.31.4,1,1,0,0,1-1,0,.52.52,0,0,1-.31-.4q-.055-.374-.086-.747c-.033-.453-.045-.91-.086-1.359A.906.906,0,0,1,121.48,0h.065A.906.906,0,0,1,122.5,1.114Z" transform="translate(-114.852)" fill="#a9045d"></path>
                    </g>
                  </svg>
            </a>
            <a href="index.php?action=listeDonateur" target="_blank" class="btn-mainwebsite is-secondary is-anim-s is-xs">
                <span>Faire un don</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="14.981" height="13.258" viewbox="0 0 14.981 13.258">
                    <path id="icon_heart_white" d="M14.765,5.537a3.547,3.547,0,0,0-5.018,0l-.684.684L8.38,5.537a3.548,3.548,0,1,0-5.018,5.018l.684.684,5.018,5.018,5.018-5.018.684-.684a3.547,3.547,0,0,0,0-5.018Z" transform="translate(-1.573 -3.747)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                  </svg>
            </a>
        </div>
    </div>
    <div class="actions-mobile">
        <span class="btn-toggle menu-toggle"></span>
    </div>
    <nav id="mobile-nav">
        <div class="collapsible<?= (isset($_GET['action']) && in_array($_GET['action'], ['videotheque', 'documentheque', 'rechercherAccueil'])) ? 'active' : ''; ?>">Nos ressources</div>
        <div class="content">
            <a href="index.php?action=videotheque">Nos vidéos</a>
            <a href="index.php?action=documentheque">Nos documents</a>
            <a href="index.php?action=themeRechercher">Recherche par thème</a>
            <a href="index.php?action=rechercherAccueil">Rechercher</a>
        </div>
        <a class="<?= (isset($_GET['action']) && $_GET['action'] == 'presDeChezVous') ? 'active' : ''; ?>" href="index.php?action=presDeChezVous">Près de chez vous</a>
        <div class="collapsible <?= (isset($_GET['action']) && in_array($_GET['action'], ['listeNewsletters', 'listeBenevole', 'listeDonateur'])) ? 'active' : ''; ?>">Pour aller plus loin</div>
        <div class="content">
            <a href="index.php?action=listeNewsletters"> S'inscrire à notre newsletter</a>
            <a href="index.php?action=listeBenevole">Devenir bénévole</a>
            <a href="index.php?action=listeDonateur">Nous soutenir</a>
        </div>
        <a class="<?= (isset($_GET['action']) && $_GET['action'] == 'BenevoleMssion') ? 'active' : ''; ?>" href="index.php?action=BenevoleMssion">Découvrir nos missions de bénévolat</a>
        <a class="<?= (isset($_GET['action']) && $_GET['action'] == 'listeDictionnaire') ? 'active' : ''; ?>" id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a>
        <!-- <a href="#">Contact</a> -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
        </a>
      </nav>
    </header> 

    <?php include 'Vue/Dictionnaire/vueDictionnaire.php'; ?> 




<script>

function myFunction() {
 var x = document.getElementById("myTopnav");
 if (x.className === "navbar topnav") {
   x.className += " responsive";
 } else {
   x.className = "navbar topnav";
 }
}
/*! For license information please see main.js.LICENSE.txt */
!function(){"use strict";function t(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function e(t,e){t.prototype=Object.create(e.prototype),t.prototype.constructor=t,t.__proto__=e}var i,r,n,s,a,o,u,h,l,c,f,p,d,_,m,g={autoSleep:120,force3D:"auto",nullTargetWarn:1,units:{lineHeight:""}},v={duration:.5,overwrite:!1,delay:0},y=1e8,b=1e-8,x=2*Math.PI,w=x/4,T=0,M=Math.sqrt,S=Math.cos,k=Math.sin,O=function(t){return"string"==typeof t},A=function(t){return"function"==typeof t},C=function(t){return"number"==typeof t},E=function(t){return void 0===t},D=function(t){return"object"==typeof t},P=function(t){return!1!==t},L=function(){return"undefined"!=typeof window},R=function(t){return A(t)||O(t)},z="function"==typeof ArrayBuffer&&ArrayBuffer.isView||function(){},F=Array.isArray,B=/(?:-?\.?\d|\.)+/gi,q=/[-+=.]*\d+[.e\-+]*\d*[e\-+]*\d*/g,I=/[-+=.]*\d+[.e-]*\d*[a-z%]*/g,X=/[-+=.]*\d+\.?\d*(?:e-|e\+)?\d*/gi,Y=/[+-]=-?[.\d]+/,N=/[^,'"\[\]\s]+/gi,U=/^[+\-=e\s\d]*\d+[.\d]*([a-z]*|%)\s*$/i,V={},H={},j=function(t){return(H=xt(t,V))&&bi},G=function(t,e){return console.warn("Invalid property",t,"set to",e,"Missing plugin? gsap.registerPlugin()")},W=function(t,e){return!e&&console.warn(t)},Q=function(t,e){return t&&(V[t]=e)&&H&&(H[t]=e)||V},Z=function(){return 0},$={suppressEvents:!0,isStart:!0,kill:!1},J={suppressEvents:!0,kill:!1},K={suppressEvents:!0},tt={},et=[],it={},rt={},nt={},st=30,at=[],ot="",ut=function(t){var e,i,r=t[0];if(D(r)||A(r)||(t=[t]),!(e=(r._gsap||{}).harness)){for(i=at.length;i--&&!at[i].targetTest(r););e=at[i]}for(i=t.length;i--;)t[i]&&(t[i]._gsap||(t[i]._gsap=new ze(t[i],e)))||t.splice(i,1);return t},ht=function(t){return t._gsap||ut(Jt(t))[0]._gsap},lt=function(t,e,i){return(i=t[e])&&A(i)?t[e]():E(i)&&t.getAttribute&&t.getAttribute(e)||i},ct=function(t,e){return(t=t.split(",")).forEach(e)||t},ft=function(t){return Math.round(1e5*t)/1e5||0},pt=function(t){return Math.round(1e7*t)/1e7||0},dt=function(t,e){var i=e.charAt(0),r=parseFloat(e.substr(2));return t=parseFloat(t),"+"===i?t+r:"-"===i?t-r:"*"===i?t*r:t/r},_t=function(t,e){for(var i=e.length,r=0;t.indexOf(e[r])<0&&++r<i;);return r<i},mt=function(){var t,e,i=et.length,r=et.slice(0);for(it={},et.length=0,t=0;t<i;t++)(e=r[t])&&e._lazy&&(e.render(e._lazy[0],e._lazy[1],!0)._lazy=0)},gt=function(t,e,i,n){et.length&&!r&&mt(),t.render(e,i,n||r&&e<0&&(t._initted||t._startAt)),et.length&&!r&&mt()},vt=function(t){var e=parseFloat(t);return(e||0===e)&&(t+"").match(N).length<2?e:O(t)?t.trim():t},yt=function(t){return t},bt=function(t,e){for(var i in e)i in t||(t[i]=e[i]);return t},xt=function(t,e){for(var i in e)t[i]=e[i];return t},wt=function t(e,i){for(var r in i)"__proto__"!==r&&"constructor"!==r&&"prototype"!==r&&(e[r]=D(i[r])?t(e[r]||(e[r]={}),i[r]):i[r]);return e},Tt=function(t,e){var i,r={};for(i in t)i in e||(r[i]=t[i]);return r},Mt=function(t){var e,i=t.parent||s,r=t.keyframes?(e=F(t.keyframes),function(t,i){for(var r in i)r in t||"duration"===r&&e||"ease"===r||(t[r]=i[r])}):bt;if(P(t.inherit))for(;i;)r(t,i.vars.defaults),i=i.parent||i._dp;return t},St=function(t,e,i,r,n){void 0===i&&(i="_first"),void 0===r&&(r="_last");var s,a=t[r];if(n)for(s=e[n];a&&a[n]>s;)a=a._prev;return a?(e._next=a._next,a._next=e):(e._next=t[i],t[i]=e),e._next?e._next._prev=e:t[r]=e,e._prev=a,e.parent=e._dp=t,e},kt=function(t,e,i,r){void 0===i&&(i="_first"),void 0===r&&(r="_last");var n=e._prev,s=e._next;n?n._next=s:t[i]===e&&(t[i]=s),s?s._prev=n:t[r]===e&&(t[r]=n),e._next=e._prev=e.parent=null},Ot=function(t,e){t.parent&&(!e||t.parent.autoRemoveChildren)&&t.parent.remove(t),t._act=0},At=function(t,e){if(t&&(!e||e._end>t._dur||e._start<0))for(var i=t;i;)i._dirty=1,i=i.parent;return t},Ct=function(t,e,i,n){return t._startAt&&(r?t._startAt.revert(J):t.vars.immediateRender&&!t.vars.autoRevert||t._startAt.render(e,!0,n))},Et=function t(e){return!e||e._ts&&t(e.parent)},Dt=function(t){return t._repeat?Pt(t._tTime,t=t.duration()+t._rDelay)*t:0},Pt=function(t,e){var i=Math.floor(t/=e);return t&&i===t?i-1:i},Lt=function(t,e){return(t-e._start)*e._ts+(e._ts>=0?0:e._dirty?e.totalDuration():e._tDur)},Rt=function(t){return t._end=pt(t._start+(t._tDur/Math.abs(t._ts||t._rts||b)||0))},zt=function(t,e){var i=t._dp;return i&&i.smoothChildTiming&&t._ts&&(t._start=pt(i._time-(t._ts>0?e/t._ts:((t._dirty?t.totalDuration():t._tDur)-e)/-t._ts)),Rt(t),i._dirty||At(i,t)),t},Ft=function(t,e){var i;if((e._time||e._initted&&!e._dur)&&(i=Lt(t.rawTime(),e),(!e._dur||Wt(0,e.totalDuration(),i)-e._tTime>b)&&e.render(i,!0)),At(t,e)._dp&&t._initted&&t._time>=t._dur&&t._ts){if(t._dur<t.duration())for(i=t;i._dp;)i.rawTime()>=0&&i.totalTime(i._tTime),i=i._dp;t._zTime=-1e-8}},Bt=function(t,e,i,r){return e.parent&&Ot(e),e._start=pt((C(i)?i:i||t!==s?Ht(t,i,e):t._time)+e._delay),e._end=pt(e._start+(e.totalDuration()/Math.abs(e.timeScale())||0)),St(t,e,"_first","_last",t._sort?"_start":0),Yt(e)||(t._recent=e),r||Ft(t,e),t._ts<0&&zt(t,t._tTime),t},qt=function(t,e){return(V.ScrollTrigger||G("scrollTrigger",e))&&V.ScrollTrigger.create(e,t)},It=function(t,e,i,n,s){return Ue(t,e,s),t._initted?!i&&t._pt&&!r&&(t._dur&&!1!==t.vars.lazy||!t._dur&&t.vars.lazy)&&l!==we.frame?(et.push(t),t._lazy=[s,n],1):void 0:1},Xt=function t(e){var i=e.parent;return i&&i._ts&&i._initted&&!i._lock&&(i.rawTime()<0||t(i))},Yt=function(t){var e=t.data;return"isFromStart"===e||"isStart"===e},Nt=function(t,e,i,r){var n=t._repeat,s=pt(e)||0,a=t._tTime/t._tDur;return a&&!r&&(t._time*=s/t._dur),t._dur=s,t._tDur=n?n<0?1e10:pt(s*(n+1)+t._rDelay*n):s,a>0&&!r&&zt(t,t._tTime=t._tDur*a),t.parent&&Rt(t),i||At(t.parent,t),t},Ut=function(t){return t instanceof Be?At(t):Nt(t,t._dur)},Vt={_start:0,endTime:Z,totalDuration:Z},Ht=function t(e,i,r){var n,s,a,o=e.labels,u=e._recent||Vt,h=e.duration()>=y?u.endTime(!1):e._dur;return O(i)&&(isNaN(i)||i in o)?(s=i.charAt(0),a="%"===i.substr(-1),n=i.indexOf("="),"<"===s||">"===s?(n>=0&&(i=i.replace(/=/,"")),("<"===s?u._start:u.endTime(u._repeat>=0))+(parseFloat(i.substr(1))||0)*(a?(n<0?u:r).totalDuration()/100:1)):n<0?(i in o||(o[i]=h),o[i]):(s=parseFloat(i.charAt(n-1)+i.substr(n+1)),a&&r&&(s=s/100*(F(r)?r[0]:r).totalDuration()),n>1?t(e,i.substr(0,n-1),r)+s:h+s)):null==i?h:+i},jt=function(t,e,i){var r,n,s=C(e[1]),a=(s?2:1)+(t<2?0:1),o=e[a];if(s&&(o.duration=e[1]),o.parent=i,t){for(r=o,n=i;n&&!("immediateRender"in r);)r=n.vars.defaults||{},n=P(n.vars.inherit)&&n.parent;o.immediateRender=P(r.immediateRender),t<2?o.runBackwards=1:o.startAt=e[a-1]}return new We(e[0],o,e[a+1])},Gt=function(t,e){return t||0===t?e(t):e},Wt=function(t,e,i){return i<t?t:i>e?e:i},Qt=function(t,e){return O(t)&&(e=U.exec(t))?e[1]:""},Zt=[].slice,$t=function(t,e){return t&&D(t)&&"length"in t&&(!e&&!t.length||t.length-1 in t&&D(t[0]))&&!t.nodeType&&t!==a},Jt=function(t,e,i){return n&&!e&&n.selector?n.selector(t):!O(t)||i||!o&&Te()?F(t)?function(t,e,i){return void 0===i&&(i=[]),t.forEach((function(t){var r;return O(t)&&!e||$t(t,1)?(r=i).push.apply(r,Jt(t)):i.push(t)}))||i}(t,i):$t(t)?Zt.call(t,0):t?[t]:[]:Zt.call((e||u).querySelectorAll(t),0)},Kt=function(t){return t=Jt(t)[0]||W("Invalid scope")||{},function(e){var i=t.current||t.nativeElement||t;return Jt(e,i.querySelectorAll?i:i===t?W("Invalid scope")||u.createElement("div"):t)}},te=function(t){return t.sort((function(){return.5-Math.random()}))},ee=function(t){if(A(t))return t;var e=D(t)?t:{each:t},i=Ee(e.ease),r=e.from||0,n=parseFloat(e.base)||0,s={},a=r>0&&r<1,o=isNaN(r)||a,u=e.axis,h=r,l=r;return O(r)?h=l={center:.5,edges:.5,end:1}[r]||0:!a&&o&&(h=r[0],l=r[1]),function(t,a,c){var f,p,d,_,m,g,v,b,x,w=(c||e).length,T=s[w];if(!T){if(!(x="auto"===e.grid?0:(e.grid||[1,y])[1])){for(v=-y;v<(v=c[x++].getBoundingClientRect().left)&&x<w;);x--}for(T=s[w]=[],f=o?Math.min(x,w)*h-.5:r%x,p=x===y?0:o?w*l/x-.5:r/x|0,v=0,b=y,g=0;g<w;g++)d=g%x-f,_=p-(g/x|0),T[g]=m=u?Math.abs("y"===u?_:d):M(d*d+_*_),m>v&&(v=m),m<b&&(b=m);"random"===r&&te(T),T.max=v-b,T.min=b,T.v=w=(parseFloat(e.amount)||parseFloat(e.each)*(x>w?w-1:u?"y"===u?w/x:x:Math.max(x,w/x))||0)*("edges"===r?-1:1),T.b=w<0?n-w:n,T.u=Qt(e.amount||e.each)||0,i=i&&w<0?Ae(i):i}return w=(T[t]-T.min)/T.max||0,pt(T.b+(i?i(w):w)*T.v)+T.u}},ie=function(t){var e=Math.pow(10,((t+"").split(".")[1]||"").length);return function(i){var r=pt(Math.round(parseFloat(i)/t)*t*e);return(r-r%1)/e+(C(i)?0:Qt(i))}},re=function(t,e){var i,r,n=F(t);return!n&&D(t)&&(i=n=t.radius||y,t.values?(t=Jt(t.values),(r=!C(t[0]))&&(i*=i)):t=ie(t.increment)),Gt(e,n?A(t)?function(e){return r=t(e),Math.abs(r-e)<=i?r:e}:function(e){for(var n,s,a=parseFloat(r?e.x:e),o=parseFloat(r?e.y:0),u=y,h=0,l=t.length;l--;)(n=r?(n=t[l].x-a)*n+(s=t[l].y-o)*s:Math.abs(t[l]-a))<u&&(u=n,h=l);return h=!i||u<=i?t[h]:e,r||h===e||C(e)?h:h+Qt(e)}:ie(t))},ne=function(t,e,i,r){return Gt(F(t)?!e:!0===i?!!(i=0):!r,(function(){return F(t)?t[~~(Math.random()*t.length)]:(i=i||1e-5)&&(r=i<1?Math.pow(10,(i+"").length-2):1)&&Math.floor(Math.round((t-i/2+Math.random()*(e-t+.99*i))/i)*i*r)/r}))},se=function(t,e,i){return Gt(i,(function(i){return t[~~e(i)]}))},ae=function(t){for(var e,i,r,n,s=0,a="";~(e=t.indexOf("random(",s));)r=t.indexOf(")",e),n="["===t.charAt(e+7),i=t.substr(e+7,r-e-7).match(n?N:B),a+=t.substr(s,e-s)+ne(n?i:+i[0],n?0:+i[1],+i[2]||1e-5),s=r+1;return a+t.substr(s,t.length-s)},oe=function(t,e,i,r,n){var s=e-t,a=r-i;return Gt(n,(function(e){return i+((e-t)/s*a||0)}))},ue=function(t,e,i){var r,n,s,a=t.labels,o=y;for(r in a)(n=a[r]-e)<0==!!i&&n&&o>(n=Math.abs(n))&&(s=r,o=n);return s},he=function(t,e,i){var r,s,a,o=t.vars,u=o[e],h=n,l=t._ctx;if(u)return r=o[e+"Params"],s=o.callbackScope||t,i&&et.length&&mt(),l&&(n=l),a=r?u.apply(s,r):u.call(s),n=h,a},le=function(t){return Ot(t),t.scrollTrigger&&t.scrollTrigger.kill(!!r),t.progress()<1&&he(t,"onInterrupt"),t},ce=[],fe=function(t){if(L()){var e=(t=!t.name&&t.default||t).name,i=A(t),r=e&&!i&&t.init?function(){this._props=[]}:t,n={init:Z,render:ri,add:Ye,kill:si,modifier:ni,rawVars:0},s={targetTest:0,get:0,getSetter:Ke,aliases:{},register:0};if(Te(),t!==r){if(rt[e])return;bt(r,bt(Tt(t,n),s)),xt(r.prototype,xt(n,Tt(t,s))),rt[r.prop=e]=r,t.targetTest&&(at.push(r),tt[e]=1),e=("css"===e?"CSS":e.charAt(0).toUpperCase()+e.substr(1))+"Plugin"}Q(e,r),t.register&&t.register(bi,r,ui)}else ce.push(t)},pe=255,de={aqua:[0,pe,pe],lime:[0,pe,0],silver:[192,192,192],black:[0,0,0],maroon:[128,0,0],teal:[0,128,128],blue:[0,0,pe],navy:[0,0,128],white:[pe,pe,pe],olive:[128,128,0],yellow:[pe,pe,0],orange:[pe,165,0],gray:[128,128,128],purple:[128,0,128],green:[0,128,0],red:[pe,0,0],pink:[pe,192,203],cyan:[0,pe,pe],transparent:[pe,pe,pe,0]},_e=function(t,e,i){return(6*(t+=t<0?1:t>1?-1:0)<1?e+(i-e)*t*6:t<.5?i:3*t<2?e+(i-e)*(2/3-t)*6:e)*pe+.5|0},me=function(t,e,i){var r,n,s,a,o,u,h,l,c,f,p=t?C(t)?[t>>16,t>>8&pe,t&pe]:0:de.black;if(!p){if(","===t.substr(-1)&&(t=t.substr(0,t.length-1)),de[t])p=de[t];else if("#"===t.charAt(0)){if(t.length<6&&(r=t.charAt(1),n=t.charAt(2),s=t.charAt(3),t="#"+r+r+n+n+s+s+(5===t.length?t.charAt(4)+t.charAt(4):"")),9===t.length)return[(p=parseInt(t.substr(1,6),16))>>16,p>>8&pe,p&pe,parseInt(t.substr(7),16)/255];p=[(t=parseInt(t.substr(1),16))>>16,t>>8&pe,t&pe]}else if("hsl"===t.substr(0,3))if(p=f=t.match(B),e){if(~t.indexOf("="))return p=t.match(q),i&&p.length<4&&(p[3]=1),p}else a=+p[0]%360/360,o=+p[1]/100,r=2*(u=+p[2]/100)-(n=u<=.5?u*(o+1):u+o-u*o),p.length>3&&(p[3]*=1),p[0]=_e(a+1/3,r,n),p[1]=_e(a,r,n),p[2]=_e(a-1/3,r,n);else p=t.match(B)||de.transparent;p=p.map(Number)}return e&&!f&&(r=p[0]/pe,n=p[1]/pe,s=p[2]/pe,u=((h=Math.max(r,n,s))+(l=Math.min(r,n,s)))/2,h===l?a=o=0:(c=h-l,o=u>.5?c/(2-h-l):c/(h+l),a=h===r?(n-s)/c+(n<s?6:0):h===n?(s-r)/c+2:(r-n)/c+4,a*=60),p[0]=~~(a+.5),p[1]=~~(100*o+.5),p[2]=~~(100*u+.5)),i&&p.length<4&&(p[3]=1),p},ge=function(t){var e=[],i=[],r=-1;return t.split(ye).forEach((function(t){var n=t.match(I)||[];e.push.apply(e,n),i.push(r+=n.length+1)})),e.c=i,e},ve=function(t,e,i){var r,n,s,a,o="",u=(t+o).match(ye),h=e?"hsla(":"rgba(",l=0;if(!u)return t;if(u=u.map((function(t){return(t=me(t,e,1))&&h+(e?t[0]+","+t[1]+"%,"+t[2]+"%,"+t[3]:t.join(","))+")"})),i&&(s=ge(t),(r=i.c).join(o)!==s.c.join(o)))for(a=(n=t.replace(ye,"1").split(I)).length-1;l<a;l++)o+=n[l]+(~r.indexOf(l)?u.shift()||h+"0,0,0,0)":(s.length?s:u.length?u:i).shift());if(!n)for(a=(n=t.split(ye)).length-1;l<a;l++)o+=n[l]+u[l];return o+n[a]},ye=function(){var t,e="(?:\\b(?:(?:rgb|rgba|hsl|hsla)\\(.+?\\))|\\B#(?:[0-9a-f]{3,4}){1,2}\\b";for(t in de)e+="|"+t+"\\b";return new RegExp(e+")","gi")}(),be=/hsl[a]?\(/,xe=function(t){var e,i=t.join(" ");if(ye.lastIndex=0,ye.test(i))return e=be.test(i),t[1]=ve(t[1],e),t[0]=ve(t[0],e,ge(t[1])),!0},we=function(){var t,e,i,r,n,s,l=Date.now,c=500,p=33,d=l(),_=d,m=1e3/240,g=m,v=[],y=function i(a){var o,u,h,f,y=l()-_,b=!0===a;if(y>c&&(d+=y-p),((o=(h=(_+=y)-d)-g)>0||b)&&(f=++r.frame,n=h-1e3*r.time,r.time=h/=1e3,g+=o+(o>=m?4:m-o),u=1),b||(t=e(i)),u)for(s=0;s<v.length;s++)v[s](h,n,f,a)};return r={time:0,frame:0,tick:function(){y(!0)},deltaRatio:function(t){return n/(1e3/(t||60))},wake:function(){h&&(!o&&L()&&(a=o=window,u=a.document||{},V.gsap=bi,(a.gsapVersions||(a.gsapVersions=[])).push(bi.version),j(H||a.GreenSockGlobals||!a.gsap&&a||{}),i=a.requestAnimationFrame,ce.forEach(fe)),t&&r.sleep(),e=i||function(t){return setTimeout(t,g-1e3*r.time+1|0)},f=1,y(2))},sleep:function(){(i?a.cancelAnimationFrame:clearTimeout)(t),f=0,e=Z},lagSmoothing:function(t,e){c=t||1/0,p=Math.min(e||33,c)},fps:function(t){m=1e3/(t||240),g=1e3*r.time+m},add:function(t,e,i){var n=e?function(e,i,s,a){t(e,i,s,a),r.remove(n)}:t;return r.remove(t),v[i?"unshift":"push"](n),Te(),n},remove:function(t,e){~(e=v.indexOf(t))&&v.splice(e,1)&&s>=e&&s--},_listeners:v}}(),Te=function(){return!f&&we.wake()},Me={},Se=/^[\d.\-M][\d.\-,\s]/,ke=/["']/g,Oe=function(t){for(var e,i,r,n={},s=t.substr(1,t.length-3).split(":"),a=s[0],o=1,u=s.length;o<u;o++)i=s[o],e=o!==u-1?i.lastIndexOf(","):i.length,r=i.substr(0,e),n[a]=isNaN(r)?r.replace(ke,"").trim():+r,a=i.substr(e+1).trim();return n},Ae=function(t){return function(e){return 1-t(1-e)}},Ce=function t(e,i){for(var r,n=e._first;n;)n instanceof Be?t(n,i):!n.vars.yoyoEase||n._yoyo&&n._repeat||n._yoyo===i||(n.timeline?t(n.timeline,i):(r=n._ease,n._ease=n._yEase,n._yEase=r,n._yoyo=i)),n=n._next},Ee=function(t,e){return t&&(A(t)?t:Me[t]||function(t){var e,i,r,n,s=(t+"").split("("),a=Me[s[0]];return a&&s.length>1&&a.config?a.config.apply(null,~t.indexOf("{")?[Oe(s[1])]:(e=t,i=e.indexOf("(")+1,r=e.indexOf(")"),n=e.indexOf("(",i),e.substring(i,~n&&n<r?e.indexOf(")",r+1):r)).split(",").map(vt)):Me._CE&&Se.test(t)?Me._CE("",t):a}(t))||e},De=function(t,e,i,r){void 0===i&&(i=function(t){return 1-e(1-t)}),void 0===r&&(r=function(t){return t<.5?e(2*t)/2:1-e(2*(1-t))/2});var n,s={easeIn:e,easeOut:i,easeInOut:r};return ct(t,(function(t){for(var e in Me[t]=V[t]=s,Me[n=t.toLowerCase()]=i,s)Me[n+("easeIn"===e?".in":"easeOut"===e?".out":".inOut")]=Me[t+"."+e]=s[e]})),s},Pe=function(t){return function(e){return e<.5?(1-t(1-2*e))/2:.5+t(2*(e-.5))/2}},Le=function t(e,i,r){var n=i>=1?i:1,s=(r||(e?.3:.45))/(i<1?i:1),a=s/x*(Math.asin(1/n)||0),o=function(t){return 1===t?1:n*Math.pow(2,-10*t)*k((t-a)*s)+1},u="out"===e?o:"in"===e?function(t){return 1-o(1-t)}:Pe(o);return s=x/s,u.config=function(i,r){return t(e,i,r)},u},Re=function t(e,i){void 0===i&&(i=1.70158);var r=function(t){return t?--t*t*((i+1)*t+i)+1:0},n="out"===e?r:"in"===e?function(t){return 1-r(1-t)}:Pe(r);return n.config=function(i){return t(e,i)},n};ct("Linear,Quad,Cubic,Quart,Quint,Strong",(function(t,e){var i=e<5?e+1:e;De(t+",Power"+(i-1),e?function(t){return Math.pow(t,i)}:function(t){return t},(function(t){return 1-Math.pow(1-t,i)}),(function(t){return t<.5?Math.pow(2*t,i)/2:1-Math.pow(2*(1-t),i)/2}))})),Me.Linear.easeNone=Me.none=Me.Linear.easeIn,De("Elastic",Le("in"),Le("out"),Le()),p=7.5625,_=1/(d=2.75),De("Bounce",(function(t){return 1-m(1-t)}),m=function(t){return t<_?p*t*t:t<.7272727272727273?p*Math.pow(t-1.5/d,2)+.75:t<.9090909090909092?p*(t-=2.25/d)*t+.9375:p*Math.pow(t-2.625/d,2)+.984375}),De("Expo",(function(t){return t?Math.pow(2,10*(t-1)):0})),De("Circ",(function(t){return-(M(1-t*t)-1)})),De("Sine",(function(t){return 1===t?1:1-S(t*w)})),De("Back",Re("in"),Re("out"),Re()),Me.SteppedEase=Me.steps=V.SteppedEase={config:function(t,e){void 0===t&&(t=1);var i=1/t,r=t+(e?0:1),n=e?1:0;return function(t){return((r*Wt(0,.99999999,t)|0)+n)*i}}},v.ease=Me["quad.out"],ct("onComplete,onUpdate,onStart,onRepeat,onReverseComplete,onInterrupt",(function(t){return ot+=t+","+t+"Params,"}));var ze=function(t,e){this.id=T++,t._gsap=this,this.target=t,this.harness=e,this.get=e?e.get:lt,this.set=e?e.getSetter:Ke},Fe=function(){function t(t){this.vars=t,this._delay=+t.delay||0,(this._repeat=t.repeat===1/0?-2:t.repeat||0)&&(this._rDelay=t.repeatDelay||0,this._yoyo=!!t.yoyo||!!t.yoyoEase),this._ts=1,Nt(this,+t.duration,1,1),this.data=t.data,n&&(this._ctx=n,n.data.push(this)),f||we.wake()}var e=t.prototype;return e.delay=function(t){return t||0===t?(this.parent&&this.parent.smoothChildTiming&&this.startTime(this._start+t-this._delay),this._delay=t,this):this._delay},e.duration=function(t){return arguments.length?this.totalDuration(this._repeat>0?t+(t+this._rDelay)*this._repeat:t):this.totalDuration()&&this._dur},e.totalDuration=function(t){return arguments.length?(this._dirty=0,Nt(this,this._repeat<0?t:(t-this._repeat*this._rDelay)/(this._repeat+1))):this._tDur},e.totalTime=function(t,e){if(Te(),!arguments.length)return this._tTime;var i=this._dp;if(i&&i.smoothChildTiming&&this._ts){for(zt(this,t),!i._dp||i.parent||Ft(i,this);i&&i.parent;)i.parent._time!==i._start+(i._ts>=0?i._tTime/i._ts:(i.totalDuration()-i._tTime)/-i._ts)&&i.totalTime(i._tTime,!0),i=i.parent;!this.parent&&this._dp.autoRemoveChildren&&(this._ts>0&&t<this._tDur||this._ts<0&&t>0||!this._tDur&&!t)&&Bt(this._dp,this,this._start-this._delay)}return(this._tTime!==t||!this._dur&&!e||this._initted&&Math.abs(this._zTime)===b||!t&&!this._initted&&(this.add||this._ptLookup))&&(this._ts||(this._pTime=t),gt(this,t,e)),this},e.time=function(t,e){return arguments.length?this.totalTime(Math.min(this.totalDuration(),t+Dt(this))%(this._dur+this._rDelay)||(t?this._dur:0),e):this._time},e.totalProgress=function(t,e){return arguments.length?this.totalTime(this.totalDuration()*t,e):this.totalDuration()?Math.min(1,this._tTime/this._tDur):this.ratio},e.progress=function(t,e){return arguments.length?this.totalTime(this.duration()*(!this._yoyo||1&this.iteration()?t:1-t)+Dt(this),e):this.duration()?Math.min(1,this._time/this._dur):this.ratio},e.iteration=function(t,e){var i=this.duration()+this._rDelay;return arguments.length?this.totalTime(this._time+(t-1)*i,e):this._repeat?Pt(this._tTime,i)+1:1},e.timeScale=function(t){if(!arguments.length)return-1e-8===this._rts?0:this._rts;if(this._rts===t)return this;var e=this.parent&&this._ts?Lt(this.parent._time,this):this._tTime;return this._rts=+t||0,this._ts=this._ps||-1e-8===t?0:this._rts,this.totalTime(Wt(-Math.abs(this._delay),this._tDur,e),!0),Rt(this),function(t){for(var e=t.parent;e&&e.parent;)e._dirty=1,e.totalDuration(),e=e.parent;return t}(this)},e.paused=function(t){return arguments.length?(this._ps!==t&&(this._ps=t,t?(this._pTime=this._tTime||Math.max(-this._delay,this.rawTime()),this._ts=this._act=0):(Te(),this._ts=this._rts,this.totalTime(this.parent&&!this.parent.smoothChildTiming?this.rawTime():this._tTime||this._pTime,1===this.progress()&&Math.abs(this._zTime)!==b&&(this._tTime-=b)))),this):this._ps},e.startTime=function(t){if(arguments.length){this._start=t;var e=this.parent||this._dp;return e&&(e._sort||!this.parent)&&Bt(e,this,t-this._delay),this}return this._start},e.endTime=function(t){return this._start+(P(t)?this.totalDuration():this.duration())/Math.abs(this._ts||1)},e.rawTime=function(t){var e=this.parent||this._dp;return e?t&&(!this._ts||this._repeat&&this._time&&this.totalProgress()<1)?this._tTime%(this._dur+this._rDelay):this._ts?Lt(e.rawTime(t),this):this._tTime:this._tTime},e.revert=function(t){void 0===t&&(t=K);var e=r;return r=t,(this._initted||this._startAt)&&(this.timeline&&this.timeline.revert(t),this.totalTime(-.01,t.suppressEvents)),"nested"!==this.data&&!1!==t.kill&&this.kill(),r=e,this},e.globalTime=function(t){for(var e=this,i=arguments.length?t:e.rawTime();e;)i=e._start+i/(e._ts||1),e=e._dp;return!this.parent&&this._sat?this._sat.vars.immediateRender?-1:this._sat.globalTime(t):i},e.repeat=function(t){return arguments.length?(this._repeat=t===1/0?-2:t,Ut(this)):-2===this._repeat?1/0:this._repeat},e.repeatDelay=function(t){if(arguments.length){var e=this._time;return this._rDelay=t,Ut(this),e?this.time(e):this}return this._rDelay},e.yoyo=function(t){return arguments.length?(this._yoyo=t,this):this._yoyo},e.seek=function(t,e){return this.totalTime(Ht(this,t),P(e))},e.restart=function(t,e){return this.play().totalTime(t?-this._delay:0,P(e))},e.play=function(t,e){return null!=t&&this.seek(t,e),this.reversed(!1).paused(!1)},e.reverse=function(t,e){return null!=t&&this.seek(t||this.totalDuration(),e),this.reversed(!0).paused(!1)},e.pause=function(t,e){return null!=t&&this.seek(t,e),this.paused(!0)},e.resume=function(){return this.paused(!1)},e.reversed=function(t){return arguments.length?(!!t!==this.reversed()&&this.timeScale(-this._rts||(t?-1e-8:0)),this):this._rts<0},e.invalidate=function(){return this._initted=this._act=0,this._zTime=-1e-8,this},e.isActive=function(){var t,e=this.parent||this._dp,i=this._start;return!(e&&!(this._ts&&this._initted&&e.isActive()&&(t=e.rawTime(!0))>=i&&t<this.endTime(!0)-b))},e.eventCallback=function(t,e,i){var r=this.vars;return arguments.length>1?(e?(r[t]=e,i&&(r[t+"Params"]=i),"onUpdate"===t&&(this._onUpdate=e)):delete r[t],this):r[t]},e.then=function(t){var e=this;return new Promise((function(i){var r=A(t)?t:yt,n=function(){var t=e.then;e.then=null,A(r)&&(r=r(e))&&(r.then||r===e)&&(e.then=t),i(r),e.then=t};e._initted&&1===e.totalProgress()&&e._ts>=0||!e._tTime&&e._ts<0?n():e._prom=n}))},e.kill=function(){le(this)},t}();bt(Fe.prototype,{_time:0,_start:0,_end:0,_tTime:0,_tDur:0,_dirty:0,_repeat:0,_yoyo:!1,parent:null,_initted:!1,_rDelay:0,_ts:1,_dp:0,ratio:0,_zTime:-1e-8,_prom:0,_ps:!1,_rts:1});var Be=function(i){function n(e,r){var n;return void 0===e&&(e={}),(n=i.call(this,e)||this).labels={},n.smoothChildTiming=!!e.smoothChildTiming,n.autoRemoveChildren=!!e.autoRemoveChildren,n._sort=P(e.sortChildren),s&&Bt(e.parent||s,t(n),r),e.reversed&&n.reverse(),e.paused&&n.paused(!0),e.scrollTrigger&&qt(t(n),e.scrollTrigger),n}e(n,i);var a=n.prototype;return a.to=function(t,e,i){return jt(0,arguments,this),this},a.from=function(t,e,i){return jt(1,arguments,this),this},a.fromTo=function(t,e,i,r){return jt(2,arguments,this),this},a.set=function(t,e,i){return e.duration=0,e.parent=this,Mt(e).repeatDelay||(e.repeat=0),e.immediateRender=!!e.immediateRender,new We(t,e,Ht(this,i),1),this},a.call=function(t,e,i){return Bt(this,We.delayedCall(0,t,e),i)},a.staggerTo=function(t,e,i,r,n,s,a){return i.duration=e,i.stagger=i.stagger||r,i.onComplete=s,i.onCompleteParams=a,i.parent=this,new We(t,i,Ht(this,n)),this},a.staggerFrom=function(t,e,i,r,n,s,a){return i.runBackwards=1,Mt(i).immediateRender=P(i.immediateRender),this.staggerTo(t,e,i,r,n,s,a)},a.staggerFromTo=function(t,e,i,r,n,s,a,o){return r.startAt=i,Mt(r).immediateRender=P(r.immediateRender),this.staggerTo(t,e,r,n,s,a,o)},a.render=function(t,e,i){var n,a,o,u,h,l,c,f,p,d,_,m,g=this._time,v=this._dirty?this.totalDuration():this._tDur,y=this._dur,x=t<=0?0:pt(t),w=this._zTime<0!=t<0&&(this._initted||!y);if(this!==s&&x>v&&t>=0&&(x=v),x!==this._tTime||i||w){if(g!==this._time&&y&&(x+=this._time-g,t+=this._time-g),n=x,p=this._start,l=!(f=this._ts),w&&(y||(g=this._zTime),(t||!e)&&(this._zTime=t)),this._repeat){if(_=this._yoyo,h=y+this._rDelay,this._repeat<-1&&t<0)return this.totalTime(100*h+t,e,i);if(n=pt(x%h),x===v?(u=this._repeat,n=y):((u=~~(x/h))&&u===x/h&&(n=y,u--),n>y&&(n=y)),d=Pt(this._tTime,h),!g&&this._tTime&&d!==u&&this._tTime-d*h-this._dur<=0&&(d=u),_&&1&u&&(n=y-n,m=1),u!==d&&!this._lock){var T=_&&1&d,M=T===(_&&1&u);if(u<d&&(T=!T),g=T?0:y,this._lock=1,this.render(g||(m?0:pt(u*h)),e,!y)._lock=0,this._tTime=x,!e&&this.parent&&he(this,"onRepeat"),this.vars.repeatRefresh&&!m&&(this.invalidate()._lock=1),g&&g!==this._time||l!==!this._ts||this.vars.onRepeat&&!this.parent&&!this._act)return this;if(y=this._dur,v=this._tDur,M&&(this._lock=2,g=T?y:-1e-4,this.render(g,!0),this.vars.repeatRefresh&&!m&&this.invalidate()),this._lock=0,!this._ts&&!l)return this;Ce(this,m)}}if(this._hasPause&&!this._forcing&&this._lock<2&&(c=function(t,e,i){var r;if(i>e)for(r=t._first;r&&r._start<=i;){if("isPause"===r.data&&r._start>e)return r;r=r._next}else for(r=t._last;r&&r._start>=i;){if("isPause"===r.data&&r._start<e)return r;r=r._prev}}(this,pt(g),pt(n)),c&&(x-=n-(n=c._start))),this._tTime=x,this._time=n,this._act=!f,this._initted||(this._onUpdate=this.vars.onUpdate,this._initted=1,this._zTime=t,g=0),!g&&n&&!e&&!u&&(he(this,"onStart"),this._tTime!==x))return this;if(n>=g&&t>=0)for(a=this._first;a;){if(o=a._next,(a._act||n>=a._start)&&a._ts&&c!==a){if(a.parent!==this)return this.render(t,e,i);if(a.render(a._ts>0?(n-a._start)*a._ts:(a._dirty?a.totalDuration():a._tDur)+(n-a._start)*a._ts,e,i),n!==this._time||!this._ts&&!l){c=0,o&&(x+=this._zTime=-1e-8);break}}a=o}else{a=this._last;for(var S=t<0?t:n;a;){if(o=a._prev,(a._act||S<=a._end)&&a._ts&&c!==a){if(a.parent!==this)return this.render(t,e,i);if(a.render(a._ts>0?(S-a._start)*a._ts:(a._dirty?a.totalDuration():a._tDur)+(S-a._start)*a._ts,e,i||r&&(a._initted||a._startAt)),n!==this._time||!this._ts&&!l){c=0,o&&(x+=this._zTime=S?-1e-8:b);break}}a=o}}if(c&&!e&&(this.pause(),c.render(n>=g?0:-1e-8)._zTime=n>=g?1:-1,this._ts))return this._start=p,Rt(this),this.render(t,e,i);this._onUpdate&&!e&&he(this,"onUpdate",!0),(x===v&&this._tTime>=this.totalDuration()||!x&&g)&&(p!==this._start&&Math.abs(f)===Math.abs(this._ts)||this._lock||((t||!y)&&(x===v&&this._ts>0||!x&&this._ts<0)&&Ot(this,1),e||t<0&&!g||!x&&!g&&v||(he(this,x===v&&t>=0?"onComplete":"onReverseComplete",!0),this._prom&&!(x<v&&this.timeScale()>0)&&this._prom())))}return this},a.add=function(t,e){var i=this;if(C(e)||(e=Ht(this,e,t)),!(t instanceof Fe)){if(F(t))return t.forEach((function(t){return i.add(t,e)})),this;if(O(t))return this.addLabel(t,e);if(!A(t))return this;t=We.delayedCall(0,t)}return this!==t?Bt(this,t,e):this},a.getChildren=function(t,e,i,r){void 0===t&&(t=!0),void 0===e&&(e=!0),void 0===i&&(i=!0),void 0===r&&(r=-y);for(var n=[],s=this._first;s;)s._start>=r&&(s instanceof We?e&&n.push(s):(i&&n.push(s),t&&n.push.apply(n,s.getChildren(!0,e,i)))),s=s._next;return n},a.getById=function(t){for(var e=this.getChildren(1,1,1),i=e.length;i--;)if(e[i].vars.id===t)return e[i]},a.remove=function(t){return O(t)?this.removeLabel(t):A(t)?this.killTweensOf(t):(kt(this,t),t===this._recent&&(this._recent=this._last),At(this))},a.totalTime=function(t,e){return arguments.length?(this._forcing=1,!this._dp&&this._ts&&(this._start=pt(we.time-(this._ts>0?t/this._ts:(this.totalDuration()-t)/-this._ts))),i.prototype.totalTime.call(this,t,e),this._forcing=0,this):this._tTime},a.addLabel=function(t,e){return this.labels[t]=Ht(this,e),this},a.removeLabel=function(t){return delete this.labels[t],this},a.addPause=function(t,e,i){var r=We.delayedCall(0,e||Z,i);return r.data="isPause",this._hasPause=1,Bt(this,r,Ht(this,t))},a.removePause=function(t){var e=this._first;for(t=Ht(this,t);e;)e._start===t&&"isPause"===e.data&&Ot(e),e=e._next},a.killTweensOf=function(t,e,i){for(var r=this.getTweensOf(t,i),n=r.length;n--;)qe!==r[n]&&r[n].kill(t,e);return this},a.getTweensOf=function(t,e){for(var i,r=[],n=Jt(t),s=this._first,a=C(e);s;)s instanceof We?_t(s._targets,n)&&(a?(!qe||s._initted&&s._ts)&&s.globalTime(0)<=e&&s.globalTime(s.totalDuration())>e:!e||s.isActive())&&r.push(s):(i=s.getTweensOf(n,e)).length&&r.push.apply(r,i),s=s._next;return r},a.tweenTo=function(t,e){e=e||{};var i,r=this,n=Ht(r,t),s=e,a=s.startAt,o=s.onStart,u=s.onStartParams,h=s.immediateRender,l=We.to(r,bt({ease:e.ease||"none",lazy:!1,immediateRender:!1,time:n,overwrite:"auto",duration:e.duration||Math.abs((n-(a&&"time"in a?a.time:r._time))/r.timeScale())||b,onStart:function(){if(r.pause(),!i){var t=e.duration||Math.abs((n-(a&&"time"in a?a.time:r._time))/r.timeScale());l._dur!==t&&Nt(l,t,0,1).render(l._time,!0,!0),i=1}o&&o.apply(l,u||[])}},e));return h?l.render(0):l},a.tweenFromTo=function(t,e,i){return this.tweenTo(e,bt({startAt:{time:Ht(this,t)}},i))},a.recent=function(){return this._recent},a.nextLabel=function(t){return void 0===t&&(t=this._time),ue(this,Ht(this,t))},a.previousLabel=function(t){return void 0===t&&(t=this._time),ue(this,Ht(this,t),1)},a.currentLabel=function(t){return arguments.length?this.seek(t,!0):this.previousLabel(this._time+b)},a.shiftChildren=function(t,e,i){void 0===i&&(i=0);for(var r,n=this._first,s=this.labels;n;)n._start>=i&&(n._start+=t,n._end+=t),n=n._next;if(e)for(r in s)s[r]>=i&&(s[r]+=t);return At(this)},a.invalidate=function(t){var e=this._first;for(this._lock=0;e;)e.invalidate(t),e=e._next;return i.prototype.invalidate.call(this,t)},a.clear=function(t){void 0===t&&(t=!0);for(var e,i=this._first;i;)e=i._next,this.remove(i),i=e;return this._dp&&(this._time=this._tTime=this._pTime=0),t&&(this.labels={}),At(this)},a.totalDuration=function(t){var e,i,r,n=0,a=this,o=a._last,u=y;if(arguments.length)return a.timeScale((a._repeat<0?a.duration():a.totalDuration())/(a.reversed()?-t:t));if(a._dirty){for(r=a.parent;o;)e=o._prev,o._dirty&&o.totalDuration(),(i=o._start)>u&&a._sort&&o._ts&&!a._lock?(a._lock=1,Bt(a,o,i-o._delay,1)._lock=0):u=i,i<0&&o._ts&&(n-=i,(!r&&!a._dp||r&&r.smoothChildTiming)&&(a._start+=i/a._ts,a._time-=i,a._tTime-=i),a.shiftChildren(-i,!1,-Infinity),u=0),o._end>n&&o._ts&&(n=o._end),o=e;Nt(a,a===s&&a._time>n?a._time:n,1,1),a._dirty=0}return a._tDur},n.updateRoot=function(t){if(s._ts&&(gt(s,Lt(t,s)),l=we.frame),we.frame>=st){st+=g.autoSleep||120;var e=s._first;if((!e||!e._ts)&&g.autoSleep&&we._listeners.length<2){for(;e&&!e._ts;)e=e._next;e||we.sleep()}}},n}(Fe);bt(Be.prototype,{_lock:0,_hasPause:0,_forcing:0});var qe,Ie,Xe=function(t,e,i,r,n,s,a){var o,u,h,l,c,f,p,d,_=new ui(this._pt,t,e,0,1,ii,null,n),m=0,g=0;for(_.b=i,_.e=r,i+="",(p=~(r+="").indexOf("random("))&&(r=ae(r)),s&&(s(d=[i,r],t,e),i=d[0],r=d[1]),u=i.match(X)||[];o=X.exec(r);)l=o[0],c=r.substring(m,o.index),h?h=(h+1)%5:"rgba("===c.substr(-5)&&(h=1),l!==u[g++]&&(f=parseFloat(u[g-1])||0,_._pt={_next:_._pt,p:c||1===g?c:",",s:f,c:"="===l.charAt(1)?dt(f,l)-f:parseFloat(l)-f,m:h&&h<4?Math.round:0},m=X.lastIndex);return _.c=m<r.length?r.substring(m,r.length):"",_.fp=a,(Y.test(r)||p)&&(_.e=0),this._pt=_,_},Ye=function(t,e,i,r,n,s,a,o,u,h){A(r)&&(r=r(n||0,t,s));var l,c=t[e],f="get"!==i?i:A(c)?u?t[e.indexOf("set")||!A(t["get"+e.substr(3)])?e:"get"+e.substr(3)](u):t[e]():c,p=A(c)?u?$e:Ze:Qe;if(O(r)&&(~r.indexOf("random(")&&(r=ae(r)),"="===r.charAt(1)&&((l=dt(f,r)+(Qt(f)||0))||0===l)&&(r=l)),!h||f!==r||Ie)return isNaN(f*r)||""===r?(!c&&!(e in t)&&G(e,r),Xe.call(this,t,e,f,r,p,o||g.stringFilter,u)):(l=new ui(this._pt,t,e,+f||0,r-(f||0),"boolean"==typeof c?ei:ti,0,p),u&&(l.fp=u),a&&l.modifier(a,this,t),this._pt=l)},Ne=function(t,e,i,r,n,s){var a,o,u,h;if(rt[t]&&!1!==(a=new rt[t]).init(n,a.rawVars?e[t]:function(t,e,i,r,n){if(A(t)&&(t=He(t,n,e,i,r)),!D(t)||t.style&&t.nodeType||F(t)||z(t))return O(t)?He(t,n,e,i,r):t;var s,a={};for(s in t)a[s]=He(t[s],n,e,i,r);return a}(e[t],r,n,s,i),i,r,s)&&(i._pt=o=new ui(i._pt,n,t,0,1,a.render,a,0,a.priority),i!==c))for(u=i._ptLookup[i._targets.indexOf(n)],h=a._props.length;h--;)u[a._props[h]]=o;return a},Ue=function t(e,n,a){var o,u,h,l,c,f,p,d,_,m,g,x,w,T=e.vars,M=T.ease,S=T.startAt,k=T.immediateRender,O=T.lazy,A=T.onUpdate,C=T.onUpdateParams,E=T.callbackScope,D=T.runBackwards,L=T.yoyoEase,R=T.keyframes,z=T.autoRevert,F=e._dur,B=e._startAt,q=e._targets,I=e.parent,X=I&&"nested"===I.data?I.vars.targets:q,Y="auto"===e._overwrite&&!i,N=e.timeline;if(N&&(!R||!M)&&(M="none"),e._ease=Ee(M,v.ease),e._yEase=L?Ae(Ee(!0===L?M:L,v.ease)):0,L&&e._yoyo&&!e._repeat&&(L=e._yEase,e._yEase=e._ease,e._ease=L),e._from=!N&&!!T.runBackwards,!N||R&&!T.stagger){if(x=(d=q[0]?ht(q[0]).harness:0)&&T[d.prop],o=Tt(T,tt),B&&(B._zTime<0&&B.progress(1),n<0&&D&&k&&!z?B.render(-1,!0):B.revert(D&&F?J:$),B._lazy=0),S){if(Ot(e._startAt=We.set(q,bt({data:"isStart",overwrite:!1,parent:I,immediateRender:!0,lazy:!B&&P(O),startAt:null,delay:0,onUpdate:A,onUpdateParams:C,callbackScope:E,stagger:0},S))),e._startAt._dp=0,e._startAt._sat=e,n<0&&(r||!k&&!z)&&e._startAt.revert(J),k&&F&&n<=0&&a<=0)return void(n&&(e._zTime=n))}else if(D&&F&&!B)if(n&&(k=!1),h=bt({overwrite:!1,data:"isFromStart",lazy:k&&!B&&P(O),immediateRender:k,stagger:0,parent:I},o),x&&(h[d.prop]=x),Ot(e._startAt=We.set(q,h)),e._startAt._dp=0,e._startAt._sat=e,n<0&&(r?e._startAt.revert(J):e._startAt.render(-1,!0)),e._zTime=n,k){if(!n)return}else t(e._startAt,b,b);for(e._pt=e._ptCache=0,O=F&&P(O)||O&&!F,u=0;u<q.length;u++){if(p=(c=q[u])._gsap||ut(q)[u]._gsap,e._ptLookup[u]=m={},it[p.id]&&et.length&&mt(),g=X===q?u:X.indexOf(c),d&&!1!==(_=new d).init(c,x||o,e,g,X)&&(e._pt=l=new ui(e._pt,c,_.name,0,1,_.render,_,0,_.priority),_._props.forEach((function(t){m[t]=l})),_.priority&&(f=1)),!d||x)for(h in o)rt[h]&&(_=Ne(h,o,e,g,c,X))?_.priority&&(f=1):m[h]=l=Ye.call(e,c,h,"get",o[h],g,X,0,T.stringFilter);e._op&&e._op[u]&&e.kill(c,e._op[u]),Y&&e._pt&&(qe=e,s.killTweensOf(c,m,e.globalTime(n)),w=!e.parent,qe=0),e._pt&&O&&(it[p.id]=1)}f&&oi(e),e._onInit&&e._onInit(e)}e._onUpdate=A,e._initted=(!e._op||e._pt)&&!w,R&&n<=0&&N.render(y,!0,!0)},Ve=function(t,e,i,r){var n,s,a=e.ease||r||"power1.inOut";if(F(e))s=i[t]||(i[t]=[]),e.forEach((function(t,i){return s.push({t:i/(e.length-1)*100,v:t,e:a})}));else for(n in e)s=i[n]||(i[n]=[]),"ease"===n||s.push({t:parseFloat(t),v:e[n],e:a})},He=function(t,e,i,r,n){return A(t)?t.call(e,i,r,n):O(t)&&~t.indexOf("random(")?ae(t):t},je=ot+"repeat,repeatDelay,yoyo,repeatRefresh,yoyoEase,autoRevert",Ge={};ct(je+",id,stagger,delay,duration,paused,scrollTrigger",(function(t){return Ge[t]=1}));var We=function(n){function a(e,r,a,o){var u;"number"==typeof r&&(a.duration=r,r=a,a=null);var h,l,c,f,p,d,_,m,v=(u=n.call(this,o?r:Mt(r))||this).vars,y=v.duration,b=v.delay,x=v.immediateRender,w=v.stagger,T=v.overwrite,M=v.keyframes,S=v.defaults,k=v.scrollTrigger,O=v.yoyoEase,A=r.parent||s,E=(F(e)||z(e)?C(e[0]):"length"in r)?[e]:Jt(e);if(u._targets=E.length?ut(E):W("GSAP target "+e+" not found. https://greensock.com",!g.nullTargetWarn)||[],u._ptLookup=[],u._overwrite=T,M||w||R(y)||R(b)){if(r=u.vars,(h=u.timeline=new Be({data:"nested",defaults:S||{},targets:A&&"nested"===A.data?A.vars.targets:E})).kill(),h.parent=h._dp=t(u),h._start=0,w||R(y)||R(b)){if(f=E.length,_=w&&ee(w),D(w))for(p in w)~je.indexOf(p)&&(m||(m={}),m[p]=w[p]);for(l=0;l<f;l++)(c=Tt(r,Ge)).stagger=0,O&&(c.yoyoEase=O),m&&xt(c,m),d=E[l],c.duration=+He(y,t(u),l,d,E),c.delay=(+He(b,t(u),l,d,E)||0)-u._delay,!w&&1===f&&c.delay&&(u._delay=b=c.delay,u._start+=b,c.delay=0),h.to(d,c,_?_(l,d,E):0),h._ease=Me.none;h.duration()?y=b=0:u.timeline=0}else if(M){Mt(bt(h.vars.defaults,{ease:"none"})),h._ease=Ee(M.ease||r.ease||"none");var L,B,q,I=0;if(F(M))M.forEach((function(t){return h.to(E,t,">")})),h.duration();else{for(p in c={},M)"ease"===p||"easeEach"===p||Ve(p,M[p],c,M.easeEach);for(p in c)for(L=c[p].sort((function(t,e){return t.t-e.t})),I=0,l=0;l<L.length;l++)(q={ease:(B=L[l]).e,duration:(B.t-(l?L[l-1].t:0))/100*y})[p]=B.v,h.to(E,q,I),I+=q.duration;h.duration()<y&&h.to({},{duration:y-h.duration()})}}y||u.duration(y=h.duration())}else u.timeline=0;return!0!==T||i||(qe=t(u),s.killTweensOf(E),qe=0),Bt(A,t(u),a),r.reversed&&u.reverse(),r.paused&&u.paused(!0),(x||!y&&!M&&u._start===pt(A._time)&&P(x)&&Et(t(u))&&"nested"!==A.data)&&(u._tTime=-1e-8,u.render(Math.max(0,-b)||0)),k&&qt(t(u),k),u}e(a,n);var o=a.prototype;return o.render=function(t,e,i){var n,s,a,o,u,h,l,c,f,p=this._time,d=this._tDur,_=this._dur,m=t<0,g=t>d-b&&!m?d:t<b?0:t;if(_){if(g!==this._tTime||!t||i||!this._initted&&this._tTime||this._startAt&&this._zTime<0!==m){if(n=g,c=this.timeline,this._repeat){if(o=_+this._rDelay,this._repeat<-1&&m)return this.totalTime(100*o+t,e,i);if(n=pt(g%o),g===d?(a=this._repeat,n=_):((a=~~(g/o))&&a===g/o&&(n=_,a--),n>_&&(n=_)),(h=this._yoyo&&1&a)&&(f=this._yEase,n=_-n),u=Pt(this._tTime,o),n===p&&!i&&this._initted)return this._tTime=g,this;a!==u&&(c&&this._yEase&&Ce(c,h),!this.vars.repeatRefresh||h||this._lock||(this._lock=i=1,this.render(pt(o*a),!0).invalidate()._lock=0))}if(!this._initted){if(It(this,m?t:n,i,e,g))return this._tTime=0,this;if(p!==this._time)return this;if(_!==this._dur)return this.render(t,e,i)}if(this._tTime=g,this._time=n,!this._act&&this._ts&&(this._act=1,this._lazy=0),this.ratio=l=(f||this._ease)(n/_),this._from&&(this.ratio=l=1-l),n&&!p&&!e&&!a&&(he(this,"onStart"),this._tTime!==g))return this;for(s=this._pt;s;)s.r(l,s.d),s=s._next;c&&c.render(t<0?t:!n&&h?-1e-8:c._dur*c._ease(n/this._dur),e,i)||this._startAt&&(this._zTime=t),this._onUpdate&&!e&&(m&&Ct(this,t,0,i),he(this,"onUpdate")),this._repeat&&a!==u&&this.vars.onRepeat&&!e&&this.parent&&he(this,"onRepeat"),g!==this._tDur&&g||this._tTime!==g||(m&&!this._onUpdate&&Ct(this,t,0,!0),(t||!_)&&(g===this._tDur&&this._ts>0||!g&&this._ts<0)&&Ot(this,1),e||m&&!p||!(g||p||h)||(he(this,g===d?"onComplete":"onReverseComplete",!0),this._prom&&!(g<d&&this.timeScale()>0)&&this._prom()))}}else!function(t,e,i,n){var s,a,o,u=t.ratio,h=e<0||!e&&(!t._start&&Xt(t)&&(t._initted||!Yt(t))||(t._ts<0||t._dp._ts<0)&&!Yt(t))?0:1,l=t._rDelay,c=0;if(l&&t._repeat&&(c=Wt(0,t._tDur,e),a=Pt(c,l),t._yoyo&&1&a&&(h=1-h),a!==Pt(t._tTime,l)&&(u=1-h,t.vars.repeatRefresh&&t._initted&&t.invalidate())),h!==u||r||n||t._zTime===b||!e&&t._zTime){if(!t._initted&&It(t,e,n,i,c))return;for(o=t._zTime,t._zTime=e||(i?b:0),i||(i=e&&!o),t.ratio=h,t._from&&(h=1-h),t._time=0,t._tTime=c,s=t._pt;s;)s.r(h,s.d),s=s._next;e<0&&Ct(t,e,0,!0),t._onUpdate&&!i&&he(t,"onUpdate"),c&&t._repeat&&!i&&t.parent&&he(t,"onRepeat"),(e>=t._tDur||e<0)&&t.ratio===h&&(h&&Ot(t,1),i||r||(he(t,h?"onComplete":"onReverseComplete",!0),t._prom&&t._prom()))}else t._zTime||(t._zTime=e)}(this,t,e,i);return this},o.targets=function(){return this._targets},o.invalidate=function(t){return(!t||!this.vars.runBackwards)&&(this._startAt=0),this._pt=this._op=this._onUpdate=this._lazy=this.ratio=0,this._ptLookup=[],this.timeline&&this.timeline.invalidate(t),n.prototype.invalidate.call(this,t)},o.resetTo=function(t,e,i,r){f||we.wake(),this._ts||this.play();var n=Math.min(this._dur,(this._dp._time-this._start)*this._ts);return this._initted||Ue(this,n),function(t,e,i,r,n,s,a){var o,u,h,l,c=(t._pt&&t._ptCache||(t._ptCache={}))[e];if(!c)for(c=t._ptCache[e]=[],h=t._ptLookup,l=t._targets.length;l--;){if((o=h[l][e])&&o.d&&o.d._pt)for(o=o.d._pt;o&&o.p!==e&&o.fp!==e;)o=o._next;if(!o)return Ie=1,t.vars[e]="+=0",Ue(t,a),Ie=0,1;c.push(o)}for(l=c.length;l--;)(o=(u=c[l])._pt||u).s=!r&&0!==r||n?o.s+(r||0)+s*o.c:r,o.c=i-o.s,u.e&&(u.e=ft(i)+Qt(u.e)),u.b&&(u.b=o.s+Qt(u.b))}(this,t,e,i,r,this._ease(n/this._dur),n)?this.resetTo(t,e,i,r):(zt(this,0),this.parent||St(this._dp,this,"_first","_last",this._dp._sort?"_start":0),this.render(0))},o.kill=function(t,e){if(void 0===e&&(e="all"),!(t||e&&"all"!==e))return this._lazy=this._pt=0,this.parent?le(this):this;if(this.timeline){var i=this.timeline.totalDuration();return this.timeline.killTweensOf(t,e,qe&&!0!==qe.vars.overwrite)._first||le(this),this.parent&&i!==this.timeline.totalDuration()&&Nt(this,this._dur*this.timeline._tDur/i,0,1),this}var r,n,s,a,o,u,h,l=this._targets,c=t?Jt(t):l,f=this._ptLookup,p=this._pt;if((!e||"all"===e)&&function(t,e){for(var i=t.length,r=i===e.length;r&&i--&&t[i]===e[i];);return i<0}(l,c))return"all"===e&&(this._pt=0),le(this);for(r=this._op=this._op||[],"all"!==e&&(O(e)&&(o={},ct(e,(function(t){return o[t]=1})),e=o),e=function(t,e){var i,r,n,s,a=t[0]?ht(t[0]).harness:0,o=a&&a.aliases;if(!o)return e;for(r in i=xt({},e),o)if(r in i)for(n=(s=o[r].split(",")).length;n--;)i[s[n]]=i[r];return i}(l,e)),h=l.length;h--;)if(~c.indexOf(l[h]))for(o in n=f[h],"all"===e?(r[h]=e,a=n,s={}):(s=r[h]=r[h]||{},a=e),a)(u=n&&n[o])&&("kill"in u.d&&!0!==u.d.kill(o)||kt(this,u,"_pt"),delete n[o]),"all"!==s&&(s[o]=1);return this._initted&&!this._pt&&p&&le(this),this},a.to=function(t,e){return new a(t,e,arguments[2])},a.from=function(t,e){return jt(1,arguments)},a.delayedCall=function(t,e,i,r){return new a(e,0,{immediateRender:!1,lazy:!1,overwrite:!1,delay:t,onComplete:e,onReverseComplete:e,onCompleteParams:i,onReverseCompleteParams:i,callbackScope:r})},a.fromTo=function(t,e,i){return jt(2,arguments)},a.set=function(t,e){return e.duration=0,e.repeatDelay||(e.repeat=0),new a(t,e)},a.killTweensOf=function(t,e,i){return s.killTweensOf(t,e,i)},a}(Fe);bt(We.prototype,{_targets:[],_lazy:0,_startAt:0,_op:0,_onInit:0}),ct("staggerTo,staggerFrom,staggerFromTo",(function(t){We[t]=function(){var e=new Be,i=Zt.call(arguments,0);return i.splice("staggerFromTo"===t?5:4,0,0),e[t].apply(e,i)}}));var Qe=function(t,e,i){return t[e]=i},Ze=function(t,e,i){return t[e](i)},$e=function(t,e,i,r){return t[e](r.fp,i)},Je=function(t,e,i){return t.setAttribute(e,i)},Ke=function(t,e){return A(t[e])?Ze:E(t[e])&&t.setAttribute?Je:Qe},ti=function(t,e){return e.set(e.t,e.p,Math.round(1e6*(e.s+e.c*t))/1e6,e)},ei=function(t,e){return e.set(e.t,e.p,!!(e.s+e.c*t),e)},ii=function(t,e){var i=e._pt,r="";if(!t&&e.b)r=e.b;else if(1===t&&e.e)r=e.e;else{for(;i;)r=i.p+(i.m?i.m(i.s+i.c*t):Math.round(1e4*(i.s+i.c*t))/1e4)+r,i=i._next;r+=e.c}e.set(e.t,e.p,r,e)},ri=function(t,e){for(var i=e._pt;i;)i.r(t,i.d),i=i._next},ni=function(t,e,i,r){for(var n,s=this._pt;s;)n=s._next,s.p===r&&s.modifier(t,e,i),s=n},si=function(t){for(var e,i,r=this._pt;r;)i=r._next,r.p===t&&!r.op||r.op===t?kt(this,r,"_pt"):r.dep||(e=1),r=i;return!e},ai=function(t,e,i,r){r.mSet(t,e,r.m.call(r.tween,i,r.mt),r)},oi=function(t){for(var e,i,r,n,s=t._pt;s;){for(e=s._next,i=r;i&&i.pr>s.pr;)i=i._next;(s._prev=i?i._prev:n)?s._prev._next=s:r=s,(s._next=i)?i._prev=s:n=s,s=e}t._pt=r},ui=function(){function t(t,e,i,r,n,s,a,o,u){this.t=e,this.s=r,this.c=n,this.p=i,this.r=s||ti,this.d=a||this,this.set=o||Qe,this.pr=u||0,this._next=t,t&&(t._prev=this)}return t.prototype.modifier=function(t,e,i){this.mSet=this.mSet||this.set,this.set=ai,this.m=t,this.mt=i,this.tween=e},t}();ct(ot+"parent,duration,ease,delay,overwrite,runBackwards,startAt,yoyo,immediateRender,repeat,repeatDelay,data,paused,reversed,lazy,callbackScope,stringFilter,id,yoyoEase,stagger,inherit,repeatRefresh,keyframes,autoRevert,scrollTrigger",(function(t){return tt[t]=1})),V.TweenMax=V.TweenLite=We,V.TimelineLite=V.TimelineMax=Be,s=new Be({sortChildren:!1,defaults:v,autoRemoveChildren:!0,id:"root",smoothChildTiming:!0}),g.stringFilter=xe;var hi=[],li={},ci=[],fi=0,pi=function(t){return(li[t]||ci).map((function(t){return t()}))},di=function(){var t=Date.now(),e=[];t-fi>2&&(pi("matchMediaInit"),hi.forEach((function(t){var i,r,n,s,o=t.queries,u=t.conditions;for(r in o)(i=a.matchMedia(o[r]).matches)&&(n=1),i!==u[r]&&(u[r]=i,s=1);s&&(t.revert(),n&&e.push(t))})),pi("matchMediaRevert"),e.forEach((function(t){return t.onMatch(t)})),fi=t,pi("matchMedia"))},_i=function(){function t(t,e){this.selector=e&&Kt(e),this.data=[],this._r=[],this.isReverted=!1,t&&this.add(t)}var e=t.prototype;return e.add=function(t,e,i){A(t)&&(i=e,e=t,t=A);var r=this,s=function(){var t,s=n,a=r.selector;return s&&s!==r&&s.data.push(r),i&&(r.selector=Kt(i)),n=r,t=e.apply(r,arguments),A(t)&&r._r.push(t),n=s,r.selector=a,r.isReverted=!1,t};return r.last=s,t===A?s(r):t?r[t]=s:s},e.ignore=function(t){var e=n;n=null,t(this),n=e},e.getTweens=function(){var e=[];return this.data.forEach((function(i){return i instanceof t?e.push.apply(e,i.getTweens()):i instanceof We&&!(i.parent&&"nested"===i.parent.data)&&e.push(i)})),e},e.clear=function(){this._r.length=this.data.length=0},e.kill=function(t,e){var i=this;if(t){var r=this.getTweens();this.data.forEach((function(t){"isFlip"===t.data&&(t.revert(),t.getChildren(!0,!0,!1).forEach((function(t){return r.splice(r.indexOf(t),1)})))})),r.map((function(t){return{g:t.globalTime(0),t:t}})).sort((function(t,e){return e.g-t.g||-1})).forEach((function(e){return e.t.revert(t)})),this.data.forEach((function(e){return!(e instanceof Fe)&&e.revert&&e.revert(t)})),this._r.forEach((function(e){return e(t,i)})),this.isReverted=!0}else this.data.forEach((function(t){return t.kill&&t.kill()}));if(this.clear(),e){var n=hi.indexOf(this);~n&&hi.splice(n,1)}},e.revert=function(t){this.kill(t||{})},t}(),mi=function(){function t(t){this.contexts=[],this.scope=t}var e=t.prototype;return e.add=function(t,e,i){D(t)||(t={matches:t});var r,n,s,o=new _i(0,i||this.scope),u=o.conditions={};for(n in this.contexts.push(o),e=o.add("onMatch",e),o.queries=t,t)"all"===n?s=1:(r=a.matchMedia(t[n]))&&(hi.indexOf(o)<0&&hi.push(o),(u[n]=r.matches)&&(s=1),r.addListener?r.addListener(di):r.addEventListener("change",di));return s&&e(o),this},e.revert=function(t){this.kill(t||{})},e.kill=function(t){this.contexts.forEach((function(e){return e.kill(t,!0)}))},t}(),gi={registerPlugin:function(){for(var t=arguments.length,e=new Array(t),i=0;i<t;i++)e[i]=arguments[i];e.forEach((function(t){return fe(t)}))},timeline:function(t){return new Be(t)},getTweensOf:function(t,e){return s.getTweensOf(t,e)},getProperty:function(t,e,i,r){O(t)&&(t=Jt(t)[0]);var n=ht(t||{}).get,s=i?yt:vt;return"native"===i&&(i=""),t?e?s((rt[e]&&rt[e].get||n)(t,e,i,r)):function(e,i,r){return s((rt[e]&&rt[e].get||n)(t,e,i,r))}:t},quickSetter:function(t,e,i){if((t=Jt(t)).length>1){var r=t.map((function(t){return bi.quickSetter(t,e,i)})),n=r.length;return function(t){for(var e=n;e--;)r[e](t)}}t=t[0]||{};var s=rt[e],a=ht(t),o=a.harness&&(a.harness.aliases||{})[e]||e,u=s?function(e){var r=new s;c._pt=0,r.init(t,i?e+i:e,c,0,[t]),r.render(1,r),c._pt&&ri(1,c)}:a.set(t,o);return s?u:function(e){return u(t,o,i?e+i:e,a,1)}},quickTo:function(t,e,i){var r,n=bi.to(t,xt(((r={})[e]="+=0.1",r.paused=!0,r),i||{})),s=function(t,i,r){return n.resetTo(e,t,i,r)};return s.tween=n,s},isTweening:function(t){return s.getTweensOf(t,!0).length>0},defaults:function(t){return t&&t.ease&&(t.ease=Ee(t.ease,v.ease)),wt(v,t||{})},config:function(t){return wt(g,t||{})},registerEffect:function(t){var e=t.name,i=t.effect,r=t.plugins,n=t.defaults,s=t.extendTimeline;(r||"").split(",").forEach((function(t){return t&&!rt[t]&&!V[t]&&W(e+" effect requires "+t+" plugin.")})),nt[e]=function(t,e,r){return i(Jt(t),bt(e||{},n),r)},s&&(Be.prototype[e]=function(t,i,r){return this.add(nt[e](t,D(i)?i:(r=i)&&{},this),r)})},registerEase:function(t,e){Me[t]=Ee(e)},parseEase:function(t,e){return arguments.length?Ee(t,e):Me},getById:function(t){return s.getById(t)},exportRoot:function(t,e){void 0===t&&(t={});var i,r,n=new Be(t);for(n.smoothChildTiming=P(t.smoothChildTiming),s.remove(n),n._dp=0,n._time=n._tTime=s._time,i=s._first;i;)r=i._next,!e&&!i._dur&&i instanceof We&&i.vars.onComplete===i._targets[0]||Bt(n,i,i._start-i._delay),i=r;return Bt(s,n,0),n},context:function(t,e){return t?new _i(t,e):n},matchMedia:function(t){return new mi(t)},matchMediaRefresh:function(){return hi.forEach((function(t){var e,i,r=t.conditions;for(i in r)r[i]&&(r[i]=!1,e=1);e&&t.revert()}))||di()},addEventListener:function(t,e){var i=li[t]||(li[t]=[]);~i.indexOf(e)||i.push(e)},removeEventListener:function(t,e){var i=li[t],r=i&&i.indexOf(e);r>=0&&i.splice(r,1)},utils:{wrap:function t(e,i,r){var n=i-e;return F(e)?se(e,t(0,e.length),i):Gt(r,(function(t){return(n+(t-e)%n)%n+e}))},wrapYoyo:function t(e,i,r){var n=i-e,s=2*n;return F(e)?se(e,t(0,e.length-1),i):Gt(r,(function(t){return e+((t=(s+(t-e)%s)%s||0)>n?s-t:t)}))},distribute:ee,random:ne,snap:re,normalize:function(t,e,i){return oe(t,e,0,1,i)},getUnit:Qt,clamp:function(t,e,i){return Gt(i,(function(i){return Wt(t,e,i)}))},splitColor:me,toArray:Jt,selector:Kt,mapRange:oe,pipe:function(){for(var t=arguments.length,e=new Array(t),i=0;i<t;i++)e[i]=arguments[i];return function(t){return e.reduce((function(t,e){return e(t)}),t)}},unitize:function(t,e){return function(i){return t(parseFloat(i))+(e||Qt(i))}},interpolate:function t(e,i,r,n){var s=isNaN(e+i)?0:function(t){return(1-t)*e+t*i};if(!s){var a,o,u,h,l,c=O(e),f={};if(!0===r&&(n=1)&&(r=null),c)e={p:e},i={p:i};else if(F(e)&&!F(i)){for(u=[],h=e.length,l=h-2,o=1;o<h;o++)u.push(t(e[o-1],e[o]));h--,s=function(t){t*=h;var e=Math.min(l,~~t);return u[e](t-e)},r=i}else n||(e=xt(F(e)?[]:{},e));if(!u){for(a in i)Ye.call(f,e,a,"get",i[a]);s=function(t){return ri(t,f)||(c?e.p:e)}}}return Gt(r,s)},shuffle:te},install:j,effects:nt,ticker:we,updateRoot:Be.updateRoot,plugins:rt,globalTimeline:s,core:{PropTween:ui,globals:Q,Tween:We,Timeline:Be,Animation:Fe,getCache:ht,_removeLinkedListItem:kt,reverting:function(){return r},context:function(t){return t&&n&&(n.data.push(t),t._ctx=n),n},suppressOverwrites:function(t){return i=t}}};ct("to,from,fromTo,delayedCall,set,killTweensOf",(function(t){return gi[t]=We[t]})),we.add(Be.updateRoot),c=gi.to({},{duration:0});var vi=function(t,e){for(var i=t._pt;i&&i.p!==e&&i.op!==e&&i.fp!==e;)i=i._next;return i},yi=function(t,e){return{name:t,rawVars:1,init:function(t,i,r){r._onInit=function(t){var r,n;if(O(i)&&(r={},ct(i,(function(t){return r[t]=1})),i=r),e){for(n in r={},i)r[n]=e(i[n]);i=r}!function(t,e){var i,r,n,s=t._targets;for(i in e)for(r=s.length;r--;)(n=t._ptLookup[r][i])&&(n=n.d)&&(n._pt&&(n=vi(n,i)),n&&n.modifier&&n.modifier(e[i],t,s[r],i))}(t,i)}}}},bi=gi.registerPlugin({name:"attr",init:function(t,e,i,r,n){var s,a,o;for(s in this.tween=i,e)o=t.getAttribute(s)||"",(a=this.add(t,"setAttribute",(o||0)+"",e[s],r,n,0,0,s)).op=s,a.b=o,this._props.push(s)},render:function(t,e){for(var i=e._pt;i;)r?i.set(i.t,i.p,i.b,i):i.r(t,i.d),i=i._next}},{name:"endArray",init:function(t,e){for(var i=e.length;i--;)this.add(t,i,t[i]||0,e[i],0,0,0,0,0,1)}},yi("roundProps",ie),yi("modifiers"),yi("snap",re))||gi;We.version=Be.version=bi.version="3.11.5",h=1,L()&&Te(),Me.Power0,Me.Power1,Me.Power2,Me.Power3,Me.Power4,Me.Linear,Me.Quad,Me.Cubic,Me.Quart,Me.Quint,Me.Strong,Me.Elastic,Me.Back,Me.SteppedEase,Me.Bounce,Me.Sine,Me.Expo,Me.Circ;var xi,wi,Ti,Mi,Si,ki,Oi,Ai,Ci={},Ei=180/Math.PI,Di=Math.PI/180,Pi=Math.atan2,Li=/([A-Z])/g,Ri=/(left|right|width|margin|padding|x)/i,zi=/[\s,\(]\S/,Fi={autoAlpha:"opacity,visibility",scale:"scaleX,scaleY",alpha:"opacity"},Bi=function(t,e){return e.set(e.t,e.p,Math.round(1e4*(e.s+e.c*t))/1e4+e.u,e)},qi=function(t,e){return e.set(e.t,e.p,1===t?e.e:Math.round(1e4*(e.s+e.c*t))/1e4+e.u,e)},Ii=function(t,e){return e.set(e.t,e.p,t?Math.round(1e4*(e.s+e.c*t))/1e4+e.u:e.b,e)},Xi=function(t,e){var i=e.s+e.c*t;e.set(e.t,e.p,~~(i+(i<0?-.5:.5))+e.u,e)},Yi=function(t,e){return e.set(e.t,e.p,t?e.e:e.b,e)},Ni=function(t,e){return e.set(e.t,e.p,1!==t?e.b:e.e,e)},Ui=function(t,e,i){return t.style[e]=i},Vi=function(t,e,i){return t.style.setProperty(e,i)},Hi=function(t,e,i){return t._gsap[e]=i},ji=function(t,e,i){return t._gsap.scaleX=t._gsap.scaleY=i},Gi=function(t,e,i,r,n){var s=t._gsap;s.scaleX=s.scaleY=i,s.renderTransform(n,s)},Wi=function(t,e,i,r,n){var s=t._gsap;s[e]=i,s.renderTransform(n,s)},Qi="transform",Zi=Qi+"Origin",$i=function t(e,i){var r=this,n=this.target,s=n.style;if(e in Ci){if(this.tfm=this.tfm||{},"transform"===e)return Fi.transform.split(",").forEach((function(e){return t.call(r,e,i)}));if(~(e=Fi[e]||e).indexOf(",")?e.split(",").forEach((function(t){return r.tfm[t]=_r(n,t)})):this.tfm[e]=n._gsap.x?n._gsap[e]:_r(n,e),this.props.indexOf(Qi)>=0)return;n._gsap.svg&&(this.svgo=n.getAttribute("data-svg-origin"),this.props.push(Zi,i,"")),e=Qi}(s||i)&&this.props.push(e,i,s[e])},Ji=function(t){t.translate&&(t.removeProperty("translate"),t.removeProperty("scale"),t.removeProperty("rotate"))},Ki=function(){var t,e,i=this.props,r=this.target,n=r.style,s=r._gsap;for(t=0;t<i.length;t+=3)i[t+1]?r[i[t]]=i[t+2]:i[t+2]?n[i[t]]=i[t+2]:n.removeProperty("--"===i[t].substr(0,2)?i[t]:i[t].replace(Li,"-$1").toLowerCase());if(this.tfm){for(e in this.tfm)s[e]=this.tfm[e];s.svg&&(s.renderTransform(),r.setAttribute("data-svg-origin",this.svgo||"")),(t=Oi())&&t.isStart||n[Qi]||(Ji(n),s.uncache=1)}},tr=function(t,e){var i={target:t,props:[],revert:Ki,save:$i};return t._gsap||bi.core.getCache(t),e&&e.split(",").forEach((function(t){return i.save(t)})),i},er=function(t,e){var i=wi.createElementNS?wi.createElementNS((e||"http://www.w3.org/1999/xhtml").replace(/^https/,"http"),t):wi.createElement(t);return i.style?i:wi.createElement(t)},ir=function t(e,i,r){var n=getComputedStyle(e);return n[i]||n.getPropertyValue(i.replace(Li,"-$1").toLowerCase())||n.getPropertyValue(i)||!r&&t(e,nr(i)||i,1)||""},rr="O,Moz,ms,Ms,Webkit".split(","),nr=function(t,e,i){var r=(e||Si).style,n=5;if(t in r&&!i)return t;for(t=t.charAt(0).toUpperCase()+t.substr(1);n--&&!(rr[n]+t in r););return n<0?null:(3===n?"ms":n>=0?rr[n]:"")+t},sr=function(){"undefined"!=typeof window&&window.document&&(xi=window,wi=xi.document,Ti=wi.documentElement,Si=er("div")||{style:{}},er("div"),Qi=nr(Qi),Zi=Qi+"Origin",Si.style.cssText="border-width:0;line-height:0;position:absolute;padding:0",Ai=!!nr("perspective"),Oi=bi.core.reverting,Mi=1)},ar=function t(e){var i,r=er("svg",this.ownerSVGElement&&this.ownerSVGElement.getAttribute("xmlns")||"http://www.w3.org/2000/svg"),n=this.parentNode,s=this.nextSibling,a=this.style.cssText;if(Ti.appendChild(r),r.appendChild(this),this.style.display="block",e)try{i=this.getBBox(),this._gsapBBox=this.getBBox,this.getBBox=t}catch(t){}else this._gsapBBox&&(i=this._gsapBBox());return n&&(s?n.insertBefore(this,s):n.appendChild(this)),Ti.removeChild(r),this.style.cssText=a,i},or=function(t,e){for(var i=e.length;i--;)if(t.hasAttribute(e[i]))return t.getAttribute(e[i])},ur=function(t){var e;try{e=t.getBBox()}catch(i){e=ar.call(t,!0)}return e&&(e.width||e.height)||t.getBBox===ar||(e=ar.call(t,!0)),!e||e.width||e.x||e.y?e:{x:+or(t,["x","cx","x1"])||0,y:+or(t,["y","cy","y1"])||0,width:0,height:0}},hr=function(t){return!(!t.getCTM||t.parentNode&&!t.ownerSVGElement||!ur(t))},lr=function(t,e){if(e){var i=t.style;e in Ci&&e!==Zi&&(e=Qi),i.removeProperty?("ms"!==e.substr(0,2)&&"webkit"!==e.substr(0,6)||(e="-"+e),i.removeProperty(e.replace(Li,"-$1").toLowerCase())):i.removeAttribute(e)}},cr=function(t,e,i,r,n,s){var a=new ui(t._pt,e,i,0,1,s?Ni:Yi);return t._pt=a,a.b=r,a.e=n,t._props.push(i),a},fr={deg:1,rad:1,turn:1},pr={grid:1,flex:1},dr=function t(e,i,r,n){var s,a,o,u,h=parseFloat(r)||0,l=(r+"").trim().substr((h+"").length)||"px",c=Si.style,f=Ri.test(i),p="svg"===e.tagName.toLowerCase(),d=(p?"client":"offset")+(f?"Width":"Height"),_=100,m="px"===n,g="%"===n;return n===l||!h||fr[n]||fr[l]?h:("px"!==l&&!m&&(h=t(e,i,r,"px")),u=e.getCTM&&hr(e),!g&&"%"!==l||!Ci[i]&&!~i.indexOf("adius")?(c[f?"width":"height"]=_+(m?l:n),a=~i.indexOf("adius")||"em"===n&&e.appendChild&&!p?e:e.parentNode,u&&(a=(e.ownerSVGElement||{}).parentNode),a&&a!==wi&&a.appendChild||(a=wi.body),(o=a._gsap)&&g&&o.width&&f&&o.time===we.time&&!o.uncache?ft(h/o.width*_):((g||"%"===l)&&!pr[ir(a,"display")]&&(c.position=ir(e,"position")),a===e&&(c.position="static"),a.appendChild(Si),s=Si[d],a.removeChild(Si),c.position="absolute",f&&g&&((o=ht(a)).time=we.time,o.width=a[d]),ft(m?s*h/_:s&&h?_/s*h:0))):(s=u?e.getBBox()[f?"width":"height"]:e[d],ft(g?h/s*_:h/100*s)))},_r=function(t,e,i,r){var n;return Mi||sr(),e in Fi&&"transform"!==e&&~(e=Fi[e]).indexOf(",")&&(e=e.split(",")[0]),Ci[e]&&"transform"!==e?(n=kr(t,r),n="transformOrigin"!==e?n[e]:n.svg?n.origin:Or(ir(t,Zi))+" "+n.zOrigin+"px"):(!(n=t.style[e])||"auto"===n||r||~(n+"").indexOf("calc("))&&(n=yr[e]&&yr[e](t,e,i)||ir(t,e)||lt(t,e)||("opacity"===e?1:0)),i&&!~(n+"").trim().indexOf(" ")?dr(t,e,n,i)+i:n},mr=function(t,e,i,r){if(!i||"none"===i){var n=nr(e,t,1),s=n&&ir(t,n,1);s&&s!==i?(e=n,i=s):"borderColor"===e&&(i=ir(t,"borderTopColor"))}var a,o,u,h,l,c,f,p,d,_,m,v=new ui(this._pt,t.style,e,0,1,ii),y=0,b=0;if(v.b=i,v.e=r,i+="","auto"==(r+="")&&(t.style[e]=r,r=ir(t,e)||r,t.style[e]=i),xe(a=[i,r]),r=a[1],u=(i=a[0]).match(I)||[],(r.match(I)||[]).length){for(;o=I.exec(r);)f=o[0],d=r.substring(y,o.index),l?l=(l+1)%5:"rgba("!==d.substr(-5)&&"hsla("!==d.substr(-5)||(l=1),f!==(c=u[b++]||"")&&(h=parseFloat(c)||0,m=c.substr((h+"").length),"="===f.charAt(1)&&(f=dt(h,f)+m),p=parseFloat(f),_=f.substr((p+"").length),y=I.lastIndex-_.length,_||(_=_||g.units[e]||m,y===r.length&&(r+=_,v.e+=_)),m!==_&&(h=dr(t,e,c,_)||0),v._pt={_next:v._pt,p:d||1===b?d:",",s:h,c:p-h,m:l&&l<4||"zIndex"===e?Math.round:0});v.c=y<r.length?r.substring(y,r.length):""}else v.r="display"===e&&"none"===r?Ni:Yi;return Y.test(r)&&(v.e=0),this._pt=v,v},gr={top:"0%",bottom:"100%",left:"0%",right:"100%",center:"50%"},vr=function(t,e){if(e.tween&&e.tween._time===e.tween._dur){var i,r,n,s=e.t,a=s.style,o=e.u,u=s._gsap;if("all"===o||!0===o)a.cssText="",r=1;else for(n=(o=o.split(",")).length;--n>-1;)i=o[n],Ci[i]&&(r=1,i="transformOrigin"===i?Zi:Qi),lr(s,i);r&&(lr(s,Qi),u&&(u.svg&&s.removeAttribute("transform"),kr(s,1),u.uncache=1,Ji(a)))}},yr={clearProps:function(t,e,i,r,n){if("isFromStart"!==n.data){var s=t._pt=new ui(t._pt,e,i,0,0,vr);return s.u=r,s.pr=-10,s.tween=n,t._props.push(i),1}}},br=[1,0,0,1,0,0],xr={},wr=function(t){return"matrix(1, 0, 0, 1, 0, 0)"===t||"none"===t||!t},Tr=function(t){var e=ir(t,Qi);return wr(e)?br:e.substr(7).match(q).map(ft)},Mr=function(t,e){var i,r,n,s,a=t._gsap||ht(t),o=t.style,u=Tr(t);return a.svg&&t.getAttribute("transform")?"1,0,0,1,0,0"===(u=[(n=t.transform.baseVal.consolidate().matrix).a,n.b,n.c,n.d,n.e,n.f]).join(",")?br:u:(u!==br||t.offsetParent||t===Ti||a.svg||(n=o.display,o.display="block",(i=t.parentNode)&&t.offsetParent||(s=1,r=t.nextElementSibling,Ti.appendChild(t)),u=Tr(t),n?o.display=n:lr(t,"display"),s&&(r?i.insertBefore(t,r):i?i.appendChild(t):Ti.removeChild(t))),e&&u.length>6?[u[0],u[1],u[4],u[5],u[12],u[13]]:u)},Sr=function(t,e,i,r,n,s){var a,o,u,h=t._gsap,l=n||Mr(t,!0),c=h.xOrigin||0,f=h.yOrigin||0,p=h.xOffset||0,d=h.yOffset||0,_=l[0],m=l[1],g=l[2],v=l[3],y=l[4],b=l[5],x=e.split(" "),w=parseFloat(x[0])||0,T=parseFloat(x[1])||0;i?l!==br&&(o=_*v-m*g)&&(u=w*(-m/o)+T*(_/o)-(_*b-m*y)/o,w=w*(v/o)+T*(-g/o)+(g*b-v*y)/o,T=u):(w=(a=ur(t)).x+(~x[0].indexOf("%")?w/100*a.width:w),T=a.y+(~(x[1]||x[0]).indexOf("%")?T/100*a.height:T)),r||!1!==r&&h.smooth?(y=w-c,b=T-f,h.xOffset=p+(y*_+b*g)-y,h.yOffset=d+(y*m+b*v)-b):h.xOffset=h.yOffset=0,h.xOrigin=w,h.yOrigin=T,h.smooth=!!r,h.origin=e,h.originIsAbsolute=!!i,t.style[Zi]="0px 0px",s&&(cr(s,h,"xOrigin",c,w),cr(s,h,"yOrigin",f,T),cr(s,h,"xOffset",p,h.xOffset),cr(s,h,"yOffset",d,h.yOffset)),t.setAttribute("data-svg-origin",w+" "+T)},kr=function(t,e){var i=t._gsap||new ze(t);if("x"in i&&!e&&!i.uncache)return i;var r,n,s,a,o,u,h,l,c,f,p,d,_,m,v,y,b,x,w,T,M,S,k,O,A,C,E,D,P,L,R,z,F=t.style,B=i.scaleX<0,q="px",I="deg",X=getComputedStyle(t),Y=ir(t,Zi)||"0";return r=n=s=u=h=l=c=f=p=0,a=o=1,i.svg=!(!t.getCTM||!hr(t)),X.translate&&("none"===X.translate&&"none"===X.scale&&"none"===X.rotate||(F[Qi]=("none"!==X.translate?"translate3d("+(X.translate+" 0 0").split(" ").slice(0,3).join(", ")+") ":"")+("none"!==X.rotate?"rotate("+X.rotate+") ":"")+("none"!==X.scale?"scale("+X.scale.split(" ").join(",")+") ":"")+("none"!==X[Qi]?X[Qi]:"")),F.scale=F.rotate=F.translate="none"),m=Mr(t,i.svg),i.svg&&(i.uncache?(A=t.getBBox(),Y=i.xOrigin-A.x+"px "+(i.yOrigin-A.y)+"px",O=""):O=!e&&t.getAttribute("data-svg-origin"),Sr(t,O||Y,!!O||i.originIsAbsolute,!1!==i.smooth,m)),d=i.xOrigin||0,_=i.yOrigin||0,m!==br&&(x=m[0],w=m[1],T=m[2],M=m[3],r=S=m[4],n=k=m[5],6===m.length?(a=Math.sqrt(x*x+w*w),o=Math.sqrt(M*M+T*T),u=x||w?Pi(w,x)*Ei:0,(c=T||M?Pi(T,M)*Ei+u:0)&&(o*=Math.abs(Math.cos(c*Di))),i.svg&&(r-=d-(d*x+_*T),n-=_-(d*w+_*M))):(z=m[6],L=m[7],E=m[8],D=m[9],P=m[10],R=m[11],r=m[12],n=m[13],s=m[14],h=(v=Pi(z,P))*Ei,v&&(O=S*(y=Math.cos(-v))+E*(b=Math.sin(-v)),A=k*y+D*b,C=z*y+P*b,E=S*-b+E*y,D=k*-b+D*y,P=z*-b+P*y,R=L*-b+R*y,S=O,k=A,z=C),l=(v=Pi(-T,P))*Ei,v&&(y=Math.cos(-v),R=M*(b=Math.sin(-v))+R*y,x=O=x*y-E*b,w=A=w*y-D*b,T=C=T*y-P*b),u=(v=Pi(w,x))*Ei,v&&(O=x*(y=Math.cos(v))+w*(b=Math.sin(v)),A=S*y+k*b,w=w*y-x*b,k=k*y-S*b,x=O,S=A),h&&Math.abs(h)+Math.abs(u)>359.9&&(h=u=0,l=180-l),a=ft(Math.sqrt(x*x+w*w+T*T)),o=ft(Math.sqrt(k*k+z*z)),v=Pi(S,k),c=Math.abs(v)>2e-4?v*Ei:0,p=R?1/(R<0?-R:R):0),i.svg&&(O=t.getAttribute("transform"),i.forceCSS=t.setAttribute("transform","")||!wr(ir(t,Qi)),O&&t.setAttribute("transform",O))),Math.abs(c)>90&&Math.abs(c)<270&&(B?(a*=-1,c+=u<=0?180:-180,u+=u<=0?180:-180):(o*=-1,c+=c<=0?180:-180)),e=e||i.uncache,i.x=r-((i.xPercent=r&&(!e&&i.xPercent||(Math.round(t.offsetWidth/2)===Math.round(-r)?-50:0)))?t.offsetWidth*i.xPercent/100:0)+q,i.y=n-((i.yPercent=n&&(!e&&i.yPercent||(Math.round(t.offsetHeight/2)===Math.round(-n)?-50:0)))?t.offsetHeight*i.yPercent/100:0)+q,i.z=s+q,i.scaleX=ft(a),i.scaleY=ft(o),i.rotation=ft(u)+I,i.rotationX=ft(h)+I,i.rotationY=ft(l)+I,i.skewX=c+I,i.skewY=f+I,i.transformPerspective=p+q,(i.zOrigin=parseFloat(Y.split(" ")[2])||0)&&(F[Zi]=Or(Y)),i.xOffset=i.yOffset=0,i.force3D=g.force3D,i.renderTransform=i.svg?Rr:Ai?Lr:Cr,i.uncache=0,i},Or=function(t){return(t=t.split(" "))[0]+" "+t[1]},Ar=function(t,e,i){var r=Qt(e);return ft(parseFloat(e)+parseFloat(dr(t,"x",i+"px",r)))+r},Cr=function(t,e){e.z="0px",e.rotationY=e.rotationX="0deg",e.force3D=0,Lr(t,e)},Er="0deg",Dr="0px",Pr=") ",Lr=function(t,e){var i=e||this,r=i.xPercent,n=i.yPercent,s=i.x,a=i.y,o=i.z,u=i.rotation,h=i.rotationY,l=i.rotationX,c=i.skewX,f=i.skewY,p=i.scaleX,d=i.scaleY,_=i.transformPerspective,m=i.force3D,g=i.target,v=i.zOrigin,y="",b="auto"===m&&t&&1!==t||!0===m;if(v&&(l!==Er||h!==Er)){var x,w=parseFloat(h)*Di,T=Math.sin(w),M=Math.cos(w);w=parseFloat(l)*Di,x=Math.cos(w),s=Ar(g,s,T*x*-v),a=Ar(g,a,-Math.sin(w)*-v),o=Ar(g,o,M*x*-v+v)}_!==Dr&&(y+="perspective("+_+Pr),(r||n)&&(y+="translate("+r+"%, "+n+"%) "),(b||s!==Dr||a!==Dr||o!==Dr)&&(y+=o!==Dr||b?"translate3d("+s+", "+a+", "+o+") ":"translate("+s+", "+a+Pr),u!==Er&&(y+="rotate("+u+Pr),h!==Er&&(y+="rotateY("+h+Pr),l!==Er&&(y+="rotateX("+l+Pr),c===Er&&f===Er||(y+="skew("+c+", "+f+Pr),1===p&&1===d||(y+="scale("+p+", "+d+Pr),g.style[Qi]=y||"translate(0, 0)"},Rr=function(t,e){var i,r,n,s,a,o=e||this,u=o.xPercent,h=o.yPercent,l=o.x,c=o.y,f=o.rotation,p=o.skewX,d=o.skewY,_=o.scaleX,m=o.scaleY,g=o.target,v=o.xOrigin,y=o.yOrigin,b=o.xOffset,x=o.yOffset,w=o.forceCSS,T=parseFloat(l),M=parseFloat(c);f=parseFloat(f),p=parseFloat(p),(d=parseFloat(d))&&(p+=d=parseFloat(d),f+=d),f||p?(f*=Di,p*=Di,i=Math.cos(f)*_,r=Math.sin(f)*_,n=Math.sin(f-p)*-m,s=Math.cos(f-p)*m,p&&(d*=Di,a=Math.tan(p-d),n*=a=Math.sqrt(1+a*a),s*=a,d&&(a=Math.tan(d),i*=a=Math.sqrt(1+a*a),r*=a)),i=ft(i),r=ft(r),n=ft(n),s=ft(s)):(i=_,s=m,r=n=0),(T&&!~(l+"").indexOf("px")||M&&!~(c+"").indexOf("px"))&&(T=dr(g,"x",l,"px"),M=dr(g,"y",c,"px")),(v||y||b||x)&&(T=ft(T+v-(v*i+y*n)+b),M=ft(M+y-(v*r+y*s)+x)),(u||h)&&(a=g.getBBox(),T=ft(T+u/100*a.width),M=ft(M+h/100*a.height)),a="matrix("+i+","+r+","+n+","+s+","+T+","+M+")",g.setAttribute("transform",a),w&&(g.style[Qi]=a)},zr=function(t,e,i,r,n){var s,a,o=360,u=O(n),h=parseFloat(n)*(u&&~n.indexOf("rad")?Ei:1)-r,l=r+h+"deg";return u&&("short"===(s=n.split("_")[1])&&(h%=o)!=h%180&&(h+=h<0?o:-360),"cw"===s&&h<0?h=(h+36e9)%o-~~(h/o)*o:"ccw"===s&&h>0&&(h=(h-36e9)%o-~~(h/o)*o)),t._pt=a=new ui(t._pt,e,i,r,h,qi),a.e=l,a.u="deg",t._props.push(i),a},Fr=function(t,e){for(var i in e)t[i]=e[i];return t},Br=function(t,e,i){var r,n,s,a,o,u,h,l=Fr({},i._gsap),c=i.style;for(n in l.svg?(s=i.getAttribute("transform"),i.setAttribute("transform",""),c[Qi]=e,r=kr(i,1),lr(i,Qi),i.setAttribute("transform",s)):(s=getComputedStyle(i)[Qi],c[Qi]=e,r=kr(i,1),c[Qi]=s),Ci)(s=l[n])!==(a=r[n])&&"perspective,force3D,transformOrigin,svgOrigin".indexOf(n)<0&&(o=Qt(s)!==(h=Qt(a))?dr(i,n,s,h):parseFloat(s),u=parseFloat(a),t._pt=new ui(t._pt,r,n,o,u-o,Bi),t._pt.u=h||0,t._props.push(n));Fr(r,l)};ct("padding,margin,Width,Radius",(function(t,e){var i="Top",r="Right",n="Bottom",s="Left",a=(e<3?[i,r,n,s]:[i+s,i+r,n+r,n+s]).map((function(i){return e<2?t+i:"border"+i+t}));yr[e>1?"border"+t:t]=function(t,e,i,r,n){var s,o;if(arguments.length<4)return s=a.map((function(e){return _r(t,e,i)})),5===(o=s.join(" ")).split(s[0]).length?s[0]:o;s=(r+"").split(" "),o={},a.forEach((function(t,e){return o[t]=s[e]=s[e]||s[(e-1)/2|0]})),t.init(e,o,n)}}));var qr,Ir,Xr={name:"css",register:sr,targetTest:function(t){return t.style&&t.nodeType},init:function(t,e,i,r,n){var s,a,o,u,h,l,c,f,p,d,_,m,v,y,b,x,w,T,M,S,k=this._props,A=t.style,C=i.vars.startAt;for(c in Mi||sr(),this.styles=this.styles||tr(t),x=this.styles.props,this.tween=i,e)if("autoRound"!==c&&(a=e[c],!rt[c]||!Ne(c,e,i,r,t,n)))if(h=typeof a,l=yr[c],"function"===h&&(h=typeof(a=a.call(i,r,t,n))),"string"===h&&~a.indexOf("random(")&&(a=ae(a)),l)l(this,t,c,a,i)&&(b=1);else if("--"===c.substr(0,2))s=(getComputedStyle(t).getPropertyValue(c)+"").trim(),a+="",ye.lastIndex=0,ye.test(s)||(f=Qt(s),p=Qt(a)),p?f!==p&&(s=dr(t,c,s,p)+p):f&&(a+=f),this.add(A,"setProperty",s,a,r,n,0,0,c),k.push(c),x.push(c,0,A[c]);else if("undefined"!==h){if(C&&c in C?(s="function"==typeof C[c]?C[c].call(i,r,t,n):C[c],O(s)&&~s.indexOf("random(")&&(s=ae(s)),Qt(s+"")||(s+=g.units[c]||Qt(_r(t,c))||""),"="===(s+"").charAt(1)&&(s=_r(t,c))):s=_r(t,c),u=parseFloat(s),(d="string"===h&&"="===a.charAt(1)&&a.substr(0,2))&&(a=a.substr(2)),o=parseFloat(a),c in Fi&&("autoAlpha"===c&&(1===u&&"hidden"===_r(t,"visibility")&&o&&(u=0),x.push("visibility",0,A.visibility),cr(this,A,"visibility",u?"inherit":"hidden",o?"inherit":"hidden",!o)),"scale"!==c&&"transform"!==c&&~(c=Fi[c]).indexOf(",")&&(c=c.split(",")[0])),_=c in Ci)if(this.styles.save(c),m||((v=t._gsap).renderTransform&&!e.parseTransform||kr(t,e.parseTransform),y=!1!==e.smoothOrigin&&v.smooth,(m=this._pt=new ui(this._pt,A,Qi,0,1,v.renderTransform,v,0,-1)).dep=1),"scale"===c)this._pt=new ui(this._pt,v,"scaleY",v.scaleY,(d?dt(v.scaleY,d+o):o)-v.scaleY||0,Bi),this._pt.u=0,k.push("scaleY",c),c+="X";else{if("transformOrigin"===c){x.push(Zi,0,A[Zi]),T=void 0,M=void 0,S=void 0,M=(T=(w=a).split(" "))[0],S=T[1]||"50%","top"!==M&&"bottom"!==M&&"left"!==S&&"right"!==S||(w=M,M=S,S=w),T[0]=gr[M]||M,T[1]=gr[S]||S,a=T.join(" "),v.svg?Sr(t,a,0,y,0,this):((p=parseFloat(a.split(" ")[2])||0)!==v.zOrigin&&cr(this,v,"zOrigin",v.zOrigin,p),cr(this,A,c,Or(s),Or(a)));continue}if("svgOrigin"===c){Sr(t,a,1,y,0,this);continue}if(c in xr){zr(this,v,c,u,d?dt(u,d+a):a);continue}if("smoothOrigin"===c){cr(this,v,"smooth",v.smooth,a);continue}if("force3D"===c){v[c]=a;continue}if("transform"===c){Br(this,a,t);continue}}else c in A||(c=nr(c)||c);if(_||(o||0===o)&&(u||0===u)&&!zi.test(a)&&c in A)o||(o=0),(f=(s+"").substr((u+"").length))!==(p=Qt(a)||(c in g.units?g.units[c]:f))&&(u=dr(t,c,s,p)),this._pt=new ui(this._pt,_?v:A,c,u,(d?dt(u,d+o):o)-u,_||"px"!==p&&"zIndex"!==c||!1===e.autoRound?Bi:Xi),this._pt.u=p||0,f!==p&&"%"!==p&&(this._pt.b=s,this._pt.r=Ii);else if(c in A)mr.call(this,t,c,s,d?d+a:a);else if(c in t)this.add(t,c,s||t[c],d?d+a:a,r,n);else if("parseTransform"!==c){G(c,a);continue}_||(c in A?x.push(c,0,A[c]):x.push(c,1,s||t[c])),k.push(c)}b&&oi(this)},render:function(t,e){if(e.tween._time||!Oi())for(var i=e._pt;i;)i.r(t,i.d),i=i._next;else e.styles.revert()},get:_r,aliases:Fi,getSetter:function(t,e,i){var r=Fi[e];return r&&r.indexOf(",")<0&&(e=r),e in Ci&&e!==Zi&&(t._gsap.x||_r(t,"x"))?i&&ki===i?"scale"===e?ji:Hi:(ki=i||{})&&("scale"===e?Gi:Wi):t.style&&!E(t.style[e])?Ui:~e.indexOf("-")?Vi:Ke(t,e)},core:{_removeProperty:lr,_getMatrix:Mr}};bi.utils.checkPrefix=nr,bi.core.getStyleSaver=tr,Ir=ct("x,y,z,scale,scaleX,scaleY,xPercent,yPercent"+","+(qr="rotation,rotationX,rotationY,skewX,skewY")+",transform,transformOrigin,svgOrigin,force3D,smoothOrigin,transformPerspective",(function(t){Ci[t]=1})),ct(qr,(function(t){g.units[t]="deg",xr[t]=1})),Fi[Ir[13]]="x,y,z,scale,scaleX,scaleY,xPercent,yPercent,"+qr,ct("0:translateX,1:translateY,2:translateZ,8:rotate,8:rotationZ,8:rotateZ,9:rotateX,10:rotateY",(function(t){var e=t.split(":");Fi[e[1]]=Ir[e[0]]})),ct("x,y,z,top,right,bottom,left,width,height,fontSize,padding,margin,perspective",(function(t){g.units[t]="px"})),bi.registerPlugin(Xr);var Yr=bi.registerPlugin(Xr)||bi;Yr.core.Tween;var Nr=class{constructor(){this.menu=document.querySelector("#main-nav"),this.subMenuLinks=this.menu.querySelectorAll(".has-children"),this.subMenu=this.menu.querySelector("#main-nav .subnav"),this.subMenuIndicators=this.menu.querySelector(".indicators"),this.subMenuLine=this.subMenuIndicators.querySelector(".line"),this.subMenuArrow=this.subMenuIndicators.querySelector(".arrow"),this.mobileMenu=document.querySelector("#mobile-nav"),this.mobileMenuToggler=document.querySelector(".menu-toggle"),this.isMobile=navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i),this.delay=.2,this.duration=.4,this.animated=!1,this.menu.classList.contains("initialized")||(this.initMobile(),this.initDesktop(),this.menu.classList.add("initialized"))}initDesktop(){this.subMenuLinks.forEach((t=>{t.addEventListener("mousedown",this.openSubMenuLink.bind(this),!0),t.addEventListener("click",(t=>{t.preventDefault()}))})),this.menu.querySelector(".close").addEventListener("click",(t=>{this.closeSubMenu()})),window.addEventListener("resize",this.debounce((t=>{this.resizeHandle()}),100)),document.addEventListener("mousedown",(t=>{const e=document.getElementById("main-nav");let i=t.target;do{if(i==e)return;i=i.parentNode}while(i);event.target.closest(".has-children"),this.menu.querySelector(".has-children.active")&&this.closeSubMenu()}))}initMobile(){const t=document.getElementsByClassName("collapsible");for(let e=0;e<t.length;e++)t[e].addEventListener("mousedown",(t=>this.handleMobileClick(t.target)));this.mobileMenuToggler.addEventListener("mousedown",(()=>{document.body.classList.contains("mobile-menu-opened")?(this.closeMobileMenu(),this.mobileMenuToggler.classList.remove("active")):(this.openMobileMenu(),this.mobileMenuToggler.classList.add("active"))}))}handleMobileClick(t,e=!0){t.classList.toggle("active");const i=t.nextElementSibling;i.classList.contains("active")?this.uncollapseMobile(i,e):this.collapseMobile(i,e)}collapseMobile(t){t.classList.add("active"),t.style.maxHeight=0,Yr.killTweensOf(t),Yr.killTweensOf(t.querySelectorAll(":scope > .collapsible, :scope > a")),Yr.to(t,{maxHeight:48*t.querySelectorAll(".collapsible, a").length+"px",ease:"expo.out",duration:2*this.duration}),Yr.fromTo(t.querySelectorAll(":scope > .collapsible, :scope > a"),{opacity:0,y:40},{opacity:1,y:0,ease:"expo.out",stagger:.1,delay:this.duration/2,duration:2*this.duration})}uncollapseMobile(t,e=!0){t.classList.remove("active"),Yr.killTweensOf(t),Yr.killTweensOf(t.querySelectorAll(":scope > .collapsible, :scope > a")),Yr.to(t,{maxHeight:0,ease:"expo.out",duration:this.duration,delay:this.duration}),Yr.to(t.querySelectorAll(":scope > .collapsible, :scope > a"),{opacity:0,y:0,ease:"expo.out",duration:this.duration}),e&&t.querySelectorAll(".collapsible.active").forEach((t=>{this.handleMobileClick(t)}))}resizeHandle(){this.isSubMenuOpened()&&Yr.to(this.subMenuIndicators,{x:this.getCenterX(this.menu.querySelector("[data-child='"+this.getCurrentSubMenu().dataset.name+"']")),duration:this.duration,ease:"expo.out"})}openMobileMenu(){document.body.classList.add("mobile-menu-opened"),Yr.to(this.mobileMenu,{y:0,opacity:1,ease:"expo.out",duration:this.duration}),Yr.fromTo(this.mobileMenu.querySelectorAll(":scope > .collapsible, :scope > a"),{opacity:0,y:40},{opacity:1,y:0,ease:"expo.out",stagger:.1,delay:this.duration,duration:2*this.duration})}closeMobileMenu(){document.body.classList.remove("mobile-menu-opened"),Yr.to(this.mobileMenu,{y:-10,opacity:0,ease:"expo.out",duration:this.duration}),this.mobileMenu.querySelectorAll(".collapsible.active").forEach((t=>{this.handleMobileClick(t,!1)}))}openSubMenuLink(t){if(t.preventDefault(),t.stopPropagation(),this.animated)return;this.animated=!0;let e=t.target.closest(".has-children");e.classList.contains("active")?this.closeSubMenu():(this.isSubMenuOpened()?this.switchSubMenu(e):this.openSubMenu(e),this.subMenuLinks.forEach((t=>{t.classList.remove("active")})),e.classList.add("active"),this.subMenu.querySelectorAll(":scope > div").forEach((t=>{t.classList.remove("active")})),this.getSubMenu(e).classList.add("active"),this.subMenu.classList.add("opened"))}isSubMenuOpened(){return this.subMenu.classList.contains("opened")}openSubMenu(t){Yr.set(this.subMenuIndicators,{x:this.getCenterX(t)}),Yr.set(this.subMenuLine,{scaleX:0}),Yr.set(this.subMenuArrow,{rotation:180}),Yr.set(this.subMenu,{y:-20,opacity:0}),Yr.to(this.subMenuLine,{scaleX:1,opacity:1,ease:"expo.out",duration:8*this.duration}),Yr.to(this.subMenuArrow,{scale:2,ease:"expo.out",duration:this.duration}),Yr.to(this.subMenu,{y:0,opacity:1,height:this.getSubMenuHeight(t),ease:"expo.out",delay:this.delay,duration:this.duration,onComplete:()=>{this.animated=!1}}),Yr.to(this.getSubMenu(t),{opacity:1,y:0,x:0,skewX:0,ease:"expo.out",duration:this.duration}),this.getSubMenu(t).querySelectorAll(".col").forEach((t=>{Yr.fromTo(t.querySelectorAll("a"),{opacity:0,y:20,skewX:0},{opacity:1,y:0,skewX:0,ease:"expo.out",stagger:.1,delay:2*this.delay,duration:this.duration})}))}switchSubMenu(t){Yr.to(this.subMenuIndicators,{x:this.getCenterX(t),duration:this.duration,ease:"expo.out"}),Yr.to(this.subMenu,{height:this.getSubMenuHeight(t),ease:"expo.out",duration:2*this.duration}),Yr.fromTo(this.getSubMenu(t),{opacity:0,x:this.getSide(t)?200:-200,skewX:this.getSide(t)?10:-10},{opacity:1,x:(this.getSide(t),0),skewX:(this.getSide(t),0),ease:"expo.out",delay:this.delay/2,duration:2*this.duration}),Yr.fromTo(this.getCurrentSubMenu(),{opacity:1,x:(this.getSide(t),0),skewX:this.getSide(t)?10:-10},{opacity:0,x:this.getSide(t)?-200:200,skewX:this.getSide(t)?5:-5,ease:"expo.out",duration:2*this.duration}),this.animated=!1}closeSubMenu(){Yr.killTweensOf(this.subMenuLine),Yr.killTweensOf(this.subMenuArrow),Yr.killTweensOf(this.subMenu.querySelectorAll(":scope > div")),Yr.to(this.subMenuLine,{opacity:0,scaleX:0,duration:2*this.duration,ease:"expo.out"}),Yr.to(this.subMenuArrow,{scale:0,rotation:180,duration:this.duration,ease:"expo.out"}),Yr.to(this.subMenu,{y:-20,opacity:0,skewX:0,duration:this.duration,ease:"expo.out"}),this.subMenu.classList.remove("opened"),this.subMenuLinks.forEach((t=>{t.classList.remove("active")})),this.subMenu.querySelectorAll(":scope > div").forEach((t=>{t.classList.remove("active")})),Yr.to(this.subMenu.querySelectorAll(":scope > div"),{opacity:0,ease:"expo.out",delay:this.delay,duration:this.duration}),this.animated=!1}getSubMenu(t){return this.subMenu.querySelector("[data-name='"+t.dataset.child+"']")}getCurrentSubMenu(){return this.getSubMenu(this.menu.querySelector(".has-children.active"))}getSubMenuHeight(t){return this.getSubMenu(t).getBoundingClientRect().height}getSide(t){return Array.prototype.indexOf.call(this.getCurrentSubMenu().parentNode.children,this.getCurrentSubMenu())<Array.prototype.indexOf.call(this.getSubMenu(t).parentNode.children,this.getSubMenu(t))}getCenterX(t){const e=t.getBoundingClientRect();return console.log(t),parseFloat(e.left+e.width/2+document.body.getBoundingClientRect().left).toFixed(2)}debounce(t,e){let i=null;return(...r)=>{window.clearTimeout(i),i=window.setTimeout((()=>{t.apply(null,r)}),e)}}};window.addEventListener("DOMContentLoaded",(t=>{new Nr}))}();

</script>