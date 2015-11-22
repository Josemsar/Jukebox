<?php

/* JukeboxJukeboxBundle:Jukebox:contact.html.twig */
class __TwigTemplate_7d382d9cc0f0ad58992c5652a25d442e6b39e43f8e42bfeca7e96a22c132cb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JukeboxJukeboxBundle::layout.html.twig", "JukeboxJukeboxBundle:Jukebox:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JukeboxJukeboxBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ee02c96767d9105f04a500b86fc490161727308a4ae2104211045f40329fa4a = $this->env->getExtension("native_profiler");
        $__internal_0ee02c96767d9105f04a500b86fc490161727308a4ae2104211045f40329fa4a->enter($__internal_0ee02c96767d9105f04a500b86fc490161727308a4ae2104211045f40329fa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JukeboxJukeboxBundle:Jukebox:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ee02c96767d9105f04a500b86fc490161727308a4ae2104211045f40329fa4a->leave($__internal_0ee02c96767d9105f04a500b86fc490161727308a4ae2104211045f40329fa4a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fe9c1cf434bc3439644faa667133654ca23be7fcbfafd96d5e9ad69820cf1e5 = $this->env->getExtension("native_profiler");
        $__internal_7fe9c1cf434bc3439644faa667133654ca23be7fcbfafd96d5e9ad69820cf1e5->enter($__internal_7fe9c1cf434bc3439644faa667133654ca23be7fcbfafd96d5e9ad69820cf1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_7fe9c1cf434bc3439644faa667133654ca23be7fcbfafd96d5e9ad69820cf1e5->leave($__internal_7fe9c1cf434bc3439644faa667133654ca23be7fcbfafd96d5e9ad69820cf1e5_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a454d1a583c2013bc282876c86c8302ac159bde73b1dee67a90f7265a9db02 = $this->env->getExtension("native_profiler");
        $__internal_93a454d1a583c2013bc282876c86c8302ac159bde73b1dee67a90f7265a9db02->enter($__internal_93a454d1a583c2013bc282876c86c8302ac159bde73b1dee67a90f7265a9db02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_93a454d1a583c2013bc282876c86c8302ac159bde73b1dee67a90f7265a9db02->leave($__internal_93a454d1a583c2013bc282876c86c8302ac159bde73b1dee67a90f7265a9db02_prof);

    }

    public function getTemplateName()
    {
        return "JukeboxJukeboxBundle:Jukebox:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
/* {# src/Jukebox/JukeboxBundle/Resources/views/Jukebox/contact.html.twig #}*/
/* {% extends 'JukeboxJukeboxBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Contact{% endblock%}*/
/* */
/* {% block body %}*/
/*     <header>*/
/*         <h1>Contacta conmigo</h1>*/
/*     </header>*/
/* */
/*     <p>Puedes encontrarme en las siguientes redes sociales:</p>*/
/* 	<ul>*/
/* 		<li><a href="https://twitter.com/claorden" target="_blank">Twitter</a></li>*/
/* 		<li><a href="https://www.linkedin.com/in/claorden" target="_blank">LinkedIn</a></li>*/
/* 	</ul>*/
/* {% endblock %}*/
/* */
