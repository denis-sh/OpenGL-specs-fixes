<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="OpenGL Registry"/>
<title>OpenGL&reg; Registry</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="description" content="OpenGL Developer Web Site" />
<meta name="copyright" content="Copyright (c) 2000 - 2010 Khronos Group" />
<meta name="author" content="Khronos Group" />
<link rel="stylesheet" href="/css/global.css" type="text/css" media="screen" />
<link href="/css/nav.css" rel="stylesheet" type="text/css" />
<link href="/css/menu.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/img/favicon.ico" type="image/ico" />
<script type="text/javascript" src="/js/global.js"></script>
<script type="text/javascript" src="/js/minmax.js"></script>
<script type="text/javascript" src="/js/menu.js"></script>
<script type="text/javascript" src="/js/ie_menus.js"></script>
<!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="/css/global_ie_7.css" />
<![endif]-->
<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="/css/global_ie.css" />
<![endif]-->
	

<link href="/css/resources.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="/js/inner_layout.js"></script>
</head>

<body>
<div id="wrap">

<div id="header-frame">
<div id="header">
<div style="position:relative;">
<table border="0" class="branding"><tr><td>
<a href="http://www.opengl.org"><img src="/img/opengl_logo.jpg" alt="OpenGL.org" title="The Industry's Foundation for High Performance Graphics" height="97" width="220" /></a>
</td><td>
<div id="search_inner">
  <form id="searchbox_017055583490642512057:hwpumfa180i" action="http://www.opengl.org/search/">
    <input type="hidden" name="cx" value="017055583490642512057:hwpumfa180i" />
    <input type="hidden" name="cof" value="FORID:9" />
    <input name="q" type="text" size="18" />
    <input type="submit" name="sa" value="Search" />
  </form>
  <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=searchbox_017055583490642512057%3Ahwpumfa180i"></script>
</div>

<h1>The Industry's Foundation for High Performance Graphics</h1>
<h4>from games to virtual reality, mobile phones to supercomputers</h4>
</td></tr></table>
</div>
	
<div id="nav" class="clearfix">

<ul id="navlist" class="clearfix">

<li style="display:none"><a href="http://www.opengl.org/">Home</a></li>

<li><a href="/documentation/">Documentation</a>
<ul>
        <li><a href="/documentation/current_version/">About OpenGL 4.2</a></li>
        <li><a href="/documentation/glsl/">OpenGL Shading Language</a></li>
        <li><a href="/documentation/extensions/">About OpenGL Extensions</a></li>
        <li><a href="/registry/">OpenGL Registry</a></li>
        <li><a href="https://www.khronos.org/bugzilla/enter_bug.cgi?product=OpenGL">Spec Feedback</a></li>
        <li><a href="/sdk/docs/man4/">OpenGL 4.2 Reference Pages</a></li>
        <li><a href="/sdk/docs/man3/">OpenGL 3.3 Reference Pages</a></li>
        <li><a href="/sdk/docs/man/">OpenGL 2.1 Reference Pages</a></li>
        <li><a href="/documentation/implementations/">OS/Platform Implementations</a></li>
        <li><a href="/documentation/books/">OpenGL Books</a></li>
</ul>
</li>

<li><a href="/resources/">Coding Resources</a>
<ul>
        <li><a href="/sdk/">OpenGL SDK</a></li>
        <li><a href="/resources/faq/">FAQs</a></li>
        <li><a href="/wiki/Code_Resources">Sample Code &amp; Tutorials</a></li>
        <li><a href="/resources/libraries/">GLUT &amp; Utility Libraries</a></li>
        <li><a href="/resources/bindings/">Programming Language Bindings</a></li>
        <li><a href="/resources/benchmarks/">Benchmarks</a></li>
        <li><a href="/community/newsgroups/">Mailing Lists &amp; News Groups</a></li>
        <li><a href="/archives/">Archived Resources</a></li>
</ul>
</li>

<li><a href="/wiki/">Wiki</a></li>
<li><a href="/discussion_boards/">Forums</a></li>
<li id="about"><a href="/about/">About OpenGL</a>
<ul>
        <li><a href="/about/contact/">Contact Us</a></li>
        <li><a href="/about/logos/">OpenGL logo</a></li>
        <li><a href="/about/advertising/">Advertise on OpenGL</a></li>
        <li><a href="/jobs/">Jobs</a></li>
</ul>
</li>
</ul>
</div>
</div>	
</div>


<div id="container">
<div id="main">
<div id="content" class="floatclear">

<h1 style="text-align:center">
    OpenGL&reg; Registry</h1>

<p> The OpenGL Registry contains specifications, header files, and
    related documentation for OpenGL and related APIs including GLU,
    GLX, and WGL. In addition to the core API specifications, many
    extensions to these APIs have been defined by vendors, groups of
    vendors, and the ARB. The Registry also contains specifications and
    header files for all registered extensions, written as modifications
    to the appropriate core API specifications. </p>

<p> The Registry also includes naming conventions, guidelines for
    creating new extensions and writing suitable extension
    specifications, and other documentation related to these APIs.

    </p>

<p> <b>Table of Contents</b>
<ul>
<li> <b><a href="#apispecs">Current OpenGL API, Shading Language, GLX,
     and Related Specifications and Reference Pages</a></b> </li>
<li> <a href="#headers">Core API and Extension Header Files</a> </li>
<li> <b><a href="#oldspecs">Older OpenGL and GLX Specifications and
     Reference Pages</a></b> </li>
<li> <a href="#policies">Adding to the Registry and Requesting Enumerant
     Allocations</a> </li>
<li> <a href="#abi">OpenGL Application Binary Interface for Linux</a>
     </li>
<li> <a href="#specfiles">Registry of Reserved Enumerants and
     Functions</a> </li>

<li> <b> Extension Specifications </b>
    <ul>
    <li> <a href="#arbextspecs">ARB Extensions by number</a> </li>
    <li> <a href="#otherextspecs">Vendor and EXT Extensions by number</a>
	 </li>
    </ul>
</ul>

<hr>

<h6> <a name="apispecs"></a>
     Current OpenGL API, OpenGL Shading Language and GLX Specifications
     and Reference Pages
     </h6>

<ul>
<li> <b> Current Specifications (OpenGL 4.2) </b>
<li> <a href="doc/glspec42.core.20120119.pdf"> OpenGL 4.2 Core Profile
     Specification (updated January 19, 2012) </a> </li>
<li> <a href="doc/glspec42.core.20120119.withchanges.pdf"> OpenGL 4.2
     Core Profile Specification with changes marked (updated January 19,
     2012) </a> </li>
<li> <a href="doc/glspec42.compatibility.20120119.pdf"> OpenGL 4.2
     Compatibility Profile Specification (updated January 19, 2012) </a>
     </li>
<li> <a href="doc/glspec42.compatibility.20120119.withchanges.pdf">
     OpenGL 4.2 Compatibility Profile Specification with changes marked
     (updated January 19, 2012) </a> </li>
<li> <a href="doc/GLSLangSpec.4.20.11.clean.pdf"> OpenGL Shading Language
     4.20.11 Specification (updated December 12, 2011) </a> </li>
<li> <a href="doc/GLSLangSpec.4.20.11.pdf"> OpenGL Shading Language
     4.20.11 Specification (updated December 12, 2011) with changes marked
     </a> </li>

<li> <b> OpenGL 4.2 and OpenGL Shading Language Reference Pages </b>
<li> <a href="http://www.opengl.org/sdk/docs/man4/"> OpenGL 4.2 Reference
     Pages </a> </li>
<li> <a href="http://www.opengl.org/sdk/docs/manglsl/"> OpenGL Shading
     Language Reference Pages </a> </li>

<li> <b> OpenGL X Window System Binding (GLX 1.4) Specification </b>
<li> <a href="doc/glx1.4.pdf"> GLX 1.4 Specification (December 16, 2005) </a>

</ul>


<h6> <a name="headers"></a> Core API and Extension Header Files </h6>

<p> Because extensions vary from platform to platform and driver to
    driver, OpenGL developers can't expect interfaces for all extensions
    to be defined in the standard <tt>gl.h</tt>, <tt>glx.h</tt>, and
    <tt>wgl.h</tt> header files. Additional header files -
    <tt><a href="api/glext.h">glext.h</a></tt>,
    <tt><a href="api/glxext.h">glxext.h</a></tt>, and
    <tt><a href="api/wglext.h">wglext.h</a></tt> - are provided here.
    </p>

<p> <b> NOTE 2010/08/09:</b> the .spec files and headers have been
    updated to OpenGL 4.1 level and a variety of bugs in the headers
    identified in the public Bugzilla have been fixed. </p>

<p> These headers define interfaces (enumerants, prototypes, and for
    platforms supporting dynamic runtime extension queries, such as
    Linux and Microsoft Windows, function pointer typedefs) for all
    registered extensions. </p>

<p> <b>Draft <tt>gl3.h</tt> Header</b> </p>

<p> We are releasing a draft version of a new header file, <tt><a
    href="api/gl3.h">gl3.h</a></tt> for public feedback. This header is
    described in appendix H.2 of the OpenGL 3.1 Specification and is
    intended for use with core OpenGL 3.1 implementations. It does not
    include interfaces that were removed from core OpenGL 3.1. </p>

<p> We will create a <tt>gl3ext.h</tt> if and when there are separately
    developed extensions shipping against core OpenGL 3.1, but at
    present there are no such extensions and no need for this header.
    Please read the release notes near the top of gl3.h before
    attempting to use it. Again, this is not a production-quality header
    and we're only putting it out for developer feedback at present, not
    for general use. </p>


<h6> <a name="oldspecs"></a>
     Older OpenGL and GLX Specifications and Reference Pages
     </h6>

<ul>

<li> <b> OpenGL 4.1 </b>
<li> <a href="doc/glspec41.core.20100725.pdf"> OpenGL 4.1 Core Profile
     Specification (updated July 25, 2010) </a> </li>
<li> <a href="doc/glspec41.core.20100725.withchanges.pdf"> OpenGL 4.1
     Core Profile Specification with changes marked (updated July 25,
     2010) </a> </li>
<li> <a href="doc/glspec41.compatibility.20100725.pdf"> OpenGL 4.1
     Compatibility Profile Specification (updated July 25, 2010) </a>
     </li>
<li> <a href="doc/glspec41.compatibility.20100725.withchanges.pdf">
     OpenGL 4.1 Compatibility Profile Specification with changes marked
     (updated July 25, 2010) </a> </li>
<li> <a href="doc/GLSLangSpec.4.10.6.clean.pdf"> OpenGL Shading Language
     4.10.6 Specification (updated July 24, 2010) </a> </li>
<li> <a href="doc/GLSLangSpec.4.10.6.pdf"> OpenGL Shading Language
     4.10.6 Specification (updated July 24, 2010) with changes marked
     </a> </li>

<li> <b> OpenGL 4.0 </b>
<li> <a href="doc/glspec40.core.20100311.pdf"> OpenGL 4.0 Core Profile
     Specification (updated March 11, 2010) </a> </li>
