<style>
/* .container-footer {
    background: linear-gradient(to right, #a9045d, #a9045d);
    background-color: transparent;
    font-size: 20px;
    left: 0; 
    bottom: 0; 
    width: 100%;
    height: 25%; 
    margin-bottom: -10%;
} */
    /* hr {
    color: black;
    border: none;
    height: 2px;
    background-color: black;
    width: 80%;
    margin-left: auto; 
    margin-right: auto;
} */
/* img{
    display: block;
    margin-left: auto;
    margin-right: auto;
} */





/* 
.contact:hover .contact-details {
    display: flex;
    flex-direction: column;
}

.contact:hover .contact-details div {
    margin-top: 10px;
}


.contact-details
{
display: none;
} */





@media (max-width: 767px) {
	 .not-mobile {
		 display: none !important;
	}
	 .tablet-only {
		 display: none !important;
	}
	 .desktop-only {
		 display: none !important;
	}
}
 @media (min-width: 768px) and (max-width: 1365px) {
	 .mobile-only {
		 display: none !important;
	}
	 .not-tablet {
		 display: none !important;
	}
	 .desktop-only {
		 display: none !important;
	}
}
 @media (min-width: 1366px) {
	 .mobile-only {
		 display: none !important;
	}
	 .tablet-only {
		 display: none !important;
	}
	 .not-desktop {
		 display: none !important;
	}
}
 @media (min-width: 1600px) {
	 .mobile-only {
		 display: none !important;
	}
	 .tablet-only {
		 display: none !important;
	}
	 .desktop-only {
		 display: none !important;
	}
	 .not-large {
		 display: none !important;
	}
}
 footer {
	 padding: 64px 0 32px 0;
	 box-shadow: 0 5px 0 #4f1c38;
	 margin-bottom: 5px;
	 position: relative;
	 overflow: hidden;
	 background: #a9045d linear-gradient(256deg, #c1086b 0%, #a9045d 100%) 0% 0% no-repeat padding-box;
	 position: relative;
}
 @media (max-width: 767px) {
	 footer {
		 padding: 40px 0 32px 0;
	}
}
 footer:after {
	 content: "";
	 background: url(image/man_bg.svg);
	 width: 350px;
	 height: 350px;
	 position: absolute;
	 top: calc(100% - 250px);
	 right: 50px;
	 pointer-events: none;
}
 @media (max-width: 767px) {
	 footer:after {
		 right: calc(50% - 175px);
	}
}
 footer .grid {
	 display: grid;
	 grid-template-columns: 1fr 1fr 1fr 1fr;
	 grid-auto-rows: min-content;
	 gap: 64px 24px;
	 grid-template-areas: "col-logo col-logo col-socials col-socials" "col-navigation col-lastposts col-lastposts col-infos";
	 margin-bottom: 64px;
}
 @media (min-width: 768px) and (max-width: 1365px) {
	 footer .grid {
		 grid-template-columns: 1fr 1fr;
		 grid-template-areas: "col-logo col-socials" "col-navigation col-informations col-infos" "col-lastposts col-lastposts";
		 gap: 48px 12px;
	}
}
 @media (max-width: 767px) {
	 footer .grid {
		 grid-template-columns: 1fr 1fr;
		 grid-template-areas: "col-logo col-logo" "col-navigation col-informations col-infos" "col-lastposts col-lastposts" "col-socials col-socials";
		 gap: 48px 12px;
	}
}
 footer .grid .col.col-logo {
	 grid-area: col-logo;
}
 footer .grid .col.col-socials {
	 grid-area: col-socials;
}
 footer .grid .col.col-navigation {
	 grid-area: col-navigation;
}
 footer .grid .col.col-lastposts {
	 grid-area: col-lastposts;
}
 footer .grid .col.col-infos {
	 grid-area: col-infos;
}
 footer .grid .col.col-logo {
	 display: flex;
	 justify-content: start;
	 align-items: end;
}
 @media (max-width: 767px) {
	 footer .grid .col.col-logo {
		 justify-content: center;
		 align-items: center;
	}
}
 footer .grid .col.col-socials {
	 display: flex;
	 justify-content: end;
	 align-items: end;
	 gap: 24px;
}
 @media (max-width: 767px) {
	 footer .grid .col.col-socials {
		 justify-content: center;
		 align-items: center;
	}
}
 footer .grid .col.col-socials .icons {
	 display: inline-flex;
	 justify-content: end;
	 align-items: end;
	 gap: 8px;
}
 footer .grid .col.col-infos {
	 text-align: right;
}
 footer .grid .col.col-infos p {
	 font-size: 14px;
	 color: #fff;
     margin-bottom: 0;
}
 footer .grid .col.col-infos p:first-of-type {
	 font-size: 12px;
	 padding-top: 4px;
}
 @media (max-width: 767px) {
	 footer .grid .col.col-infos p {
		 padding-bottom: 4px;
	}
}
 footer .grid .col.col-infos p a {
	 color: #fff;
	 padding-bottom: 6px;
	 padding-top: 6px;
}
 footer .grid .col.col-infos p span {
	 font-size: 11px;
	 color: #e0c3d3;
}
 footer .grid .col.col-lastposts .article-grid {
	 display: grid;
	 grid-template-columns: 300px 300px;
	 grid-template-rows: 1fr 1fr;
	 gap: 12px;
}
 @media (max-width: 767px) {
	 footer .grid .col.col-lastposts .article-grid {
		 grid-template-columns: 1fr;
		 grid-template-rows: 1fr 1fr;
	}
}
 @media (min-width: 768px) and (max-width: 1365px) {
	 footer .grid .col.col-lastposts .article-grid {
		 grid-template-columns: 1fr 1fr;
	}
}
 footer .grid .col.col-lastposts .article-grid a {
	 display: block;
	 background: rgba(255, 255, 255, 0.12);
	 border-radius: 4px;
	 transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
	 cursor: pointer;
}
 footer .grid .col.col-lastposts .article-grid a:hover {
	 text-decoration: none;
	 background: rgba(255, 255, 255, 0.24);
	 transition: all 0s cubic-bezier(0.34, 1.56, 0.64, 1);
}
 footer .grid .col.col-lastposts .article-grid a:active {
	 transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
	 transform: scale(0.975);
}
 footer .grid .col.col-lastposts .article-grid a article {
	 padding: 6px 8px;
	 display: inline-flex;
	 flex-direction: column;
}
 footer .grid .col.col-lastposts .article-grid a article .infos {
	 display: inline-flex;
	 justify-content: space-between;
	 margin-bottom: 4px;
}
 footer .grid .col.col-lastposts .article-grid a article .infos span {
	 font-weight: bold;
	 font-size: 11px;
	 line-height: 20px;
	 text-transform: uppercase;
	 color: rgba(255, 255, 255, 0.6);
	 letter-spacing: 0.8px;
}
 footer .grid .col.col-lastposts .article-grid a article .infos span:first-child {
	 color: rgba(255, 255, 255, 0.8);
}
 footer .grid .col.col-lastposts .article-grid a article h3 {
	 font-size: 13px;
	 color: rgba(255, 255, 255, 0.9);
	 line-height: 20px;
	 height: 40px;
	 overflow: hidden;
	 text-overflow: ellipsis;
}
 @media (max-width: 767px) {
	 footer .grid .col.col-lastposts .article-grid a:nth-child(3), footer .grid .col.col-lastposts .article-grid a:nth-child(4) {
		 display: none;
	}
}
 footer .grid .col.col-navigation a, footer .grid .col.col-infos a, footer .grid .col.col-informations a  {
	 display: inline-block;
	 position: relative;
     text-decoration : none;
	 z-index: 1;
}
 footer .grid .col.col-navigation a:hover, footer .grid .col.col-infos a:hover, footer .grid .col.col-informations a:hover {
	 text-decoration: none;
}
 footer .grid .col.col-navigation a:hover:after, footer .grid .col.col-infos a:hover:after, footer .grid .col.col-informations a:hover:after {
	 transform: scaleX(1);
	 transform-origin: left;
	 transition: transform 0.4s ease-in-out;
}
 footer .grid .col.col-navigation a:after, footer .grid .col.col-infos a:after, footer .grid .col.col-informations a:after {
	 content: "";
	 position: absolute;
	 bottom: calc(50% - 12px);
	 left: 0;
	 height: 1px;
	 width: 100%;
	 background: #fff;
	 border-radius: 4px;
	 z-index: -1;
	 transform: scaleX(0);
	 transform-origin: right;
	 transition: transform 0.4s ease-in-out;
}
 footer .grid .col h2 {
	 letter-spacing: 0.7px;
	 color: rgba(224, 195, 211, 0.7);
	 text-transform: uppercase;
	 font-weight: bold;
	 font-size: 14px;
	 line-height: 18px;
	 margin-top: 0;
	 margin-bottom: 12px;
}
 footer .grid .col nav ul {
	 padding-left: 0;
	 list-style: none;
}
 footer .grid .col nav ul li a {
	 color: #fff;
	 font-size: 14px;
	 padding-top: 6px;
	 padding-bottom: 6px;
}
 @media (max-width: 767px) {
	 footer .grid .col nav ul li a {
		 padding-top: 3px;
		 padding-bottom: 3px;
	}
}
 footer .flex {
	 display: flex;
	 justify-content: space-between;
	 font-size: 12px;
	 color: #e0c3d3;
}
 @media (max-width: 767px) {
	 footer .flex {
		 flex-direction: column;
		 gap: 32px;
		 text-align: center;
		 font-size: 10px;
	}
}
 footer .flex div:first-child ul {
	 display: flex;
	 margin-left: 0;
     padding-left: 0;
}
 @media (max-width: 767px) {
	 footer .flex div:first-child ul {
		 gap: 8px;
		 text-align: center;
		 justify-content: space-between;
	}
}
 footer .flex div:first-child ul li {
	 margin-right: 24px;
    list-style: none;
}
 @media (max-width: 767px) {
	 footer .flex div:first-child ul li {
		 margin-right: 0px;
	}
}
 footer .flex div:first-child ul li a {
	 color: rgba(224, 195, 211, 0.75);
	 transition: color 0.2s;
     text-decoration: none;
}
 footer .flex div:first-child ul li a:hover {
	 color: #faf7f9;
	 text-decoration: none;
}
 

