$(document).ready(function() {
              $(".custom_col").slice(0, 4).show();
              $(".load-more-text").click(function(e) {
                e.preventDefault();
                $(".custom_col:hidden").slice(0, 4).show();
                if ($(".custom_col:hidden").length == 0) {
                  //$("#loadMore").text("No Content").addClass("noContent");
                  $(".load-more-text").hide();
                }
              });
            })