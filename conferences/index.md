---
layout: page
title: Some geoinformatics conferences relevant to us
permalink: /conferences/
---

<!-- Some conferences that are relevant and interesting to the members of our group. 

This is not meant to be an exhaustive list of all conferences. -->


{% assign today = 'now' | date: "%s" %}
{% assign confs = site.data.conferences | sort: 'start' %}

<table class="table table-striped">

  <tr class="info">
    <td></td>
    <td></td>
    <td>Upcoming Conferences</a></td>
    <td></td>
  </tr>


<!-- future conferences first -->
  {% for i in confs %}
    {% assign a = i.end | date: "%s" %}
    {% if a >= today %}
    <tr>
      <td>{{ i.start  }}</td>
      <td>{{ i.end }}</td>
      <td><a href="{{ i.url }}">{{ i.name }}</a></td>
      <td>{{ i.place }}</td>
    </tr>
    {% endif %}
  {% endfor %}

    <tr class="info">
      <td></td>
      <td></td>
      <td>Past Conferences</a></td>
      <td></td>
    </tr>

{% assign oldconfs = site.data.conferences | sort: 'start' %}

<!-- past conferences -->
  {% for i in oldconfs reversed %}
    {% assign a = i.end | date: "%s" %}
    {% if a < today %}
    <tr>
      <td>{{ i.start  }}</td>
      <td>{{ i.end }}</td>
      <td><a href="{{ i.url }}">{{ i.name }}</a></td>
      <td>{{ i.place }}</td>
    </tr>
    {% endif %}
  {% endfor %}

</table>



