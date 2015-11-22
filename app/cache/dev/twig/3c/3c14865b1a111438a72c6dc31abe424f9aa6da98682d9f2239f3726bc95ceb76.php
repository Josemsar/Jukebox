<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c69d2c74f4003f8a31dc8b2add4a5888b6ab3f0646cd9da80173845d17b9df6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db7614515c28f8f8be98ee02c5e3b2b944d7f303d845af0ba2f548df632e9f7 = $this->env->getExtension("native_profiler");
        $__internal_6db7614515c28f8f8be98ee02c5e3b2b944d7f303d845af0ba2f548df632e9f7->enter($__internal_6db7614515c28f8f8be98ee02c5e3b2b944d7f303d845af0ba2f548df632e9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db7614515c28f8f8be98ee02c5e3b2b944d7f303d845af0ba2f548df632e9f7->leave($__internal_6db7614515c28f8f8be98ee02c5e3b2b944d7f303d845af0ba2f548df632e9f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a4ff0c1771e3ca076c28f72ff6adc5fcee5c596a1f1656eb9aa14261abd3a0b = $this->env->getExtension("native_profiler");
        $__internal_1a4ff0c1771e3ca076c28f72ff6adc5fcee5c596a1f1656eb9aa14261abd3a0b->enter($__internal_1a4ff0c1771e3ca076c28f72ff6adc5fcee5c596a1f1656eb9aa14261abd3a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1a4ff0c1771e3ca076c28f72ff6adc5fcee5c596a1f1656eb9aa14261abd3a0b->leave($__internal_1a4ff0c1771e3ca076c28f72ff6adc5fcee5c596a1f1656eb9aa14261abd3a0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b632faf818f0f09d0f6e874a7fda1590e42adc49e619fb805f2d264fa475d39 = $this->env->getExtension("native_profiler");
        $__internal_9b632faf818f0f09d0f6e874a7fda1590e42adc49e619fb805f2d264fa475d39->enter($__internal_9b632faf818f0f09d0f6e874a7fda1590e42adc49e619fb805f2d264fa475d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b632faf818f0f09d0f6e874a7fda1590e42adc49e619fb805f2d264fa475d39->leave($__internal_9b632faf818f0f09d0f6e874a7fda1590e42adc49e619fb805f2d264fa475d39_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e96b6ea95c643d63207dae0110d8ef7701831e27f5e8ddffc50aecf41f23885 = $this->env->getExtension("native_profiler");
        $__internal_3e96b6ea95c643d63207dae0110d8ef7701831e27f5e8ddffc50aecf41f23885->enter($__internal_3e96b6ea95c643d63207dae0110d8ef7701831e27f5e8ddffc50aecf41f23885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3e96b6ea95c643d63207dae0110d8ef7701831e27f5e8ddffc50aecf41f23885->leave($__internal_3e96b6ea95c643d63207dae0110d8ef7701831e27f5e8ddffc50aecf41f23885_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