.btn-mainwebsite {
     height: var(--size);
     line-height: var(--size);
     padding-left: calc(var(--size) / 3);
     padding-right: calc(var(--size) / 3);
     border-radius: calc(var(--size) / 2);
     display: inline-flex;
     align-items: center;
     justify-content: space-between;
     font-family: 'Carnas', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', 'Monaco', monospace;
     font-weight: bold;
     font-size: calc(var(--size) * 0.32);
     gap: calc(var(--size) / 3);
     transition: all 0.2s ease;
     text-transform: uppercase;
     border: none;
     cursor: pointer;
     filter: blur(0);
     --size: 48px;
}
.btn-mainwebsite.is-xxs {
     --size: 26px;
}
.btn-mainwebsite.is-xs {
     --size: 32px;
}
.btn-mainwebsite.is-s {
     --size: 40px;
}
.btn-mainwebsite.is-xl {
     --size: 60px;
}
@media (max-width: 1365px) {
     .btn-mainwebsite {
         --size: 40px;
    }
}
.btn-mainwebsite.is-large-gap {
     gap: var(--size);
}
.btn-mainwebsite.is-icon {
     width: var(--size);
     padding-left: 0;
     padding-right: 0;
     justify-content: center;
     user-select: none;
}
.btn-mainwebsite.is-icon svg {
     transition: all 0.2s ease;
}
.btn-mainwebsite.is-primary {
     background: #a9045d;
     color: #fff;
}
.btn-mainwebsite.is-primary.is-alt {
     background: rgba(169, 4, 93, 0.06);
     color: #a9045d;
}
.btn-mainwebsite.is-secondary {
     background: #48bdcb;
     color: #fff;
}
.btn-mainwebsite.is-secondary.is-alt {
     background: rgba(72, 189, 203, 0.06);
     color: #48bdcb;
}
.btn-mainwebsite.is-white {
     background: #faf7f9;
     color: #a9045d;
}
.btn-mainwebsite.is-white.is-alt {
     background: rgba(250, 247, 249, 0.2);
     color: #faf7f9;
}
.btn-mainwebsite.is-white.is-alt:hover {
     background: rgba(250, 247, 249, 0.3);
}
.btn-mainwebsite.is-white.is-alt:active {
     transform: scale(0.9);
}
.btn-mainwebsite.is-anim-y:hover {
     transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
     transform: translateY(-4px);
     text-decoration: none;
}
.btn-mainwebsite.is-anim-y:active {
     transition: all 0.2s linear;
     transform: translateY(-2px);
}
.btn-mainwebsite.is-anim-s:hover {
     transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
     transform: scale(1.05);
     text-decoration: none;
}
.btn-mainwebsite.is-anim-s:active {
     transition: all 0.2s linear;
     transform: scale(0.95);
}
.btn-mainwebsite:hover, .btn-mainwebsite:active, .btn-mainwebsite:focus, .btn-mainwebsite:focus-within {
     text-decoration: inherit;
}
.btn-group {
     display: inline-flex;
     gap: 2px;
}
.btn-group .btn {
     border-radius: 0;
}
.btn-group .btn:first-child {
     border-radius: calc(var(--size) / 2) 0 0 calc(var(--size) / 2);
}
.btn-group .btn:last-child {
     border-radius: 0 calc(var(--size) / 2) calc(var(--size) / 2) 0;
}


