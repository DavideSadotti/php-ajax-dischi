var app = new Vue(
  {
    el: "#app",
    data: {
      list: [],
      genreList: [
        "Tutti"
      ],
      count: 0,
      selected: "Tutti",
      order: ""
    },
    methods: {
      genre: function(){
        while(this.count < this.list.length){
          if(this.genreList.indexOf(this.list[this.count].genre) == -1){
            this.genreList.push(this.list[this.count].genre);
          }
          this.count++;
        }
        this.count = 0;
      },
      ordina: function(a ,b){
        this.list.sort((a, b) => {
          if(this.order == "asc"){
            return a.year - b.year;
          }else if(this.order == "dis"){
            return b.year - a.year;
          }
        });
      }
    },
    mounted: function() {
      axios.get('http://localhost:81/project/Boolean/48-php-ajax-dischi/php-ajax-dischi/api.php')
      .then( (response) => {
        this.list = response.data;
      } );
    }
  }
);