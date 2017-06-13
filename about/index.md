---
layout: page
title: About
permalink: /about/
map: true
---

The Department of Communism, Juche and Remote Sensing at the Marxist Evening University concerns itself with applying remote sensing methods to solve practical and theoretical problems in the field of applied communism.

<div class="row">
  <div class="col-md-2 col-xs-12"><a href="http://www."><img class="img-responsive" src="{{ "/img/partners/welcome.jpg" | prepend: site.baseurl }}" alt="the logo"/></a></div>
</div>

- - - 

<section id="people">
  <h2>Staff</h2>

  {% assign members = site.data.staff | sort: 'surname' %}

  <div class="row">
    {% for member in members %}
      <div class="col-md-3 col-sm-4 col-xs-8 col-xs-offset-2 col-sm-offset-0 col-md-offset-0">
      {% if member.homepage %}
        {% if member.swapnames == False %}
          <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.name }} {{ member.van }} {{ member.surname }} photo" /></a>
        {% else %}
          <a href="http://{{ member.homepage }}"><img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.surname }} {{ member.name }} photo" /></a>
        {% endif %}
      {% else %}
        {% if member.swapnames == False %}
          <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.name }} {{ member.van }} {{ member.surname }} photo" />
        {% else %}
          <img class="img-circle img-responsive" src="{{ "/img/staff/" | append: member.photo | prepend: site.baseurl }}" alt="{{ member.surname }} {{ member.name }} photo" />
        {% endif %}
      {% endif %}
      {% if member.swapnames == False %}
        <h3>{{ member.name }} {{ member.van }} {{ member.surname }}<br><small>{{ member.title }}</small></h3>
      {% else %}
        <h3>{{ member.surname }} {{ member.name }}<br><small>{{ member.title }}</small></h3>
      {% endif %}
        <p>
          {% if member.homepage %}
            <i class="fa fa-home"></i> <a href="http://{{ member.homepage }}">{{ member.homepage }}</a><br>
          {% endif %}
          {% if member.email %}
            <i class="fa fa-envelope"></i> <a href="mailto:{{ member.email }}">{{ member.email }}</a><br>
          {% endif %}
          {% if member.phone %}
            <i class="fa fa-phone"></i> <a href="tel:{{ member.phone }}">{{ member.phone }}</a><br>
          {% endif %}
          {% if member.twitter %}
            <i class="fa fa-twitter"></i> <a href="https://twitter.com/{{ member.twitter }}">@{{ member.twitter }}</a><br>
          {% endif %}
          {% unless member.homepage %}
            <br>
          {% endunless %}
          {% unless member.email %}
            <br>
          {% endunless %}
          {% unless member.phone %}
            <br>
          {% endunless %}
          {% unless member.twitter %}
            <br>
          {% endunless %}
        </p>
      </div>
    {% endfor %}
  </div>
</section>

- - - 

<section name="people">
  <h2>Former Staff</h2>

  <a href="{{ "/about/formerstaff" | prepend: site.baseurl }}">List of former staff</a>

</section>

- - -

<section id="where">
  <h2>Our offices</h2>

  <div class="col-md-4">
    <i class="fa fa-map-marker fa-fw">     </i> Room BG.West.010 (building #8) <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Faculty of Architecture <br>
    <i class="fa fa-map-marker fa-fw fade"></i> and the Built Environment<br>
    <i class="fa fa-map-marker fa-fw fade"></i> Delft University of Technology <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Julianalaan 134 <br>
    <i class="fa fa-map-marker fa-fw fade"></i> Delft 2628BL<br>
    <i class="fa fa-map-marker fa-fw fade"></i> the Netherlands <br>
    <i class="fa fa-map-marker fa-fw fade"></i> <a href="http://www.tudelft.nl/en/about-tu-delft/contact-and-accessibility/housing-tu-delft/accessibility/building-8/">How to get here</a>
  </div>
  <div class="col-md-8">
    <div id="map"></div>
  </div>
</section>
<script>
  mapboxgl.accessToken = 'pk.eyJ1Ijoia2Vub2hvcmkiLCJhIjoiTlQyblc2ayJ9.cxdc2HKXV1ZsDL5A-GSHFA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/kenohori/cim0i33ql00jmbjlw9l1pro1i',
    center: [4.37036640026392, 52.004713684518933],
    zoom: 13.5,
    pitch: 60
  });
  map.addControl(new mapboxgl.NavigationControl());
  var markers = {
    "type": "FeatureCollection",
    "features": [{
      "type": "Feature",
      "properties": {
        "description": "<h3>3D Geoinformation</h3><p>Room BG.West.010</p>",
        "iconSize": [50, 50]
      },
      "geometry": {
        "type": "Point",
        "coordinates": [4.37036640026392, 52.004713684518933]
      }
    }]
  }
  // add markers to map
  markers.features.forEach(function(marker) {
    // create a DOM element for the marker
    var el = document.createElement('div');
    el.className = 'marker';
    el.style.backgroundImage = 'url({{ site.url }}{{ site.baseurl }}/img/map/marker.svg)';
    el.style.width = marker.properties.iconSize[0] + 'px';
    el.style.height = marker.properties.iconSize[1] + 'px';

    el.addEventListener('click', function() {
      var popup = new mapboxgl.Popup({closeOnClick: false})
        .setLngLat(markers.features[0].geometry.coordinates)
        .setHTML(markers.features[0].properties.description)
        .addTo(map);
    });

    // add marker to map
    new mapboxgl.Marker(el, {offset: [-marker.properties.iconSize[0] / 2, -marker.properties.iconSize[1] / 2]})
      .setLngLat(markers.features[0].geometry.coordinates)
      .addTo(map);
  });
</script>
