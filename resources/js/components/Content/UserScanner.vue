<template>
<div>
  <div class="containerUS">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Total Post</th>
          <th scope="col"><button type="button" class="btn btn-outline-danger">Delete</button></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="users in users" :key="users">
          <td><i class="fas fa-user-circle"></i>{{users.name}}</td>
          <td>{{users.email}}</td>
          <td>{{users.total_posts}}</td>
          <td><button @click="deleteUser(users.id)"><i class="fas fa-trash"></i></button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</template>
<script>
import axios from 'axios'
export default {
  data() {
    return {
      users: [],
    }
  },
 // mounted() {
    //this.getUser();
  //},
  created(){
      this.getUser();
  },
  methods: {
    getUser() {
      axios.get('http://127.0.0.1:8000/api/users/countPosts')
        .then(response => (this.users = response.data))
        .catch(error => console.log(error))
    },
    deleteUser(id)
    {
      axios.delete('http://127.0.0.1:8000/api/users/deleteUser/'+id)
      .then(response => (this.accounts = response.data))
        .catch(error => console.log(error));
        alert("Delete user successfully!");
        // location.reload();
    }, 
  }
}
</script>
