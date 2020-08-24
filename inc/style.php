<!-- You Can Set @Imports Or Links to Fonts, Bootstrap, JQuery ETC. Here -->
<!-- Example: <link rel="stylesheet" href="set/path/here"> -->
<style>
/* @@@ Browser Resets And Overrides @@@ */
  * {  margin:0; padding:0; box-sizing:border-box; list-style:none; text-decoration:none;  }
  div, body, main, header, nav, section, aside, article, footer, form, label, hgroup, 
  details, figure, figcaption, summary, dt, ul, li, ol { display:block; float:left; }
  html { width:100vw;height:100vh;font-size:62.5%;scroll-behavior:smooth;line-height:1.5em; }
  h1     { font-size: 175%; line-height: 2em;  }    h2 { font-size: 160%; line-height: 2em; }
  h3     { font-size:145%; line-height:1.75em; }    h4 { font-size:130%; line-height:1.5em; }
  h5,p,a { font-size: 115%; line-height:1.5em; }    h6 { font-size:100%; line-height:1.5em; }
    /* Font Size Of 100% Is Equal To 16px = Min Size For Best Search Engine Point Results*/

  /* Custom Elements */
  .cnt { float: none; margin-left: auto; margin-right: auto; }
  .ctxt { text-align: center; }
  .mt10 { margin-top: 10vh; }
  .mt20 { margin-top: 20vh; }
  .c50 { width: 50%; }
  .c50m { width: 50%; }

/* @@@ Template Styles @@@ */
  html { color: rgb(7,7,7); }  p { padding: 0 1em 1.5em; }
  body, header, main, section, footer, h1, h2, h6, img, .col { width:100%; }
  a { color: rgb(20,120,210); }  a:hover, .active { color: rgb(5,85,160); }
  .active { box-shadow: 0px 0px 0px 1px rgba(5,85,160,.15) }
  body { font-family: sans-serif; overflow-x:hidden; }
  main { min-height: calc(100vh - 4em); }
  section { position: relative; padding: 1em 1em 0; }

  footer { min-height: 4em; }
  .site_map a { line-height: 3em; }
  
  /* Header & Navigations */
  header { height: 4em; padding: 0 5vw; }
  .logo { width: 2em; height: 2em; margin: 1em .25em; border-radius: 50%; overflow: hidden; }
  .main_nav { float: right; height: 4em; line-height: 4em; }
  .main_nav li a { padding: .25em .5em; margin: .25em; border-radius: .15em;}

  /* Condensed Styling */
  a, .active {
    transition: 200ms ease;}
  html, .main_nav li a {
    background-color: rgb(235,235,235);}
  header, footer {
    background-color: rgb(225,225,225); }

/* @@@ @Supports For Flexbox / Grid etc. @@@ */
  /* @supports (  ) {
    SEE: https://developer.mozilla.org/en-US/docs/Web/CSS/@supports Or Other Online Resources.
  } */

/* @@@ Responsive CSS | Media Queries @@@ */
  @media screen and (min-width: 720px)      /*HD Ready +*/     {
    body{font-size:1.8em;}  
  } @media screen and (max-width: 719px)   /*Average Phone*/   {
    body{font-size:1.6em;} .c50m {width: 100%;}
  } @media screen and (max-width: 479px)   /*Small screens*/   {
    
  } @media screen and (max-width: 319px)  /*Watches & Mini*/   {
    body{font-size:1.4em;} header {padding: 0 1em;} 
    .main_nav li a {margin: 1px; padding: .5em .2em;}
  } /* Search Engines Don't Scan For These Screen Sizes, 'Yet' */
        /* 240px Is Now The Smallest Sceen Sized Devices */
</style>
</head>