.btn-mainwebsite {
     height: var(--size);
     line-height: var(--size);
     padding-left: calc(var(--size) / 3);
     padding-right: calc(var(--size) / 3);
     border-radius: calc(var(--size) / 2);
     display: inline-flex;
     align-items: center;
     justify-content: space-between;
     font-family: 'Carnas', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', 'Monaco', monospace;
     font-weight: bold;
     font-size: calc(var(--size) * 0.32);
     gap: calc(var(--size) / 3);
     transition: all 0.2s ease;
     text-transform: uppercase;
     border: none;
     cursor: pointer;
     filter: blur(0);
     --size: 48px;
}
.btn-mainwebsite.is-xxs {
     --size: 26px;
}
.btn-mainwebsite.is-xs {
     --size: 32px;
}
.btn-mainwebsite.is-s {
     --size: 40px;
}
.btn-mainwebsite.is-xl {
     --size: 60px;
}
@media (max-width: 1365px) {
     .btn-mainwebsite {
         --size: 40px;
    }
}
.btn-mainwebsite.is-large-gap {
     gap: var(--size);
}
.btn-mainwebsite.is-icon {
     width: var(--size);
     padding-left: 0;
     padding-right: 0;
     justify-content: center;
     user-select: none;
}
.btn-mainwebsite.is-icon svg {
     transition: all 0.2s ease;
}
.btn-mainwebsite.is-primary {
     background: #a9045d;
     color: #fff;
}
.btn-mainwebsite.is-primary.is-alt {
     background: rgba(169, 4, 93, 0.06);
     color: #a9045d;
}
.btn-mainwebsite.is-secondary {
     background: #48bdcb;
     color: #fff;
}
.btn-mainwebsite.is-secondary.is-alt {
     background: rgba(72, 189, 203, 0.06);
     color: #48bdcb;
}
.btn-mainwebsite.is-white {
     background: #faf7f9;
     color: #a9045d;
}
.btn-mainwebsite.is-white.is-alt {
     background: rgba(250, 247, 249, 0.2);
     color: #faf7f9;
}
.btn-mainwebsite.is-white.is-alt:hover {
     background: rgba(250, 247, 249, 0.3);
}
.btn-mainwebsite.is-white.is-alt:active {
     transform: scale(0.9);
}
.btn-mainwebsite.is-anim-y:hover {
     transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
     transform: translateY(-4px);
     text-decoration: none;
}
.btn-mainwebsite.is-anim-y:active {
     transition: all 0.2s linear;
     transform: translateY(-2px);
}
.btn-mainwebsite.is-anim-s:hover {
     transition: all 0.2s cubic-bezier(0.34, 1.56, 0.64, 1);
     transform: scale(1.05);
     text-decoration: none;
}
.btn-mainwebsite.is-anim-s:active {
     transition: all 0.2s linear;
     transform: scale(0.95);
}
.btn-mainwebsite:hover, .btn-mainwebsite:active, .btn-mainwebsite:focus, .btn-mainwebsite:focus-within {
     text-decoration: inherit;
}
.btn-group {
     display: inline-flex;
     gap: 2px;
}
.btn-group .btn {
     border-radius: 0;
}
.btn-group .btn:first-child {
     border-radius: calc(var(--size) / 2) 0 0 calc(var(--size) / 2);
}
.btn-group .btn:last-child {
     border-radius: 0 calc(var(--size) / 2) calc(var(--size) / 2) 0;
}

