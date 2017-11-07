{% extends "layouts/workplace.volt" %}

{% block content %}
<div class="row">
  <div class="col-lg-4">
   <div class="card">
     <div class="card-header">
       {{translate._('LABEL_BLOG_CATE_ADD')}}
     </div>
     <div class="card-body">
       {{form()}}
        <div class="form-group">
          <label for="name">{{translate._('LABEL_BLOG_CATEGORY_NAME')}}</label>
          {{form.render('name')}}
        </div>
        <button type="submit" class="btn btn-success">{{translate._('BTN_ADD')}}</button>
       {{end_form()}}
     </div>
   </div>
  </div>
  <div class="col-lg-8">
    <div class="card">
      <div class="card-header">

      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th>{{translate._('LABEL_BLOG_CATEGORY_ID')}}</th>
              <th>{{translate._('LABEL_BLOG_CATEGORY_NAME')}}</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
{% endblock %}