<li> <a href="doc/glspec40.core.20100311.withchanges.pdf"> OpenGL 4.0
     Core Profile Specification with changes marked (updated March 11,
     2010) </a> </li>
<li> <a href="doc/glspec40.compatibility.20100311.pdf"> OpenGL 4.0
     Compatibility Profile Specification (updated March 11, 2010) </a>
     </li>
<li> <a href="doc/glspec40.compatibility.20100311.withchanges.pdf">
     OpenGL 4.0 Compatibility Profile Specification with changes marked
     (updated March 11, 2010) </a> </li>
<li> <a href="doc/GLSLangSpec.4.00.9.clean.pdf"> OpenGL Shading Language
     4.00.9 Specification (updated July 24, 2010) </a> </li>

<li> <b> OpenGL 3.3 </b>
<li> <a href="doc/glspec33.core.20100311.pdf"> OpenGL 3.3 Core Profile
     Specification (updated March 11, 2010) </a> </li>
<li> <a href="doc/glspec33.core.20100311.withchanges.pdf"> OpenGL 3.3
     Core Profile Specification with changes marked (updated March 11,
     2010) </a> </li>
<li> <a href="doc/glspec33.compatibility.20100311.pdf"> OpenGL 3.3
     Compatibility Profile Specification (updated March 11, 2010) </a>
     </li>
<li> <a href="doc/glspec33.compatibility.20100311.withchanges.pdf">
     OpenGL 3.3 Compatibility Profile Specification with changes marked
     (updated March 11, 2010) </a> </li>
<li> <a href="doc/GLSLangSpec.3.30.6.clean.pdf"> OpenGL Shading Language
     3.30.6 Specification (updated March 11, 2010) </a> </li>

<li> <b> OpenGL 3.3 Reference Pages </b>
<li> <a href="http://www.opengl.org/sdk/docs/man3/"> OpenGL 3.3 Reference
     Pages </a> </li>

<li> <b> OpenGL 3.2 </b>
<li> <a href="doc/glspec32.core.20091207.pdf"> OpenGL 3.2 Core Profile
     Specification (updated December 7, 2009) </a> </li>
<li> <a href="doc/glspec32.core.20091207.withchanges.pdf"> OpenGL 3.2
     Core Profile Specification with changes marked (updated December 7,
     2009) </a> </li>
<li> <a href="doc/glspec32.compatibility.20091207.pdf"> OpenGL 3.2
     Compatibility Profile Specification (updated December 7, 2009) </a>
     </li>
<li> <a href="doc/glspec32.compatibility.20091207.withchanges.pdf">
     OpenGL 3.2 Compatibility Profile Specification with changes marked
     (updated December 7, 2009) </a> </li>
<li> <a href="doc/GLSLangSpec.1.50.11.pdf"> OpenGL Shading Language
     1.50.11 Specification (updated December 4, 2009) </a> </li>

<li> <b> OpenGL 3.1 </b>
<li> <a href="doc/glspec31.20090528.pdf"> OpenGL 3.1 Specification
     (updated May 28, 2009) </a> </li>
<li> <a href="doc/glspec31undep.20090528.pdf"> OpenGL 3.1 Specification
     with GL_ARB_compatibility extension (updated May 28, 2009) </a>
     </li>
<li> <a href="doc/GLSLangSpec.Full.1.40.08.pdf"> OpenGL Shading Language
     1.40.08 Specification (updated November 22, 2009) </a> </li>

<li> <b> OpenGL 3.0 </b>
<li> <a href="doc/glspec30.20080923.pdf"> OpenGL 3.0 Specification
     (updated September 23, 2008) </a> </li>
<li> <a href="doc/glspec30.20080811.withchanges.pdf"> OpenGL 3.0
     Specification (August 11, 2008) with changes marked </a> </li>
<li> <a href="doc/GLSLangSpec.Full.1.30.10.pdf"> OpenGL Shading Language
     1.30.10 Specification (updated November 22, 2009) </a> </li>

<li> <b> OpenGL 2.1 </b>
<li> <a href="doc/glspec21.20061201.pdf"> OpenGL 2.1 Specification
     (December 1, 2006) </a> </li>
<li> <a href="doc/GLSLangSpec.Full.1.20.8.pdf"> OpenGL Shading Language
     1.20.8 Specification (September 7, 2006) </a> </li>

<li> <b> OpenGL 2.1 Reference Pages </b>
<li> <a href="http://www.opengl.org/sdk/docs/man/"> OpenGL 2.1 Reference
     Pages </a> </li>

<li> <b> OpenGL 2.0 </b>

<li> <a href="doc/glspec20.20041022.pdf"> OpenGL 2.0 Specification
     (October 22, 2004) </a>
<li> <a href="doc/GLSLangSpec.Full.1.10.59.pdf"> OpenGL Shading Language
     1.10.59 Specification (April 30, 2004) </a> </li>

<li> <a href="doc/glspec15.pdf"> OpenGL 1.5 Specification </a>
<li> <a href="doc/glspec14.pdf"> OpenGL 1.4 Specification </a>
<li> <a href="doc/glspec13.pdf"> OpenGL 1.3 Specification </a>
<li> <a href="doc/glspec121_bookmarked.pdf"> OpenGL 1.2.1 Specification </a>
<li> <a href="doc/glspec11.ps"> OpenGL 1.1 Specification (PostScript format) </a>
<li> <a href="doc/glspec10.pdf"> OpenGL 1.0 Specification </a>

<li> <b> Older GLX Specifications </b>

<li> <a href="doc/glx1.3.pdf"> GLX 1.3 Specification </a>
<li> <a href="doc/glxencode1.3.pdf"> GLX 1.3 Protocol Encoding
     Specification </a>
<li> <a href="doc/glx1.2.ps"> GLX 1.2 Specification (PostScript format) </a>
<li> <a href="doc/GLXprotocol.ps"> GLX Protocol Slides (PostScript
     format; only of historical interest) </a>

<li> <b> OpenGL Utility Library (GLU) Specification </b>
<li> <a href="doc/glu1.3.pdf"> GLU 1.3 Specification (November 4, 1998) </a>

</ul>

<h6> IP Disclosure Statements </h6>

<p> <a href="https://www.khronos.org/files/ip-disclosures/opengl/"> IP
    Disclosure Statements </a> from Khronos Members which bear on OpenGL
    are available. </p>

<h6> <a name="policies"></a>
     Adding to the Registry and Requesting Enumerant Allocations </h6>

<p> If you want to add an extension specification to the Registry,
    correct an existing specification, request allocation of enumerants
    and other controlled resources in the OpenGL / GLX / WGL namespaces,
    or otherwise change the Registry, please
    <a href="http://www.khronos.org/bugzilla/createaccount.cgi">create a
    Bugzilla account</a> on the public Khronos.org Bugzilla, and submit
    your request there against Product &quot;OpenGL&quot;, Component
    &quot;Registry&quot;. You can use
    <a href="http://www.khronos.org/bugzilla/enter_bug.cgi?assigned_to=developer%40oddhack.org&attachurl=&blocked=&bug_file_loc=http%3A%2F%2F&bug_severity=normal&bug_status=NEW&comment=Please%20provide%20details%20here.%20If%20you%20are%20submitting%20an%20extension%20specification%20for%20addition%20to%20the%20registry%2C%20attach%20it%20to%20the%20bug%20below.%20If%20you%20are%20requesting%20allocation%20of%20OpenGL%20enumarant%20ranges%20or%20other%20controlled%20resources%2C%20please%20review%20the%20policy%20documents%20linked%20from%20the%20Registry%20%28http%3A%2F%2Fwww.opengl.org%2Fregistry%2F%29%20first%2C%20particularly%20%22How%20to%20Create%20Extensions%22%20and%20%22Enumerant%20Allocation%20Policies%22%2C%20and%20follow%20those%20guidelines%20in%20making%20your%20request.&component=Registry&contenttypeentry=&contenttypemethod=autodetect&contenttypeselection=text%2Fplain&data=&deadline=&dependson=&description=&estimated_time=0.0&form_name=enter_bug&keywords=&maketemplate=Remember%20values%20as%20bookmarkable%20template&op_sys=All&priority=P3&product=OpenGL&qa_contact=&rep_platform=All&short_desc=Please%20summarize%20your%20OpenGL%20Registry%20request%20here&target_milestone=---&version=unspecified">
    this Bugzilla link</a>, which fills in many fields for you. </p>

<p> Please review the documents linked below, especially
    <a href="http://www.opengl.org/registry/doc/rules.html"> How to
    Create Extensions</a> and
    <a href="http://www.opengl.org/registry/doc/enums.html"> Enumerant
    Allocation Policies</a>, before making your request. </p>

<ul>
<li> <a href="doc/rules.html"> How to Create Extensions </a> </li>
<li> <a href="doc/enums.html"> Enumerant Allocation Policies </a> </li>
<li> <a href="doc/template.txt"> Extension Template </a> </li>
<li> <a href="doc/promoting.html"> Extension Promotion Guidelines </a> </li>
<li> <a href="doc/reserved.txt"> Enumerant/Opcode Registry </a> </li>
<li> <a href="doc/syntaxrules.txt"> OpenGL Syntax Rules (updated 2006/12/13) </a> </li>
<li> <a href="doc/GLSLExtensionRules.txt"> OpenGL Shading Language Extension Conventions (updated 2006/12/18) </a> </li>
<li> <a href="doc/fog_coord.txt"> Extension Specification Example </a> </li>
</ul>

<h6> <a name="abi"></a>
    OpenGL Application Binary Interface for Linux </h6>

<p> The current version of the <a href="ABI/">OpenGL Application Binary
    Interface for Linux</a> is also available. </p>


<h6> <a name="specfiles"></a> Enumerant and Function Registry </h6>

<p> The Registry includes databases defining the APIs and reserved
    enumerant ranges for OpenGL, GLX, and WGL. There are several of
    these <tt>&quot;.spec&quot</tt> files for each API, described below:

<ul>
<li> OpenGL .spec files
    <ul>
    <li> <a href="api/enum.spec">enum.spec</a> - canonical description
	 of the reserved OpenGL enumerants and the ranges allocated for
	 different purposes. New allocations are made here and when
	 extensions using values in allocated ranges are registered, the
	 enumerants in those extensions are added as well. </li>
    <li> <a href="api/enumext.spec">enumext.spec</a> - derived variant
	 of enum.spec containing the enumerant values grouped by the
	 extension or API core revision they correspond to. </li>
    <li> <a href="api/gl.spec">gl.spec</a></tt> - canonical description
	 of the functions defined by core OpenGL and extensions. When
	 extensions are registered, the functions they define are added
	 here. </li>
    <li> <a href="api/gl.tm">gl.tm</a></tt> - <i>typemap</i> used to
	 convert the abstract typenames in <tt>gl.spec</tt> into
	 underlying GL types. </li>
    <li> enumext.spec, gl.spec, and gl.tm are used to generate glext.h
	 </li>
    </ul>