.container-mainwebsite {
     max-width: calc(1366px + 32px);
     margin-left: auto;
    /* 2 */
     margin-right: auto;
    /* 2 */
     width: 100%;
    /* 1 */
     padding-left: 16px;
     padding-right: 16px;
}
.flex {
     display: flex;
}
.flex.centered {
     justify-content: center;
}
.flex.right {
     justify-content: flex-end;
}
.flex.spaced {
     justify-content: space-between;
}
.flex.vertical {
     flex-direction: column;
}
.flex.vertical.reverse {
     flex-direction: column-reverse;
}
.flex.reverse {
     flex-direction: row-reverse;
}



@font-face {

font-family: "Open Sans";

src: url("fonts/OpenSans-Regular.ttf");

}

@font-face {

font-family: "Open Sans";

src: url("fonts/OpenSans-SemiBold.ttf");

font-weight: 500;

}

@font-face {

font-family: "Open Sans";

src: url("fonts/OpenSans-Bold.ttf");

font-weight: bold;

}

@font-face {

font-family: "Carnas";

src: url('fonts/carnas-bold-webfont.woff2') format('woff2'),

     url('fonts/carnas-bold-webfont.woff') format('woff');

font-weight: bold;

}

/* Masquez le sous-menu par défaut */
/* .sous-menus-ressources {
  display: none;
} */

