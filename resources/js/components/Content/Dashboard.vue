<template>
<div>
  <div class="row">
    <div class="col-sm-4" >
      <div class="col1">
        <i class="fas fa-cloud-download-alt"></i>
        <p>Total download</p>
        <h2>320</h2>
      </div>
    </div>
    <div class="col-sm-4" >
      <div class="col2">
        <i class="far fa-comment-alt"></i>
        <p>Total feedback</p>
        <h2>38</h2>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="col3">
        <i class="fas fa-trash"></i>
        <p>Total cleaned</p> 
        <h2>38</h2>   
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
    <div id="monthly" class="tabcontent">
      <LineChart/>
    </div>
  </div>    
</div>
 </div>
</template>
<script>
 import LineChart from '../Content/LineChart';
  export default{
    components:{
        LineChart
    }
  }
</script>