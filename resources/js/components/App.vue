<template>
  <div id="appadmin" >
    <div v-if="id_user==''">
      <Login/>
    </div>
    <div v-else>
     <Page/>
    </div>
  </div> 
</template>

<script>
import Login from './Content/Login';
import Page from './Page';

export default {
   data() {
    return {
      id_user: ''
    }
  },
   mounted() {
    this.getIDUser();
  },
  methods: {
    getIDUser(){
      if(localStorage.getItem("id_user") && localStorage.getItem("id_user")!=''){
        this.id_user=localStorage.getItem("id_user");
      }
    }
  },
  components: {
    Login,
    Page
  }
}
</script>
