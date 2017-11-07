<!DOCTYPE html>
<html lang="{{currentLang}}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="{{appName}}" />
    <title>{{pageTitle}} | {{appName}}</title>
    <!-- Styles -->
    {{stylesheetLink('vendor/bootstrap/dist/css/bootstrap.min.css')}}
    {{stylesheetLink('theme/css/portal.css')}}
  </head>
  <body class="{% block pageCSS %}{% endblock %}">

    <div class="container">
      {% block content %}{% endblock %}
    </div>

    <!-- Scripts -->
    {{javascriptInclude('vendor/jquery/dist/jquery.min.js')}}
    {{javascriptInclude('vendor/popper.js/dist/umd/popper.min.js')}}
    {{javascriptInclude('vendor/bootstrap/dist/js/bootstrap.min.js')}}
  </body>
</html>
