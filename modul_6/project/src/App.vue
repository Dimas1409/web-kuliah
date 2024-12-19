<template>
  <div id="app">
    <header>
      <nav class="navbar">
        <div class="logo">
          <img src="../src/assets/images/Logo.png" alt="logo" />
        </div>
        <ul class="nav-links">
          <!-- <li><router-link to="">About Me</router-link></li> -->
          <li><router-link to="/seeall">My Works</router-link></li>
          <li><router-link to="/contact">Contact Me</router-link></li>
          <li><router-link to="/blog">Blog</router-link></li>
        </ul>
      </nav>
    </header>

    <main>
      <router-view></router-view>  <!-- Konten dinamis berdasarkan rute, seperti Contact, Homepage, dll. -->
    </main>

    <footer class="footer">
        <p>"Photography is the story I fail to put into words." <br>– Destin Sparks</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Whatsapp</a>
            <a href="#">Instagram</a>
        </div>
        <nav class="footer-nav">
          <!-- <li><router-link to="">About Me</router-link></li> -->
          <li><router-link to="/seeall">My Works</router-link></li>
          <li><router-link to="/contact">Contact Me</router-link></li>
          <li><router-link to="/blog">Blog</router-link></li>
        </nav>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'App',
};
</script>

<style scoped>
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px;
    background-color: #28261E;
}

.nav-links {
    list-style-type: none;
    display: flex;
    gap: 30px;
}

.nav-links li {
    display: inline;
}

.nav-links a {
    color: white;
    font-weight: 400;
    text-decoration: none;
    font-size: 18px;
}

.nav-links a:hover {
    text-decoration: underline;
}

.footer {
    display: flex;
    justify-content: space-between;
    padding: 100px;
    text-align: center;
    background-color: black;
    color: white;
}

.footer p {
    text-align: left;
    font-style: italic;
    font-size: 18px;
    gap: 10px;
    margin-bottom: 20px;
}

.footer .social-links {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: flex-start;
    gap: 50px;
}

.footer .social-links a {
    color: white;
    text-decoration: none;
}

.footer .social-links a:hover {
    text-decoration: underline;
}

.footer-nav{
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: flex start;
    gap: 50px;
}

.footer-nav a {
    color: white;
    text-decoration: none;
}

.footer-nav a:hover {
    text-decoration: underline;
}
</style>
