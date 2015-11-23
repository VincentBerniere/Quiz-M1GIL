<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7ec41242040d6d7061c59f7cea2dae566844115bc01cd12a8a66f5a5c2169c6f extends Twig_Template
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
        $__internal_43f46d9737e7e07124fcfde5196b0deaf941b29a71344db565b96dd942d25b83 = $this->env->getExtension("native_profiler");
        $__internal_43f46d9737e7e07124fcfde5196b0deaf941b29a71344db565b96dd942d25b83->enter($__internal_43f46d9737e7e07124fcfde5196b0deaf941b29a71344db565b96dd942d25b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43f46d9737e7e07124fcfde5196b0deaf941b29a71344db565b96dd942d25b83->leave($__internal_43f46d9737e7e07124fcfde5196b0deaf941b29a71344db565b96dd942d25b83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_644c230b8c9cec9c74c81fb1475b81fa90ae65149043dfcce602b3a49cf377cb = $this->env->getExtension("native_profiler");
        $__internal_644c230b8c9cec9c74c81fb1475b81fa90ae65149043dfcce602b3a49cf377cb->enter($__internal_644c230b8c9cec9c74c81fb1475b81fa90ae65149043dfcce602b3a49cf377cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_644c230b8c9cec9c74c81fb1475b81fa90ae65149043dfcce602b3a49cf377cb->leave($__internal_644c230b8c9cec9c74c81fb1475b81fa90ae65149043dfcce602b3a49cf377cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace96570ca920889a0e5c0ee1305a10a38fcb970acb88a5b15eb7f2253ddd47c = $this->env->getExtension("native_profiler");
        $__internal_ace96570ca920889a0e5c0ee1305a10a38fcb970acb88a5b15eb7f2253ddd47c->enter($__internal_ace96570ca920889a0e5c0ee1305a10a38fcb970acb88a5b15eb7f2253ddd47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ace96570ca920889a0e5c0ee1305a10a38fcb970acb88a5b15eb7f2253ddd47c->leave($__internal_ace96570ca920889a0e5c0ee1305a10a38fcb970acb88a5b15eb7f2253ddd47c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c704d5efe4128262cd686f54c43d0da8eed151eff4c102057250864f91508773 = $this->env->getExtension("native_profiler");
        $__internal_c704d5efe4128262cd686f54c43d0da8eed151eff4c102057250864f91508773->enter($__internal_c704d5efe4128262cd686f54c43d0da8eed151eff4c102057250864f91508773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c704d5efe4128262cd686f54c43d0da8eed151eff4c102057250864f91508773->leave($__internal_c704d5efe4128262cd686f54c43d0da8eed151eff4c102057250864f91508773_prof);

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
