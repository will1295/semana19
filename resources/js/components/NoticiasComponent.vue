<!--Seccion de html-->
<template>
    <h1>Component Noticias</h1>
    <div class="card" style="width: 18rem;">
         <div class="card-body">
         <h5 class="card-title">Card title</h5>
         <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         <a href="#" class="card-link">Card link</a>
         <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card">
    <div v-for="noticia in noticias" :key=noticia.id>
        <div class="card-body">
            <h3 class="card-title">{{ noticia.titulo }}</h3>
            <p class="card-text">{{noticia.descripcion}}</p>
        </div>
    </div>
  </div>

</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      noticias: [] 
    };
  },
  mounted() {
    this.obtenerNoticias();
  },
  methods: {
    obtenerNoticias() {
      axios.get('/noticias')
        .then(response => {
          this.noticias = response.data;
        })
      
    }
  }
}




</script>