  <!--Start TITLE PAGE-->		
            <section class="content service_page">			
            <div class="container">				
            <div class="row">					
            <div class="col-lg-12 col-md-12 col-sm-12">						
            <div class="box border green">
            <div class="box-tittle">
            <h4><i class="fa fa-book"></i>Address Book</h4>
            <a class="btn btn-primary" href="javascript:void(0);" 
                  onclick="contacts.showAddContactsModal()" > 
                  <i class="icon-user icon-white glyphicon glyphicon-user"></i>
                  Add_new_contact
              </a>

              <a class="btn btn-primary" href="javascript:void(0);" 
                  onclick="contacts.editUser()" > 
                  <i class="icon-user icon-white glyphicon glyphicon-user"></i>
                  Edit_contact
              </a>
               <a class="btn btn-primary" href="javascript:void(0);" 
                  onclick="contacts.editUser()" > 
                  <i class="icon-user icon-white glyphicon glyphicon-user"></i>
                  Delete Contact
              </a>
            </div>

            <div class="box-body">
            <div class="col-md-4">
            <div id="address-book">
             <div id="address-book">
           <div class="slider-content">
          <ul>
              <li id="a"><a name="a" class="title">A</a>
          <ul>
            <?php echo $cont->selectNamesA(); ?>
         </ul>
              </li>
          <li id="b"><a name="b" class="title">B</a>
          <ul>
            <?php echo $cont->selectNamesB(); ?>
          </ul>
          </li>
              <li id="c"><a name="c" class="title">c</a>
           <ul>
             <?php echo $cont->selectNamesC(); ?>
         </ul>
            </li>
          <li id="d"><a name="d" class="title">d</a>
             <ul>
             <?php echo $cont->selectNamesD(); ?>
          </ul>
          </li>
          <li id="e"><a name="e" class="title">E</a>
          <ul>
            <?php echo $cont->selectNamesE(); ?>
          </ul>
             </li>
           <li id="f"><a name="f" class="title">f</a>
               <ul>
          <?php echo $cont->selectNamesF(); ?>
            </ul>
       </li>
      <li id="g"><a name="g" class="title">g</a>
        <ul>
      <?php echo $cont->selectNamesG(); ?>
        </ul>
      </li>
      <li id="h"><a name="h" class="title">h</a>
       <ul>
      <?php echo $cont->selectNamesH(); ?>
       </ul>
       </li>
      <li id="i"><a name="i" class="title">i</a>
      <ul>
        <?php echo $cont->selectNamesI(); ?>
      </ul>
      </li>
      <li id="j"><a name="j" class="title">j</a>
    <ul>
       <?php echo $cont->selectNamesJ(); ?>
      </ul>
     </li>
      <li id="k"><a name="k" class="title">k</a>
      <ul>
        <?php echo $cont->selectNamesK(); ?>
      </ul>
      </li>
    <li id="l"><a name="l" class="title">l</a>
      <ul>
         <?php echo $cont->selectNamesL(); ?>
      </ul>
    </li>
        <li id="m"><a name="m" class="title">m</a>
    <ul>
    <?php echo $cont->selectNamesM(); ?>
    </ul>
        </li>
   <li id="n"><a name="n" class="title">n</a>
       <ul>
      <?php echo $cont->selectNamesN(); ?>
      </ul>
      </li>
      <li id="o"><a name="o" class="title">o</a>
      <ul>
     <?php echo $cont->selectNamesO(); ?>
     </ul>
    </li>
    <li id="p"><a name="p" class="title">p</a>
     <ul>
     <?php echo $cont->selectNamesP(); ?>
     </ul>
     </li>
     <li id="q"><a name="q" class="title">q</a>
    <ul>
     <?php echo $cont->selectNamesQ(); ?>
       </ul>
      </li>
     <li id="r"><a name="r" class="title">r</a>
       <ul>
      <?php echo $cont->selectNamesR(); ?>
    </ul>
     </li>
    <li id="s"><a name="s" class="title">s</a>
       <ul>
     <?php echo $cont->selectNamesS(); ?>
     </ul>
    </li>
    <li id="t"><a name="t" class="title">t</a>
   <ul>
     <?php echo $cont->selectNamesT(); ?>
 </ul>
    </li>
    <li id="u"><a name="u" class="title">u</a>
   <ul>
   <?php echo $cont->selectNamesU(); ?>
    </ul>
    </li>
  <li id="v"><a name="v" class="title">v</a>
     <ul>
       <?php echo $cont->selectNamesV(); ?>
     </ul>
  </li>
    <li id="w"><a name="w" class="title">w</a>
    <ul>
    <?php echo $cont->selectNamesW(); ?>
      </ul>
     </li>
    <li id="x"><a name="x" class="title">x</a>
        <ul>
      <?php echo $cont->selectNamesX(); ?>
  </ul>
   </li>
    <li id="y"><a name="y" class="title">y</a>
       <ul>
      <?php echo $cont->selectNamesY(); ?>
      </ul>
     </li>
      <li id="z"><a name="z" class="title">z</a>
      <ul>
      <?php echo $cont->selectNamesX(); ?>
     </ul>
    </li>
      </ul>
     </div>
    </div>
     </div>                                                                                         
            </div>

             <div class="col-md-8">
                                                <div id="contact-card" class="panel panel-default">
                                                  <div class="panel-heading">
                                                    <h2 class="panel-title">John Doe</h2>
                                                  </div>
                                                  <div class="panel-body">
                                                    <div id="card" class="row">
                                                        <div class="col-md-6 headshot">
                                                            <img src="img/addressbook/1.jpg" alt="" height="200" width="200"/>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <table class="table table-hover">
                                                                <tbody>
                                                                  <tr>                  
                                                                    <td><i class="fa fa-font"></i> Name</td>
                                                                    <td id="card-name">John Doe</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td><i class="fa fa-home"></i> Address</td>
                                                                    <td id="card-address">795 Folsom Ave, Suite 600
                                                                        San Francisco, CA 94107
                                                                        P: (123) 456-7890 </td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td><i class="fa fa-phone"></i> Phone</td>
                                                                    <td id="card-phone">+001 8753-3648-002</td>
                                                                  </tr>
                                                                   <tr>
                                                                    <td><i class="fa fa-phone"></i> Mobile</td>
                                                                    <td id ="card-mobile">+001 8753-3648-002</td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td><i class="fa fa-envelope"></i> Email</td>
                                                                    <td id="card-email">sampleemail@gmail.com</td>
                                                                  </tr>


                                                                </tbody>

                                                          </table>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <button id="delete" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /BOX -->
                            </div>
                        </div>
