$.ajax({
  url: "http://localhost/Web-Project/php/see_reports_data.php",
  type: "GET",
  dataType: "json",
  success: function (data) {
    console.log(data);
    var html_append = "";
    $.each(data, function (index, item) {
      html_append +=
        "<div class='preview' id='news-item' data-id='" +
        item.id +
        "' data-animal_type='" +
        item.animal_type +
        "' data-city='" +
        item.city +
        "' data-street='" +
        item.street +
        "' data-description='" +
        item.descriptions +
        "' data-additional_aspects='" +
        item.additional_aspects +
        "'>" +
        "<strong>Type: " +
        item.animal_type +
        "</strong><br>" +
        "<img src='assets/Logo.png' class='news-logo' alt='logo'>" +
        "<img src='" +
        item.image +
        "' class='news-image' alt='animals'>" +
        "<div class='news-description'>" +
        "<strong>Details:</strong><br>" +
        item.descriptions +
        "<br>" +
        item.additional_aspects +
        "<br>" +
        item.city +
        ". " +
        item.street +
        ".<br>..." +
        "</div>" +
        "</div>";
    });
    $("#news").html(html_append);

    $(".preview").click(function () {
      var reportData = {
        id: $(this).data("id"),
        animal_type: $(this).data("animal_type"),
        city: $(this).data("city"),
        street: $(this).data("street"),
        descriptions: $(this).data("description"),
        additional_aspects: $(this).data("additional_aspects"),
      };

      localStorage.setItem("reportData", JSON.stringify(reportData));
      window.location.href = "post.html";
    });
  },
  error: function (xhr, status, error) {
    console.error("Error: " + error);
  },
});
