<template>
  <div class="col-sm-2 sidenav hidden-xs" id="list">
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
      <div class="w3-container w3-row">
        <div class="w3-col s4">
          <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" class="w3-circle w3-margin-right" style="width:80px">
        </div>
        <div class="w3-col s8 w3-bar">
          <span>Welcome, <strong>Admin</strong></span><br/><br/>
          <p>D-Gar team</p>
        </div>
      </div>
      <hr>
      <div class="w3-container">
        <h5>Dashboard</h5>
      </div>
      <div class="w3-bar-block">
        <router-link :to="{ name: 'dashboard' }" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Tools </router-link>
        <router-link :to="{ name: '' }" class="w3-bar-item w3-button w3-padding"><i class="fas fa-newspaper"></i>  User Sacanner </router-link>
        <router-link :to="{ name: ''}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> New Post </router-link>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i> Warning </a>
        <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fas fa-sign-out-alt"></i> Logout </a>        
      </div>
    </nav>
  </div>
</template>

<script>
export default {
    
}
</script>