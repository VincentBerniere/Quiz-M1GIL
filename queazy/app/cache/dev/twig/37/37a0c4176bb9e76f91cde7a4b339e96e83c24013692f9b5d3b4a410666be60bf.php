<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_9fbc5a5e8a6c0710ff5a92a51992b6a9ec2f9f79e8052a8b5e63ce6369204839 extends Twig_Template
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
        $__internal_ded197ff89d4ea076d3b8f4a109fba3d7af509bb247eedc0e1adde6a5ed7198f = $this->env->getExtension("native_profiler");
        $__internal_ded197ff89d4ea076d3b8f4a109fba3d7af509bb247eedc0e1adde6a5ed7198f->enter($__internal_ded197ff89d4ea076d3b8f4a109fba3d7af509bb247eedc0e1adde6a5ed7198f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ded197ff89d4ea076d3b8f4a109fba3d7af509bb247eedc0e1adde6a5ed7198f->leave($__internal_ded197ff89d4ea076d3b8f4a109fba3d7af509bb247eedc0e1adde6a5ed7198f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
