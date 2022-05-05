const app = new Vue({
  el: "#app",
  data() {
    return {
      records: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/apiRecords.php")
      .then((response) => {
        console.log(response);
        if (response.status === 200) {
          this.records = response.data;
        }
      });
  },
});
