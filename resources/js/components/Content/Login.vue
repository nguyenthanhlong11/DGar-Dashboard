<template>
<div class="login-box">
  <div class="login-box-body">
    <div class="login-logo">
      <img src="https://images.pexels.com/photos/1162361/pexels-photo-1162361.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="30%" alt="logo">
    </div>
    <p class="login-box-msg">
      <b>D-Gar</b>
    </p>
    <fieldset>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" name="username" placeholder="Username" class="form-control" autofocus="true" required="true" v-model="username">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" placeholder="password" class="form-control" required="true" v-model="password">
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="button" class="btn btn-primary btn-block btn-flat" @click.prevent="login"><i class="fa fa-sign-in"></i> Login</button>
        </div>
      </div>
    </fieldset>
  </div>
</div>
</template>

<script type="text/javascript">
  export default {
    methods: {
      login(){
        axios.post('https://dashboard.heroku.com/api/auth/signin',{
          username: this.username,
          password: this.password
        })
        .then(response => {
          console.log(response.data.message);
          if(response.data.message && response.data.message!=""){
            alert(response.data.message);
          }
          else{
          if(response.data.user_id && response.data.user_id!=""){
            localStorage.setItem("id_user", response.data.user_id);
            alert("Login successful!");
            location.reload();
            }
          else{
            alert("Username or password is incorrect!");
            this.$router.push('/');
            location.reload();
          }
          }
          
        }).catch(error => {
          console.log(error);
        })
      }
    },
    data(){
      return {
        username: "",
        password: ""
      }
    }
  }
</script>

<style scoped>
h3 {
  margin: 40px 0 0;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
