---
layout: page
title: "GeoBIM: Bridging the gap between Geo and BIM"
permalink: /projects/geobim/
---

<div class="row">
  <div class="col-sm-6 col-xs-6"><img class="img-responsive" src="{{ "shadow.jpg" }}"></div>
  <div class="col-sm-6 col-xs-6"><img class="img-responsive" src="{{ "height.jpg" }}"></div>
</div>

- - -

* Table of Content
{:toc}

- - -

## Summary

This project, in which the main stakeholders in the field collaborate, will develop an interface between CityGML and IFC to prepare for a fundamental solution to bridge the gap between Geo and BIM. The project will show with two use cases how integration between Geo and BIM can be realised: what works and what does not; what is a feasible direction to support both domains; and, what (technical and standardisation) agreements are required to bridge the BIM/Geo gap. Involvement with relevant stakeholders will assure that the project will be anchored within the national and international standardisation initiatives.

## Introduction

In both the Geographic Information (Geo) and Building Information Modelling (BIM) domains, it is widely acknowledged that the integration of data from both domains is beneficial and a crucial step forwards for future 3D city modelling as well as for facing the multi-disciplinary challenges of our built environment. BIM data (i.e. detailed data about design and construction) can feed Geo data (i.e. more general data useful for region-scale spatial analyses) and Geo data can serve as a reference for BIM data. In fact, in many domains, 3D models are already a widespread technology (e.g. water, noise, air quality, energy, building & construction). But it is still very hard to share 3D information among different users throughout the lifecycle of urban and environmental processes (from plan, design and construction to maintenance). The proposed project aims at developing a fundamental solution to integrate models of single buildings and construction sites (BIM) with models of complete urban areas (Geo). The solution will be developed alongside two use cases.

**Use case 1**: The process of submitting an IFC model to a building permit-application portal by citizens and companies; checking the IFC design against the existing physical world (represented in a 3D city model) and against a 3D zoning plan; and finally updating the 3D city model by integrating the 3D building model.

**Use case 2**: The process of supporting the life-cycle of objects with a continuous information chain: using information about complete urban areas in the design process (i.e. using geo-information in a BIM application) and, at a later stage, converting plan, design and construction data to maintenance data. The focus of this second use case is on large infrastructure projects.

**Use case 3**: Integration of sub-soil information in the BIM design process.

For the BIM/Geo data interface, this project will focus on the two most prominent standards in the domains. These are Industry Foundation Classes (IFC) building models, which contain the physical elements of single constructions in great detail, and CityGML models, which can represent entire cities in a simpler format that is usable for exchange, dissemination and spatial analyses, such as solar potential and wind simulations. The two modelling paradigms embodied by IFC and CityGML are good use cases of BIM and Geo data, and they are still broadly incompatible as they originally targeted different groups of people and now they cannot be used in the same tools (Figure 1).

## Previous work

Many researchers and practitioners have studied how to best share information between BIM and Geo, including models that combine both approaches, the generalisation of detailed BIM data, adding detail into Geo 3D datasets, and the creation of converters between IFC and CityGML. The ambitions are getting bigger now the that two domains are increasingly intersecting: BIM methodologies are applied to infrastructural works; city models are getting more detailed; Smart City concepts ask for an integrated reasoning on our city infrastructure; and objectives towards sustainability urge for an approach on multiple levels of detail. Yet, these disciplines are disconnected by their modelling paradigms and software tools, which differ fundamentally with respect to their semantics, geometry and level of detail. Until now solutions on integration were unsuccessful since it is very complex to address all these differences.

## The proposed solution

This project will start with building an interface between data from the two domains, applying it to the two use cases mentioned above, and formulating recommendations for developments of techniques and standardisation for further integration. There are two aspects that we see as extremely important for a successful integration as well for obtaining thorough understanding on required future steps: 1) a close collaboration between data-experts from both domains and 2) involvements of users and use cases to assure that the development is more than an academic or theoretical standardisation exercise. Both will be organised in this project.

## Deliverables

The two main deliverables will be a CityGML/IFC interface and an agreed and supported plan for follow up.

## CityGML/IFC interface

The CityGML/IFC interface will be an open source library/API that can read and write both IFC and CityGML, integrate multiple models into one, and can then perform operations (e.g. Boolean operations such as union or intersection) to manipulate and analyse the models. It will 
cover the most important geometric and semantic classes of IFC and CityGML. The focus will be on the geometry, and specifically on boundary representation models, all of which will be completely supported. Other geometry types, such as Constructive Solid Geometry and Sweeps will be supported if time allows. We do not aim for a complete implementation of all of the semantic classes in IFC or CityGML.

A prototype implementation of the library will be developed within the framework of this project. We have already studied and experimented with many open source software and libraries and selected CGAL Nef Polyhedra as a promising base. It is a very powerful and robust geometry engine that is also free and open source but does not currently support any BIM or Geo standard. The software will be developed under an open source model, where the source code of the software is published in a public repository and provided for the use of others. Testing will be done using real-world data within the context of the two mentioned use cases. Communication about the IFC/CityGML interface development will be handled according to an open source model: documenting the development and testing the process, disseminating it through blog posts and websites, and communicating directly with the users of the use cases.

## Agreed and supported plan for follow up

Parallel to the development of the interface, the project will deliver recommendations on how standards, technologies and organisations should make further steps to facilitate further BIM/ Geo integration. These will be based on the insights obtained from the use cases and the developed CityGML/IFC interface. The recommendations will also cover defining stricter modelling guidelines for both IFC and CityGML, which makes a better integration and re-use of CityGML data in BIM domain and vice versa possible.


