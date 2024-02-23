
var checkboxes = document.querySelectorAll(".inp-cbx");
var checkboxesRating = document.querySelectorAll(".inp2-cbx");

checkboxes.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    checkboxes.forEach(function (otherCheckbox) {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});
checkboxesRating.forEach(function (checkbox) {
  checkbox.addEventListener("change", function () {
    checkboxesRating.forEach(function (otherCheckbox) {
      if (otherCheckbox !== checkbox) {
        otherCheckbox.checked = false;
      }
    });
  });
});
