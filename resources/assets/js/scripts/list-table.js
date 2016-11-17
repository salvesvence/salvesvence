
Vue.transition('fade-out', {
   leaveClass: 'fadeOut'
});

Vue.component('list-table', {
   template: '#list-table',

   props: ['list'],

   methods: {
      delete: function(slug) {

         var elem = $('a#' + slug + '-delete'),
             url = elem.data('url');

         elem.parents('tr').fadeToggle("slow", "linear");

         this.$http.get('/' + url).then((response) => {
            console.log(response.data.message);
         });
      }
   },

   created() {
      this.list = JSON.parse(this.list).data;
   }
});

new Vue({
   el: 'body'
});