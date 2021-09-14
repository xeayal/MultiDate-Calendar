# MultiDate-Calendar
php date plugin that you can use in reservation and similar web applications

1. Add the files to a new folder in your project
2. Include the index.php file where you will add the calendar

#You can set the calendar width in style.css file under .splide via max-width

#You can change the perPage value in the main.js file to set how many days it should appear on each page.

#You can set the background color of the selected day section from main.js
#You can access the date information with the date attribute of the .day class.

JQUERY

<script>
  
  $('.day').click(function(){
  
    var date = $(this).attr('date');
  
  })
  
</script>
