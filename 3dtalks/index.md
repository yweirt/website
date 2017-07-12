---
layout: page
title:  "3D talks: our series of seminars"
permalink: /3dtalks/
---


<div class="row">
  <div class="col-xs-4 col-md-3">
    <img src="{{ "/img/logos/3d-gcv-talk.png" | prepend: site.baseurl }}"/>
  </div>
  <div class="col-xs-8 col-md-9">
    <p>Every 2 weeks, we hold talks about one aspect of 3D geospatial vision
    Either one staff of the group presents their latest results, or we invite someone from another university or from a company to present their results and/or latest developments.</p>
    <p>These are usually Fridays at 11:00&ndash;12:00, and everyone is welcome to join.</p>
    <p>
    Add this <a href="https://yweirt.github.io/3dtalks/3dtalks.ics">ICS file</a> to your calendar application, it will be automatically updated.
    </p>
  </div>
</div>


- - -

## Upcoming talks

{% assign today = 'now' | date: "%Y%m%d" %}
{% assign talks = site.data.3dtalks | sort: 'date' %}


<div class="table-responsive">

<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presenter</td>
    <td>Title</td>
    <td>Room (at <a href="https://www.polyu.edu.hk/cpa/campus_guide/en/bkz.php/">BK-City</a>)</td>
    <td>Time</td>
  </tr>

  {% for i in talks %}
  {% assign a = i.date | date: "%Y%m%d" %}
  {% if a >= today %}
    <tr>
      <td>{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.room }}</td>
      <td>{{ i.time }}</td>
    </tr>
  {% endif %}  
  {% endfor %}

</table> 
</div>   

- - -

## Past talks

<div class="table-responsive">
<table class="table table-striped">

  <tr class="info">
    <td>Date</td>
    <td>Presenter</td>
    <td>Title</td>
    <td>Slides</td>
  </tr>

  {% for i in talks reversed %}
  {% assign a = i.date | date: "%Y%m%d" %}
  {% if a < today %}
    <tr>
      <td>{{ i.date  }}</td>
      <td>{{ i.name | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      <td>{{ i.title | markdownify | remove: '<p>' | remove: '</p>' }}</td>
      {% if i.ppt %}
      <td><a href="https://lsgi.polyu.edu.hk/pdfs/3dtalks/{{ i.ppt }}"><i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
      {% endif %}
    </tr>
  {% endif %}  
  {% endfor %}

</table>    
</div>