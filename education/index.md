---
layout: page
title: Education
permalink: /education/
---

<section id="courses"></section>
<h2><a href="http://www.lsgi.polyu.edu.hk/prospective-students/degrees-and-qualifications/master-of-science-in-geomatics/index.asp">BSc/MSc Geomatics</a> courses we are teaching in</h2>

  * [LSGI1002](http://www.studiegids.tude): Geographical information systems
  * [LSGI1004](http://www.studiegids.tudel): 3D Modelling of the Built Environment
  * [LSGI1005](http://www.studiegids.tudel): Spatial Vision for Planning and Crisis Management
  * [LSGI1008](http://www.studiegids.tudelft): Geo Datasets 
  <!-- * [GEO2001](http://www.studiegids.tudelft.nl/a101_displayCourse.do?course_id=30706): Synthesis Project -->
  * [LSGI2010](http://www.lsgi.polyu.edu.hk/prospective-students/degrees-and-qualifications/master-of-science-in-geomatics/index.asp): Graduation thesis preparation
  * [LSGI2020](http://www.lsgi.polyu.edu.hk/prospective-students/degrees-and-qualifications/master-of-science-in-geomatics/index.asp): Graduation thesis

- - -

<section id="theses"></section>
<h2>Looking for a MSc thesis topic?</h2>

We have a [list of potential topics](msctopics).


- - - 

## MSc thesis projects -- Ongoing

{% assign msc = site.data.mscnow | sort: 'surname' %}

<div class="row">
{% for i in msc %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/>
      <div class="caption">
        <h3>{{ i.name }} {{ i.surname }}</h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

- - -

## MSc thesis projects -- Completed


{% assign years = site.data.mscfinished | group_by: "year" %}

{% assign sorted_years = years | sort: 'name' %}

{% for year in sorted_years reversed %}

<h3> {{ year.name }} </h3>

{% assign sorted_people = year.items | sort: 'surname' %}

<div class="row">
{% for i in sorted_people %}
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <a href="{{ i.link }}"><img src="{{ "/img/msc/" | append: i.image | prepend: site.baseurl }}"/></a>
      <div class="caption">
        <h3>
        {% if i.swapnames == False %}
          {{ i.name }} {{ i.van }} {{ i.surname }}
        {% else %}
          {{ i.surname }} {{ i.name }}
        {% endif %}
          <br />
          <small>({{ i.year }})</small>
        {% if i.link %}
          <small><a href="{{ i.link }}"><i class="fa fa-book" title="thesis"></i></a></small>
        {% endif %}
        {% if i.paper %}
          <small><a href="{{ i.paper }}"><i class="fa fa-file-text" title="paper"></i></a></small>
        {% endif %}
        {% if i.github %}
          <small><a href="{{ i.github }}"><i class="fa fa-github" title="github"></i></a></small> 
        {% endif %}
        </h3>
        <p>{{ i.title }}</p>
      </div>
    </div>
  </div>
{% endfor %}
</div>

{% endfor %}



