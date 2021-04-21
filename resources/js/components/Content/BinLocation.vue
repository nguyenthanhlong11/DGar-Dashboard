<template>
<div>
  <div class="containerUS">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Longtitue</th>
          <th scope="col">Latitude</th>
          <th scope="col"><button type="button" class="btn btn-outline-danger">Delete</button></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="bins in bins" :key="bins">
          <td>{{bins.id}}</td>
          <td>{{bins.name}}</td>
          <td>{{bins.longitude}}</td>
          <td>{{bins.latitude}}</td>
          <td><i class="fas fa-trash"></i></td>
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
      bins: [],
    }
  },
  mounted() {
    this.getUser();
  },
  methods: {
    getUser() {
      axios.get('https://d-gar.herokuapp.com/api/listBinLocation')
        .then(response => (this.bins = response.data))
        .catch(error => console.log(error))
    }
  }
}
</script>
