<template>
  <div id="appadmin">
    <Sidebar/>
    <div class="w3-main" style="margin-left:300px">
       <div class="w3-row-padding w3-margin-bottom">
          <Header/>
          <div class="container text-center"> 
            <router-view></router-view>
          </div>  
       </div>
        </div>
  </div>  
</template>


<script>
import Header from  '../components/Header';
import Sidebar from '../components/Sidebar';

export default {
    name: 'appadmin',
    data(){
        return{
            msg:'Hello Vuejs'
        }
    },
    components:{
        Header, Sidebar
    }
}
</script>