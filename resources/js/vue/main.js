
import { createApp } from "vue";
import ListComponent from "./componets/List.vue";
const app = createApp({})

app.component('ListComponent', ListComponent)

app.mount('#app')
