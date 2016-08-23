new Vue({
   el: '#categories',

   ready: function () {
      this.fetchCategories();
   },

   methods: {
      fetchCategories: function () {
         this.$http.get('api/categories').then((categories) => {
               this.$set('categories', categories.json().data);
         });
      }
   }
});