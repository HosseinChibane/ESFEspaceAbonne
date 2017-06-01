<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ec60a874105fd08413a5ec4695d97ffc0b43431952b94463f9ef14f9a9df6134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_5ee9a9c6e82a10ac5b6a2210fcc86f882df61ea8d9a8a437ffb2fdbbfc503e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ee9a9c6e82a10ac5b6a2210fcc86f882df61ea8d9a8a437ffb2fdbbfc503e94->enter($__internal_5ee9a9c6e82a10ac5b6a2210fcc86f882df61ea8d9a8a437ffb2fdbbfc503e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_29f33b40507b1cda060ec14f567ad102b5431ecce0cbaf5476d48f6a2694cd81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f33b40507b1cda060ec14f567ad102b5431ecce0cbaf5476d48f6a2694cd81->enter($__internal_29f33b40507b1cda060ec14f567ad102b5431ecce0cbaf5476d48f6a2694cd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ee9a9c6e82a10ac5b6a2210fcc86f882df61ea8d9a8a437ffb2fdbbfc503e94->leave($__internal_5ee9a9c6e82a10ac5b6a2210fcc86f882df61ea8d9a8a437ffb2fdbbfc503e94_prof);

        
        $__internal_29f33b40507b1cda060ec14f567ad102b5431ecce0cbaf5476d48f6a2694cd81->leave($__internal_29f33b40507b1cda060ec14f567ad102b5431ecce0cbaf5476d48f6a2694cd81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2afa734061f03d8425210b2bbf16fc066acadc8bbbbc8c69ce1512b72c35c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2afa734061f03d8425210b2bbf16fc066acadc8bbbbc8c69ce1512b72c35c97->enter($__internal_f2afa734061f03d8425210b2bbf16fc066acadc8bbbbc8c69ce1512b72c35c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_96f491a9b621670b28b2e4176dae7f916eb41fa136151fbd4f4f3e645f2438bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f491a9b621670b28b2e4176dae7f916eb41fa136151fbd4f4f3e645f2438bb->enter($__internal_96f491a9b621670b28b2e4176dae7f916eb41fa136151fbd4f4f3e645f2438bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_96f491a9b621670b28b2e4176dae7f916eb41fa136151fbd4f4f3e645f2438bb->leave($__internal_96f491a9b621670b28b2e4176dae7f916eb41fa136151fbd4f4f3e645f2438bb_prof);

        
        $__internal_f2afa734061f03d8425210b2bbf16fc066acadc8bbbbc8c69ce1512b72c35c97->leave($__internal_f2afa734061f03d8425210b2bbf16fc066acadc8bbbbc8c69ce1512b72c35c97_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
