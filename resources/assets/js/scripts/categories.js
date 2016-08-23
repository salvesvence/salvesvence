Vue.component('categories', {
   template: '#categories-template',

   props: ['list'],

   created() {
      this.list = JSON.parse(this.list).data;
   }
});

new Vue({
   el: '#categories'
});