</li>
<li> GLX .spec files
    <ul>
    <li> <a href="api/glxenum.spec">glxenum.spec</a> - canonical
	 description of the reserved GLX enumerants, like enum.spec.
	 </li>
    <li> <a href="api/glxenumext.spec">glxenumext.spec</a> - derived
	 variant of glxenum.spec containing the enumerant values grouped
	 by the GLX extension or API core revision they correspond to.
	 This only includes GLX core versions 1.3 and later. </li>
    <li> <a href="api/glx.spec">glx.spec</a></tt> - canonical
	 description of the functions defined by core GLX up to version
	 1.3. </li>
    <li> <a href="api/glxext.spec">glxext.spec</a></tt> - canonical
	 description of the functions defined by GLX extensions and core
	 versions 1.3 and later. </li>
    <li> <a href="api/glx.tm">glx.tm</a></tt> - <i>typemap</i> used to
	 convert the abstract typenames in <tt>glx*.spec</tt> into
	 underlying GLX types. </li>
    <li> glxenumext.spec, glxext.spec, and glx.tm are used to generate
	 glxext.h. </li>
    </ul>
</li>
<li> WGL .spec files
    <ul>
    <li> <a href="api/wglenum.spec">wglenum.spec</a> - canonical
	 description of the reserved WGL enumerants, like enum.spec.
	 </li>
    <li> <a href="api/wglenumext.spec">wglenumext.spec</a> - derived
	 variant of wglenum.spec containing the enumerant values grouped
	 by the WGL extension they correspond to.
	 This only includes WGL core versions 1.3 and later (Microsoft
	 has never revised the WGL core API). </li>
    <li> <a href="api/wgl.spec">wgl.spec</a></tt> - canonical
	 description of the functions defined by WGL. </li>
    <li> <a href="api/wglext.spec">wglext.spec</a></tt> - canonical
	 description of the functions defined by WGL extensions. </li>
    <li> <a href="api/wgl.tm">wgl.tm</a></tt> - <i>typemap</i> used to
	 convert the abstract typenames in <tt>wgl*.spec</tt> into
	 underlying WGL and Win32 types. </li>
    <li> wglenumext.spec, wglext.spec, and wgl.tm are used to generate
	 wglext.h. </li>
    </ul>
</li>
</ul>

<p> <i>(Yes, these databases should be moved to a modern XML-based
    format. Patience.)</i> </p>

<hr>
<h6> <a name="arbextspecs"></a>
     ARB Extensions by number</h6>
<ol>
<li value=1> <a href="specs/ARB/multitexture.txt">GL_ARB_multitexture</a>
</li>
<li value=2> <a href="specs/ARB/get_proc_address.txt">GLX_ARB_get_proc_address</a>
</li>
<li value=3> <a href="specs/ARB/transpose_matrix.txt">GL_ARB_transpose_matrix</a>
</li>
<li value=4> <a href="specs/ARB/wgl_buffer_region.txt">WGL_ARB_buffer_region</a>
</li>
<li value=5> <a href="specs/ARB/multisample.txt">GL_ARB_multisample</a>
     <br> <a href="specs/ARB/multisample.txt">GLX_ARB_multisample</a>
     <br> <a href="specs/ARB/multisample.txt">WGL_ARB_multisample</a>
</li>
<li value=6> <a href="specs/ARB/texture_env_add.txt">GL_ARB_texture_env_add</a>
</li>
<li value=7> <a href="specs/ARB/texture_cube_map.txt">GL_ARB_texture_cube_map</a>
</li>
<li value=8> <a href="specs/ARB/wgl_extensions_string.txt">WGL_ARB_extensions_string</a>
</li>
<li value=9> <a href="specs/ARB/wgl_pixel_format.txt">WGL_ARB_pixel_format</a>
</li>
<li value=10> <a href="specs/ARB/wgl_make_current_read.txt">WGL_ARB_make_current_read</a>
</li>
<li value=11> <a href="specs/ARB/wgl_pbuffer.txt">WGL_ARB_pbuffer</a>
</li>
<li value=12> <a href="specs/ARB/texture_compression.txt">GL_ARB_texture_compression</a>
</li>
<li value=13> <a href="specs/ARB/texture_border_clamp.txt">GL_ARB_texture_border_clamp</a>
</li>
<li value=14> <a href="specs/ARB/point_parameters.txt">GL_ARB_point_parameters</a>
</li>
<li value=15> <a href="specs/ARB/vertex_blend.txt">GL_ARB_vertex_blend</a>
</li>
<li value=16> <a href="specs/ARB/matrix_palette.txt">GL_ARB_matrix_palette</a>
</li>
<li value=17> <a href="specs/ARB/texture_env_combine.txt">GL_ARB_texture_env_combine</a>
</li>
<li value=18> <a href="specs/ARB/texture_env_crossbar.txt">GL_ARB_texture_env_crossbar</a>
</li>
<li value=19> <a href="specs/ARB/texture_env_dot3.txt">GL_ARB_texture_env_dot3</a>
</li>
<li value=20> <a href="specs/ARB/wgl_render_texture.txt">WGL_ARB_render_texture</a>
</li>
<li value=21> <a href="specs/ARB/texture_mirrored_repeat.txt">GL_ARB_texture_mirrored_repeat</a>
</li>
<li value=22> <a href="specs/ARB/depth_texture.txt">GL_ARB_depth_texture</a>
</li>
<li value=23> <a href="specs/ARB/shadow.txt">GL_ARB_shadow</a>
</li>
<li value=24> <a href="specs/ARB/shadow_ambient.txt">GL_ARB_shadow_ambient</a>
</li>
<li value=25> <a href="specs/ARB/window_pos.txt">GL_ARB_window_pos</a>
</li>
<li value=26> <a href="specs/ARB/vertex_program.txt">GL_ARB_vertex_program</a>
</li>
<li value=27> <a href="specs/ARB/fragment_program.txt">GL_ARB_fragment_program</a>
</li>
<li value=28> <a href="specs/ARB/vertex_buffer_object.txt">GL_ARB_vertex_buffer_object</a>
</li>
<li value=29> <a href="specs/ARB/occlusion_query.txt">GL_ARB_occlusion_query</a>
</li>
<li value=30> <a href="specs/ARB/shader_objects.txt">GL_ARB_shader_objects</a>
</li>
<li value=31> <a href="specs/ARB/vertex_shader.txt">GL_ARB_vertex_shader</a>
</li>
<li value=32> <a href="specs/ARB/fragment_shader.txt">GL_ARB_fragment_shader</a>
</li>
<li value=33> <a href="specs/ARB/shading_language_100.txt">GL_ARB_shading_language_100</a>
</li>
<li value=34> <a href="specs/ARB/texture_non_power_of_two.txt">GL_ARB_texture_non_power_of_two</a>
</li>
<li value=35> <a href="specs/ARB/point_sprite.txt">GL_ARB_point_sprite</a>
</li>
<li value=36> <a href="specs/ARB/fragment_program_shadow.txt">GL_ARB_fragment_program_shadow</a>
</li>
<li value=37> <a href="specs/ARB/draw_buffers.txt">GL_ARB_draw_buffers</a>
</li>
<li value=38> <a href="specs/ARB/texture_rectangle.txt">GL_ARB_texture_rectangle</a>
</li>
<li value=39> <a href="specs/ARB/color_buffer_float.txt">GL_ARB_color_buffer_float</a>
     <br> <a href="specs/ARB/color_buffer_float.txt">WGL_ARB_pixel_format_float</a>
     <br> <a href="specs/ARB/color_buffer_float.txt">GLX_ARB_fbconfig_float</a>
</li>
<li value=40> <a href="specs/ARB/half_float_pixel.txt">GL_ARB_half_float_pixel</a>
</li>
<li value=41> <a href="specs/ARB/texture_float.txt">GL_ARB_texture_float</a>
</li>
<li value=42> <a href="specs/ARB/pixel_buffer_object.txt">GL_ARB_pixel_buffer_object</a>
</li>
<li value=43> <a href="specs/ARB/depth_buffer_float.txt">GL_ARB_depth_buffer_float</a>
</li>
<li value=44> <a href="specs/ARB/draw_instanced.txt">GL_ARB_draw_instanced</a>
</li>
<li value=45> <a href="specs/ARB/framebuffer_object.txt">GL_ARB_framebuffer_object</a>
</li>
<li value=46> <a href="specs/ARB/framebuffer_sRGB.txt">GL_ARB_framebuffer_sRGB</a>
     <br> <a href="specs/ARB/framebuffer_sRGB.txt">GLX_ARB_framebuffer_sRGB</a>
     <br> <a href="specs/ARB/framebuffer_sRGB.txt">WGL_ARB_framebuffer_sRGB</a>
