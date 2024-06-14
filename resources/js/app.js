import './bootstrap';
import { createApp } from 'vue'
import index from './components/Index.vue'
const app = createApp()
app.component('index', index)
app.mount('#app')