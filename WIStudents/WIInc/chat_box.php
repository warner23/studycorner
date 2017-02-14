
    <div class="WI_Taylors_chat" id="WI_Taylors_chat"> 
		<a class="btn btn-default btn-xs" onclick="WIChat.Open()" alt="open">Chat</a>

                 <!-- chat box -->

          
<div class="chat" id="chat" style="display: none">

<div class="chatBox">
    <a class="closebutton" onclick="WIChat.Close()">Close</a>                
</div>

<div class="chat_inner">

    <div class="course_form" id="course_form" style="display: block;">
        <form id="submit_course_form">
            <div class="col-md-12 student" id="<?php echo WISession::get('user_id');  ?>">

             <fieldset>
                      <div id="legend">
                        <legend class="">Live Chat Submit Form</legend>
                      </div>    
                      <div class="control-group form-group">
                        <!-- Username -->
                        <label class="control-label col-lg-4 Live_chat"  for="name">Name</label>
                        <div class="controls col-lg-8">
                          <input type="text" id="name" name="chat_name" placeholder="Name" class="input-xlarge form-control"> <br />
                        </div>
                      </div>

                      <div class="control-group form-group">
                        <!-- Password-->
                        <label class="control-label col-lg-4 Live_chat" for="question">Question</label>
                        <div class="controls col-lg-8">
                          <textarea type="text" id="question" class="input-xlarge form-control"></textarea>
                        </div>
                      </div>
 
 
                      <div class="control-group form-group">
                        <!-- Button -->
                        <div class="controls col-lg-offset-4 col-lg-8">
                          <button id="chat_submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </fieldset>
            </div>
        </form>

    </div>

</div>

</div><!-- chatBox-->
            <!-- end chat box -->
		</div>