Vue.component('list-table', {
   template: '#list-table',

   props: ['list'],

   created() {
      this.list = JSON.parse(this.list).data;
   }
});

new Vue({
   el: 'body'
});