</li>
<li value=47> <a href="specs/ARB/geometry_shader4.txt">GL_ARB_geometry_shader4</a>
</li>
<li value=48> <a href="specs/ARB/half_float_vertex.txt">GL_ARB_half_float_vertex</a>
</li>
<li value=49> <a href="specs/ARB/instanced_arrays.txt">GL_ARB_instanced_arrays</a>
</li>
<li value=50> <a href="specs/ARB/map_buffer_range.txt">GL_ARB_map_buffer_range</a>
</li>
<li value=51> <a href="specs/ARB/texture_buffer_object.txt">GL_ARB_texture_buffer_object</a>
</li>
<li value=52> <a href="specs/ARB/texture_compression_rgtc.txt">GL_ARB_texture_compression_rgtc</a>
</li>
<li value=53> <a href="specs/ARB/texture_rg.txt">GL_ARB_texture_rg</a>
</li>
<li value=54> <a href="specs/ARB/vertex_array_object.txt">GL_ARB_vertex_array_object</a>
</li>
<li value=55> <a href="specs/ARB/wgl_create_context.txt">WGL_ARB_create_context</a>
</li>
<li value=56> <a href="specs/ARB/glx_create_context.txt">GLX_ARB_create_context</a>
</li>
<li value=57> <a href="specs/ARB/uniform_buffer_object.txt">GL_ARB_uniform_buffer_object</a>
</li>
<li value=58> <a href="specs/ARB/compatibility.txt">GL_ARB_compatibility</a>
</li>
<li value=59> <a href="specs/ARB/copy_buffer.txt">GL_ARB_copy_buffer</a>
</li>
<li value=60> <a href="specs/ARB/shader_texture_lod.txt">GL_ARB_shader_texture_lod</a>
</li>
<li value=61> <a href="specs/ARB/depth_clamp.txt">GL_ARB_depth_clamp</a>
</li>
<li value=62> <a href="specs/ARB/draw_elements_base_vertex.txt">GL_ARB_draw_elements_base_vertex</a>
</li>
<li value=63> <a href="specs/ARB/fragment_coord_conventions.txt">GL_ARB_fragment_coord_conventions</a>
</li>
<li value=64> <a href="specs/ARB/provoking_vertex.txt">GL_ARB_provoking_vertex</a>
</li>
<li value=65> <a href="specs/ARB/seamless_cube_map.txt">GL_ARB_seamless_cube_map</a>
</li>
<li value=66> <a href="specs/ARB/sync.txt">GL_ARB_sync</a>
</li>
<li value=67> <a href="specs/ARB/texture_multisample.txt">GL_ARB_texture_multisample</a>
</li>
<li value=68> <a href="specs/ARB/vertex_array_bgra.txt">GL_ARB_vertex_array_bgra</a>
</li>
<li value=69> <a href="specs/ARB/draw_buffers_blend.txt">GL_ARB_draw_buffers_blend</a>
</li>
<li value=70> <a href="specs/ARB/sample_shading.txt">GL_ARB_sample_shading</a>
</li>
<li value=71> <a href="specs/ARB/texture_cube_map_array.txt">GL_ARB_texture_cube_map_array</a>
</li>
<li value=72> <a href="specs/ARB/texture_gather.txt">GL_ARB_texture_gather</a>
</li>
<li value=73> <a href="specs/ARB/texture_query_lod.txt">GL_ARB_texture_query_lod</a>
</li>
<li value=74> <a href="specs/ARB/wgl_create_context.txt">WGL_ARB_create_context_profile</a>
</li>
<li value=75> <a href="specs/ARB/glx_create_context.txt">GLX_ARB_create_context_profile</a>
</li>
<li value=76> <a href="specs/ARB/shading_language_include.txt">GL_ARB_shading_language_include</a>
</li>
<li value=77> <a href="specs/ARB/texture_compression_bptc.txt">GL_ARB_texture_compression_bptc</a>
</li>
<li value=78> <a href="specs/ARB/blend_func_extended.txt">GL_ARB_blend_func_extended</a>
</li>
<li value=79> <a href="specs/ARB/explicit_attrib_location.txt">GL_ARB_explicit_attrib_location</a>
</li>
<li value=80> <a href="specs/ARB/occlusion_query2.txt">GL_ARB_occlusion_query2</a>
</li>
<li value=81> <a href="specs/ARB/sampler_objects.txt">GL_ARB_sampler_objects</a>
</li>
<li value=82> <a href="specs/ARB/shader_bit_encoding.txt">GL_ARB_shader_bit_encoding</a>
</li>
<li value=83> <a href="specs/ARB/texture_rgb10_a2ui.txt">GL_ARB_texture_rgb10_a2ui</a>
</li>
<li value=84> <a href="specs/ARB/texture_swizzle.txt">GL_ARB_texture_swizzle</a>
</li>
<li value=85> <a href="specs/ARB/timer_query.txt">GL_ARB_timer_query</a>
</li>
<li value=86> <a href="specs/ARB/vertex_type_2_10_10_10_rev.txt">GL_ARB_vertex_type_2_10_10_10_rev</a>
</li>
<li value=87> <a href="specs/ARB/draw_indirect.txt">GL_ARB_draw_indirect</a>
</li>
<li value=88> <a href="specs/ARB/gpu_shader5.txt">GL_ARB_gpu_shader5</a>
</li>
<li value=89> <a href="specs/ARB/gpu_shader_fp64.txt">GL_ARB_gpu_shader_fp64</a>
</li>
<li value=90> <a href="specs/ARB/shader_subroutine.txt">GL_ARB_shader_subroutine</a>
</li>
<li value=91> <a href="specs/ARB/tessellation_shader.txt">GL_ARB_tessellation_shader</a>
</li>
<li value=92> <a href="specs/ARB/texture_buffer_object_rgb32.txt">GL_ARB_texture_buffer_object_rgb32</a>
</li>
<li value=93> <a href="specs/ARB/transform_feedback2.txt">GL_ARB_transform_feedback2</a>
</li>
<li value=94> <a href="specs/ARB/transform_feedback3.txt">GL_ARB_transform_feedback3</a>
</li>
<li value=95> <a href="specs/ARB/ES2_compatibility.txt">GL_ARB_ES2_compatibility</a>
</li>
<li value=96> <a href="specs/ARB/get_program_binary.txt">GL_ARB_get_program_binary</a>
</li>
<li value=97> <a href="specs/ARB/separate_shader_objects.txt">GL_ARB_separate_shader_objects</a>
</li>
<li value=98> <a href="specs/ARB/shader_precision.txt">GL_ARB_shader_precision</a>
</li>
<li value=99> <a href="specs/ARB/vertex_attrib_64bit.txt">GL_ARB_vertex_attrib_64bit</a>
</li>
<li value=100> <a href="specs/ARB/viewport_array.txt">GL_ARB_viewport_array</a>
</li>
<li value=101> <a href="specs/ARB/glx_create_context_robustness.txt">GLX_ARB_create_context_robustness</a>
</li>
<li value=102> <a href="specs/ARB/wgl_create_context_robustness.txt">WGL_ARB_create_context_robustness</a>
</li>
<li value=103> <a href="specs/ARB/cl_event.txt">GL_ARB_cl_event</a>
</li>
<li value=104> <a href="specs/ARB/debug_output.txt">GL_ARB_debug_output</a>
</li>
<li value=105> <a href="specs/ARB/robustness.txt">GL_ARB_robustness</a>
</li>
<li value=106> <a href="specs/ARB/shader_stencil_export.txt">GL_ARB_shader_stencil_export</a>
</li>
<li value=107> <a href="specs/ARB/base_instance.txt">GL_ARB_base_instance</a>
</li>
<li value=108> <a href="specs/ARB/shading_language_420pack.txt">GL_ARB_shading_language_420pack</a>
</li>
<li value=109> <a href="specs/ARB/transform_feedback_instanced.txt">GL_ARB_transform_feedback_instanced</a>
</li>
<li value=110> <a href="specs/ARB/compressed_texture_pixel_storage.txt">GL_ARB_compressed_texture_pixel_storage</a>
</li>
<li value=111> <a href="specs/ARB/conservative_depth.txt">GL_ARB_conservative_depth</a>
</li>
<li value=112> <a href="specs/ARB/internalformat_query.txt">GL_ARB_internalformat_query</a>
</li>
<li value=113> <a href="specs/ARB/map_buffer_alignment.txt">GL_ARB_map_buffer_alignment</a>
</li>
<li value=114> <a href="specs/ARB/shader_atomic_counters.txt">GL_ARB_shader_atomic_counters</a>
</li>
<li value=115> <a href="specs/ARB/shader_image_load_store.txt">GL_ARB_shader_image_load_store</a>
</li>
<li value=116> <a href="specs/ARB/shading_language_packing.txt">GL_ARB_shading_language_packing</a>
</li>
<li value=117> <a href="specs/ARB/texture_storage.txt">GL_ARB_texture_storage</a>
</li>
</ol>
<h6> <a name="otherextspecs"></a>
     Vendor and EXT Extensions by number</h6>
<ol>
<li value=1> <a href="specs/EXT/abgr.txt">GL_EXT_abgr</a>
</li>
<li value=2> <a href="specs/EXT/blend_color.txt">GL_EXT_blend_color</a>
</li>
<li value=3> <a href="specs/EXT/polygon_offset.txt">GL_EXT_polygon_offset</a>
</li>
<li value=4> <a href="specs/EXT/texture.txt">GL_EXT_texture</a>
</li>
<li value=6> <a href="specs/EXT/texture3D.txt">GL_EXT_texture3D</a>
</li>
<li value=7> <a href="specs/SGIS/texture_filter4.txt">GL_SGIS_texture_filter4</a>
</li>
<li value=9> <a href="specs/EXT/subtexture.txt">GL_EXT_subtexture</a>
</li>
<li value=10> <a href="specs/EXT/copy_texture.txt">GL_EXT_copy_texture</a>
</li>
<li value=11> <a href="specs/EXT/histogram.txt">GL_EXT_histogram</a>
</li>
<li value=12> <a href="specs/EXT/convolution.txt">GL_EXT_convolution</a>
</li>
<li value=13> <a href="specs/SGI/color_matrix.txt">GL_SGI_color_matrix</a>
</li>
<li value=14> <a href="specs/SGI/color_table.txt">GL_SGI_color_table</a>
</li>
<li value=15> <a href="specs/SGIS/pixel_texture.txt">GL_SGIS_pixel_texture</a>
</li>
<li value=15a> <a href="specs/SGIX/sgix_pixel_texture.txt">GL_SGIX_pixel_texture</a>
</li>
<li value=16> <a href="specs/SGIS/texture4D.txt">GL_SGIS_texture4D</a>
</li>
<li value=17> <a href="specs/SGI/texture_color_table.txt">GL_SGI_texture_color_table</a>
</li>
<li value=18> <a href="specs/EXT/cmyka.txt">GL_EXT_cmyka</a>
</li>
<li value=20> <a href="specs/EXT/texture_object.txt">GL_EXT_texture_object</a>
</li>
<li value=21> <a href="specs/SGIS/detail_texture.txt">GL_SGIS_detail_texture</a>
</li>
<li value=22> <a href="specs/SGIS/sharpen_texture.txt">GL_SGIS_sharpen_texture</a>
</li>
<li value=23> <a href="specs/EXT/packed_pixels.txt">GL_EXT_packed_pixels</a>
</li>
<li value=24> <a href="specs/SGIS/texture_lod.txt">GL_SGIS_texture_lod</a>
</li>
<li value=25> <a href="specs/SGIS/multisample.txt">GL_SGIS_multisample</a>
     <br> <a href="specs/SGIS/multisample.txt">GLX_SGIS_multisample</a>
