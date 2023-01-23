<!DOCTYPE html>
<html>

<head>

</head>

<body>
  <div id="about-us-container"></div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    function renderAboutUsView() {
      var AboutUsView = Backbone.View.extend({
        template: _.template(function() {
          return "<h1>About Us</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel dictum vehicula, neque magna bibendum velit, a tempor augue magna sit amet tellus. Sed eget urna ac nibh bibendum tempor. Integer euismod malesuada odio, non auctor erat. Sed euismod, ipsum quis volutpat tincidunt, eros enim congue mauris, id elementum velit augue eget magna. Aliquam erat volutpat. Nam auctor eros vel velit porta, id tempus velit feugiat. Sed vel mauris quis justo elementum volutpat. Aliquam erat volutpat. Sed luctus diam id risus tristique, at fringilla odio dapibus. Sed eget tellus euismod, fermentum odio id, fringilla metus. Sed euismod, ipsum quis volutpat tincidunt, eros enim congue mauris, id elementum velit augue eget magna. Aliquam erat volutpat.</p>";
        }),
        render: function() {
          this.$el.html(this.template());
          return this;
        },
      });
      var aboutUsView = new AboutUsView({
        el: $("#about-us-container")[0]
      });

      aboutUsView.render();
    }
    renderAboutUsView();
  });
  </script>
</body>

</html>