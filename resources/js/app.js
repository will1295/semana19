import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import NoticiasComponent from './components/NoticiasComponent.vue';

const app = createApp({});


app.component('example-component', ExampleComponent);
app.component('noticias-component',NoticiasComponent);
app.mount('#app');
