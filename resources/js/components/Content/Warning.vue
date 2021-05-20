<template>
<div>
  <div class="containerUS">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Address</th>
          <th scope="col">Level</th>
          <th scope="col">Image</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="warnings in warnings" :key="warnings">
          <td>{{warnings.id}}</td>
          <td>{{warnings.address}}</td>
          <td>{{warnings.level}}</td>
          <td>
            <img v-bind:src="warnings.image" style="width:200px;"/>
          </td>
          <td>{{warnings.description}}</td>
          <td>{{warnings.status}}</td>
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
      warnings: [],
    }
  },
  mounted() {
    this.getUser();
  },
  methods: {
    getUser() {
      axios.get('https://d-gar.herokuapp.com/api/reports/getListPosts')
        .then(response => (this.warnings = response.data))
        .catch(error => console.log(error))
    }
  }
}
</script>