</li>
<li value=27> <a href="specs/EXT/rescale_normal.txt">GL_EXT_rescale_normal</a>
</li>
<li value=28> <a href="specs/EXT/visual_info.txt">GLX_EXT_visual_info</a>
</li>
<li value=30> <a href="specs/EXT/vertex_array.txt">GL_EXT_vertex_array</a>
</li>
<li value=31> <a href="specs/EXT/misc_attribute.txt">GL_EXT_misc_attribute</a>
</li>
<li value=32> <a href="specs/SGIS/generate_mipmap.txt">GL_SGIS_generate_mipmap</a>
</li>
<li value=33> <a href="specs/SGIX/clipmap.txt">GL_SGIX_clipmap</a>
</li>
<li value=34> <a href="specs/SGIX/shadow.txt">GL_SGIX_shadow</a>
</li>
<li value=35> <a href="specs/SGIS/texture_edge_clamp.txt">GL_SGIS_texture_edge_clamp</a>
</li>
<li value=36> <a href="specs/SGIS/texture_border_clamp.txt">GL_SGIS_texture_border_clamp</a>
</li>
<li value=37> <a href="specs/EXT/blend_minmax.txt">GL_EXT_blend_minmax</a>
</li>
<li value=38> <a href="specs/EXT/blend_subtract.txt">GL_EXT_blend_subtract</a>
</li>
<li value=39> <a href="specs/EXT/blend_logic_op.txt">GL_EXT_blend_logic_op</a>
</li>
<li value=40> <a href="specs/SGI/swap_control.txt">GLX_SGI_swap_control</a>
</li>
<li value=41> <a href="specs/SGI/video_sync.txt">GLX_SGI_video_sync</a>
</li>
<li value=42> <a href="specs/SGI/make_current_read.txt">GLX_SGI_make_current_read</a>
</li>
<li value=43> <a href="specs/SGIX/video_source.txt">GLX_SGIX_video_source</a>
</li>
<li value=44> <a href="specs/EXT/visual_rating.txt">GLX_EXT_visual_rating</a>
</li>
<li value=45> <a href="specs/SGIX/interlace.txt">GL_SGIX_interlace</a>
</li>
<li value=47> <a href="specs/EXT/import_context.txt">GLX_EXT_import_context</a>
</li>
<li value=49> <a href="specs/SGIX/fbconfig.txt">GLX_SGIX_fbconfig</a>
</li>
<li value=50> <a href="specs/SGIX/pbuffer.txt">GLX_SGIX_pbuffer</a>
</li>
<li value=51> <a href="specs/SGIS/texture_select.txt">GL_SGIS_texture_select</a>
</li>
<li value=52> <a href="specs/SGIX/sprite.txt">GL_SGIX_sprite</a>
</li>
<li value=53> <a href="specs/SGIX/texture_multi_buffer.txt">GL_SGIX_texture_multi_buffer</a>
</li>
<li value=54> <a href="specs/EXT/point_parameters.txt">GL_EXT_point_parameters</a>
</li>
<li value=55> <a href="specs/SGIX/instruments.txt">GL_SGIX_instruments</a>
</li>
<li value=56> <a href="specs/SGIX/texture_scale_bias.txt">GL_SGIX_texture_scale_bias</a>
</li>
<li value=57> <a href="specs/SGIX/framezoom.txt">GL_SGIX_framezoom</a>
</li>
<li value=58> <a href="specs/SGIX/tag_sample_buffer.txt">GL_SGIX_tag_sample_buffer</a>
</li>
<li value=60> <a href="specs/SGIX/reference_plane.txt">GL_SGIX_reference_plane</a>
</li>
<li value=61> <a href="specs/SGIX/flush_raster.txt">GL_SGIX_flush_raster</a>
</li>
<li value=62> <a href="specs/SGI/cushion.txt">GLX_SGI_cushion</a>
</li>
<li value=63> <a href="specs/SGIX/depth_texture.txt">GL_SGIX_depth_texture</a>
</li>
<li value=64> <a href="specs/SGIS/fog_func.txt">GL_SGIS_fog_function</a>
</li>
<li value=65> <a href="specs/SGIX/fog_offset.txt">GL_SGIX_fog_offset</a>
</li>
<li value=66> <a href="specs/HP/image_transform.txt">GL_HP_image_transform</a>
</li>
<li value=67> <a href="specs/HP/convolution_border_modes.txt">GL_HP_convolution_border_modes</a>
</li>
<li value=69> <a href="specs/SGIX/texture_env_add.txt">GL_SGIX_texture_add_env</a>
</li>
<li value=74> <a href="specs/EXT/color_subtable.txt">GL_EXT_color_subtable</a>
</li>
<li value=75> <a href="specs/EXT/object_space_tess.txt">GLU_EXT_object_space_tess</a>
</li>
<li value=76> <a href="specs/PGI/vertex_hints.txt">GL_PGI_vertex_hints</a>
</li>
<li value=77> <a href="specs/PGI/misc_hints.txt">GL_PGI_misc_hints</a>
</li>
<li value=78> <a href="specs/EXT/paletted_texture.txt">GL_EXT_paletted_texture</a>
</li>
<li value=79> <a href="specs/EXT/clip_volume_hint.txt">GL_EXT_clip_volume_hint</a>
</li>
<li value=80> <a href="specs/SGIX/list_priority.txt">GL_SGIX_list_priority</a>
</li>
<li value=81> <a href="specs/SGIX/ir_instrument1.txt">GL_SGIX_ir_instrument1</a>
</li>
<li value=83> <a href="specs/SGIX/video_resize.txt">GLX_SGIX_video_resize</a>
</li>
<li value=84> <a href="specs/SGIX/texture_lod_bias.txt">GL_SGIX_texture_lod_bias</a>
</li>
<li value=85> <a href="specs/SGI/filter4_parameters.txt">GLU_SGI_filter4_parameters</a>
</li>
<li value=86> <a href="specs/SGIX/dmbuffer.txt">GLX_SGIX_dm_buffer</a>
</li>
<li value=90> <a href="specs/SGIX/shadow_ambient.txt">GL_SGIX_shadow_ambient</a>
</li>
<li value=91> <a href="specs/SGIX/swap_group.txt">GLX_SGIX_swap_group</a>
</li>
<li value=92> <a href="specs/SGIX/swap_barrier.txt">GLX_SGIX_swap_barrier</a>
</li>
<li value=93> <a href="specs/EXT/index_texture.txt">GL_EXT_index_texture</a>
</li>
<li value=94> <a href="specs/EXT/index_material.txt">GL_EXT_index_material</a>
</li>
<li value=95> <a href="specs/EXT/index_func.txt">GL_EXT_index_func</a>
</li>
<li value=96> <a href="specs/EXT/index_array_formats.txt">GL_EXT_index_array_formats</a>
</li>
<li value=97> <a href="specs/EXT/compiled_vertex_array.txt">GL_EXT_compiled_vertex_array</a>
</li>
<li value=98> <a href="specs/EXT/cull_vertex.txt">GL_EXT_cull_vertex</a>
</li>
<li value=100> <a href="specs/EXT/nurbs_tessellator.txt">GLU_EXT_nurbs_tessellator</a>
</li>
<li value=101> <a href="specs/SGIX/ycrcb.txt">GL_SGIX_ycrcb</a>
</li>
<li value=102> <a href="specs/EXT/fragment_lighting.txt">GL_EXT_fragment_lighting</a>
</li>
<li value=110> <a href="specs/IBM/rasterpos_clip.txt">GL_IBM_rasterpos_clip</a>
</li>
<li value=111> <a href="specs/HP/texture_lighting.txt">GL_HP_texture_lighting</a>
</li>
<li value=112> <a href="specs/EXT/draw_range_elements.txt">GL_EXT_draw_range_elements</a>
</li>
<li value=113> <a href="specs/WIN/phong_shading.txt">GL_WIN_phong_shading</a>
</li>
<li value=114> <a href="specs/WIN/specular_fog.txt">GL_WIN_specular_fog</a>
</li>
<li value=115> <a href="specs/SGIS/color_range.txt">GLX_SGIS_color_range</a>
     <br> <a href="specs/SGIS/color_range.txt">GL_SGIS_color_range</a>
</li>
<li value=117> <a href="specs/EXT/light_texture.txt">GL_EXT_light_texture</a>
</li>
<li value=119> <a href="specs/SGIX/blend_alpha_minmax.txt">GL_SGIX_blend_alpha_minmax</a>
</li>
<li value=120> <a href="specs/EXT/scene_marker.txt">GL_EXT_scene_marker</a>
     <br> <a href="specs/EXT/scene_marker.txt">GLX_EXT_scene_marker</a>
</li>
<li value=127> <a href="specs/SGIX/pixel_texture_bits.txt">GL_SGIX_pixel_texture_bits</a>
</li>
<li value=129> <a href="specs/EXT/bgra.txt">GL_EXT_bgra</a>
</li>
<li value=132> <a href="specs/SGIX/async.txt">GL_SGIX_async</a>
</li>
<li value=133> <a href="specs/SGIX/async_pixel.txt">GL_SGIX_async_pixel</a>
</li>
<li value=134> <a href="specs/SGIX/async_histogram.txt">GL_SGIX_async_histogram</a>
</li>
<li value=135> <a href="specs/INTEL/texture_scissor.txt">GL_INTEL_texture_scissor</a>
</li>
<li value=136> <a href="specs/INTEL/parallel_arrays.txt">GL_INTEL_parallel_arrays</a>
</li>
<li value=137> <a href="specs/HP/occlusion_test.txt">GL_HP_occlusion_test</a>
</li>
<li value=138> <a href="specs/EXT/pixel_transform.txt">GL_EXT_pixel_transform</a>
</li>
<li value=139> <a href="specs/EXT/pixel_transform_color_table.txt">GL_EXT_pixel_transform_color_table</a>
</li>
<li value=141> <a href="specs/EXT/shared_texture_palette.txt">GL_EXT_shared_texture_palette</a>
</li>
<li value=142> <a href="specs/SGIS/blended_overlay.txt">GLX_SGIS_blended_overlay</a>
</li>
<li value=144> <a href="specs/EXT/separate_specular_color.txt">GL_EXT_separate_specular_color</a>
</li>
<li value=145> <a href="specs/EXT/secondary_color.txt">GL_EXT_secondary_color</a>
</li>
<li value=146> <a href="specs/EXT/texture_env.txt">GL_EXT_texture_env</a>
</li>
<li value=147> <a href="specs/EXT/texture_perturb_normal.txt">GL_EXT_texture_perturb_normal</a>
</li>
<li value=148> <a href="specs/EXT/multi_draw_arrays.txt">GL_EXT_multi_draw_arrays</a>
     <br> <a href="specs/EXT/multi_draw_arrays.txt">GL_SUN_multi_draw_arrays</a>
