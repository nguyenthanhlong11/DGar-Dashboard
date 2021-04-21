<template>
<div>
  <div class="containerUS">
    <form>
      <div class="form-row">
        <div class="col-sm-10">
          <input type="text" class="form-control" id="title" placeholder="Title..." name="title">
        </div>
        <div class="col-sm-2">
          <label for="apply"><input type="file" name="" id="apply" accept="image/*,.pdf"><i class="fas fa-paperclip"></i>insert photo</label>
        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-12">
          <textarea class="form-control" rows="25" id="content"></textarea>
        </div>
      </div>
      <div class="form-row2">
        <div class="col-sm-10">
          <button type="button" class="btn btn-secondary">Save post</button>
          <button type="button" class="btn btn-link">Public post</button>
        </div>
        <div class="col-sm-2">
          <button type="button" class="btn btn-primary">Public post</button>
        </div>
      </div>
    </form>
  </div>
</div>
</template>

<script>
export default {

}
</script>
