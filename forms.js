$("#reset").on("click", function () {
  $('#my_select option').prop('selected', function() {
    return this.defaultSelected;
  });
});


// --------------------

