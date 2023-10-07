$(document).ready(function() {
  var table = $('#client_table').DataTable();
  clientList(table);

  // Initialize form validation
  $('#addform').validate({
      rules: {
          name_input: {
              required: true
          },
          phone_input: {
              required: true
          },
          address_input: {
              required: true
          }
      },
      messages: {
          name_input: {
              required: "Please enter the name"
          },
          phone_input: {
              required: "Please enter the phone number"
          },
          address_input: {
              required: "Please enter the address"
          }
      },
      submitHandler: function(form) { // Handle form submission inside this function
          addclient(); // Call the function to add the client
          return false; // Prevent default form submission
      }
  });
});


// Rest of your code remains unchanged...



function clientList(table) {
  $.ajax({
    type: 'get',
    url: "client/client-list.php",
    success: function(data) {
      var response = JSON.parse(data);
      console.log(response);

      table.clear();

      for (var i = 0; i < response.length; i++) {
        var id = response[i].id;
        var name = response[i].name;
        var phone = response[i].phone;
        var address = response[i].address;

        var actionButtons = '<div class="d-flex">';
        actionButtons += '<a href="#viewclientModal" class="m-1 view" data-toggle="modal" onclick=viewclient("' + id + '")><i class="fa" data-toggle="tooltip" title="view">&#xf06e;</i></a>';
        actionButtons += '<a href="#editclientModal" class="m-1 edit" data-toggle="modal" onclick=viewclient("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
        actionButtons += '<a href="#deleteclientModal" class="m-1 delete" data-toggle="modal" onclick=$("#delete_id").val("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
        actionButtons += '</div>';

        table.row.add([id, name,  phone, address, actionButtons]).draw(false);
        // Include the actionButtons variable in the row data
      }

      $('.loading').hide();
    }
  });
}

function addclient() {
    
  var name = $('.add_epmployee #name_input').val();
  var phone = $('.add_epmployee #phone_input').val();
  var address = $('.add_epmployee #address_input').val();
if((name&&phone&&address)!=null){
  $.ajax({
    type: 'post',
    data: {
      name: name,
      phone: phone,
      address: address,
    },
    url: "client/client-add.php",
    success: function(data) {
      var response = JSON.parse(data);
      $('#addclientModal').modal('hide');
      alert(response.message);
      var table = $('#client_table').DataTable(); // Create a new DataTable instance
      clientList(table);
    }
  });
}}

function editclient() {
  var name = $('.edit_client #name_input').val();
  var phone = $('.edit_client #phone_input').val();
  var address = $('.edit_client #address_input').val();
  var client_id = $('.edit_client #client_id').val();

  $.ajax({
    type: 'post',
    data: {
      name: name,
      phone: phone,
      address: address,
      client_id: client_id,
    },
    url: "client/client-edit.php",
    success: function(data) {
      var response = JSON.parse(data);
      $('#editclientModal').modal('hide');
      alert(response.message);
      var table = $('#client_table').DataTable(); // Create a new DataTable instance
      clientList(table);
    }
  });
}

function deleteclient() {
  var id = $('#delete_id').val();
  $('#deleteclientModal').modal('hide');
  $.ajax({
    type: 'get',
    data: {
      id: id,
    },
    url: "client/client-delete.php",
    success: function(data) {
      var response = JSON.parse(data);
      alert(response.message);
      var table = $('#client_table').DataTable(); // Create a new DataTable instance
      clientList(table);
    }
  });
}

function viewclient(id = 2) {
  $.ajax({
    type: 'get',
    data: {
      id: id,
    },
    url: "client/client-view.php",
    success: function(data) {
      var response = JSON.parse(data);
      $('.edit_client #name_input').val(response.name);
      $('.edit_client #phone_input').val(response.phone);
      $('.edit_client #address_input').val(response.address);
      $('.edit_client #client_id').val(response.id);
      $('.view_client #name_input').val(response.name);
      $('.view_client #phone_input').val(response.phone);
      $('.view_client #address_input').val(response.address);
      // Open the edit modal after populating the form fields
      $('#editclientModal').modal('show');
    }
  });
}
