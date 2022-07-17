
import { createApp } from "vue";
const app = createApp({})

import ListComponent from "./componets/List.vue";

app.component('ListComponent', ListComponent)

app.mount('#app')