/* Affichez le sous-menu lorsque survolé */
/* .sous-ressources:hover ~ .sous-menus-ressources {
  display: block;
  margin-left: 45%;
  text-align:left;
  color: #48bdcb;
} */

/* .display-block {
  display: block;
  margin-left: 45%;
  text-align: left;
  color: #48bdcb;
} */
 </style> 


<footer>
    <div class="container-mainwebsite grid">
        <div class="col col-logo">
            <a href="https://www.delta7.org/fr" target="_blank">
                <img src="image/logo_delta7_white.png" srcset="image/logo_delta7_white@2x.png 1200w" width="170" height="auto" alt="Revenir à l'accueil">
            </a>
        </div>
        <div class="col col-socials">
            <div class="icons">
                <a href="https://www.youtube.com/@associationdelta7923" target="_blank" class="btn-mainwebsite is-white is-s is-alt is-icon" >
                <svg xmlns="http://www.w3.org/2000/svg" width="19.972" height="14.043" viewBox="0 0 19.972 14.043"><path d="M20.6,6.7A2.51,2.51,0,0,0,18.839,4.92c-1.558-.42-7.8-.42-7.8-.42s-6.245,0-7.8.42A2.51,2.51,0,0,0,1.467,6.7a26.326,26.326,0,0,0-.417,4.838,26.326,26.326,0,0,0,.417,4.838,2.472,2.472,0,0,0,1.766,1.749c1.558.42,7.8.42,7.8.42s6.245,0,7.8-.42A2.472,2.472,0,0,0,20.6,16.374a26.326,26.326,0,0,0,.417-4.838A26.326,26.326,0,0,0,20.6,6.7ZM8.993,14.505V8.566l5.22,2.97-5.22,2.97Z" transform="translate(-1.05 -4.5)" fill="#fff"/></svg>
                </a>
                <a href="https://www.linkedin.com/company/delta7/" target="_blank" class="btn-mainwebsite is-white is-s is-alt is-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.849" height="16.849" viewBox="0 0 16.849 16.849"><path d="M3.772,16.85H.278V5.6H3.772ZM2.023,4.066A2.033,2.033,0,1,1,4.046,2.024,2.04,2.04,0,0,1,2.023,4.066ZM16.846,16.85H13.36V11.374c0-1.305-.026-2.979-1.816-2.979-1.816,0-2.095,1.418-2.095,2.885v5.57H5.96V5.6H9.31V7.135h.049a3.671,3.671,0,0,1,3.305-1.817c3.535,0,4.185,2.328,4.185,5.352V16.85Z" transform="translate(0 -0.001)" fill="#fff"/></svg>
                </a>
                <a href="https://www.facebook.com/associationdelta7/?locale=fr_FR" target="_blank" class="btn-mainwebsite is-white is-s is-alt is-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="21.831" height="21.699" viewBox="0 0 21.831 21.699"><path d="M22.394,11.478A10.916,10.916,0,1,0,9.773,22.262V14.634H7V11.478H9.773v-2.4c0-2.736,1.629-4.247,4.123-4.247a16.8,16.8,0,0,1,2.444.213V7.725H14.962a1.578,1.578,0,0,0-1.779,1.7v2.049h3.027l-.484,3.155H13.184v7.628A10.92,10.92,0,0,0,22.394,11.478Z" transform="translate(-0.563 -0.563)" fill="#fff"/></svg>
                </a>
            </div>
            <a href="#todo" class="btn-mainwebsite is-white is-large-gap is-anim-s is-s" style="color: #a9045d; text-decoration:none; background: #faf7f9;">
                <span style="color: #a9045d; padding: 0;" >Contact</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18.62" height="14.725" viewBox="0 0 18.62 14.725"><g transform="translate(1.045 0.75)"><path d="M4.653,6H17.878a1.658,1.658,0,0,1,1.653,1.653v9.919a1.658,1.658,0,0,1-1.653,1.653H4.653A1.658,1.658,0,0,1,3,17.572V7.653A1.658,1.658,0,0,1,4.653,6Z" transform="translate(-3 -6)" fill="none" stroke="#a9045d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><path d="M19.531,9l-8.266,5.786L3,9" transform="translate(-3 -7.347)" fill="none" stroke="#a9045d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/></g></svg>
            </a>
        </div>
        <div class="col col-navigation">
            <h2>Navigation</h2>
            <!-- <nav>
                <ul>
                    <li class="sous-ressources"><a href="#">Nos ressources</a></li>
                    <li class="sous-menus-ressources"> <a href="index.php?action=videotheque">Nos vidéos</a></li>
                    <li class="sous-menus-ressources">   <a href="index.php?action=documentheque">Nos documents</a></li>
                    <li class="sous-menus-ressources">    <a href="index.php?action=themeRechercher">Recherche par thème</a></li>
                    <li class="sous-menus-ressources">   <a href="index.php?action=rechercherAccueil">Rechercher</a></li>
                    <li><a href="index.php?action=presDeChezVous" target="_blank">Près de chez vous</a></li>
                    <li><a href="#">Pour allez plus loin</a></li>
                    <li><a href="index.php?action=BenevoleMssion" target="_blank">Découvrir nos missions de bénévolat</a></li>
                    <li><a id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a></li>
                </ul>
            </nav> -->

            <!-- <nav>
    <ul>
        <li class="sous-ressources">
            <a href="#">Nos ressources</a>
            <ul class="sous-menus-ressources">
                <li><a href="index.php?action=videotheque">Nos vidéos</a></li>
                <li><a href="index.php?action=documentheque">Nos documents</a></li>
                <li><a href="index.php?action=themeRechercher">Recherche par thème</a></li>
                <li><a href="index.php?action=rechercherAccueil">Rechercher</a></li>
            </ul>
        </li>
        <li><a href="index.php?action=presDeChezVous" target="_blank">Près de chez vous</a></li>
        <li><a href="#">Pour aller plus loin</a></li>
        <li><a href="index.php?action=BenevoleMssion" target="_blank">Découvrir nos missions de bénévolat</a></li>
        <li><a id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a></li>
    </ul>