</li>
<li value=149> <a href="specs/EXT/fog_coord.txt">GL_EXT_fog_coord</a>
</li>
<li value=155> <a href="specs/REND/screen_coordinates.txt">GL_REND_screen_coordinates</a>
</li>
<li value=156> <a href="specs/EXT/coordinate_frame.txt">GL_EXT_coordinate_frame</a>
</li>
<li value=158> <a href="specs/EXT/texture_env_combine.txt">GL_EXT_texture_env_combine</a>
</li>
<li value=159> <a href="specs/APPLE/specular_vector.txt">GL_APPLE_specular_vector</a>
</li>
<li value=160> <a href="specs/APPLE/transform_hint.txt">GL_APPLE_transform_hint</a>
</li>
<li value=163> <a href="specs/SUNX/constant_data.txt">GL_SUNX_constant_data</a>
</li>
<li value=164> <a href="specs/SUN/global_alpha.txt">GL_SUN_global_alpha</a>
</li>
<li value=165> <a href="specs/SUN/triangle_list.txt">GL_SUN_triangle_list</a>
</li>
<li value=166> <a href="specs/SUN/vertex.txt">GL_SUN_vertex</a>
</li>
<li value=167> <a href="specs/EXT/wgl_display_color_table.txt">WGL_EXT_display_color_table</a>
</li>
<li value=168> <a href="specs/EXT/wgl_extensions_string.txt">WGL_EXT_extensions_string</a>
</li>
<li value=169> <a href="specs/EXT/wgl_make_current_read.txt">WGL_EXT_make_current_read</a>
</li>
<li value=170> <a href="specs/EXT/wgl_pixel_format.txt">WGL_EXT_pixel_format</a>
</li>
<li value=171> <a href="specs/EXT/wgl_pbuffer.txt">WGL_EXT_pbuffer</a>
</li>
<li value=172> <a href="specs/EXT/wgl_swap_control.txt">WGL_EXT_swap_control</a>
</li>
<li value=173> <a href="specs/EXT/blend_func_separate.txt">GL_EXT_blend_func_separate</a>
</li>
<li value=174> <a href="specs/INGR/color_clamp.txt">GL_INGR_color_clamp</a>
</li>
<li value=175> <a href="specs/INGR/interlace_read.txt">GL_INGR_interlace_read</a>
</li>
<li value=176> <a href="specs/EXT/stencil_wrap.txt">GL_EXT_stencil_wrap</a>
</li>
<li value=177> <a href="specs/EXT/wgl_depth_float.txt">WGL_EXT_depth_float</a>
</li>
<li value=178> <a href="specs/EXT/422_pixels.txt">GL_EXT_422_pixels</a>
</li>
<li value=179> <a href="specs/NV/texgen_reflection.txt">GL_NV_texgen_reflection</a>
</li>
<li value=181> <a href="specs/SGIX/texture_range.txt">GL_SGIX_texture_range</a>
</li>
<li value=182> <a href="specs/SUN/convolution_border_modes.txt">GL_SUN_convolution_border_modes</a>
</li>
<li value=183> <a href="specs/SUN/get_transparent_index.txt">GLX_SUN_get_transparent_index</a>
</li>
<li value=185> <a href="specs/EXT/texture_env_add.txt">GL_EXT_texture_env_add</a>
</li>
<li value=186> <a href="specs/EXT/texture_lod_bias.txt">GL_EXT_texture_lod_bias</a>
</li>
<li value=187> <a href="specs/EXT/texture_filter_anisotropic.txt">GL_EXT_texture_filter_anisotropic</a>
</li>
<li value=188> <a href="specs/EXT/vertex_weighting.txt">GL_EXT_vertex_weighting</a>
</li>
<li value=189> <a href="specs/NV/light_max_exponent.txt">GL_NV_light_max_exponent</a>
</li>
<li value=190> <a href="specs/NV/vertex_array_range.txt">GL_NV_vertex_array_range</a>
</li>
<li value=191> <a href="specs/NV/register_combiners.txt">GL_NV_register_combiners</a>
</li>
<li value=192> <a href="specs/NV/fog_distance.txt">GL_NV_fog_distance</a>
</li>
<li value=193> <a href="specs/NV/texgen_emboss.txt">GL_NV_texgen_emboss</a>
</li>
<li value=194> <a href="specs/NV/blend_square.txt">GL_NV_blend_square</a>
</li>
<li value=195> <a href="specs/NV/texture_env_combine4.txt">GL_NV_texture_env_combine4</a>
</li>
<li value=196> <a href="specs/MESA/resize_buffers.txt">GL_MESA_resize_buffers</a>
</li>
<li value=197> <a href="specs/MESA/window_pos.txt">GL_MESA_window_pos</a>
</li>
<li value=198> <a href="specs/EXT/texture_compression_s3tc.txt">GL_EXT_texture_compression_s3tc</a>
</li>
<li value=199> <a href="specs/IBM/cull_vertex.txt">GL_IBM_cull_vertex</a>
</li>
<li value=200> <a href="specs/IBM/multimode_draw_arrays.txt">GL_IBM_multimode_draw_arrays</a>
</li>
<li value=201> <a href="specs/IBM/vertex_array_lists.txt">GL_IBM_vertex_array_lists</a>
</li>
<li value=206> <a href="specs/3DFX/texture_compression_FXT1.txt">GL_3DFX_texture_compression_FXT1</a>
</li>
<li value=207> <a href="specs/3DFX/3dfx_multisample.txt">GL_3DFX_multisample</a>
</li>
<li value=208> <a href="specs/3DFX/tbuffer.txt">GL_3DFX_tbuffer</a>
</li>
<li value=209> <a href="specs/EXT/wgl_multisample.txt">WGL_EXT_multisample</a>
     <br> <a href="specs/EXT/wgl_multisample.txt">GL_EXT_multisample</a>
</li>
<li value=210> <a href="specs/SGIX/vertex_preclip.txt">GL_SGIX_vertex_preclip</a>
     <br> <a href="specs/SGIX/vertex_preclip.txt">GL_SGIX_vertex_preclip_hint</a>
</li>
<li value=211> <a href="specs/SGIX/convolution_accuracy.txt">GL_SGIX_convolution_accuracy</a>
</li>
<li value=212> <a href="specs/SGIX/resample.txt">GL_SGIX_resample</a>
</li>
<li value=213> <a href="specs/SGIS/point_line_texgen.txt">GL_SGIS_point_line_texgen</a>
</li>
<li value=214> <a href="specs/SGIS/texture_color_mask.txt">GL_SGIS_texture_color_mask</a>
</li>
<li value=215> <a href="specs/MESA/copy_sub_buffer.txt">GLX_MESA_copy_sub_buffer</a>
</li>
<li value=216> <a href="specs/MESA/pixmap_colormap.txt">GLX_MESA_pixmap_colormap</a>
</li>
<li value=217> <a href="specs/MESA/release_buffers.txt">GLX_MESA_release_buffers</a>
</li>
<li value=218> <a href="specs/MESA/set_3dfx_mode.txt">GLX_MESA_set_3dfx_mode</a>
</li>
<li value=220> <a href="specs/EXT/texture_env_dot3.txt">GL_EXT_texture_env_dot3</a>
</li>
<li value=221> <a href="specs/ATI/texture_mirror_once.txt">GL_ATI_texture_mirror_once</a>
</li>
<li value=222> <a href="specs/NV/fence.txt">GL_NV_fence</a>
</li>
<li value=223> <a href="specs/IBM/static_data.txt">GL_IBM_static_data</a>
</li>
<li value=224> <a href="specs/IBM/texture_mirrored_repeat.txt">GL_IBM_texture_mirrored_repeat</a>
</li>
<li value=225> <a href="specs/NV/evaluators.txt">GL_NV_evaluators</a>
</li>
<li value=226> <a href="specs/NV/packed_depth_stencil.txt">GL_NV_packed_depth_stencil</a>
</li>
<li value=227> <a href="specs/NV/register_combiners2.txt">GL_NV_register_combiners2</a>
</li>
<li value=228> <a href="specs/NV/texture_compression_vtc.txt">GL_NV_texture_compression_vtc</a>
</li>
<li value=229> <a href="specs/NV/texture_rectangle.txt">GL_NV_texture_rectangle</a>
</li>
<li value=230> <a href="specs/NV/texture_shader.txt">GL_NV_texture_shader</a>
</li>
<li value=231> <a href="specs/NV/texture_shader2.txt">GL_NV_texture_shader2</a>
</li>
<li value=232> <a href="specs/NV/vertex_array_range2.txt">GL_NV_vertex_array_range2</a>
</li>
<li value=233> <a href="specs/NV/vertex_program.txt">GL_NV_vertex_program</a>
</li>
<li value=234> <a href="specs/SGIX/visual_select_group.txt">GLX_SGIX_visual_select_group</a>
</li>
<li value=235> <a href="specs/SGIX/texture_coordinate_clamp.txt">GL_SGIX_texture_coordinate_clamp</a>
</li>
<li value=237> <a href="specs/OML/glx_swap_method.txt">GLX_OML_swap_method</a>
</li>
<li value=238> <a href="specs/OML/glx_sync_control.txt">GLX_OML_sync_control</a>
</li>
<li value=239> <a href="specs/OML/interlace.txt">GL_OML_interlace</a>
</li>
<li value=240> <a href="specs/OML/subsample.txt">GL_OML_subsample</a>
</li>
<li value=241> <a href="specs/OML/resample.txt">GL_OML_resample</a>
</li>
<li value=242> <a href="specs/OML/wgl_sync_control.txt">WGL_OML_sync_control</a>
</li>
<li value=243> <a href="specs/NV/copy_depth_to_color.txt">GL_NV_copy_depth_to_color</a>
</li>
<li value=244> <a href="specs/ATI/envmap_bumpmap.txt">GL_ATI_envmap_bumpmap</a>
</li>
<li value=245> <a href="specs/ATI/fragment_shader.txt">GL_ATI_fragment_shader</a>
</li>
<li value=246> <a href="specs/ATI/pn_triangles.txt">GL_ATI_pn_triangles</a>
</li>
<li value=247> <a href="specs/ATI/vertex_array_object.txt">GL_ATI_vertex_array_object</a>
</li>
<li value=248> <a href="specs/EXT/vertex_shader.txt">GL_EXT_vertex_shader</a>
</li>
<li value=249> <a href="specs/ATI/vertex_streams.txt">GL_ATI_vertex_streams</a>
</li>
<li value=250> <a href="specs/I3D/wgl_digital_video_control.txt">WGL_I3D_digital_video_control</a>
</li>
<li value=251> <a href="specs/I3D/wgl_gamma.txt">WGL_I3D_gamma</a>
</li>
<li value=252> <a href="specs/I3D/wgl_genlock.txt">WGL_I3D_genlock</a>
</li>
<li value=253> <a href="specs/I3D/wgl_image_buffer.txt">WGL_I3D_image_buffer</a>
</li>
<li value=254> <a href="specs/I3D/wgl_swap_frame_lock.txt">WGL_I3D_swap_frame_lock</a>
</li>
<li value=255> <a href="specs/I3D/wgl_swap_frame_usage.txt">WGL_I3D_swap_frame_usage</a>
</li>
<li value=256> <a href="specs/ATI/element_array.txt">GL_ATI_element_array</a>
</li>
<li value=257> <a href="specs/SUN/mesh_array.txt">GL_SUN_mesh_array</a>
</li>
<li value=258> <a href="specs/SUN/slice_accum.txt">GL_SUN_slice_accum</a>
</li>
<li value=259> <a href="specs/NV/multisample_filter_hint.txt">GL_NV_multisample_filter_hint</a>
</li>
<li value=260> <a href="specs/NV/depth_clamp.txt">GL_NV_depth_clamp</a>
</li>
<li value=261> <a href="specs/NV/occlusion_query.txt">GL_NV_occlusion_query</a>
</li>
<li value=262> <a href="specs/NV/point_sprite.txt">GL_NV_point_sprite</a>
</li>
<li value=263> <a href="specs/NV/render_depth_texture.txt">WGL_NV_render_depth_texture</a>
</li>
<li value=264> <a href="specs/NV/render_texture_rectangle.txt">WGL_NV_render_texture_rectangle</a>
</li>
<li value=265> <a href="specs/NV/texture_shader3.txt">GL_NV_texture_shader3</a>
</li>
<li value=266> <a href="specs/NV/vertex_program1_1.txt">GL_NV_vertex_program1_1</a>
</li>
<li value=267> <a href="specs/EXT/shadow_funcs.txt">GL_EXT_shadow_funcs</a>
</li>
<li value=268> <a href="specs/EXT/stencil_two_side.txt">GL_EXT_stencil_two_side</a>
</li>
<li value=269> <a href="specs/ATI/text_fragment_shader.txt">GL_ATI_text_fragment_shader</a>
</li>
<li value=270> <a href="specs/APPLE/client_storage.txt">GL_APPLE_client_storage</a>
</li>
<li value=271> <a href="specs/APPLE/element_array.txt">GL_APPLE_element_array</a>
</li>
<li value=272> <a href="specs/APPLE/fence.txt">GL_APPLE_fence</a>
</li>
<li value=273> <a href="specs/APPLE/vertex_array_object.txt">GL_APPLE_vertex_array_object</a>
</li>
<li value=274> <a href="specs/APPLE/vertex_array_range.txt">GL_APPLE_vertex_array_range</a>
</li>
<li value=275> <a href="specs/APPLE/ycbcr_422.txt">GL_APPLE_ycbcr_422</a>
</li>
<li value=276> <a href="specs/S3/s3tc.txt">GL_S3_s3tc</a>
</li>
<li value=277> <a href="specs/ATI/draw_buffers.txt">GL_ATI_draw_buffers</a>
</li>
<li value=278> <a href="specs/ATI/pixel_format_float.txt">WGL_ATI_pixel_format_float</a>
</li>
<li value=279> <a href="specs/ATI/texture_env_combine3.txt">GL_ATI_texture_env_combine3</a>
</li>
<li value=280> <a href="specs/ATI/texture_float.txt">GL_ATI_texture_float</a>
</li>
<li value=281> <a href="specs/NV/float_buffer.txt">GL_NV_float_buffer</a>
     <br> <a href="specs/NV/float_buffer.txt">WGL_NV_float_buffer</a>
