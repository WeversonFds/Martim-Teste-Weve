      <script>
         $('.carousel').flickity({
            prevNextButtons: false,
            pageDots: false,
         cellAlign: 'left',
         contain: true
         });
         
         $('#myModal').on('shown.bs.modal', function () {
         $('#myInput').trigger('focus')
         })
      </script> 
      <?php wp_footer();?>   
   </body>
</html>