import Vue from 'vue';
import App from './App.vue';
import VueRouter from "vue-router";
import './style.css';

Vue.use(VueRouter)
Vue.config.productionTip = false

import Home from "@/components/Home.vue";
import Edit from "@/components/Edit.vue";
import Create from "@/components/Create.vue";

const routes = [{
  path: "/home",
  name: "home",
  component: Home,
},
{
  path: "/edit",
  name: "edit",
  component: Edit,
},
{
  path: "/create",
  name: "create",
  component: Create,
},
{
  path:"",
  redirect:"Home",
}
]

const router = new VueRouter({
  routes,
  mode: "history",
});

new Vue({
  render: h => h(App),
  router
}).$mount('#app')
