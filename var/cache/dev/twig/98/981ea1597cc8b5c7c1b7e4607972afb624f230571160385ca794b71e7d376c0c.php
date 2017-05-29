<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_07fd936e6b37bb528bbf9cce186f101a3c454ea4ac6b47b00d7f29bde621bcdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c858a3a0b9a445283aae4e0bc3cb05981375d9a1eef00d4a150bd432b4a5709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c858a3a0b9a445283aae4e0bc3cb05981375d9a1eef00d4a150bd432b4a5709->enter($__internal_0c858a3a0b9a445283aae4e0bc3cb05981375d9a1eef00d4a150bd432b4a5709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5b1715577c857f3344e132a22219cfc2f19c007083f2692490d1b10075494221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1715577c857f3344e132a22219cfc2f19c007083f2692490d1b10075494221->enter($__internal_5b1715577c857f3344e132a22219cfc2f19c007083f2692490d1b10075494221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c858a3a0b9a445283aae4e0bc3cb05981375d9a1eef00d4a150bd432b4a5709->leave($__internal_0c858a3a0b9a445283aae4e0bc3cb05981375d9a1eef00d4a150bd432b4a5709_prof);

        
        $__internal_5b1715577c857f3344e132a22219cfc2f19c007083f2692490d1b10075494221->leave($__internal_5b1715577c857f3344e132a22219cfc2f19c007083f2692490d1b10075494221_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69fef2a5c2073403efd791aed78d28e2dacae95b76469701b1c6e5301fd559af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fef2a5c2073403efd791aed78d28e2dacae95b76469701b1c6e5301fd559af->enter($__internal_69fef2a5c2073403efd791aed78d28e2dacae95b76469701b1c6e5301fd559af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c580c1c2fc32a7d8674e34d16fbb175714de840674088766b7d491b04a22c328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c580c1c2fc32a7d8674e34d16fbb175714de840674088766b7d491b04a22c328->enter($__internal_c580c1c2fc32a7d8674e34d16fbb175714de840674088766b7d491b04a22c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c580c1c2fc32a7d8674e34d16fbb175714de840674088766b7d491b04a22c328->leave($__internal_c580c1c2fc32a7d8674e34d16fbb175714de840674088766b7d491b04a22c328_prof);

        
        $__internal_69fef2a5c2073403efd791aed78d28e2dacae95b76469701b1c6e5301fd559af->leave($__internal_69fef2a5c2073403efd791aed78d28e2dacae95b76469701b1c6e5301fd559af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
