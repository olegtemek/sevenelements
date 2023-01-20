import App from '@/views/App.vue';
import router from '@/router/router.js';
import { createApp } from 'vue';


const app = createApp(App);

ui.forEach(component => {
  app.component(component.name, component)
});

app
  .use(router)
  .use(store)
  .mount('#app')