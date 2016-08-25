Vue.transition('fade-out', {
   leaveClass: 'fadeOut'
});

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
            this.showModal(response.data.message);
         });
      },

      showModal: function(message) {
         var modal = $('#delete-modal');

         setTimeout(function() {
            modal.find('.modal-body')
                .append('<p>' + message +'</p>');

            modal.modal('show');
         }, 400);
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