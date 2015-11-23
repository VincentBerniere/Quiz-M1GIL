<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ea39e9f2a5386d527eaa069ca932c62891cd4f74ed0e6a85c0fa52a0fa6d23b4 extends Twig_Template
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
        $__internal_050298b9a6d1a0f582297abd2d647731bb25d6f1e54b7252014f683ed1b91643 = $this->env->getExtension("native_profiler");
        $__internal_050298b9a6d1a0f582297abd2d647731bb25d6f1e54b7252014f683ed1b91643->enter($__internal_050298b9a6d1a0f582297abd2d647731bb25d6f1e54b7252014f683ed1b91643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_050298b9a6d1a0f582297abd2d647731bb25d6f1e54b7252014f683ed1b91643->leave($__internal_050298b9a6d1a0f582297abd2d647731bb25d6f1e54b7252014f683ed1b91643_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6afe2928f443cccb0d3c403970fd85575536c9b37681bae42155612ecfab13e8 = $this->env->getExtension("native_profiler");
        $__internal_6afe2928f443cccb0d3c403970fd85575536c9b37681bae42155612ecfab13e8->enter($__internal_6afe2928f443cccb0d3c403970fd85575536c9b37681bae42155612ecfab13e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6afe2928f443cccb0d3c403970fd85575536c9b37681bae42155612ecfab13e8->leave($__internal_6afe2928f443cccb0d3c403970fd85575536c9b37681bae42155612ecfab13e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d837b9fe9a3dfbc0eb03778f217ff416fae73ce87ce81f5f15fa05aeaa2fa84 = $this->env->getExtension("native_profiler");
        $__internal_7d837b9fe9a3dfbc0eb03778f217ff416fae73ce87ce81f5f15fa05aeaa2fa84->enter($__internal_7d837b9fe9a3dfbc0eb03778f217ff416fae73ce87ce81f5f15fa05aeaa2fa84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d837b9fe9a3dfbc0eb03778f217ff416fae73ce87ce81f5f15fa05aeaa2fa84->leave($__internal_7d837b9fe9a3dfbc0eb03778f217ff416fae73ce87ce81f5f15fa05aeaa2fa84_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_962e1afbb06407fb801cb59f7bec46479ade8a31d11b1174065449f33e3f00ef = $this->env->getExtension("native_profiler");
        $__internal_962e1afbb06407fb801cb59f7bec46479ade8a31d11b1174065449f33e3f00ef->enter($__internal_962e1afbb06407fb801cb59f7bec46479ade8a31d11b1174065449f33e3f00ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_962e1afbb06407fb801cb59f7bec46479ade8a31d11b1174065449f33e3f00ef->leave($__internal_962e1afbb06407fb801cb59f7bec46479ade8a31d11b1174065449f33e3f00ef_prof);

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