</nav> -->
<nav>
    <ul>
        <li class="sous-ressources">
            <a href="#">Nos ressources</a>
            <ul class="sous-menus-ressources">
                <li><a href="index.php?action=videotheque" style="color: #48bdcb;">Nos vidéos</a></li>
                <li><a href="index.php?action=documentheque" style="color: #48bdcb;">Nos documents</a></li>
                <li><a href="index.php?action=themeRechercher" style="color: #48bdcb;">Recherche par thème</a></li>
                <li><a href="index.php?action=rechercherAccueil" style="color: #48bdcb;">Rechercher</a></li>
            </ul>
        </li>
        <li><a href="index.php?action=presDeChezVous" target="_blank">Près de chez vous</a></li>
        <li class="sous-ressources-menu">
            <a href="#">Pour aller plus loin</a>
            <ul class="sous-menus-ressources-menu">
                <li><a href="index.php?action=listeNewsletters" style="color: #48bdcb;">S'inscrire à notre newsletter</a></li>
                <li><a href="index.php?action=listeBenevole" style="color: #48bdcb;">Devenir bénévole</a></li>
                <li><a href="index.php?action=listeDonateur" style="color: #48bdcb;">Nous soutenir</a></li>
            </ul>
        </li>
        <li><a href="index.php?action=BenevoleMssion" target="_blank">Découvrir nos missions de bénévolat</a></li>
        <li><a id="open-modal-Dic" onclick="openModal(); return false;" href="index.php?action=listeDictionnaire">Dictionnaire</a></li>
    </ul>
