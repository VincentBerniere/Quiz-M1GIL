<?php

/* base.html.twig */
class __TwigTemplate_dc7c9dcb1041dd035466cc130577f13ffc8052092a427ec79207b88863b4106a extends Twig_Template
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
        $__internal_9de7fa7cf3d1e5bf2b29f2809568c35106556f0bc0a91e65ce6f2b1b9bd73191 = $this->env->getExtension("native_profiler");
        $__internal_9de7fa7cf3d1e5bf2b29f2809568c35106556f0bc0a91e65ce6f2b1b9bd73191->enter($__internal_9de7fa7cf3d1e5bf2b29f2809568c35106556f0bc0a91e65ce6f2b1b9bd73191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9de7fa7cf3d1e5bf2b29f2809568c35106556f0bc0a91e65ce6f2b1b9bd73191->leave($__internal_9de7fa7cf3d1e5bf2b29f2809568c35106556f0bc0a91e65ce6f2b1b9bd73191_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb7fe1906ba8f7f5c3543ab3940531815481b16531a545bfa8d1fde6092848f8 = $this->env->getExtension("native_profiler");
        $__internal_cb7fe1906ba8f7f5c3543ab3940531815481b16531a545bfa8d1fde6092848f8->enter($__internal_cb7fe1906ba8f7f5c3543ab3940531815481b16531a545bfa8d1fde6092848f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb7fe1906ba8f7f5c3543ab3940531815481b16531a545bfa8d1fde6092848f8->leave($__internal_cb7fe1906ba8f7f5c3543ab3940531815481b16531a545bfa8d1fde6092848f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51a66cfc01e060a12896c1316625ed160695a6b755c7bef88cfd06ed0d2d82a5 = $this->env->getExtension("native_profiler");
        $__internal_51a66cfc01e060a12896c1316625ed160695a6b755c7bef88cfd06ed0d2d82a5->enter($__internal_51a66cfc01e060a12896c1316625ed160695a6b755c7bef88cfd06ed0d2d82a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51a66cfc01e060a12896c1316625ed160695a6b755c7bef88cfd06ed0d2d82a5->leave($__internal_51a66cfc01e060a12896c1316625ed160695a6b755c7bef88cfd06ed0d2d82a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_45f273010366fa470b85347a39c2b95f0d912e838ac1ae7c360ded3c653281b1 = $this->env->getExtension("native_profiler");
        $__internal_45f273010366fa470b85347a39c2b95f0d912e838ac1ae7c360ded3c653281b1->enter($__internal_45f273010366fa470b85347a39c2b95f0d912e838ac1ae7c360ded3c653281b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45f273010366fa470b85347a39c2b95f0d912e838ac1ae7c360ded3c653281b1->leave($__internal_45f273010366fa470b85347a39c2b95f0d912e838ac1ae7c360ded3c653281b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_454f983041a5d0f763d5454efd211988b55b4383efbd84bb85e884b5afaac079 = $this->env->getExtension("native_profiler");
        $__internal_454f983041a5d0f763d5454efd211988b55b4383efbd84bb85e884b5afaac079->enter($__internal_454f983041a5d0f763d5454efd211988b55b4383efbd84bb85e884b5afaac079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_454f983041a5d0f763d5454efd211988b55b4383efbd84bb85e884b5afaac079->leave($__internal_454f983041a5d0f763d5454efd211988b55b4383efbd84bb85e884b5afaac079_prof);

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
