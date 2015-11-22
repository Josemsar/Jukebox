<?php

/* ::base.html.twig */
class __TwigTemplate_74710af171d71c1ff3abe04086bbf61610903e1aca007f5d068a40ba6b0119cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66307d21cbc78a6b817a9540d0cef908a811968acb76eec17422a896076619f0 = $this->env->getExtension("native_profiler");
        $__internal_66307d21cbc78a6b817a9540d0cef908a811968acb76eec17422a896076619f0->enter($__internal_66307d21cbc78a6b817a9540d0cef908a811968acb76eec17422a896076619f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        
        $__internal_66307d21cbc78a6b817a9540d0cef908a811968acb76eec17422a896076619f0->leave($__internal_66307d21cbc78a6b817a9540d0cef908a811968acb76eec17422a896076619f0_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd3bf5758ec9ca6f8c625fd017131000d31ad6e1f61d3fb6f5317e7b884d80e0 = $this->env->getExtension("native_profiler");
        $__internal_cd3bf5758ec9ca6f8c625fd017131000d31ad6e1f61d3fb6f5317e7b884d80e0->enter($__internal_cd3bf5758ec9ca6f8c625fd017131000d31ad6e1f61d3fb6f5317e7b884d80e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_cd3bf5758ec9ca6f8c625fd017131000d31ad6e1f61d3fb6f5317e7b884d80e0->leave($__internal_cd3bf5758ec9ca6f8c625fd017131000d31ad6e1f61d3fb6f5317e7b884d80e0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_173bc827fb2e4240b4f3841ba5c328d1316b14a4f8e2b36cafa4bedd15e6f8cf = $this->env->getExtension("native_profiler");
        $__internal_173bc827fb2e4240b4f3841ba5c328d1316b14a4f8e2b36cafa4bedd15e6f8cf->enter($__internal_173bc827fb2e4240b4f3841ba5c328d1316b14a4f8e2b36cafa4bedd15e6f8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_173bc827fb2e4240b4f3841ba5c328d1316b14a4f8e2b36cafa4bedd15e6f8cf->leave($__internal_173bc827fb2e4240b4f3841ba5c328d1316b14a4f8e2b36cafa4bedd15e6f8cf_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0252364f74d0bf506c6612911b214f8fc4b5062962efa23b207268cae3ff57b3 = $this->env->getExtension("native_profiler");
        $__internal_0252364f74d0bf506c6612911b214f8fc4b5062962efa23b207268cae3ff57b3->enter($__internal_0252364f74d0bf506c6612911b214f8fc4b5062962efa23b207268cae3ff57b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"#\">Inicio</a></li>
                                <li><a href=\"#\">Sobre mi</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("jukebox_jukebox_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_0252364f74d0bf506c6612911b214f8fc4b5062962efa23b207268cae3ff57b3->leave($__internal_0252364f74d0bf506c6612911b214f8fc4b5062962efa23b207268cae3ff57b3_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_1a4557261afe345de8f4f9e0649ebcb329dfc61b95d2a76da6391ef7758b111a = $this->env->getExtension("native_profiler");
        $__internal_1a4557261afe345de8f4f9e0649ebcb329dfc61b95d2a76da6391ef7758b111a->enter($__internal_1a4557261afe345de8f4f9e0649ebcb329dfc61b95d2a76da6391ef7758b111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_1a4557261afe345de8f4f9e0649ebcb329dfc61b95d2a76da6391ef7758b111a->leave($__internal_1a4557261afe345de8f4f9e0649ebcb329dfc61b95d2a76da6391ef7758b111a_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_b1478880dd8b41b6e34c648af2bec3fb66c5a8e99b0abd631f9758304fa2a6c5 = $this->env->getExtension("native_profiler");
        $__internal_b1478880dd8b41b6e34c648af2bec3fb66c5a8e99b0abd631f9758304fa2a6c5->enter($__internal_b1478880dd8b41b6e34c648af2bec3fb66c5a8e99b0abd631f9758304fa2a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creando un blog en Symfony2</a>";
        
        $__internal_b1478880dd8b41b6e34c648af2bec3fb66c5a8e99b0abd631f9758304fa2a6c5->leave($__internal_b1478880dd8b41b6e34c648af2bec3fb66c5a8e99b0abd631f9758304fa2a6c5_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_a43d382658be8ae2510883421448bacbbde5d328660fc4d5135fb3320c0718d4 = $this->env->getExtension("native_profiler");
        $__internal_a43d382658be8ae2510883421448bacbbde5d328660fc4d5135fb3320c0718d4->enter($__internal_a43d382658be8ae2510883421448bacbbde5d328660fc4d5135fb3320c0718d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a43d382658be8ae2510883421448bacbbde5d328660fc4d5135fb3320c0718d4->leave($__internal_a43d382658be8ae2510883421448bacbbde5d328660fc4d5135fb3320c0718d4_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_18ce0dcec6a0ab549773f8c88686595af116f467efcfa964bd34b38fa6b688f6 = $this->env->getExtension("native_profiler");
        $__internal_18ce0dcec6a0ab549773f8c88686595af116f467efcfa964bd34b38fa6b688f6->enter($__internal_18ce0dcec6a0ab549773f8c88686595af116f467efcfa964bd34b38fa6b688f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_18ce0dcec6a0ab549773f8c88686595af116f467efcfa964bd34b38fa6b688f6->leave($__internal_18ce0dcec6a0ab549773f8c88686595af116f467efcfa964bd34b38fa6b688f6_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_bbe549b0f854d0ccb73387f82d5fa5f07428dfc32f95884809beec5b3fc49bd5 = $this->env->getExtension("native_profiler");
        $__internal_bbe549b0f854d0ccb73387f82d5fa5f07428dfc32f95884809beec5b3fc49bd5->enter($__internal_bbe549b0f854d0ccb73387f82d5fa5f07428dfc32f95884809beec5b3fc49bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_bbe549b0f854d0ccb73387f82d5fa5f07428dfc32f95884809beec5b3fc49bd5->leave($__internal_bbe549b0f854d0ccb73387f82d5fa5f07428dfc32f95884809beec5b3fc49bd5_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d38e969589cbed93fb4abb65ada0b0fa02645fc8926ce0e524d158dbf0986b5c = $this->env->getExtension("native_profiler");
        $__internal_d38e969589cbed93fb4abb65ada0b0fa02645fc8926ce0e524d158dbf0986b5c->enter($__internal_d38e969589cbed93fb4abb65ada0b0fa02645fc8926ce0e524d158dbf0986b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d38e969589cbed93fb4abb65ada0b0fa02645fc8926ce0e524d158dbf0986b5c->leave($__internal_d38e969589cbed93fb4abb65ada0b0fa02645fc8926ce0e524d158dbf0986b5c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 53,  214 => 48,  208 => 47,  197 => 43,  186 => 40,  174 => 35,  162 => 34,  151 => 27,  145 => 23,  139 => 22,  130 => 13,  126 => 11,  120 => 10,  108 => 6,  99 => 54,  97 => 53,  92 => 50,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  69 => 35,  65 => 34,  60 => 31,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }
}
/* <!-- app/Resources/views/base.html.twig -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />*/
/*         <title>{% block title %}symblog{% endblock %} - symblog</title>*/
/*         <!--[if lt IE 9]>*/
/*             <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*         <![endif]-->*/
/*         {% block stylesheets %}*/
/*             <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>*/
/*             <link href="{{ asset('css/screen.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* */
/*         <section id="wrapper">*/
/*             <header id="header">*/
/*                 <div class="top">*/
/*                     {% block navigation %}*/
/*                         <nav>*/
/*                             <ul class="navigation">*/
/*                                 <li><a href="#">Inicio</a></li>*/
/*                                 <li><a href="#">Sobre mi</a></li>*/
/*                                 <li><a href="{{ path('jukebox_jukebox_contact')}}">Contacto</a></li>*/
/*                             </ul>*/
/*                         </nav>*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*                 <hgroup>*/
/*                     <h2>{% block blog_title %}<a href="#">symblog</a>{% endblock %}</h2>*/
/*                     <h3>{% block blog_tagline %}<a href="#">creando un blog en Symfony2</a>{% endblock %}</h3>*/
/*                 </hgroup>*/
/*             </header>*/
/* */
/*             <section class="main-col">*/
/*                 {% block body %}{% endblock %}*/
/*             </section>*/
/*             <aside class="sidebar">*/
/*                 {% block sidebar %}{% endblock %}*/
/*             </aside>*/
/* */
/*             <div id="footer">*/
/*                 {% block footer %}*/
/*                     Blog en Symfony2 - creado por <a href="http://carloslaorden.com">Carlos Laorden</a>, con la ayuda de <a href="https://github.com/dsyph3r">dsyph3r</a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
