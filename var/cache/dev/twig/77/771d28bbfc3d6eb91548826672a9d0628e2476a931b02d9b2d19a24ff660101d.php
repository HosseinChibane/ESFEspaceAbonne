<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e45ec3581ae4645c1a35829c95ac9490ff4d77734490c2ba094e9e590d4f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_c8e5e75cbaa68d494f1c8328b4d8bcc285f6e8e67778544a8c1d5746115e9e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e5e75cbaa68d494f1c8328b4d8bcc285f6e8e67778544a8c1d5746115e9e53->enter($__internal_c8e5e75cbaa68d494f1c8328b4d8bcc285f6e8e67778544a8c1d5746115e9e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_8803782318f29eaa46b0efbfb3850e9f3db5855b8faa5798d072085aa1bb18f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8803782318f29eaa46b0efbfb3850e9f3db5855b8faa5798d072085aa1bb18f9->enter($__internal_8803782318f29eaa46b0efbfb3850e9f3db5855b8faa5798d072085aa1bb18f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8e5e75cbaa68d494f1c8328b4d8bcc285f6e8e67778544a8c1d5746115e9e53->leave($__internal_c8e5e75cbaa68d494f1c8328b4d8bcc285f6e8e67778544a8c1d5746115e9e53_prof);

        
        $__internal_8803782318f29eaa46b0efbfb3850e9f3db5855b8faa5798d072085aa1bb18f9->leave($__internal_8803782318f29eaa46b0efbfb3850e9f3db5855b8faa5798d072085aa1bb18f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73c43b09bae3fec61683eed72ec15cbdfada9fd83a66f3dcbe6bcd4901421178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c43b09bae3fec61683eed72ec15cbdfada9fd83a66f3dcbe6bcd4901421178->enter($__internal_73c43b09bae3fec61683eed72ec15cbdfada9fd83a66f3dcbe6bcd4901421178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b61b4f9e15a39df17c0a99455c951d79daa041b551be3bf3601ad733355e2d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61b4f9e15a39df17c0a99455c951d79daa041b551be3bf3601ad733355e2d3c->enter($__internal_b61b4f9e15a39df17c0a99455c951d79daa041b551be3bf3601ad733355e2d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_b61b4f9e15a39df17c0a99455c951d79daa041b551be3bf3601ad733355e2d3c->leave($__internal_b61b4f9e15a39df17c0a99455c951d79daa041b551be3bf3601ad733355e2d3c_prof);

        
        $__internal_73c43b09bae3fec61683eed72ec15cbdfada9fd83a66f3dcbe6bcd4901421178->leave($__internal_73c43b09bae3fec61683eed72ec15cbdfada9fd83a66f3dcbe6bcd4901421178_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
