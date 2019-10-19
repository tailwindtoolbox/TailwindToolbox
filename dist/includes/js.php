<script src='https://cdnjs.cloudflare.com/ajax/libs/fuse.js/2.5.0/fuse.min.js'></script>
<script src="includes/data.json"></script>
<script>
/*Fuse*/
var options = {
  shouldSort: true,
  tokenize: true,
  threshold: 0.8,
  location: 0,
  distance: 40,
  maxPatternLength: 32,
  minMatchCharLength: 1,
  keys: [
    "title",
    "description",
    "category",
    "author"
  ]
};

var obj;
var fuse;

fetch('./includes/data.json')
.then(res => res.json())
.then(data => obj = data)
.then(() => fuse = new Fuse(obj, options))
</script>
<script src="js/app.min.js"></script>