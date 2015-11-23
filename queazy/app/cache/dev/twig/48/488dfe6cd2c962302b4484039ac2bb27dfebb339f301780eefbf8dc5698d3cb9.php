<?php

/* base.html.twig */
class __TwigTemplate_d32f0c2bed5089bae91e54522593cff151abede4d04807e4bf61b5bde1397046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef2a61264ec37e43abfda547d4252ac61e8f4d57d03d0cd7998323f91eadd541 = $this->env->getExtension("native_profiler");
        $__internal_ef2a61264ec37e43abfda547d4252ac61e8f4d57d03d0cd7998323f91eadd541->enter($__internal_ef2a61264ec37e43abfda547d4252ac61e8f4d57d03d0cd7998323f91eadd541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ef2a61264ec37e43abfda547d4252ac61e8f4d57d03d0cd7998323f91eadd541->leave($__internal_ef2a61264ec37e43abfda547d4252ac61e8f4d57d03d0cd7998323f91eadd541_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_58e9d2291f535e9ee392fe9b53234f449e68edc5c9ff99680548898fb40a0caf = $this->env->getExtension("native_profiler");
        $__internal_58e9d2291f535e9ee392fe9b53234f449e68edc5c9ff99680548898fb40a0caf->enter($__internal_58e9d2291f535e9ee392fe9b53234f449e68edc5c9ff99680548898fb40a0caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_58e9d2291f535e9ee392fe9b53234f449e68edc5c9ff99680548898fb40a0caf->leave($__internal_58e9d2291f535e9ee392fe9b53234f449e68edc5c9ff99680548898fb40a0caf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d40169fd0c3874f977204e5920d7e730e9746e9398abea6fbad71a8e474c86d = $this->env->getExtension("native_profiler");
        $__internal_9d40169fd0c3874f977204e5920d7e730e9746e9398abea6fbad71a8e474c86d->enter($__internal_9d40169fd0c3874f977204e5920d7e730e9746e9398abea6fbad71a8e474c86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d40169fd0c3874f977204e5920d7e730e9746e9398abea6fbad71a8e474c86d->leave($__internal_9d40169fd0c3874f977204e5920d7e730e9746e9398abea6fbad71a8e474c86d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ff265ea9a62619d4975e0b735c32e259e192b4e3751d8f0bc8d41ce173e2533 = $this->env->getExtension("native_profiler");
        $__internal_9ff265ea9a62619d4975e0b735c32e259e192b4e3751d8f0bc8d41ce173e2533->enter($__internal_9ff265ea9a62619d4975e0b735c32e259e192b4e3751d8f0bc8d41ce173e2533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9ff265ea9a62619d4975e0b735c32e259e192b4e3751d8f0bc8d41ce173e2533->leave($__internal_9ff265ea9a62619d4975e0b735c32e259e192b4e3751d8f0bc8d41ce173e2533_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_781aa1a3667e1177850a39420947d715c980dd75fcb1127f87d7ca3d4d05e86c = $this->env->getExtension("native_profiler");
        $__internal_781aa1a3667e1177850a39420947d715c980dd75fcb1127f87d7ca3d4d05e86c->enter($__internal_781aa1a3667e1177850a39420947d715c980dd75fcb1127f87d7ca3d4d05e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_781aa1a3667e1177850a39420947d715c980dd75fcb1127f87d7ca3d4d05e86c->leave($__internal_781aa1a3667e1177850a39420947d715c980dd75fcb1127f87d7ca3d4d05e86c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
