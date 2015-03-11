---
layout: page
title: Applications of 3D city models
permalink: /applications/
---

<div class="alert alert-warning" role="alert">This website is under construction and it contains incomplete information.</div>

We have made a survey about the state of the art of applications of 3D city models. 
We have collected several applications, and we have documented them in a paper that is currently under submission:

<pre>State of the art of applications of 3D city models<br/>
ISPRS International Journal of Geo-Information</pre>

For easier maintenance and to keep the list current, we have built this website which we intend to update with the current information.

### Structure

For each use-case we have written a one-line description and in which application domains it is used. Further, where available, we have put examples of open-source code.

### Copyright

You are free to use this list if you find it useful. In such case please cite the paper above and mention the 3D geoinformation group at TU Delft as the source.

### Maintenance and contact

The list of maintained by [Filip Biljecki](http://3dgeoinfo.bk.tudelft.nl/biljecki). If you are aware of a use-case that is not listed here, please contact him.

<hr>

# The list

{% for i in site.data.applications %}
<hr>
<div class="row">
  <div class="col-md-12">
     <h3>{{ i.name }}</h3>
     <p>{{ i.description }}</p>
     {% if i.github %}
        <p><i class="fa fa-github"></i> <a href="{{ i.github }}">{{ i.github }}</a></p>
     {% endif %}
     {% if i.domains %}
        <p>Application domains: {{ i.domains }}</p>
     {% endif %}
     {% if i.software %}
        <p>Software example: <i class="fa fa-external-link"></i> <a href="{{ i.software-link }}">{{ i.software }}</a></p>
     {% endif %}
  </div>
</div>
{% endfor %}

<hr>

This list has been updated on {{ site.time | date_to_string }}.

