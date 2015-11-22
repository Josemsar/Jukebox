<?php

/* JukeboxJukeboxBundle::layout.html.twig */
class __TwigTemplate_e0ee703ef3d2b18d317ab8a5baee232e10b4656579fa1eae0ac903a870de0ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "JukeboxJukeboxBundle::layout.html.twig", 2);
        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2340a0f2e72b2cfe7a060b09fa06cc70e7d18a3f1d9658d85f771da383893ab9 = $this->env->getExtension("native_profiler");
        $__internal_2340a0f2e72b2cfe7a060b09fa06cc70e7d18a3f1d9658d85f771da383893ab9->enter($__internal_2340a0f2e72b2cfe7a060b09fa06cc70e7d18a3f1d9658d85f771da383893ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JukeboxJukeboxBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2340a0f2e72b2cfe7a060b09fa06cc70e7d18a3f1d9658d85f771da383893ab9->leave($__internal_2340a0f2e72b2cfe7a060b09fa06cc70e7d18a3f1d9658d85f771da383893ab9_prof);

    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4c10b5a243c876ad131c45bb581362a2150ae38a13584124466785c79c40221a = $this->env->getExtension("native_profiler");
        $__internal_4c10b5a243c876ad131c45bb581362a2150ae38a13584124466785c79c40221a->enter($__internal_4c10b5a243c876ad131c45bb581362a2150ae38a13584124466785c79c40221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 5
        echo "    Contenido de sidebar
";
        
        $__internal_4c10b5a243c876ad131c45bb581362a2150ae38a13584124466785c79c40221a->leave($__internal_4c10b5a243c876ad131c45bb581362a2150ae38a13584124466785c79c40221a_prof);

    }

    public function getTemplateName()
    {
        return "JukeboxJukeboxBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/Jukebox/JukeboxBundle/Resources/views/layout.html.twig #}*/
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block sidebar %}*/
/*     Contenido de sidebar*/
/* {% endblock %}*/
/* */
