Vue.component('list-table', {
   template: '#list-table',

   props: [
      'list',
      'isVisible'
   ],

   methods: {
      delete: function() {
         this.isVisible = false;

         var $elem = $(this.$el),
             url = $elem.find('a#button-delete').data('url');

         this.$http.get('/' + url).then((response) => {
            console.log(response.data.message);
         });
      }
   },

   created() {
      this.list = JSON.parse(this.list).data;
      this.isVisible = true;
   }
});

new Vue({
   el: 'body'
});