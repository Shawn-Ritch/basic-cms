<header>
  <div class="logo">
    <a href="index.php">
      <img src="root/page/images/webdevzLogo192x192.png" title="WebDeveloprz Logo" alt="WebDeveloprz Logo">
    </a>
  </div>
  <nav class="top right">
    <a class="right" href="tel:1-480-283-3393">1(480)283-3393</a>
  </nav>
  <nav class="bottom menu right">
      <li class="a_btn right" onclick="menuToggle()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="none" d="M0 0h24v24H0V0z"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
        </svg>
      </li>
      <div class="right" id="ddMenu">
        <ul>
          <?php echo $menu; ?>
      </ul>
</header>
