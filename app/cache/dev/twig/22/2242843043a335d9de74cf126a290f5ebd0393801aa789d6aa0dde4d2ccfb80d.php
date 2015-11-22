<?php

/* JukeboxJukeboxBundle:Jukebox:list.html.twig */
class __TwigTemplate_86f5d2bda49007b25bf623cc3400879e2f319f9ec108ffa9c1ddb08304699aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("JukeboxJukeboxBundle::layout.html.twig", "JukeboxJukeboxBundle:Jukebox:list.html.twig", 2);
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
        $__internal_bd34ee7673228f734f3e06064024b5221926876ac3ae135c5c41d3a4b6e9dc1d = $this->env->getExtension("native_profiler");
        $__internal_bd34ee7673228f734f3e06064024b5221926876ac3ae135c5c41d3a4b6e9dc1d->enter($__internal_bd34ee7673228f734f3e06064024b5221926876ac3ae135c5c41d3a4b6e9dc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JukeboxJukeboxBundle:Jukebox:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd34ee7673228f734f3e06064024b5221926876ac3ae135c5c41d3a4b6e9dc1d->leave($__internal_bd34ee7673228f734f3e06064024b5221926876ac3ae135c5c41d3a4b6e9dc1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2fa428108c9c818c07f0f6c26072769102dccb8f9b89509366dfced1a65f08f = $this->env->getExtension("native_profiler");
        $__internal_d2fa428108c9c818c07f0f6c26072769102dccb8f9b89509366dfced1a65f08f->enter($__internal_d2fa428108c9c818c07f0f6c26072769102dccb8f9b89509366dfced1a65f08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Artistas";
        
        $__internal_d2fa428108c9c818c07f0f6c26072769102dccb8f9b89509366dfced1a65f08f->leave($__internal_d2fa428108c9c818c07f0f6c26072769102dccb8f9b89509366dfced1a65f08f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_51eb59b886b9a4b39c1c30dc9d5c91a2fd17eafc80fbfbb509538d75e0f1d979 = $this->env->getExtension("native_profiler");
        $__internal_51eb59b886b9a4b39c1c30dc9d5c91a2fd17eafc80fbfbb509538d75e0f1d979->enter($__internal_51eb59b886b9a4b39c1c30dc9d5c91a2fd17eafc80fbfbb509538d75e0f1d979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artistas"]) ? $context["artistas"] : $this->getContext($context, "artistas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artista"]) {
            // line 7
            echo "        <article class=\"artista\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["artista"], "fechanacimiento", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["artista"], "fechanacimiento", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jukebox_jukebox_show", array("id" => $this->getAttribute($context["artista"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["artista"], "descripcion", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("jukebox_jukebox_show", array("id" => $this->getAttribute($context["artista"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este jukebox</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artista'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_51eb59b886b9a4b39c1c30dc9d5c91a2fd17eafc80fbfbb509538d75e0f1d979->leave($__internal_51eb59b886b9a4b39c1c30dc9d5c91a2fd17eafc80fbfbb509538d75e0f1d979_prof);

    }

    public function getTemplateName()
    {
        return "JukeboxJukeboxBundle:Jukebox:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  82 => 15,  78 => 14,  69 => 10,  62 => 8,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }
}
/* {# src/Jukebox/JukeboxBundle/Resources/views/Jukebox/list.html.twig #}*/
/* {% extends "JukeboxJukeboxBundle::layout.html.twig" %}*/
/* {% block title %}List of Artistas{% endblock %}*/
/* */
/* {% block body %}*/
/*     {% for artista in artistas %}*/
/*         <article class="artista">*/
/*             <div class="date"><time datetime="{{ artista.fechanacimiento|date('c') }}">{{ artista.fechanacimiento|date('l, F j, Y') }}</time></div>*/
/*             <header>*/
/*                 <h2><a href="{{ path('jukebox_jukebox_show', { 'id': artista.id }) }}">{{ artista.nombre }}</a></h2>*/
/*             </header>*/
/* */
/*             <div class="snippet">*/
/*                 <p>{{ artista.descripcion(200) }}</p>*/
/*                 <p class="continue"><a href="{{ path('jukebox_jukebox_show', { 'id': artista.id }) }}">Seguir leyendo...</a></p>*/
/*             </div>*/
/* */
/*             <footer class="meta">*/
/*                 <p>Comentarios: -</p>*/
/*             </footer>*/
/*         </article>*/
/*     {% else %}*/
/*         <p>No hay entradas en este jukebox</p>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
