<?php

/* lucky/number.html.twig */
class __TwigTemplate_090502071a1ce4ed32c55848fded868d9a62d9d164541a4ab0d5bb4123bb8aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24be02a0d0add9465c8612932252741f14325c0154648347980b65f0e00094c8 = $this->env->getExtension("native_profiler");
        $__internal_24be02a0d0add9465c8612932252741f14325c0154648347980b65f0e00094c8->enter($__internal_24be02a0d0add9465c8612932252741f14325c0154648347980b65f0e00094c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24be02a0d0add9465c8612932252741f14325c0154648347980b65f0e00094c8->leave($__internal_24be02a0d0add9465c8612932252741f14325c0154648347980b65f0e00094c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db2ff1867bc799c1b39bbb8d0de4cf5951f4f4b194d77f9f0121f80a4e4b9ee9 = $this->env->getExtension("native_profiler");
        $__internal_db2ff1867bc799c1b39bbb8d0de4cf5951f4f4b194d77f9f0121f80a4e4b9ee9->enter($__internal_db2ff1867bc799c1b39bbb8d0de4cf5951f4f4b194d77f9f0121f80a4e4b9ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_db2ff1867bc799c1b39bbb8d0de4cf5951f4f4b194d77f9f0121f80a4e4b9ee9->leave($__internal_db2ff1867bc799c1b39bbb8d0de4cf5951f4f4b194d77f9f0121f80a4e4b9ee9_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <h1>Lucky Numbers: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
