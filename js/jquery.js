$(document).ready(function () {
  //Handing the admin page
  $.ajax({
    url: "listofusers.php",
    dataType: "json",
    method: "POST",
    data: "none",
    success: function (data) {
      $.each(data, function (index, users) {
        $("#loadusers").append(
          "<tr><td>" +
            users.id +
            "</td>" +
            "<td>" +
            users.Fname +
            "</td>" +
            "<td>" +
            users.LName +
            "</td>" +
            "<td>" +
            users.email +
            "</td></tr>"
        );
      });
    },

    error: function (data) {
      alert("ERROR outputting users");
    },
  });

  //Handing photos
  $.ajax({
    url: "uploadedImages.php",
    dataType: "json",
    method: "POST",
    data: "none",
    success: function (data) {
      $.each(data, function (index, photos) {
        $("#photodump").append(
          "<div class='col-lg-6 travel-left'><div class='single-travel media pb-70'><img class='smallimg img-fluid d-flex  mr-3' src='http://cit.marshall.edu/CIT313/uploads/" +
            photos.Filename +
            "' /><div class='media-body align-self-center'><h4 class='mt-0'><a href='viewphoto?picture=" +
            photos.id +
            "'>" +
            photos.Title +
            "</a></h4><p>" +
            photos.Summary +
            "<br /> Posted by: " +
            photos.First +
            " " +
            photos.Last +
            "</p>" +
            "<div class='meta-bottom d-flex justify-content-between'><p><span class='lnr lnr-heart'></span>" +
            photos.Likes +
            " Likes</p><p><span class='lnr lnr-bubble'></span> 02 Comments</p></div></div>"
        );
      });
    },

    error: function (data) {
      alert("ERROR outputting photos");
    },
  });
});
