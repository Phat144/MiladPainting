<?php
$conn = mysqli_connect("localhost", "root", "", "miladPainting");
if ($conn) {
    echo "connected";  
}
    
$result = mysql_query("SELECT * from uploadImage");


?>


<!DOCTYPE html>
<html>
    <title>Gallery</title>
    <body>
        <template>
          <mdb-container>
            <mdb-lightbox :imgs="captions" gallery></mdb-lightbox>
          </mdb-container>
        </template>
    </body>
    
<script>
  import { mdbLightbox, mdbContainer } from "mdbvue";
  export default {
    components: {
      mdbLightbox,
      mdbContainer,
    },
    data() {
      return {
        captions: [
          {
            img:
              "https://mdbootstrap.com/img/Photos/Lightbox/Original/img%20(94).jpg",
            caption:
              "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus nobis sit veritatis cumque! Placeat voluptate aut pariatur! Nihil molestiae quos explicabo dignissimos quam cupiditate sequi corporis eaque corrupti. Vel, est."
          }
    
          
        ]
      };
    },
  };
</script>

</html>