{% extends 'layouts/portal.volt' %}

{% block pageCSS %}signup-page{% endblock %}

{% block content %}
<div class="signup">
  <h3>{{translate._('LABEL_SIGNUP')}}</h3>
  {{form()}}

  {{ form.render('_token', ['value': security.getToken()]) }}

  <div class="form-group">
    <label for="fullname">{{translate._('LABEL_FULLNAME')}}</label>
    {{form.render('fullname')}}
    {{ form.messages('fullname') }}
  </div>

  <div class="form-group">
    <label for="email">{{translate._('LABEL_EMAIL')}}</label>
    {{form.render('email')}}
  </div>

  <div class="form-group">
    <label for="password">{{translate._('LABEL_PASSWORD')}}</label>
    {{form.render('password')}}
  </div>

  <div class="form-group">
    <label for="passconf">{{translate._('LABEL_PASSCONF')}}</label>
    {{form.render('passconf')}}
  </div>

  <div class="form-group">
    <label for="phonenumber">{{translate._('LABEL_PHONENUMBER')}}</label>
    {{form.render('phonenumber')}}
  </div>

  <button type="submit" class="btn btn-success">{{translate._('BTN_SIGNUP')}}</button>

  {{end_form()}}
  <div class="go-signin">
    {{translate._('LABEL_ALREADYHASACCOUNT')}} ? <a href="#">{{translate._('BTN_SIGNIN')}}</a>
  </div>
</div>
{% endblock %}