</nav>
        </div>
        <div class="col col-informations">
            <h2>Informations</h2>
            <nav>
                <ul>
                    <li><a href="https://www.delta7.org/fr/rgpd" target="_blank">RGPD Politique de confidentialité</a></li>
                    <li><a href="https://www.delta7.org/fr/mentions-legales" target="_blank">Mentions Légales</a></li>
                    <li><a href="https://www.delta7.org/fr/rgpd" target="_blank">Conditions générales d'utilisation</a></li>
                    <li><a href="http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesignCCopie/index.php?action=cnx1" target="_blank">Connexion admin</a></li>
                </ul>
            </nav>
        </div>
        <div class="col col-infos">
            <h2>Informations</h2>
            <p>DELTA7 - Association loi 1901 à but non lucratif</p>
            <p>53 avenue de Saint Ouen<br/>75017 PARIS</p>
            <p><a href="#">info@delta7.org</a>
            <p><a href="#">01.46.07.42.22 </a><br /><span>(coût d'une communication locale)</span></p>
        </div>
    </div>
    <div class="container-mainwebsite flex">
        <div>
            <ul>
                <li><a href="https://www.delta7.org/fr/rgpd" target="_blank">RGPD Politique de confidentialité</a></li>
                <li><a href="https://www.delta7.org/fr/mentions-legales" target="_blank">Mentions Légales</a></li>
                <li><a href="https://www.delta7.org/fr/rgpd" target="_blank">Conditions générales d'utilisation</a></li>
            </ul>
        </div>
        <div>© Delta 7 Tous droits réservés</div>
    </div>
</footer>

<script>
 // Sélectionner l'élément de clic
 const sousRessources = document.querySelector('.sous-ressources');

// Sélectionner l'élément à afficher
const sousMenusRessources = sousRessources.querySelector('.sous-menus-ressources');

// Masquer les sous-menus au chargement de la page
sousMenusRessources.style.display = 'none';

// Ajouter un écouteur d'événement pour le clic
sousRessources.addEventListener('click', function(e) {
  e.preventDefault(); // Empêche le comportement par défaut du lien

  // Vérifier si le sous-menu est déjà visible
  const isDisplayed = sousMenusRessources.style.display === 'block';

  // Afficher ou masquer le sous-menu en fonction de son état actuel
  if (isDisplayed) {
    sousMenusRessources.style.display = 'none';
  } else {
    sousMenusRessources.style.display = 'block';
    sousMenusRessources.style.marginLeft = '45%';
    sousMenusRessources.style.textAlign = 'left';
    sousMenusRessources.style.color = '#48bdcb';
  }
});


 // Sélectionner l'élément de clic
 const sousRessourcess = document.querySelector('.sous-ressources-menu');

// Sélectionner l'élément à afficher
const sousMenusRessourcess = sousRessourcess.querySelector('.sous-menus-ressources-menu');

// Masquer les sous-menus au chargement de la page
sousMenusRessourcess.style.display = 'none';

// Ajouter un écouteur d'événement pour le clic
sousRessourcess.addEventListener('click', function(e) {
  e.preventDefault(); // Empêche le comportement par défaut du lien

  // Vérifier si le sous-menu est déjà visible
  const isDisplayed = sousMenusRessourcess.style.display === 'block';

  // Afficher ou masquer le sous-menu en fonction de son état actuel
  if (isDisplayed) {
    sousMenusRessourcess.style.display = 'none';
  } else {
    sousMenusRessourcess.style.display = 'block';
    sousMenusRessourcess.style.marginLeft = '45%';
    sousMenusRessourcess.style.textAlign = 'left';
    sousMenusRessourcess.style.color = '#48bdcb';
  }
});















//  // Sélectionner l'élément de clic
//  const sousRessources = document.querySelector('.sous-ressources');

// // Sélectionner l'élément à afficher
// const sousMenusRessources = sousRessources.querySelector('.sous-menus-ressources');

// // Ajouter un écouteur d'événement pour le clic
// sousRessources.addEventListener('click', function(e) {
//   e.preventDefault(); // Empêche le comportement par défaut du lien

//   // Vérifier si le sous-menu est déjà visible
//   const isDisplayed = sousMenusRessources.style.display === 'block';

//   // Afficher ou masquer le sous-menu en fonction de son état actuel
//   if (isDisplayed) {
//     sousMenusRessources.style.display = 'none';
//   } else {
//     sousMenusRessources.style.display = 'block';
//     sousMenusRessources.style.marginLeft = '45%';
//     sousMenusRessources.style.textAlign = 'left';
//     sousMenusRessources.style.color = '#48bdcb';
//   }
// });


//   // Sélectionner l'élément de survol
//   const sousRessources = document.querySelector('.sous-ressources');

//   // Sélectionner l'élément à afficher
//   const sousMenusRessources = sousRessources.querySelector('.sous-menus-ressources');

//   // Ajouter un écouteur d'événement pour le survol
//   sousRessources.addEventListener('mouseover', function() {
//     // Ajouter la classe pour afficher l'élément
//     sousMenusRessources.style.display = 'block';
//     sousMenusRessources.style.marginLeft = '45%';
//     sousMenusRessources.style.textAlign = 'left';
//     sousMenusRessources.style.color = '#48bdcb';
//   });

//   // Ajouter un écouteur d'événement pour la sortie du survol
//   sousRessources.addEventListener('mouseout', function() {
//     // Supprimer la classe pour masquer l'élément
//     sousMenusRessources.style.display = 'none';
//   });
</script>
<!-- <script>
  // Sélectionner l'élément de survol
  const sousRessources = document.querySelector('.sous-ressources');

  // Sélectionner l'élément à afficher
  const sousMenusRessources = document.querySelector('.sous-menus-ressources');

  // Ajouter un écouteur d'événement pour le survol
  sousRessources.addEventListener('mouseover', function() {
    // Ajouter la classe pour afficher l'élément
    sousMenusRessources.classList.add('display-block');
  });

  // Ajouter un écouteur d'événement pour la sortie du survol
  sousRessources.addEventListener('mouseout', function() {
    // Supprimer la classe pour masquer l'élément
    sousMenusRessources.classList.remove('display-block');
  });
</script> -->

<!-- </main> -->
<!-- <div class="container-footer">
  <footer class="py-3 my-4" style="margin:auto;">
    <ul class="nav justify-content-center pb-3 mb-3">
    <li class="nav-item"><a href="index.php" class="nav-link mx-2" style="color: white;">Accueil</a></li>
      <li class="nav-item"><a href="https://www.delta7.org/fr/rgpd" target="_blank" class="nav-link mx-2" style="color: white;">RGPD Politique de confidentialité</a></li>
      <li class="nav-item"><a href="https://www.delta7.org/fr/mentions-legales" target="_blank" class="nav-link mx-2" style="color: white;">Mentions Légales</a></li>
      <li class="nav-item">
            <div class="nav-link mx-2 contact" style="color: white;">
                Nous contacter
                <div class="contact-details">
                    <div>
                        <img src="image/mail.png" style="width: 20px; height: 20px;" alt="">
                        info@delta7.org
                    </div>
                    <div>
                        <img src="image/telephone.jpeg" style="width: 20px; height: 20px;" alt="">
                        +33 1 46 07 42 22
                    </div>
                </div>
            </div>
        </li>
      <li class="nav-item"><a href="http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesignCCopie/index.php?action=cnx1" target="_blank" class="nav-link mx-2" style="color: white;">Connexion admin</a></li>
    </ul>
    <hr>
   <a href="https://www.delta7.org/fr" target="_blank"> <img src="image/LogoDeltaFooter.png" class="img-fluid" style="width: 15%;" alt=""></a>
    <br>
    <div style="display: flex; justify-content: center; align-items: center;">
    <a href="https://www.facebook.com/associationdelta7/?locale=fr_FR" target="_blank"><img src="image/facebook.png" style="width: 43px; height: 42px; margin-right: 15px;" alt=""></a>
    <a href="https://www.linkedin.com/company/delta7/" target="_blank"><img src="image/LinkedIn-Symbole.png" style="width: 78px; height: 44px; margin-right: 15px;" alt=""></a>
    <a href="https://www.youtube.com/@associationdelta7923" target="_blank"><img src="image/youtube.png" style="width: 48px; height: 50px;" alt=""></a>
</div>
<br>
    <p class="text-center" style="color: white; margin-left:auto; margin-right:auto;">© Delta 7, Tous droits réservés</p>
  </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
    $(".contact").hover(function(){
        $(".contact-details").show();
    }, function(){
        $(".contact-details").hide();
    });
});
</script>
</body>
</html> -->