</li>
<li value=282> <a href="specs/NV/fragment_program.txt">GL_NV_fragment_program</a>
</li>
<li value=283> <a href="specs/NV/half_float.txt">GL_NV_half_float</a>
</li>
<li value=284> <a href="specs/NV/pixel_data_range.txt">GL_NV_pixel_data_range</a>
</li>
<li value=285> <a href="specs/NV/primitive_restart.txt">GL_NV_primitive_restart</a>
</li>
<li value=286> <a href="specs/NV/texture_expand_normal.txt">GL_NV_texture_expand_normal</a>
</li>
<li value=287> <a href="specs/NV/vertex_program2.txt">GL_NV_vertex_program2</a>
</li>
<li value=288> <a href="specs/ATI/map_object_buffer.txt">GL_ATI_map_object_buffer</a>
</li>
<li value=289> <a href="specs/ATI/separate_stencil.txt">GL_ATI_separate_stencil</a>
</li>
<li value=290> <a href="specs/ATI/vertex_attrib_array_object.txt">GL_ATI_vertex_attrib_array_object</a>
</li>
<li value=291> <a href="specs/OES/OES_byte_coordinates.txt">GL_OES_byte_coordinates</a>
</li>
<li value=292> <a href="specs/OES/OES_fixed_point.txt">GL_OES_fixed_point</a>
</li>
<li value=293> <a href="specs/OES/OES_single_precision.txt">GL_OES_single_precision</a>
</li>
<li value=294> <a href="specs/OES/OES_compressed_paletted_texture.txt">GL_OES_compressed_paletted_texture</a>
</li>
<li value=295> <a href="specs/OES/OES_read_format.txt">GL_OES_read_format</a>
</li>
<li value=296> <a href="specs/OES/OES_query_matrix.txt">GL_OES_query_matrix</a>
</li>
<li value=297> <a href="specs/EXT/depth_bounds_test.txt">GL_EXT_depth_bounds_test</a>
</li>
<li value=298> <a href="specs/EXT/texture_mirror_clamp.txt">GL_EXT_texture_mirror_clamp</a>
</li>
<li value=299> <a href="specs/EXT/blend_equation_separate.txt">GL_EXT_blend_equation_separate</a>
</li>
<li value=300> <a href="specs/MESA/pack_invert.txt">GL_MESA_pack_invert</a>
</li>
<li value=301> <a href="specs/MESA/ycbcr_texture.txt">GL_MESA_ycbcr_texture</a>
</li>
<li value=302> <a href="specs/EXT/pixel_buffer_object.txt">GL_EXT_pixel_buffer_object</a>
</li>
<li value=303> <a href="specs/NV/fragment_program_option.txt">GL_NV_fragment_program_option</a>
</li>
<li value=304> <a href="specs/NV/fragment_program2.txt">GL_NV_fragment_program2</a>
</li>
<li value=305> <a href="specs/NV/vertex_program2_option.txt">GL_NV_vertex_program2_option</a>
</li>
<li value=306> <a href="specs/NV/vertex_program3.txt">GL_NV_vertex_program3</a>
</li>
<li value=307> <a href="specs/SGIX/hyperpipe_group.txt">GLX_SGIX_hyperpipe</a>
</li>
<li value=308> <a href="specs/MESA/agp_offset.txt">GLX_MESA_agp_offset</a>
</li>
<li value=309> <a href="specs/EXT/texture_compression_dxt1.txt">GL_EXT_texture_compression_dxt1</a>
</li>
<li value=310> <a href="specs/EXT/framebuffer_object.txt">GL_EXT_framebuffer_object</a>
</li>
<li value=311> <a href="specs/GREMEDY/string_marker.txt">GL_GREMEDY_string_marker</a>
</li>
<li value=312> <a href="specs/EXT/packed_depth_stencil.txt">GL_EXT_packed_depth_stencil</a>
</li>
<li value=313> <a href="specs/3DL/stereo_control.txt">WGL_3DL_stereo_control</a>
</li>
<li value=314> <a href="specs/EXT/stencil_clear_tag.txt">GL_EXT_stencil_clear_tag</a>
</li>
<li value=315> <a href="specs/EXT/texture_sRGB.txt">GL_EXT_texture_sRGB</a>
</li>
<li value=316> <a href="specs/EXT/framebuffer_blit.txt">GL_EXT_framebuffer_blit</a>
</li>
<li value=317> <a href="specs/EXT/framebuffer_multisample.txt">GL_EXT_framebuffer_multisample</a>
</li>
<li value=318> <a href="specs/MESAX/texture_stack.txt">GL_MESAX_texture_stack</a>
</li>
<li value=319> <a href="specs/EXT/timer_query.txt">GL_EXT_timer_query</a>
</li>
<li value=320> <a href="specs/EXT/gpu_program_parameters.txt">GL_EXT_gpu_program_parameters</a>
</li>
<li value=321> <a href="specs/APPLE/flush_buffer_range.txt">GL_APPLE_flush_buffer_range</a>
</li>
<li value=322> <a href="specs/NV/gpu_program4.txt">GL_NV_gpu_program4</a>
</li>
<li value=323> <a href="specs/NV/geometry_program4.txt">GL_NV_geometry_program4</a>
</li>
<li value=324> <a href="specs/EXT/geometry_shader4.txt">GL_EXT_geometry_shader4</a>
</li>
<li value=325> <a href="specs/NV/vertex_program4.txt">GL_NV_vertex_program4</a>
</li>
<li value=326> <a href="specs/EXT/gpu_shader4.txt">GL_EXT_gpu_shader4</a>
</li>
<li value=327> <a href="specs/EXT/draw_instanced.txt">GL_EXT_draw_instanced</a>
</li>
<li value=328> <a href="specs/EXT/packed_float.txt">GL_EXT_packed_float</a>
     <br> <a href="specs/EXT/packed_float.txt">WGL_EXT_pixel_format_packed_float</a>
     <br> <a href="specs/EXT/packed_float.txt">GLX_EXT_fbconfig_packed_float</a>
</li>
<li value=329> <a href="specs/EXT/texture_array.txt">GL_EXT_texture_array</a>
</li>
<li value=330> <a href="specs/EXT/texture_buffer_object.txt">GL_EXT_texture_buffer_object</a>
</li>
<li value=331> <a href="specs/EXT/texture_compression_latc.txt">GL_EXT_texture_compression_latc</a>
</li>
<li value=332> <a href="specs/EXT/texture_compression_rgtc.txt">GL_EXT_texture_compression_rgtc</a>
</li>
<li value=333> <a href="specs/EXT/texture_shared_exponent.txt">GL_EXT_texture_shared_exponent</a>
</li>
<li value=334> <a href="specs/NV/depth_buffer_float.txt">GL_NV_depth_buffer_float</a>
</li>
<li value=335> <a href="specs/NV/fragment_program4.txt">GL_NV_fragment_program4</a>
</li>
<li value=336> <a href="specs/NV/framebuffer_multisample_coverage.txt">GL_NV_framebuffer_multisample_coverage</a>
</li>
<li value=337> <a href="specs/EXT/framebuffer_sRGB.txt">GL_EXT_framebuffer_sRGB</a>
     <br> <a href="specs/EXT/framebuffer_sRGB.txt">GLX_EXT_framebuffer_sRGB</a>
     <br> <a href="specs/EXT/framebuffer_sRGB.txt">WGL_EXT_framebuffer_sRGB</a>
</li>
<li value=338> <a href="specs/NV/geometry_shader4.txt">GL_NV_geometry_shader4</a>
</li>
<li value=339> <a href="specs/NV/parameter_buffer_object.txt">GL_NV_parameter_buffer_object</a>
</li>
<li value=340> <a href="specs/EXT/draw_buffers2.txt">GL_EXT_draw_buffers2</a>
</li>
<li value=341> <a href="specs/NV/transform_feedback.txt">GL_NV_transform_feedback</a>
</li>
<li value=342> <a href="specs/EXT/bindable_uniform.txt">GL_EXT_bindable_uniform</a>
</li>
<li value=343> <a href="specs/EXT/texture_integer.txt">GL_EXT_texture_integer</a>
</li>
<li value=344> <a href="specs/EXT/texture_from_pixmap.txt">GLX_EXT_texture_from_pixmap</a>
</li>
<li value=345> <a href="specs/GREMEDY/frame_terminator.txt">GL_GREMEDY_frame_terminator</a>
</li>
<li value=346> <a href="specs/NV/conditional_render.txt">GL_NV_conditional_render</a>
</li>
<li value=347> <a href="specs/NV/present_video.txt">GL_NV_present_video</a>
     <br> <a href="specs/NV/present_video.txt">GLX_NV_present_video</a>
     <br> <a href="specs/NV/present_video.txt">WGL_NV_present_video</a>
