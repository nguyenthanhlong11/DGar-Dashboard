<template>
<div>
  <div class="containerUS">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID User</th>
      <th scope="col">Address</th>
      <th scope="col">Level</th>
      <th scope="col">Image</th>
       <th scope="col">Description</th>
        <th scope="col">Status</th>
      <th scope="col"><button type="button" class="btn btn-outline-danger">Delete</button></th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="warnings in warnings" :key="warnings">
      <td>{{warnings.id}}</td>
      <td>{{warnings.user_id}}</td>
      <td>{{warnings.address}}</td>
      <td>{{warnings.level}}</td>
      <td>{{warnings.image}}</td>
        <td>{{warnings.description}}</td>
          <td>{{warnings.status}}</td>
      <td><i class="fas fa-trash"></i></td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</template>

<script>
 import axios from 'axios'
  export default{
    data () {
      return {
        warnings:[],
      }
    },
    mounted(){
      this.getUser();
    },
    methods:{
      getUser(){
          axios.get('https://d-gar.herokuapp.com/api/reports/getListPosts')
          .then(response => (this.warnings = response.data))
          .catch(error => console.log(error))
      } 
    }
  }
</script>

