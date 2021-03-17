<template>
<div class="col-sm-2 sidenav hidden-xs" id="list">
  <nav class="w3-sidebar w3-collapse w3-light w3-animate-left" style="z-index:3;width:300px;background-color:grey" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s8 w3-bar">
        <p>D-Gar team</p>
      </div>
    </div>
    <hr>
    <div class="w3-container w3-row">
      <div class="w3-col s4">
        <img src="https://i.pinimg.com/originals/51/f6/fb/51f6fb256629fc755b8870c801092942.png" class="w3-circle w3-margin-right" style="width:30px">
      </div>
      <div class="w3-col s8 w3-bar">
        Welcome, <strong>Admin</strong><br /><br />
      </div>
    </div>
    <hr>
    <div class="w3-bar-block">
      <router-link :to="{ name: 'dashboard' }" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home"></i>  Home </router-link>
      <router-link :to="{ name: '' }" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users"></i> Users Sacanner </router-link>
      <router-link :to="{ name: ''}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file"></i> New Post </router-link>
      <router-link :to="{ name: '' }" class="w3-bar-item w3-button w3-padding"><i class="fa fa-warning"></i> Warning </router-link>
      <router-link :to="{ name: '' }" class="w3-bar-item w3-button w3-padding"><i class="fa fa-info-circle"></i> Info </router-link>
      <router-link :to="{ name: '' }" class="w3-bar-item w3-button w3-padding"><i class="fas fa-sign-out-alt"></i> Log out </router-link>
    </div>

    <div>
      <button class="btn-download"><i class="fa fa-download"></i> Download</button>
    </div>
  </nav>

</div>
</template>

<script>
export default {

}
</script>