</section>
<!-- add contact modal -->
  <div class="modal" id="modal-add-edit-contact" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                  <h4 class="modal-title" id="modal-username">
                    Add_new_contact
                  </h4>
                </div>
                <div class="modal-body" id="details-body">
                    <form class="form-horizontal" id="add-user-form" enctype="multipart/form-data" method="POST"> 
                      <input type="hidden" id="addcontact-contact_id" />
                      <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-email">
                    email
                        </label>
                        <div class="controls col-lg-9">
                          <input id="addcontact-email" name="addcontact-email" type="text" class="input-xlarge form-control" >
                        </div>
                      </div>

                      <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-name">
                          name
                        </label>
                        <div class="controls col-lg-9">
                          <input id="addcontact-name" name="addcontact-name" type="text" class="input-xlarge form-control" >
                        </div>
                      </div>


                      <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-address">
                          address
                        </label>
                        <div class="controls col-lg-9">
                          <input id="addcontact-address" name="addcontact-address" type="text" class="input-xlarge form-control" >
                        </div>
                      </div>
                      <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-mobile">
                          mobile
                        </label>
                        <div class="controls col-lg-9">
                          <input id="addcontact-mobile" name="addcontact-mobile" type="text" class="input-xlarge form-control" >
                        </div>
                      </div>

                     <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-phone">
                        phone
                        </label>
                        <div class="controls col-lg-9">
                          <input id="addcontact-phone" name="addcontact-phone" type="text" class="input-xlarge form-control" >
                        </div>
                      </div>

                        <div class="control-group form-group">
                        <label class="control-label col-lg-3" for="addcontact-img">
                        Photo
                        </label>
                        <div class="controls col-lg-9">
                          <input type="file" multiple class="btn btn-primary" />
                        </div>
                      </div>

                      <hr />
        <!-- Show the images preview here -->
        <div id="upload-preview"></div>

                  </form>
                </div>
                <div align="center" class="ajax-loading"><img src="<?php echo $WI['theme_dir'] ?><?php echo $WI['img_admin'] ?>ajax_loader.gif" /></div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                      cancel
                    </a>
                    <a href="javascript:void(0);" id="btn-add-contact" class="btn btn-primary">
                      add
                    </a>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
           
     <script type="text/javascript" src="js/jQuery v2.0.3.js"></script>
     <script type="text/javascript">
var jQuery_v2_0_3 = $.noConflict(true);
</script>
    <script type="text/javascript" src="js/slidernav.js/slidernav.js"></script>
    <script type="text/javascript" src="WICore/js/WICore.js"></script>
   <script type="text/javascript" src="WICore/js/contacts.js"></script>
  <!--jQuery(document).ready(function  -->

    <script>
     jQuery_v2_0_3(document).ready(function() { 
        handleSliderNav();  
        
        });
            var handleSliderNav = function () {
        $('#address-book').sliderNav();
        
        $('#address-book .slider-content ul li ul li a').click(function(e){
            e.preventDefault();
            var contact_card = $('#contact-card');
            //Get the name clicked on
            var name = $(this).text();
            //alert(name);

        $.ajax({
        type: "POST",
        url: "WICore/WIClass/WIAjax.php",
        data: { action : "displayCont", name : name },
        success : function (result){
          //consol_log(result);
          var jsonData = JSON.parse(result);
         // alert(jsonData);
          var name = jsonData["0"][2];
          var address = jsonData["0"][3];
          var phone  = jsonData["0"][4];
          var mobile  = jsonData["0"][5];
          var email  = jsonData["0"][6];
          var image = jsonData['0'][7];

            //Set the name
            $('#contact-card .panel-title').html(name);
            $('#contact-card #card-name').html(name);
            $('#contact-card #card-address').html(address);
            $('#contact-card #card-phone').html(phone);
            $('#contact-card #card-mobile').html(mobile);
            $('#contact-card #card-email').html(email);
            $('#contact-card .headshot img').attr('src', +image+'.jpg');
            //Randomize the image
            //var img_id = Math.floor(Math.random() * (5 - 1 + 1)) + 1;
            //Set the image
           // $('#contact-card .headshot img').attr('src', 'img/addressbook/'+img_id+'.jpg');
            contact_card.removeClass('animated fadeInUp').addClass('animated fadeInUp');
            var wait = window.setTimeout( function(){
                contact_card.removeClass('animated fadeInUp')},
                1300
            );
        }
    });
    });
    };
    </script>
    <!-- /JAVASCRIPTS -->
