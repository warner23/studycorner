
/** contacts NAMESPACE
 ======================================== */


var contacts = {};

contacts.addEditData = {
     name          : $("#addcontact-name"),
    email         : $("#addcontact-email"),
    address       : $("#addcontact-address"),
    phone         : $("#addcontact-phone"),
    mobile        : $("#addcontact-mobile"),
    image         : $('#addcontact-img'),
    button        : $("#btn-add-contact")
};

contacts.displayInfo = function (userId) {
    var username    = $("#modal-username"),
        email       = $("#modal-email"),
        firstName   = $("#modal-first-name"),
        lastName    = $("#modal-last-name"),
        address     = $("#modal-address"),
        phone       = $("#modal-phone"),
        image       = $('#addcontact-img'),
        last_login  = $("#modal-last-login"),
        ajaxLoading = $("#ajax-loading"),
        detailsBody = $("#details-body"),
        modal       = $("#modal-user-details");

   //display modal
   modal.modal('show');

   // set username (title of modal window) to loading...
   username.text($_lang.loading);
   
   //display ajax loading gif
   ajaxLoading.show();
   
   //hide details body
   detailsBody.hide();
   
   $.ajax({
       url: "WICore/WIClass/WIAjax.php",
       type: "POST",
       data: {
           action: "getUserDetails",
           userId: userId
       },
       success: function (result) {
           //parse result as JSON
           var res = JSON.parse(result);
           
           //update modal fields
           username .text(res.username);
           email    .text(res.email);
           firstName.text(res.first_name);
           lastName .text(res.last_name);
           address  .text(res.address);
           phone    .text(res.phone);
           last_login.text(res.last_login);

           //hide ajax loading
           ajaxLoading.hide();
           
           //display user info
           detailsBody.show();
       }
   });
   


};


/**
 * Deletes an user.
 * @param {object} element Clicked DOM element.
 * @param {int} userId Id of user that will be deleted.
 */
contacts.deleteUser = function (element, userId) {
        //get whole user row that will be deleted
	var userRow = $(element).parents(".user-row");
        
        //ask admin to confirm that he want to delete this user
	var c = confirm($_lang.are_you_sure);
	if(c) {
                //confimed
                
                 //send data to server
		$.ajax({
			type: "POST",
			url: "WICore/WIClass/WIAjax.php",
			data: {
				action: "deleteUser",
				userId: userId
			},
			success: function (result) {
				  console.log(result);
                                
          //remove user row from table
  				userRow.fadeOut(600, function () {
  					 $(this).remove();
  				});
			}
		});
	}
};


/**
 * Changes user's role.
 * @param {Object} Clicked DOM element.
 * @param {int} userId User ID.
 */
contacts.changeRole = function (element, role, userId) {
  //send data to server
	$.ajax({
		type: "POST",
		url: "WICore/WIClass/WIAjax.php",
		data: {
			action: "changeRole",
		  	userId: userId,
            role  : role
		},
		success: function (newRole) {
            //change button text
			element.text(newRole);
		}
	});
};


contacts.roleChanger = function (element, userId) {
    $("#modal-change-role").modal({
        keyboard: false,
        backdrop: "static",
        show: true
    });

   //find elements needed for changing text
    var userRoleSpan = $(element).parents(".btn-group").find(".user-role");

    $("#change-role-button").unbind().bind('click', function () {
        var newRole = $("#select-user-role").val();
        users.changeRole(userRoleSpan, newRole, userId);
    });
};


contacts.showAddContactsModal = function () {
    $("#modal-add-edit-user").modal({
        keyboard: false,
        backdrop: "static",
        show: true
    });


    $("#modal-name").text($_lang.add_new_contact);
    WICore.removeErrorMessages();

    $("#add-user-form input[type='text'], #add-user-form input[type='password']").each(function () {
        $(this).val('');
    });

        $("#add-user-form input[type='file'], #output").each(function () {
        $(this).val('');
    });


   


    contacts.addEditData.button.attr('onclick', 'contacts.addNewContact();');
};