</li>
<li value=348> <a href="specs/NV/glx_video_out.txt">GLX_NV_video_output</a>
</li>
<li value=349> <a href="specs/NV/wgl_video_out.txt">WGL_NV_video_output</a>
</li>
<li value=350> <a href="specs/NV/glx_swap_group.txt">GLX_NV_swap_group</a>
</li>
<li value=351> <a href="specs/NV/wgl_swap_group.txt">WGL_NV_swap_group</a>
</li>
<li value=352> <a href="specs/EXT/transform_feedback.txt">GL_EXT_transform_feedback</a>
</li>
<li value=353> <a href="specs/EXT/direct_state_access.txt">GL_EXT_direct_state_access</a>
</li>
<li value=354> <a href="specs/EXT/vertex_array_bgra.txt">GL_EXT_vertex_array_bgra</a>
</li>
<li value=355> <a href="specs/NV/gpu_affinity.txt">WGL_NV_gpu_affinity</a>
</li>
<li value=356> <a href="specs/EXT/texture_swizzle.txt">GL_EXT_texture_swizzle</a>
</li>
<li value=357> <a href="specs/NV/explicit_multisample.txt">GL_NV_explicit_multisample</a>
</li>
<li value=358> <a href="specs/NV/transform_feedback2.txt">GL_NV_transform_feedback2</a>
</li>
<li value=359> <a href="specs/ATI/meminfo.txt">GL_ATI_meminfo</a>
</li>
<li value=360> <a href="specs/AMD/performance_monitor.txt">GL_AMD_performance_monitor</a>
</li>
<li value=361> <a href="specs/AMD/wgl_gpu_association.txt">WGL_AMD_gpu_association</a>
</li>
<li value=362> <a href="specs/AMD/texture_texture4.txt">GL_AMD_texture_texture4</a>
</li>
<li value=363> <a href="specs/AMD/vertex_shader_tessellator.txt">GL_AMD_vertex_shader_tessellator</a>
</li>
<li value=364> <a href="specs/EXT/provoking_vertex.txt">GL_EXT_provoking_vertex</a>
</li>
<li value=365> <a href="specs/EXT/texture_snorm.txt">GL_EXT_texture_snorm</a>
</li>
<li value=366> <a href="specs/AMD/draw_buffers_blend.txt">GL_AMD_draw_buffers_blend</a>
</li>
<li value=367> <a href="specs/APPLE/texture_range.txt">GL_APPLE_texture_range</a>
</li>
<li value=368> <a href="specs/APPLE/float_pixels.txt">GL_APPLE_float_pixels</a>
</li>
<li value=369> <a href="specs/APPLE/vertex_program_evaluators.txt">GL_APPLE_vertex_program_evaluators</a>
</li>
<li value=370> <a href="specs/APPLE/aux_depth_stencil.txt">GL_APPLE_aux_depth_stencil</a>
</li>
<li value=371> <a href="specs/APPLE/object_purgeable.txt">GL_APPLE_object_purgeable</a>
</li>
<li value=372> <a href="specs/APPLE/row_bytes.txt">GL_APPLE_row_bytes</a>
</li>
<li value=373> <a href="specs/APPLE/rgb_422.txt">GL_APPLE_rgb_422</a>
</li>
<li value=374> <a href="specs/NV/video_capture.txt">GL_NV_video_capture</a>
     <br> <a href="specs/NV/video_capture.txt">GLX_NV_video_capture</a>
     <br> <a href="specs/NV/video_capture.txt">WGL_NV_video_capture</a>
</li>
<li value=375> <a href="specs/EXT/swap_control.txt">GL_EXT_swap_control</a>
</li>
<li value=376> <a href="specs/NV/copy_image.txt">GL_NV_copy_image</a>
     <br> <a href="specs/NV/copy_image.txt">WGL_NV_copy_image</a>
     <br> <a href="specs/NV/copy_image.txt">GLX_NV_copy_image</a>
</li>
<li value=377> <a href="specs/EXT/separate_shader_objects.txt">GL_EXT_separate_shader_objects</a>
</li>
<li value=378> <a href="specs/NV/parameter_buffer_object2.txt">GL_NV_parameter_buffer_object2</a>
</li>
<li value=379> <a href="specs/NV/shader_buffer_load.txt">GL_NV_shader_buffer_load</a>
</li>
<li value=380> <a href="specs/NV/vertex_buffer_unified_memory.txt">GL_NV_vertex_buffer_unified_memory</a>
</li>
<li value=381> <a href="specs/NV/texture_barrier.txt">GL_NV_texture_barrier</a>
</li>
<li value=382> <a href="specs/AMD/shader_stencil_export.txt">GL_AMD_shader_stencil_export</a>
</li>
<li value=383> <a href="specs/AMD/seamless_cubemap_per_texture.txt">GL_AMD_seamless_cubemap_per_texture</a>
</li>
<li value=384> <a href="specs/INTEL/swap_event.txt">GLX_INTEL_swap_event</a>
</li>
<li value=385> <a href="specs/AMD/conservative_depth.txt">GL_AMD_conservative_depth</a>
</li>
<li value=386> <a href="specs/EXT/shader_image_load_store.txt">GL_EXT_shader_image_load_store</a>
</li>
<li value=387> <a href="specs/EXT/vertex_attrib_64bit.txt">GL_EXT_vertex_attrib_64bit</a>
</li>
<li value=388> <a href="specs/NV/gpu_program5.txt">GL_NV_gpu_program5</a>
</li>
<li value=389> <a href="specs/NV/gpu_shader5.txt">GL_NV_gpu_shader5</a>
</li>
<li value=390> <a href="specs/NV/shader_buffer_store.txt">GL_NV_shader_buffer_store</a>
</li>
<li value=391> <a href="specs/NV/tessellation_program5.txt">GL_NV_tessellation_program5</a>
</li>
<li value=392> <a href="specs/NV/vertex_attrib_integer_64bit.txt">GL_NV_vertex_attrib_integer_64bit</a>
</li>
<li value=393> <a href="specs/NV/multisample_coverage.txt">GL_NV_multisample_coverage</a>
</li>
<li value=394> <a href="specs/AMD/name_gen_delete.txt">GL_AMD_name_gen_delete</a>
</li>
<li value=395> <a href="specs/AMD/debug_output.txt">GL_AMD_debug_output</a>
</li>
<li value=396> <a href="specs/NV/vdpau_interop.txt">GL_NV_vdpau_interop</a>
</li>
<li value=397> <a href="specs/AMD/transform_feedback3_lines_triangles.txt">GL_AMD_transform_feedback3_lines_triangles</a>
</li>
<li value=398> <a href="specs/AMD/glx_gpu_association.txt">GLX_AMD_gpu_association</a>
</li>
<li value=399> <a href="specs/EXT/glx_create_context_es2_profile.txt">GLX_EXT_create_context_es2_profile</a>
</li>
<li value=400> <a href="specs/EXT/wgl_create_context_es2_profile.txt">WGL_EXT_create_context_es2_profile</a>
</li>
<li value=401> <a href="specs/AMD/depth_clamp_separate.txt">GL_AMD_depth_clamp_separate</a>
</li>
<li value=402> <a href="specs/EXT/texture_sRGB_decode.txt">GL_EXT_texture_sRGB_decode</a>
</li>
<li value=403> <a href="specs/NV/texture_multisample.txt">GL_NV_texture_multisample</a>
</li>
<li value=404> <a href="specs/AMD/blend_minmax_factor.txt">GL_AMD_blend_minmax_factor</a>
</li>
<li value=405> <a href="specs/AMD/sample_positions.txt">GL_AMD_sample_positions</a>
</li>
<li value=406> <a href="specs/EXT/x11_sync_object.txt">GL_EXT_x11_sync_object</a>
</li>
<li value=407> <a href="specs/NV/DX_interop.txt">WGL_NV_DX_interop</a>
</li>
<li value=408> <a href="specs/AMD/multi_draw_indirect.txt">GL_AMD_multi_draw_indirect</a>
</li>
<li value=409> <a href="specs/EXT/framebuffer_multisample_blit_scaled.txt">GL_EXT_framebuffer_multisample_blit_scaled</a>
</li>
<li value=410> <a href="specs/NV/path_rendering.txt">GL_NV_path_rendering</a>
</li>
<li value=411> <a href="specs/AMD/pinned_memory.txt">GL_AMD_pinned_memory</a>
</li>
<li value=412> <a href="specs/NV/DX_interop2.txt">WGL_NV_DX_interop2</a>
</li>
<li value=413> <a href="specs/AMD/stencil_operation_extended.txt">GL_AMD_stencil_operation_extended</a>
</li>
<li value=414> <a href="specs/EXT/glx_swap_control_tear.txt">GLX_EXT_swap_control_tear</a>
</li>
</ol>
<h6>Other Extensions</h6>
<p>These extensions have not yet been assigned numbers,
		  are still under development, or were abandoned (but
		  are kept in the extension registry for reference purposes).</p>
<ul>
<li> <a href="specs/EXT/static_vertex_array.txt">GL_EXT_static_vertex_array</a>
</li>
<li> <a href="specs/EXT/vertex_array_set.txt">GL_EXT_vertex_array_set</a>
</li>
<li> <a href="specs/EXT/vertex_array_set.alt.txt">GL_EXT_vertex_array_setXXX</a>
</li>
<li> <a href="specs/SGIX/fog_texture.txt">GL_SGIX_fog_texture</a>
</li>
<li> <a href="specs/SGIX/fragment_specular_lighting.txt">GL_SGIX_fragment_specular_lighting</a>
</li>
</ul>
</div> <!--content --> 
</div> <!--main --> 
</div> <!--container --> 
     
<div id="right_column" >
<div class="cap_top">Column Header</div>
<div class="sidecontent">
<h2>Documentation</h2>
<div id="sectionnav">
<ul>
        <li><a href="/documentation/current_version/">About OpenGL 4.2</a></li>
        <li><a href="/documentation/glsl/">OpenGL Shading Language</a></li>
        <li><a href="/documentation/extensions/">About OpenGL Extensions</a></li>
        <li><a href="/registry/">OpenGL Registry</a></li>
        <li><a href="https://www.khronos.org/bugzilla/enter_bug.cgi?product=OpenGL">Spec Feedback Form</a></li>
        <li><a href="/sdk/docs/man4/">OpenGL 4.2 Reference Pages</a></li>
        <li><a href="/sdk/docs/man3/">OpenGL 3.3 Reference Pages</a></li>
        <li><a href="/sdk/docs/man/">OpenGL 2.1 Reference Pages</a></li>
        <li><a href="/documentation/implementations/">OS/Platform Implementations</a></li>
        <li><a href="/documentation/books/">OpenGL Books</a></li>
<li><a href="http://www.khronos.org/files/opengl-quick-reference-card.pdf">OpenGL 3.3 & GLSL 1.5 Quick Reference Card</a></li>
<li><a href="http://www.khronos.org/files/opengl42-quick-reference-card.pdf">OpenGL 4.2 & GLSL 4.2 Quick Reference Card</a></li>
</ul>
</div>

</div>
<div class="cap_bottom">Column Footer</div>	
</div>

<hr class="spacer" />
    <div id="footer">
    <div id="footer-inside">
		<div id="footer-contents">
      <ul id="footer-menu">
        <li><a href="/about/">About OpenGL</a></li>
        <li><a href="/about/privacy/">Privacy Policy</a></li>
      </ul>
      <p class="small-print">OpenGL is a registered trademark of <a href="http://www.sgi.com">SGI</a></p>
      <p class="small-print">Website Copyright 1997 - 2012 <a href="http://khronos.org" title="Visit the Khronos Group website">The Khronos Group</a>. All rights reserved.</p>
	<p class="small-print">OpenGL.org organization managed by <A href="http://www.goldstandardgroup.com">Gold Standard Group</a> and website maintained by <a href="http://outofcontrol.ca/clients/khronos-group">Out of Control&reg;</a></p>
         </div>   
	  </div>
    </div>
</div> <!--wrap -->   
</body>
</html>
