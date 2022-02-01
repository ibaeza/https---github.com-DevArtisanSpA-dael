<template>
    <div>
        <div class="card mt-3 mb-3" v-for="category in this.categories" v-bind:key="category.id">
          <router-link 
            class="btn btn-success" 
            :to="{name: 'post-category', params: {category_id: category.id}}">
          <img src= '/images_category/category1.png' class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title">{{post.title}}</h5>
              <p class="card-text">{{post.content}}</p>
              <button class="btn btn-primary" v-on:click="postClick(post)">Ver resumen</button>
              <router-link class="btn btn-success" :to="{name: 'detail', params: {id: post.id}}">Ver Post</router-link> 
          </div>
          </router-link>
        </div>
    </div>
</template>
<script>
import vPagination from 'vue-plain-pagination';

export default {
  created(){
    this.getCategories();
  },
  methods: {
     getCategories:function(){
        fetch('/api/post/')
        .then(response => response.json())
        .then(json => this.categories = json.data);
     },
  },
  data: function () {
    return {
      categories =""
    };
  },

};
</script>