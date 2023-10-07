$(document).ready(function () {
    var table = $('#category_table').DataTable();
    categoryList(table); // Call the function to load category data

    // Initialize form validation
    $('#addform').validate({
      rules: {
          name_input: {
              required: true
          },
          description_input: {
              required: true
          }
      },
      messages: {
          name_input: {
              required: "Please enter the name"
          }, description_input: {
            required: "Please enter the description"
        }
      },
      submitHandler: function () {
          addcategory(); // Call the function to add a new category
      }
  });
});

function categoryList(table) {
    $.ajax({
        type: 'get',
        url: "category/category-list.php", // Replace with the correct URL for fetching category data from the server
        success: function (data) {
            var response = JSON.parse(data);
            console.log(response);

            table.clear();

            for (var i = 0; i < response.length; i++) {
                var id = response[i].id;
                var name = response[i].name;
                var description = response[i].description;

                var actionButtons = '<div class="d-flex">';
                actionButtons += '<a href="#viewcategoryModal" class="m-1 view" data-toggle="modal" onclick=viewcategory("' + id + '")><i class="fa" data-toggle="tooltip" title="View">&#xf06e;</i></a>';
                actionButtons += '<a href="#editcategoryModal" class="m-1 edit" data-toggle="modal" onclick=editcategory("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
                actionButtons += '<a href="#deletecategoryModal" class="m-1 delete" data-toggle="modal" onclick=deletecategory("' + id + '")><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';
                actionButtons += '</div>';

                table.row.add([id, name, description, actionButtons]).draw(false);
            }

            $('.loading').hide();
        }
    });
}

function addcategory() {
    var name = $('#name_input').val();
    var description = $('#description_input').val();

    $.ajax({
        type: 'post',
        data: {
            name: name,
            description: description
        },
        url: "category/category-add.php", // Replace with the correct URL for adding category data to the server
        success: function (data) {
            var response = JSON.parse(data);
            $('#addcategoryModal').modal('hide');
            alert(response.message);

            var table = $('#category_table').DataTable();
            categoryList(table);

            // Clear the form fields
            $('#addform')[0].reset();
        }
    });
}

function editcategory(id) {
    // Fetch category data for the selected id using AJAX and populate the edit modal
    $.ajax({
        type: 'get',
        data: {
            id: id
        },
        url: "category/category-view.php", // Replace with the correct URL for fetching category data by ID
        success: function (data) {
            var response = JSON.parse(data);
            $('.edit_category #name_input').val(response.name);
            $('.edit_category #description_input').val(response.description);
            $('#category_id').val(id); // Set the category_id input value for update
        }
    });
}

function deletecategory(id) {
    // Perform category deletion using AJAX and reload the category list
    $.ajax({
        type: 'get',
        data: {
            id: id
        },
        url: "category/category-delete.php", // Replace with the correct URL for deleting category data by ID
        success: function (data) {
            var response = JSON.parse(data);
            alert(response.message);

            var table = $('#category_table').DataTable();
            categoryList(table);
        }
    });
}

function viewcategory(id) {
    // Fetch category data for the selected id using AJAX and populate the view modal
    $.ajax({
        type: 'get',
        data: {
            id: id
        },
        url: "category/category-view.php", // Replace with the correct URL for fetching category data by ID
        success: function (data) {
            var response = JSON.parse(data);
            $('.view_category #name_input').val(response.name);
            $('.view_category #description_input').val(response.description);
        }
    });
}
