<?php

/* JukeboxJukeboxBundle:Jukebox:show.html.twig */
class __TwigTemplate_2d2b97214cca539a356a26e42cdd3dfea42a681dcb7ae64391a7d30e81347202 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JukeboxJukeboxBundle::layout.html.twig", "JukeboxJukeboxBundle:Jukebox:show.html.twig", 2);
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
        $__internal_f0e9a4889f7bcb55b75434c667e5880c893438b0d227fbe2519b411520a1c39f = $this->env->getExtension("native_profiler");
        $__internal_f0e9a4889f7bcb55b75434c667e5880c893438b0d227fbe2519b411520a1c39f->enter($__internal_f0e9a4889f7bcb55b75434c667e5880c893438b0d227fbe2519b411520a1c39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JukeboxJukeboxBundle:Jukebox:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e9a4889f7bcb55b75434c667e5880c893438b0d227fbe2519b411520a1c39f->leave($__internal_f0e9a4889f7bcb55b75434c667e5880c893438b0d227fbe2519b411520a1c39f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a1b1ee59a6d32868013a3ba34d39f8af02ecb4a7faa9e0750fb662f45ec47fe = $this->env->getExtension("native_profiler");
        $__internal_8a1b1ee59a6d32868013a3ba34d39f8af02ecb4a7faa9e0750fb662f45ec47fe->enter($__internal_8a1b1ee59a6d32868013a3ba34d39f8af02ecb4a7faa9e0750fb662f45ec47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Artista";
        
        $__internal_8a1b1ee59a6d32868013a3ba34d39f8af02ecb4a7faa9e0750fb662f45ec47fe->leave($__internal_8a1b1ee59a6d32868013a3ba34d39f8af02ecb4a7faa9e0750fb662f45ec47fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5662e3263b7858303676f1ce9c02b9d28cdb44c2603355228034bec9825292 = $this->env->getExtension("native_profiler");
        $__internal_1e5662e3263b7858303676f1ce9c02b9d28cdb44c2603355228034bec9825292->enter($__internal_1e5662e3263b7858303676f1ce9c02b9d28cdb44c2603355228034bec9825292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artista"]) ? $context["artista"] : $this->getContext($context, "artista")), "nombre", array()), "html", null, true);
        echo "</h1>

\t<div class=\"date\">";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["artista"]) ? $context["artista"] : $this->getContext($context, "artista")), "fechanacimiento", array()), "d-m-Y"), "html", null, true);
        echo "</div>

\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["artista"]) ? $context["artista"] : $this->getContext($context, "artista")), "descripcion", array()), "html", null, true);
        echo "
</section>

\t</div>
";
        
        $__internal_1e5662e3263b7858303676f1ce9c02b9d28cdb44c2603355228034bec9825292->leave($__internal_1e5662e3263b7858303676f1ce9c02b9d28cdb44c2603355228034bec9825292_prof);

    }

    public function getTemplateName()
    {
        return "JukeboxJukeboxBundle:Jukebox:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* {# src/Jukebox/JukeboxBundle/Resources/views/Jukebox/show.html.twig #}*/
/* {% extends "JukeboxJukeboxBundle::layout.html.twig" %}*/
/* {% block title %}Artista{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<h1>{{artista.nombre}}</h1>*/
/* */
/* 	<div class="date">{{artista.fechanacimiento|date('d-m-Y')}}</div>*/
/* */
/* 	<div class="body">*/
/* 		{{artista.descripcion}}*/
/* </section>*/
/* */
/* 	</div>*/
/* {% endblock %}*/
/* */