contacts.addNewContact = function (editMode) {
    var data  = contacts.addEditData;
    var modal = $("#modal-add-edit-user");
    var btn   = $("#btn-add-contact");

    var image = new FormData();

    //alert(image);
    //console.log(image);

    //var img = $("#output").attr('src');
    //var str = document.getElementById("output").innerHTML;

    //var img_id = Math.floor(Math.random() * (5 - 1 + 1)) + 1;

alert(image);

    if ( editMode )
        var forUpdate = true;
    else
        var forUpdate = false;

    if ( contacts._validateUser(data, forUpdate) ) {

        var action = "addContact";
        var userId = 0;

        if ( editMode === true ) {
            action = "updateUser";
            userId = $("#adduser-userId").val();
        }


        //create data object that will be sent to server
        var forServer = { 
            action : action,
            userData: {
                name       : data.name.val(),
                address    : data.address.val(),
                phone      : data.phone.val(),
                mobile     : data.mobile.val(),
                email      : data.email.val(),
                image      : data.image.val(),
 
            },
            fieldId: {
                name       : "addcontact-name",
                address    : "addcontact-address",
                phone      : "addcontact-phone",
                mobile     : "addcontact-mobile",
                email      : "addcontact-email",
                image      : "addcontact-img",  
            }
        };

        //put button to loading state
        WICore.loadingButton(btn, $_lang.working);

        $.ajax({
            type: "POST",
            url: "WICore/WIClass/WIAjax.php",
            data: forServer,
            success: function ( result ) {
                //return button to normal state
                WICore.removeLoadingButton(btn);
                
                //parse result to JSON
                var res = JSON.parse(result);

                if(res.status === "error") {
                    //error
                    
                    //display all errors
                    for(var i=0; i<res.errors.length; i++) {
                        var error = res.errors[i];
                        WICore.displayErrorMessage($("#"+error.id), error.msg);
                    }
                }
                else {
                   location.reload();
                }
            }
        });
    }
};

contacts.updateUser = function () {
    contacts.addUser(true);
};

contacts.editUser = function (userId) {
    $("#adduser-userId").val(userId);

    var modal = $("#modal-add-edit-user"),
        data  = users.addEditData,
        modalTitle = modal.find(".modal-title"),
        modalBody  = modal.find(".modal-body"),
        ajaxLoading = modal.find(".ajax-loading");

    data.button.attr('onclick', 'users.updateUser();');

    WICore.removeErrorMessages();
    
    modal.modal('show');
    modalTitle.text($_lang.loading);
    modalBody.hide();
    ajaxLoading.show();

    $.ajax({
        type: "POST",
        url: "WICore/WIClass/WIAjax.php",
        data: { action : "getUser", userId : userId },
        success : function (result) {
            //parse result to JSON
            var res = JSON.parse(result);

            data.email.val( res.email );
            data.username.val( res.username );
            data.firstName.val( res.first_name );
            data.lastName.val( res.last_name );
            data.address.val( res.address );
            data.phone.val( res.phone );

            data.password.attr('placeholder', $_lang.leave_blank);
            data.conf_password.attr('placeholder', $_lang.leave_blank);

            data.button.text($_lang.update);

            ajaxLoading.hide();
            modalTitle.text( res.username );
            modalBody.show();
        }
    });
};


contacts._validateUser = function (data, forUpdate) {
    var valid = true;

    //remove previous error messages
    WICore.removeErrorMessages();

    // validate username
    if ( $.trim( data.name.val() ) == "" ) {
        valid = false;
        WICore.displayErrorMessage( data.name, $_lang.field_required );
    }

    // validate email
    if ( $.trim( data.email.val() ) == "" ) {
        valid = false;
        WICore.displayErrorMessage( data.email, $_lang.field_required );
    }
    else if ( ! WICore.validateEmail( data.email.val() ) ) {
        valid = false;
        WICore.displayErrorMessage( data.email, $_lang.email_wrong_format );
    }

    // validate passwords



    

    return valid;
};



