<?php

/* GILQueazyBundle:Default:index.html.twig */
class __TwigTemplate_0e44d8b0aac328e3e4ac7cdfba159ed17fe42ad8c11e0b5305a0aa9702a2dfc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e5604557af47efe2c3511eb1e9ab131ae6fea07182a341fafd8542f366f637f = $this->env->getExtension("native_profiler");
        $__internal_4e5604557af47efe2c3511eb1e9ab131ae6fea07182a341fafd8542f366f637f->enter($__internal_4e5604557af47efe2c3511eb1e9ab131ae6fea07182a341fafd8542f366f637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GILQueazyBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_4e5604557af47efe2c3511eb1e9ab131ae6fea07182a341fafd8542f366f637f->leave($__internal_4e5604557af47efe2c3511eb1e9ab131ae6fea07182a341fafd8542f366f637f_prof);

    }

    public function getTemplateName()
    {
        return "GILQueazyBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
